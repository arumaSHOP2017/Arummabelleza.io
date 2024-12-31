<?php 
    require_once "conexión.php"; 
    $id = isset($_GET['id']) ? $_GET['id'] : null;
 
    $sql=$base->prepare("DELETE FROM contacto WHERE Codcontacto=:id"); 
    $sql->bindParam(":id",$id); 
 
    if($sql->execute()){ 
        echo " Datos eliminado correctamente...."; 
    }else{ 
        echo " No se ha podido eliminar el registro..."; 
    } 
?> 