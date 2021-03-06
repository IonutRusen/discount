
@extends('admin.master')
@section('title')
    Your Invoices
@endsection
@section('content')
<div class="row">
    <div class="x_content">



        <table class="table table-striped responsive-utilities jambo_table bulk_action">
            <thead>

            <tr class="headings">

                <th class="column-title">Invoice </th>
                <th class="column-title">Invoice Date </th>
                <th class="column-title">Amount </th>
                <th class="column-title">Status </th>
                <th class="column-title no-link last"><span class="nobr">Action</span>
                </th>
                <th class="bulk-actions" colspan="7">

                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($invoices as $invoice)
                <tr class="even pointer">

                    <td class=" ">DSC00{{ $invoice['invoice_no'] }}</td>
                    <td class=" ">{{ Carbon\Carbon::parse($invoice['data_emiterii'])->format('M-d-Y') }} </td>


                    <td class="a-right a-right ">{{ $invoice['total'] }} &euro;</td>
                    <td class=" ">
                        @if($invoice['status'] == 0)
                            <span class="label status status-unpaid"><span class="textred">Unpaid</span></span>
                        @elseif($invoice['status'] == 1)
                            <span class="label status status-paid"><span class="textgreen">Paid</span></span>
                        @else
                            <span class="label status status-canceled"><span class="textgreen">Cancelled</span></span>
                        @endif
                    </td>
                    <td class=" last">{{ HTML::linkAction('admin\PdfInvoice@createInvoice', 'View invoice', array($invoice['invoice_no'])) }}
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>


</div>







@endsection
