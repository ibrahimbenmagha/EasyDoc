<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Validator;


class DoctorsController extends Controller
{
   

    public function getApprovedAppointments()
{
    $doctorId = auth()->user()->id; // Get the ID of the authenticated doctor
    
    $appointments = Appointment::where('isApproved', true)
        ->where('id_doc', $doctorId)
        ->get();
    
    return response()->json(['appointments' => $appointments]);
}


public function getAllDoctors(Request $request)
{
    $doctors = Doctor::all();

    return response()->json($doctors);
}



}