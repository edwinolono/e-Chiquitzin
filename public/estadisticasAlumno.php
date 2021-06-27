<?php 
    include "headerAlumno.php";

    session_start();

    $email = $_SESSION["miSesion"][0];
    $password = $_SESSION["miSesion"][1];

    include 'db.php';

    $result = mysqli_query($con,"SELECT * FROM alumno WHERE email= '$email' AND password = '$password'");

    while($row = mysqli_fetch_array($result))   {
        $idAlumno = $row['idAlumno'];
    }

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
?>
    
    </body>
</html>