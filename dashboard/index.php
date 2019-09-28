
<?php if(isset($_GET['t'])){setcookie("account", $_GET['t']);header('Location: /dashboard/');} ?>
<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <base href="/dashboard/">
  <title>UPE Cargo App | Dashboard</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3" ng-app="myApp" style="overflow-x:hidden!important;">
<?php
  if($_COOKIE['account']=='shipper'){ 
    include('sidebar_shipper.php');
  }

  if($_COOKIE['account']=='carrier'){
    include('sidebar_carrier.php');
  }
?>

  <!--Main layout-->
  <main class="pt-5" ng-view>

  </main>
  <!--Main layout-->
  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  
  <?php
  if($_COOKIE['account']=='shipper'){ ?>

<script src="./js/app_shipper.js"></script>

  <?php
  }
?>
<?php
  if($_COOKIE['account']=='carrier'){ ?>

<script src="./js/app_carrier.js"></script>

<?php
  }
?>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
              'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
              'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2,
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: "My Second dataset",
            backgroundColor: [
              'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
              'rgba(0, 10, 130, .7)',
            ],
            data: [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      },
      options: {
        responsive: true
      }
    });


    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
      type: 'radar',
      data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "My First dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        }, {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          backgroundColor: [
            'rgba(0, 250, 220, .2)',
          ],
          borderColor: [
            'rgba(0, 213, 132, .7)',
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive: true
      }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });

  </script>

  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>
  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
      });
    }

    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
        "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
        "datasets": [{
          "label": "My First Dataset",
          "data": [22, 33, 55, 12, 86, 23, 14],
          "fill": false,
          "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
            "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
          ],
          "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
            "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
            "rgb(201, 203, 207)"
          ],
          "borderWidth": 1
        }]
      },
      "options": {
        "scales": {
          "xAxes": [{
            "ticks": {
              "beginAtZero": true
            }
          }]
        }
      }
    });

  </script>
<!-- Modal -->

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


</body>
</html>
