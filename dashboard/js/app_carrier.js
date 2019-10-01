var usuario = new Array();

function verify_session(){             
$.ajax({
type: "GET",
url: "/backend/session_start.php",
data: { 
command: 'verify',
_: new Date().getTime(),
}, 
cache: false,

success: function(sucessed){
if(sucessed !== "error") {
  var data = JSON.parse(sucessed);
  usuario['id_user'] = data.id.valueOf();
  usuario['firstname'] = data.nombre.valueOf();
  usuario['lastname'] = data.apellido.valueOf();
  usuario['phone'] = data.telefono.valueOf();
  usuario['email'] = data.email.valueOf();
  usuario['type'] = data.tipo.valueOf();
}
if(sucessed == "error") {
  window.location.href = "/login";
}
}
}); 
}

setInterval(verify_session,1000);

function destroy_session(){             
$.ajax({
type: "GET",
url: "/backend/session_start.php",
data: { 
command: 'destroy',
_: new Date().getTime(),
}, 
cache: false,
}); 
}

  function addFicha(nombre,id,status){
  var dataStructure = new Array();
  dataStructure['id'] = id;
  dataStructure['Op'] = nombre;
  dataStructure['status'] = status;
  
  var structure_warning = '<div id="task_'+dataStructure.id+'" class="col-md-4 px-1 py-1 text-center"><div class="card-header" style="background-color:#FFF!important">'+dataStructure.Op+'</br><a onclick="encargo_detalle('+dataStructure.id+')" class="btn btn-blue btn-sm">Ver Detalles</a><a onclick="tomar_envio('+dataStructure.id+')" class="btn btn-blue btn-sm">Tomar Envio</a></div></div>';
  if(dataStructure.status=='warning') {
    $('#verify-content').append(structure_warning);
  }
  
  }

  function board(){
    $.getJSON('/backend/carrier-board.php', {stats: 'warning', _: new Date().getTime()}, function(data) {
    var json = data;
    if(old_json!==json) {
    $(".fichaje").empty();
    for(var i = 0; i < json.length; i++) {
    var obj = json[i];
    addFicha(" Presupuesto: "+obj.presupuesto+"<br/>Carga: "+obj.carga,obj.id,obj.stats);
    }
  }
    var old_json = json;
  });


  $("#DisplayDetails").on('hide.bs.modal', function(){
  $('.ex').empty();
  $('#DisplayDetails > div > div > div.modal-header > h5.modal-title').empty();    
  $('#DisplayDetails > div > div > div.modal-footer').empty();
});

$("#EditDetails").on('hide.bs.modal', function(){
  $('#EditDetails > div > div > div.modal-body > input').empty();
  $('#EditDetails > div > div > div.modal-footer').empty();
  $('#EditDetails > div > div > div.modal-header > h5.modal-title').empty();
});
$("#NuevoConductor").on('hide.bs.modal', function(){
  $('#NuevoConductor > div > div > div.modal-body > input').empty();
});

}

setInterval(board, 1000);

function CompletedTable(id,carga,entrega,fecha_entrega){
  var dataCompleted = new Array();
  dataCompleted['id'] = id;
  dataCompleted['carga'] = carga;
  dataCompleted['entrega'] = entrega;
  dataCompleted['stats'] = ' En Curso';
  dataCompleted['fecha_entrega'] = fecha_entrega;
  var public_complete = '<tr onclick="encargo_detalle('+dataCompleted.id+')"><td><i class="fas fa-user    "></i> '+dataCompleted.carga+'</td><td><i class="fas fa-map-marked-alt    "></i>'+dataCompleted.entrega+'</td><td><i class="fas fa-check-circle    "></i>'+dataCompleted.stats+'</td><td><i class="fas fa-calendar-alt    "></i>'+dataCompleted.fecha_entrega+'</td></tr>';
  $('#CompletedTable').append(public_complete);
}
function runTable(){
$.getJSON('/backend/ordenes_en_curso.php', {id: usuario.id_user.valueOf(), _: new Date().getTime()}, function(data) {
    var json = data;
    if(old_json!==json) {
    $("#CompletedTable").empty();
    for(var i = 0; i < json.length; i++) {
    var obj = json[i];
    CompletedTable(obj.id," "+obj.carga," "+obj.entrega," "+obj.fecha_entrega);
    }
  }
    var old_json = json;
  });
}

setInterval(runTable, 1000);

