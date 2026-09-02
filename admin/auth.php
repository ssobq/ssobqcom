<?php
require_once __DIR__ . '/config.php';

if (session_status() === PHP_SESSION_NONE) session_start();

function check_auth() {
    if (empty($_SESSION['admin_ok']) || (time() - ($_SESSION['last_act'] ?? 0)) > SESSION_TIMEOUT) {
        session_unset(); session_destroy();
        header('Location: /admin/'); exit;
    }
    $_SESSION['last_act'] = time();
}

function csrf_token() {
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}

function verify_csrf($t) {
    return !empty($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], (string)$t);
}

function leer_datos() {
    if (!file_exists(DATA_FILE)) return ['max_visibles' => 3, 'boletines' => []];
    return json_decode(file_get_contents(DATA_FILE), true) ?: ['max_visibles' => 3, 'boletines' => []];
}

function guardar_datos(array $data) {
    file_put_contents(DATA_FILE, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}

function sanitize_filename($name) {
    $name = preg_replace('/[^a-z0-9\-_\.]/i', '-', basename($name));
    return strtolower(preg_replace('/-+/', '-', $name));
}
