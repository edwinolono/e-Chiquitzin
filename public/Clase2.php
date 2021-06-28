<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="/css/clases/todas/clases.css">
    </head>
    <script>
        //Definimos los resultados correctos del ejercicio
        var paletas = 6;
        var dulces = 6;
        var chocolates = 6;
        var helados = 7;
        var caramelos = 6;
        var pastelitos = 6;
        var cristales = 10;
        var donas = 10;
        var animales = 10;
        var carritos = 9;
        var naves = 10;
        var munecos = 8;
        var banderas = [];

        //Función para limpiar los campos del ejercicio
        function reiniciar(visor){
            visor.paletas.value = null;
            visor.dulces.value = null;
            visor.chocolates.value = null;
            visor.helados.value = null;
            visor.caramelos.value = null;
            visor.pastelitos.value = null;
            visor.cristales.value = null;
            visor.donas.value = null;
            visor.animales.value = null;
            visor.carritos.value = null;
            visor.naves.value = null;
            visor.munecos.value = null;
            banderas = [];
            document.getElementById("paletasInput").style.border = "1px solid black";
            document.getElementById("dulcesInput").style.border = "1px solid black";
            document.getElementById("chocolatesInput").style.border = "1px solid black";
            document.getElementById("heladosInput").style.border = "1px solid black";
            document.getElementById("caramelosInput").style.border = "1px solid black";
            document.getElementById("pastelitosInput").style.border = "1px solid black";
            document.getElementById("cristalesInput").style.border = "1px solid black";
            document.getElementById("donasInput").style.border = "1px solid black";
            document.getElementById("animalesInput").style.border = "1px solid black";
            document.getElementById("carritosInput").style.border = "1px solid black";
            document.getElementById("navesInput").style.border = "1px solid black";
            document.getElementById("munecosInput").style.border = "1px solid black";
        }

        //Definimos la función para evaluar el ejercicio
        function evaluar(visor){
            //Paletas
            if(visor.paletas.value == paletas){
                document.getElementById("paletasInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("paletasInput").style.border = "2px solid red";
            }

            //Dulces
            if(visor.dulces.value == dulces){
                document.getElementById("dulcesInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("dulcesInput").style.border = "2px solid red";
            }

            //Chocolates
            if(visor.chocolates.value == chocolates){
                document.getElementById("chocolatesInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("chocolatesInput").style.border = "2px solid red";
            }

            //Helados
            if(visor.helados.value == helados){
                document.getElementById("heladosInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("heladosInput").style.border = "2px solid red";
            }

            //Caramelos
            if(visor.caramelos.value == caramelos){
                document.getElementById("caramelosInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("caramelosInput").style.border = "2px solid red";
            }

            //Pastelitos
            if(visor.pastelitos.value == pastelitos){
                document.getElementById("pastelitosInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("pastelitosInput").style.border = "2px solid red";
            }

            //Cristales
            if(visor.cristales.value == cristales){
                document.getElementById("cristalesInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("cristalesInput").style.border = "2px solid red";
            }

            //Donas
            if(visor.donas.value == donas){
                document.getElementById("donasInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("donasInput").style.border = "2px solid red";
            }

            //Animales
            if(visor.animales.value == animales){
                document.getElementById("animalesInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("animalesInput").style.border = "2px solid red";
            }

            //Carritos
            if(visor.carritos.value == carritos){
                document.getElementById("carritosInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("carritosInput").style.border = "2px solid red";
            }

            //Naves
            if(visor.naves.value == naves){
                document.getElementById("navesInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("navesInput").style.border = "2px solid red";
            }

            //Muñecos
            if(visor.munecos.value == munecos){
                document.getElementById("munecosInput").style.border = "2px solid green";
                banderas.push(true);
            }else{
                banderas.push(false);
                document.getElementById("munecosInput").style.border = "2px solid red";
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
                //visor.victorias.value++;
                document.getElementById("victorias").value ++;
                //alert(document.getElementById("victorias").value);
                //alert(document.visor.victorias.value);
                reiniciar(visor);
            }else{
                alert("Síguelo intentando, tu puedes");
                //visor.derrotas.value++;
                document.getElementById("derrotas").value ++;
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
                <a href="./estadisticasAlumno.php">Estadísticas</a>
                <a href="./menuAlumno.php">Inicio</a>
                <a href="./paginaAyuda.php">Ayuda</a>
                <a href="./cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div class="container">
            <h1>Clase 2</h1>

            <form action="guardarResultados.php" method="POST" name="visor">

                <div class="ejercicio" style="background-color: #F39C12">
                    <h2>¿Tienen la misma cantidad?</h2>
                    <h3>Trabajen en Equipo</h3>
                    <div>
                        <img src="/images/clases/clase2/Clase2 img 1.png" style="border: 2px solid black; border-radius: 15px; max-width: 90%; left: 15px;">                    
                        <img src="/images/clases/clase2/Clase2 img 2.png" style="border: 2px solid black; border-radius: 15px; max-width: 90%; left: 15px;">
                        <br>
                        <input type="number" min="0" max="20" name="paletas" id="paletasInput">paletas<br>
                        <input type="number" min="0" max="20" name="dulces" id="dulcesInput">dulces<br>
                        <input type="number" min="0" max="20" name="chocolates" id="chocolatesInput">chocolates<br>
                        <input type="number" min="0" max="20" name="helados" id="heladosInput">helados<br>
                        <input type="number" min="0" max="20" name="caramelos" id="caramelosInput">caramelos<br>
                        <input type="number" min="0" max="20" name="pastelitos" id="pastelitosInput">pastelitos<br>
                        <input type="number" min="0" max="20" name="cristales" id="cristalesInput">cristales<br>
                        <input type="number" min="0" max="20" name="donas" id="donasInput">Donas<br>
                        <input type="number" min="0" max="20" name="animales" id="animalesInput">animales<br>
                        <input type="number" min="0" max="20" name="carritos" id="carritosInput">carritos<br>
                        <input type="number" min="0" max="20" name="naves" id="navesInput">naves<br>
                        <input type="number" min="0" max="20" name="munecos" id="munecosInput">muñecos<br>
                    </div> 
                </div>

                <div class="ejercicio" style="background-color: #27AE60">
                    <h2>¿Tienen la misma cantidad</h2>
                    <h3>Trabajen en Equipo</h3>
                    <div>
                        <br>
                        <h3 style="text-align: center;">¿Cuál te tocó?</h3>
                        <h4>1 Jueguen en parejas. Mezclen sus tarjetas y pónganlas con los puntos hacia arriba</h4>
                        <h4>2 Toma una tarjeta, y sin voltearla anota el número de puntos</h4>
                        <h4>3 Voltea la tarjeta. Si el número es el que escribiste, te quedas con ella; si no, la regresas debajo de las demás</h4>
                        <h4>4 El juego termina cuando las tarjetas se acaban</h4>
                        <br>
                        <img src="/images/clases/clase2/Clase2 img 3.png" style="width: 90%; height: 300px;">
                    </div> 
                </div>
                <input type="number" name="clase" value=2 hidden>
                <br>
                Victorias:<input type="number" name="victorias" id="victorias" value=0 readonly>
                <br>
                Derrotas:<input type="number" name="derrotas" id="derrotas" value=0 readonly>
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