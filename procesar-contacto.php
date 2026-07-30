<?php
/**
 * Procesa el formulario de contacto y enruta el mensaje al area
 * seleccionada. Nunca confia en un correo de destino que venga del
 * formulario: el area se resuelve contra esta lista fija del lado
 * del servidor, para que el sitio no pueda usarse como relevo de spam.
 */

$areas = [
    'administrativa' => ['Administrativa y Financiera', 'administrativa@ssobq.com'],
    'admisiones'     => ['Admisiones', 'orden@ssobq.com'],
    'cartera'        => ['Cartera', 'cartera@ssobq.com'],
    'crc'            => ['CRC (Conductores)', 'administracioncrc@ssobq.com'],
    'conceptos'      => ['Conceptos', 'resultados@ssobq.com'],
    'comercial'      => ['Gestión Comercial', 'gestioncomercial@ssobq.com'],
    'regionales'     => ['Regionales', 'regional@ssobq.com'],
    'servicios'      => ['Servicios', 'dir.servicios@ssobq.com'],
];

function redirigir($estado)
{
    header('Location: contacto.php?estado=' . $estado . '#formulario-contacto');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirigir('error');
}

// Campo trampa para bots: si viene lleno, se descarta la solicitud en
// silencio (no delatamos al bot que lo detectamos, solo simulamos exito).
if (!empty($_POST['sitio_web'])) {
    redirigir('enviado');
}

$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$area_codigo = trim($_POST['area'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

if ($nombre === '' || $mensaje === '' || !isset($areas[$area_codigo])) {
    redirigir('error');
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    redirigir('error');
}

// Un correo valido segun filter_var no puede contener saltos de linea,
// pero igual limpiamos nombre/telefono por si acaso (proteccion contra
// inyeccion de encabezados de correo).
$quitar_saltos = fn($texto) => str_replace(["\r", "\n"], '', $texto);
$nombre = $quitar_saltos($nombre);
$telefono = $quitar_saltos($telefono);

[$area_nombre, $area_email] = $areas[$area_codigo];

$asunto = "Nuevo mensaje de contacto - $area_nombre - www.ssobq.com";

$cuerpo = "Se recibió un mensaje desde el formulario de contacto de ssobq.com\n\n"
    . "Área: $area_nombre\n"
    . "Nombre: $nombre\n"
    . "Correo: $correo\n"
    . "Teléfono: " . ($telefono !== '' ? $telefono : 'No proporcionado') . "\n\n"
    . "Mensaje:\n$mensaje\n";

$encabezados = "From: Formulario de Contacto SSO <no-reply@ssobq.com>\r\n"
    . "Reply-To: $nombre <$correo>\r\n"
    . "Content-Type: text/plain; charset=UTF-8";

$enviado = @mail($area_email, $asunto, $cuerpo, $encabezados);

redirigir($enviado ? 'enviado' : 'error');
