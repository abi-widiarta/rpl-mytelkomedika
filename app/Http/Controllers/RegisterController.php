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
            'username'      => 'required|min:3|max:15|unique:patients',
            'email'         => 'required|max:50|unique:patients|email:dns,rfc',
            'password'      => 'required|max:15|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'nim'           => 'required|size:10|unique:patients',
        ]);

        return view('client.registerProfiling' , 
        [
            "username" => $validatedData['username'],
            "email" => $validatedData['email'],
            "password" => $validatedData['password'],
            "nim" => $validatedData['nim'],
        ]);
    }

    public function storeComplete(Request $request) {
        $request['name']  = $request['first_name'] . " " . $request['last_name'];

        $validatedData = $request->validate([
            'name'          => 'required|max:50',
            'no_hp'         => 'required|max:13',
            'alamat'        => 'required|max:50',
            'jenis_kelamin' => 'required|max:1'
        ]);

        $validatedData['username'] = $request['username'];
        $validatedData['nim'] = $request['nim'];
        $validatedData['email'] = $request['email'];
        $validatedData['password'] = bcrypt($request['password']);
        $validatedData['tanggal_lahir'] = $request['tanggal_lahir'];

        Patient::create($validatedData);

        return redirect('/login');
    }
}
