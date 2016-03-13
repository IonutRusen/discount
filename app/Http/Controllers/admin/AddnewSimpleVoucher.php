<?php

namespace App\Http\Controllers\admin;

use App\Coupon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddnewSimpleVoucher extends Controller
{

    public function addnew(Request $request){
        $user = \Auth::id();
        $cupoanefolosite = count(\DB::table('profiles')->select(
            'coupons.id as coupon',
            'coupons.created_at',
            'profiles.end_cicle',
            'profiles.updated_at'

        )
            ->join('coupons', function ($join) use ($user){

                $join->on('profiles.user_id', '=', 'coupons.user_id')
                    ->where('coupons.user_id' ,'=' ,$user);


            })->where(\DB::raw('MONTH(coupons.created_at)'), '<=', \DB::raw('MONTH(profiles.end_cicle)'))
            ->where(\DB::raw('MONTH(coupons.created_at)'), '>=', \DB::raw('MONTH(profiles.updated_at)'))
            ->get());
        $nrtotal = \DB::table('profiles')
            ->join('subscriptions', function ($join) use ($user){

                $join->on('profiles.subscription_id', '=', 'subscriptions.id')
                    ->where('profiles.user_id', '=', $user);
            })
            ->select(
                'subscriptions.no_vouchers as nrTotal'
            )->value('nrTotal');
        $ramase = $nrtotal-$cupoanefolosite;
        if ($request['type'] == 1) {
            $this->validate($request, [
                'coupons_no' => "required|integer|max:$ramase",
                'value' => "required|integer|max:100",
                'type' => 'required|in:0,1',
                'couponcode' => 'required',
                'category' => 'required',
                'location' => 'required',
                'description' => 'required|max:150',

            ]);
        }else{
            $this->validate($request, [
                'coupons_no' => "required|integer|max:$ramase",
                'value' => "required|integer",
                'type' => 'required|in:0,1',
                'couponcode' => 'required',
                'category' => 'required',
                'location' => 'required',
                'description' => 'required|max:150',
            ]);
        }

            $value = $request['value'];
            $type = $request['type'];
            $couponcode = $request['couponcode'];
            $category = $request['category'];
            $location = $request['location'];
            if(!$request['agefilter']){
                $agefilter = 0;
            }else{
                $agefilter = $request['agefilter'];
            }

            if(!$request['genderfilter']){
                $genderfilter = 'all';
            }else{
                $genderfilter = $request['genderfilter'];
            }

            $description = $request['description'];
            $validity = $request['validity'];


          $times = $request['coupons_no'];

        for ($i=1; $i<= $times; $i++) {
            $coupon = new Coupon();
            $coupon['user_id'] = \Auth::id();
            $coupon['value'] = $value;
            $coupon['type'] = $type;
            $coupon['couponcode'] = $couponcode;
            $coupon['category'] = $category;
            $coupon['location'] = $location;
            $coupon['agefilter'] = $agefilter;
            $coupon['genderfilter'] = $genderfilter;
            $coupon['description'] = $description;
            $coupon['validity'] = $validity;

            $coupon->save();
        }
        }
}
