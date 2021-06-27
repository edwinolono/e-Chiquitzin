<?php include "icono.php" ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/estadisticasAlumno/estadisticasAlumno.css">
    </head>
    <body>
        <header>
            <div id="nombreAplicacion">e-Chiquitzin</div>
            <div class="anclajes">
                <a href="./menuAlumno.php">Estadísticas</a>
                <a href="./menuAlumno.php">Inicio</a>
                <a href="./paginaAyuda.php">Ayuda</a>
                <a href="./cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div id="container">
            <h1>Estadísticas</h1>
            <?php
                session_start();

                $idAlumno = $_SESSION['miSesion'][0];

                include 'db.php';

                $registroCalificaciones = mysqli_query($con,"SELECT * FROM calificacion WHERE idAlumno='$idAlumno'");
                                echo "<table id='tablaEstadisticas'>
                                <tr>
                                <th>Victorias</th>
                                <th>Derrotas</th>
                                <th>Clase</th>
                                </tr>";

                while($row = mysqli_fetch_array($registroCalificaciones)){
                                echo "<tr>";
                                echo "<td>" . $row['victoria'] . "</td>";
                                echo "<td>" . $row['derrota'] . "</td>";
                                echo "<td>" . $row['idEjercicio'] . "</td>";
                                echo "</tr>";
                }
                                echo "</table>";
            ?>
        </div>
    </body>
</html>