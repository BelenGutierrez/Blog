<?php
require_once '../Model/Articulo.php';
$datosArticulo = Articulo::getArticuloById($_GET['id']);
  // Carga la vista del formulario de alta de articulo
  include '../View/formularioModificar.php';
