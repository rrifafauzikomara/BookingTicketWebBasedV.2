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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    label.custom-checkbox input[type="checkbox"] { 
    opacity:0;
        }
         
        label.custom-checkbox input[type="checkbox"] ~ .helping-el{
            background-color: #FFFFFF;
            border: 2px solid #009688;  
            border-radius: 2px;
            display: inline-block;
            padding: 10px;
            position: relative;
            top: 2px;
        }
         
        label.custom-checkbox input[type="checkbox"]:checked ~ .helping-el{ 
            border: 2px solid #009688;
            background-color: #009688;
        }
         
        label.custom-checkbox input[type="checkbox"]:checked ~ .helping-el:after {
            color: #FFFFFF;
            content: "\2714";
            font-size: 20px;
            font-weight: normal;
            left: 2px;
            position: absolute;
            top: -6px;
            transform: rotate(10deg);
        }
    </style>

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
                    <li class="active">
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
                    <?php
                        function generatePIN($digits = 3){
                        $i = 0; //counter
                        $no_pesan = ""; //our default pin is blank.
                        while($i < $digits){
                            //generate a random number between 0 and 9.
                            $no_pesan .= mt_rand(0, 9);
                            $i++;
                        }
                        return $no_pesan;
                        }
                         
                        //If I want a 4-digit PIN code.
                        $no_pesan = generatePIN();
                    ?>

                                    <form action="" method="post" class="form-horizontal form-label-left" name="form">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pesan">No Booking <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="disabledInput" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="no_pesan" placeholder="" required="required" type="text" value="<?php echo $no_pesan; ?>" readonly="true">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">No KTP </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input id="" type="text" name="no_ktp" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan No KTP" >
                                        <input type="hidden" name="id_jadwal" value="<?php echo $_GET['route']; ?>">
                                        <input type="hidden" name="tgl_keb" value="<?php echo $_GET['tgl_keb']; ?>">
                                        <input type="hidden" name="harga" value="<?php echo $_GET['otiket']; ?>">  
                                        <input type="hidden" name="sub" value="<?php echo $_GET['osub']; ?>">
                                        
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Nama Lengkap </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="nama" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Nama Orang Ke 2 </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="nama2nd" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Nama Orang Ke 2">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Alamat Lengkap </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="alamat" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">No Handphone </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="kontak" value="" data-validate-length-range="5,12" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan No Hp atau Telephone">
                                        </div>
                                        </div>
    
                                        <div class="item form-group">
                                        <br>
                                       <label for="" class="control-label col-md-3">Tempat Duduk </label>
                                       <br>
                                       <script type="text/javascript" language="javascript">

                                        function limitchex(oCheckbox, limit) 
                                        {
                                            var el, i = 0, n = limit, oForm = oCheckbox.form;
                                            while (el = oForm.elements[i++])
                                            {
                                                if (el.className == 'single-checkboxchk' && el.checked)
                                                    --n;
                                                if (n < 0)
                                                {
                                                    alert('Please select no more than ' + limit + ' checkboxes.')
                                                    return false;
                                                }
                                            }
                                            return true;
                                        }

                                        </script>
                                       <div class="col-md-4 col-sm-4 col-xs-12">
                                          <?php 
                                         $s1q="select * from tb_kursi";
                                         $t1q=mysqli_query($con, $s1q);
                                         $datakur=mysqli_fetch_array($t1q);
                                         $i=1;
                                         while($i <= $datakur["Jumlah_Kursi"]){
                                         $query=mysqli_query($con,"Select * from tb_user where seat='$i'");
                                         $num_rows=mysqli_num_rows($query);

                                         ?>
                                         <label class="custom-checkbox">
                                         <?php
                                         if($num_rows < 1) {
                                         ?>
                                         <input class="single-checkboxchk" type="checkbox" name="seat[]" value="<?php echo $i; ?>"
                                         onclick="return limitchex(this,<?php echo $_GET['qty']; ?>)" /> 
                                         <?php
                                         }
                                         else
                                         {
                                         ?>
                                         <input class="single-checkbox" type="checkbox" name="seat[]" value="<?php echo $i; ?>" checked disabled/>
                                         <?php

                                         }
                                         ?>
                                         <span class="helping-el"></span>

                                         <span class="label-text"><?php echo $i; ?></span>
                                         </label>

                                         <?php
                                            if(($i % 4) == 0){
                                                ?>
                                                    <br>

                                                <?php
                                            }
                                            $i++;
                                            }
                                         ?>
                                            </div>
                                            </div>

                                        <h5> "Note : Untuk Tempat Duduk Yang Bergambar Warna Hijau Tandanya Kursi Sudah Di Isi."</h5>
                                        <br>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <input id="submit" type="submit" name="pesan" value="Pesan" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>

    <?php
    if (@$_POST['pesan']) {

        $no_pesan = $_POST['no_pesan'];
        $no_ktp = $_POST['no_ktp'];
        $nama = $_POST['nama'];
        $nama2nd = $_POST['nama2nd'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        $id_jadwal = $_POST['id_jadwal'];
       
        
            if ($no_pesan == '' || $no_ktp == '' || $nama == '' || $nama2nd == '' || $alamat == '' || $kontak == '') {
                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                } else {
                     foreach($_POST['seat'] as $checkboxes) {
                 $seat=$checkboxes;
              $sql_insert = "insert into tb_user(no_pesan,no_ktp,nama,nama2nd,alamat,kontak,seat,id_jadwal,tgl_keb,jml_tiket,harga,sub) values ('$no_pesan','$no_ktp','$nama','$nama2nd','$alamat','$kontak','$seat', '$_POST[id_jadwal]','$_POST[tgl_keb]','$_GET[qty]','$_POST[harga]','$_POST[sub]')" or die (mysqli_error());
              $pesan = mysqli_query($con, $sql_insert);
               }
             
                if ($pesan) {
                    ?> <script type="text/javascript">alert("Pemesanan Berhasil");</script> <?php

                    echo "<script type=text/javascript>
                                window.location.href='http://localhost/primajasa/user/print.php?id=$no_pesan';
                                </script>" ;

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
