<?php

namespace App\Http\Controllers\front;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function getClientCoupons(){

        //$vouchers = Coupon::where('user_id',\Auth::id())->select('description','value','type','complex','validity','category','id')->get();
       $user = \Auth::id();
        $vouchers = \DB::table('coupons as c')
            ->join('categories as cat ', 'cat.id', '=', 'c.category')
            ->join('profiles as p', 'p.user_id', '=', 'c.user_id')
            ->where('c.won_by','=',$user)
            ->select(
                'p.company_logo as logo',
                'c.value as valoare',
                'cat.name as categorie',

                'c.validity',
                'c.id'
            )

            ->get();

        foreach($vouchers as $object) {
            $object->logo = '<img width="50px" src="administrare/src/logos/'.$object->logo.' "/>'    ;
            $data = @unserialize($object->valoare );

            if($data !== false) {
            $valoare = "";
                foreach ($data as $val=>$key) {
                    $valoare .= "Step $val = $key<br/>";
                }
            $object->valoare = $valoare;
            }
            $object->id = '<a href="showvoucher/'.$object->id.'">Show</a>';
            $object->validity = Carbon::parse($object->validity)->format('d M Y');


        }



        return $vouchers;
    }
}
