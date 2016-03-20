<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddCustomerProfile extends Controller
{
    public function addProfile(Request $request){

        $validator = \Validator::make($request->all(), [
            'age' => "required|integer|min:0|max:90",
            'gender' => "required|integer|in:0,1",
            'country' => 'required|integer|min:0',
            'state' => 'required|integer|min:0',
            'city' => 'required|integer|min:0'
        ]);

            if ($validator->fails()) {
                return redirect('/#profile')
                    ->withErrors($validator,'fails')->with('new_token', csrf_token())
                   ;
            }

        $age = $request['age'];
        $gender = $request['gender'];
        $country = $request['country'];
        $state = $request['state'];

        $city = $request['city'];
        $user_id = \Auth::id();

        $profile = new ClientProfile();
            $profile['age'] = $age;
            $profile['gender'] = $gender;
            $profile['country'] = $country;
            $profile['state'] = $state;
            $profile['city'] = $city;
            $profile['user_id'] = $user_id;

        $profile->save();
        }
}
