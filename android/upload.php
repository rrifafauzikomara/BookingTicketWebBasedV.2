<?php

	include_once "../inc/koneksi.php";
	
	class usr{}
	
	$id = $_POST['id'];
	$foto = $_POST['foto'];
	$nama = $_POST['nama'];
	$email = $_POST["email"];
	$nohp = $_POST["nohp"];
	$alamat = $_POST["alamat"];

	
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
	 } else {

		$random = random_word(20);
		$path = "images/".$random.".png";
		
		// untuk menyimpan lokasi gambar yang telah di upload
		$actualpath = "http://192.168.100.69/primajasa/android/$path";
		
		$query = mysqli_query($con, " UPDATE tb_pegawai SET nama = '$nama', email = '$email', nohp = '$nohp', alamat = '$alamat', foto = '$actualpath' WHERE id = '$id'");
	
		if ($query){
			file_put_contents($path,base64_decode($foto));
			$response = new usr();
			$response->success = 1;
			$response->message = "Upload berhasil";
			die(json_encode($response));
		} else{ 
			$response = new usr();
			$response->success = 0;
			$response->message = "Upload gagal";
			die(json_encode($response)); 
		}
	
	}	
	
	// fungsi random string pada gambar untuk menghindari nama file yang sama
	function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	}

	mysqli_close($con);
	
?>	