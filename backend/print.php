<?php

$orden = $_GET['orden_id'];
$usr = $_GET['usr_id'];


require 'DOMPDF/vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

if($_GET['type']=='factura'){

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$factura_body = file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/templates/factura.php?orden_id='.$orden.'&usr_id='.$usr);

$dompdf->loadHtml($factura_body);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents('../tmp/factura-'.$orden.'_'.$usr.'.pdf',$output);

}

if($_GET['type']=='carta_porte'){

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$carta_porte_body = file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/templates/carta_porte.php?orden_id='.$orden.'&usr_id='.$usr);

$dompdf->loadHtml($carta_porte_body);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents('../tmp/carta_porte-'.$orden.'_'.$usr.'.pdf',$output);

}

if($_GET['type']=='manifiesto'){

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$manifiesto_body = file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/templates/manifiesto.php?orden_id='.$orden.'&usr_id='.$usr);

$dompdf->loadHtml($manifiesto_body);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents('../tmp/manifiesto-'.$orden.'_'.$usr.'.pdf',$output);

}