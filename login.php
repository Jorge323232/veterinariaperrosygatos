<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>login sesion</title>
	
<style >
		body {
  background: url('/img/aquared.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>

</head>
<body>
	
<center>
<div class="p-3 mb-2 text-dark">
<div class="container">
  <h2>LOGGIN</h2>
  <p>INGRESA TUS DATOS</p>
  <div class="card" style="width:400px">
    <img class="card-img-top, mx-auto d-block" src="/img/login3.png" alt="Card image" style="width:50%">
    <div class="card-body">
    <form  action="log/logear.php" method="POST" class="needs-validation" novalidate>
    	<div class="form-group">
    		 <p class="text-success"><h3>Nombre de usuario:</h3></p>
		<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Enter username" required >
		<div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Por favor completa los datos.</div>
		<br>
	</div>
	<div class="form-group">
    <p class="text-success"><h3>Contraseña:</h3></p>
      <input type="password" class="form-control" id="clave" placeholder="Contraseña" name="clave" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor completa los datos.</div>
    </div>
		
		
		<button type="submit" class="btn btn-primary">Entrar</button>
	</form>  
    </div>
  </div>
  <br>


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
	

	</div>
</center>
</body>
</html>