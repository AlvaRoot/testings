<?php
	require_once("config/cnx.php");
	if(!$_SESSION[registrado]){
		header("location: index.php");
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