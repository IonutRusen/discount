<?php

namespace App\Http\Controllers\admin;

use App\Profile;
use Illuminate\Http\Request;

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
    public function addNew(){
        return view('admin.addnew', ['logo' => Profile::whereUser_id(\Auth::user()->id)->first()->company_logo]);
    }
}
