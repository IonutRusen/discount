<?php

    $object = json_decode($voucher);
    $check = @unserialize($object->valoare );
    $cate = count($check);


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



</head>

<body >

<!-- Navigation -->


<!-- Page Content -->
<div class="container" style="max-width: 1074px">
    @for($i=1;$i<=3;$i++)
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="min-height: 412px">
            <canvas id="respondCanvas_{{$i}}" class="respondCanvas" style="position: absolute"></canvas>
            <div class="col-md-2"><h3>

                   </h3></div>
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
    var imageObj = new Image();
    imageObj.src = "/frontEnd/images/coupons/back1.png";


    for (var i=1;i<=3;i++) {
        var canvas1 = document.getElementById("respondCanvas_1");
        var canvas2 = document.getElementById("respondCanvas_2");
        var canvas3 = document.getElementById("respondCanvas_3");

        var context2 = canvas2.getContext('2d');
        var context1 = canvas1.getContext('2d');
        var context3 = canvas3.getContext('2d');


    }

        imageObj.onload = function () {
            context1.drawImage(imageObj, 0, 0);
            context2.drawImage(imageObj, 0, 0);
            context3.drawImage(imageObj, 0, 0);
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