<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "aruma_shop";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensajeError = "";
$mensajeExito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        $mensajeError = "Todos los campos son obligatorios.";
    } else {

        $sql = "INSERT INTO contacto (nombre, email, mensaje) 
                VALUES ('$nombre', '$email', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            $mensajeExito = "Los datos fueron guardados correctamente.";
        } else {
            $mensajeError = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aruma - Tienda de Belleza">
    <meta name="author" content="Tu Nombre">
    <title>Aruma</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Header y Menú de Navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="aruma logo ico.png" alt="Aruma Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Inicio -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Aruma Tu Belleza, Nuestro Compromiso</h1>
            <p>Aruma es una marca peruana que ofrece productos de belleza de 
                alta calidad con ingredientes naturales que resaltan tu belleza única.</p>
        </div>
        <div class="hero-animation">
            <div class="video-carousel">
                <video autoplay muted loop class="active">
                    <source src="aruma video.MP4" type="video/mp4">
                </video>
                <video autoplay muted loop>
                    <source src="aruma video 2.MP4" type="video/mp4">
                </video>
                <video autoplay muted loop>
                    <source src="aruma video 3.MP4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Sección de Productos -->
    <section id="productos" class="productos">
        <h2>Nuestros Productos</h2>
        <p>Encuentra maquillaje, cuidado de la piel, y mucho más</p>
        <div class="product-grid">
            <!-- Productos ejemplo -->
            <div class="product-item" onclick="toggleProductInfo(1)">
                <img src="https://aruma.vtexassets.com/assets/vtex.file-manager-graphql/images/68b45fa8-26db-4607-8244-92595f939abc___9da403200a5a12da7a2a6eb43bb7d8bb.png" alt="Producto 1">
                <h3>Maquillaje</h3>
            </div>
            <div id="product-info-1" class="product-info">
                <p>Descubre nuestra línea de maquillaje de alta calidad. Con fórmulas ligeras y de larga duración, nuestros productos te ofrecen una cobertura perfecta, con acabados naturales que resaltan tu belleza. Desde bases, correctores hasta sombras y labiales, encuentra todo lo que necesitas para un look fresco y sofisticado</p>
            </div>
    
            <!-- Producto 2 -->
            <div class="product-item" onclick="toggleProductInfo(2)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/169174/aruma_3-min.png?v=637563494482330000" alt="Producto 2">
                <h3>Cuidado de la Piel</h3>
            </div>
            <div id="product-info-2" class="product-info">
                <p>Nuestra gama de productos para el cuidado de la piel está diseñada para hidratar, nutrir y proteger tu rostro y cuerpo. Desde limpiadores hasta cremas anti-edad, cada fórmula está elaborada con ingredientes naturales que ayudan a mantener tu piel suave, luminosa y saludable.</p>
            </div>
    
            <!-- Producto 3 -->
            <div class="product-item" onclick="toggleProductInfo(3)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/162705/1013162.jpg?v=637400641454400000" alt="Producto 3">
                <h3>Fragancias</h3>
            </div>
            <div id="product-info-3" class="product-info">
                <p>Sumérgete en un mundo de aromas con nuestras fragancias exclusivas. Cada perfume está diseñado para dejar una huella única, combinando notas florales, frutales y amaderadas. Encuentra tu fragancia ideal que te acompañará todo el día.</p>
            </div>
    
            <!-- Producto 4 -->
            <div class="product-item" onclick="toggleProductInfo(4)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/201721/1026776-PACK-BE-NATURAL-ARGAN-1.jpg?v=638666324442330000" alt="Producto 4">
                <h3>Cuidado del Cabello</h3>
            </div>
            <div id="product-info-4" class="product-info">
                <p>Nuestros productos para el cuidado del cabello están formulados para darles nutrición, suavidad y brillo. Con ingredientes naturales como el aceite de argán y la queratina, cada shampoo, acondicionador y tratamiento capilar fortalece el cabello desde la raíz, dejándolo saludable y radiante.</p>
            </div>
    
            <!-- Producto 5 -->
            <div class="product-item" onclick="toggleProductInfo(5)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/175974/1010407_1.jpg?v=637835230785030000" alt="Producto 5">
                <h3>Mascarillas Corporales</h3>
            </div>
            <div id="product-info-5" class="product-info">
                <p>Las mascarillas corporales de Aruma están formuladas para ofrecerte una experiencia de spa en casa. Con ingredientes naturales como arcillas, hierbas y aceites esenciales, nuestras mascarillas rejuvenecen y revitalizan tu piel, dejándola más suave y tersa.</p>
            </div>
    
            <!-- Producto 6 -->
            <div class="product-item" onclick="toggleProductInfo(6)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/194733-800-auto?v=638506290981030000&width=800&height=auto&aspect=true" alt="Producto 6">
                <h3>Aceites Esenciales</h3>
            </div>
            <div id="product-info-6" class="product-info">
                <p>Los aceites esenciales de Aruma están creados para brindarte una experiencia de relajación y bienestar. Con aceites puros y naturales, nuestros productos son perfectos para masajes, aromaterapia o para agregar a tu rutina de cuidado personal. Disfruta de sus beneficios en cada aplicación.</p>
            </div>
    
            <!-- Producto 7 -->
            <div class="product-item" onclick="toggleProductInfo(7)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/160947/1006720.jpg?v=637400632297330000" alt="Producto 7">
                <h3>Protección Solar</h3>
            </div>
            <div id="product-info-7" class="product-info">
                <p>Protege tu piel de los dañinos rayos solares con nuestra línea de protectores solares. Con fórmulas de alta protección y de rápida absorción, nuestros productos previenen el envejecimiento prematuro y protegen tu piel de las quemaduras solares, dejándola suave y libre de imperfecciones.</p>
            </div>
    
            <!-- Producto 8 -->
            <div class="product-item" onclick="toggleProductInfo(8)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/190386/1024922.jpg?v=638411250233370000" alt="Producto 8">
                <h3>Exfoliantes Corporales</h3>
            </div>
            <div id="product-info-8" class="product-info">
                <p>El exfoliante corporal de Aruma está diseñado para eliminar las células muertas de tu piel y promover su renovación. Con ingredientes naturales como azúcar, sal marina y aceites nutritivos, nuestros exfoliantes dejan tu piel suave, fresca y con un brillo saludable.</p>
            </div>
    
            <!-- Producto 9 -->
            <div class="product-item" onclick="toggleProductInfo(9)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/195828/1.jpg?v=638543285346500000" alt="Producto 9">
                <h3>Cremas Corporales</h3>
            </div>
            <div id="product-info-9" class="product-info">
                <p>Nuestra línea de cremas corporales está formulada para mantener tu piel hidratada y nutrida. Con ingredientes como manteca de karité y aceites vegetales, nuestras cremas se absorben rápidamente, dejando la piel suave, sedosa y con un delicioso aroma.</p>
            </div>
    
            <!-- Producto 10 -->
            <div class="product-item" onclick="toggleProductInfo(10)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/180233/1020157-Just_Hair_Serum_-_Bote-y-caja.jpg?v=638025783429200000" alt="Producto 10">
                <h3>Serums Capilares</h3>
            </div>
            <div id="product-info-10" class="product-info">
                <p>Los serums capilares de Aruma están diseñados para tratar y revitalizar tu cabello. Con fórmulas concentradas, estos productos reparan el daño capilar, proporcionan brillo y protegen contra el frizz, ayudando a que tu cabello luzca saludable y lleno de vitalidad.</p>
            </div>
    
            <!-- Producto 11 -->
            <div class="product-item" onclick="toggleProductInfo(11)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/173276/1018129.png?v=637789298382170000" alt="Producto 11">
                <h3>Cuidado de Manos y Uñas</h3>
            </div>
            <div id="product-info-11" class="product-info">
                <p>Mantén tus manos y uñas saludables con nuestra línea de productos especializados. Crema nutritiva para las manos, aceites para cutículas y fortalecedores de uñas, todos diseñados con ingredientes que hidratan profundamente, previenen el envejecimiento y mantienen tus manos suaves y tus uñas fuertes.</p>
            </div>
    
            <!-- Producto 12 -->
            <div class="product-item" onclick="toggleProductInfo(12)">
                <img src="https://aruma.vtexassets.com/arquivos/ids/188702/1002890.jpg?v=638349895501100000" alt="Producto 12">
                <h3>Cuidado de Pies</h3>
            </div>
            <div id="product-info-12" class="product-info">
                <p>Nuestros productos para el cuidado de los pies están formulados para revitalizar y suavizar la piel. Con cremas hidratantes, exfoliantes y aceites, ayudan a prevenir la piel reseca, a mantener tus pies suaves y a reducir la sensación de cansancio, dejándolos frescos y descansados.</p>
            </div>
        </div>
    </section>

    <!-- JavaScript para el efecto de desplegar información -->
<script>
    function toggleProductInfo(productId) {
        var productInfo = document.getElementById('product-info-' + productId);
        if (productInfo.style.display === "none" || productInfo.style.display === "") {
            productInfo.style.display = "block";
        } else {
            productInfo.style.display = "none";
        }
    }
</script>


    <!-- Blog -->
    <section id="blog" class="blog">
        <h2>Blog de Belleza</h2>
        <div class="blog-content">
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/pGkwNit2hQo?si=LNhTqF4JoI3RsOxz" frameborder="0" allowfullscreen></iframe>
                <h3>Hacks virales de Tik Tok</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/atBEbWuj8l8?si=CotmQZmkAd7KS4ax" frameborder="0" allowfullscreen></iframe>
                <h3>Tipos de Iluminadores</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/sSZoREbVZPs?si=R9oVtPe4kMX8QkwD" frameborder="0" allowfullscreen></iframe>
                <h3>Maquillaje de Ojos</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/obYCSDIr-U4?si=QyU6aicxK4gRHbGq" frameborder="0" allowfullscreen></iframe>
                <h3>Piel Mixta o grasa</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/cYZEnHNTEuM?si=b0i-Fp6nHPOy3bbf" frameborder="0" allowfullscreen></iframe>
                <h3>Nutrición de Cabello</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/EOr7mH14csU?si=2YmrLHDG2e2Dphc4" frameborder="0" allowfullscreen></iframe>
                <h3>Rizos Definidos</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/86lSprPfpGo?si=cqn8oX_lmjTs5lTd" frameborder="0" allowfullscreen></iframe>
                <h3>Rutina de Piel y Cabello Edicion Verano</h3>
            </div>
            <div class="blog-post">
                <iframe src="https://www.youtube.com/embed/QKmIo4aRbJA?si=TxQFYEi2EC-Pmk9q" frameborder="0" allowfullscreen></iframe>
                <h3>¿Cómo elegir el tono de mi maquillaje?</h3>
            </div>  
        </div>
    </section>

    <section id="contacto" class="contacto">
    <h2>Contáctanos</h2>
    <div class="container">
        <?php
            $mensajeError = "";
            $mensajeExito = "";
            if ($mensajeError != "") {
                echo "<p class='error'>$mensajeError</p>";
            }
            if ($mensajeExito != "") {
                echo "<p class='success'>$mensajeExito</p>";
            }
        ?>
        <form action="index.php" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea><br><br>
            
            <input type="submit" value="Enviar" class="submit-btn">
        </form>
    </div>
</section>

 <!-- Redes Sociales -->
 <div class="redes">
        <h3>Síguenos en nuestras redes sociales para precios y muchas Ofertas que tenemos para ti</h3>
        <div class="social-icons">
            <a href="https://www.facebook.com/share/1BWSJyqZSG/" target="_blank">
                <img src="facebook ico.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/4rum4.shop/" target="_blank">
                <img src="instagram ico.png" alt="Instagram">
            </a>
            <a href="https://www.tiktok.com/@aruma.shop" target="_blank">
                <img src="tik tok ico.png" alt="TikTok">
            </a>
            <a href="https://www.youtube.com/@ArumaShop-v2k" target="_blank">
                <img src="youtube ico.png" alt="YouTube">
            </a>
        </div>
    </div>

    <!-- Mapa -->
    <section id="ubicacion" class="ubicacion">
        <h2>Encuentranos en Mall del Sur Los Lirios 300 SJM</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses-419!2spe!4v1735518381769!5m2!1ses-419!2spe!6m8!1m7!1s4JSdsc9pXNDR4WyRkuffBw!2m2!1d-12.15421620067504!2d-76.98345604207248!3f75.94021248586728!4f2.44909342092933!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Aruma. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
