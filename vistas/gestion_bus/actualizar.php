<?php
include_once '../../conexiones/header.php';
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
     <?php $var_resultado = mysqli_query($obj_conexion,$bus);
      while($var_dato=mysqli_fetch_assoc($var_resultado)) {
      ?> 
     <form class="form3" id="frminsert" method="post">
     <div class="title">
        <h1>Modificar Bus</h1>
     </div>
     
           <br><div class="one-half">
             <input type="text" id="placa" name="placa" required=""><span class="barra"></span>
             <label>Placa del Bus </label>
           </div>  
            
           <div class="one-half last">
             <input type="text" id="color" name="color"  required=""><span class="barra"></span>
             <label>Color del Bus </label>
           </div>  
           
           <div class="one-half"> 
             <input type="text" id="empresa" name="empresa"  required=""><span class="barra"></span>
             <label>Empresa del Bus </label>
           </div> 
           <div class="one-half last"> 
             <input type="text" id="km" name="km"  required=""><span class="barra"></span>
             <label>Kilometraje </label>
           </div> 
           <?php } mysqli_free_result($var_resultado);?>
             <br>
              <input class="reset" type="reset" value="Restaurar" >
              <input class="actualizar" type="submit" value="Actualizar" >  
     </div>
         </form>
    
     </div>  
       
    
   </div>
 </div>
</div>