function HistoryTable(id,carga,entrega,fecha_entrega,stats){
  var dataCompleted = new Array();
  dataCompleted['id'] = id;
  dataCompleted['carga'] = carga;
  dataCompleted['entrega'] = entrega;
    if(stats=='danger'){
      dataCompleted['stats'] = ' Agregado';
    }
    if(stats=='warning'){
      dataCompleted['stats'] = ' Verificando';
    }
    if(stats=='walking'){
      dataCompleted['stats'] = ' En Camino';
    }
    if(stats=='completed'){
      dataCompleted['stats'] = ' Completado';
    }
  dataCompleted['fecha_entrega'] = fecha_entrega;
  var public_complete = '<tr onclick="encargo_detalle('+dataCompleted.id+')"><td><i class="fas fa-user    "></i> '+dataCompleted.carga+'</td><td><i class="fas fa-map-marked-alt    "></i>'+dataCompleted.entrega+'</td><td><i class="fas fa-check-circle    "></i>'+dataCompleted.stats+'</td><td><i class="fas fa-calendar-alt    "></i>'+dataCompleted.fecha_entrega+'</td></tr>';
  $('#HistoryTable').append(public_complete);
}
function runHistoryTable(){
$.getJSON('/backend/carrier-history-board.php', {id: usuario.id_user.valueOf(), _: new Date().getTime()}, function(data) {
    var json = data;
    if(old_json!==json) {
    $("#HistoryTable").empty();
    for(var i = 0; i < json.length; i++) {
    var obj = json[i];
    HistoryTable(obj.id," "+obj.carga," "+obj.entrega," "+obj.fecha_entrega,obj.stats);
    }
  }
    var old_json = json;
  });
}

setInterval(runHistoryTable, 1000);


function NuevoConductor(){
$("#NewConductor").modal('show');  
}

function make_a_conductor(){
var nw_conductor = new Array();
nw_conductor["img"] = $('#conductor_img_url').val();
nw_conductor["user_id"] = usuario['id_user'];
nw_conductor["nombre"] = $('#conductor_nombre').val();
nw_conductor["telefono"] = $('#conductor_telefono').val();
nw_conductor["correo"] = $('#conductor_correo').val();
nw_conductor["estado"] = 'disponible';

$.ajax({
    type: "POST",
    url: "/backend/nuevo_conductor.php",
    data: { 
    img: nw_conductor.img.valueOf(),
    user_id: nw_conductor.user_id.valueOf(),
    nombre: nw_conductor.nombre.valueOf(),
    telefono: nw_conductor.telefono.valueOf(),
    correo: nw_conductor.correo.valueOf(),
    estado: nw_conductor.estado.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("Se a registrado un Nuevo Conductor");
            $('#NewConductor').modal('hide');
            runConductors();
        }
        if(sucessed == "error") {
            alert("Ocurrio al registrar el Conductor. Intente de Nuevo.");
        }
    }
});  
}

function ConductorCard(id,nombre,telefono,correo,img,estado){
  var CardConductor = new Array();
  CardConductor['id'] = id;
  CardConductor['nombre'] = nombre;
  CardConductor['telefono'] = telefono;
  CardConductor['correo'] = correo;
  CardConductor['img'] = img;
    if(estado=='disponible'){
      CardConductor['estado'] = '<tr id="ConductorEstadoDisplay_'+CardConductor.id+'"><th onclick="ConductorEditEstado(\''+estado+'\',\''+CardConductor.id+'\');" class="py-2" style="color:rgb(0,255,0);"><i class="fas fa-check"></i> Disponible</th></tr>';
    }
    if(estado=='en_camino'){
      CardConductor['estado'] = '<tr id="ConductorEstadoDisplay_'+CardConductor.id+'"><th onclick="ConductorEditEstado(\''+estado+'\',\''+CardConductor.id+'\');" class="py-2"><i class="fas fa-truck"></i> En Camino</th></tr>';
    }
    if(estado=='suspendido'){
      CardConductor['estado'] = '<tr id="ConductorEstadoDisplay_'+CardConductor.id+'"><th onclick="ConductorEditEstado(\''+estado+'\',\''+CardConductor.id+'\');" class="py-2" style="color: red;"><i class="fas fa-backspace"></i> Suspendido</th></tr>';
    }
  var print_card = '<div class="col-md-6 mb-4 conductor '+estado+' Conductor_'+CardConductor.id+'"><div class="card"><button type="button" onclick="DettachConductor(\''+CardConductor.id+'\');" class="close" style="width:100%!important;padding-right:10px!important;padding-top:5px!important;position: absolute!important;"><span aria-hidden="true" class="float-right">×</span></button><div class="card-body"><div class="avatar white col-md-4 py-0 float-left pt-2"><img src="'+CardConductor.img+'" class="rounded-circle w-100" alt="woman avatar"></div><table class="table table-hover col-md-8 float-right mb-0"><tbody><tr><th class="py-2"><i class="fas fa-user    "></i> '+CardConductor.nombre+'</th></tr><tr><th class="py-2"><i class="fas fa-phone    "></i> '+CardConductor.telefono+'</th></tr><tr><th class="py-2"><i class="fas fa-envelope    "></i> '+CardConductor.correo+'</th></tr>'+CardConductor.estado+'</tbody></table></div></div></div>';;
  $('#Conductors').append(print_card);
}
function runConductors(){
$.getJSON('/backend/display_conductor.php', {id: usuario.id_user.valueOf(), _: new Date().getTime()}, function(data) {
    var json = data;
    if(old_json!==json) {
      $("#Conductors").empty();
      for(var i = 0; i < json.length; i++) {
      var obj = json[i];
      ConductorCard(obj.id,obj.nombre,obj.telefono,obj.correo,obj.img,obj.estado);
    }
  }
    var old_json = json;
  });
}

