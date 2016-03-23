<?php

namespace App\Http\Controllers\front;

use App\ClientProfile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GetAndServeCoupon extends Controller
{
    public static function getCouponsByCutomerCountry(){

        $category = 10;


        $clientCountry = ClientProfile::where('user_id','=',\Auth::id())->first();
        $country = $clientCountry->country;

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
        return $data;

        }
}
