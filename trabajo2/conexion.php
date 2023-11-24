<?php

//$dbhost="localhost";
//$dbuser="id19187424_tecnica4";
//$dbpass="Annaymati27@";
//$dbname="id19187424_basededatos";

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="escuela";

$conn =mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");

if(!$conn)
{
	die("No hay conexion:".mysqli_connect_error());
}
?>
