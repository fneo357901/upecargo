<?php include('../config.php'); ?>
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
  
  <link href="js/magicsuggest/magicsuggest.css" rel="stylesheet">

</head>
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding:0!important;
  margin:0!important;
  background-color:transparent!important;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 10px;
  margin-left: 50px;
}

main {
  transition: margin-left .5s;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
html, body {
  overflow-x: hidden;
}
body {
  position: relative;
}

#menuBtn {
position:fixed!important;
}

.navbar.scrolling-navbar.top-nav-collapse {
    transition: background .5s ease-in-out,padding .5s ease-in-out;
    padding-top: 12px;
    padding-bottom: 12px;
}
</style>
<body class="grey lighten-3" ng-app="myApp" style="overflow-x:hidden!important;">
<span id="menuBtn" style="font-size:30px;cursor:pointer;z-index:99999999 !important;/*! padding-top: .75rem !important; */position: absolute;/*! float: left !important; */left: 24px;display: flex !important;" class="float-left pt-2" onclick="openNav();">☰</span>
<?php
  if($_COOKIE['account']=='shipper'){ 
    include('sidebar_shipper.php');
  }

  if($_COOKIE['account']=='carrier'){
    include('sidebar_carrier.php');
  }
?>

  <!--Main layout-->
  <main class="pt-5 pl-0" ng-view>

  </main>
  <!--Main layout-->
  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $maps_key ?>"></script>
    <script src="js/magicsuggest/magicsuggest.js"></script>
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
  <script>
function openNav() {
  document.getElementById( "menuBtn" ).setAttribute( "onClick", "closeNav();" );
  document.getElementById("mySidenav").style.width = "286px";
  document.getElementById("main").style.marginLeft = "286px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)!important";
}

function closeNav() {
  document.getElementById( "menuBtn" ).setAttribute( "onClick", "openNav();" );
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<!-- Modal -->

<?php
  if($_COOKIE['account']=='shipper'){ 
    include('modals_shipper.php');
  }

  if($_COOKIE['account']=='carrier'){
    include('modals_carrier.php');
  }
?>

<script>
var destinatario_id = $('#new_order_destinatario_id').magicSuggest({
placeholder: 'Correo del Destinatario',
data: '/backend/users.php',
maxSelection: 1,
});
</script>

</body>
</html>
