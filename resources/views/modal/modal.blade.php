<div class="modal fade" id="Modal_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><% edicion.nombre %></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form ng-submit="editarProducto(edicion.id,edicion.identificador)">
           {{ csrf_field() }}
           <input type="hidden" name="id" ng-model=" edicion.id ">
           <input type="hidden" name="usuario" ng-model="edicion.usuario">

            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" ng-model="edicion.nombre " required placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <textarea placeholder="Descripción" class="form-control" name="descripcion" required ng-model="edicion.descripcion"><% edicion.descripcion %></textarea> 
            </div>
            <div class="form-group">
              <label for="costo">Costo</label>
              <input type="text" class="form-control" name="costo" ng-model="edicion.costo" required>
            </div> 
            <div class="form-group">
              <label for="categoria">Categoria</label>
              <select class="form-control" name="categoria">
                <option disabled value=""> Seleccione una opcion </option>
                <option  value="1">Computador</option>
                <option  value="2">Mesa</option>
                <option  value="3">Electrodomestico</option>
              </select>
            </div> 
            <input type="submit" name="" value="Guardar" >
        </form>
      </div>
      <div class="modal-footer">
        <button id="cerrar" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>