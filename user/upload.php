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
    <script>
        function showUser() {
            var str=document.getElementById("no_pesan").value;
            
            if (str == "") {
                document.getElementById("txthint").innerHTML = "";

                return;
            } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                   ;
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("nama").value = this.responseText;
                       
                    }
                };
                xmlhttp.open("GET","getbook.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <li>
                     <a class="navbar-brand" href="../index.php">Primajasa </a>
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
                    <li class="active">
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
                        <a href="../inc/login.php"><i class="fa fa-sign-in"></i>Login </a>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pesan">No Booking <span class="required"></span></label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="no_pesan" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="no_pesan"  onkeyup="showUser()" type="text">
                    </div>
                    </div>
                    <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Lengkap <span class="required"></span></label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="nama" type="text">
                    </div>
                    </div>
                    <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_booking">Bukti Transaksi <span class="required"></span></label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="file" name="gambar">
                    </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="submit" name="input" value="Upload" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-primary">
                    </div>
                    </div>
            </fieldset>
        </div>

        <?php
            include "../inc/koneksi.php";
                $no_pesan = @$_POST['no_pesan'];
                $nama = @$_POST['nama'];
                $sumber = @$_FILES['gambar']['tmp_name'];
                $target = '../upload/';
                $nama_gambar = @$_FILES['gambar']['size'];
                $tambah = @$_POST['input'];

                // $ukuran_foto   = $_FILES['gambar']['size'];
                $max = 100000; //100kb

                  if ($tambah) {
                    if ($no_pesan == "" || $nama_gambar == "") {
                            ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                        } else if ($nama_gambar > $max) {
                            ?> <script type="text/javascript">alert("Ukuran Gambar Maximal 100 kb");</script> <?php

                               echo "<script type=text/javascript>
                                        window.location.href='http://localhost/primajasa/user/upload.php';
                                        </script>" ;
                        } else {
                            $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
                            if ($pindah) {
                            $sql_insert = mysqli_query($con,"insert into tb_pembayaran values('', '$no_pesan', '$nama','$nama_gambar')") or die (mysqli_error());
                               ?> <script type="text/javascript">alert("Bukti Pembayaran Berhasil di Upload, Silahkan tunggu 5 Menit sebelum melakukan pengecekan status ticket anda");</script> <?php

                               echo "<script type=text/javascript>
                                        window.location.href='http://localhost/primajasa/user/cekpesan.php';
                                        </script>" ;
                            } else {
                                ?> <script type="text/javascript">alert("Upload Bukti Pembayaran Gagal di Upload")</script> <?php
                            } 
                        }

                    }
        ?>

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
