<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    public function index() {
        return "index register";
    }

    public function store(Request $request) {
        $validatedData = $this->validatePatient($request);

        if (!$this->isValidEmailFormat($validatedData['email'])) {
            return back()->withErrors(['format_email' => 'Please use an Telkom University student email'])->withInput();
        }

        // buat request ke api dengan parameter nim dan ambil responnya
        $apiResponse = $this->getApiData($validatedData['nim']);
    
        // cek respon api
        if ($apiResponse->successful()) {
            $apiData = $apiResponse->json();
            $mahasiswaText = $apiData['mahasiswa'][0]['text'];
            $namaMahasiswa = Str::between(Str::before($mahasiswaText, '('), '"', '"');
    
            // cek apakah ada nim dan universitas telkom di response
            if ($this->isValidNim($mahasiswaText,$validatedData['nim'])) {
                
                // cek nama yang dimasukkan di input sama atau tidak dari respon api
                if($namaMahasiswa !== strtoupper($validatedData['name'])) {
                    return back()->withErrors(['validasi_nama' => 'NIM and name not match, please enter the correct NIM and name'])->withInput();
                };

                // jika valid, encrypt password dan buat records baru
                $this->createPatient($validatedData);

                return redirect('/email/verify');
            } else {
                return back()->withErrors(['validasi_nim' => 'NIM not registered in Telkom University'])->withInput();
            }  
        } else {
            return back()->withErrors(['validasi_nim' => 'Invalid NIM'])->withInput();
        }
    }

    private function validatePatient(Request $request)
    {
        return $request->validate([
            'nim' => 'required|size:10|unique:patients',
            'name' => 'required|max:50',
            'username' => 'required|min:3|max:15|unique:patients',
            'email' => 'required|max:50|unique:patients|email:dns,rfc',
            'password' => 'required|max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
    }

    private function isValidEmailFormat($email)
    {
        return Str::endsWith($email, '@student.telkomuniversity.ac.id');
    }

    private function isValidNim($textResponse,$nim)
    {
        return strpos($textResponse, $nim) !== false && strpos($textResponse, 'UNIVERSITAS TELKOM') !== false;
    }

    private function getApiData($studentId)
    {
        $apiEndpoint = "http://127.0.0.1:5000/search_mahasiswa?student_id={$studentId}";
        return Http::get($apiEndpoint);
    }

    private function createPatient($validatedData)
    {
        $validatedData['password'] = bcrypt($validatedData['password']);
        $patient = Patient::create($validatedData);
        event(new Registered($patient));
        Auth::login($patient);
    }

    public function storeAdmin(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:3|max:15|unique:patients',
            'email' => 'required|max:50|unique:patients|email:dns,rfc',
            'password' => 'required|max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        Admin::create($validatedData);

        return redirect('/admin/login');
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