function ConductorEditEstado(estado,id){
var print_state_change = '<select class="form-control" id="ConductorEditStateBox" onchange="ChangeState(\''+id+'\');"><option value="disponible">Disponible</option><option value="en_camino">En Camino</option><option value="suspendido">Suspendido</option></select>';
$('#ConductorEstadoDisplay_'+id).empty();
$('#ConductorEstadoDisplay_'+id).append(print_state_change);
$('#ConductorEditStateBox').val(estado);
}


function ChangeState(id){
var state = new Array();
state["id"] = id;
state["estado"] = $('#ConductorEditStateBox').val();

$.ajax({
    type: "POST",
    url: "/backend/actualizacion_estado.php",
    data: { 
    id: state.id.valueOf(),
    estado: state.estado.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
          $('#ConductorEstadoDisplay_'+id).empty();
          
          if(state.estado=='disponible'){
          print_state = '<tr id="ConductorEstadoDisplay_'+state.id+'"><th onclick="ConductorEditEstado(\''+state.estado+'\',\''+state.id+'\');" class="py-2" style="color:rgb(0,255,0);"><i class="fas fa-check"></i> Disponible</th></tr>';
          $('#ConductorEstadoDisplay_'+id).append(print_state);
          }
          if(state.estado=='en_camino'){
          print_state = '<tr id="ConductorEstadoDisplay_'+state.id+'"><th onclick="ConductorEditEstado(\''+state.estado+'\',\''+state.id+'\');" class="py-2"><i class="fas fa-truck"></i> En Camino</th></tr>';
          $('#ConductorEstadoDisplay_'+id).append(print_state);
          }
          if(state.estado=='suspendido'){
          print_state = '<tr id="ConductorEstadoDisplay_'+state.id+'"><th onclick="ConductorEditEstado(\''+state.estado+'\',\''+state.id+'\');" class="py-2" style="color: red;"><i class="fas fa-backspace"></i> Suspendido</th></tr>';
          $('#ConductorEstadoDisplay_'+id).append(print_state);
          }
          runConductors();
        }
        if(sucessed !== "success") {
            alert(sucessed);
        }
    }
});  
}



function DettachConductor(id){
var DettachConductor = new Array();
DettachConductor["id"] = id;

$.ajax({
    type: "POST",
    url: "/backend/remove_conductor.php",
    data: { 
    id: DettachConductor.id.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
          $('.Conductor_'+id).remove();
          runConductors();
        }
        if(sucessed == "error") {
            alert("Ocurrio al remover al Conductor. Intente de Nuevo.");
        }
    }
});  
}


function boardDettach(id){
var DettachBoard = new Array();
DettachBoard["id"] = id;

$.ajax({
    type: "POST",
    url: "/backend/remove_board.php",
    data: { 
    id: DettachBoard.id.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
          $('#task_'+id).remove();
          board();
        }
        if(sucessed !== "success") {
            alert(sucessed);
        }
    }
});  
}


//setInterval(runConductors, 1000);

function getUnidades() {
  $.getJSON('/backend/get_unidades.php', {id: usuario.id_user.valueOf(), _: new Date().getTime()}, function(data) {
    var json = data;
    $('#unidades-transporte').empty();
      for(var i = 0; i < json.length; i++) {
      var obj = json[i];
      var Options = "<option value='"+obj.id+"'>"+obj.nombre+"</option>";  
      $('#unidades-transporte').append(Options);
    }
  });
}

