<?php
// Script de instalación de una sola vez — eliminar después de usar
define('SETUP_KEY', 'sso-install-2026');

if (($_GET['key'] ?? '') !== SETUP_KEY) {
    http_response_code(403);
    echo 'Acceso denegado.'; exit;
}

$base = __DIR__;
$data_dir = $base . '/../data';

$errors = [];

// Crear data/ si no existe
if (!is_dir($data_dir) && !mkdir($data_dir, 0755, true)) {
    $errors[] = "No se pudo crear el directorio data/";
}

// Crear data/.htaccess
if (!$errors) {
    if (!file_put_contents($data_dir . '/.htaccess', "Deny from all\n")) {
        $errors[] = "No se pudo escribir data/.htaccess";
    }
}

// Crear admin/config.php
$config_php = '<?php
define(\'ADMIN_USER\', \'ssoadmin\');
define(\'ADMIN_PASS_HASH\', \'$2y$12$L30uZ4rPlbqRiTNSeSQbJOnf/PvTYcIF/059hkSQ1TIh6V48WzZgu\');
define(\'SESSION_TIMEOUT\', 7200);
define(\'DATA_FILE\', __DIR__ . \'/../data/boletines.json\');
define(\'PDF_DIR\',  __DIR__ . \'/../pdf/Boletines/\');
define(\'IMG_DIR\',  __DIR__ . \'/../img/portada-boletines/\');
define(\'MAX_PDF_BYTES\', 3145728);
';
if (!$errors) {
    if (!file_put_contents($base . '/config.php', $config_php)) {
        $errors[] = "No se pudo escribir admin/config.php";
    }
}

// Crear data/boletines.json
$boletines_json = '{
    "max_visibles": 3,
    "boletines": [
        {
            "id": "b_55",
            "numero": 55,
            "titulo": "Boletin edicion N. 55",
            "resumen": "Descubra las claves para una comunicacion asertiva, el poder del lenguaje corporal y como alcanzar la excelencia en el servicio al usuario.",
            "fecha_texto": "Agosto, 2026",
            "pdf": "pdf\/Boletines\/boletin-julio-2026.pdf",
            "portada": "img\/portada-boletines\/portada-boletin-55.jpg",
            "creado_en": "2026-08-01"
        },
        {
            "id": "b_54",
            "numero": 54,
            "titulo": "Boletin edicion N. 54",
            "resumen": "Descubra como transformar la seguridad del trabajador en un pilar de productividad y cumplimiento legal para su empresa en nuestra Edicion N 54.",
            "fecha_texto": "Julio, 2026",
            "pdf": "pdf\/Boletines\/boletin-julio-2026-original.pdf",
            "portada": "img\/portada-boletines\/portada-boletin-54.jpg",
            "creado_en": "2026-07-01"
        },
        {
            "id": "b_53",
            "numero": 53,
            "titulo": "Boletin edicion N. 53",
            "resumen": "Conoce estrategias practicas, pausas activas y tecnicas para manejar el estres en nuestra Edicion N 53.",
            "fecha_texto": "Junio, 2026",
            "pdf": "pdf\/Boletines\/boletin-junio-2026-53.pdf",
            "portada": "img\/portada-boletines\/portada-boletin-53.jpg",
            "creado_en": "2026-06-01"
        }
    ]
}';
if (!$errors) {
    if (!file_put_contents($data_dir . '/boletines.json', $boletines_json)) {
        $errors[] = "No se pudo escribir data/boletines.json";
    }
}

if ($errors) {
    echo "<h2>Errores:</h2><ul>";
    foreach ($errors as $e) echo "<li>$e</li>";
    echo "</ul>";
} else {
    echo "<h2>Instalacion completada</h2>";
    echo "<p>Archivos creados correctamente:</p><ul>";
    echo "<li>admin/config.php</li>";
    echo "<li>data/.htaccess</li>";
    echo "<li>data/boletines.json</li>";
    echo "</ul>";
    echo "<p><strong>Elimina este archivo del servidor ahora:</strong> borra <code>admin/install.php</code> desde el File Manager de cPanel.</p>";
    echo "<p><a href='/admin/'>Ir al panel admin</a></p>";
}
