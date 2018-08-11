<?php

	include_once "../inc/koneksi.php";
	
	class usr{}
	$id = $_POST['id_lokasi'];
	$nama = $_POST['nama'];
	$idk = $_POST["id_kendaraan"];

	
	if ((empty($nama))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Nama Lokasi tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($idk))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Id Kendaraan tidak boleh kosong";
	 	die(json_encode($response));
	 } else {
		
		$query = mysqli_query($con, " UPDATE tb_lokasi SET nama = '$nama', id_kendaraan = '$idk' WHERE id_lokasi = '$id'");
	
		if ($query){
			$response = new usr();
			$response->success = 1;
			$response->message = "Update berhasil";
			die(json_encode($response));
		} else{ 
			$response = new usr();
			$response->success = 0;
			$response->message = "Update gagal";
			die(json_encode($response)); 
		}
	
	}	

	mysqli_close($con);
	
?>	