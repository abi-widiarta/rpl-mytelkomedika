<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return "index register";
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            // 'username' => 'required|max:15',
            // 'name' => 'required|max:50',
            // 'email' => 'required|max:50|unique:patients',
            // 'password' => 'required|max:15',
            // 'nim' => 'required|max:10',
            // 'no_hp' => 'required|max:13',
            // 'alamat' => 'required|max:50',
            // 'jenis_kelamin' => 'required|max:1',
            // 'tanggal_lahir' => 'required',

            'username'      => 'min:3|max:15|unique:patients',
            'name'          => 'max:50',
            'email'         => 'max:50|unique:patients|email:dns,rfc',
            'password'      => 'max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'nim'           => 'size:10|unique:patients',
            'no_hp'         => 'max:13',
            'alamat'        => 'max:50',
            'jenis_kelamin' => 'max:1'
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['name'] = "asd";
        $validatedData['no_hp'] = "0090909";
        $validatedData['alamat'] = "jl asd";
        $validatedData['jenis_kelamin'] = "P";
        $validatedData['tanggal_lahir'] = "2003-04-01";
    

        // $validatedData['admin_id'] = 321;

        Patient::create($validatedData);

        return redirect('/login');
    }
}
