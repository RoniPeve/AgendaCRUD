<?php
session_start();
include_once('conexion.php');

if(isset($_POST['edit'])){
    $database = new ConectarDB();
    $db = $database ->open();
    try{
        $id = $_GET['id'];
        $nombrec=$_POST['nombrecontacto'];
        $telefono=$_POST['celular'];
        $correo=$_POST['email'];
        $direccion=$_POST['direccion'];
        $sql = "update personas set Nombre='$nombrec', Telefono='$telefono', Correo='$correo', Direccion='$direccion' WHERE idPersona='$id' ";
        $_SESSION['message']=($db->exec($sql)) ? 'Los datos se actualizaron correctamente' :
        'Algo salio mal, no se pudo actualizar';
    }catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
}else{
    $_SESSION['message']="Rellene el formulario";
}
header('Location: index.php');

?>