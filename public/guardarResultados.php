<?php

    session_start();

    $clase = $_POST["clase"];
    $victorias = $_POST["victorias"];
    $derrotas = $_POST["derrotas"];
    $email = $_SESSION["miSesion"][0];
    $password = $_SESSION["miSesion"][1];

    include 'db.php';

    $result = mysqli_query($con,"SELECT * FROM alumno WHERE email= '$email' AND password = '$password'");

                    /*echo "<table border='1'>
                    <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>E-mail</th>
                    <th>ID Alumno</th>
                    </tr>";*/

    while($row = mysqli_fetch_array($result))   {
                    /*echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellido'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['idAlumno'] . "</td>";
                    echo "</tr>";*/
        $idAlumno = $row['idAlumno'];
    }
                    //echo "</table>";

    //$query = "INSERT INTO calificacion (victoria,derrota,idAlumno,idEjercicio) VALUES ('$victorias','$derrotas','$idAlumno','$clase',null)";    
    $result2 = mysqli_query($con,"INSERT INTO calificacion (victoria,derrota,idAlumno,idEjercicio) VALUES ('$victorias','$derrotas','$idAlumno','$clase')");
    //$result2 = mysqli_query($con, $query);


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