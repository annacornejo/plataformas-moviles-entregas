
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $pass = $_POST["contraseña"];

    $sql = "INSERT INTO tecnica4(nombre, apellido, correo, contraseña) VALUES ('$nombre', '$apellido', '$correo', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario registrado con éxito: $nombre'); window.location='paginaprin.html';</script>";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
