<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use App\Country;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class urlController extends Controller
{
    public function dashboard(){
        $user_id = \Auth::id();

        //vezi daca are deja profil
        $check = ClientProfile::where('user_id', '=', $user_id)->first();
        $data = \DB::table('client_profiles')
            ->join('states', 'client_profiles.state', '=', 'states.id')
            ->join('cities', 'client_profiles.city', '=', 'cities.id')
            ->where('client_profiles.user_id', '=', $user_id)
            ->select('cities.name as city', 'states.name as state')
            ->first();



        if ($check) {
            return view('front.dashboard', compact('data'))  ;
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

    public function CutomerLogout(){
            \Auth::logout();
            \Session::clear();
        return redirect('/');
        }
}
