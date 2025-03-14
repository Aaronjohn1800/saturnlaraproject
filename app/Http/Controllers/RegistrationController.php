<?php 

namespace app\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        

        // Hash the password before storing it
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['firstname'] =$request->firstname;
        $validatedData['lastname'] = $request->lastname;

        // Create the user
        User::create($validatedData);

        // Redirect to the login page with a success message
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
