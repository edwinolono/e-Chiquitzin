<?php
    //Obtenemos la sesión de usuario
    session_start();

    //Obtenemos los valores que vienen por parte del formulario
    $clase = $_POST["clase"];
    $victorias = $_POST["victorias"];
    $derrotas = $_POST["derrotas"];
    $email = $_SESSION["miSesion"][0];
    $password = $_SESSION["miSesion"][1];

    //Incluimos la conexión a la base de datos
    include 'db.php';

    //1. Primero obtenemos el id del usuario al que vamos a insertar o actualizar los datos
    $result = mysqli_query($con,"SELECT * FROM alumno WHERE email= '$email' AND password = '$password'");

    while($row = mysqli_fetch_array($result))   {
        $idAlumno = $row['idAlumno'];
    }

    $result2 = mysqli_query($con,"INSERT INTO calificacion (victoria,derrota,idAlumno,idEjercicio) VALUES ('$victorias','$derrotas','$idAlumno','$clase')");


    $result3 = mysqli_query($con,"SELECT * FROM calificacion WHERE idAlumno='$idAlumno'");

                    echo "<table border='1'>
                    <tr>
                    <th>Victorias</th>
                    <th>Derrotas</th>
                    <th>Clase</th>
                    </tr>";

    while($row2 = mysqli_fetch_array($result3))   {
                    echo "<tr>";
                    echo "<td>" . $row2['victoria'] . "</td>";
                    echo "<td>" . $row2['derrota'] . "</td>";
                    echo "<td>" . $row2['idEjercicio'] . "</td>";
                    echo "</tr>";
    }
                    echo "</table>";

    mysqli_free_result($result);
    mysqli_free_result($result2);
    mysqli_free_result($result3);
    mysqli_close($con);
?>

