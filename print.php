<?php
/*
* Print file
*/
include ('header.php');
$name = $_POST['name']; ?>
<body>
  <style>
  @page {
    font-family: 'Montserrat', sans-serif;
  }
  </style>
<img src="assets/img/fondo-01.jpg" id="bgimg">
<h1 class="title">Certificado de Participaci&oacute;n</h1>
<p class="text by">Por este medio certificamos que:</p>
<h1 class="name" style="text-transform: capitalize;"><?php print $name ?></h1>
<p class="text">particip&oacute; activamente en el WordCamp San José Costa Rica 2018, celebrado del 21 al 22 de julio del 2018 en San Pedro, San José, Costa Rica.</p>
<p class="text fecha">Entregado en la ciudad de San José, a los 22 d&iacute;as del mes de julio del 2018</p>
<p id="team">Organizadores WordCamp San José, Costa Rica</p>
<p class="team"> Erika, Lidia, Lincy, Melissa, Krysia, Roberto, Alfredo, Edgar, Giancarlos</p>





</body>
</html>
