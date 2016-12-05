<?php
	require_once("config/conexion.php");
	if(!$_SESSION[registrado]){
		header("location: login.php");
		exit;
	}
?>
<html>
	<head>
		<title>index</title>
	</head>
	<body>
		<?php include_once("menu.php");?>
	<br />
	</body>
</html>
