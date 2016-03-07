<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Country;
use App\Profile;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{

    public function getLogo(){



        }
    public function getProfile(){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        return view('admin.profile', ['logo' => $logo]);
    }
    public function getSubscription(){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        return view('admin.subscriptions', ['logo' => $logo]);
        }
    public function getInvoice($type){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        if($type > 1 && $type < 5) {

            return view('admin.invoice', ['logo' => $logo])->with('type', $type);
        }else{
            return redirect('admin/subscriptions');
        }
    }

    public function addNew(){
        $category = Category::lists('name', 'id');
        $country = Country::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];
        $category = $defaultSelection + $category->toArray();
        $country = $defaultSelection + $country->toArray();
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }

        return view('admin.addnew', ['logo' => $logo],compact('category', 'country'));
    }

}
