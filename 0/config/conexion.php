<?php
	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "12345678";
	$db_name = "mariajose";
	
	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	 
	//$sql = "SELECT * FROM $usuarios WHERE usuario = '$username'";
	$sql = $consulta;
	$result = $conexion->query($sql);
	
	return $result;


	//if ($result->num_rows > 0) {     
	//}
	//$row = $result->fetch_array(MYSQLI_ASSOC);
	//if (md5($password)==$row['password']) { 
	//	$_SESSION['loggedin'] = true;
	//	$_SESSION['username'] = $username;
	//	$_SESSION['start'] = time();
	//	$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

	//	echo "Bienvenido! " . $_SESSION['username'];
	//	echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
		
	//} else { 
	//  echo "Username o Password estan incorrectos.";

	//	echo "<br><a href='login.php'>Volver a Intentarlo</a>";
	//}
	 mysqli_close($conexion); 
 ?>