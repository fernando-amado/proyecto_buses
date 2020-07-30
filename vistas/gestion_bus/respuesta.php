<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../../conexiones/header.php';
    
$placa= $_POST['placa'];
$marca = $_POST['marca'];
$color = $_POST['color'];
$modelo = $_POST['modelo'];
$empresa = $_POST['empresa'];
$id_conductor = $_POST['id_conductor'];
$insertar ="INSERT INTO bus ( placa,marca, color, modelo, empresa,  id_conductor) 
VALUES ('$placa', '$marca', '$color', '$modelo', '$empresa', '$id_conductor')"; 

$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";
}
else{
    echo"error";
}
 ?>
