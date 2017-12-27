<?php
require "vendor/autoload.php";


use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$html="<H1>Titulo pdf</H1><P>Esto es un prueba de generar un pdf</P>";
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment"=>0));