<?php

namespace App\Http\Controllers\admin;


use App\City;


use App\Coupon;
use App\Http\Controllers\Controller;
use App\Location;
use Carbon\Carbon;
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
    public function getLocationbyId(Request $request){
            $locationid = $request['id'];
            $result = Location::where('id', $locationid)->get(array('name','id'));
                return \Response::json($result);
        }

    public function getallCoupons(){

        //$vouchers = Coupon::where('user_id',\Auth::id())->select('description','value','type','complex','validity','category','id')->get();
        $user = \Auth::id();
        $vouchers = \DB::table('coupons')
            ->join('categories', function ($join) use ($user){

                $join->on('categories.id', '=', 'coupons.category')
                    ->where('coupons.user_id', '=', $user);
            })->join('locations', 'locations.id', '=', 'coupons.location')
            ->select(
                'coupons.description',
                'coupons.complex',
                'categories.name as category',
                'locations.name',
                'coupons.validity',
                'coupons.id as coupon_id'
            )->get();



        foreach($vouchers as $object) {
           $object->coupon_id = "<a class='fa fa-times fa-lg text-danger' href=removecoupon/$object->coupon_id></a> ";


            if ( $object->validity == '0000-00-00 00:00:00'){
                $object->validity = 'Indefinitely' ;
            }else {
                $object->validity = Carbon::parse($object->validity)->format('d-M-Y');
            }

          if(  $object->complex == 0 ){
              $object->complex = '<span class="text-danger "><strong>NO</strong></span>';

          }elseif ( $object->complex == 1 )
              $object->complex = '<span class="text-success"><strong>YES</strong></span>';
        }

        return $vouchers;
    }
}
