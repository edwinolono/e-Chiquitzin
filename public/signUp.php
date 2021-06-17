<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signUp/ach.css">
    <title>Registrarse</title>
</head>

<body background="/images/signUp/backSpace.jpg">
    <div class="container">

        <form id="signup" action="addUser.php" method="POST">

            <div class="header">
                <div class="login-titulo">
                    <h1>Sign Up</h1>
                </div>

            </div>

            <div class="sep"></div>

            <div class="inputs">

                <input type="email" placeholder="E-mail" autofocus name="email"/>

                <input type="password" placeholder="Contraseña" name="password"/>

                <input type="text" placeholder="Nombre" name="nombre"/>

                <input type="text" placeholder="Apellido" name="apellido"/>

                

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
                    <input name="checky" id="checky" value="1" type="checkbox" /><label class="terms">Acepto los terminos de uso</label>
                </div>    
                    
                <a id="submit" href="#">Registrarse</a>

            </div>

        </form>

    </div>
    <!--FIN WAVE-->
</body>

</html>