<?php
    //Recibimos los datos del formulario de login.php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    
    //Almacenamos los datos en un Array para imprimir los datos en consola
    $userInfo = array();
    $userInfo[0] = $email;
    $userInfo[1] = $password;
    $userInfo[2] = $rol;

    function console_log($userInfo, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($userInfo, JSON_HEX_TAG) .');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

    console_log($userInfo);
    //Abrimos una sesión
    session_start();
    $_SESSION['miSesion'] = array();
    $_SESSION['miSesion'][0] = $email;
    $_SESSION['miSesion'][1] = $password;
    $_SESSION['miSesion'][2] = $rol;

    //Conexión a base de datos
    include 'db.php';


    //Definimos un query para la base de datos
    if($rol == 1){
        $query = "SELECT * FROM alumno WHERE email= '$email' AND password = '$password'";    
    }else if($rol == 2){
        $query = "SELECT * FROM profesor WHERE email= '$email' AND password = '$password'";    
    }else if($rol == 3){
        $query = "SELECT * FROM administrador WHERE email= '$email' AND password = '$password'";    
    }

    

    //Ejecutamos el query y el resultado se asigna a la variable result
    $result = mysqli_query($con, $query);

    //Obtenemos las filas que corresponden al resultado
    $dbRows = mysqli_num_rows($result);

    //Si encontró registros nos mandará a menu.html
    if($dbRows){
        if($rol == 1){
            header("location:menuAlumno.php");
        }else if($rol == 2){
            header("location:menuProfesor.html");
        }else if($rol == 3){
            header("location:menuAdministrador.php");
        }
    //Si no nos redirijirá a la página de login con un error
    }else{
        ?>
        <?php
            //Vamos a obtener la página de login
            include 'paginaInicioSesion.php';
        ?>
        <h1 class="errorAut">ERROR EN LA AUTENTIFICACIÓN</h1>
        <?php
    }
    //Limpiamos resultado
    mysqli_free_result($result);

    //Cerramos conexión con bd
    mysqli_close($con);
