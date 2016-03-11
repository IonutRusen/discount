<?php

namespace App\Http\Controllers\admin;

use App\Invoice;
use App\Location;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Omnipay\Omnipay;


class ProcessFormController extends Controller
{
    public function editProfile(Request $request){

        $this->validate($request, [
            'company_name'          => 'required|min:4',
            'company_tax_id'        => 'required|min:4',
            'company_reg_com'       => 'required|min:4',
            'phone'                 => 'required|numeric|min:10|',
            'company_bank_account'  => 'required',
            'company_country'       => 'required|min:4',
            'company_state'         => 'required',
            'company_city'          => 'required|min:4',
            'company_address'       => 'required|min:10',

        ]);
        $user_id                = $request['user_id'];
        $company_name           = $request['company_name'];
        $company_tax_id         = $request['company_tax_id'];
        $company_reg_com        = $request['company_reg_com'];
        $phone                  = $request['phone'];
        $company_bank_account   = $request['company_bank_account'];
        $company_country        = $request['company_country'];
        $company_state          = $request['company_state'];
        $company_city           = $request['company_city'];

        $company_address        = $request['company_address'];

        $profile = Profile::where('user_id', '=', $user_id)->first();

       if($profile){
           $profile = Profile::where('user_id', '=', $user_id)->first();
           $profile['company_name'] = $company_name;
           $profile['company_tax_id'] = $company_tax_id;
           $profile['company_reg_com'] = $company_reg_com;
           $profile['phone'] = $phone;
           $profile['company_bank_account'] = $company_bank_account;
           $profile['company_country'] = $company_country;
           $profile['company_state'] = $company_state;
           $profile['company_city'] = $company_city;
           $profile['company_address'] = $company_address;


           $profile->save();
       }else{
           $profile = new Profile($request->all());

           \Auth::user()->profile()->save($profile);
       }

       return redirect('admin/profile');
    }
    public function logo(Request $request){
        $this->validate($request, [
            'logo' => 'required|image|image_size:<=400,0-150|max:200px',



        ]);


        if (Input::hasFile('logo')) {


            $file = Input::file('logo');
            $fileName = \Auth::user()->id . '.' . $file->getClientOriginalExtension();
            Input::file('logo')->move(public_path('/administrare/src/logos'), $fileName);


           // echo $user_id = \Auth::user()->id;


            Profile::where('user_id', $user_id)->update(array(
                'company_logo' => $fileName
            ));
            return redirect('admin/profile');
        }else {
             return redirect('admin/profile')->with('message','Please Select FIle');
        }
    }

    public function postInvoice(Request $request){
        $this->validate($request, [
            'total'          => 'in:45,80,150|required',
            'invoice_no'     => 'required',
            'data_emiterii'  => 'required'
        ]);
            $user_id                = \Auth::id();
            $invoice_no             = $request['invoice_no'];
            $data_emiterii          = $request['data_emiterii'];
            $total                  = $request['total'];
            $type                  = $request['type'];

            $invoice = new Invoice();
            $invoice['user_id'] = $user_id;
            $invoice['invoice_no'] = $invoice_no;
            $invoice['data_emiterii'] = $data_emiterii;
            $invoice['total'] = $total;
            $invoice['product'] = $type;

            $invoice->save();

        $profile = Profile::where('user_id', '=', $user_id)->first();
            $profile['subscription_id'] = $type;

            $profile->save();

        return redirect('/admin/dashboard');
        }
    public function PostInvoicePaypal(Request $request)
    {
        $this->validate($request, [
            'total'          => 'in:45.00,80.00,150.00|required',
            'invoice_no'     => 'required',
            'data_emiterii'  => 'required',
            'produs'         => 'required',
            'descriere'      => 'required',
        ]);
        $user_id                = \Auth::id();
        $invoice_no             = $request['invoice_no'];
        $data_emiterii          = $request['data_emiterii'];
        $total                  = $request['total'];
        $produs                  = $request['produs'];
        $descriere                  = $request['descriere'];
        $type                  = $request['type'];

        $invoice = new Invoice();
        $invoice['user_id'] = \Auth::id();
        $invoice['invoice_no'] = $invoice_no;
        $invoice['data_emiterii'] = $data_emiterii;
        $invoice['total'] = $total;

        $invoice->save();

        $params = array(
            'cancelUrl' 	=> "http://localhost:8000/admin/subscriptions",
            'returnUrl' 	=> "http://localhost:8000/admin/sucessPaypal?invoice_no=$invoice_no",
            'name'		    => $produs,
            'description' 	=> $descriere,
            'amount' 	    => $total,
            'currency' 	    => 'EUR',
            'transactionId' => $invoice_no

        );

        \Session::put('params', $params);
        \Session::save();

        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername('ionut.rusen_api1.yahoo.com');
        $gateway->setPassword('88JTTDLRZB3NZ7M8');
        $gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AjeuuwEElgyIkC5ivfReYQSpnLuF');

        $gateway->setTestMode(true);

        $response = $gateway->purchase($params)->send();

        if ($response->isSuccessful()) {




        } elseif ($response->isRedirect()) {


            $response->redirect();

        } else {

            // payment failed: display message to customer
            echo $response->getMessage();

        }
    }
    public function successPaypal(Request $request){

                if ($request){
                    if($request['token'] && $request['PayerID'] && $request['invoice_no']){
                       $invoice = Invoice::where('invoice_no', '=', $request['invoice_no'])->first();
                       $invoice['status'] = 1;
                        $invoice->save();
                    }
                }
            return redirect('admin/dashboard');

        }
    public function saveLocation(Request $request){
            $country = $request['country'];
            $locationname = $request['location_name'];
            $county = $request['state'];
            $city = serialize(Input::get('city'));

            $location = new Location();
            $location['country'] = $country;
            $location['name'] = $locationname;
            if($county) {
                $location['county'] = $county;

            }
            if($city){
                $location['city'] = $city;
            }
            $location['user_id'] = \Auth::id();

        $location->save();

        return redirect('admin/profile');
        }
    public function editLocation(Request $request){
            $locationid = $request['location_id'];
            $country = $request['country'];
            $locationname = $request['location_name'];
            $county = $request['state'];
            $city = serialize(Input::get('city'));

            $location = Location::findOrFail($locationid);

                $location['country'] = $country;
                $location['name'] = $locationname;
                if($county) {
                    $location['county'] = $county;

                }
                if($city){
                    $location['city'] = $city;
                }
                $location['user_id'] = \Auth::id();
                $location->save();
        return redirect()->back();
        }
    public function deleteLocation($id){
            $location = Location::find($id);
           $location->delete();
        return redirect()->back();
        }

}
