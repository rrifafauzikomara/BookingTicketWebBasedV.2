<?php
include "../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="../css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css1/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon"  href="../images/logo.jpg"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language='javascript' >
        var txt=' Selamat Datang di Website Primajasa *****';
        var speed=300;var refresh=null;function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);}move();
    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <li>
                     <a class="navbar-brand" href="home.php">Primajasa </a>
                </li>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="jadwal.php"><i class="fa fa-calendar"></i>Jadwal </a>
                    </li>
                    <li>
                        <a href="carapesan.php"><i class="fa fa-eye"></i>Cara Pesan </a>
                    </li>
                    <li>
                        <a href="booking.php"><i class="fa fa-edit"></i>Booking </a>
                    </li>
                    <li>
                        <a href="upload.php" ><i class="fa fa-upload"></i>Upload Pembayaran </a>
                    </li>
                    <li>
                        <a href="cekpesan.php" ><i class="fa fa-table"></i>Cek Pesanan </a>
                    </li>
                    <li>
                        <a href="lokasi.php" ><i class="fa fa-map-marker"></i>Lokasi </a>
                    </li>
                    <li>
                        <a href="bantuan.php"><i class="fa fa-question"></i>Bantuan </a>
                    </li>
                    <li>
                        <a href="../inc/logout.php"><i class="fa fa-fw fa-power-off"></i>Logout </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="col-md-12" align="center">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                    <img class="slide-image" src="../images/1.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="slide-image" src="../images/2.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="slide-image" src="../images/3.jpg" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><center>Selamat Datang di PT Primajasa</center></h2>
            </div>
        </div>
        <!-- /.row -->
        <div class="well">
            <fieldset>
                <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                    <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kendaraan">No Id Kendaraan <span class="required"></span></label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="id_kendaraan" value="" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="id_kendaraan" placeholder="" required="required" type="text">
                    </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="submit" name="cari" value="Cari" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-primary">
                    </div>
                    </div>
                    <h5 ><center>No Id Kendaraan adalah no id kendaraan yang tertera di "Jadwal Keberangkatan" yang bisa digunakan untuk menemukan lokasi pemberhentian yang akan di tuju oleh setiap penumpang. Silahkan cari lokasi bus primajasa yang kalian tumpangi dengan memasukan No Id Kendaraan anda</center></h5>
            </fieldset>
        </div>

        
        <div class="well">
            
                <?php
                include "../inc/koneksi.php";
                ?>
                <div id="dvMap" style="width: 1100px; height: 550px"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4bRjkCadBq13qNZR6ywS5ZrZFhYqpNfg" async defer></script>
                <script type="text/javascript">
                    var markers = [
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM tb_lokasi where id_kendaraan='$_POST[id_kendaraan]'");
                    while(($data =  mysqli_fetch_assoc($sql))) {
                    ?>
                    {
                             "lat": '<?php echo $data['lat']; ?>',
                             "lng": '<?php echo $data['lng']; ?>',
                             "nama": '<?php echo $data['nama']; ?>'
                    },
                    <?php
                    }
                    ?>
                ];
                </script>
                <script type="text/javascript">
                    window.onload = function () {

                        var mapOptions = {
                            center: new google.maps.LatLng(-2.2459632,116.2409634),
                            zoom: 5,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }; 

                        var directionsService = new google.maps.DirectionsService();
                        var directionsDisplay = new google.maps.DirectionsRenderer();

                        var infoWindow = new google.maps.InfoWindow();
                        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

                        for (i = 0; i < markers.length; i++) {
                            var data = markers[i];

                            var latnya = data.lat;
                            var lngnya = data.lng;
                            
                            var myLatlng = new google.maps.LatLng(latnya, lngnya);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: data.nama
                            });
                            (function (marker, data) {
                                google.maps.event.addListener(marker, "click", function (e) {
                                    infoWindow.setContent('<b>Lokasi</b> :' + data.nama + '<br>');
                                    infoWindow.open(map, marker);
                                });
                            })(marker, data);
                            var total=markers.length;
                            var latnyastart = markers[0].lat;
                            var lngnyastart = markers[0].lng;
                            var latnyaend = markers[total-1].lat;
                            var lngnyaend = markers[total-1].lng;

                             var start = new google.maps.LatLng(latnyastart, lngnyastart);
                             //var end = new google.maps.LatLng(38.334818, -181.884886);
                                var end = new google.maps.LatLng(latnyaend, lngnyaend);
                                var bounds = new google.maps.LatLngBounds();
                                bounds.extend(start);
                                bounds.extend(end);
                                map.fitBounds(bounds);
                                var request = {
                                    origin: start,
                                    destination: end,
                                    travelMode: google.maps.TravelMode.WALKING
                                };
                                directionsService.route(request, function (response, status) {
                                    if (status == google.maps.DirectionsStatus.OK) {
                                        directionsDisplay.setDirections(response);
                                        directionsDisplay.setMap(map);
                                    } else {
                                        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                                    }
                                });
                        }
                    }
                </script>

        </div>
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                            <p><font face="Time New Roman" color="#000000"><center>Copyright ©2016 Primajasa All Rights Reserved </center></font></p>
                    </ol>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js1/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
