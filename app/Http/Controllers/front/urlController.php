<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class urlController extends Controller
{
    public function dashboard(){
        $user_id = \Auth::id();

        //vezi daca are deja profil
        $check = ClientProfile::where('user_id', '=', $user_id)->first();

        if ($check) {
            return view('front.dashboard')  ;
        }else{
            return redirect('/profile');
        }
        }



    public function acasa(){
        return view('front.home')  ;
        }

    public function profile(){
        $country = Country::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];

        $country = $defaultSelection + $country->toArray();
        return view('front.profile',compact('country'))  ;
        }


}
