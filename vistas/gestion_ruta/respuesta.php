<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>
  
<?php
   include_once "../../conexiones/header.php"; 
     
$lugarpartida= $_POST['lugar_partida'];
$lugardestino = $_POST['lugar_destino'];
$horapartida = $_POST['hora_partida'];
$horallegada = $_POST['hora_llegada'];
$insertar ="INSERT INTO ruta (  lugar_partida, lugar_destino, hora_partida, hora_llegada) 
VALUES ( '$lugarpartida', '$lugardestino', '$horapartida', '$horallegada')"; 

$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='registrar.php';</script></div>";
}
else{
    echo"error";
}
 ?>
