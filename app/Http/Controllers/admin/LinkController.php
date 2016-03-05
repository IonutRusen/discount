<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Country;
use App\Profile;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    public function getProfile(){
        return view('admin.profile', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo]);
    }
    public function getSubscription(){
        return view('admin.subscriptions', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo]);
        }
    public function getInvoice($type){

        if($type > 1 && $type < 5) {

            return view('admin.invoice', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo])->with('type', $type);
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

        return view('admin.addnew', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo],compact('category', 'country'));
    }

}
