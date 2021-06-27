<?php include "./icono.php"; ?>

    <link rel="stylesheet" href="/css/paginaComienzo/paginaComienzo.css">
    
</head>
<body>
    <div id="contenedorPrincipal">
        <div id="title">e-Chikitzin</div>
        <h1>Administrador</h1>

        <div id="container">
            <div class="option">
                <div class="optionTitle">Alumnos</div>
                <div class="optionDescription">Revisa los alumnos registrados.</div>
                <a class="boton" href="#popupAlumnos">Alumnos</a>
            </div>
            <div class="option">
                <div class="optionTitle">Profesores</div>
                <div class="optionDescription">Revisa los profesores registrados.</div>
                <a class="boton" href="#popupProfesores">Profesores</a>
            </div>
        </div>
    </div>

    
    <div id="linkSalir">
            <h2> <a href="/public/cerrarSesion.php">Salir</a> </h2>
        </div>

    <?php
     include "db.php";
    ?>

<div id="popupProfesores" class="overlay">
            <div class="popup">
                <h2>Profesores Registrados.</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                <?php

                    
                    $result = mysqli_query($con,"SELECT * FROM profesor");

                    echo "<table border='1'>
                    <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>E-mail</th>
                    <th>ID Profesor</th>
                    </tr>";

                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellido'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['idProfesor'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";

                    ?>
                    
            </div>
        </div>
    </div>

    <div id="popupAlumnos" class="overlay">
            <div class="popup">
                <h2>Alumnos Registrados.</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                <?php
                   

                    $result = mysqli_query($con,"SELECT * FROM alumno");

                    echo "<table border='1'>
                    <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>E-mail</th>
                    <th>ID Alumno</th>
                    </tr>";

                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellido'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['idAlumno'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";

                    ?>
                    
            </div>
        </div>
    </div>

    <?php
        //Limpiamos resultado
        mysqli_free_result($result);

        //Cerramos conexión con bd
        mysqli_close($con);
    ?>



</body>
</html>

<style>
    #linkSalir{
        text-align: right; 
        color:darkblue; 
        padding-right: 18%; 
        margin-top: 15%; 
        font-weight: lighter; 
        text-decoration: none;
    }
    body{
        background-image: url("/images/paginaAyuda/fondoAyuda.jpg");  
        background-size: cover;
        overflow-x: hidden;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        -webkit-animation-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    h1{
        text-align:center;
        color: white;
        font-weight: lighter;
    }


    .box {
    width: 40%;
    margin: 0 auto;
    background: rgba(255,255,255,0.2);
    padding: 35px;
    border: 2px solid #fff;
    background-clip: padding-box;
    text-align: center;
    }

    .button {
    font-size: 1em;
    padding: 10px;
    color: #fff;
    border: 2px solid #06D85F;
    border-radius: 20px/50px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease-out;
    }
    .button:hover {
    background: #06D85F;
    }

    .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    }
    .overlay:target {
    visibility: visible;
    opacity: 1;
    }

    .popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
    }

    .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
    }
    .popup .close:hover {
    color: #06D85F;
    }
    .popup .content {
    max-height: 30%;
    overflow: auto;
    }

    @media screen and (max-width: 700px){
    .box{
        width: 70%;
    }
    .popup{
        width: 70%;
    }
    }
</style>