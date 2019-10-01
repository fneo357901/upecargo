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

<div class="modal fade" id="NewConductor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true" style="z-index: 999999999999999999999!important">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document">


  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nueva Unidad</h5>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="">Foto</label>
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
        <button type="button" class="btn btn-primary" onclick="make_a_conductor();">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tomar_envio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true" style="z-index: 999999999999999999999!important">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document" style="min-width:600px!important">


  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Asignar Unidad</h5>
    </div>
    <div class="modal-body">
        <div class="row">
        <div class="col-md-2">
            </div>
          <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Unidades</label>
                    <select class="form-control" name="unidades-transporte" id="unidades-transporte">
                    </select>
                  <div id="button_assign" name="button_assign"></div>
            </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    </div>
  </div>
</div>