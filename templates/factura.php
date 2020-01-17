<?php
// $row <--- Array con informacion de pedido.
// $row2 <--- Array con informacion de conductor.

require('data.php');

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

if ($result2->num_rows > 0) {

while($row2 = $result2->fetch_assoc()) {
        
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  div.b{
    border:1px solid black !important;
  }
  </style>
  <body>

  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-g5xs{font-size:11px;text-align:center;vertical-align:top}
.tg .tg-z6qf{font-size:11px;text-align:right;vertical-align:top}
.tg .tg-t4kw{font-size:11px;text-align:center;vertical-align:middle}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 720px">
<colgroup>
<col style="width: 180px">
<col style="width: 180px">
<col style="width: 180px">
<col style="width: 180px">
</colgroup>
  <tr>
    <th class="tg-g5xs" colspan="4" style="text-align:center!important;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAABuCAIAAABKsVcZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjNDRTY4RTMzOEI0MTFFQTlDMDE5QjhGNjM5RjcyMEUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjNDRTY4RTQzOEI0MTFFQTlDMDE5QjhGNjM5RjcyMEUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyM0NFNjhFMTM4QjQxMUVBOUMwMTlCOEY2MzlGNzIwRSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoyM0NFNjhFMjM4QjQxMUVBOUMwMTlCOEY2MzlGNzIwRSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp0jpwAAB/DSURBVHja7J0LXM3n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" style="width:90%!important;"/></th>
  </tr>
  <tr>
    <td class="tg-g5xs">FECHA</td>
    <td class="tg-g5xs"><?php echo $row['fecha_recogida']; ?></td>
    <td class="tg-g5xs">NRO DE FACTURA<br></td>
    <td class="tg-g5xs"><?php echo $row['id']; ?></td>
  </tr>
  <tr>
    <td class="tg-g5xs">FECHA DE VENCIMIENTO<br></td>
    <td class="tg-g5xs"><?php echo $row['fecha_entrega']; ?></td>
    <td class="tg-g5xs">NRO DE PEDIDO<br></td>
    <td class="tg-g5xs"><?php echo $row['id']; ?></td>
  </tr>
  <tr>
    <td class="tg-t4kw">CANTIDAD</td>
    <td class="tg-t4kw">DESCRIPCION</td>
    <td class="tg-t4kw">PRECIO UNITARIO<br></td>
    <td class="tg-t4kw">IMPORTE<br></td>
  </tr>
  <tr>
    <td class="tg-t4kw">1</td>
    <td class="tg-t4kw"><?php echo $row['carga']; ?></td>
    <td class="tg-t4kw"><?php echo $row['presupuesto']; ?></td>
    <td class="tg-t4kw"><?php echo $row['presupuesto']; ?></td>
  </tr>
  <tr>
    <td class="tg-z6qf" colspan="3">TOTAL</td>
    <td class="tg-g5xs"><?php echo $row['presupuesto']; ?></td>
  </tr>
  <!--<tr>
    <td class="tg-g5xs" colspan="4">CONDICIONES Y FORMA DE PAGO<br></td>
  </tr>
  <tr>
    <td class="tg-g5xs" colspan="4"></td>
  </tr>-->
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php }}}} ?>