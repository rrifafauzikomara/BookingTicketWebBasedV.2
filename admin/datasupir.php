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
                    <li class="active">
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
                            Form Tambah Supir
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Menu
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Data Supir
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="well">
                    <fieldset>
									<?php
                    $carikode = "select max(id_supir) from tb_supir" or die (mysqli_error());
                    $kode = mysqli_query($con, $carikode);
                    $datakode = mysqli_fetch_array($kode);
                    if ($datakode) {
                            $nilaikode = substr($datakode[0], 1);
                            $kode = (int) $nilaikode;
                            $kode = $kode + 1;
                            $hasilkode = "S".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $hasilkode = "S001";
                    }
                    ?>
                                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_supir">Kode Supir <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="id_supir" value="<?php echo $hasilkode;?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="id_supir" placeholder="" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_supir">Nama Lengkap <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="nama_supir" name="nama_supir" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_supir">Alamat <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="alamat_supir" type="text" name="alamat_supir"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Alamat Lengkap">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp"> No Telephone<span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="no_hp" type="text" name="no_hp" data-validate-length-range="10,12" class="optional form-control col-md-7 col-xs-12" maxlength="12" placeholder="Masukan No Hp atau Tlp">
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
                        $id_supir = @$_POST['id_supir'];
                        $nama_supir = @$_POST['nama_supir'];
                        $alamat_supir = @$_POST['alamat_supir'];
                        $no_hp = @$_POST['no_hp'];

                        $tambah = @$_POST['tambah'];

                        if ($tambah) {
                            if ($id_supir == "" || $nama_supir == "" || $alamat_supir == "" || $no_hp == "") {
                                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                            } else {
                                $add = "insert into tb_supir values('$id_supir', '$nama_supir', '$alamat_supir', '$no_hp')" or die (mysqli_error());
                                $add1 = mysqli_query($con, $add);
                                ?>
                                 <script type="text/javascript">location.href="datasupir.php";</script> 
                            <?php
                            }

                        }
						
						$id_supir = @$_GET['id'];
						$aksi = @$_GET['aksi'];
						if(($aksi<>"") and ($id_supir<>"")){
							 $sql_delete = "delete from tb_supir where id_supir='$id_supir'" or die (mysqli_error());
                             $delete = mysqli_query($con, $sql_delete);
							 echo "<script type=text/javascript>
                                window.location.href='http://localhost/primajasa/admin/datasupir.php';
                                </script>" ;
						}
                        ?>
                        

                        <h2 class="page-header">Lihat Data Supir</h2>
                        <div class="jumbotron">
                        <fieldset>
                        <form action="" method="post" role="form">
                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                            <tr style="background-color:#fc0;">
                                <th>Id Supir</th>
                                <th>Nama Supir</th>
                                <th>Alamat Supir</th>
                                <th>No HP</th>
                                <th>Opsi</th>
                            </tr>
                            <?php
                            $sql = "select * from tb_supir" or die (mysqli_error());
                            $tampil = mysqli_query($con, $sql);
                            while($data = mysqli_fetch_array($tampil)) {        
                            ?>
                            <tr>
                                <td><?php echo $data['id_supir']; ?></td>
                                <td><?php echo $data['nama_supir']; ?></td>
                                <td><?php echo $data['alamat_supir']; ?></td>
                                <td><?php echo $data['no_hp']; ?></td>
                                <td align="center"><a  href="editsupir.php?id=<?php echo $data['id_supir']; ?>" class="btn btn-xs btn-default" title="Edit" >
                                        <i class="fa fa-edit fa-fw"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin akan menghapus');" href="datasupir.php?id=<?php echo $data['id_supir']; ?>&aksi=hapus" class="btn btn-xs btn-default" title="Hapus">
                                        <i class="fa fa-times fa-fw"></i>
                                        </a>
                                        </td>
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