function tomando_envio(id){
  var GenerandoEnvio = new Array();
  GenerandoEnvio["id"] = id;
  GenerandoEnvio["id_empresa_transporte"] = usuario['id_user'];
  GenerandoEnvio["stats"] = 'walking';
  GenerandoEnvio["id_unidad"] = $('#unidades-transporte').val();
  
  $.ajax({
      type: "POST",
      url: "/backend/tomar_envio.php",
      data: {
      id: GenerandoEnvio.id.valueOf(),
      id_empresa_transporte: GenerandoEnvio.id_empresa_transporte.valueOf(),
      stats: GenerandoEnvio.stats.valueOf(),
      id_unidad: GenerandoEnvio.id_unidad.valueOf(),
     }, 
      cache: false,
  
      success: function(sucessed){
          if(sucessed == "success") {
              alert("La orden a sido tomada y enviada a la unidad correspondiente");
              $('#tomar_envio').modal('hide');
          }
          if(sucessed !== "success") {
              alert(sucessed);
          }
      }
  });  
}

function tomar_envio(id){
  $("#button_assign").empty();
  getUnidades();
  var button_assign = '<a class="btn btn-primary mx-0 w-100" href="javascript:tomando_envio('+id+')" role="button">Asignar</a>';
  $("#button_assign").append(button_assign);
  $('#tomar_envio').modal('show');
}


function encargo_detalle(id){
  var close_button = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>';
  $('#DisplayDetails > div > div > div.modal-footer').append(close_button);
    $.getJSON('/backend/detail.php', {id: id, _: new Date().getTime()}, function(data) {
      var jdata = data; 
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(1) > p.presupuesto').append(jdata['0'].presupuesto);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(1) > p.busqueda').append(jdata['0'].busqueda);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(1) > p.entrega').append(jdata['0'].entrega);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(2) > p.fecha_recogida').append(jdata['0'].fecha_recogida);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(2) > p.fecha_entrega').append(jdata['0'].fecha_entrega);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(2) > p.transport_type').append(jdata['0'].transport_type);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(3) > p.carga').append(jdata['0'].carga);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(3) > p.requisitos').append(jdata['0'].requisitos);
      $('#DisplayDetails > div > div > div.modal-body > div > div:nth-child(3) > p.advertencias').append(jdata['0'].advertencias);
      $('#DisplayDetails > div > div > div.modal-header > h5.modal-title').append(jdata['0'].carga);    
    });

  $('#DisplayDetails').modal('show');
}
function encargo_edit_detalle(id){
  $.getJSON('/backend/detail.php', {id: id, _: new Date().getTime()}, function(data) {
      var jdata = data;
      $('#edit_details_status').val(jdata['0'].stats);
      $('#edit_details_presupuesto').val(jdata['0'].presupuesto);
      $('#edit_details_busqueda').val(jdata['0'].busqueda);
      $('#edit_details_entrega').val(jdata['0'].entrega);
      $('#edit_details_fecha_recogida').val(jdata['0'].fecha_recogida);
      $('#edit_details_fecha_entrega').val(jdata['0'].fecha_entrega);
      $('#edit_details_transport_type').val(jdata['0'].transport_type);
      $('#edit_details_carga').val(jdata['0'].carga);
      $('#edit_details_requisitos').val(jdata['0'].requisitos);
      $('#edit_details_advertencias').val(jdata['0'].advertencias);
      $('#EditDetails > div > div > div.modal-header > h5.modal-title').append(jdata['0'].carga);    
    });
  
    var save_button = '<button type="button" class="btn btn-primary" onclick="encargo_save('+id+')">Guardar Cambios</button>';
  var close_button = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
  $('#EditDetails > div > div > div.modal-footer').append(save_button);
  $('#EditDetails > div > div > div.modal-footer').append(close_button);
  $('#DisplayDetails').modal('hide');
  setTimeout(() => {
    $('#EditDetails').modal();    
  }, 500);
}
function encargo_save(id){
var editdetails = new Array();
editdetails["id"] = id;
editdetails["id_user"] = usuario['id_user'];
editdetails["status"] = $('#edit_details_status').val();
editdetails["presupuesto"] = $('#edit_details_presupuesto').val();
editdetails["busqueda"] = $('#edit_details_busqueda').val();
editdetails["entrega"] = $('#edit_details_entrega').val();
editdetails["fecha_recogida"] = $('#edit_details_fecha_recogida').val();
editdetails["fecha_entrega"] = $('#edit_details_fecha_entrega').val();
editdetails["transport_type"] = $('#edit_details_transport_type').val();
editdetails["carga"] = $('#edit_details_carga').val();
editdetails["requisitos"] = $('#edit_details_requisitos').val();
editdetails["advertencias"] = $('#edit_details_advertencias').val();

$.ajax({
    type: "POST",
    url: "/backend/editar_orden.php",
    data: {
    id: editdetails.id.valueOf(),
    id_user: editdetails.id_user.valueOf(),
    status: editdetails.status.valueOf(),
    presupuesto: editdetails.presupuesto.valueOf(),
    busqueda: editdetails.busqueda.valueOf(),
    entrega: editdetails.entrega.valueOf(),
    fecha_recogida: editdetails.fecha_recogida.valueOf(),
    fecha_entrega: editdetails.fecha_entrega.valueOf(),
    transport_type: editdetails.transport_type.valueOf(),
    carga: editdetails.carga.valueOf(),
    requisitos: editdetails.requisitos.valueOf(),
    advertencias: editdetails.advertencias.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("Se a actualizado la Orden Satisfactoriamente");
            $('#EditDetails').modal('hide');
        }
        if(sucessed == "error") {
            alert("Ocurrio al actualizar la orden. Intente de Nuevo.");
        }
    }
});  
}

