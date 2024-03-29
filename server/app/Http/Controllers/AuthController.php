<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

use Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void 
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */

     public function register(Request $request) {
        $userValidator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'surname' => 'required|string',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'string',
        ]);
        
        if($userValidator->fails()){
            return response()->json($userValidator->errors()->toJson(), 400);
        }
        
        $user = User::create(array_merge(
            $userValidator->validated(),
            ['password' => bcrypt($request->password),
        //    'role' => 'doctor', // Set the role to 'doctor'
            ]
        ));
        
        $doctorValidator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'surname' => 'required|string',
            'email' => 'required|string|email|max:100|unique:doctors',
            'addressCabinet' => 'required|string',
            'phone' => 'required|string',
            'specialite' => 'required|string',
        ]);
        
        if ($doctorValidator->fails()) {
            // Delete the user if doctor validation fails
            $user->delete();
            return response()->json($doctorValidator->errors()->toJson(), 400);
        }
        
        $doctor = Doctor::create(array_merge(
            $doctorValidator->validated(),
            ['user_id' => $user->id]
        ));
        
        return response()->json([
            'message' => 'User and Doctor successfully registered',
            'user' => $user,
            'doctor' => $doctor
        ], 201);
    }


    public function login(Request $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);
    }
    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
 

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user(),
            'role' => $user->role, // Include the 'role' field in the token response

        ]);
    }
}