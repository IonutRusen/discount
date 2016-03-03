<?php

namespace App\Http\Controllers\admin;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class ProcessFormController extends Controller
{
    public function editProfile(Request $request){

        $this->validate($request, [
            'company_name'          => 'required|min:4',
            'company_tax_id'        => 'required|min:4',
            'company_reg_com'       => 'required|min:4',
            'phone'                 => 'required|numeric|min:10|',
            'company_bank_account'  => 'required',
            'company_country'       => 'required|min:4',
            'company_state'         => 'required',
            'company_city'          => 'required|min:4',
            'company_address'       => 'required|min:10',

        ]);
        $user_id                = $request['user_id'];
        $company_name           = $request['company_name'];
        $company_tax_id         = $request['company_tax_id'];
        $company_reg_com        = $request['company_reg_com'];
        $phone                  = $request['phone'];
        $company_bank_account   = $request['company_bank_account'];
        $company_country        = $request['company_country'];
        $company_state          = $request['company_state'];
        $company_city           = $request['company_city'];

        $company_address        = $request['company_address'];

        $profile = Profile::where('user_id', '=', $user_id)->first();

       if($profile){
           $profile = Profile::where('user_id', '=', $user_id)->first();
           $profile['company_name'] = $company_name;
           $profile['company_tax_id'] = $company_tax_id;
           $profile['company_reg_com'] = $company_reg_com;
           $profile['phone'] = $phone;
           $profile['company_bank_account'] = $company_bank_account;
           $profile['company_country'] = $company_country;
           $profile['company_state'] = $company_state;
           $profile['company_city'] = $company_city;
           $profile['company_address'] = $company_address;


           $profile->save();
       }else{
           $profile = new Profile($request->all());

           \Auth::user()->profile()->save($profile);
       }

       return redirect('admin/profile');
    }
    public function logo(Request $request){
        $this->validate($request, [
            'logo' => 'required|image|image_size:<=400,0-150|max:200px',



        ]);


        if (Input::hasFile('logo')) {


            $file = Input::file('logo');
            $fileName = \Auth::user()->id . '.' . $file->getClientOriginalExtension();
            Input::file('logo')->move(public_path('/administrare/src/logos'), $fileName);


            echo $user_id = \Auth::user()->id;


            Profile::where('user_id', $user_id)->update(array(
                'company_logo' => $fileName
            ));
            return redirect('admin/profile');
        }else {
             return redirect('admin/profile')->with('message','Please Select FIle');
        }
    }
}
