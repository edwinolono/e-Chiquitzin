<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>
    <script>
        //Definimos los resultados correctos del ejercicio
        var fichas = 7;
        var bandera = false;

        //Definimos la función para limpiar el ejercicio
        function reiniciar(visor){
            try {
                var radio = document.querySelector('input[type=radio][name=fichas]:checked');
                radio.checked = false;
            } catch (error) {
                alert("Debes seleccionar una opción primero");
            }
            bandera = false;
        }

        function evaluar(visor){
            //Fichas
            if(visor.fichas.value == fichas){
                bandera = true;
            }
            
            if(bandera == true){
                alert("Correcto, felicidades");
                document.getElementById("victorias").value ++;
                reiniciar(visor);
            }else{
                alert("Síguelo intentando, tu puedes");
                document.getElementById("derrotas").value ++;
                banderas = false;
            }
            
            banderas = false;
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
            <h1>Clase 3</h1>
            <form action="guardarResultados.php" method="POST" name="visor">

                <div class="ejercicio" style="background-color: #E74C3C">
                    <h2>Juntemos cosas en la caja</h2>
                    <h3>Jueguen en pareja con una cada de sorpresas</h3>
                    <div>
                        <ul>
                            <li>Metan 4 cosas en la caja</li>
                            <li>Tiren un dado y metan en la caja tantas cosas como puntos marque el dado</li>
                            <li>Escriban cuantas cosas hay en la caja sin contarlas</li>
                            <li>Cuenten las cosas. ¿Escribieron el número correcto?</li>
                            <input type="number" min="0" max="15"> ¿Cuántas cosas hay?
                            <br>
                            <img src="/images/clases/clase3/Clase 3 img 1.jpg" style="max-width: 90%; ">
                        </ul>
                        <h4>Jueguen varias veces y escriban sus resultados</h4>
                    </div> 
                </div>

                <div class="ejercicio" style="background-color: #9B59B6">
                    <h2>Ocho fichas</h2>
                    <h3>Jueguen en pareja con una caja de sorpresas</h3>
                    <div>
                        <br>
                        <h3 style="text-align: center;">Ana usó fichas para formar grupos de fichas</h3>
                        <h4 style="text-align: center;"> Selecciona la que tiene 7 fichas</h4>
                        <img src="/images/clases/clase3/Clase 3 img 4.png" style="max-width: 300px; max-height: 100px;">
                        <input type="radio" name="fichas" value=8>
                        <img src="/images/clases/clase3/Clase 3 img 5.png" style="max-width: 300px; max-height: 100px;">
                        <input type="radio" name="fichas" value=8><br>
                        <img src="/images/clases/clase3/Clase 3 img 2.png" style="max-width: 300px; max-height: 100px;">
                        <input type="radio" name="fichas" value=9>
                        <img src="/images/clases/clase3/Clase 3 img 3.png" style="max-width: 300px; max-height: 100px;">
                        <input type="radio" name="fichas" value=7>
                        <ol>
                            <li>En equipos, formen grupos de 7 fichas de otras maneras</li>
                        </ol>
                    </div> 
                </div>

                <input type="number" name="clase" value=3 hidden>
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