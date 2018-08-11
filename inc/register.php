<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="../css/style1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" media="all" />

    <link rel="shortcut icon"  href="../images/logo.jpg"/>

    <script language='javascript' >
        var txt=' Selamat Datang di Website Primajasa *****';
        var speed=300;var refresh=null;function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);}move();
    </script>

</head>
<body>
<div class="container">
			<header>
				<h1> Isi Sesuai Data KTP </h1>
            </header>       
      <div  class="form">
    		<form action="" method="post"> 
                <p class="contact"><label for="name">Nomor KTP</label></p> 
                <input type="number" min="0" maxlength="20" name="no_ktp" class="lg" placeholder="Nomor KTP">
    			<p class="contact"><label for="name">Nama Lengkap</label></p> 
    			<input type="text" name="nama_user" class="lg" placeholder="Nama Lengkap">

    			<p class="contact"><label for="name">Alamat</label></p> 
    			<input type="text" name="alamat" class="lg" placeholder="Alamat Lengkap"> 
    			 <p class="contact"><label for="phone">No HP</label></p> 
           		<input type="number" min="0" maxlength="12" name="no_hp" class="lg" placeholder="Masukan No HP">

    			<p class="contact"><label for="email">Email</label></p> 
    			<input type="email" name="email" class="lg" placeholder="Alamat Email"> 
                
                <p class="contact"><label for="username">Username</label></p> 
    			<input type="text" name="username" class="lg" placeholder="Username"> 
    			 
                <p class="contact"><label for="password">Password</label></p> 
    			<input type="password" name="password" class="lg" placeholder="Password">

    			<div style="margin-top: 10px;">        
            	<input type="submit" name="register" value="Register" class="buttom">
            	<span style="margin-left: 10px;">
                    <button><a href="login.php" class="btn-right">Cancel</a></button>
                </span>
                </div>
                <div>
                <center><p><font face="Time New Roman" color="#000000">Copyright ©2016 Primajasa All Rights Reserved</font></p></center>
                </div>
   			</form>
	 </div>      
</div>
<?php
    include "koneksi.php";
    if (@$_POST['register']) {
        $no_ktp = @$_POST['no_ktp'];
        $nama_user = @$_POST['nama_user'];
        $alamat = @$_POST['alamat'];
        $no_hp = @$_POST['no_hp'];
        $email = @$_POST['email'];
        $username = @$_POST['username'];
        $password = @$_POST['password'];

            if ($no_ktp == '' || $nama_user == '' || $alamat == '' || $no_hp == '' || $email == '' || $username == '' || $password == '') {
                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                } else {
                    $sql_insert = "insert into tb_registrasi values ('','$no_ktp','$nama_user', '$alamat', '$no_hp', '$email', '$username', '$password','user')" or die (mysqli_error());
                    $daftar = mysqli_query($con, $sql_insert);
                if ($daftar) {
                    ?> <script type="text/javascript">alert("Pendaftaran Berhasil, Silahkan Login !!");</script> <?php

                    echo "<script type=text/javascript>
                                window.location.href='http://localhost/primajasa/inc/login.php';
                                </script>" ;
        
                    }
                }

            }
?>
</body>
</html>
