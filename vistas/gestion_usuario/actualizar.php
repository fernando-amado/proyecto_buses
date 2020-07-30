<?php include_once "../secciones/header.php";
      include_once "index.php";
      $id= $_GET["id"];
$usuario = "SELECT * FROM usuario WHERE id_usuario='$id'";
?>


<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
    
      <form class="form1" action="respuesta-editar.php" method="post">

      <div class="title">
      <div class="titulo">

         <h1>Actualizar Usuario</h1>
      </div>
           <br>
           <br>
           <br>
           <?php $var_resultado = mysqli_query($obj_conexion,$usuario);
      while($var_dato=mysqli_fetch_assoc($var_resultado)) {
      ?> 
      <input type="hidden" class="form-control" value="<?php echo $var_dato["id_usuario"];?>"  name="id"  >
           <div class="one-half ">
              <input type="text" id="nombreU" name="nombreU" value="<?php echo $var_dato["nombre_usuario"];?>"  required=""><span class="barra"></span>
              <label>Nombre de usuario </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="contrasena" name="contrasena" value="<?php echo $var_dato["contrasena"];?>" required=""><span class="barra"></span>
              <label>Contraseña </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="rol" name="rol" value="<?php echo $var_dato["id_rol"];?>" required=""><span class="barra"></span>
              <label>Rol </label>
            <br>
            <?php } mysqli_free_result($var_resultado);?>
      <input class="boton2" type="submit" value="Guardar" >
      <input class="boton2" type="submit" value="Resetear" >
          </form>
    </div>      
      
      </div>  
        
     
    </div>
  </div>
</div>
