<!DOCTYPE html>
<html>
<head>
    <title>Album de Recuerdos</title>
    <link rel="stylesheet" href="estdelalbum.css" />
</head>
<body>

<h3>Album de Recuerdos</h3>

<div class="album-container">
    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'memo';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "SELECT foto FROM memorama";
    $result = $conn->query($sql);

    $index = 0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" alt="Imagen">';
            echo '<div class="card-info">';
            echo '<h4>Recuerdo ' . ($index + 1) . '</h4>'; // Aquí puedes agregar más información si tienes
            echo '</div>';
            echo '</div>';
            $index++;
        }
    } else {
        echo 'No hay imágenes para mostrar';
    }

    $conn->close();
    ?>
</div>
<br>
<button id="start" onclick="window.location.href = 'index.php';">regresar</button>     
 <br>
</body>
</html>