<?php
require_once __DIR__ . '/config.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!empty($_SESSION['admin_ok'])) { header('Location: /admin/dashboard.php'); exit; }

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['usuario'] ?? '');
    $pass = $_POST['clave'] ?? '';
    if ($user === ADMIN_USER && password_verify($pass, ADMIN_PASS_HASH)) {
        $_SESSION['admin_ok'] = true;
        $_SESSION['last_act'] = time();
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        header('Location: /admin/dashboard.php'); exit;
    }
    $error = 'Usuario o contraseña incorrectos.';
}
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin — SSO</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
body { background: #004085; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
.login-card { background: #fff; border-radius: 16px; padding: 2.5rem; width: 100%; max-width: 400px; box-shadow: 0 20px 60px rgba(0,0,0,.3); }
.logo { color: #e10109; font-size: 2rem; font-weight: 800; letter-spacing: -1px; }
</style>
</head>
<body>
<div class="login-card">
    <div class="text-center mb-4">
        <div class="logo">SSO</div>
        <p class="text-muted mb-0" style="font-size:.9rem">Panel de administración</p>
    </div>
    <?php if ($error): ?>
    <div class="alert alert-danger py-2" style="font-size:.9rem"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label class="font-weight-bold" style="font-size:.9rem">Usuario</label>
            <input type="text" name="usuario" class="form-control" autofocus autocomplete="username">
        </div>
        <div class="form-group">
            <label class="font-weight-bold" style="font-size:.9rem">Contraseña</label>
            <input type="password" name="clave" class="form-control" autocomplete="current-password">
        </div>
        <button type="submit" class="btn btn-block text-white font-weight-bold mt-3" style="background:#004085; border-radius:8px; padding:.75rem">
            Ingresar
        </button>
    </form>
</div>
</body>
</html>
