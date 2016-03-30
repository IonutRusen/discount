
<?php

  $object = json_decode($voucher);
    $valoare = @unserialize($object->valoare );
    $cod = @unserialize($object->cod );

    $cate = count($valoare);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coupon</title>

    <!-- Bootstrap Core CSS --><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/frontEnd/assets/css/print.css">


</head>

<body >

<!-- Navigation -->


<!-- Page Content -->
<div class="container" style="max-width: 1074px">
    @for($i=1;$i<=$cate;$i++)
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12" style="min-height: 412px" >
            <canvas id="respondCanvas_{{$i}}" class="respondCanvas" style="position: absolute"></canvas>
            <div class="col-xs-6 text-center" >
                {{HTML::image('administrare/src/logos/'.$object->logo )}}<br/>
                {{ $object->companie }}<br/>
                Voucher Code: <br/>
                {{ $cod[$i] }}<br/>
                {{ $object->descriere }}<br/>
            </div>
            <div class="col-xs-6 etalon text-center" >
                <span class="value">


                        {{ $valoare[$i] }}
                @if ( $object->type == 0)
                    {{ $object->currency }}
                @elseif( $object->type == 1)
                        {{HTML::image('frontEnd/images/percent.png' )}}
                @endif

                   </span>
            </div>

        </div>
    </div>
    <!-- /.row -->
    @endfor
</div>


</body>

</html>
<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
<script>


</script>
<script>

    $(document).ready( function(){
        var count = document.getElementsByClassName('respondCanvas').length;

    var imageObj = new Image();
    imageObj.src = "/frontEnd/images/coupons/back1.png";
        var canvas = new Array();
        var context = new Array();

        for (var i=1;i<=count;i++) {
        canvas[i] = document.getElementById("respondCanvas_"+i);


         context[i] = canvas[i].getContext('2d');



    }
        imageObj.onload = function () {
            for (var i=1;i<=count;i++) {
                context[i].drawImage(imageObj, 0, 0);

            }
        };

        //Get the canvas &
         var c = $('.respondCanvas');

         var container = $(c).parent();

        //Run function when browser resizes


        function respondCanvas() {

            c.attr('width', container.width()); //max width
            c.attr('height', container.height()); //max height

            //Call a function to redraw other content (texts, images etc)
        }

        //Initial call
        respondCanvas();



    });
</script>