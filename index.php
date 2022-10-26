<!DOCTYPE html>

<?php
session_start();
if (($_SESSION['acceso']<>TRUE)){
    header("Location: loading.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <style>
        div{
            background: dimgray;
            width: 700px;
            height: 350px;
            border-radius: 20px;
            
        }
        .eliminar{
            font-size: 12px;
            text-decoration:none;
            color: white;
            background: red;
            padding: 6px 6px;
            display: inline-block;
            border-radius: 20px;
        }
        .editar{
            font-size: 12px;
            text-decoration: none;
            color: white;
            background: green;
            padding: 6px 6px;
            display: inline-block;
            border-radius: 20px;
            
        }
        td{
            background: 0;
        }

    </style>
    <body>
    <center>
        <div>
            
        <h2 class="titulo" align="center">REGISTRO DE VENTAS</h2>
        <table  width="600" align="center" border="1" >
            <tr bgcolor="limegreen">
                <th colspan="7"> VENTA DE EQUIPO MOVIL</th>
                <th><a href="nuevo.php" class="insertar">Insertar</a></th>           
            </tr>
            <tr bgcolor="limegreen">
                <th>Codigo</th><th>Cliente</th><th>Equipo</th><th>Modelo</th><th>Cantidad</th><th>Costo</th><th>Imagen</th><th>Accion</th>
                
            </tr>
            <?php
            $cnx=new PDO("mysql:host=localhost;dbname=proyectox","root","");
            $res = $cnx->query("select * from registro");
            
            $num_result=$res->rowCount();
            $registros=4;
            if(isset($_REQUEST['num'])){
                $pagina=$_REQUEST['num'];
                $inicio=(($pagina)-1)*$registros;
            }else{
                $inicio=0;
                $pagina=1;    
            }
            $res =$cnx->query("select * from registro limit $inicio,$registros");
            $paginas= ceil($num_result/$registros);
            
            foreach ($res as $row){
            ?>
            
            <tr class="cuadro">
            
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><img src="foto/<?php echo $row[6]; ?>" width="50" height="40"></td>
                <td><a class="editar" href="editar.php?cod=<?php echo $row[0]; ?>"> Editar</a>  <a class="eliminar" href="realice.php?accion=eliminar&cod=<?php echo $row[0]?>">Eliminar</a></td>           
            </tr>
            
            <?php
            }
            ?>
        </table>
    <center class="enlace">
        <?php
        if($pagina>1)
            echo "<a href=index.php?num=".($pagina-1).">Anterior</a>";
        for($i=1;$i<=$paginas;$i++){
            if($i==$pagina)
                echo $i." ";
            else{
                echo "<a href=index.php?num=$i>".$i."</a>";
                
            }
        }
        if ($pagina<$paginas)
            echo "<a href=index.php?num=".($pagina+1).">Siguiente</a>";
        ?>
    </center>
    <center>
        <br>
        <a href='close.php'><img src="close.png" width="120" height="80"></a>
    </center>          
        </div>
    </center>
    </body>
</html>
