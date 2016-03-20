<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddCustomerProfile extends Controller
{
    public function addProfile(Request $request){

        $this->validate($request, [
            'age' => "required|integer|min:0|max:90",
            'gender' => "required|integer|in:0,1",
            'country' => 'required|integer',
            'state' => 'required|integer',

        ]);


        $age = $request['age'];
        $gender = $request['gender'];
        $country = $request['country'];
        $state = $request['state'];
        $city = $request['city'];
        $user_id = \Auth::id();

        //vezi daca are deja profil
        $check = ClientProfile::where('user_id', '=', $user_id)->first();

        if($check) {
            $profile = ClientProfile::where('user_id', '=', $user_id)->first();
                $profile['age'] = $age;
                $profile['gender'] = $gender;
                $profile['country'] = $country;
                $profile['state'] = $state;
                $profile['city'] = $city;


            $profile->save();
        }else{

        $profile = new ClientProfile();
            $profile['age'] = $age;
            $profile['gender'] = $gender;
            $profile['country'] = $country;
            $profile['state'] = $state;
            $profile['city'] = $city;
            $profile['user_id'] = $user_id;

        $profile->save();
        }
        return redirect('/profile');
    }
}