function no(){
  $('#NewOrder').modal('show');
}
function encargo_new_order(){
var orden = new Array();

orden["id_user"] = usuario['id_user'];
orden["status"] = 'danger';
orden["presupuesto"] = $('#new_order_presupuesto').val();
orden["busqueda"] = $('#new_order_busqueda').val();
orden["entrega"] = $('#new_order_entrega').val();
orden["fecha_recogida"] = $('#new_order_fecha_recogida').val();
orden["fecha_entrega"] = $('#new_order_fecha_entrega').val();
orden["transport_type"] = $('#new_order_transport_type').val();
orden["carga"] = $('#new_order_carga').val();
orden["requisitos"] = $('#new_order_requisitos').val();
orden["advertencias"] = $('#new_order_advertencias').val();

$.ajax({
    type: "POST",
    url: "/backend/nueva_orden.php",
    data: { 
    id_user: orden.id_user.valueOf(),
    status: orden.status.valueOf(),
    presupuesto: orden.presupuesto.valueOf(),
    busqueda: orden.busqueda.valueOf(),
    entrega: orden.entrega.valueOf(),
    fecha_recogida: orden.fecha_recogida.valueOf(),
    fecha_entrega: orden.fecha_entrega.valueOf(),
    transport_type: orden.transport_type.valueOf(),
    carga: orden.carga.valueOf(),
    requisitos: orden.requisitos.valueOf(),
    advertencias: orden.advertencias.valueOf(),
   }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("Se a registrado la Orden Satisfactoriamente");
            $('#NewOrder').modal('hide');
        }
        if(sucessed == "error") {
            alert("Ocurrio al registrar la orden. Intente de Nuevo.");
        }
    }
});  
}

function filtroConductor(estado){
if(estado=="all"){
$('.conductor').attr('style','display:inline!important');
}
if(estado=="disponible"){
  $('.conductor').attr('style','display:none!important');
  $('.disponible').attr('style','display:inline!important');
}
if(estado=="en_camino"){
  $('.conductor').attr('style','display:none!important');
  $('.en_camino').attr('style','display:inline!important');
}
if(estado=="suspendido"){
  $('.conductor').attr('style','display:none!important');
  $('.suspendido').attr('style','display:inline!important');
}
}

$(document).ready(function() {
  $.ajaxSetup({ cache: false });
  setTimeout(() => {
    runConductors();    
  }, 1000);
});

      var app = angular.module("myApp", ["ngRoute"]);
      app.config(function($routeProvider,$locationProvider) {
      $routeProvider
      .when("/", {
      templateUrl : "carrier/main.html"
      })
      .when("/encargos", {
      templateUrl : "carrier/encargos.html"
      })
      .when("/historial", {
      templateUrl : "carrier/historial.html"
      })
      .when("/conductores", {
      templateUrl : "carrier/conductores.html"
      })
      .when("/empresa", {
        templateUrl : "carrier/empresa.html"
      })
      .otherwise({
      redirectTo: "/"
      });
      $locationProvider.html5Mode(true);
      });