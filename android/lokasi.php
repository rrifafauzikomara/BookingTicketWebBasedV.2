<?php 
	
	include_once "../inc/koneksi.php";

	$query = mysqli_query($con, "SELECT * FROM tb_lokasi ORDER BY nama ASC");
	
	$json = '{"Lokasi": [';

	
	// create looping dech array in fetch
	while ($row = mysqli_fetch_array($query)){

	// quotation marks (") are not allowed by the json string, we will replace it with the` character
	// strip_tag serves to remove html tags on strings
		$char ='"';

		$json .= 
		'{
			"id_lokasi":"'.str_replace($char,'`',strip_tags($row['id_lokasi'])).'", 
			"nama":"'.str_replace($char,'`',strip_tags($row['nama'])).'",
			"lng":"'.str_replace($char,'`',strip_tags($row['lng'])).'",
			"lat":"'.str_replace($char,'`',strip_tags($row['lat'])).'",
			"id_kendaraan":"'.str_replace($char,'`',strip_tags($row['id_kendaraan'])).'"
		},';
	}

	// omitted commas at the end of the array
	$json = substr($json,0,strlen($json)-1);

	$json .= ']}';

	// print json
	echo $json;
	
	mysqli_close($con);
	
?>