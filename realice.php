<?php
$accion=$_REQUEST["accion"];

$cnx=new PDO("mysql:host=localhost;dbname=proyectox","root","");

switch ("$accion"){
    case "insertar";
        $nombre_img=$_FILES["imagen"]["name"];
        $directorio=$_SERVER["DOCUMENT_ROOT"]."/ventas/foto/";
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$directorio.$nombre_img);
        
        $nom=$_REQUEST["txtNom"];
        $equip=$_REQUEST["txtEquip"];
        $model=$_REQUEST["txtMod"];
        $can=$_REQUEST["txtCan"];
        $cos=$_REQUEST["txtCos"];
        $res=$cnx->query("insert into  registro values(null,'$nom','$equip','$model',$can,$cos,'$nombre_img')");
        break;
    case "eliminar";
        $cod=$_REQUEST["cod"];
        $res = $cnx->query("delete from registro where codigo=$cod");
        break;
    case "editar";
        $cod=$_REQUEST['txtCod'];
        $nom=$_REQUEST['txtNom'];
        $equip=$_REQUEST['txtEquip'];
        $mod=$_REQUEST['txtMod'];
        $can=$_REQUEST['txtCan'];
        $cos=$_REQUEST['txtCos'];
        $res=$cnx->query("update registro set cliente='$nom',equipo='$equip',modelo='$mod',cantidad=$can,costo=$cos where codigo=$cod");  
        //set modificar establecer
        break;
    

}
$cnx=null;
header ("location: index.php")
?>
