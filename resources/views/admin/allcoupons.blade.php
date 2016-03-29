
@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daily active users <small>Sessions</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="example" class="table table-striped responsive-utilities jambo_table dataTable" aria-describedby="example_info">
                        <thead>
                        <tr>
                            <th>Description</th>

                            <th>Category</th>
                            <th>Location</th>
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
@endsection
@section('customscript')

    {!! HTML::script('https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js') !!}


    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "ajax": {
                    "url": "ajax/getAllVouchers",
                    "dataSrc": "",

                },

                "columns": [
                    { "data": "description" },

                    { "data": "category" },
                    { "data": "name" },
                    { "data": "validity" },
                    { "data": "coupon_id" }
                ]
            }
            );

        } );
    </script>
@endsection
