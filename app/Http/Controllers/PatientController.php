<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.dataPasien",["patients" => Patient::all()]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'gender' => 'required',
            'email' => 'required|unique:users|email:rfc,dns',
            'birthdate' => 'required'
        ]);

        $validatedData['google_id'] = null;

        User::create($validatedData);

        return redirect('/admin-data-pasien');
    }

    public function destroy(Request $request) {
        Patient::where('id', $request->id)->delete();
        return redirect('/admin-data-pasien');
    }

    public function edit($username) {
        try {
            $patient = Patient::where('username',$username)->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return view("client.notFound",["exception" => $exception]);
        }

        return $patient;
    }

    public function update(Request $request, string $id) {
        Patient::find($id)
            ->update(['name' => $request->name,'gender' => $request->gender, 'birthdate' => $request->birthdate]);
        return redirect('/admin-data-pasien');
    }
}
