<?php
// Obtén el número de página enviado desde la solicitud AJAX
$page = $_POST['page'];

// Realiza aquí la lógica para cargar las fotos de acuerdo con el número de página

// Supongamos que tienes un array de fotos de ejemplo
$photos = array(
  array(
    'url' => 'path/to/photo1.jpg',
    'title' => 'Foto 1'
  ),
  array(
    'url' => 'path/to/photo2.jpg',
    'title' => 'Foto 2'
  ),
  // Agrega más fotos aquí
);

// Filtra las fotos correspondientes a la página actual
$perPage = 10; // Número de fotos por página
$offset = ($page - 1) * $perPage;
$filteredPhotos = array_slice($photos, $offset, $perPage);

// Devuelve las fotos filtradas como respuesta JSON
header('Content-Type: application/json');
echo json_encode($filteredPhotos);
?>
