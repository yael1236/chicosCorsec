<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$puesto = isset($_POST['puesto']) ? $_POST['puesto'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Conexion a Data
$con = new SQLite3("../data/data.db") or die("Problemas para conectar");

// Consulta a SQL
$cs = $con -> query("INSERT INTO usuarios (nombre, puesto, correo, contrasena) VALUES ('$nombre', '$puesto', '$correo', '$password')");

// Close Conexion
$con -> close();

// html
echo "
<script>
    alert('Datos Guardados')
    window.location='../../index.php'
</script>


";

?>