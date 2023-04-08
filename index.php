<?php
  // incluir la clase principal
  require_once 'clases/PaginaWeb.php';

  // instanciar la clase principal
  $paginaWeb = new PaginaWeb();

  // llamar al método que se encarga de generar el HTML
  echo $paginaWeb->generarHTML();
?>

