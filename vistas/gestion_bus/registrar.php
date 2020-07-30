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
      <form class="form2" id="frminsert" action="respuesta.php" method="post">
      <div class="title">
         <h1>Registro Bus</h1>
      </div>
      
            <br><div class="one-half">
              <input type="text" id="placa" name="placa" required=""><span class="barra"></span>
              <label>Placa del Bus: </label>
            </div>  
            <div class="one-half last">
              <input type="text" id="marca" name="marca"  required=""><span class="barra"></span>
              <label>Marca del Bus: </label>
            </div> 
            <div class="one-half">
              <input type="text" id="color" name="color"  required=""><span class="barra"></span>
              <label>Color del Bus: </label>
            </div>  
            <div class="one-half last"> 
              <input type="text" id="modelo" name="modelo"  required=""><span class="barra"></span>
              <label>Modelo del Bus: </label>
            </div>  
            <div class="one-half"> 
              <input type="text" id="empresa" name="empresa"  required=""><span class="barra"></span>
              <label>Empresa del Bus: </label>
            </div> 
            <div class="one-half last"> 
              <input type="text" id="id_conductor" name="id_conductor"  required=""><span class="barra"></span>
              <label>Id Conductor </label>
            </div> 
              <br>
               <input class="reset" type="reset" value="Resetear" >
               <input class="boton" type="submit" value="Guardar" >  
      </div>
          </form>
      
      </div>  
        
     
    </div>
  </div>
</div>