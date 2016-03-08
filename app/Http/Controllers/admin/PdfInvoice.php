<?php

namespace App\Http\Controllers\admin;

ini_set('xdebug.max_nesting_level', 200);
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as Pdf1;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfInvoice extends Controller
{
    public function createInvoice($invoice)
    {
        $data = array(

            'company_name'=>'Dante International',
            'tax_id' => 502554544,
            'invoice_no' => 3,
            'data_factura' => '16.Mar.2016',
            'company_reg_com' => 'J40/15879/2008',
            'company_address' => 'Rua de Napoli 5',
            'company_city' => 'Neaples',
            'company_country' => 'Italy',
            'phone' => 0760616554,
            'email' => 'office@emag.ro',
            'product' => 'B Package',
            'description' => '600 coupons/vouchers,20 coupons/vouchers per Day,10 Complex Voucher,10 Locations,Filter by Location,Filter by Gender, View Winners,Customisable vouchers',
            'period' => '06.MAr.2016 - 05.Apr.2016',
            'qty' => '1',
            'price' => '45',
            'total' => '45',
        );

         return $pdf = Pdf1::loadView('admin.invoicepdf', $data)->download('invoice.pdf');
        // return view('admin.invoicepdf')->with($data);

    }
}
