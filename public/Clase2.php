<?php include 'headerClases.php'; ?>
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
            <h1>Clase 2</h1>

            <form>

                <div class="ejercicio" style="background-color: #F39C12">
                    <h2>¿Tienen la misma cantidad?</h2>
                    <h3>Trabajen en Equipo</h3>
                    <div>
                        <img src="/images/clases/clase2/Clase2 img 1.png" style="border: 2px solid black; border-radius: 15px; max-width: 90%; left: 15px;">                    
                        <img src="/images/clases/clase2/Clase2 img 2.png" style="border: 2px solid black; border-radius: 15px; max-width: 90%; left: 15px;">
                        <br>
                        <input type="number" min="0" max="20">paletas
                        <input type="number" min="0" max="20">dulces
                        <input type="number" min="0" max="20">chocolates
                        <input type="number" min="0" max="20">helados
                        <input type="number" min="0" max="20">caramelos
                        <input type="number" min="0" max="20">pastelillos
                        <input type="number" min="0" max="20">Cristales
                        <input type="number" min="0" max="20">Donas
                        <input type="number" min="0" max="20">animales
                        <input type="number" min="0" max="20">carritos
                        <input type="number" min="0" max="20">naves
                        <input type="number" min="0" max="20">muñecos
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

                <br>
                <div id="opciones">
                    <input type="button" value="Reiniciar" onClick="reiniciar(this.form)">
                    <input type="button" value="Evaluar" onClick="evaluar(this.form)">
                    <!--<input type="button" value="Guardar">-->
                </div>
                <br>  

            </form>
        </div>
    </body>
</htm>