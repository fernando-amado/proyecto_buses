<?php 
include_once'conexion.php';
session_start();


if(isset($_SESSION['rol'])){
    
    switch($_SESSION['rol']){
        case 1:
            header('location: index.php');
        break;
        case 2:
            header('location: index.php');
        break;

        default:
    }
}
if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $db = new Conexion();
    $query = $db->connect()->prepare('SELECT*FROM usuario WHERE nombre_usuario = :usuario AND contrasena = :contrasena');
    $query->execute(['usuario' => $usuario, 'contrasena'=> $contrasena]);

    $row=$query->fetch(PDO::FETCH_NUM);
    if($row == true){
        $_SESSION['nombre_usuario'] =$usuario;
        $rol = $row[3];
        $_SESSION['rol'] = $rol;
        switch($_SESSION['rol']){
            case 1:
                header('location: index.php');
            break;
            case 2:
                header('location: index.php');
            break;
    
            default:
        }

    }else{
      echo  "<script>
         alert('Los datos son incorrecto verifique e intente nuevamente');
         window.location ='login.php';

        </script>";
    }
}
?>