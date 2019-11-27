<?php include('../../config.php'); ?>
<div class="modal fade" id="InfoEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true" style="z-index: 999999999999999999999!important">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:1200px!important">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Acerca de la Empresa</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
          <p>Empresa</p>
          <p class="empresa vacio"></p>
          <p>Telefono</p>
          <p class="telefono vacio"></p>
          <p>Correo</p>
          <p class="correo vacio"></p>
          </div>
          <div class="col-md-3">
          <p>Pais de Registro</p>
          <p class="pais_registro vacio"></p>
          <p>Codigo Transportista</p>
          <p class="codigo_transportista vacio"></p>
          <p>Representante Legal</p>
          <p class="representante_legal vacio"></p>
          </div>
          <div class="col-md-3">
          <p>ID Representante Legal</p>
          <p class="id_representante_legal vacio"></p>
          <p>ID Transportista</p>
          <p class="id_transportista vacio"></p>
          <p>Direccion Fiscal</p>
          <p class="direccion_fiscal vacio"></p>
        </div>
        <div class="col-md-3">
        <p>Paises de Destino</p>
          <p class="paises_destino vacio"></p>
          <p>Tarjeta Federacion</p>
          <p class="tarjeta_federacion vacio"></p>
        </div>
        </div>            
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="DisplayDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true" style="z-index: 999999999999!important">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:1200px!important">


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
aria-hidden="true" style="z-index: 999999999999999999999!important;">

<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
<div class="modal-dialog modal-dialog-centered" role="document" style="max-width:1200px!important;">


  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Responsable</h5>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="">Foto de Perfil</label>
        <input type="file" class="form-control-file" name="conductor_img" id="conductor_img" placeholder="" aria-describedby="fileHelpId">
        <small id="fileHelpId" class="form-text text-muted">Help text</small>
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
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label for="">Correo</label>
        <input type="text"
          class="form-control" id="conductor_correo" aria-describedby="helpId" placeholder="">
      </div>
<div class="form-group">
  <label for="">Tipo de Unidad</label>
  <select class="form-control" name="tipo_unidad" id="tipo_unidad">
  <?php 
    $unidades_disponibles = explode(",", $tipo_unidad);
    foreach($unidades_disponibles as $unidad_disponible) {
        $resultado = "<option>" . $unidad_disponible . "</option>\n";
        echo $resultado;
    }
  ?>
  </select>
</div>
      <div class="form-group">
        <label for="">Ubicacion</label>
        <input type="text"
          class="form-control" name="clientAddress" id="clientAddress" aria-describedby="helpId" placeholder="">
      </div>
      
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="">Contraseña de la Cuenta</label>
        <input type="text"
          class="form-control" id="conductor_password" aria-describedby="helpId" placeholder="">
      </div>

      </div>
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
<div class="modal-dialog modal-dialog-centered" role="document" style="max-width:600px!important">


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