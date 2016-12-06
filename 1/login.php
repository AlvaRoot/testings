<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

require_once("conexion.php");

if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }






?>
<!DOCTYPE html>

<html lang="en">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
</head>

<body>

<h1>Login de Usuarios</h1>
<hr />

<form action="login.php" method="post" >

<label>Nombre Usuario:</label><br>
<input name="username" type="text" id="username" required>
<br><br>

<label>Password:</label><br>
<input name="password" type="password" id="password" required>
<br><br>

<input type="submit" name="Submit" value="LOGIN">

</form>
<hr />

<footer>
 &copy;2016
</footer>

 </body>
</html>