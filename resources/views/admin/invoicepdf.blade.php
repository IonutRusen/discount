<html>
<head>
    <title>Invoice</title>
    <style type="text/css">
        #page-wrap {
            width: 700px;
            margin: 0 auto;
        }
        .center-justified {
            text-align: justify;
            margin: 0 auto;
            width: 30em;
        }
        table.outline-table {
            border: 1px solid;
            border-spacing: 0;
        }
        tr.border-bottom td, td.border-bottom {
            border-bottom: 1px solid;
        }
        tr.bordered td{
            border: 1px solid;
        }
        tr.border-top td, td.border-top {
            border-top: 1px solid;
        }
        tr.border-right td, td.border-right {
            border-right: 1px solid;
        }
        tr.border-right td:last-child {
            border-right: 0px;
        }
        tr.center td, td.center {
            text-align: center;
            vertical-align: text-top;
        }
        td.pad-left {
            padding-left: 5px;
        }
        tr.right-center td, td.right-center {
            text-align: right;
            padding-right: 50px;
        }
        tr.right td, td.right {
            text-align: right;
        }
        .grey {
            background:grey;
        }
        td.text-center{
            text-align: center;
        }
        td.text-right{
            text-align: right;
        }
        td.text-left{
            text-align: left;
        }
    </style>
</head>
<body>
<div id="page-wrap">
    <table width="100%">
        <tbody>
        <tr>
            <td class="text-left" width="30%">
                <strong>Zmall Online SRL</strong><br/>
                    Tax ID : 25008484<br/>
                    REG #: J40/957/2009<br/>
                    Al. Dumbravita nr.2<br/>
                    Bucharest, Romania<br/>
                    Phone: +40 760 616 755<br/>
                    Email: sales@zmall.ro<br/>

            </td>
            <td class="text-center" width="20%">
                <h2>INVOICE</h2>
                Number : DSC00{{ $invoice_no }}<br/>
                Date : {{ $data_factura }}<br/><br/><br/>
                <img src="http://zmall.ro/logofact.jpg"/>
            </td>
            <td class="text-right" width="50%">
                <strong>{{ $company_name }}</strong><br/>
                Tax ID:{{ $tax_id }}<br/>
                REG #:{{ $company_reg_com }}<br/>
                {{ $company_address }}<br/>
                {{ $company_city }}, {{ $company_country }}<br/>
                Phone: {{ $phone }}<br/>
                Email: {{ $email }}<br/>

            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="center-justified">

                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <table width="100%" class="outline-table">
        <tbody>

        <tr class="border-bottom border-right center">
            <td width="5%"><strong>#</strong></td>
            <td width="20%"><strong>Product</strong></td>
            <td width="45%"><strong>Description</strong></td>
            <td width="10%"><strong>Qty</strong></td>
            <td width="10%"><strong>Unit Price</strong></td>
            <td width="10%"><strong>TOTAL</strong></td>
        </tr>
        <tr class="border-right">
            <td class="center">1</td>
            <td class="center">{{ $product }}</td>
            <td class="center">{{ $description }}<br/><strong>Period :{{ $period }}</strong></td>
            <td class="right-center">{{ $qty }}</td>
            <td class="right-center"> {{ $price }}&euro; </td>
            <td class="right-center">{{ $total }}&euro;</td>
        </tr>
        <tr class="border-right">
            <td class="center"></td>
            <td class="center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
        </tr>
        <tr class="border-right">
            <td class="center"></td>
            <td class="center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
        </tr>
        <tr class="border-right">
            <td class="center"></td>
            <td class="center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
        </tr>
        <tr class="border-right">
            <td class="center"></td>
            <td class="center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
        </tr>
        <tr class="border-right">
            <td class="center"></td>
            <td class="center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
            <td class="right-center">&nbsp;</td>
        </tr>



        </tbody>

    </table>
    <br/>
    <table width="100%" class="outline-table">
        <tbody>

        <tr class="border-bottom border-right center">
            <td width="65%"><strong>Total</strong></td>
            <td width="10%"><strong>{{ $qty }}</strong></td>
            <td width="10%"><strong>{{ $price }}&euro;</strong></td>
            <td width="10%"><strong>{{ $total }}&euro;</strong></td>
        </tr>



        </tbody>
    </table>
    <p>&nbsp;</p>


    <p>&nbsp;</p>

</div>
</body>
</html>