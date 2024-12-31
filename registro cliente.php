<!DOCTYPE html> 
<html> 
    <head> 
        <title>Contacto</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href=""> 
    </head> 
    <body> 
        <form action="guardar.php" method="POST"> 
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br> 
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br> 
            <label>Mensaje:</label><br>
            <textarea name="mensaje" rows="5" required></textarea><br><br> 
            <input type="submit" name="enviar" value="Guardar"> 
        </form> 

        <?php 
            if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
                require_once "conexion.php"; 

                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $mensaje = $_POST['mensaje'];

                $sql = $base->prepare("INSERT INTO contacto 
                    (nombre, email, mensaje) 
                    VALUES (:nombre, :email, :mensaje)");

                $sql->bindParam(":nombre", $nombre);
                $sql->bindParam(":email", $email);
                $sql->bindParam(":mensaje", $mensaje);

                if ($sql->execute()) {
                    echo "Datos guardados correctamente.";
                } else {
                    echo "No se ha podido guardar el registro.";
                }
            } 
        ?> 
    </body> 
</html>

