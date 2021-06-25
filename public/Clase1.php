<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>
    <script>
        var semillasAnaResultado = 13;
        var cosasConteoResultados = ["amanda", "cecilia", "armando", "dario"];
        var banderas = [];
        function reiniciar(visor){
            //alert('Se reiniciará los resultados de la clase');
            visor.semillasAna.value= null;
        }
        function evaluar(visor){
            //Ana
            if(visor.semillasAna.value == semillasAnaResultado){
                document.getElementById("semillasAnaInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("semillasAnaInput").style.border = "2px solid red";
            }

            //Luz | Amanda
            if(visor.select1.value == cosasConteoResultados[0]){
                banderas.push(true);
                document.getElementById("amanda").style.color = "green";
            }else{
                banderas.push(false);
                document.getElementById("luz").style.border = "2px solid red";
            }

            //Cecilia | Oscar
            if(visor.select2.value == cosasConteoResultados[1]){
                banderas.push(true);
                document.getElementById("cecilia").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("oscar").style.border = "2px solid red";
            }

            //Adrian | Armando
            if(visor.select3.value == cosasConteoResultados[2]){
                banderas.push(true);
                document.getElementById("armando").style.background = "green";
            }else{
                banderas.push(false);
                document.getElementById("adrian").style.border = "2px solid red";
            }

            //Dario | Jimena
            if(visor.select4.value == cosasConteoResultados[3]){
                banderas.push(true);
                document.getElementById("dario").style.border = "2px solid green";
            }else{
                banderas.push(false);
                document.getElementById("jimena").style.border = "2px solid red";
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
                visor.victorias.value++;
                document.getElementById("victorias").value ++;
                //alert(document.getElementById("victorias").value);
                //alert(document.visor.victorias.value);
                reiniciar(visor);
            }else{
                alert("Síguelo intentando, tu puedes");
                visor.derrotas.value++;
                //alert(document.visor.derrotas.value);
                banderas = [];
            }
            
            banderas = [];
        }


    </script>
    <body>
        <header>
            <div id="nombreAplicacion">e-Chiquitzin</div>
            <div class="anclajes">
                <a href="./menuAlumno.php">Estadísticas</a>
                <a href="./menuAlumno.php">Inicio</a>
                <a href="./paginaAyuda.php">Ayuda</a>
                <a href="./cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div class="container">
            <h1>Clase 1</h1>
            <form action="guardarResultados.php" method="POST">
                <div class="ejercicio" style="background-color: #CD6155">
                
                    <h2>Semillas y vasos</h2>
                    <h3>Trabajen en Equipo</h3>
                    <div>
                        <ol style="text-align: justify;">
                            <li>Los Equipos de los vasos piden a los de las semillas las que necesitan para poner una en cada vaso.</li>
                            <li>Revisen si sobraron o faltaron semillas.</li>
                            <li>Repitan la actividad. Ahora los equipos de los vasos tienen las semilas.</li>
                            <li>Jueguen de nuevo. Escriban un mensaje para pedir las semillas, sin hablaar con el equipo que las tiene.</li>
                        </ol>
                        <img src="../../images/clases/clase1/Clase1 img 1.png" style="border: 2px solid black; border-radius: 15px; max-width: 90%; left: 15px;">
                        <h4>¿Cuántas semillas tiene Elisa?</h4>
                        Número de semillas:<input type="number" min="0" max="5" name="semillasAna" id="semillasAnaInput">
                    </div> 
                </div>

                <div class="ejercicio" style="background-color: #ABB2B9">
                    <h2>La caja de sorpresas</h2>
                    <h3>Trabajen en parejas con su caja de sorpresas y metan varias cosas dentro de ella que tengan a la mano</h3>
                    <div>
                    <h4>1 ¿Quién tiene más cosas dentro de la caja?</h4>
                    <label>
                        <input type="radio" name="select" value="1"> Tú <br>
                        <input type="radio" name="select" value="2"> Tu nuevo mejor amigo :)
                    </label>
                        <h4>2 Anota cuántas cosas tienen</h4>
                        <input type="number" min="0" max="15">Las tuyas <br>
                        <input type="number" min="0" max="15">Las de tu amigo <br>
                        <h4>3 Quién tiene más cosas?</h4>
                        <img src="../../images/clases/clase1/Clase 1 img 2.png" style="width: 30%;">
                        <input type="radio" name="select1" value="luz" id="luz">Luz
                        <input type="radio" name="select1" value="amanda" id="amanda">Amanda
                        <img src="../../images/clases/clase1/Clase 1 img 3.png" style="width: 30%;">
                        <input type="radio" name="select2" value="cecilia" id="cecilia">Cecilia
                        <input type="radio" name="select2" value="oscar" id="oscar">Oscar
                        <br>
                        <img src="../../images/clases/clase1/Clase 1 img 4.png" style="width: 30%;">
                        <input type="radio" name="select3" value="adrian" id="adrian">Adrian
                        <input type="radio" name="select3" value="armando" id="armando">Armando
                        <img src="../../images/clases/clase1/Clase 1 img 5.png" style="width: 30%;">
                        <input type="radio" name="select4" value="dario" id="dario">Dario
                        <input type="radio" name="select4" value="jimena" id="jimena">Jimena
                    </div> 
                </div>
            
                <input type="number" name="clase" value=1 hidden>
                <br>
                Victorias:<input type="number" name="victorias" id="victorias" value=0 readonly>
                <br>
                Derrotas:<input type="number" name="derrotas" id="victorias" value=0 readonly>
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