
@extends('front.master')
@section('title')
    Dashboard Discounter
@endsection
@section('content')

    {{ link_to_route('userDashboard', '', null, array('class' => 'close-btn')) }}
    <div id="portfolio" class="service-page container-fluid page">

        <div class="row">

            <!--( a ) Portfolio Page Fixed Image Portion -->

            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>Winnings</h1>

                </div>
            </div>

            <!--( b ) Portfolio Page Content -->

            <div class="content-container col-md-9 col-sm-12">

                <!--( A ) Portfolio -->

                <div class="portfolio clearfix full-height">
                    <h2 class="small-heading"><small class="text-center">Your Vouchers</small></h2>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="project-container">
                                <div class="row">


                                    <!-- Portfolio Control Buttons [ END ] -->

                                    <div id="projects" class="projet-items clearfix">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="example" class="table table-striped responsive-utilities jambo_table dataTable" aria-describedby="example_info">
                                                <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Complex</th>
                                                    <th>Category</th>

                                                    <th>Validity</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody></tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>

@endsection
@section('customscript')
    {{ HTML::script('https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js') }}
    {{ HTML::script('https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js') }}


    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                        "ajax": {
                            "url": "/customerVouchers",
                            "dataSrc": "",

                        },

                        "columns": [
                            { "data": "logo" },
                            { "data": "valoare" },
                            { "data": "categorie" },

                            { "data": "validity" },
                            { "data": "id" }
                        ]
                    }
            );

        } );
    </script>
@endsection