<?php
@session_start();
include "koneksi.php";

if (@$_SESSION['admin']) {
	header("location: ../admin/home.php");
} elseif (@$_SESSION['user']) {
	header("location: ../member/home.php");
} else {
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->

		<link rel="shortcut icon"  href="../images/logo.jpg"/>

<script language='javascript' >
        var txt=' Selamat Datang di Website Primajasa *****';
        var speed=300;var refresh=null;function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);}move();
    </script>
</head>
<body>
	 <div class="main">
		<div class="login-form">
			<h1>Selamat Datang</h1>
					<div class="head">
						<img src="../images/user.png" alt=""/>
					</div>
				<form action="" method="post">
					<div>
						<input type="text" name="username" 	class="lg" placeholder="Username" >
						<div style="margin-top: 10px;">
						<input type="password" name="password"	class="lg"	placeholder="Password">
						</div>
						<div style="margin-top: 10px;">
							<input type="submit" name="login" value="Login" class="btn" >
						</div>
					</div>	
					<p>
					<button><a class="btn-right" type="submit" href="register.php">Register</a></button>
					<button><a href="../index.php" class="btn-right">Cancel</a></button>
					</p>
				</form>
				<div class="well">
                    <p><font face="Time New Roman" color="#000000">Copyright ©2016 Primajasa All Rights Reserved</font></p>
                </div>
                	
				<?php
				$username = mysqli_real_escape_string($con, @$_POST['username']);
				$password = mysqli_real_escape_string($con, @$_POST['password']);
				// $username = @$_POST['username'];
				// $password = @$_POST['password'];
				$login = @$_POST['login'];

				if ($login) {
					if($username == "" || $password == "") {
						?> <script type="text/javascript">alert("Username atau Password tidak boleh kosong !!");</script> <?php
					} else {
						$sql = "select * from tb_registrasi where username = '$username' and password = '$password' " or die (mysqli_error());
						$login = mysqli_query($con, $sql);
						$data = mysqli_fetch_array($login);
						$cek = mysqli_num_rows($login);
						if ($cek >= 1) {
							if ($data['level'] == "admin") {
								@$_SESSION['admin'] = $data['id_user'];
								header("location: ../admin/home.php");
							} else if($data['level'] == "user") {
								@$_SESSION['user'] = $data['id_user'];
								@$_SESSION['ktp'] = $data['no_ktp'];
								@$_SESSION['nama'] = $data['nama_user'];
								@$_SESSION['alamat'] = $data['alamat'];
								@$_SESSION['hp'] = $data['no_hp'];
								
								header("location: ../member/home.php");
							}
					} else {
						?> <script type="text/javascript">alert("Login Gagal!!");</script> <?php
						

					}
				}
			}
				?>
			</div>
		</div>
</body>
</html>

<?php
}
?>