<?php include 'icono.php' ?>
    
        <link rel="stylesheet" href="/css/paginaAyuda/paginaAyuda.css">
    </head>
    <body>
        <header>
                <div id="nombreAplicacion">Ayuda</div>
                <div class="anclajes">
                    <a href="./menuAlumno.php">Inicio</a>
                    <a href="./cerrarSesion.php">Cerrar Sesión</a>
                </div>
        </header>
        <div id="contenedorAyuda">
            <div id="indice">
                <h1>Preguntas frecuentes</h1>
                <div id="indiceContenido">
                    <ul>
                        <li><a href="#respuesta1">¿Cómo resuelvo ejercicios?</a></li>
                        <li><a href="#respuesta2">¿Cómo cierro mi sesión?</a></li>
                    </ul>
                </div>
            </div>
            <div id="separador"></div>
            <div id="respuestas">
                <div id="respuesta1">
                    <h1>¿Cómo resuelvo ejercicios?</h1>
                    <div class="contenedorRespuesta">
                        <div class="respuestaTexto">
                            <p>Para poder resolver ejercicios debes dirigirte a la página de mení del alumno
                                , después seleccionar la clase, recomendamos comenzar desde la primera
                                e ir subi   endo de clase conforme tu resultado
                            </p>
                        </div>
                        <div class="imagenRespuesta">
                            <img src="/images/paginaAyuda/ayuda1.png" alt="ayuda1" width="500px">
                        </div>
                    </div>
                </div>

                <hr>

                <div id="respuesta2">
                    <h1>¿Cómo cierro mi sesión?</h1>
                    <div class="contenedorRespuesta">
                        <div class="respuestaTexto">
                            <p>Para poder cerrar sesión en nuestro sistema, es necesario primero haber
                                iniciado la sesión, después durante todo el sistema se mostrará un
                                encabezado el cual tiene un botón para cerrar sesión.
                            </p>
                        </div>
                        <div class="imagenRespuesta">
                            <img src="/images/paginaAyuda/ayuda2.png" alt="ayuda2" width="500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
