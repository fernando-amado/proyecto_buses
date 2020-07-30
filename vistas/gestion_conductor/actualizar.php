
<?php 

include_once '../secciones/header.php';
include_once 'index.php';
$id= $_GET["id"];
$conductor = "SELECT * FROM conductor WHERE id_conductor='$id'";

?>

<?php include_once '../secciones/header.php';
include_once 'index.php';
?>
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
    
      <form class="form2" action="respuesta-editar.php" method="post">

      <div class="title">
      <div class="titulo">

         <h1>Actualizar Conductor</h1>
      </div>
           <br>
           <br>
           <br>
           <br>
           <?php $var_resultado = mysqli_query($obj_conexion,$conductor);
      while($var_dato=mysqli_fetch_assoc($var_resultado)) {
      ?> 
      <input type="hidden" class="form-control" value="<?php echo $var_dato["id_conductor"];?>"  name="id"  >
           <div class="one-half ">
              <input type="text" id="nombre" name="nombre" value="<?php echo $var_dato["nombre"];?>" required=""><span class="barra"></span>
              <label>Nombre Conductor </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="apellidos" name="apellidos" value="<?php echo $var_dato["apellidos"];?>"  required=""><span class="barra"></span>
              <label>Apellidos </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="documento" name="documento" value="<?php echo $var_dato["documento"];?>" required=""><span class="barra"></span>
              <label>Documento </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="telefono" name="telefono"  value="<?php echo $var_dato["telefono"];?>" required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="correo" name="correo" value="<?php echo $var_dato["correo"];?>" required=""><span class="barra"></span>
              <label>Correo </label>
            </div>
            <div class="one-half ">
              <input type="text" id="direccion" name="direccion" value="<?php echo $var_dato["direccion"];?>" required=""><span class="barra"></span>
              <label>Dirección </label>
            </div>
            <div class="one-half ">
              <input type="text" id="id_usuario" name="id_usuario" value="<?php echo $var_dato["id_usuario"];?>" required=""><span class="barra"></span>
              <label>Id Usuario </label>
            </div>
             
            <a class="reset2" href="index.php">Salir del Formulario</a> 
              <br>
              <?php } mysqli_free_result($var_resultado);?>
               <input class="boton3" type="submit" value="Guardar" > 
                     
      </div>
       
          </form>
    </div>      
      
      </div>  
        
     
    </div>
  </div>
</div>
