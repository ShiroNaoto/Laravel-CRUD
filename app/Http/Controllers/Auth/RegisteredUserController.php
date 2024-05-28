<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Division;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'acctype' => ['required', 'string'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'division_id' => ['required', 'numeric'],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'division_id' => $request->division_id,
                'acctype' => $request->acctype,
                'username' => $request->username,
            ]);
            event(new Registered($user));
    
            return redirect()->route('home')->with('success','Successfully Registered');
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
    
            // Check for unique constraint violation error code
            if ($errorCode == 1062) {
                // Unique constraint violation for email or username
                return redirect()->route('auth.register')->with('error', 'Failed to create user. Email or username is already in use.');
            }
    
            // Handle other database errors if needed
            throw $e;
        }
    }
    
        public function showname1(){
    $user = Auth::user();
    return view('admin.dashboard', ['user' => $user]); 
        }

        public function showname2(){
    $user = Auth::user();
    return view('admin.usertable', ['user' => $user]); 
        }

        public function authName1(){
    $user = Auth::user();
    return view('user.dashboard', ['user' => $user]); 
        }

        public function index(){
            $divisions = Division::all();
            return view('auth.register', ['divisions' => $divisions]);

        }

}