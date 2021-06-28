<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>

    <script>
        //Definimos las respuestas correctas del ejercicio
        var suma1 = 3;
        var suma2 = 3;
        var suma3 = 4;
        var suma4 = 4;
        var suma5 = 5;
        var suma6 = 5;
        var banderas = [];

        //Función para limpiar los campos
        function reiniciar(visor){
            visor.suma1.value=null;
            visor.suma2.value=null;
            visor.suma3.value=null;
            visor.suma4.value=null;
            visor.suma5.value=null;
            visor.suma6.value=null;
            
            document.getElementById("suma1").style.border = "2px solid black";
            document.getElementById("suma2").style.border = "2px solid black";
            document.getElementById("suma3").style.border = "2px solid black";
            document.getElementById("suma4").style.border = "2px solid black";
            document.getElementById("suma5").style.border = "2px solid black";
            document.getElementById("suma6").style.border = "2px solid black";
        }

        //Función para evaluar el ejercicio
        function evaluar(visor){
            if(visor.suma1.value == suma1){
                banderas.push(true);
                document.getElementById("suma1").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("suma1").style.border = "2px solid red";
            }

            if(visor.suma2.value == suma2){
                banderas.push(true);
                document.getElementById("suma2").style.border = "2px solid green";
            }else{
                document.getElementById("suma2").style.border = "2px solid red";
                banderas.push(false);
            }

            if(visor.suma3.value == suma3){
                banderas.push(true);
                document.getElementById("suma3").style.border = "2px solid green";
            }else{
                document.getElementById("suma3").style.border = "2px solid red";
                banderas.push(false);
            }

            if(visor.suma4.value == suma4){
                banderas.push(true);
                document.getElementById("suma4").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("suma4").style.border = "2px solid red";
            }

            if(visor.suma5.value == suma5){
                banderas.push(true);
                document.getElementById("suma5").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("suma5").style.border = "2px solid red";
            }

            if(visor.suma6.value == suma6){
                banderas.push(true);
                document.getElementById("suma6").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("suma6").style.border = "2px solid red";
            }

            var evaluacion = 0;

            for (const bandera of banderas) {
                if(bandera == false){
                    evaluacion = 0;
                    break;
                }else{
                    evaluacion = 1;
                }
            }
            
            if(evaluacion == 1){
                alert("Correcto, felicidades");
                document.getElementById("victorias").value ++;
                reiniciar(visor);
            }else{
                alert("Síguelo intentando, tu puedes");
                document.getElementById("derrotas").value ++;
                banderas = [];
            }
            
            banderas = [];
        }
            
    </script>

    <body>
        <header>
            <div id="nombreAplicacion">e-Chiquitzin</div>
            <div class="anclajes">
                <a href="./estadisticasAlumno.php">Estadísticas</a>
                <a href="./menuAlumno.php">Inicio</a>
                <a href="./paginaAyuda.php">Ayuda</a>
                <a href="./cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>

        <div class="container">
            <h1>Clase 4</h1>

            <form action="guardarResultados.php" method="POST" name="visor">
                <div class="ejercicio" style="background-color: #F39C12">
                    <h2>La máquina de juntar</h2>
                    <h3>Trabajen en equipo, metan cosas por los tubos y escriban la suma de los 2</h3>
                    <div>
                        <img src="/images/clases/clase4/Clase 4 img 7.png" style="width: 150px; height: 150px; left: 60%;"><br>
                        <img src="/images/clases/clase4/Clase 4 img 1.png" style="max-width: 35%; height: 100px;">
                        <input type="number" min="0" max="5" name="suma1" id="suma1"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 2.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="suma2" id="suma2"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 3.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="suma3" id="suma3"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 4.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="suma4" id="suma4"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 5.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="suma5" id="suma5"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 6.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="suma6" id="suma6"> <br>
                    </div> 
                </div>

                <div class="ejercicio" style="background-color: #27AE60">
                    <h2>Lanzamiento de moneda</h2>
                    <h3>Aguilas y soles</h3>
                    <div>
                        <br>
                        <img src="/images/clases/clase4/Clase 4 img 8.jpg" style="max-width: 25%; max-height: 25%; border-radius: 15px; position: relative; left:250px">
                        <ol>
                            <li>Lanza 10 monedas de un peso</li>
                            <li>¿Cuántas águilas salieron?</li>
                            <input type="number" min="0" max="10">
                            <li>¿Cuántos soles salieron?</li>
                            <input type="number" min="0" max="10">
                            <li>¿Cuántas águilas y soles salieron en total?</li>
                            <input type="number" min="0" max="10">
                        </ol>
                    </div> 
                </div>

                <input type="number" name="clase" value=4 hidden>
                <br>
                Victorias:<input type="number" name="victorias" id="victorias" value=0 readonly>
                <br>
                Derrotas:<input type="number" name="derrotas" id="derrotas" value=0 readonly>
                <br>

                <br>
                <div id="opciones">
                    <input type="button" value="Reiniciar" onClick="reiniciar(this.form)">
                    <input type="button" value="Evaluar" onClick="evaluar(this.form)">
                    <input type="submit" value="Guardar">
                </div>
                <br>  
                
            </form>
        </div>
    </body>
</htm>