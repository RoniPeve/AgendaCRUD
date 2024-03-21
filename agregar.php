<?php
session_start();
include_once('conexion.php');

if(isset($_POST['add'])){
    $database = new ConectarDB();
    $db = $database ->open();
    try{
        $smtl = $db->prepare("Insert into personas (Nombre, Telefono, Correo, Direccion) values (:nombrecontacto,
        :celular, :email, :direccion)");
        $_SESSION['message']=($smtl->execute(array(':nombrecontacto'=>$_POST['nombrecontacto'], ':celular'=>
        $_POST['celular'], ':email'=>$_POST['email'], ':direccion'=>$_POST['direccion']))) ? 'Contacto agregado correctamente' :
        'Algo salio mal, no se puede agregar contacto';
    }catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
}else{
    $_SESSION['message']="rellene el formulario";
}
header('Location: index.php');

?>