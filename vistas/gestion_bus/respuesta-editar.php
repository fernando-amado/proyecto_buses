<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../../conexiones/header.php';
$id=$_POST["id"];
$placa= $_POST['placa'];
$color = $_POST['color'];
$empresa = $_POST['empresa'];
$id_conductor = $_POST['id_conductor'];

$actualizar = "UPDATE bus SET placa='$placa', color='$color', empresa='$empresa', id_conductor='$id_conductor' WHERE id_bus='$id'";

$var_resultado= mysqli_query($obj_conexion, $actualizar);
 if($var_resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";

}
else{
    echo"error";
}




?>