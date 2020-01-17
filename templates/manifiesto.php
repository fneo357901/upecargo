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
.tg .tg-ywt5{font-size:11px;font-family:serif !important;;text-align:center;vertical-align:top}
.tg .tg-gzo9{font-size:11px;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-ciah{font-size:11px;font-family:Arial, Helvetica, sans-serif !important;;text-align:center;vertical-align:top}
.tg .tg-151s{font-size:11px;font-family:Arial, Helvetica, sans-serif !important;;border-color:inherit;text-align:center;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 720px;margin-bottom:20px!important;">
<colgroup>
<col style="width: 120px">
<col style="width: 120px">
<col style="width: 120px">
<col style="width: 120px">
<col style="width: 120px">
<col style="width: 120px">
</colgroup>
  <tr>
    <th class="tg-gzo9" colspan="6" style="text-align:center!important;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAABuCAIAAABKsVcZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzFBMUQ2QTMzOEI0MTFFQUIzQ0RERjYyMTNGRTE1NDMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzFBMUQ2QTQzOEI0MTFFQUIzQ0RERjYyMTNGRTE1NDMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMUExRDZBMTM4QjQxMUVBQjNDRERGNjIxM0ZFMTU0MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMUExRDZBMjM4QjQxMUVBQjNDRERGNjIxM0ZFMTU0MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpwDBh0AACHOSURBVHja7J0HWBRX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" style="width:90%!important;"/></th>
  </tr>
  <tr>
    <td class="tg-g5xs">MANIFIESTO NRO<br></td>
    <td class="tg-g5xs" colspan="2"><?php echo $row['id']; ?></td>
    <td class="tg-g5xs">FECHA</td>
    <td class="tg-g5xs" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-151s">CONDUCTOR</td>
    <td class="tg-ciah"><?php echo $row2['nombre']; ?></td>
    <td class="tg-151s">PASAPORTE</td>
    <td class="tg-ciah"><?php echo $row2['PSP_id']; ?></td>
    <td class="tg-ywt5">LICENCIA</td>
    <td class="tg-ciah"><?php echo $row2['LC_id']; ?></td>
  </tr>
  <tr>
    <td class="tg-g5xs">NACIONALIDAD</td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs">COMPAÑIA<br>TRANSPORTISTA<br></td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs">CODIGO</td>
    <td class="tg-g5xs"></td>
  </tr>
  <tr>
    <td class="tg-g5xs">CABEZAL</td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs">MARCA</td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs">MOTOR</td>
    <td class="tg-g5xs"></td>
  </tr>
  <tr>
    <td class="tg-g5xs">CHASIS/VIN<br></td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs">FURGON</td>
    <td class="tg-g5xs"><?php echo $row2['tipo_unidad']; ?></td>
    <td class="tg-g5xs">DIMENSIONES</td>
    <td class="tg-g5xs"></td>
  </tr>
</table><style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-g5xs{font-size:11px;text-align:center;vertical-align:top}
.tg .tg-ywt5{font-size:11px;font-family:serif !important;;text-align:center;vertical-align:top}
.tg .tg-ciah{font-size:11px;font-family:Arial, Helvetica, sans-serif !important;;text-align:center;vertical-align:top}
.tg .tg-151s{font-size:11px;font-family:Arial, Helvetica, sans-serif !important;;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 720px">
<colgroup>
<col style="width: 102.8571px">
<col style="width: 102.8571px">
<col style="width: 102.8571px">
<col style="width: 102.8571px">
<col style="width: 102.8571px">
<col style="width: 102.8571px">
<col style="width: 102.8571px">
</colgroup>
  <tr>
    <th class="tg-151s">LINEA</th>
    <th class="tg-ciah">CARTA DE PORTE<br></th>
    <th class="tg-151s">BULTOS<br>CANTIDAD/TIPO</th>
    <th class="tg-ciah">PESO BRUTO<br></th>
    <th class="tg-ywt5">CONTENIDO</th>
    <th class="tg-ciah">EXPORTADOR</th>
    <th class="tg-g5xs">CONSIGNATARIO</th>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
    <td class="tg-0lax" rowspan="3" style="padding-bottom:75px!important"></td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-g5xs" colspan="2">NOMBRE DEL TRANSPORTISTA<br></td>
    <td class="tg-g5xs" colspan="2">FIRMA DEL TRANSPORTISTA<br></td>
    <td class="tg-g5xs">CODIGO</td>
    <td class="tg-g5xs" colspan="2">LUGAR Y FECHA DE EMISION<br></td>
  </tr>
  <tr>
    <td class="tg-g5xs" colspan="2" style="padding-bottom:25px!important"></td>
    <td class="tg-g5xs" colspan="2" style="padding-bottom:25px!important"></td>
    <td class="tg-g5xs"></td>
    <td class="tg-g5xs" colspan="2" style="padding-bottom:25px!important"></td>
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