<?php 
	$id = $_POST['id'];

	$ch = curl_init();
	$url = "http://localhost:3000/api/counter/".$id;
	
	curl_setopt($ch, CURLOPT_URL, $url);
		
	$result = curl_exec($ch);
	
    $result = json_decode($result);
	
    curl_close($ch);
			
	header('Location:../../index.php');
	
?>