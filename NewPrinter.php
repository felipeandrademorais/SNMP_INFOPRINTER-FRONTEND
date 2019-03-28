<?php include("./Includes/Header.php"); ?>
<div class='container'>
 <div class="py-5">
	<form action='./controller/PrinterController.php' method='post'>
	
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>Modelo </label><input type='text' class="form-control" name='modelo' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>IP </label><input type='text' class="form-control" name='ip' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>Comunidade</label><input type='text' class="form-control" name='comunidade' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>Numero de Série </label><input type='text' class="form-control" name='serie' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>OID </label><input type='text' class="form-control" name='oid' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<label>Contador </label><input type='text' class="form-control" name='contador' />
			</div>
		</div>
		<div class='row'>
			<div class="col-md-6 mb-3">
				<input type="submit" value="Submit" />
			</div>
		</div>
		
	</form>
 </div>
</div>	
