
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
<center><a href="javascript:Clickheretoprint()">Print/Cetak Tiket</a><a href="../index.php"><center>Home</a></center><br><br>
<div id="print_content" style="width:1350;">
	<img src="../images/primajasa.jpg">
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Silahkan Print/Cetak Tiket Pemesanan Anda</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Rincian Pemesanan Tiket Anda</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>

<?php
include('../inc/koneksi.php');
$id=$_GET['id'];

$result = "SELECT * FROM tb_user WHERE no_pesan='$id'" or die(mysqli_error());
$print = mysqli_query($con, $result);
$nomorkursi="";
while($row = mysqli_fetch_array($print))
	{
		$notrans=$row['no_pesan'];
    $nama=$row['nama'];
    $id_jadwal=$row['id_jadwal'];
    $tgl=$row['tgl_keb'];
    $jml_tiket=$row['jml_tiket'];
    $harga=$row['harga'];
    $no_pesan=$row['no_pesan'];
    $status=$row['status'];
		$nomorkursi=$row['seat'].','.$nomorkursi;
		$total=$row['sub'] + $row['no_pesan'];
	}
    echo '<font color=#"000000" size="3">Nomor Transaksi: '.$notrans.'<br><br>';
    echo 'Nama Lengkap: '.$nama.'<br><br>';
    echo 'Jadwal Keberangkatan: '.$id_jadwal.'<br><br>';
    echo 'Tanggal Keberangkatan: '.$tgl.'<br><br>';
    echo 'Jumlah Ticket: '.$jml_tiket.'<br><br>';
	  echo 'Harga Satuan: '.$harga.'<br><br>';
    echo 'Total harga yang harus dibayar: '.$total.'<br><br>';
    echo 'Nomor Kursi: '.$nomorkursi.'<br><br>';
    echo '<center><div style="height: 30%; width: 50%;">';
    echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=Nomor Booking : $notrans, Nama Lengkap : $nama, Id Keberangkatan : $id_jadwal, Nomor Kursi : $nomorkursi Status : $status&choe=UTF-8' title='Link to Google.com' />";
   
?>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Terima Kasih Telah Melakukan Pemesanan Tiket   
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>