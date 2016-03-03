<?php

namespace App\Http\Controllers\admin;

use App\Profile;
use App\User;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function getDashboard()
    {

        return view('admin.dashboard', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo]);
    }
    public function postSignUp(Request $request){

        $this->validate($request, [
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'firstname' => 'min:5|required'
        ]);

        $email = $request['email'];
        $firstname = $request['firstname'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->firstname = $firstname;
        $user->password = $password;

        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);

       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
           return redirect()->route('dashboard');
           Auth::login($user);
       }
            return redirect()->back()->with('message', 'Login Failed');;
    }
}
