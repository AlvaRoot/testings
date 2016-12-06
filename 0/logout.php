<?php
//session_star();
//session_unset();
session_destroy();
session_unset();

if($_SESSION[registrado]){
	header("location: login.php");
}

?>