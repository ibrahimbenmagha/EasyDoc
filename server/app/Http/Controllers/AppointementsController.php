<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointementsController extends Controller
{
    public function getUnapprovedAppointments(Request $request)
    {
        $appointmentsUnapp = Appointment::where('isApproved', false)->get();

        return response()->json($appointments);
    }

    public function getApprovedAppointments(Request $request)
    {
        $appointments = Appointment::where('isApproved', true)->get();

        return response()->json($appointmentsApp);
    }
}
