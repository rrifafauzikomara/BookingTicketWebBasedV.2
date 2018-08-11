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
                    <li>
                        <a href="upload.php" ><i class="fa fa-upload"></i>Upload Pembayaran </a>
                    </li>
                    <li class="active">
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
                    <input id="no_pesan" value="" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="no_pesan" placeholder="" required="required" type="text">
                    </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="submit" name="cari" value="Cari" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-primary">
                    </div>
                    </div>
            </fieldset>
        </div>

        <h2 class="page-header">Lihat Data Pemesanan</h2>
            <div class="jumbotron">
                <div class="box-body">
                <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
            <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><div align="center">No Booking</div></th>
                        <th><div align="center">Nama Lengkap</div></th>
                        <th><div align="center">Route Perjalanan</div></th>
                        <th><div align="center">Tanggal</div></th>
                        <th><div align="center">Kursi</div></th>
                        <th><div align="center">Status</div></th>
                        <th><div align="center">Aksi</div></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    error_reporting(0);
                    include('../inc/koneksi.php');
                    $id=$_POST['no_pesan'];
                    $result = "SELECT * FROM tb_user WHERE no_pesan='$id'" or die(mysqli_error());
                    $print = mysqli_query($con, $result);
                    $seat="";
                    while($row = mysqli_fetch_array($print)){
                        $nopesan=$row['no_pesan'];
                        $nama=$row['nama'];
                        $jadwal=$row['id_jadwal'];
                        $tgl=$row['tgl_keb'];
                        $seat=$row['seat'].'-'.$seat;
                        $status=$row['status'];

                       }
                    ?>
                    <tr>
                        <td><div align="center"><?php echo $nopesan; ?></div></td>
                        <td><div align="center"><?php echo $nama; ?></div></td>
                        <td><div align="center"><?php echo $jadwal; ?></div></td>
                        <td><div align="center"><?php echo $tgl; ?></div></td>
                        <td><div align="center"><?php echo $seat; ?></div></td>
                        <td><div align="center"><?php echo $status; ?></div></td>
                        <?php
                        if($status=="Sudah Bayar"){
                        ?>
                        <td><div align="center"><a href="qrcode.php?id=<?php echo $nopesan; ?>&nama=<?php echo $nama; ?>&rute=<?php echo $jadwal; ?>&status=<?php echo $status; ?>">Cetak Barcode</a></div></td>
                        <?php

                        }
                        else if($status=="Belum Bayar") {

                        ?>
                             <td><div align="center"></div></td>
                        <?php
                          }
                        ?>
                    </tr>
                </tbody>
            </table>
                </form>
            </div>
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
