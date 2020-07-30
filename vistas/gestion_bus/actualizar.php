<?php
include_once '../secciones/header.php';
include_once 'index.php';
$id= $_GET["id"];
$bus = "SELECT * FROM bus WHERE id_bus='$id'";

?>
<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
     
     <div class="modal">
       <h4 id="exampleModalLabel"></h4>
       
         <span aria-hidden="true">&times;</span>
      
     </div>
     </div>
    
     <form class="form5" action="respuesta-editar.php"  method="post">
     <div class="title">
        <h1>Modificar Bus</h1>
     </div>
     <?php $var_resultado = mysqli_query($obj_conexion,$bus);
      while($var_dato=mysqli_fetch_assoc($var_resultado)) {
      ?> 
           <input type="hidden" class="form-control" value="<?php echo $var_dato["id_bus"];?>"  name="id"  >
           <br><div class="one-half">
             <input type="text" id="placa" name="placa" value="<?php echo $var_dato["placa"];?>" required=""><span class="barra"></span>
             <label>Placa del Bus </label>
           </div>  
            
           <div class="one-half last">
             <input type="text" id="color" name="color"  value="<?php echo $var_dato["color"];?>" required=""><span class="barra"></span>
             <label>Color del Bus </label>
           </div>  
           
           <div class="one-half"> 
             <input type="text" id="empresa" name="empresa"  value="<?php echo $var_dato["empresa"];?>" required=""><span class="barra"></span>
             <label>Empresa del Bus </label>
           </div> 
           <div class="one-half last"> 
             <input type="text" id="id_conductor" name="id_conductor"  value="<?php echo $var_dato["id_conductor"];?>" required=""><span class="barra"></span>
             <label>Id conductor </label>
           </div> 
           <a class="reset3" href="index.php">Salir del Formulario</a> 
           <?php } mysqli_free_result($var_resultado);?>
             <br>
              
              <input class="boton4" type="submit" value="Actualizar" >  
     </div>
         </form>
    
     </div>  
       
    
   </div>
 </div>
</div>