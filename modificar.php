<?php
require_once "conexión.php";

$id = isset($_GET['id']) ? $_GET['id'] : null;
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null;

try {
    $sql = $base->prepare("UPDATE contacto SET 
        nombre = :nombre, 
        email = :email, 
        mensaje = :mensaje 
        WHERE id = :id");

    $sql->bindParam(":id", $id);
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":mensaje", $mensaje);

    if ($sql->execute()) {
        echo "Los datos fueron actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
