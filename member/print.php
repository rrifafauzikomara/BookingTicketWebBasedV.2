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

<link rel="shortcut icon"  href="../images/logo.jpg"/>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";  
  disp_setting+="scrollbars=yes,width=1300, height=540, left=30, top=50"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>PT PRIMAJASA</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 1200px; font-size:50px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body><table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<center><a href="javascript:Clickheretoprint()">Print/Cetak Tiket</a><a href="home.php"><center>Home</a></center><br><br>
<div id="print_content" style="width:1350;">

<table width="708" border="2" cellpadding="3" cellspacing="5 " bgcolor="#00FF00">
    <strong><font color="#000000" size="4">Silahkan Print/Cetak Tiket Pemesanan Anda</font></strong><br><br>
<tr>
  <th><div align="center">No Booking</div></th>
  <th><div align="center">Nama Lengkap</div></th>
  <th><div align="center">Nama Orang Ke 2</div></th>
  <th><div align="center">ID Jadwal</div></th>
  <th><div align="center">Tanggal</div></th>
  <th><div align="center">Jumlah Tiket</div></th>
  <th><div align="center">Harga</div></th>
  <th><div align="center">No Kursi</div></th>
  <th><div align="center">Total</div></th>
</tr>

<?php
include('../inc/koneksi.php');
$id=$_GET['id'];

$result = "SELECT * FROM tb_member WHERE no_pesanm='$id'" or die(mysqli_error());
$print = mysqli_query($con, $result);
$nomorkursi="";
while($row = mysqli_fetch_array($print))
  {

    $notrans=$row['no_pesanm'];
    $nama=$row['namam'];
    $nama2ndm=$row['nama2ndm'];
    $id_jadwal=$row['id_jadwal'];
    $tgl=$row['tgl_kebm'];
    $jml_tiket=$row['jml_tiketm'];
    $harga=$row['hargam'];
    $nomorkursi=$row['seatm'].','.$nomorkursi;
    $total=$row['totalm'] + $row['no_pesanm'];
  }
                    ?>

<tr>
                        <td><div align="center"><?php echo $notrans; ?></div></td>
                        <td><div align="center"><?php echo $nama; ?></div></td>
                        <td><div align="center"><?php echo $nama2ndm; ?></div></td>
                        <td><div align="center"><?php echo $id_jadwal; ?></div></td>
                        <td><div align="center"><?php echo $tgl; ?></div></td>
                        <td><div align="center"><?php echo $jml_tiket; ?></div></td>
                        <td><div align="center"><?php echo $harga; ?></div></td>
                        <td><div align="center"><?php echo $nomorkursi; ?></div></td>
                        <td><div align="center"><?php echo $total; ?></div></td>
                    </tr>
</table>
<br>
<br>
<br>

<strong><font color="#000000" size="4">Pembayaran Dapat Melalui Transfer Ke Rekening Berikut</font></strong><br><br>
<table width="708" border="2" cellpadding="3" cellspacing="5 " bgcolor="#00FF00">
<tr>
<td><center><font>Daftar Nama Bank</font></center></td>
  <td><center><font>BRI </font></center></td>
  <td><center><font>BRI</font></center></td>
  <td><center><font>BCA</font></center></td>
</tr>
<tr>
<td><center><font>No Rekening</font></center></td>
  <td><center><font> 49234924724293</font></center></td>
  <td><center><font> 32847827343273</font></center></td>
  <td><center><font> 89478293747382</font></center></td>
</tr>
<tr>
<td><center><font>Atas Nama</font></center></td>
  <td><center><font>Akbar Pambudi Utomo</font></center></td>
  <td><center><font>Julham Ramadhana</font></center></td>
  <td><center><font>Muhammad Adam</font></center></td>
</tr>
</table><br>

<br>
<br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="4">Batas Waktu Pembayaran Selama 2 Jam, Lebih Dari Itu Maka Tiket Yang Anda Pesan Maka Akan Batal</font></strong><br></div>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="4">Terima Kasih Telah Melakukan Pemesanan Tiket   
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>