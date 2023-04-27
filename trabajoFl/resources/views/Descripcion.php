<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/trabajofl/resources/css/descripcion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Document</title>
</head>
<body onload="animatePage()">
<?php
// Obtener los valores de la URL
$imagen = $_GET['image'];
$titulo = $_GET['title'];
$desc = $_GET['description'];
$desc2 = $_GET['description2'];


?>
    <article class="blog-post elemento animate__fadeInDown">
      <div class="blog-post__img " style="padding: 1rem;">
        <img src='<?php echo $imagen ?>' alt="" />
      </div>
      <div class="blog-post__info">
        <h2 class="blog-post__title"><?php echo $titulo ?></h2>
        <p>
        <?php echo $desc ?>
        </p>
        <h3>
        <?php echo $desc2?>
        </h3>
        <a href="http://localhost/trabajofl/public" class="button">Regresar</a>
      </div>
    </article>
    <script>
      function animatePage() {
        var elementosAnimados = document.querySelectorAll('.animate__fadeInDown');
        elementosAnimados.forEach(function(elemento) {
          elemento.classList.add('animate__animated', 'animate__fadeInDown');
        });
      }
    </script>
</body>
</html>





