<?php
    //Recibimos los datos del formulario de login.php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    
    //Obtenemos la conexión a la base de datos
    include 'db.php';

    //1. Buscamos un registro en los usuarios con los datos proporcionados en el formulario
    if($rol == 1){
        $buscarRegistro = mysqli_query($con,"SELECT * FROM alumno WHERE email= '$email' AND password = '$password'");    
        $filasEncontradas = mysqli_num_rows($buscarRegistro);

        //1.1. Validamos que haya un usuario registrado con esos datos
            if($filasEncontradas){
                //Si hay un registro
                while($row = mysqli_fetch_array($buscarRegistro)){
                    $idAlumno = $row['idAlumno'];
                    $nombreAlumno = $row['nombre'];
                    $apellidoAlumno = $row['apellido'];
                    unset($row);
                }

                session_start();
                $_SESSION['miSesion'] = array();
                $_SESSION['miSesion'][0] = $idAlumno;
                $_SESSION['miSesion'][1] = $nombreAlumno;
                $_SESSION['miSesion'][2] = $apellidoAlumno;
                $_SESSION['miSesion'][3] = $email;
                $_SESSION['miSesion'][4] = $password;

                header("location:menuAlumno.php");

            }else{
                //No hay un registro
                ?>
                <?php
                    //Vamos a obtener la página de login
                    include 'paginaInicioSesion.php';
                ?>
                <h1 class="errorAut">ERROR EN LA AUTENTIFICACIÓN</h1>
                <?php
            }

    }else if($rol == 2){
        $buscarRegistro = mysqli_query($con,"SELECT * FROM profesor WHERE email= '$email' AND password = '$password'");    
        $filasEncontradas = mysqli_num_rows($buscarRegistro);

        //1.1. Validamos que haya un usuario registrado con esos datos
            if($filasEncontradas){
                //Si hay un registro
                while($row = mysqli_fetch_array($buscarRegistro)){
                    $idProfesor = $row['idProfesor'];
                    $nombreProfesor = $row['nombre'];
                    $apellidoProfesor = $row['apellido'];
                    unset($row);
                }

                session_start();
                $_SESSION['miSesion'] = array();
                $_SESSION['miSesion'][0] = $idProfesor;
                $_SESSION['miSesion'][1] = $nombreProfesor;
                $_SESSION['miSesion'][2] = $apellidoProfesor;
                $_SESSION['miSesion'][3] = $email;
                $_SESSION['miSesion'][4] = $password;

                header("location:menuProfesor.html");

            }else{
                //No hay un registro
                ?>
                <?php
                    //Vamos a obtener la página de login
                    include 'paginaInicioSesion.php';
                ?>
                <h1 class="errorAut">ERROR EN LA AUTENTIFICACIÓN</h1>
                <?php
            }
    }else if($rol == 3){
        $buscarRegistro = mysqli_query($con,"SELECT * FROM administrador WHERE email= '$email' AND password = '$password'");    
        $filasEncontradas = mysqli_num_rows($buscarRegistro);

        //1.1. Validamos que haya un usuario registrado con esos datos
            if($filasEncontradas){
                //Si hay un registro
                while($row = mysqli_fetch_array($buscarRegistro)){
                    $idAdministrador = $row['id'];
                    $nombreAdministrador = $row['nombre'];
                    $apellidoAdministrador = $row['apellido'];
                    unset($row);
                }

                session_start();
                $_SESSION['miSesion'] = array();
                $_SESSION['miSesion'][0] = $idAdministrador;
                $_SESSION['miSesion'][1] = $nombreAdministrador;
                $_SESSION['miSesion'][2] = $apellidoAdministrador;
                $_SESSION['miSesion'][3] = $email;
                $_SESSION['miSesion'][4] = $password;

                header("location:adminHome.php");

            }else{
                //No hay un registro
                ?>
                <?php
                    //Vamos a obtener la página de login
                    include 'paginaInicioSesion.php';
                ?>
                <h1 class="errorAut">ERROR EN LA AUTENTIFICACIÓN</h1>
                <?php
            }
    }

    //Limpiamos resultado
    mysqli_free_result($buscarRegistro);
    
    //Cerramos conexión con bd
    mysqli_close($con);
