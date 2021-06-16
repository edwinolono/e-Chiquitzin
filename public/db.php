<?php
    //Conexión a la base de datos
    $con = mysqli_connect(
        'localhost',
        'miguel',
        '1234',
        'e_chiquitzin'
    );

    //Devuelve si está conectado o no a la base de datos
    if(isset($con)){
        echo "Conectado a la base de datos";
    }else{
        echo "No conectado a la base de datos";
    }

?>