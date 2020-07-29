<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../conexiones/header.php';
    
$nombreU= $_POST['nombreusuario'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];
$insertar ="INSERT INTO usuario ( id_usuario,nombre_usuario,contrasena, id_rol) 
VALUES ( '$nombreU', '$contrasena', '$rol')"; 
$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='index.php';</script></div>";
}
else{
    echo"error";
}
 ?>
