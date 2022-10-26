<?php
$accion=$_REQUEST["accion"];

$cnx=new PDO("mysql:host=localhost;dbname=proyectox","root","");

switch ("$accion"){
    case "insertar";
        
        $nombre=$_REQUEST["txtNombre"];
        $apellido=$_REQUEST["txtApellido"];
        $edad=$_REQUEST["txtEdad"];
        $sexo=$_REQUEST["txtSexo"];
        $usuario=$_REQUEST["txtUsuario"];
        $pas=$_REQUEST["txtPas"];
        $res=$cnx->query("insert into  sesion values(null,'$nombre','$apellido',$edad,'$sexo','$usuario','$pas')");
        break;
    case "eliminar";
        break;
}
$cnx=null;
header ("location: loading.php")
?>

