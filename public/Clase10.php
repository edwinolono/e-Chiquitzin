<?php include 'headerClases.php' ?>
<html>

<head>
    <title>Clase 10 contemos hasta 15</title>
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
        <h2 style="text-align: center;">Clase 10 Contemos hasta 15</h2>
    </div>
    <form>
        <div class="container">
            <div class="left-aside" style="background-color: rgb(238, 139, 9); border-radius: 15px; position: relative; left: 45px;">
                <h3 style="text-align: center;">Anota los números que faltan</h3>

                <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 25px;">
                    <h2 style="text-align: center;">Cuentos con números</h2>
                    <img src="../../images/Clase 10 img 1.png" style="width: 150px; height: 150px; position: relative; "><br>
                    Habían <input type="number" min="0" max="15" name="select1" id="ele1" value="0">
                    flores, pusieron <input type="number" min="0" max="15" name="select2" id="ele2" value="0">
                    , ahora hay<input type="number" min="0" max="15" name="select3" id="ele3" value="0"><br>
                    <img src="../../images/Clase 10 img 2.png" style="width: 150px; height: 150px; position: relative; "><br>
                    Habían <input type="number" min="0" max="15" name="select4" id="ele4" value="0">
                    pajaros enjaulados, pusieron <input type="number" min="0" max="15" name="select5" id="ele5" value="0">
                    , ahora hay<input type="number" min="0" max="15" name="select6" id="ele6" value="0"><br>
                </div>
            </div>

            <div class="right-aside" style="background-color: rgb(238, 139, 9); border-radius: 15px; position: relative; left: 200px;">
                <h2 style="text-align: center;">Cuentos con números</h2>
                <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 25px;">

                    <img src="../../images/Clase 10 img 3.png" style="width: 200px; height: 200px; position: relative; "><br>
                    El yoyo costaba <input type="number" min="0" max="15"  name="selectt1" id="elee1" value="0">
                    Raúl tenía <input type="number" min="0" max="15" name="selectt2" id="elee2" value="0">
                    solo le faltaban<input type="number" min="0" max="15" name="selectt3" id="elee3" value="0"><br>
                    <img src="../../images/Clase 10 img 4.png" style="width: 200px; height: 200px; position: relative; "><br>
                    La caja tenía <input type="number" min="0" max="15" name="selectt4" id="elee4" value="0">
                    fichas, quitaron <input type="number" min="0" max="15"  name="selectt5" id="elee5" value="0">
                    , ahora hay<input type="number" min="0" max="15" name="selectt6" id="elee6" value="0"><br>


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

</html>

<script>
    //bandedera = 11, foco 15, papel picado = 12, sombrero = 14, trompeta = 10, globo = 13
    var resultado = [9, 3, 12, 13, 2, 15];
    var resultado2 = [14, 6, 8, 15, 7, 8];
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
        //------------------------------------------------------------------------
        if (visor.selectt1.value == resultado2[0]) {
            document.getElementById("elee1").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee1").style.border = "2px solid red";
        }

        if (visor.selectt2.value == resultado2[1]) {
            document.getElementById("elee2").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee2").style.border = "2px solid red";
        }

        if (visor.selectt3.value == resultado2[2]) {
            document.getElementById("elee3").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee3").style.border = "2px solid red";
        }

        if (visor.selectt4.value == resultado2[3]) {
            document.getElementById("elee4").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee4").style.border = "2px solid red";
        }

        if (visor.selectt5.value == resultado2[4]) {
            document.getElementById("elee5").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee5").style.border = "2px solid red";
        }

        if (visor.selectt6.value == resultado2[5]) {
            document.getElementById("elee6").style.border = "2px solid green";
            banderas.push(true);
        } else {
            banderas.push(false);
            document.getElementById("elee6").style.border = "2px solid red";
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