<?php
  require_once '../Model/Articulo.php';

  // Obtiene todos los artículos
  $data['articulos'] = Articulo::getArticulos();

  // Carga la vista de listado
  include '../View/listado.php';