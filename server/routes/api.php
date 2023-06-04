<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AppointmentsController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|   
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
    Route::get('/doctors', [DoctorController::class, 'getAllDoctors']);
    Route::get('/appointments/unapproved', [AppointmentsController::class, 'getUnapprovedAppointments']);



});
Route::get('specialties', [SpecialityController::class,'GetAllSpecialities']);
Route::get('/doctors', [DoctorController::class, 'getAllDoctors']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/user-profile', [AuthController::class, 'userProfile']);
Route::get('/appointments/unapproved', [AppointmentsController::class, 'getUnapprovedAppointments']);
