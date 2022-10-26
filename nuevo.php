<!DOCTYPE html>
<?php
session_start();
if (($_SESSION['acceso']<>TRUE)){
    header("Location: loading.php");
}
?>
<html
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos3.css">
    </head>
    <body>
        <h2 align="center">NUEVA VENTA</h2>
        <form name="form1" action="realice.php" enctype='multipart/form-data' method='post'>
            <table border="0" whidth="400" align="center">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNom"></td>
                </tr><tr>
                    <td>Equipo</td>
                    <td><input type="text" name="txtEquip"></td>
                </tr><tr>
                    <td>Modelo</td>
                    <td><input type="text" name="txtMod"></td>
                </tr><tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCan"></td>
                </tr><tr>
                    <td>Costo</td>
                    <td><input type="text" name="txtCos"></td>
                </tr><tr>
                    <td>Imagen</td>
                    <td><input type='file' name='imagen' size='30'/></td>
                </tr><tr>
                    <th colspan="2">
                        <input  type="submit" name="btn" value="Guardar">                        
                    </th>
                </tr>
                
            </table>
            <input type='hidden' name='accion' value='insertar'>
            
        </form>
        <?php
       
        ?>
    </body>
</html>
