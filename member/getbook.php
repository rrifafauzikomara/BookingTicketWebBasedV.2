<?php
include "../inc/koneksi.php";
$hasil1="select * from tb_member where no_pesanm='$_GET[q]'";
$pesan1=mysqli_query($con, $hasil1);
$data1=mysqli_fetch_array($pesan1);
echo $data1["namam"];

?>



                                    