<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speciality;

class SpecialityController extends Controller
{
    public function getAllSpecialities()
    {
        $specialities = Speciality::all();
        return response()->json($specialities, 200);
    }
}

