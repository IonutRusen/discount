<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GetAndServeCoupon extends Controller
{

    public  function getCouponsByCutomerCountry(){

        $category = 10;


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

        foreach($data as $object) {
                $object->City = unserialize($object->City);

            }

        return GetAndServeCoupon::filterByGender($data,$city,$state,$gender,$age);


        }

    public function filterByGender($data,$city,$state,$gender,$age){
        $cupoane = $data;

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


        return GetAndServeCoupon::filterByAge($cupoane,$city1,$state1,$age1);

    }

    public function filterByAge($cupoane,$city1,$state1,$age1){

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
        return GetAndServeCoupon::filterByState($data,$city1,$state1);
        }


    public function filterByState($data,$city1,$state1){
            $cupoane = $data;
            $city = $city1;
            $state = $state1;

        $arr=array($state);
        foreach ($cupoane as $key => $obj) {
            if (in_array($obj->StateId, $arr)) {
                unset($cupoane[$key]);
            }
        }

        return GetAndServeCoupon::filterByCity($cupoane,$city);
        }

        public function filterByCity($cupoane,$city){
            $data = $cupoane;
            $city1 = $city;


                foreach ($cupoane as $key => $obj) {

                    if (!in_array($city1,$obj->City)) {
                        unset($data[$key]);
                    }
                   return $obj->id;
                }
            if (!$data){
                echo  'nu' ;
            }else{
                echo 'da';
            }
        }


}

