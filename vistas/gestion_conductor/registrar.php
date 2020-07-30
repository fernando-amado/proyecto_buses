<?php include_once '../secciones/header.php';
include_once 'index.php';
?>
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
    
      <form class="form2" action="respuesta.php" method="post">

      <div class="title">
      <div class="titulo">

         <h1>Registro Conductor</h1>
      </div>
           <br>
           <br>
           <br>
           <br>
           <div class="one-half ">
              <input type="text" id="nombre" name="nombre" required=""><span class="barra"></span>
              <label>Nombre Conductor </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="apellidos" name="apellidos"  required=""><span class="barra"></span>
              <label>Apellidos </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="documento" name="documento"  required=""><span class="barra"></span>
              <label>Documento </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="telefono" name="telefono"  required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="correo" name="correo"  required=""><span class="barra"></span>
              <label>Correo </label>
            </div>
            <div class="one-half ">
              <input type="text" id="direccion" name="direccion"  required=""><span class="barra"></span>
              <label>Dirección </label>
            </div>
            <div class="one-half ">
              <input type="text" id="id_usuario" name="id_usuario"  required=""><span class="barra"></span>
              <label>Id Usuario </label>
            </div>
           
  
              <br>
              <a class="reset2" href="index.php">Salir del Formulario</a>
               <input class="boton3" type="submit" value="Guardar" > 
                     
      </div>
       
          </form>
    </div>      
      
      </div>  
        
     
    </div>
  </div>
</div>
