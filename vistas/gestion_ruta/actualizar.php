
<?php 
include_once'../secciones/header.php';
include_once'index.php';
?>
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
     
     <div class="modal">
       <h4 id="exampleModalLabel"></h4>
       
         <span aria-hidden="true">&times;</span>
      
     </div>
     </div>
     <form class="form4" id="frminsert" method="post">
     <div class="title">
        <h1>Modificar ruta</h1>
     </div>
     <div class="ruta">
           <img src="../../img/1.png" alt="" position ="relative"  height="120px" width="740px">
           </div>
          <br><br><br><br><br><br><div class="one-half ">
              <input type="text" id="lugarpartida" name="lugarpartida" required=""><span class="barra"></span>
              <label>Lugar de Partida</label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="lugardestino" name="lugardestino"  required=""><span class="barra"></span>
              <label>lugar de Destino </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="horapartida" name="horapartida" required=""><span class="barra"></span>
              <label>Hora de Partida</label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="horallegada" name="horallegada"  required=""><span class="barra"></span>
              <label>Hora de llegada </label>
            </div> 
            <a class="reset5" href="index.php">Salir del Formulario</a> 
             <br>
             
              <input class="boton6" type="submit" value="Actualizar" >  
     </div>
         </form>
     
     </div>  
       
    
   </div>
 </div>
</div>