<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../../conexiones/header.php';
    
$nombre= $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$id_usuario=$_POST['id_usuario'];
$insertar ="INSERT INTO conductor ( nombre,apellidos,documento,telefono,correo,direccion,id_usuario ) 
VALUES ( '$nombre', '$apellidos','$documento', '$telefono','$correo','$direccion','$id_usuario')"; 
$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";
}
else{
    echo"error";
}
 ?> 



