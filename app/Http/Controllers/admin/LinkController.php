<?php

namespace App\Http\Controllers\admin;

use App\AgeFilter;
use App\Category;
use App\Country;
use App\Coupon;
use App\Invoice;
use App\Location;
use App\Profile;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class LinkController extends Controller
{

    public function getLogo(){



        }
    public function getProfile(){

        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        $country = Country::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];

        $country = $defaultSelection + $country->toArray();
        $user = \Auth::id();
        $data = \DB::table('subscriptions')
            ->join('profiles', function ($join) use ($user){

                $join->on('profiles.subscription_id', '=', 'subscriptions.id')
                    ->where('profiles.user_id', '=', $user);
            })
            ->select(
                'subscriptions.locations_no as NrLocatii'
            )->get();
        foreach ($data as $elem) {
            $NrLocatii = array(
                'NrLocatii' => $elem->NrLocatii,
            );
            break;
        };
        $locations = Location::whereUser_id(\Auth::id())->get();
        $nrLocatiiActive = count($locations);

        return view('admin.profile', ['logo' => $logo],compact('category', 'country', 'locations','nrLocatiiActive'))->with($NrLocatii);
    }
    //---------------- END GET Profile ---------------------------
    public function getSubscription(){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        return view('admin.subscriptions', ['logo' => $logo]);
        }
    public function getInvoice($type){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        if($type > 1 && $type < 5) {

            return view('admin.invoice', ['logo' => $logo])->with('type', $type);
        }else{
            return redirect('admin/subscriptions');
        }
    }

    public function addNew(){

        $status = Profile::where('user_id', '=', \Auth::id())->first()->status;
        if($status == 0){
            return redirect('admin/invoices');
        }
        $locations = Location::where('user_id',\Auth::id())->lists('name','id');
        if(count($locations) == 0){
            return redirect('admin/profile')->with('message', 'Define your location(s) first');;
        }
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
      //  return $cupoanefolosite;
        $agefilter = AgeFilter::lists('name','id');
        $category = Category::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];

        $category = $defaultSelection + $category->toArray();
        $agefilter = $defaultSelection + $agefilter->toArray();

        $locations = $defaultSelection + $locations->toArray();

        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        $data = \DB::table('profiles')
            ->join('subscriptions', function ($join) use ($user){

                $join->on('profiles.subscription_id', '=', 'subscriptions.id')
                    ->where('profiles.user_id', '=', $user);
            })
             ->select(
                'profiles.user_id as User',
                'profiles.subscription_id as Pachet',
                'profiles.end_cicle as cicle',
                'subscriptions.no_vouchers as nrTotal',
                'subscriptions.no_complex_vouchers as NrComplexVoucher',
                'subscriptions.location_filter',
                'subscriptions.gender_filter',
                'subscriptions.age_filter'


            )->get();

        foreach($data as $element){
            $filter = array(
                'nrTotal' => $element->nrTotal,
                'NrComplexVoucher' => $element->NrComplexVoucher,
                'location_filter' => $element->location_filter,
                'gender_filter' => $element->gender_filter,
                'age_filter' => $element->age_filter,
                'cicle' => $element->cicle,
            );
            break;
        };

        return view('admin.addnew', ['logo' => $logo],compact('category','locations','agefilter','cupoanefolosite'))->with($filter);
    }

    public function addNewComplex(){

        $status = Profile::where('user_id', '=', \Auth::id())->first()->status;
        if($status == 0){
            return redirect('admin/invoices');
        }
        $locations = Location::where('user_id',\Auth::id())->lists('name','id');
        if(count($locations) == 0){
            return redirect('admin/profile')->with('message', 'Define your location(s) first');;
        }
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
            ->where('coupons.complex','=','1')
            ->get());
        //  return $cupoanefolosite;
        $agefilter = AgeFilter::lists('name','id');
        $category = Category::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];

        $category = $defaultSelection + $category->toArray();
        $agefilter = $defaultSelection + $agefilter->toArray();

        $locations = $defaultSelection + $locations->toArray();

        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        $data = \DB::table('profiles')
            ->join('subscriptions', function ($join) use ($user){

                $join->on('profiles.subscription_id', '=', 'subscriptions.id')
                    ->where('profiles.user_id', '=', $user);
            })
            ->select(
                'profiles.user_id as User',
                'profiles.subscription_id as Pachet',
                'profiles.end_cicle as cicle',
                'subscriptions.no_vouchers as nrTotal',
                'subscriptions.no_complex_vouchers as NrComplexVoucher',
                'subscriptions.location_filter',
                'subscriptions.gender_filter',
                'subscriptions.age_filter'


            )->get();

        foreach($data as $element){
            $filter = array(
                'nrTotal' => $element->nrTotal,
                'NrComplexVoucher' => $element->NrComplexVoucher,
                'location_filter' => $element->location_filter,
                'gender_filter' => $element->gender_filter,
                'age_filter' => $element->age_filter,
                'cicle' => $element->cicle,
            );
            break;
        };
        //taie accesul daca nu are abonament
        if( $filter['NrComplexVoucher'] == 0){
            return redirect('admin/dashboard')->with('message','You need to update your account in order to access this section');
        }
        return view('admin.addnewComplex', ['logo' => $logo],compact('category','locations','agefilter','cupoanefolosite'))->with($filter);
    }

    public function getInvoices(){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
        $invoices = Invoice::where('user_id', \Auth::id())->get();



        return view('admin.invoices', ['logo' => $logo])->with('invoices',$invoices);
        }


    public function getAllVouchers(){
                if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
                    $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
                }else {
                    $logo = 'logo.png';
                }


            return view('admin.allcoupons', ['logo' => $logo]);
        }

    public function getCouponWon(){
        if (isset(Profile::whereUser_id(\Auth::user()->id)->first()->company_logo)){
            $logo =  Profile::whereUser_id(\Auth::user()->id)->first()->company_logo  ;
        }else {
            $logo = 'logo.png';
        }
            return view('admin.couponWon', ['logo' => $logo]);
        }


}
