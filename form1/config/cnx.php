<?php
	$conexion = mysql_connect('localhost', 'root', '12345678') or die ("Error en la conexión");
	$db = mysql_select_db('mariajose');
	
	session_start();
	
	function clean($s){
		if(is_array($s)){
			foreach($s as $c => $v){
				$s[$c] = mysql_real_escape_string($v);
			}
		}else{
			$s = mysql_real_escape_string($s);
		}
		//echo $s;
		return $s;
	}
?>