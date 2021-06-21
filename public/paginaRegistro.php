<?php include './icono.php' ?>

    <link rel="stylesheet" href="/css/registro/registro.css">
    <title>Registrarse</title>
</head>

<body>
    <div class="container">

        <form id="signup" action="registrarUsuario.php" method="POST">
            <div class="header">
                <div class="login-titulo">
                    <h1>Registro</h1>
                </div>

            </div>

            <div class="sep"></div>

            <div class="inputs">

                <input type="email" placeholder="E-mail" autofocus name="email" maxlength="30" required/>

                <input type="password" placeholder="Contraseña" name="password" maxlength="15" required/>

                <input type="text" placeholder="Nombre" name="nombre" maxlength="15" required/>

                <input type="text" placeholder="Apellido" name="apellido" maxlength="15" required/>

                

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

                <div class="checkboxy">
                    <input name="checky" id="checky" value="1" type="checkbox" required/><label class="terms">Acepto los terminos de uso</label>
                </div>    
                    
                <input type="submit" class="boton_registro" value="Registrarse"/>
                <a class="boton_registro" href="paginaComienzo.php">Cancelar</a>
            </div>
            
        </form>
    </div>
    <!--FIN WAVE-->
</body>

</html>