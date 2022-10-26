<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="estilos3.css">
    </head>
    <body>
        <h2 align="center">Nuevo Registro</h2>
        <form name="form1" action="accion.php"  method='post'>
            <table border="0" whidth="400" align="center">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNombre"></td>
                </tr><tr>
                    <td>Apellido</td>
                    <td><input type="text" name="txtApellido"></td>
                </tr><tr>
                    <td>Edad</td>
                    <td><input type="text" name="txtEdad"></td>
                </tr><tr>
                    <td>Sexo</td>
                    <td><input type="text" name="txtSexo"></td>
                </tr><tr>
                    <td>Usuario</td>
                    <td><input type="text" name="txtUsuario"></td>
                </tr><tr>
                    <td>Password</td>
                    <td><input type="password" name="txtPas"></td>
                </tr><tr>
                    <th colspan="2">
                        <input  type="submit" name="btn" value="Registrar">                        
                    </th>
                </tr>
                
            </table>
            <input type='hidden' name='accion' value='insertar'>
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
