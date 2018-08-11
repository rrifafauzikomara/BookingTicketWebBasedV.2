<?php

	 include_once "../inc/koneksi.php";

	 class usr{}

	 $nama = $_POST["nama"];
	 $email = $_POST["email"];
	 $nohp = $_POST["nohp"];
	 $alamat = $_POST["alamat"];
	 $username = $_POST["username"];
	 $password = $_POST["password"];
	 $confirm_password = $_POST["confirm_password"];

	 if ((empty($nama))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Nama tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($email))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Email tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($nohp))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Nomor Hp tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($alamat))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Alamat tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($username))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom username tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($password))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom password tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($confirm_password)) || $password != $confirm_password) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Konfirmasi password tidak sama";
	 	die(json_encode($response));
	 } else {
		 if (!empty($username) && $password == $confirm_password){
		 	$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_pegawai WHERE username='".$username."'"));

		 	if ($num_rows == 0){
		 		$query = mysqli_query($con, "INSERT INTO tb_pegawai (id, nama, email, nohp, alamat, username, password, foto, confirmed) VALUES(0, '".$nama."', '".$email."', '".$nohp."', '".$alamat."', '".$username."','".$password."','http://r-fauzi.xyz/android/images/default.png', 'Not Active')");

		 		if ($query){
		 			$response = new usr();
		 			$response->success = 1;
		 			$response->message = "Register berhasil, silahkan login.";
		 			die(json_encode($response));

		 		} else {
		 			$response = new usr();
		 			$response->success = 0;
		 			$response->message = "Register gagal";
		 			die(json_encode($response));
		 		}
		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Username sudah ada";
		 		die(json_encode($response));
		 	}
		 }
	 }

	 mysqli_close($con);

?>	