<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
header("location: login.php");
}else{
	echo"<div class='mydiv'><center><h1 style='color: #ffffff;'>Bienvenido $usuario</h1></center><br><center><a href='log/salir.php'><h3 class='' style='color: #ffffff;'>Salir</h3><a/></center></div>";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<style >
		body {
  background: url('/img/blanco.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
h3{
	color: #1D1919;
}
a{
color: #1D1919;	
}
.mydiv{
	background-color: #1ABC9C;
}
</style>
	<title>Administración</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $hoy = date("Y-m-d");?>

<div class="container" >
<h1 class="display-4" style="color: #BD1515">Busqueda por datos</h1>
						<hr class="bg-info">
	<div class="row"> 
		<div class="col-md-8">
			<form action="procesos/buscar.php" method="POST" class="needs-validation" novalidate>
			<div class="form-group">	
			<label for="nombre"><h3>Nombre:</h3></label><input type="text" class="form-control" id="nombre" name="nombre" placeholder="Cliente" required="yes">
			<div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Llena este campo.</div>
			</div>
				
			<div class="form-group">
			<h3>Apellido</h3><input type="text" class="form-control" id="nombre" name="apellido" placeholder="" required="yes">
				
				<div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Llena este campo.</div>
			</div>
			<div class="form-group">
			<h3>Teléfono</h3><input type="text" onKeyPress="if(this.value.length==10) return false;" min="0" class="form-control" id="nombre" name="telefono" placeholder="10 dígitos" required="yes">
				
				<div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Llena este campo.</div>
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		</form>
		
		<form action="procesos/buscar1.php" method="POST" class="needs-validation" novalidate>
			<div class="form-group">
				<h1 class="display-4" style="color: #BD1515">Busqueda por número de cliente</h1>
						<hr class="bg-info">
			<h2>Número</h2><input type="number" class="form-control" id="nombre" name="id" placeholder="Número de cliente" required="">
			
				<div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Llena este campo.</div>
			</div>

				<button type="submit" class="btn btn-primary">Buscar</button>
		</form>
			<div class="btn-group" role="group" aria-label="Basic example">
				<form action="procesos/cambios_cliente.php" method="POST"><button type="submit"  class="btn btn-outline-danger text-dark"><h5>Cambiar datos de clientes con usuario</h5></button></form>
				<form action="procesos/agenda_citas.php" method="POST"> <button  class="btn btn-outline-danger text-dark"><h5>Citas programadas</h5></button></form>

				<form action="procesos/ingresos.php" method="POST">
					<button type="submit"  class="btn btn-outline-danger text-dark"><h5>Ingresar Cliente</h5></button>
				</form>
				<form action="procesos/lista_clientes.php" method="POST">
					<button type="submit"  class="btn btn-outline-danger text-dark"><h5>Clientes sin usuario</h5></button>
				</form>
				<form action="procesos/cita2.php" method="POST">
					<button type="submit"  class="btn btn-outline-danger text-dark"><h5>Programar citas</h5></button>
				</form>
			</div>		
		</div>
	</div>

</div>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>