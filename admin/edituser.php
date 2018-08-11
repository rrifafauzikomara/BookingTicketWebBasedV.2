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
                    <li class="active">
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
                    <li>
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
                            Form Tambah User
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Menu
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="well">
                    <fieldset>
                    <?php
                       include "../inc/koneksi.php";
                        $id_user = @$_POST['id_user'];
                        $no_ktp = @$_POST['no_ktp'];
                        $nama_user = @$_POST['nama_user'];
                        $alamat = @$_POST['alamat'];
                        $no_hp = @$_POST['no_hp'];
                        $email = @$_POST['email'];
                        $username = @$_POST['username'];
                        $password = @$_POST['password'];
                        $level = @$_POST['level'];

                        $tambah = @$_POST['edit'];

                        if ($tambah) {
                            if ($id_user == "" || $no_ktp == "" || $nama_user == "" || $alamat == "" || $no_hp == "" || $email == "" || $username == "" || $password == "" || $level == "") {
                                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                            } else {
                                $sql_tambah = "update tb_registrasi set no_ktp='$no_ktp',nama_user='$nama_user',alamat='$alamat',no_hp='$no_hp',email='$email', username='$username',password='$password',level='$level' where id_user='$id_user'" or die (mysqli_error());
                                $register = mysqli_query($con, $sql_tambah);
                                
                                echo "<script type=text/javascript>
                                window.location.href='http://r-fauzi.xyz/admin/datauser.php';
                                </script>" ;
                            }
                        }
                                     
                                     $sql = "select * from tb_registrasi where id_user='$_GET[id]'" or die (mysqli_error());
                                     $update = mysqli_query($con, $sql);
                                     $data=mysqli_fetch_array($update);
                                     ?>

                                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        <div class="item form-group">
                                           <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_ktp">No KTP <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['no_ktp']; ?>" type="number" min="0" id="no_ktp" name="no_ktp" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_user">Nama Lengkap <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['nama_user']; ?>" type="text" id="nama_user" name="nama_user" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['alamat']; ?>" id="alamat" type="text" name="alamat"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Alamat Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp"> No Telephone<span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['no_hp']; ?>" id="no_hp" type="number" min="0" name="no_hp" data-validate-length-range="10,12" class="optional form-control col-md-7 col-xs-12" maxlength="12" placeholder="Masukan No Hp atau Tlp">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['email']; ?>" id="email" type="email" name="email"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Email">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['username']; ?>" id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="username" placeholder="Masukan Username" required="required" type="text">
                                            </div>
                                        </div>
                                       <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Password</label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input value="<?php echo $data['password']; ?>" id="password" type="password" name="password"  data-validate-length="0" class="form-control col-md-7 col-xs-12" placeholder="Masukan Password" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">Opsi</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" value="<?php echo $data['level']; ?>" name="level" requered>
                                                    <option>admin</option>
                                                    <option>user</option>
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