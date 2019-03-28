<?php 
	$modelo = $_POST['modelo'];
	$ip = $_POST['ip'];
	$comunidade = $_POST['comunidade'];
	$oid = $_POST['oid'];
	$serie = $_POST['serie'];
	$contador = $_POST['contador'];	


	$ch = curl_init("http://localhost:3000/api/printers");
		
	$jsonData = array(
		"name" => $modelo,
		"ip" => $ip,
		"comunity" => $comunidade,
		"serial" => $serie,
		"oid_counter" => $oid,
		"counter" => $contador 
	);
			
	$jsonDataEncoded = json_encode($jsonData);

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

	$result = curl_exec($ch);
			
	header('Location:../../index.php');
	
?>