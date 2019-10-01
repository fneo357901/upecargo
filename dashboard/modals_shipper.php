<div class="modal fade" id="NewOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true" style="z-index: 999999999999999999999!important">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document" style="min-width:1200px!important">


<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Nueva Orden</h5>
  </div>
  <div class="modal-body">
    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
      <label for="">Presupuesto</label>
      <input type="text"
        class="form-control" id="new_order_presupuesto" aria-describedby="helpId" placeholder="">
      
    </div>
    <div class="form-group">
        <label for="">Direccion de Busqueda</label>
        <input type="text"
          class="form-control" id="new_order_busqueda" aria-describedby="helpId" placeholder="">
        
    </div>
    <div class="form-group">
        <label for="">Requisitos</label>
        <textarea class="form-control" id="new_order_requisitos" rows="3"></textarea>
        </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
        <label for="">Fecha de Busqueda</label>
        <input type="text"
          class="form-control" id="new_order_fecha_recogida" aria-describedby="helpId" placeholder="">
        
    </div>
    <div class="form-group">
        <label for="">Fecha de Entrega</label>
        <input type="text"
          class="form-control" id="new_order_fecha_entrega" aria-describedby="helpId" placeholder="">
        
    </div>
    <div class="form-group">
        <label for="">Carga</label>
        <textarea class="form-control" id="new_order_carga" rows="3"></textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tipo de Transporte</label>
            <input type="text"
              class="form-control" id="new_order_transport_type" aria-describedby="helpId" placeholder="">
            
        </div>
        <div class="form-group">
            <label for="">Direccion de Entrega</label>
            <input type="text"
              class="form-control" id="new_order_entrega" aria-describedby="helpId" placeholder="">
            
        </div>
    <div class="form-group">
    <label for="">Advertencias</label>
    <textarea class="form-control" id="new_order_advertencias" rows="3"></textarea>
    </div>
    </div>
  </div>
</div>
  <div class="modal-footer">
<button type="button" class="btn btn-primary" onclick="encargo_new_order();">Guardar Cambios</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="DisplayDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true" style="z-index: 999999999999999999999!important">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document" style="min-width:1200px!important">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
          <p>Presupuesto</p>
          <p class="presupuesto ex"></p>
          <p>Direccion de Busqueda</p>
          <p class="busqueda ex"></p>
          <p>Direccion de Entrega</p>
          <p class="entrega ex"></p>
          </div>
          <div class="col-md-4">
          <p>Fecha de Busqueda</p>
          <p class="fecha_recogida ex"></p>
          <p>Fecha de Entrega</p>
          <p class="fecha_entrega ex"></p>
          <p>Tipo de Transporte Requerido</p>
          <p class="transport_type ex"></p>
        </div>
        <div class="col-md-4">
          <p>Detalles de la Carga</p>
          <p class="carga ex"></p>
          <p>Requisitos del Conductor</p>
          <p class="requisitos ex"></p>
          <p>Advertencias</p>
          <p class="advertencias ex"></p>
        </div>
        </div>            
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="EditDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true" style="z-index: 999999999999999999999!important">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document" style="min-width:1200px!important">


  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle"></h5>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                <label for="">Tipo de Transporte</label>
                <input type="text"
                  class="form-control" id="edit_details_transport_type" aria-describedby="helpId" placeholder="">    
            </div>
            <div class="form-group">
              <label for="">Presupuesto</label>
              <input type="text"
                class="form-control" id="edit_details_presupuesto" aria-describedby="helpId" placeholder="">
              
            </div>
            <div class="form-group">
                <label for="">Requisitos</label>
                <textarea class="form-control" id="edit_details_requisitos" rows="3"></textarea>
                </div>
    
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="">Direccion de Entrega</label>
                <input type="text"
                  class="form-control" id="edit_details_entrega" aria-describedby="helpId" placeholder="">
                
            </div>
            <div class="form-group">
                <label for="">Fecha de Busqueda</label>
                <input type="text"
                  class="form-control" id="edit_details_fecha_recogida" aria-describedby="helpId" placeholder="">
                
            </div>
            <div class="form-group">
            <label for="">Carga</label>
            <textarea class="form-control" id="edit_details_carga" rows="3"></textarea>
            </div>
            <div class="form-group">
            <label for="">Estado de la Orden</label>
            <select class="form-control" id="edit_details_status">
            <option value="danger">Agregado</option>
            <option value="warning">Verificando</option>
            <option value="walking">En Camino</option>
            <option value="completed">Completado</option>
            </select>
            </div>
            </div>
            <div class="col-md-4">
    
            <div class="form-group">
                <label for="">Fecha de Entrega</label>
                <input type="text"
                  class="form-control" id="edit_details_fecha_entrega" aria-describedby="helpId" placeholder="">
                
            </div>
            <div class="form-group">
                <label for="">Direccion de Busqueda</label>
                <input type="text"
                  class="form-control" id="edit_details_busqueda" aria-describedby="helpId" placeholder="">
                
            </div>
            <div class="form-group">
            <label for="">Advertencias</label>
            <textarea class="form-control" id="edit_details_advertencias" rows="3"></textarea>
            </div>
          </div>
          </div>
    </div>
    <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="NewConductor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true" style="z-index: 999999999999999999999!important">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document">


  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Conductor</h5>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="">URL de Foto del Conductor</label>
        <input type="text"
        class="form-control" id="conductor_img_url" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
        <label for="">Nombre</label>
        <input type="text"
          class="form-control" id="conductor_nombre" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Telefono</label>
        <input type="text"
          class="form-control" id="conductor_telefono" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Correo</label>
        <input type="text"
          class="form-control" id="conductor_correo" aria-describedby="helpId" placeholder="">
      </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="make_a_conductor();">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>