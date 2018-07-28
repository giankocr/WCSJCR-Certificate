<?php
require_once ('conn/conn.php');
$name = FILTER_INPUT(INPUT_POST,'name');
$email= FILTER_INPUT(INPUT_POST,'email');

$con = new access($name,$email);
$result=$con->login();


if ( $result === strtolower($name)){
    
    // include autoloader
    require_once 'dompdf/autoload.inc.php';
    
    // reference the Dompdf namespace
    //use Dompdf\Dompdf;
    $dompdf = new Dompdf\Dompdf();
    
    ob_start();
    require("print.php");
    
    // instantiate and use the dompdf class
   
    $dompdf->load_html(ob_get_clean());
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('letter', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    
    $dompdf->stream("Certificado-WCSJCR18.pdf", array("Attachment"=>0));
    }
    else{
        echo '<div  style="padding: 10%;
                display: inline-block;font-size:45px;  vertical-align: middle;">
                Lo siento no tenia mucho tiempo para ponerlo en bonito, pero parece que usted no fue al WordCamp o estas jugando de hacker. :)
                <br>Sorry por el html :(</div>';
        echo '<div style="margin-top: -10%;
        display: block;font-size:19 px;  text-align: center;"><:----- WordCamp San José Costa Rica 2018 -----:></div>';
    }


    
