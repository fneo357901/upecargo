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
.tg .tg-gzo9{font-size:11px;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 720px">
<colgroup>
<col style="width: 162px">
<col style="width: 142px">
<col style="width: 142px">
<col style="width: 137px">
<col style="width: 137px">
</colgroup>
  <tr>
    <th class="tg-0pky" colspan="5" style="text-align:center!important;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAABuCAIAAABKsVcZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTMxQkY3MTMzOEI0MTFFQTlBOUQ5RjJGRERCNzNGMUMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTMxQkY3MTQzOEI0MTFFQTlBOUQ5RjJGRERCNzNGMUMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMzFCRjcxMTM4QjQxMUVBOUE5RDlGMkZEREI3M0YxQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxMzFCRjcxMjM4QjQxMUVBOUE5RDlGMkZEREI3M0YxQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pt1/+fEAACOgSURBVHja7J0HWBTX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" style="width:90%!important;"/></th>
  </tr>
  <tr>
    <td class="tg-gzo9">EXPORTADOR</td>
    <td class="tg-gzo9" colspan="2">CARTA DE PORTE #</td>
    <td class="tg-gzo9" colspan="2">BOOKING NRO.</td>
  </tr>
  <tr>
    <td class="tg-gzo9" rowspan="3"></td>
    <td class="tg-gzo9" colspan="2"><?php echo $row['id']; ?></td>
    <td class="tg-gzo9" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="4">PAIS DE ORIGEN:</td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="4">COSTA RICA</td>
  </tr>
  <tr>
    <td class="tg-gzo9">CONSIGNATARIO</td>
    <td class="tg-gzo9" colspan="4">DOCUMENTACIÓN</td>
  </tr>
  <tr>
    <td class="tg-gzo9" rowspan="3"></td>
    <td class="tg-gzo9" colspan="4">Identificador NRO. #<?php echo $row2['id']; ?></td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="4">DESTINO FINAL</td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="4"><?php echo $row['entrega']; ?></td>
  </tr>
  <tr>
    <td class="tg-gzo9">NOTIFICAR A:<br></td>
    <td class="tg-gzo9" colspan="4">PARA ENTREGAR POR FAVOR CONTACTAR:<br></td>
  </tr>
  <tr>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9" colspan="4"></td>
  </tr>
  <tr>
    <td class="tg-gzo9">CONDUCTOR:</td>
    <td class="tg-gzo9" colspan="4"><?php echo $row2['nombre']; ?></td>
  </tr>
  <tr>
    <td class="tg-gzo9">NO. PASAPORTE<br></td>
    <td class="tg-gzo9" colspan="4"><?php echo $row2['PSP_id']; ?></td>
  </tr>
  <tr>
    <td class="tg-gzo9">CABEZAL</td>
    <td class="tg-gzo9">FURGON</td>
    <td class="tg-gzo9" colspan="3">TERMINAL DE CARGA<br></td>
  </tr>
  <tr>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9"><?php echo $row2['tipo_unidad']; ?></td>
    <td class="tg-gzo9" colspan="3"><?php echo $row['busqueda']; ?></td>
  </tr>
  <tr>
    <td class="tg-gzo9">TERMINAL DE DESCARGA<br></td>
    <td class="tg-gzo9">FECHA DE ENTREGA<br></td>
    <td class="tg-gzo9" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-gzo9"><?php echo $row['entrega']; ?></td>
    <td class="tg-gzo9"><?php echo $row['fecha_entrega']; ?></td>
    <td class="tg-gzo9" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-gzo9">RECIBO DEL TRANSPORTISTA<br></td>
    <td class="tg-gzo9" colspan="4">INFORMACION SUMINISTRADA POR EL EXPEDIDOR - TRANSPORTISTA NO SE HACE RESPONSABLE<br></td>
  </tr>
  <tr>
    <td class="tg-gzo9">MARCAS Y PRECINTOS<br></td>
    <td class="tg-gzo9">BULTOS</td>
    <td class="tg-gzo9">DESCRIPCION MERCANCIA<br></td>
    <td class="tg-gzo9">PESO BRUTO<br></td>
    <td class="tg-0pky">DIMENSIONES</td>
  </tr>
  <tr>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-gzo9">CARGOS DE TRANSPORTE<br></td>
    <td class="tg-gzo9">PREPAGADO</td>
    <td class="tg-gzo9" colspan="3">AL COBRO<br></td>
  </tr>
  <tr>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="2">TOTAL NO. DE PAQUETES</td>
    <td class="tg-gzo9" colspan="3">CARGA POR PAGAR EN ORIGEN<br></td>
  </tr>
  <tr>
    <td class="tg-gzo9" colspan="2"></td>
    <td class="tg-gzo9"></td>
    <td class="tg-gzo9" colspan="2"></td>
  </tr>
</table> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php }}}} ?>