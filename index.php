<?php
session_start();

if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "welcome.php";</script>';
}
else
{
?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="utf-8"/>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>Login</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="js/rainbows.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
    function Validar(){  
    	var val, user,pass;
		user=document.getElementById("userName").value;  
		pass=document.getElementById("userPass").value;  
		$.ajax({
                url: "validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                   $('#resultado').html(resp)
                  // alert(resp);
                }        
            });
		}  
  </script>

	<script>
		$(document).ready(function(){
			$("#submit1").hover(
				function() {
					$(this).animate({"opacity": "0"}, "slow");
				},
				function() {
					$(this).animate({"opacity": "1"}, "slow");
			});
	 	});
	</script>
</head>
<body>
	<div id="wrapper">

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return false">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">
			<h2>Login</h2>

			
			
			<div id="username_input">
				<div id="username_inputleft"></div>
				<div id="username_inputmiddle">
					<input type="text" name="userName" id="userName" value="" placeholder="UserName" >
				</div>
				<div id="username_inputright"></div>
			</div>
			<div id="password_input">
				<div id="password_inputleft"></div>
				<div id="password_inputmiddle">
					<input type="password" name="pass" id="userPass" value="" placeholder="********" >
				</div>
				<div id="password_inputright"></div>
			</div>
			<div id="submit">
				
				<!-- <input type="image" src="img/submit_hover.png" id="submit1" value="Ingresar" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">-->
				<input type="image" src="img/submit_hover.png" id="submit1" value="Ingresar" onclick="Validar()">
				<input type="image" src="img/submit.png" id="submit2" value="Ingresar"> -->
				<!-- <button onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">Ingresar</button> 
				<button onClick="Validar(document.getElementById('user').value, document.getElementById('pass').value);";>Ingresar</button> -->
			</div>

		<div id="resultado"></div>
		
		</div>

		<div id="wrapperbottom"></div>


	</form>

	</div>
</body>
</html>
<?php
}
?>