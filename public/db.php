<?php
    //Conexión a la base de datos
    $con = mysqli_connect(
        'localhost',
        'root',
        'digitienda',
        'e_chiquitzin'
    );

    //Devuelve si está conectado o no a la base de datos
    /*if(isset($con)){
        echo "Conectado a la base de datos";
    }else{
        echo "No conectado a la base de datos";
    }*/

    function cerrarConexion($con){
        $con -> close();
    }
?>