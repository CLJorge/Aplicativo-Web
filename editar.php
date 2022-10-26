<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos3.css">
    </head>
    <body>
        <?php
        $cod=$_REQUEST['cod'];
        $cnx=new PDO("mysql:host=localhost;dbname=proyectox","root","");
        $res=$cnx->query("select * from registro where codigo=$cod");
        ?>
        <h2 align="center">Nuevo Registro</h2>
        <form name="form1" action="realice.php" method="post">
            <table borde="0" witdth="400" align="center">
                <?php
                    foreach ($res as $row)
            {
                ?>
                <tr>
                    <td>Codigo</td>
                    <td><input type="text" name="txtCod" value="<?php echo $row[0]; ?>" readonly="readonly"></td>}
                </tr><tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNom" value="<?php echo $row[1]; ?>" ></td>
                </tr><tr>
                    <td>Equipo</td>
                    <td><input type="text" name="txtEquip" value="<?php echo $row[2]; ?>" ></td>
                </tr><tr>
                    <td>Modelo</td>
                    <td><input type="text" name="txtMod" value="<?php echo $row[3]; ?>" ></td>
                </tr><tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCan" value="<?php echo $row[4]; ?>" ></td>
                </tr><tr>
                    <td>Costo</td>
                    <td><input type="text" name="txtCos" value="<?php echo $row[5]; ?>" ></td>
                </tr><tr>
                    <th colspan="2">
                        <input type="submit" name="btn" value="Guardar">
                    </th>
                </tr>
<?php
            }
?>                
            </table>
            <input type="hidden" name="accion" value="editar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
