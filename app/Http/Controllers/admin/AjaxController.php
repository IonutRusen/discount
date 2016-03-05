<?php

namespace App\Http\Controllers\admin;


use App\City;


use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;
use App\State;

class AjaxController extends Controller
{
    function getState(Request $request) {
        // pass back some data
        $data = $request['id'];
        $result = State::where('country_id', $data)->get(array('id', 'name'));
        // return a JSON response
        return  \Response::json($result);
    }
    function getCity(Request $request)
    {
        // pass back some data
        $data = $request['id'];
        $result = City::where('state_id', $data)->get(array('id', 'name'));
        // return a JSON response
        return \Response::json($result);
    }
}