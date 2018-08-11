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
                    <li class="active">
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
                            Form Tambah Jadwal
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Menu
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data Jadwal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="well">
                <fieldset>
                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="route">Route <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="route" type="text" name="route"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Route">
                                            </div>
                                        </div> 
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam_keb"> Jam Keberangkatan<span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="jam_keb" type="time" name="jam_keb" data-validate-length-range="10,12" class="optional form-control col-md-7 col-xs-12" maxlength="12" placeholder="Masukan Jam Keberangkatan">
                                            </div>
                                        </div>
                                       <div class="item form-group">
                                        <label for="opsi" class="control-label col-md-3">Id Kendaraan</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name='id_kendaraan' requered="requered">
                                            <?php
                                            $sqlkdr = "select * from tb_kendaraan" or die (mysql_error());
                                            $Kendaraan = mysqli_query($con, $sqlkdr);
                                            while($datakdr = mysqli_fetch_array($Kendaraan)) {        
                                            ?>
                                                    <option value="<?php echo $datakdr['id_kendaraan'];?>"><?php echo $datakdr['id_kendaraan'];?>-<?php echo $datakdr['no_polisi'];?></option>
                                                    
                                            <?php

                                           }
                                           ?>
                                        </select>
                                        </div>
                                        </div>
                                         <div class="item form-group">
                                        <label for="opsi" class="control-label col-md-3">Id Supir</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name='id_supir' requered="requered">
                                              <?php
                                            $sqlsup = "select * from tb_supir" or die (mysql_error());
                                            $supir = mysqli_query($con, $sqlsup);
                                            while($datasup = mysqli_fetch_array($supir)) {        
                                            ?>
                                                    <option value="<?php echo $datasup['id_supir'];?>"><?php echo $datasup['id_supir'];?>-<?php echo $datasup['nama_supir'];?></option>
                                                    
                                            <?php

                                           }
                                           ?>
                                        </select>
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga"> Harga<span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="harga" type="number" name="harga" data-validate-length-range="10,12" class="optional form-control col-md-7 col-xs-12" maxlength="12" placeholder="Masukan Jam Keberangkatan">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                        </fieldset>
                        </div>
                                                   
                        <?php
                        $id_jadwal = @$_POST['id_jadwal'];
                        $route = @$_POST['route'];
                        $jam_keb = @$_POST['jam_keb'];
                        $id_kendaraan = @$_POST['id_kendaraan'];
                        $id_supir = @$_POST['id_supir'];
                        $harga = @$_POST['harga'];

                        $tambah = @$_POST['tambah'];

                        if ($tambah) {
                            if ($route == "" || $jam_keb == "" || $harga == "") {
                                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                            } else {
                                $sql_tambah = "insert into tb_jadwal values('', '$route', '$jam_keb', '$id_kendaraan', '$id_supir', '$harga')" or die (mysqli_error());
                                $add = mysqli_query($con, $sql_tambah);
                            }
                        }
                        
                        $id_jadwal = @$_GET['id'];
                        $aksi = @$_GET['aksi'];
                        if(($aksi<>"") and ($id_jadwal<>"")){
                             $sql_delete = "delete from tb_jadwal where id_jadwal='$id_jadwal'" or die (mysqli_error());
                             $delete = mysqli_query($con, $sql_delete);
                             echo "<script type=text/javascript>
                                window.location.href='http://r-fauzi.xyz/admin/datajadwal.php';
                                </script>" ;
                        }
                        ?>

                        <h2 class="page-header">Lihat Data Jadwal</h2>
                        <div class="jumbotron">
                        <fieldset>
                        <form action="" method="post" role="form">
                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <tr style="background-color:#fc0;">
                                <th>Id Jadwal</th>
                                <th>Route</th>
                                <th>Jam Keberangkatan</th>
                                <th>Id Kendaraan</th>
                                <th>Id Supir</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                            <?php
                            $sql = "select * from tb_jadwal" or die (mysql_error());
                            $jadwal = mysqli_query($con, $sql);
                            while($data = mysqli_fetch_array($jadwal)) {        
                            ?>
                            <tr>
                                <td><?php echo $data['id_jadwal']; ?></td>
                                <td><?php echo $data['route']; ?></td>
                                <td><?php echo $data['jam_keb']; ?></td>
                                <td><?php echo $data['id_kendaraan']; ?></td>
                                <td><?php echo $data['id_supir']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td align="center"><a  href="editjadwal.php?id=<?php echo $data['id_jadwal']; ?>" class="btn btn-xs btn-default" title="Edit" >
                                        <i class="fa fa-edit fa-fw"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin akan menghapus');" href="datajadwal.php?id=<?php echo $data['id_jadwal']; ?>&aksi=hapus" class="btn btn-xs btn-default" title="Hapus">
                                        <i class="fa fa-times fa-fw"></i>
                                        </a>
                                        </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </table>
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