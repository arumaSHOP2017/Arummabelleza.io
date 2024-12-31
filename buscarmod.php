<!DOCTYPE html> 
<html> 
    <head> 
        <title>Modificar Registros</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href=""> 
    </head> 
    <body> 
        <form action="modificar.php" name="modificar" method="GET"> 
            <label>Codigo a Buscar:</label><br><input type="text" name="id" required=""><br></br> 
            <label>Datos a Reemplazar:</label><br></br> 
            <label>Nombres</label><br><input type="text" name="nombres" required=""><br></br> 
            <input type="submit" name="enviar" value="Buscar"> 
        </form> 
          
    </body> 
</html>