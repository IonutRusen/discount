<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<style>
    /* Enhancement for printing */
    @media print {
        .invoice {
            width: 100%;
            border: 0;
            margin: 0;
            padding: 0;
        }
        .invoice-col {
            float: left;
            width: 33.3333333%;
        }
        .table-responsive {
            overflow: auto;
        }
        .table-responsive > .table tr th,
        .table-responsive > .table tr td {
            white-space: normal!important;
            background-color: transparent!important;
            border: none!important;
        }
    }
    /*
    </style>
<body>

            <div class="container-fluid">


            <section class="content invoice">
                <div class="row">

                    {{ HTML::image('images/voucher/1/background.png',null,array(
                        'class' => 'img-responsive',
                        'style' => 'position:absolute;z-index:-1'
                    )) }}


                </div>
                <!-- info row -->



                <!-- Table row -->




                <!-- this row will not appear when printing -->

            </section><!-- /.content -->
</div>
</body>
              </html>