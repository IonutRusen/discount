<?php

namespace App\Http\Controllers\admin;

ini_set('xdebug.max_nesting_level', 200);
use App\Invoice;
use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as Pdf1;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfInvoice extends Controller
{
    public function createInvoice($invoice)
    {
        $invoice = $invoice;
      // $invoice_data = Invoice::where('user_id', \Auth::id())->where('invoice_no', $invoice)->get();
        $data = \DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->join('invoices',
                function ($join) use ($invoice){

                    $join->on('users.id', '=', 'invoices.user_id')
                        ->where('invoices.invoice_no', '=', $invoice);
                })

            ->join('packages', 'packages.id', '=', 'invoices.product')


            ->select(
                'users.email',
                'profiles.company_name',
                'profiles.company_address',
                'profiles.company_tax_id',
                'profiles.company_reg_com',
                'profiles.company_city',
                'profiles.company_country',
                'profiles.phone',
                'invoices.total',
                'invoices.data_emiterii',
                'packages.name',
                'packages.description',
                'packages.price',
                'invoices.invoice_no'


            )->get();



        foreach($data as $element)
            $invoice_data = array(
                'email' => $element->email,
                'company_name' => $element->company_name,
                'company_address' => $element->company_address,
                'company_tax_id' => $element->company_tax_id,
                'company_reg_com' => $element->company_reg_com,
                'company_city' => $element->company_city,
                'company_country' => $element->company_country,
                'phone' => $element->phone,
                'total' => $element->total,
                'data_emiterii' => $element->data_emiterii,
                'name' => $element->name,
                'description' => $element->description,
                'price' => $element->price,
                'invoice_no' => $element->invoice_no
            );


      return $pdf = Pdf1::loadView('admin.invoicepdf', $invoice_data)->download('invoice.pdf');
        //  return view('admin.invoicepdf',$invoice_data);

    }
}
