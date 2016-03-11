<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Country;
use App\Invoice;
use App\Location;
use App\Profile;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subscription;

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
        $category = Category::lists('name', 'id');
        $defaultSelection = [''=>'Please Select'];
        $category = $defaultSelection + $category->toArray();
        $user = \Auth::id();
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
                'subscriptions.no_vouchers as nrTotal',
                'subscriptions.no_complex_vouchers as NrComplexVoucher',
                'subscriptions.location_filter',
                'subscriptions.gender_filter',
                'subscriptions.age_filter'


            )->get();

        foreach($data as $element)
            $filter = array(
                'nrTotal' => $element->nrTotal,
                'NrComplexVoucher' => $element->NrComplexVoucher,
                'location_filter' => $element->location_filter,
                'gender_filter' => $element->gender_filter,
                'age_filter' => $element->age_filter
            );

        return view('admin.addnew', ['logo' => $logo],compact('category'))->with($filter);
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

}
