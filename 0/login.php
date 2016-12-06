<?php
	require_once('config/conexion.php');
	
	if($_POST[sublogin]){
		$_POST = clean($_POST);
		
	//	$res = mysql_query("select * from usuarios where usuario = '$_POST[user]' and pass = '$_POST[pass]'");
		
	//	echo mysql_num_rows($res);
	//	if(mysql_num_rows($res)){
	//		$row = mysql_fetch_array($res);
	//		$_SESSION[registrado] = $row[id];
	//	}else{
	//		$mensaje = '<br />Nombre de Usuario / Contraseña incorrectos<br />';
	//	}
	//}
	
	//if($_SESSION[registrado]){
	//	header("location: index.php");
	//	exit;
	//}else{
		
			//if ($result->num_rows > 0) {     
	//}
	
	if ($result->num_rows > 0) {     
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (md5($password)==$row['password']) { 
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
			echo "Bienvenido! " . $_SESSION['username'];
			echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
		} else { 
			echo "Username o Password incorrectos.";
			echo "<br><a href='login.php'>Volver a Intentarlo</a>";
		}
	}
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php echo $mensaje; ?>
		<form method="POST" action="login.php">
			<table cellspacing=0 border=1>
				<th colspan=2>
					Login
				</th>
				<tr>
					<td>
						Usuario
					</td>
					<td>
						<input type="text" id="user" name="user" value="<?php '.$POST[user].' ?>">
					</td>
				</tr>
				<tr>
					<td>
						Contraseña
					</td>
					<td>
						<input type="text" id="password" name="pass" value="<?php '.$POST[pass].' ?>">
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<input type="submit" id="sublogin" name="sublogin" value="login">
					</td>
				</tr>
			</table>
		</form>
	</body>
<?php
	}
?>