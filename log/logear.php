<?php 
require 'conexion.php';
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
	
$q="Select count(*) as contar from usuario where nombre_usuario='$usuario' and contrasena='$clave' ";
$consulta=mysqli_query($conexion, $q);
$array=mysqli_fetch_array($consulta);
if($array['contar']>0){
	$_SESSION['username']=$usuario;
	$_SESSION['clave']=$clave;

$q2="select count(*) as contar from usuario where nombre_usuario='$usuario' and contrasena='$clave' and tipo='1';";
$consulta2=mysqli_query($conexion, $q2);
$array2=mysqli_fetch_array($consulta2);
	if($array2['contar']==1){
header("location: ../pagina_p.php");
}
	if ($array2['contar']==0){

		header("location: ../procesos/cita.php");

	}
}else{
	echo "datos incorrectos";
	header("location: ../login.php");
} 


 ?>
