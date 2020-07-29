<?php
include_once '../../conexiones/header.php';
$id= $_GET["id"];
$aprendiz = "SELECT * FROM usuario WHERE id_usuario='$id'";

?>

<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
     
     <div class="modal">
       <h4 id="exampleModalLabel"></h4>
       
         <span aria-hidden="true">&times;</span>
      
     </div>
     </div>
     <form class="form2" id="frminsert" method="post">
     <div class="title">
        <h1>Modificar Conductor</h1>
     </div>
     <?php $var_resultado = mysqli_query($obj_conexion,$a);
      while($var_dato=mysqli_fetch_assoc($var_resultado)) {
      ?> 
           <br>
           <div class="one-half ">
              <input type="text"  <?php echo $var_dato["nombre"];?> name="apellido" required=""><span class="barra"></span>
              <label>Nombre del Conductor </label>
            </div>  
            <div class="one-half ">
              <input type="text"  <?php echo $var_dato["apellido"];?> name="apellido" required=""><span class="barra"></span>
              <label>Apellidos </label>
            </div>
            <div class="one-half ">
              <input type="text"  <?php echo $var_dato["documento"];?> name="documento" required=""><span class="barra"></span>
              <label>Documento </label>
            </div>        
            <div class="one-half last"> 
              <input type="text" <?php echo $var_dato["telefono"];?> name="telefono"  required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half "> 
              <input type="text" <?php echo $var_dato["correo"];?> name="correo"  required=""><span class="barra"></span>
              <label>Correo  </label>
            </div> 
            <div class="one-half last">
              <input type="text" <?php echo $var_dato["direccion"];?> name="direccion"  required=""><span class="barra"></span>
              <label >Direccion </label>             
            </div> 
            <div class="one-half "> 
              <input type="text"  <?php echo $var_dato["usuario"];?> name="usuario"  required=""><span class="barra"></span>
              <label>Nombre de usuario </label>
            </div> 
            <?php } mysqli_free_result($var_resultado);?>
             <br>
              <input class="reset" type="reset" value="Resetear" >
              <input class="boton" type="submit" value="Actualizar" >  
     </div>
         </form>
     
     </div>  
       
    
   </div>
 </div>
</div>