<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Placa del Bus: </label>
              <input type="text" id="placa" name="placa" class="form-control form-control-sm" required="">
              <label>Marca del Bus: </label>
              <input type="text" id="marca" name="marca" class="form-control form-control-sm" required="">
              <label>Color del Bus: </label>
              <input type="text" id="color" name="color" class="form-control form-control-sm" required="">
              <label>Modelo del Bus: </label>
              <input type="text" id="modelo" name="modelo" class="form-control form-control-sm" required="">
              <label>Empresa del Bus: </label>
              <input type="text" id="empresa" name="empresa" class="form-control form-control-sm" required="">
             
              <br>
               <input type="reset" value="Resetear" class="btn btn-secondary">
               <input type="submit" value="Guardar" class="btn btn-dark">  
          </form>
      </div>
      
        
     
    </div>
  </div>
</div>