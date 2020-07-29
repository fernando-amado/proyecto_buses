<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>
  
<?php
   include_once "../../conexiones/header.php"; 
     
$lugarpartida= $_POST['lugarpartida'];
$lugardestino = $_POST['lugardestino'];
$horapartida = $_POST['horapartida'];
$horallegada = $_POST['horallegada'];
$insertar ="INSERT INTO ruta ( id_ruta, lugar_partida, lugar_destino, hora_partida, hora_llegada) 
VALUES ( NULL,'$lugarpartida', '$lugardestino', '$horapartida', '$horallegada')"; 

$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='registrar.php';</script></div>";
}
else{
    echo"error";
}
 ?>
