<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.gametracker.com/server_info/149.28.97.164:27003/');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('div') as $element)
       echo $element->href . '<br>'; 