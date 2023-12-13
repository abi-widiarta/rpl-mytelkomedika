<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.dataPasien",["patients" => Patient::all()]);
    }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:100',
    //         'gender' => 'required',
    //         'email' => 'required|unique:users|email:rfc,dns',
    //         'birthdate' => 'required'
    //     ]);

    //     $validatedData['google_id'] = null;

    //     User::create($validatedData);

    //     return redirect('/admin-data-pasien');
    // }

    public function create() {
        return view('admin.dataPasienTambah');
    }

    public function destroy(Request $request) {
        Patient::where('id', $request->id)->delete();

        return redirect('/admin/data-pasien')->with('success', 'Data has been deleted successfully!');
    }

    public function edit($username) {
        try {
            $patient = Patient::where('username',$username)->firstOrFail();

            return view('admin.dataPasienEdit',["patient" => $patient]);
        } catch (ModelNotFoundException $exception) {
            return view("client.notFound",["exception" => $exception]);
        }

        
    }

    public function update(Request $request,$id) {
        $patient = Patient::findOrFail($id);

        try {
            $request->validate([
                'no_hp' => 'required|min:11|max:13',
                'alamat' => 'required|max:256',
            ]);
    
            $patient = Patient::findOrFail($request->id);
    
            $patient->update([
                "no_hp" => $request->no_hp,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tanggal_lahir" => $request->tanggal_lahir,
                "alamat" => $request->alamat
            ]);

            // $redirectUrl = 
    
            return back()->with('success','Update Data Success!');
        } catch (ValidationException $e) {
            // Tangkap exception jika validasi gagal
            return redirect('/admin/data-pasien/edit/' . $request->username)->with('toast_error', $e->getMessage());
        } catch (\Exception $e) {
            // Tangkap exception lain jika terjadi kesalahan lainnya
            return redirect('/admin/data-pasien/edit/' . $request->username)->withErrors(['error' => 'An error occurred while updating profile.']);
        }

        //     ->update(['name' => $request->name,'gender' => $request->gender, 'birthdate' => $request->birthdate]);
        // return redirect('/admin-data-pasien');
    }

    public function profileEdit() {
        return view("client.profile");
    }

    public function profileUpdate(Request $request) {
        try {
            $request->validate([
                'no_hp' => 'required|min:11|max:13',
                'alamat' => 'required|max:256',
            ]);
    
            $patient = Patient::findOrFail($request->id);
    
            $patient->update([
                "no_hp" => $request->no_hp,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tanggal_lahir" => $request->tanggal_lahir,
                "alamat" => $request->alamat
            ]);
    
            return redirect('/profile')->with('success','Update Profile Success!');
        } catch (ValidationException $e) {
            // Tangkap exception jika validasi gagal
            return redirect('/profile')->with('toast_error', $e->getMessage());
        } catch (\Exception $e) {
            // Tangkap exception lain jika terjadi kesalahan lainnya
            return redirect('/profile')->withErrors(['error' => 'An error occurred while updating profile.']);
        }
    }
}
