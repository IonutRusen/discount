<?php

namespace App\Http\Controllers\admin;

use App\Coupon;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RemoveVoucher extends Controller
{
    public function delete($id){
          $user = Auth::id();
        $id = $id;
        $coupon = Coupon::find($id);

        $coupon->delete();
        return redirect()->back();
        }
}
