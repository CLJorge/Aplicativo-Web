<?php
$usu=$_REQUEST['txtUsuario'];
$pas=$_REQUEST['txtPas'];

$cnx=new PDO("mysql:host=localhost;dbname=proyectox","root","");
$res=$cnx->query("select * from sesion where usuario='$usu' and pas='$pas'");

$can=$res->rowCount();
if($can>0){
    session_start();
    $_SESSION['acceso']=true;
    header("Location: index.php");
}else{
    header("Location: loading.php?msg=Usuario o pas Incorrecto");
}
?>


