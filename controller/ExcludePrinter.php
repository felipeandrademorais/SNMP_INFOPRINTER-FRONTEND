<?php 
	$id = $_POST['id'];
	$ch = curl_init();
	$url = "http://localhost:3000/api/printers/".$id;
	$json = '';
	
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec($ch);
    $result = json_decode($result);
	
    curl_close($ch);
			
	header('Location:../index.php');
	
?>