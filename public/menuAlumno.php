<?php include "headerAlumno.php" ?>

        <div class="container">
            <h1>bienvenido <?php print_r($_SESSION['miSesion'][0]) ?></h1>
            <div class="left-aside" >
                <div class="stick">
                    <h3>Recuerda terminar tus clases antes de empezar tu examen</h3>
                </div>
            </div>
            <div class="right-aside" >
                <div style="height: 50%; background-color: transparent; border-radius: 15px;" >
                    <div style="width: 50%; height: 90%; float:left; ">
                        <div class="subject" style="background-color: red;">
                            <h4 style="text-align: center;">Conteo</h4>
                            <ol>
                                <li><a href="Clase.php">Clase 1</a></li>
                                <li><a href="Clase2.html">Clase 2</a></li>
                                <li><a href="Clase3.html">Clase 3</a></li>
                                <li><a href="./ejercicios/Clase4.html">Clase 4</a></li>
                            </ol>
                            <img src="../../images/suma.png" class="img-subject">
                        </div>
                    </div>
                    <div style="width: 50%; height: 90%; float: right; ">
                        <div class="subject" style="background-color: purple;" >
                            <h4 style="text-align: center;">Figuras</h4>
                            <ol >
                                <li><a href="./ejercicios/Clase5.html">Clase 5</a></li>
                                <li><a href="./ejercicios/Clase6.html">Clase 6</a></li>
                            </ol>
                            <img src="../../images/figuras.png" class="img-subject">
                        </div>
                    </div>
                </div>
                <div style="height: 50%; background-color: transparent; border-radius: 15px;">
                    <div style="width: 50%; height: 90%; float:left; ">
                        <div class="subject" style="background-color: brown;">
                            <h4 style="text-align: center;">Contemos hasta 15</h4>
                            <ol>
                                <li><a href="./ejercicios/Clase7.html">Clase 7</a></li>
                                <li><a href="./ejercicios/Clase8.html">Clase 8</a></li>
                                <li><a href="./ejercicios/Clase9.html">Clase 9</a></li>
                                <li><a href="./ejercicios/Clase10.html">Clase 10</a></li>
                            </ol>
                            <img src="../../images/suma.png" class="img-subject">
                        </div>
                    </div>
                    <div style="width: 50%; height: 90%; float: right;">
                        <div class="subject" style="background-color: green;">
                            <h4 style="text-align: center;">Recolección de datos</h4>
                            <ol>
                                <li><a href="./ejercicios/Clase.html">Clase 1</a></li>
                                <li><a href="./ejercicios/Clase.html">Clase 1</a></li>
                                <li><a href="./ejercicios/Clase.html">Clase 1</a></li>
                                <li><a href="./ejercicios/Clase.html">Clase 1</a></li>
                            </ol>
                            <img src="../../images/lupa.png" class="img-subject">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</htm>