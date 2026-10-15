<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\cvs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class cvsController extends Controller
{
    
    public function index() {
        $cvs = cvs::all();
        
        return view("home", ["cvs" => $cvs]); // returns view with data

    }

    public function search(Request $request) {
        $query = $request->input('searchfield');
        $toggler = $request->input('toggle');
        //gets the location of the row based on the table 




        if ($query && !$request->filled('toggle')) {
            $cvs = cvs::where('name', 'LIKE', "%{$query}%")->get(); //gets the location of the row based on the name
        } elseif ($query && $toggler === "TRUE") {
            $cvs = cvs::where('keyprogramming', 'LIKE', "%{$query}%")->get(); // based on programming   
        } else {
            $cvs = cvs::all(); // resets if empty
        }

        
        return view("home", ["cvs" => $cvs]); // returns view with data

    }








    public function login(Request $request) { 
        
        $request->validate([
            'email' => 'required|min:3|email',
            'password' => [
                'required',
                Password::min(8)->mixedCase()->numbers()->symbols(),
            ] // login validation, strong passwords are enforced here
        ]);


        $credentials = $request->only('email', 'password'); // turn into an array

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        } // attempt to authenticate with database
        // if successful, go to root as an authenticated user
        // else return with an error

        return redirect()->back();
    }



    public function signup(Request $request) {
        $svalidated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:cvs,email',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)->mixedCase()->numbers()->symbols(),
            ]

        ]); // account creation validation, needed to ensure set rules such as password rules, and ensure real emails are being typed

        $signcredentials = $request->only('email', 'password'); // turn into an array, get login details

        $svalidated['password'] = Hash::make($svalidated['password']);

        cvs::create($svalidated);

        if (Auth::attempt($signcredentials)) {
            $request->session()->regenerate();
            return redirect('/');
        } // login done automatically upon sign up


        return redirect()->back();

    }



    public function delete() {
        
        $accountDelete = Auth::user();

        if (!$accountDelete) {
            abort(403);
        }; // if you somehow got here as a guest, this will abort the operation to prevent any form of
        // arbitrary deletion by checking if accountDelete is null

        Auth::logout(); // prevents a logged in user to be logged into an account that no longer exists
        $accountDelete->delete(); // if Vscode or any other IDE complains abt this, dont worry, its fully functional, i tested it
        // happens because of the null check above

        return redirect('/');
    }



    public function logout() {
        
        $accountLogout = Auth::user();

        if (!$accountLogout) {
            abort(403);
        }; // if you somehow got here as a guest, this will abort the operation to prevent any form of
        // arbitrary deletion by checking if accountDelete is null

        Auth::logout(); // same as above but doesnt delete account
         

        return redirect('/');

    }




     public function edit(Request $request) {
        $accountEdit = Auth::user();

        $request->validate([
            'keyprogramming' => 'max:255',
            'profile' => 'max:255',
            'education' => 'max:500',
            'URLlinks' => 'max:500',
        ]); // basic validation
        
        


        $accountEdit->update([
            'keyprogramming' => $request->keyprogramming,
            'profile' => $request->profile,
            'education' => $request->education,
            'URLlinks' => $request->URLlinks,
        ]); // updates tables in database with the stuff that got submitted in the form

        return redirect('/');

    }


}
