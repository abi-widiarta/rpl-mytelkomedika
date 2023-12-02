<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function index() {
        return "index register";
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:15|unique:patients',
            'email' => 'required|max:50|unique:patients|email:dns,rfc',
            'password' => 'required|max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'nim' => 'required|size:10|unique:patients',
        ]);

        // cek format email
        if (!Str::endsWith($validatedData['email'], '@student.telkomuniversity.ac.id')) {
            return back()->withErrors(['format_email' => 'Please use an Telkom University student email']);
        }

        // buat request ke api dengan parameter nim
        $studentId = $validatedData['nim'];
        $apiEndpoint = "http://127.0.0.1:5000/search_mahasiswa?student_id={$studentId}";
    
        $apiResponse = Http::get($apiEndpoint);
    
        // cek respon api
        if ($apiResponse->successful()) {
            // ambil field text dari response
            $apiData = $apiResponse->json();
            $mahasiswaText = $apiData['mahasiswa'][0]['text'];
    
            // cek apakah ada nim dan universitas telkom di response
            if (strpos($mahasiswaText, $studentId) !== false && strpos($mahasiswaText, 'UNIVERSITAS TELKOM') !== false) {
                // jika valid, encrypt password dan buat records baru
                $validatedData['password'] = bcrypt($request['password']);
        
                $patient = Patient::create($validatedData);
        
                event(new Registered($patient));
        
                Auth::login($patient);
                
                return redirect('/email/verify');
            } else {
                return back()->withErrors(['validasi_nim' => 'NIM not registered in Telkom University']);
            }  
        } else {
            return back()->withErrors(['validasi_nim' => 'Invalid NIM']);
        }
    }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'username'      => 'required|min:3|max:15|unique:patients',
    //         'email'         => 'required|max:50|unique:patients|email:dns,rfc',
    //         'password'      => 'required|max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
    //         'nim'           => 'required|size:10|unique:patients',
    //     ]);

    //     $validatedData['password'] = bcrypt($request['password']);

    //     $patient = Patient::create($validatedData);

    //     event(new Registered($patient));
        
    //     Auth::login($patient);

    //     return redirect('/email/verify');
    // }

    // public function storeComplete(Request $request) {
    //     $request['name']  = $request['first_name'] . " " . $request['last_name'];

    //     $validatedData = $request->validate([
    //         'name'          => 'required|max:50',
    //         'no_hp'         => 'required|max:13',
    //         'alamat'        => 'required|max:50',
    //         'jenis_kelamin' => 'required|max:1'
    //     ]);

    //     $validatedData['username'] = $request['username'];
    //     $validatedData['nim'] = $request['nim'];
    //     $validatedData['email'] = $request['email'];
    //     $validatedData['password'] = bcrypt($request['password']);
    //     $validatedData['tanggal_lahir'] = $request['tanggal_lahir'];

    //     Patient::create($validatedData);

    //     return redirect('/login');
    // }
}
