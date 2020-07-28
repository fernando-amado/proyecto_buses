<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
     
     <div class="modal">
       <h4 id="exampleModalLabel"></h4>
       
         <span aria-hidden="true">&times;</span>
      
     </div>
     </div>
     <form id="frminsert" onsubmit="return insertarDatos()" method="post">
     <div class="titulo">
        <h1>Modificar Bus</h1>
     </div>
     
           <br><div class="one-half">
             <input type="text" id="placa" name="placa" required=""><span class="barra"></span>
             <label>Placa del Bus </label>
           </div>  
           <div class="one-half last">
             <input type="text" id="marca" name="marca"  required=""><span class="barra"></span>
             <label>Marca del Bus </label>
           </div> 
           <div class="one-half">
             <input type="text" id="color" name="color"  required=""><span class="barra"></span>
             <label>Color del Bus </label>
           </div>  
           <div class="one-half last"> 
             <input type="text" id="modelo" name="modelo"  required=""><span class="barra"></span>
             <label>Modelo del Bus: </label>
           </div>  
           <div class="one-half"> 
             <input type="text" id="empresa" name="empresa"  required=""><span class="barra"></span>
             <label>Empresa del Bus </label>
           </div> 
           <div class="one-half last"> 
             <input type="text" id="km" name="km"  required=""><span class="barra"></span>
             <label>Kilometraje </label>
           </div> 
             <br>
              <input class="reset" type="reset" value="Resetear" >
              <input class="boton" type="submit" value="Actualizar" >  
     </div>
         </form>
     
     </div>  
       
    
   </div>
 </div>
</div>