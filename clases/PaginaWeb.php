<?php
  class PaginaWeb {
    public function generarHTML() {
      // contenido HTML de la página
      $html = '<html>';
      $html .= '<head><title>Mi página web</title></head>';
      $html .= '<body>';
      $html .= '<h1>Bienvenidos a mi página web</h1>';
      $html .= '<p>Esta es una página web creada en PHP orientado a objetos</p>';
      $html .= '</body>';
      $html .= '</html>';

      return $html;
    }
  }
?>
