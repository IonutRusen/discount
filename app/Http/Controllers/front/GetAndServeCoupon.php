<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use App\Coupon;


use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetAndServeCoupon extends Controller
{

    public  function getCouponsByCutomerCountry(Request $request){

        $category = $request['category'];


        $info = ClientProfile::where('user_id','=',\Auth::id())->first();
        $country = $info->country;
        $gender = $info->gender;
        $age = $info->age;
        $state = $info->state;
        $city = $info->city;

      $data=  \DB::table('locations')
            ->join('countries', 'countries.id', '=', 'locations.country')
            ->join('states', 'locations.county', '=', 'states.id')
            ->join('coupons', 'coupons.location', '=', 'locations.id')

            ->where('locations.country','=',$country)
            ->where('coupons.category','=',$category)


            ->select(   'coupons.id',
                        'states.id as StateId',
                        'locations.city as City',
                        'coupons.agefilter as AgeFilter',
                        'coupons.genderfilter as GenderFilter'





            )->get();

            if(!$data){
                return view('front.coupon');
            }else {
                $safeCoupon = array();
                foreach ($data as $object) {
                    $object->City = unserialize($object->City);
                    array_push($safeCoupon, $object->id);
                }

                shuffle($safeCoupon);
                $safe = $safeCoupon[0];
            }
        return GetAndServeCoupon::filterByGender($data,$city,$state,$gender,$age,$safe);


        }

    public function filterByGender($data,$city,$state,$gender,$age,$safe){
        $cupoane = $data;
            $safeCoupon = $safe;
            $city1 = $city;
            $state1 = $state;
            $gender1 = $gender;
            $age1 = $age;


            if ($gender1 == 1) {
                $gender1 = 'm';
            }elseif($gender1 == 0){
                $gender1 = 'f';
            }



        $arr=array($gender1,'all');
        foreach ($cupoane as $key => $obj) {
            if (!in_array($obj->GenderFilter, $arr)) {
                unset($cupoane[$key]);
            }
        }
        if(!$cupoane){
            return view('front.coupon')->with($safeCoupon);
        }else {

            return GetAndServeCoupon::filterByAge($cupoane, $city1, $state1, $age1,$safeCoupon);
        }
    }

    public function filterByAge($cupoane,$city1,$state1,$age1,$safeCoupon){
        $safe = $safeCoupon;
        $data = $cupoane;
        $city = $city1;
        $state = $state1;
        $age = $age1;



            if ($age >= 18 && $age < 24) {
                $age = 1;
            }elseif($age >= 25 && $age < 34) {
                $age = 2;
            }elseif($age >= 35 && $age < 44) {
                $age = 3;
            }elseif($age >= 45 && $age < 54) {
                $age = 4;
            }elseif($age >= 55 && $age < 64) {
                $age = 5;
            }elseif($age >= 65) {
                $age = 6;
            }


        $arr=array($age,'0');
        foreach ($data as $key => $obj) {
            if (!in_array($obj->AgeFilter, $arr)) {
                unset($data[$key]);
                }
            }

        if(!$data){
            return view('front.coupon')->with($safe);
        }else {
            return GetAndServeCoupon::filterByState($data, $city, $state,$safe);
        }
        }


    public function filterByState($data,$city,$state,$safe){
            $safeCoupon = $safe;
            $cupoane = $data;
            $city1 = $city;
            $state1 = $state;

        $arr=array($state1);
        foreach ($cupoane as $key => $obj) {
            if (in_array($obj->StateId, $arr)) {
                unset($cupoane[$key]);
            }
        }
        if(!$cupoane){
            return view('front.coupon')->with($safeCoupon);
        }


        return GetAndServeCoupon::filterByCity($cupoane,$city1,$safeCoupon);
        }

        public function filterByCity($cupoane,$city1,$safeCoupon){
            $safe = $safeCoupon;
            $data = $cupoane;
            $city = $city1;


                foreach ($data as $key => $obj) {

                    if (!in_array($city,$obj->City)) {
                        unset($data[$key]);
                    }

                }
            if (!$data){
                return view('front.coupon')->with($safe);
            }else{

                $winners = array();
                foreach ($data as $object) {

                    array_push($winners, $object->id);
                }

                shuffle($winners);
                $winner = $winners[0];

                return GetAndServeCoupon::DaiVoucher($winner);
            }
        }




    public function DaiVoucher($id){
            $idVoucher = $id;

        $voucher = Coupon::where('id','=',$idVoucher)->get();
      //  return $voucher;
        return view('front.coupon',compact('voucher'));
        }

}

