<?php

namespace App\Http\Controllers\front;

use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class urlController extends Controller
{
    public function dashboard(){

            return view('front.dashboard')  ;
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
