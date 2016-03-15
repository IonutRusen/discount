{{  json_encode($vouchers) }}
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
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
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
            var data = [$vouchers];
            for ( var i=0 ; i<50000 ; i++ ) {
                data.push( [ i, i, i, i, i,i ] );
            }

            $('#example').DataTable( {
                data:           data,
                deferRender:    true,
                scrollY:        200,
                scrollCollapse: true,
                scroller:       true
            } );
        } );

    </script>
@endsection
