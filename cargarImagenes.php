<?php

if(isset($_POST['submit'])){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'memo';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $sql = "INSERT INTO memorama (foto) VALUES ('$foto')";

    if ($conn->query($sql) === TRUE) {
        echo 'Imagen subida exitosamente';
    } else {
        echo 'Error al subir la imagen: ' . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Subir y Jugar con Imágenes en el Memorama</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500">
    <style>
        html {
            box-sizing: border-box;
        }
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        body {
            background-color: rgb(24, 26, 26);
            margin: 0;
            padding: 96px;
            font-size: 21px;
            color: #000;
            font-family: "Poppins", sans-serif;
        }
        .container {
            background: #000046;
            background: -webkit-linear-gradient(to right, #e01c1c, #000046); 
            background: linear-gradient(to right, #e01c1c, #000046);
            border-radius: 24px;
            padding: 48px;
            margin: 84px 0;
            min-width: 640px;
            box-shadow: 5px 0 0 0 rgba(204,204,204,0.3), -5px 0 0 0 rgba(204,204,204,0.3), 0 5px 0 0 rgba(204,204,204,0.3);
        }
        h3 {
            color: #fff;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="submit"] {
            border: 3px solid #f2f2f2;
            color: #ffffff;
            text-decoration: none;
            padding: 16px 32px;
            border-radius: 12px;
            background-color: #e01c1c;
            transition: 400ms all;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #051c5e;
            color: white;
        }
        input[type="file"] {
            margin-bottom: 20px;
        }

        /**------ */

        input[type="file"] {
    border: 3px solid #f2f2f2;
    color: #ffffff;
    padding: 10px 10px; /* Tamaño de padding reducido */
    border-radius: 5px;
    background-color: #e01c1c;
    transition: 400ms all;
    cursor: pointer;
    font-family: "Poppins", sans-serif;
    font-size: 14px; /* Tamaño de fuente reducido */
    width: 570px
    ; /* Asegura que el botón se ajuste al contenido */
}

input[type="file"]::-webkit-file-upload-button {
    visibility: hidden;
}

input[type="file"]::before {
    content: 'Seleccionar archivo';
    display: inline-block;
    background: #e01c1c;
    color: white;
    padding: 12px 24px; /* Tamaño de padding reducido */
    border-radius: 12px;
    border: 3px solid #f2f2f2;
    cursor: pointer;
    font-family: "Poppins", sans-serif;
    font-size: 14px; /* Tamaño de fuente reducido */
    text-align: center;
    transition: 400ms all;
}

input[type="file"]:hover::before {
    background: #051c5e;
    color: white;
}

.container {
    background: #000046;
    background: -webkit-linear-gradient(to right, #e01c1c, #000046); 
    background: linear-gradient(to right, #e01c1c, #000046);
    border-radius: 24px;
    padding: 36px; /* Padding reducido */
    margin: 64px auto; /* Margen ajustado */
    width: 480px; /* Ancho moderado del contenedor */
    box-shadow: 5px 0 0 0 rgba(204,204,204,0.3), -5px 0 0 0 rgba(204,204,204,0.3), 0 5px 0 0 rgba(204,204,204,0.3);
}


    </style>
</head>
<body>

<div class="container">
    <h3>Subir Imágenes al Memorama</h3>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="foto" >
        <br>
        <input type="submit" name="submit" value="Subir Imagen">
    </form>
    
    <form action="album.php">
        <input type="submit" value="Ver álbum de recuerdos">
    </form>
    
    <form action="index.php">
        <input type="submit" value="Volver">
    </form>
</div>

</body>
</html>
