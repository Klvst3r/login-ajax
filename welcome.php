<?php
session_start();

if (isset($_SESSION['usuario']))
{
$user = $_SESSION["usuario"];
//echo "Bienvenido: ".$user;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>BIENVENIDO</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="contenedor">
    <h1>BIENVENIDO : <?php echo $user; ?></h1><hr>
    
    <p> </p>
    
    <p><a href="logout.php">CERRAR SESIÓN</a></p>
</div>
</body>
</html>
<?php
}
else
{
    echo '<script>location.href = "index.php";</script>';
}
?>