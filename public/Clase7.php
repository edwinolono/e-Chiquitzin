

        <title>Clase 7 contemos hasta 15</title>
        <?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>
    <script>
        var bandera;
        function reiniciar(visor){
            alert('Se reiniciará los resultados de la clase');
            visor.dado.value = null;
            visor.dado2.value = null;
        }
        function evaluar(visor){
            console.log("Estoy evaluando");
            if((visor.dado.value > visor.dado2.value) && (visor.res1.value == "yo") || (visor.dado.value < visor.dado2.value) && (visor.res1.value == "el"))
            {
                document.getElementById("dado").style.border = "2px solid green";
                document.getElementById("dado2").style.border = "2px solid green";
                bandera = true;
            }
            else
            {
                document.getElementById("dado").style.border = "2px solid red";
                document.getElementById("dado2").style.border = "2px solid red";
                bandera = false;
            }
            var evaluacion = 0;

                if(bandera == false){
                    evaluacion = 0;
                }else{
                    evaluacion = 1;
                }
            
            if(evaluacion == 1){
                alert("Correcto, felicidades");
            }else{
                alert("Síguelo intentando, tu puedes");
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
            <h1>Clase 7</h1>
            <form>
            <div class="left-aside" style="background-color: rgb(128, 5, 5); border-radius: 15px; position: relative; left: 45px;">
                <h2 style="text-align: center;">¿Quién tiene más?</h2>
                
                <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 15px;">
                    <h3 style="text-align: center;">Jueguen en parejas</h3>
                    <ol>
                       <li><h4 style="text-align: justify;">Por turnos cada uno tire un dado y meta en su caja de sorpresas es número de fichas</h4></li>
                       <li><h4 style="text-align: justify;">Después de 3 tiradas, gana quien tenga más fichas en su caja</h4></li>
                       <li><h4 style="text-align: justify;">Jueguen varias veces</h4></li>
                       <li><h4 style="text-align: justify;">Coloquen cuántas fichas ganaron al final del primer juego</h4></li>
                       <input type="number" min="0" max="20" name="dado" value="dado" id="dado"><br>Tú <br>
                       <input type="number" min="0" max="20" name="dado2" value="dado" id="dado2"><br> Tu compañero
                       <br>
                       <br>
                       ¿Quién tiene más?<br>
                       <input type="radio" name="res1" value="yo" id="res1"><br>Tú<br>
                       <input type="radio" name="res1" value="el" id="res1"><br>Tu amigo :C<br>                       
                       <img src="../../images/Clase 7 img 1.jpg" style="width: 200px; height: 200px;">
                   </ol>
                   
                </div>
            </div>
            <div class="left-aside" style="background-color: rgb(238, 139, 9); border-radius: 15px; position: relative; left: 200px;">
                <h2 style="text-align: center;">Juguemos con dados</h2>
                <div style="background-color: azure; border-radius: 15px; width: 90%; height: auto; position: relative; left: 25px;">
                    <h3 style="text-align: center;">Jueguen en parejas</h3>
                    <ol>
                        <li><h4 style="text-align: justify;">Por turnos, cada uno lance tres dados y anote los puntos que salgan</h4></li>
                        <li><h4 style="text-align: justify;">Gana quien haya tenido más puntos</h4></li>
                        <li><h4 style="text-align: justify;">Jueguen varias veces</h4></li>
                        <li><h4 style="text-align: justify;">¿Cuántas veces ganaste?</h4></li>
                        Ganadas:<input type="number" min="0" max="10">
                        <img src="../../images/Clase 7 img 2.png" style="width: 400px; height: 150px;">
                        <ol>
                            <li><h4>Pongan sus autos en la salida</h4></li>
                            <li><h4>Por turnos lances el dado y avancen</h4></li>
                            <li><h4>Gana quien llegue primero a la meta</h4></li>
                        </ol>
                    </ol>
                </div>
            </div>
            <div id="opciones">
                    <input type="button" value="Reiniciar" onClick="reiniciar(this.form)">
                    <input type="button" value="Evaluar" onClick="evaluar(this.form)">
                    <!--<input type="button" value="Guardar">-->
            </div>
        </form>
        </div>
    </body>
</htm>