<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Division;
use App\Models\Ticket;

class ProfileController extends Controller
{

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('admin.usertable');
    }

    public function usertables(){
        return view('admin.usertable');
    }

    public function divtable(){
        return view('admin.divtable');
    }

    //Prints User Database and Divisions Content//
    public function index(){

        $users = User::all();
        $divisions = Division::all();

        return view('admin.usertable', ['users' => $users, 'divisions' => $divisions]);
    }
    //Creates New User in Usertable.php
    public function addUser(Request $request){
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'acctype' => ['required', 'string'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'division_id' => ['required', 'string'],
            ]);
    
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->acctype = $request->input('acctype');
            $user->username = $request->input('username');
            $user->division_id = $request->input('division_id');
            
            $user->save();
            
            return redirect()->route('admin.usertable')->with('success','User has been created!');
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
    
            // Check for unique constraint violation error code
            if ($errorCode == 1062) {
                // Unique constraint violation for email or username
                return redirect()->route('admin.usertable')->with('error', 'Failed to create user. Email or username is already in use.');
            }
    
            // Handle other database errors if needed
            throw $e;
        }
    }    

    public function updateUser(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['sometimes', 'nullable', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($request->input('id')),],
        'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        'acctype' => ['required', 'string'],
        'username' => ['sometimes', 'nullable', 'string', 'max:255', Rule::unique('users')->ignore($request->input('id')),],
        'division_id' => ['nullable', 'string'],
    ]);

    $user = User::findOrFail($request->input('id'));
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->acctype = $request->input('acctype');
    $user->username = $request->input('username');
    $user->division_id = $request->input('division_id');

    if ($request->filled('password')) {
        $user->password = $request->input('password');
    }

    $user->save();

    // Check if related ticket exists before updating
    if (Ticket::where('user_id', $user->id)->exists()) {
        Ticket::where('user_id', $user->id)
            ->update([
                'ticketdiv' => $user->division_id,
                'staffname' => $user->name, 
                'email' => $user->email,    
            ]);

        return redirect()->route('admin.usertable')->with('success','User has been Updated!');
    }

    // Redirect to the user table even if the related ticket doesn't exist
    return redirect()->route('admin.usertable')->with('success','User has been Updated!');
}


    //Deletes User//
    public function destroyUser(Request $request)
    {
        $userId = $request->input('id');
    
        if (auth()->user()->id == $userId) {
            User::destroy($userId);

            return redirect()->route('home');
        }
    
        User::destroy($userId);
    
        return redirect()->route('admin.usertable')->with('success', 'User has been deleted successfully.');
    }
    
}