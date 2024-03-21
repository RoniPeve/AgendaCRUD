<?php
session_start();
include_once('conexion.php');

if(isset($_GET['id'])){
    $database = new ConectarDB();
    $db = $database ->open();
    try{
        $id = $_GET['id'];
        $sql = "delete from personas WHERE idPersona='$id'";
        $_SESSION['message']=($db->exec($sql)) ? 'Los datos se elimaron correctamente' :
        'Algo salio mal, no se pudo eliminar';
    }catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
}else{
    $_SESSION['message']="Seleccione un contacto para eliminar";
}
header('Location: index.php');

?>