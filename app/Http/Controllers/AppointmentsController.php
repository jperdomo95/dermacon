<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\DB;

class AppointmentsController extends Controller
{

  public function SeeAppointmentsByDoctor($id)
  {
    $doctors = Doctor::find($id);
    $patients = $doctors->patients()->paginate(10);
    //$appointments = $doctors->patients()->get();
    return view('appointments.index', compact('patients'));
    //die($doctors->appointments());
  }

    public function create(Patient $patient)
    {
      $doctors = Doctor::select('id', 'name')->orderBy('name', 'asc')->get();
      return view('appointments.create',
      [
        'doctors' => $doctors,
        'patient' => $patient,
      ]);
    }

    public function store(AppointmentRequest $request)
    {
      if(!isset($request->doctor)){
        die('Debes seleccionar un doctor');
      }

      if(!isset($request->motive)){
          die('Debes indicar el motivo');
      }

      if(!isset($request->date)){
        die('la fecha no puede estar vacía');
      }else{
        $date = str_replace("-", "/", $request->date);
        $arrayDate = explode("/", $date);
        $date = $arrayDate[2]."/".$arrayDate[1]."/".$arrayDate[0];

        DB::table('doctor_patient')->insert([
            'doctor_id' => $request->doctor,
            'patient_id' => $request->patient_id,
            'date' => $date,
            'motive' => $request->motive,
        ]);

        return Redirect()->route("doctors.index")
          ->with('info', 'La cita fue asignada para la fecha '.$date);
      }
    }
}
