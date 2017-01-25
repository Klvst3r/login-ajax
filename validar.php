<?php 
error_reporting(0); 
session_start(); 


$con = new mysqli("localhost", "dev", "desarrollo", "login-ajax"); 
if ($con->connect_errno) { 
	echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error; exit(); 
} 
@mysqli_query($con, "SET NAMES 'utf8'"); 
	if ($_POST['user'] == null || $_POST['pass'] == null) { 
	echo '<span>Por favor complete todos los campos.</span>'; 
} 
else { 
	$user = $_POST['user']; 
	$pass = $_POST['pass']; 
	
	$consulta = mysqli_query($con, "SELECT user, pass, name FROM usuario WHERE user = '$user' AND pass = '$pass'"); 

	$data = mysqli_fetch_row($consulta);

	$name = $data[2];

	$registro = mysql_fetch_array($consulta);
	if (mysqli_num_rows($consulta) > 0) { 

		$_SESSION["usuario"] = $name; 
		echo '<script>location.href = "welcome.php"</script>'; 
	} 
	else { 
		echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>'; 
	} 
} 
?> 