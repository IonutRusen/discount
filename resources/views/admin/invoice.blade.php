<?php
use Carbon\Carbon;
use App\Profile;
?>
@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')

    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel" id="invoice">

                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12 invoice-header">
                                    <h1>
                                        <i class="fa fa-globe"></i> Invoice.
                                        <small class="pull-right">{!! Carbon::now()->toDateString(); !!}</small>
                                    </h1>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Zmall Online SRL</strong>
                                        <br>Al. Dumbravita nr.2
                                        <br>Bucharest, Romania
                                        <br>Phone: +40 760 616 755
                                        <br>Email: sales@zmall.ro
                                        <br>Bank Account : RO28INGB0000999904365795
                                        <br>Swift : INGBROBU
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>{!! DB::table('profiles')->where('user_id', Auth::id())->first()->company_name;  !!}</strong>
                                        <br>{!! DB::table('profiles')->where('user_id', Auth::id())->first()->company_address;  !!}
                                        <br>{!! DB::table('profiles')->where('user_id', Auth::id())->first()->company_state;  !!}, {!! DB::table('profiles')->where('user_id', Auth::id())->first()->company_country;  !!}
                                        <br>Phone: {!! DB::table('profiles')->where('user_id', Auth::id())->first()->phone;  !!}
                                        <br>Email: {!! DB::table('users')->where('id', Auth::id())->first()->email;  !!}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice DSC 00{!! App\Invoice::get()->last()->invoice_no+1 !!}</b>
                                    <br>

                                    <?php
                                    $MyDateCarbon = Carbon::parse(App\Invoice::get()->first()->data_emiterii); ?>

                                    <b>Payment Due:</b> {!! $MyDateCarbon->addDays(7)->toDateString();!!}
                                    <br>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th style="width: 59%">Description</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @if($type==2)
                                            <td>1</td>
                                            <td><strong>B</strong> package</td>

                                            <td>300 coupons/vouchers, 10 coupons/vouchers per Day,5 Complex Voucher,3 Locations,Filter by Location,Customisable vouchers
                                            </td>
                                            <td>45 &euro;</td>
                                                @elseif($type==3)
                                                <td>1</td>
                                                <td><strong>C</strong> package</td>

                                                <td>600 coupons/vouchers,20 coupons/vouchers per Day,10 Complex Voucher,10 Locations,Filter by Location,Filter by Gender, View Winners,Customisable vouchers
                                                </td>
                                                <td>80 &euro;</td>
                                            @elseif($type==4)
                                                <td>1</td>
                                                <td><strong>D</strong> package</td>

                                                <td>10000 coupons/vouchers, 333 coupons/vouchers per Day,30 Complex Voucher,50 Locations,Filter by Location,Filter by Gender, Filter by Age Range, View Winners, Customisable vouchers
                                                </td>
                                                <td>150 &euro;</td>

                                            @endif
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-xs-6">
                                    <p class="lead">Payment Methods:</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{--{{ HTML::image('administrare/src/images/visa.png') }}--}}
                                                </td>
                                                <td>
                                                    {{ HTML::image('administrare/src/images/bank.png') }}
                                                </td>
                                                <td>
                                                    {{ HTML::image('administrare/src/images/paypal2.png') }}
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    {{--{!! FORM::radio('type','card',false, array(
                                                         'class' => 'radio-inline',
                                                         'id' => 'card',
                                                     )) !!}--}}
                                                </td>
                                                <td>
                                                    {!! FORM::radio('type','bank',true, array(
                                                         'class' => 'radio-inline',
                                                         'id' => 'bank',
                                                         'title' => 'Bank Payment',

                                                     )) !!}
                                                </td>
                                                <td>
                                                    {!! FORM::radio('type','paypal',false, array(
                                                         'class' => 'radio-inline',
                                                         'id' => 'paypal',
                                                         'title' => 'Paypal Payment'
                                                     )) !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><br/>
           <p class="text-muted well well-sm no-shadow" id="info">
               Please send the proof of payment to <strong>sales@zmall.ro</strong>. <br/><span class='text-danger'>The subscriptions will be activated after the payment have been confirmed !
           </p>
</div>
<!-- /.col -->
<div class="col-xs-6">

   <div class="table-responsive">
       <table class="table">
           <tbody>
           @if($type==2)
               <tr>
                   <th style="width:50%">Subtotal:</th>
                   <td>45 &euro;</td>
               </tr>
               <tr>
                   <th>Tax (0%)</th>
                   <td>0 &euro;</td>
               </tr>

               <tr>
                   <th>Total:</th>
                   <td>45 &euro;</td>
               </tr>

           @elseif($type==3)
               <tr>
                   <th style="width:50%">Subtotal:</th>
                   <td>80 &euro;</td>
               </tr>
               <tr>
                   <th>Tax (0%)</th>
                   <td>0 &euro;</td>
               </tr>

               <tr>
                   <th>Total:</th>
                   <td>80 &euro;</td>
               </tr>
           @elseif($type==4)
               <tr>
                   <th style="width:50%">Subtotal:</th>
                   <td>150 &euro;</td>
               </tr>
               <tr>
                   <th>Tax (0%)</th>
                   <td>0 &euro;</td>
               </tr>

               <tr>
                   <th>Total:</th>
                   <td>150 &euro;</td>
               </tr>
           @endif
           </tbody>
       </table>
   </div>
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<!-- this row will not appear when printing -->
<div class="row no-print">
<div class="col-xs-12">
   <button class="btn btn-default" id="printpagebutton" onclick="printpage();"><i class="fa fa-print" id="print"></i> Print</button>

    {!! FORM::open(array(
        'action'=> 'admin\ProcessFormController@postInvoice' ,
        'id' => 'invoicer',

    )) !!}
    {!! FORM::hidden('type',$type) !!}
    {!! FORM::hidden('invoice_no',App\Invoice::get()->last()->invoice_no+1) !!}
    {!! FORM::hidden('data_emiterii',Carbon::now()) !!}
        @if($type==2)
            {!! FORM::hidden('total',45) !!}
        @elseif($type==3)
            {!! FORM::hidden('total',80) !!}
        @elseif($type==4)
            {!! FORM::hidden('total',150) !!}
        @endif
    {!! FORM::button('<i id="icon" class="fa fa-bank"></i> Bank Payment', array(
            'type' => 'submit',
            'class'=> 'btn btn-success pull-right',
            'id' => 'submit'
    )) !!}
    {!! FORM::close() !!}

    <button id="pay_paypal" class="btn btn-success pull-right hidden"><i class="fa fa-credit-card"></i> Pay with Paypal</button>
    <button id="pay_bank" class="btn btn-success pull-right hidden"><i class="fa fa-bank"></i> Bank Payment</button>

</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>

@endsection
{!! HTML::script('https://code.jquery.com/jquery-2.2.1.min.js') !!}
<script>
    $(document).ready(
            function(){
               /* $("#card").click(function () {
                    $("#info").html("mata are mere");
                });*/

            });
    $(document).ready(
            function(){
                $("#bank").click(function () {
                    $("#info").html(
                            "Please send the proof of payment to <strong>sales@zmall.ro</strong>. <br/><span class='text-danger'>The subscriptions will be activated after the payment have been confirmed !</span>"


                    );
                    $("#icon").removeClass('fa-credit-card');
                    $("#icon").addClass('fa-bank');
                    $("#submit").val('Bank Payment');
                    $("#submit").html('<i class="fa fa-credit-card"></i> Bank Payment');
                    $("#invoicer").attr('action', '/admin/saveinvoice');
                });

            });
    $(document).ready(
            function(){
                $("#paypal").click(function () {
                    $("#info").html(
                            "You will be redirected to PayPal site complete the order"
                    );
                    $("#icon").removeClass('fa-bank');
                    $("#icon").addClass('fa-credit-card');
                    $("#submit").val('Paypal Payment');
                    $("#submit").html('<i class="fa fa-credit-card"></i> Pay with Paypal');
                    $("#invoicer").attr('action', '/admin/paypalPayment');


                });

            });
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var print = document.getElementById("print");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';
        print.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        print.style.visibility = 'visible';
    }
</script>