<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>

    <script>
        //TODO: script para la funcionalidad del ejercicio
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
                        <input type="number" min="0" max="5" name="tubo1"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 2.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="tubo2"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 3.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="tubo3"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 4.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="tubo4"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 5.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="tubo5"> <br>
                        <img src="/images/clases/clase4/Clase 4 img 6.png" style="max-width: 35%; height: 50px;">
                        <input type="number" min="0" max="5" name="tubo6"> <br>
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