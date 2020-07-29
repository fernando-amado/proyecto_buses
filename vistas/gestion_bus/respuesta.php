<script type="text/javascript">

var exito = new String("Datos guardados exitosamente");

</script>

<?php
    include_once'../conexiones/header.php';
    
$nombre= $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$telefono = $_POST['tel'];
$correo = $_POST['correo'];
$direccion = $_POST['dir'];
$usuario=$_POST['usuario'];
$insertar ="INSERT INTO conductor ( id_conductor,nombre,apellidos, documento,  telefono, correo, direccion, id_usuario) 
VALUES ( NULL,'$nombre', '$apellido', '$documento', '$telefono', '$correo','$direccion',  '$usuario')"; 

$resultado= mysqli_query($obj_conexion, $insertar);
 if($resultado){
    echo"<div class='alerta'><script>alert(exito);
    window.location='registrar.php';</script></div>";
}
else{
    echo"error";
}
 ?>
