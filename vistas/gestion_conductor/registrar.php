<head>
    <title>Nuevo Conductor</title>
</head>
<?php
include_once '../conexiones/header.php';

?>
<h1 class="page-header">NUEVO CONDUCTOR</h1>
<div class="well well-sm text-right">
    <a class="btn btn-light" href="aprendices.php">Regresar</a>

</div>
<form  action="respuesta.php"  method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control"   name="nombre" placeholder="Ingrese el nombre del autor"  required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="apellido">Apellidos</label>
      <input type="password" class="form-control"  name="apellido" placeholder="Enter password" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="documento">Documento</label>
      <input type="password" class="form-control"  name="documento" placeholder="Enter password" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="tel">Telefono:</label>
      <input type="text" class="form-control"   name="tel" placeholder="Ingrese el nombre del autor" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="correo" >Correo:</label>
      <input type="text" class="form-control"   name="correo" placeholder="Ingrese el nombre del autor" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="dir" >Direccion:</label>
      <input type="text" class="form-control"   name="dir" placeholder="Ingrese el nombre del autor" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <div class="form-group">
      <label for="usuario" >usuario:</label>
      <input type="text" class="form-control"   name="usuario" placeholder="Ingrese el nombre del autor" required >
      <div class="invalid-feedback">Complete el campo.</div>
    </div>
    <hr>
    <div class=" text-right">
    <button type="submit" class="btn btn2 ">Guardar</button>
    </div>

   

  </form>
  
  <?php include_once'../conexiones/footer.php';?> 


