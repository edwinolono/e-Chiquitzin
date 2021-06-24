<?php include "headerAlumno.php" ?>

        <div class="containerPrincipal">
            <h2>Bienvenido
                <?php 
                session_start();
                echo $_SESSION["miSesion"][0];
                ?>
            </h2>
            <div class="left-aside" >
                <div class="stick">
                    <h3>Recuerda terminar tus clases antes de empezar tu examen</h3>
                </div>
            </div>
            <div class="right-aside">
                <div style="height: 50%; background-color: transparent; border-radius: 15px;" >
                    <div style="width: 50%; height: 90%; float:left; ">
                        <div class="subject" style="background-color: #CD6155;">
                            <h4 style="text-align: center;">Conteo</h4>
                            <ol>
                                <li><a href="Clase1.php">Clase 1</a></li>
                                <li><a href="Clase2.php">Clase 2</a></li>
                                <li><a href="Clase3.php">Clase 3</a></li>
                                <li><a href="Clase4.php">Clase 4</a></li>
                            </ol>
                            <img src="../../images/suma.png" class="img-subject">
                        </div>
                    </div>
                    <div style="width: 50%; height: 90%; float: right; ">
                        <div class="subject" style="background-color: azure;" >
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
                        <div class="subject" style="background-color: #A3E4D7;">
                            <h4 style="text-align: center;">Contemos hasta 15</h4>
                            <ol>
                                <li><a href="Clase7.php">Clase 7</a></li>
                                <li><a href="Clase8.php">Clase 8</a></li>
                                <li><a href="Clase9.php">Clase 9</a></li>
                                <li><a href="Clase10.php">Clase 10</a></li>
                            </ol>
                            <img src="../../images/suma.png" class="img-subject">
                        </div>
                    </div>
                    <div style="width: 50%; height: 90%; float: right;">
                        <div class="subject" style="background-color: #F9E79F;">
                            <h4 style="text-align: center;">Extras</h4>
                            <ol>
                                <li><a href="Ahorcado.php">Ahorcado</a></li>
                            </ol>
                            <img src="../../images/lupa.png" class="img-subject">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</htm>