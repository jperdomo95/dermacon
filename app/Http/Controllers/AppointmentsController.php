<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function create()
    {
      return view('appointments.create');
    }
}
