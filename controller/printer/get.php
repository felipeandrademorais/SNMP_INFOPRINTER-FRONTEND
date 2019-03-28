<?php
$json_file = file_get_contents("http://localhost:3000/api/printers");
				
if($json_file){
	$printers = json_decode($json_file, true);
}

echo ('<table class="table table-striped mt-5"><thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">IP</th>
      <th scope="col">Numero de Série</th>
      <th scope="col">Contador</th>
	  <th scope="col">Ultima Atualização</th>
	  <th scope="col">Atualizar</th>
	  <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>'
 );
			
foreach($printers as $e){
	echo "<tr><td>"
		.$e['name']
		."</td><td>".$e['ip']."</td><td>"
		.$e['serial']."</td><td>"
		.$e['counter']."</td><td>"
		.$e['createAt']."</td><td>"
		."<form action='./controller/counter/update.php' method='post'><input type='hidden' name='id' value=".$e['_id']." /><input type='submit' value='update'></submit></form>"."</td><td>"
		."<form action='./controller/printer/destroy.php' method='post'><input type='hidden' name='id' value=".$e['_id']." /><input type='submit' value='X' /></form>"."</td></tr>";
}
echo ('</tbody></table>');	
?>