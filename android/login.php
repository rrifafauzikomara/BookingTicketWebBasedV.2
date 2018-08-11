<?php
include_once "../inc/koneksi.php";

	 class usr{}
	
	 $username = mysqli_real_escape_string($con, @$_POST['username']);
	 $password = mysqli_real_escape_string($con, @$_POST['password']);
	
	 if ((empty($username)) || (empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Data Tidak Boleh Kosong"; 
	 	die(json_encode($response));
	 }
	
	 $query = mysqli_query($con, "SELECT * FROM tb_pegawai WHERE username='$username' AND password='$password'");
	 while ($row = mysqli_fetch_array($query)) {
	 	$id = $row['id'];
	 	$username = $row['username'];
	 	$nama = $row['nama'];
	 	$status = $row['confirmed'];
	 }
	 
	 if ($status == "Active"){
		 	$response = new usr();
		 	$response->success = 1;
		 	$response->id = $id;
		 	$response->username = $username;
		 	$response->message = "Selamat datang ".$nama;
		 	die(json_encode($response));
		
	 } elseif ($status == "Not Active") {
			 	$response = new usr();
			 	$response->success = 2;
			 	$response->message = "Akun Kamu Tidak Aktif";
			 	die(json_encode($response));

	 } else { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau Password Salah";
	 	die(json_encode($response));
	 }
	
	 mysqli_close($con);

?>