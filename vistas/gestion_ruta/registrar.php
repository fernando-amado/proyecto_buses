<?php 
include_once'../secciones/header.php';
include_once'index.php';
?>

<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
    
      <form class="form4"  action="respuesta.php" method="post">
      <div class="title">
         <h1>Registro Ruta</h1>
      </div>
      <div class="ruta">
           <img src="../../img/1.png" alt="" position ="relative"  height="110px" width="740px">
           </div>
          <br><br><br><br><br><div class="one-half ">
              <input type="text" id="lugar_partida" name="lugar_partida" required=""><span class="barra"></span>
              <label>Lugar de Partida</label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="lugar_destino" name="lugar_destino"  required=""><span class="barra"></span>
              <label>lugar de Destino </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="id_bus" name="id_bus" required=""><span class="barra"></span>
              <label>Id bus</label>
            </div> 
            <div class="one-half ">
              <input type="text" id="hora_partida" name="hora_partida" required=""><span class="barra"></span>
              <label>Hora de Partida</label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="hora_llegada" name="hora_llegada"  required=""><span class="barra"></span>
              <label>Hora de llegada </label>
            </div>
            <a class="reset6" href="index.php">Salir del Formulario</a>
              <br>
               
               <input class="boton7" type="submit" value="Guardar" >  
      </div>
          </form>
     </div>
      </div>  
        
     
    </div>
  </div>
</div>