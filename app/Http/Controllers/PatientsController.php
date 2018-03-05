<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;

class PatientsController extends Controller
{
    public function index()
    {
      $patients = Patient::orderBy('id', 'desc')->paginate(10);
      return view('patients.index', compact('patients'));
    }

    public function show($id)
    {
      $patient = Patient::find($id);
      return view('patients.show', compact('patient'));
    }

    public function create()
    {
      return view('patients.create');
    }

    public function store(PatientRequest $request)
    {
      $patient = Patient::create([
        'name' => $request->input('name'),
        'ci' => $request->input('ci'),
        'email' => $request->input('email'),
        'local_phone' => $request->input('local_phone'),
        'personal_phone' => $request->input('personal_phone'),
        'address' => $request->input('address'),
      ]);

      return Redirect()->route('patients.index')
        ->with('info', 'El paciente fue guardado');
    }

    public function edit($id)
    {
      $patient = Patient::find($id);
      return view('patients.edit', compact('patient'));
    }

    public function update(PatientRequest $request, $id)
    {

      $patient = Patient::find($id);
      $patient->name = $request->input('name');
      $patient->ci = $request->input('ci');
      $patient->email = $request->input('email');
      $patient->local_phone = $request->input('local_phone');
      $patient->personal_phone = $request->input('personal_phone');
      $patient->address = $request->input('address');

      $patient->save();
      return Redirect()->route('patients.index')
        ->with('info', 'El paciente fue actualizado');
    }

    public function destroy($id)
    {
      $patient = Patient::find($id);
      $patient->delete();
      return back()->with('info', 'El Paciente ha sido eliminado');
    }
}
