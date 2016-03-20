<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class urlController extends Controller
{
    public function home(){

        if (\Auth::check()) {
            return view('front.main')  ;
        }else{
            return view('front.home')  ;
        }
    }

    public function main(){
            return view('front.main');
        }
}
