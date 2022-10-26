<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <style>
        body{

        }
        div{
            background-color: #FDFD96;
            width: 300px;
            height: 250px;
            text-align: center;
            border-radius: 20px;
            padding: 10px 20px;
            display: inline-block;
            border: 1px solid black;
            
        }
    </style>
    <body>
    <center>
        <div align="center">
        <h2 align="center"> Iniciar Sesion</h2>
        <form action="realice2.php" method="get">
            <table  border="0" witch="230" align="center">
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="txtUsuario"></td>
                </tr><tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="txtPas"></td>
                </tr><tr>
                    <th colspan="2">
                        <input type="submit" name="btn" value="Iniciar Sesion">
                    </th>
                </tr>
            </table>           
        </form>
        <h4 align="center">No tienes cuenta?</h4>    
    <center>
        <h3 align="center">
            <a href="nuevoregistro.php">REGISTRARSE</a>
        </h3>
    </center>
        <?php
        // put your code here
        ?>
        </div>
    </center>
    </body>
</html>
