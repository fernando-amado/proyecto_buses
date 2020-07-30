<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../../conexiones/header.php';
$id=$_POST["id"];
$nombre= $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$id_usuario=$_POST['id_usuario'];

$actualizar = "UPDATE conductor SET nombre='$nombre', apellidos='$apellidos', documento='$documento', 
telefono='$telefono',correo='$correo', direccion='$direccion',id_usuario='$id_usuario' WHERE id_conductor='$id'";

$var_resultado= mysqli_query($obj_conexion, $actualizar);
 if($var_resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";

}
else{
    echo"error";
}




?>