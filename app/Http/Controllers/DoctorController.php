<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dataDokter',["doctors" => Doctor::all()]);
    }

    public function indexClient(Request $request)
    {
        $doctors = Doctor::query();

        $doctors->when($request->poli, function($query) use ($request) {
            return $query->where('spesialisasi', $request->poli);
        })->whereHas('schedule_time', function ($query) {
            $query->whereNotNull('schedule_time_id'); // Sesuaikan dengan nama kolom di tabel pivot
        });

        $doctors = $doctors->paginate(10);
        
        return view('client.lakukanReservasi',["doctors" => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dataDokterTambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageExtension = $request->file('image')->getClientOriginalExtension();
        $image_path = $request->file('image')->storeAs('img', $request->username . "." . $imageExtension,['disk' => 'public']);

        Doctor::create([
            "name" => $request->name,
            "email" => $request->email,
            "username" => $request->username,
            "password" => bcrypt($request->password),
            "spesialisasi" => $request->poli,
            "status" => $request->status,
            "no_str" => $request->no_str,
            "no_hp" => $request->no_hp,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tanggal_lahir" => $request->tanggal_lahir,
            "alamat" => $request->alamat,
            "image" => "/uploads/" . $image_path,
        ]);

        return redirect('/admin/data-dokter')->with('success','Data added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($username)
    {
        try {
            $doctor = Doctor::where('username',$username)->firstOrFail();

            return view('admin.dataDokterEdit',["doctor" => $doctor]);
        } catch (ModelNotFoundException $exception) {
            return view("client.notFound",["exception" => $exception]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $username)
    {   
        $doctor = Doctor::where('username',$username)->firstOrFail();

        if($request->file('image') != null) {
            
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $image_path = $request->file('image')->storeAs('img', $request->username . "." . $imageExtension,['disk' => 'public']);
            $doctor->update([
                "name" => $request->name,
                "email" => $request->email,
                "username" => $request->username,
                "spesialisasi" => $request->poli,
                "status" => $request->status,
                "no_str" => $request->no_str,
                "no_hp" => $request->no_hp,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tanggal_lahir" => $request->tanggal_lahir,
                "alamat" => $request->alamat,
                "image" => "/uploads/" . $image_path,
            ]);
        } else {
            $doctor->update([
                "name" => $request->name,
                "email" => $request->email,
                "username" => $request->username,
                "spesialisasi" => $request->poli,
                "status" => $request->status,
                "no_str" => $request->no_str,
                "no_hp" => $request->no_hp,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tanggal_lahir" => $request->tanggal_lahir,
                "alamat" => $request->alamat,
            ]);
        }
        return redirect('/admin/data-dokter/edit/' . $request->username)->with('success','Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Doctor::where('id', $id)->delete();

        return redirect('/admin/data-dokter')->with('success', 'Data has been deleted successfully!');
    }
}
