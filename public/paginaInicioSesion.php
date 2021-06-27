<?php include './icono.php' ?>

    <!--NORMALIZE CSS-->
    <link rel="stylesheet" href="/css/paginaInicioSesion/normalize.css">
    <!--HOJA DE ESTILOS-->
    <link rel="stylesheet" href="/css/paginaInicioSesion/styles.css">
    <link rel="stylesheet" href="/css/paginaInicioSesion/paginaInicioSesion.css">
</head>

<body>
    <!--Wave-->
    <svg preserveAspectRatio="none" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#446BAF" fill-opacity="1"
            d="M0,192L30,208C60,224,120,256,180,261.3C240,267,300,245,360,208C420,171,480,117,540,101.3C600,85,660,107,720,117.3C780,128,840,128,900,133.3C960,139,1020,149,1080,165.3C1140,181,1200,203,1260,176C1320,149,1380,75,1410,37.3L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path>
    </svg>
    <!--FIN WAVE-->

    <div class="login">

        <div class="nave">
            <img src="/images/paginaInicioSesion/cohete.svg" alt="cohete">
        </div>

        <div class="login-contenedor">
            <div class="login-titulo">
                <h1>Inicia Sesión</h1>
            </div>

            <div class="login-centrar">

                <form action="validarUsuario.php" method="POST">
                    <div class="login_contenido">
                        <input type="text" name="email" placeholder="Email" required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="login_contenido">
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    
                    <div>
                        <label>
                            <input type="radio" class="option-input radio" name="rol" checked value="1"/>
                            Estudiante&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="rol" value="2"/>
                            Profesor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="rol" value="3"/>
                            Administrador
                        </label>
                    </div>

                    <input type="submit" value="Iniciar sesión" class="boton_inicio">
                    <a class="login-recordar" href="paginaRegistro.php">¿No estás registrado?</a>
                <form>
                <div id="error"></div>
            </div>
        </div>
    </div>
</body>

</html>