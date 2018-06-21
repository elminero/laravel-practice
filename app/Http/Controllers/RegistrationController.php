<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }


    public function store()
    {

        // validate

        $this->validate(request(), [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed'
        ]);


        // create and save the user

        $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password'))
        ]);


        auth()->login($user);

        // sign then in

        // redirect to the home page

        return redirect()->home();
    }

}
