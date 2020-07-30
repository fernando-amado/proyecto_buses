<div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <div class="modal">
        <h4 id="exampleModalLabel"></h4>
        
          <span aria-hidden="true">&times;</span>
       
      </div>
      </div>
	  <?php
include_once "../../conexiones/header.php";





$var_consulta = 'SELECT * FROM conductor';
$var_resultado = $obj_conexion->query($var_consulta);
if ($var_resultado->num_rows > 0) { ?>
      <form class="form1" action="respuesta.php" method="post">

      <div class="title">
      <div class="titulo">

         <h1>Registro Conductor</h1>
      </div>
           <br><div class="one-half ">
              <input type="text" id="nombre" name="nombre" <?php echo $var_dato['nombre']; ?> required=""><span class="barra"></span>
              <label>Nombre del Conductor </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="apellido" name="apellido" <?php echo $var_dato['apellidos']; ?> required=""><span class="barra"></span>
              <label>Apellidos del Conductor </label>
            </div> 
            <div class="one-half ">
              <input type="text" id="documento" name="documento" <?php echo $var_dato['documento']; ?> required=""><span class="barra"></span>
              <label>Documento del Conductor </label>
            </div>  
            <div class="one-half last"> 

              <input type="text" id="telefono" name="telefono" <?php echo $var_dato['telefono']; ?> required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half "> 
              <input type="text" id="correo" name="correo" <?php echo $var_dato['correo']; ?> required=""><span class="barra"></span>
              <label>Correo del Conductor </label>
            </div> 
            <div class="one-half last">

            <div class="one-half ">

              <input type="text" id="direccion" name="direccion" <?php echo $var_dato['direccion']; ?> required=""><span class="barra"></span>
              <label >Direccion del Conductor</label>             
            </div> 
            <div class="one-half "> 
              <input type="text" id="usuario" name="usuario" <?php echo $var_dato['id_usuario']; ?> required=""><span class="barra"></span>
              <label>Nombre de usuario </label>
            </div> 
              <br>
                
      </div>
		  </form>
	<?php }?>
    </div>      
      
      </div>  
        
     
    </div>
  </div>
</div>
