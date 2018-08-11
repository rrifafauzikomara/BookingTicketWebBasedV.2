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
                    <li class="active">
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
        <div class="row">
        <div class="well">
        <h1>Hubungi Kami</h1>
		<p>Memiliki pertanyaan atau masalah? Kami di sini untuk membantu Anda. Silakan hubungi kami melalui jalur komunikasi berikut:</p>
		</div>

		<div class="col-lg-6">
		<h3>Email</h3>
		<p>Untuk respon yang lebih cepat, sampaikan pertanyaan Anda melalui alamat email kami yaitu : <a href="">primajasa@gmail.com</a>.</p>
		<br>
		</div>

		<div class="col-lg-6">
  		<div class='component-overflow simple-text'  data-component data-name='ContactUs_Chat' data-id='1475120566119'>
  		<h3>Live Chat</h3>
		<p><a href="">Chat langsung di browser</a><br/>Layanan Nonstop 24 Jam Setiap Hari</p>
		</div>
		<br>
		</div>

		<div class="col-lg-6">
		<div class='component-overflow simple-text'  data-component data-name='ContactUs_Contact' data-id='1475120306274'>
		<h3>No. Telepon Resmi</h3>
		<p>Mohon siapkan No. Pemesanan Primajasa Anda sebelum menghubungi kami.</p>
		<p><strong>Indonesia:</strong> 0804-1500-308 (hanya dapat dihubungi dari Indonesia)<br/>Layanan Nonstop 24 Jam Setiap Hari</p>
		</div>
		<br>
		</div>

		<div class="col-lg-6">
		<div class='component-overflow simple-text'  data-component data-name='ContactUs_Socmed' data-id='1475120628526'>
		<h3>Social Media</h3>
		</div>

		<div class='component-overflow single-socmed'  data-component data-name='ContactUs_Socmed_Facebook' data-id='1475122267111'>
		<a href="https://www.facebook.com/primajasa">
		<img src="../images/fb.png" alt="Facebook" width="40" height="40" />
		<span>facebook.com/primajasa</span></a>
		</div>

		<div class='component-overflow single-socmed'  data-component data-name='ContactUs_Socmed_Twitter' data-id='1475122089534'>
		<a href="https://twitter.com/primajasa">
		<img src="../images/tw.png" alt="Twitter" width="40" height="40"/>
		<span>twitter.com/primajasa</span></a>
		</div>
		</div>
		<br>
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
