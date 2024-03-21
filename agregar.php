<?php

include_once('conexion.php');

if(isset($_POST['add'])){
    $database = new ConectarDB();
    $db = $database ->open();
    try{

    }catch(PDOException $e){

    }
}

?>