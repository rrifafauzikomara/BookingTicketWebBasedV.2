<?php 
	$id = $_GET['id'];
	
	require_once('../inc/koneksi.php');
	
	$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"email"=>$row['email'],
			"nohp"=>$row['nohp'],
			"alamat"=>$row['alamat'],
			"foto"=>$row['foto']
		));

	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
	
?>