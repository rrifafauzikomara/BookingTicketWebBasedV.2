<?php
	 include_once "../inc/koneksi.php";
	 class usr{}

	 $nama = $_POST["nama"];
	 $lng = $_POST["lng"];
	 $lat = $_POST["lat"];
	 $id_kendaraan = $_POST["id_kendaraan"];
	 $tgl = $_POST['tgl'];
	 $time = $_POST['time'];

	 if ((empty($id_kendaraan))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Id Kendaraan tidak boleh kosong";
	 	die(json_encode($response));
	 } else {
		$query = mysqli_query($con, "INSERT INTO tb_lokasi (id_lokasi, nama, lng, lat, id_kendaraan, tgl, time) VALUES(0, '".$nama."', '".$lng."','".$lat."','".$id_kendaraan."','".$tgl."','".$time."')");
			if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Tambah Lokasi berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Tambah Lokasi gagal";
		 		die(json_encode($response));
		 	}
	    }

	 mysqli_close($con);

?>	