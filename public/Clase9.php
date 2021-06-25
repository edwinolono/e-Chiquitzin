<?php include 'headerClases.php' ?>
<htm>

    <head>
        <title>Clase 9 contemos hasta 15</title>
        <link rel="stylesheet" href="../../css/paginaComienzo/paginaComienzo.css">
        <link rel="stylesheet" href="../../css/menu/menu.css">
    </head>

    <body>
        <header>
            <div id="nombreAplicacion"><a href="../menuAlumno.php">e-Chiquitzin</a></div>
            <div class="anclajes">
                <a href="./menuAlumno.php">Estadísticas</a>
                <a href="./menuAlumno.php">Inicio</a>
                <a href="./paginaAyuda.php">Ayuda</a>
                <a href="./cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div>
            <h2 style="text-align: center;">Clase 9 Contemos hasta 15</h2>
        </div>
        <form action="" method="">
            <div class="container">
                <!-- Numeros -->
                <div class="left-aside" style="background-color: rgb(128, 5, 5); border-radius: 15px; position: relative; left: 45px;">
                    <h2 style="text-align: center;">Entre 11 y 15</h2>
                    <h3 style="text-align: center;"></h3>
                    <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 15px;">
                        <ol>
                            <li>
                                <h4 style="text-align: justify;">Trabajen en parejas. Elaboren tarjetas numeradas del 1 al 10, mezclenlas y pónganlas al centro</h4>
                            </li>
                            <li>
                                <h4 style="text-align: justify;">Di un número entre 11 y 15</h4>
                            </li>
                            <li>
                                <h4 style="text-align: justify;">Tu compañero toma una tarjeta y dice cuánto le falta para llegar al número que dijiste</h4>
                            </li>
                            <img src="../../images/Clase 9 img 6.png" style="width: 150px; height: 150px;">
                            <li>
                                <h4 style="text-align: justify;">Jueguen varias veces e intercambien turno</h4>
                            </li>
                        </ol>
                        <h4>¿Cuanto le falta para llegar al número?</h4>
                        <input type="number" min="0" max="20"> <br> <br> <br> <br>
                    </div>
                </div>
                <!-- Estampitas -->
                <div class="right-aside" style="background-color: rgb(238, 139, 9); border-radius: 15px; position: relative; left: 200px;">
                    <h2 style="text-align: center;">Estampitas</h2>

                    <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 25px; font-size: 20px">

                        <h3 style="text-align: center; font-size: 30px">Carlos y sus amigos coleccionan estas estampitas</h3>
                        <table>
                            <br>
                            ¿Cuantas le faltan a cada uno?<br>
                            <tr>
                                <th rowspan="4">
                                    <img src="../../images/Clase 9 img 1.png" style="width: 250px; height: 250px; position: centtre; left: 220px;"><br>
                                </th>
                                <th>
                                    <img src="../../images/Clase 9 img 2.png" style="width: 125px; height: 125px;">
                                </th>
                                <th>
                                    <img src="../../images/Clase 9 img 3.png" style="width: 125px; height: 125px;">
                                </th>
                            </tr><br>
                            <tr>
                                <td> <br> Karina  <input name="select1" id="ele1" value="0" type="number" min="0" max="15"></td>
                                <td>
                                    <br> Carlos <input name="select2" id="ele2" value="0" type="number" min="0" max="15"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../images/Clase 9 img 4.png" style="width: 125px; height: 125px;">
                                </td>
                                <td>
                                    <img src="../../images/Clase 9 img 5.png" style="width: 125px; height: 125px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Amanda <input name="select3" id="ele3" value="0" type="number" min="0" max="15"></td>
                                <td>
                                    Lucio <input name="select4" id="ele4" value="0" type="number" min="0" max="15"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Debajo -->
            <div class="container">
                <!-- Intentalo tu mismo -->
                <div class="left-aside">
                    <div class="questions">
                        <h1 style="color: black; font-size: 40px">INTENTALO TÚ MISMO</h1>
                        <h2 style="color: black; font-size: 50px">¿Cuál es la capital de Uruguay?</h2>
                        <div style="font-size: 30px">
                            <input type="radio" name="select" value="answer"> Montevideo <br>
                            <input type="radio" name="select" value="wrong"> Londres <br>
                            <input type="radio" name="select" value="wrong"> Tokio <br>
                            <input type="radio" name="select" value="wrong"> Chicago <br>
                        </div>
                    </div>
                </div>
                <div class="right-aside">
                    <video width="600" height="480" controls style="position: relative; left: 300px; border: 15px solid pink;">
                        <source src="../..videos/Video1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <br>
            <div id="opciones">
                <input type="button" value="Reiniciar" onClick="reiniciar(this.form)">
                <input type="button" value="Evaluar" onClick="evaluar(this.form)">
                <!--<input type="button" value="Guardar">-->
            </div>
        </form>
    </body>
</htm>

<script>
    //bandedera = 11, foco 15, papel picado = 12, sombrero = 14, trompeta = 10, globo = 13
    var resultado = [9, 6, 11, 3]; //15
    var banderas = [];

    function reiniciar(visor) {
        alert('Se reiniciará los resultados de la clase');
        location.reload();
    }

    function evaluar(visor) {
        if (visor.select.value == "answer") banderas.push(true);
        else banderas.push(false);

        if (visor.select1.value == resultado[0]) {
            document.getElementById("ele1").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele1").style.border = "2px solid red";
        }

        if (visor.select2.value == resultado[1]) {
            document.getElementById("ele2").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele2").style.border = "2px solid red";
        }

        if (visor.select3.value == resultado[2]) {
            document.getElementById("ele3").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele3").style.border = "2px solid red";
        }

        if (visor.select4.value == resultado[3]) {
            document.getElementById("ele4").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele4").style.border = "2px solid red";
        }

        var evaluacion = 0;

        for (const bandera of banderas) {
            if (bandera == false) {
                evaluacion = 0;
                break;
            } else {
                evaluacion = 1;
            }
        }

        if (evaluacion == 1) {
            alert("Correcto, felicidades");
        } else {
            alert("Síguelo intentando, tu puedes");
        }

        banderas = [];
    }
</script>