<?php
/*  Copyright 2018  Gianko.com  (email : hola@gianko.com)
   
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include ('header.php');
if (isset($_GET["nombre"])) {
$nombre =  filter_var($_GET["nombre"],FILTER_SANITIZE_STRING);
$email  =  filter_var($_GET["email"],FILTER_SANITIZE_STRING);
}else{
    $nombre='';
    $email='';
}

?>
<body >
<img src="assets/img/certificado-header.png" id="header">
  <div id="flex">
  <div id="wrap">
      <h1>¡Reclama tu certificado de participación!</h1>
      <form method="post" action="certificado.php">
        <fieldset>
            <legend>Introduce tu nombre tal y como quieres que aparezca en el certificado.</legend>
            <div class="col">
                <p>
                    <label for="name">Nombre: </label>
                <input type="text" name="name" value="<?php echo $nombre;?>" autofocus />
                <input type="hidden" name="email" value="<?php echo $email;?>">
                </p>
            </div>
            <button type="submit">Imprimir</button>
        </fieldset>
      </form>
  </div>
</div>
<img src="assets/img/certificado-footer.png" id="footer">
</body>
</html>
