<?php

$servername = "localhost"; 
$username = "root";      
$password = "";          
$dbname = "aruma_shop"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

$sql = "INSERT INTO contacto (nombre, email, mensaje) 
        VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos fueron guardados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
