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


public function getDoctorById($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['error' => 'Doctor not found'], 404);
        }

        return response()->json($doctor);
    }


//     public function getDoctorByNameOrSurnameOrBoth(Request $request)
//     {
//         $name = $request->input('name');
//         $surname = $request->input('surname');

//         $query = Doctor::query();

//         if ($name) {
//             $query->where('name', 'like', '%' . $name . '%');
//         }

//         if ($surname) {
//             $query->where('surname', 'like', '%' . $surname . '%');
//         }

//         $doctors = $query->get();

//         return response()->json($doctors);
//     }

//     public function getDoctorsByAddressCabinet(Request $request)
// {
//     $address = $request->input('address'); // Get the value of the 'address' parameter from the request
    
//     $doctors = Doctor::where('addressCabinet', 'LIKE', "%$address%")->get();

//     return response()->json(['doctors' => $doctors]);
// }



public function getDoctorsByAddressOrName(Request $request)
{
    $address = $request->input('address'); // Get the value of the 'address' parameter from the request
    $name = $request->input('name'); // Get the value of the 'name' parameter from the request

    $query = Doctor::query();

    if ($address) {
        $query->where('addressCabinet', 'LIKE', "%$address%");
    }

    if ($name) {
        // $query->where(function ($query) use ($name) {
            $query->where('name', 'LIKE', "%$name%")
                ->orWhere('surname', 'LIKE', "%$name%")
                ->orWhere('specialite', 'LIKE', "%$name%");

        // });
    }

    $doctors = $query->get();
    if ($doctors->isEmpty()) {
        return response()->json(['error' => 'Doctor not found'], 404);
    }

    return response()->json(['doctors' => $doctors]);
}   


}