<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Memorama</title>
  <link rel="stylesheet" href="estilosdelindex.css" />
</head>
<body>
  <div id="contenedor">
    <?php
      // Verifica si se ha enviado un formulario y redirige a cargar_imagen.php
      if (isset($_POST['submit'])) {
        header("Location: juego1.html");
        exit();
      }
    ?>
    
    <h2>Para Mar</h2>
    <!-- Botón de carga de imagen -->
    <form method="post">
      <button type="submit" name="submit">jurguito 1</button>
    </form>
    
    <!-- Botones con redirecciones -->
    <form method="post" action="mensaje.html">
      <button type="submit">Mensaje romántico</button>
    </form>
    
    <form method="post" action="juego2.html">
      <button type="submit">Jueguito 2</button>
    </form>
    
    <form method="post" action="cargarImagenes.php">
      <button type="submit">Fotos y Recuerdos</button>
    </form>
  </div>
  
</body>
</html>