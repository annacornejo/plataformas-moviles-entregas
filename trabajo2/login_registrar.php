<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $pass = $_POST["contraseña"];
//login

	$query = mysqli_query($conn, "SELECT * FROM tecnica4 WHERE nombre = '$nombre' AND contraseña = '$pass'");

	$nr = mysqli_num_rows($query);
	if ($nr==1) 
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='paginaprin.html'</script>";
	}
	else
	{
	   echo "<script> alert('Usuario no existente'); window.location='index.html'</script>";	
	}
}

//registrar
//if (isset($_POST["btnregistrar"]))
//{
	//$sqlgrabar="INSERT INTO login(usuario, password) values('$nombre', '$pass')";
	//if (mysqli_query($conn, $sqlgrabar))
	//{
		//echo "<script> alert('usuario regsitrado con exito: $nombre'); window.location='index.html'</script>";
	//}
	//else
	//{
		//echo "error:".mysqli_error($conn);
	//}
//}
?>