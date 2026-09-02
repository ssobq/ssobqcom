<?php
require_once __DIR__ . '/auth.php';
check_auth();

$id = $_GET['id'] ?? '';
$datos = leer_datos();
$idx = null;
foreach ($datos['boletines'] as $i => $b) {
    if ($b['id'] === $id) { $idx = $i; break; }
}

if ($idx === null) { header('Location: /admin/dashboard.php'); exit; }

$b = $datos['boletines'][$idx];

// Borrar archivos del servidor
$pdf_path = __DIR__ . '/../' . $b['pdf'];
$img_path = __DIR__ . '/../' . $b['portada'];
if (file_exists($pdf_path)) @unlink($pdf_path);
if (file_exists($img_path)) @unlink($img_path);

// Quitar del JSON
array_splice($datos['boletines'], $idx, 1);
guardar_datos($datos);

header('Location: /admin/dashboard.php?msg=eliminado'); exit;
