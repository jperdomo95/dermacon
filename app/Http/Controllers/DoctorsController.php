<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;

class DoctorsController extends Controller
{
    public function index()
    {
      $doctors = Doctor::orderBy('id', 'desc')->paginate(10);
      return view('/doctors/index', compact('doctors'));
    }

    public function show($id)
    {
      $doctor = Doctor::find($id);
      return view("doctors.show", compact('doctor'));
    }

    public function create()
    {
      return view('doctors.create');
    }

    public function store(DoctorRequest $request)
    {
      $user = Doctor::create([
        'name' => $request->input('name'),
        'ci' => $request->input('ci'),
        'email' => $request->input('email'),
        'description' => $request->input('description'),
      ]);
      /*$user = new User;
      $user->username = $request->input('username');
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));

      $user->save();*/

      return Redirect()->route('doctors.index')
        ->with('info', 'El doctor fue guardado');
    }

    public function edit($id)
    {
      $doctor = Doctor::find($id);
      return view('doctors.edit', compact('doctor'));
    }

    public function update(DoctorRequest $request, $id)
    {
      $doctor = Doctor::find($id);

      $doctor->name = $request->input('name');
      $doctor->ci = $request->input('ci');
      $doctor->email = $request->input('email');
      $doctor->description = $request->input('description');

      $doctor->save();

      return Redirect()->route('doctors.index')
        ->with('info', 'El usuario fue actualizado');
    }

    public function destroy($id)
    {
      $doctor = Doctor::find($id);
      $doctor->delete();
      return back()->with('info', 'El Doctor ha sido eliminado');
    }

    public function appointments($id)
    {
      $doctors = Doctor::find($id);
      $patients = $doctors->patients()->paginate(10);
      //$appointments = $doctors->patients()->get();
      return view('appointments.index', compact('patients'));
      //die($doctors->appointments());
    }
}
