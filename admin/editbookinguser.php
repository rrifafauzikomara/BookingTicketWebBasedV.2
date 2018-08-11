<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../images/primajasa.jpg" alt="" width="250" height="200" class="navbar-brand">
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                        <li class="utama">
                            <a href="../inc/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home.php"><i class="fa fa-fw fa-desktop"></i> Home</a>
                    </li>
                    <li>
                        <a href="datauser.php"><i class="fa fa-fw fa-edit"></i> Data User </a>
                    </li>
                    <li>
                        <a href="datasupir.php"><i class="fa fa-fw fa-edit"></i> Data Supir </a>
                    </li>
                    <li>
                        <a href="datapegawai.php"><i class="fa fa-fw fa-edit"></i> Data Kondektur </a>
                    </li>
                     <li>
                        <a href="datajadwal.php"><i class="fa fa-fw fa-edit"></i> Data Jadwal </a>
                    </li>
                    <li>
                        <a href="datalokasi.php"><i class="fa fa-fw fa-edit"></i> Data Lokasi </a>
                    </li>
                    <li>
                        <a href="datakendaraan.php"><i class="fa fa-fw fa-edit"></i> Data Kendaraan </a>
                    </li>
                    <li>
                        <a href="datakursi.php"><i class="fa fa-fw fa-edit"></i> Data Kursi </a>
                    </li>
                    <li class="active">
                        <a href="databookinguser.php"><i class="fa fa-fw fa-edit"></i> Data Booking Non Member </a>
                    </li>
                    <li>
                        <a href="databookingmember.php"><i class="fa fa-fw fa-edit"></i> Data Booking Member </a>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Edit User
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Menu
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data Booking User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="well">
                    <?php
					   include "../inc/koneksi.php";
                        $no_pesan = @$_POST['no_pesan'];
                        $nama = @$_POST['nama'];
                        $nama2nd = @$_POST['nama2nd'];
                        $alamat = @$_POST['alamat'];
                        $seat = @$_POST['seat'];
                        $status = @$_POST['status'];

                        $tambah = @$_POST['edit'];

                        if ($tambah) {
                            if ($no_pesan == "" || $nama == "" || $nama2nd == "" || $alamat == "" || $seat == "" || $status == "") {
                                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                            } else {
                                $sql_update = "update tb_user set nama='$nama',nama2nd='$nama2nd',alamat='$alamat',status='$status' where no_pesan='$no_pesan'" or die (mysqli_error());
                                $update = mysqli_query($con, $sql_update);
                                
								echo "<script type=text/javascript>
								window.location.href='http://localhost/primajasa/admin/databookinguser.php';
								</script>" ;
							}
                        }
									 
									 $sql = "select * from tb_user where no_pesan='$_GET[id]'" or die (mysqli_error());
                                     $tampil = mysqli_query($con, $sql);
									 $data=mysqli_fetch_array($tampil);
									 ?>

                                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pesan">No Pemesanan <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="no_pesan" value="<?php echo $data['no_pesan']; ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="no_pesan" placeholder="" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Lengkap <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="nama" value="<?php echo $data['nama']; ?>" name="nama" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama2nd">Nama Orang Ke 2 <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="nama2nd" value="<?php echo $data['nama2nd']; ?>" name="nama2nd" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="alamat"  type="text" value="<?php echo $data['alamat']; ?>" name="alamat"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Alamat Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="seat">Tempat Duduk <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="seat" type="text" value="<?php echo $data['seat']; ?>" name="seat" data-validate-length-range="10,12" class="optional form-control col-md-7 col-xs-12" maxlength="12" placeholder="Masukan No Tempat Duduk">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="status" class="control-label col-md-3">Status</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" value="<?php echo $data['status']; ?>" name="status" requered>
                                                    <option>Sudah Bayar</option>
                                                    <option>Belum Bayar</option>
                                        </select>
                                        </div>
                                        </div> 
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                                                <input type="reset" value="Cancel" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>


                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <p><font face="Time New Roman" color="#000000"><center>Copyright ©2016 Primajasa All Rights Reserved </center></font></p>
                        </ol>
                    </div>
                </div>
                        <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>