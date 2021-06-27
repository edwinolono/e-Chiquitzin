<?php
    //Obtenemos la sesión de usuario
    session_start();

    //Obtenemos los valores que vienen por parte del formulario
    $clase = $_POST["clase"];
    $nuevasVictorias = $_POST["victorias"];
    $nuevasDerrotas = $_POST["derrotas"];
    
    //Obtenemos el usuario que hizo el ejercicio
    $idAlumno = $_SESSION["miSesion"][0];

    //Incluimos la conexión a la base de datos
    include 'db.php';

    //1. Vamos a consultar si ya hay un registro en la base de datos correspondiente a la clase y al alumno
    $registroClase = mysqli_query($con, "SELECT * FROM calificacion WHERE idEjercicio = '$clase' AND idAlumno='$idAlumno'");
    $filasEncontradas = mysqli_num_rows($registroClase);

    if($filasEncontradas){
        //Si hay un registro, obtenemos sus victorias y derrotas guardadas
        while($row = mysqli_fetch_array($registroClase)){
            $registroCalificacion = $row['idCalificacion'];
            $registroVictorias = $row['victoria'];
            $registroDerrotas = $row['derrota'];
        }

        //Sumamos los valores de las victoria y de las derrotas nuevos con los registrados
        $sumaVictorias = $registroVictorias + $nuevasVictorias;
        $sumaDerrotas = $registroDerrotas + $nuevasDerrotas;

        //Actualizamos la tabla con la sumas de victorias y derrotas
        $actualizarCalificacion = mysqli_query($con, "UPDATE calificacion SET victoria='$sumaVictorias', derrota='$sumaDerrotas' WHERE idAlumno='$idAlumno' AND idEjercicio='$clase'");
        header("location:menuAlumno.php");
    }else{
        //Si no hay un registro, entonces insertamos las nuevas victorias y derrotas
        $insertarCalificacion = mysqli_query($con,"INSERT INTO calificacion (victoria,derrota,idAlumno,idEjercicio) VALUES ('$victorias','$derrotas','$idAlumno','$clase')");
        header("location:menuAlumno.php");
    }

    mysqli_free_result($registroClase);
    mysqli_close($con);
?>

