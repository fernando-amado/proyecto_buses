<?php include_once "index.php"; ?>

<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
    
      <form class="form1" action="respuesta.php" method="post">

      <div class="title">
      <div class="titulo">

         <h1>Registro Usuario</h1>
      </div>
           <br>
           <br>
           <br>
           <div class="one-half ">
              <input type="text" id="nombreU" name="nombreU" required=""><span class="barra"></span>
              <label>Nombre de usuario </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="contrasena" name="contrasena"  required=""><span class="barra"></span>
              <label>Contraseña </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="rol" name="rol"  required=""><span class="barra"></span>
              <label>Rol </label>
            </div>  
              <br>
               <input class="reset" type="reset" value="Resetear" >
                 
      </div>
      <input class="boton2" type="submit" value="Guardar" >
      <input class="boton2" type="submit" value="Resetear" >
          </form>
    </div>      
      
      </div>  
        
     
    </div>
  </div>
</div>

