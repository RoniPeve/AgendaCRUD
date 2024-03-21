
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Agenda de contactos</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<link href="bootstrap/css/custom.css" rel="stylesheet">
<link href="bootstrap/css/estilos.css" rel="stylesheet" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">

  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Agenda de Contactos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Redes Sociales</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Facebook</a></li>
              <li><a class="dropdown-item" href="#">Youtube</a></li>
              <li><a class="dropdown-item" href="#">Github</a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

<div class="container">
  <h1 class="page-header text-center">Agenda de contacto</h1>
  <div class="fila">
      <div class="col-sm-12">
        <a href="#addnew" class="btn btn-primary" data-bs-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
      <?php 
        session_start();
        if(isset($_SESSION['message'])){
          ?>
          <div class="alert alert-dismissible alert-success d-flex justify-content-between align-items-center" style="margin-top: 10px">
              <?php echo $_SESSION['message']; ?>
              <button class="close" data-bs-dismiss="alert" style="border: none; outline: none; background-color: transparent;font-size: 1rem;">&times;</button>
          </div>

          <?php 
            unset($_SESSION['message']);
        }
      ?>
      <table class="table table-bordered table-striped">
        <thead>
          <th>Id</th>
          <th>Nombre de contacto</th>
          <th>Celular</th>
          <th>Correo</th>
          <th>Direccion</th>
          <th>Acciones</th>
        </thead>
        <tbody>
          <?php
           include_once('conexion.php');
           $database = new ConectarDB();
           $db = $database->open();
           try{
            $sql ='Select * from personas';
            foreach($db ->query($sql) as $fila){
              ?>
              <tr>
                <td> <?php echo $fila['idPersona'] ?></td>
                <td> <?php echo $fila['Nombre'] ?></td>
                <td> <?php echo $fila['Telefono'] ?></td>
                <td> <?php echo $fila['Correo'] ?></td>
                <td> <?php echo $fila['Direccion'] ?></td>
                <td>
                  <a href="#edit_<?php echo $fila["idPersona"]; ?>" class="btn btn-success btn sm" data-bs-toggle="modal" ><span class="fa fa-edit"></span>Editar</a>
                  <a href="#delete_<?php echo $fila["idPersona"]; ?>" class="btn btn-danger btn sm" data-bs-toggle="modal" ><span class="fa fa-trash"></span>Eliminar</a>
                  
                </td>
                <?php 
                  include('EditarEliminar.php');
                ?>
              </tr>
              <?php
            }
           }catch(PDOException $e){
              echo 'Hay un error' .$e->getMessage();
           }
           $database->close();
          ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include('addModal.php'); ?>
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
