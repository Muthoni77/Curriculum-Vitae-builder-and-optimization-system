<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf(); 
$mpdf->WriteHTML('   <h1>Personal Information</h1>');
$mpdf->Output();
?>
 