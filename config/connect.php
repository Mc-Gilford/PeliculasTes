<?php
class Conectar{
	public static function conexion()
	{
		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "film";
		/*$con = @mysqli_connect($server, $username, $password)or die("no se ha podido establecer la conexion");
		$sdb = @mysqli_select_db($con, $db);*/
		$con = new mysqli($server, $username, $password, $db);
		return $con;
	}
}
	
?>