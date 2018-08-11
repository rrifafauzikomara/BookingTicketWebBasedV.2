<?php 

	include_once "../inc/koneksi.php";

	$id_lokasi = $_POST['id_lokasi']; 

	$getdata = mysqli_query($con,"SELECT * FROM tb_lokasi WHERE id_lokasi ='$id_lokasi'");
	$rows = mysqli_num_rows($getdata);

	$delete = "DELETE FROM tb_lokasi WHERE id_lokasi ='$id_lokasi'";
	$exedelete = mysqli_query($con, $delete);

	$respose = array();

	if($rows > 0)
	{
		if($exedelete)
		{
			$respose['code'] =1;
			$respose['message'] = "Delete berhasil";
		}
		else
		{
		$respose['code'] =0;
		$respose['message'] = "Delete gagal";
		}
	}
	else
	{
		$respose['code'] =0;
		$respose['message'] = "Delete gagal, data tidak ditemukan";
	}
	


	echo json_encode($respose);

 ?>