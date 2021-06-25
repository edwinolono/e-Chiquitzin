<?php include "icono.php"; ?>
        <link rel="stylesheet" href="/css/headerAlumno/headerAlumno.css">
        <link rel="stylesheet" href="../../css/clases/extras/ahorcado.css">
    </head>
    <body>

        <div id="container">
            <h2>Juego del ahorcado</h2>
            <form name=visor>
                <center>
                    <table width=547>
                        <tr>
                            <td colspan=3 width=150 align=center><textarea name=displayHombre cols=15 rows=6></textarea></td>
                            <td colspan=3 width=150 align=center><textarea name=displayLetras cols=15 rows=6></textarea></td>
                            <td width=200></td>
                        </tr>
                        <tr>
                            <td colspan=6 width=300 align=center><input name=displayPalabra size=42></td> 
                            <td align=center>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align=center width=50><input type=button name=botA value=" A " onClick="Juega(this.form, 'a')"></td>
                            <td align=center width=50><input type=button name=botB value=" B " onClick="Juega(this.form, 'b')"></td>
                            <td align=center width=50><input type=button name=botC value=" C " onClick="Juega(this.form, 'c')"></td>
                            <td align=center width=50><input type=button name=botD value=" D " onClick="Juega(this.form, 'd')"></td>
                            <td align=center width=50><input type=button name=botE value=" E " onClick="Juega(this.form, 'e')"></td>
                            <td align=center width=50><input type=button name=botF value=" F " onClick="Juega(this.form, 'f')"></td>
                        </tr>
                        <tr>
                            <td align=center width=50><input type=button name=botG value=" G " onClick="Juega(this.form, 'g')"></td>
                            <td align=center width=50><input type=button name=botH value=" H " onClick="Juega(this.form, 'h')"></td>
                            <td align=center width=50><input type=button name=botI value=" I " onClick="Juega(this.form, 'i')"></td>
                            <td align=center width=50><input type=button name=botJ value=" J " onClick="Juega(this.form, 'j')"></td>
                            <td align=center width=50><input type=button name=botK value=" K " onClick="Juega(this.form, 'k')"></td>
                            <td align=center width=50><input type=button name=botL value=" L " onClick="Juega(this.form, 'l')"></td>
                            <td align=right valign=middle>Ganadas: <input type=text name=ganadas size=4 value=0></td>
                        </tr>
                        <tr>
                            <td align=center width=50><input type=button name=botM value=" M " onClick="Juega(this.form, 'm')"></td>
                            <td align=center width=50><input type=button name=botN value=" N " onClick="Juega(this.form, 'n')"></td>
                            <td align=center width=50><input type=button name=botÑ value=" Ñ " onClick="Juega(this.form, 'ñ')"></td>
                            <td align=center width=50><input type=button name=botO value=" O " onClick="Juega(this.form, 'o')"></td>
                            <td align=center width=50><input type=button name=botP value=" P " onClick="Juega(this.form, 'p')"></td>
                            <td align=center width=50><input type=button name=botQ value=" Q " onClick="Juega(this.form, 'q')"></td>                        
                            <td align=right valign=middle>Perdidas: <input type=text name=perdidas size=4 value=0></td>
                        </tr>
                        <tr>
                            <td align=center width=50><input type=button name=botR value=" R " onClick="Juega(this.form, 'r')"></td>
                            <td align=center width=50><input type=button name=botS value=" S " onClick="Juega(this.form, 's')"></td>
                            <td align=center width=50><input type=button name=botT value=" T " onClick="Juega(this.form, 't')"></td>
                            <td align=center width=50><input type=button name=botU value=" U " onClick="Juega(this.form, 'u')"></td>
                            <td align=center width=50><input type=button name=botV value=" V " onClick="Juega(this.form, 'v')"></td>
                            <td align=center width=50><input type=button name=botW value=" W " onClick="Juega(this.form, 'w')"></td>
                        </tr>
                        <tr>
                            <td align=center width=50><input type=button name=botX value=" X " onClick="Juega(this.form, 'x')"></td>
                            <td align=center width=50><input type=button name=botY value=" Y " onClick="Juega(this.form, 'y')"></td>
                            <td align=center width=50><input type=button name=botZ value=" Z " onClick="Juega(this.form, 'z')"></td>
                            <td colspan=3 align=center><input type=button name=Inicia value=" Juego Nuevo " onClick="IniciaJuego(this.form)" </td>
                            <td align=center><input type=button value=Limpiar name=B1 onClick="this.form.ganadas.value= '0'; this.form.perdidas.value= '0'"></td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
    </body>
</html>