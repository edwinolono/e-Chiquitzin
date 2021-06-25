<?php include 'headerClases.php' ?>
<htm>

    <head>
        <title>Clase 8 contemos hasta 15</title>
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
            <h2 style="text-align: center;">Clase 8 Contemos hasta 15</h2>
        </div>
        <form>
            <div class="container">
                <div class="left-aside" style="background-color: rgb(128, 5, 5); border-radius: 15px; position: relative; left: 45px;">
                    <h2 style="text-align: center;">Las fiestas patrias</h2>
                    <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 15px;">
                        <h3 style="text-align: center;">Identifica cuántos objetos hay en la imagen</h3>
                        <img src="../../images/Clase 8 img 1.png" style="width: 400px; height: 370px; position: relative; left:5px"><br>
                        <img src="../../images/Clase 8 img 2.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select1" id="ele1" value="0">
                        <img src="../../images/Clase 8 img 3.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select2" id="ele2" value="0">
                        <img src="../../images/Clase 8 img 4.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select3" id="ele3" value="0"><br>
                        <img src="../../images/Clase 8 img 5.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select4" id="ele4" value="0">
                        <img src="../../images/Clase 8 img 6.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select5" id="ele5" value="0">
                        <img src="../../images/Clase 8 img 7.png" style=" width: 50px; height: 50px;"><input type="number" min="0" max="20" name="select6" id="ele6" value="0">
                        <br>
                    </div>
                </div>
                <div class="right-aside" style="background-color: rgb(238, 139, 9); border-radius: 15px; position: relative; left: 200px;">
                    <h2 style="text-align: center;">El dormilón</h2>
                    <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 25px;">
                        <h3 style="text-align: center;">Jueguen en parejas</h3>
                        <ol>
                            <li>
                                <h4 style="text-align: justify;">Mete en tu caja de sorpresas de 10 a 15 fichas</h4>
                            </li>
                            <li>
                                <h4 style="text-align: justify;">Tú te duermes, mientras tu compañero toma y esconde algunas fichas</h4>
                            </li>
                            <li>
                                <h4 style="text-align: justify;">Luego despiertas y cuentas las fichas que quedaron en la caja</h4>
                            </li>
                            <li>
                                <h4 style="text-align: justify;">Di cuántas fichas tomó tu compañero</h4>
                            </li>

                            <img src="../../images/Clase 8 img 8.png" style="width: 400px; height: 150px; position: relative; left: 100px;">
                            <h4>¿Cuántas fichas tomó tu compañero? D:</h4>
                            <input type="number" min="0" max="15">
                            <br><br><br>
                        </ol>
                    </div>
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
    var resultado = [11, 15, 12, 14, 10, 13];
    var banderas = [];

    function reiniciar(visor) {
        alert('Se reiniciará los resultados de la clase');
        location.reload();
    }

    function evaluar(visor) {
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

        if (visor.select5.value == resultado[4]) {
            document.getElementById("ele5").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele5").style.border = "2px solid red";
        }

        if (visor.select6.value == resultado[5]) {
            document.getElementById("ele6").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("ele6").style.border = "2px solid red";
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
            
            if(evaluacion == 1){
                alert("Correcto, felicidades");
            }else{
                alert("Síguelo intentando, tu puedes");
            }
            
            banderas = [];
    }
</script>