<?php 
     $con = mysqli_connect(
        'localhost',
        'miguel',
        '1234',
        'e_chiquitzin'
    );

    if($_POST)
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $result = mysqli_query($con, "SELECT 'password' FROM 'alumno' WHERE 'e-mail' == $email");
    if($result == $password){
        session_start();
        $_SESSION['miSesion'] = "alumno";
        echo ("Sesión iniciada");
    }
    else
        echo ("Contraseña o correo incorrectos");
?>