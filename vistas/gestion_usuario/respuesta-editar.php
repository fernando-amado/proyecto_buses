<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../../conexiones/header.php';
$id=$_POST["id"];
$nombre_usuario= $_POST['nombreU'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];

$actualizar = "UPDATE usuario SET nombre_usuario='$nombre_usuario', contrasena='$contrasena', id_rol='$rol' WHERE id_usuario='$id'";

$var_resultado= mysqli_query($obj_conexion, $actualizar);
 if($var_resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";

}
else{
    echo"error";
}




?>