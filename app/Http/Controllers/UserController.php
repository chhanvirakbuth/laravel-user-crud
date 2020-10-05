<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    # LIST USER
    public function index () {

        $users = User::all();
        return view('user.index')->with('users' , $users);
    }


    # CREATE USER
    public function create () {

        return view('user.create');

    }

    # STORE OR CREATE USER
    public function store ( Request $request ){

        # DECLARE VIRALBE
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $age = $request->age;
        $dob = $request->date_of_birth;

        # INSERT TO DATABASE TABLE
        $user = new User();
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->age = $age;
        $user->date_of_birth = $dob;
        $user->save();

        # RETURN BACK INDEX
        return redirect()->route('user.index');
    }



    # TEST
    public function test () {

        return view('app');
    }
}
