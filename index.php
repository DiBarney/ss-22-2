<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel By Barney</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    $conexion = new mysqli("localhost","root","barneyEsAdmin","imagenes") or die("Sin Conexion".mysqli_connect_error());
    $slider = "SELECT * FROM slider;";
    $resultado = mysqli_query($conexion,$slider);
?>
<body>
    <main>
        <section class="contPrincipal">
            <div class="barCarrousel" id="barCarrousel">
                <div class="botonTrigger ri" id="triggPrev"><p>◀</p></div>
                <div class="botonTrigger le" id="triggNext"><p>▶</p></div>
                <div class="contImgs" id="contImgs">
                    <div class="imgs" id="imgs">
                    <?php 
                        while($fila = mysqli_fetch_array($resultado)){
                            echo '<img src="img/'.$fila[rutaImg].'">';
                        }
                    ?>
                    </div>
                </div>
                <div class="puntos" id="puntos">
                </div>
            </div>
    
            <div class="contFormSubida">
                <p>Seleccionar archivo</p>
                <!-- <img id="imgPrev"> -->
                <form action="subirImg.php" method="POST" enctype="multipart/form-data">
                    <input type="file" id="imgUploader" name="archivo">
                    <input type="submit" name="btnSubir" value="Subir">
                </form>
            </div>
        </section>
    </main>

    <script src="js/barCarrousel.js"></script>
    <!-- <script src="js/subirImg.js"></script> -->
</body>
</html>