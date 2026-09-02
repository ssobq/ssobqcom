<?php
require_once __DIR__ . '/auth.php';
check_auth();

$datos = leer_datos();
$msg = '';

// Actualizar max_visibles
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['max_visibles'])) {
    if (!verify_csrf($_POST['csrf'] ?? '')) { $msg = 'error:Token inválido.'; }
    else {
        $mv = max(1, (int)$_POST['max_visibles']);
        $datos['max_visibles'] = $mv;
        guardar_datos($datos);
        $msg = 'ok:Configuración guardada.';
    }
}

// Mover boletín arriba/abajo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mover'])) {
    if (verify_csrf($_POST['csrf'] ?? '')) {
        $id = $_POST['id'] ?? '';
        $dir = $_POST['mover'];
        $lista = &$datos['boletines'];
        foreach ($lista as $i => $b) {
            if ($b['id'] === $id) {
                $swap = ($dir === 'arriba') ? $i - 1 : $i + 1;
                if ($swap >= 0 && $swap < count($lista)) {
                    [$lista[$i], $lista[$swap]] = [$lista[$swap], $lista[$i]];
                }
                break;
            }
        }
        guardar_datos($datos);
        header('Location: /admin/dashboard.php'); exit;
    }
}

$max = $datos['max_visibles'];
$boletines = $datos['boletines'];
[$ok_class, $ok_msg] = str_starts_with($msg, 'ok:')
    ? ['success', substr($msg, 3)]
    : (str_starts_with($msg, 'error:') ? ['danger', substr($msg, 6)] : ['', '']);
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel — SSO Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body { background: #f4f6fb; }
.topbar { background: #004085; color: #fff; padding: .75rem 1.5rem; display:flex; justify-content:space-between; align-items:center; }
.topbar .logo { font-weight:800; font-size:1.2rem; letter-spacing:-0.5px; }
.topbar a { color: rgba(255,255,255,.8); font-size:.875rem; }
.topbar a:hover { color:#fff; text-decoration:none; }
.card-panel { border:none; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,.08); }
.badge-visible { background:#28a745; color:#fff; }
.badge-archivado { background:#6c757d; color:#fff; }
th { font-size:.8rem; text-transform:uppercase; color:#6c757d; font-weight:600; border-top:none!important; }
td { vertical-align:middle!important; }
.portada-thumb { width:60px; height:48px; object-fit:cover; border-radius:6px; }
.btn-sm { border-radius:6px; }
.vis-bar { height:6px; border-radius:3px; background:#e9ecef; margin-top:.5rem; }
.vis-bar-fill { height:100%; border-radius:3px; background:#004085; transition:width .4s; }
</style>
</head>
<body>
<div class="topbar">
    <span class="logo">SSO <span style="font-weight:300;opacity:.7">Admin</span></span>
    <div>
        <a href="/boletines.php" target="_blank" class="mr-3"><i class="fa fa-external-link-alt mr-1"></i>Ver sitio</a>
        <a href="/admin/logout.php"><i class="fa fa-sign-out-alt mr-1"></i>Cerrar sesión</a>
    </div>
</div>

<div class="container py-4" style="max-width:960px">
    <?php if ($ok_msg): ?>
    <div class="alert alert-<?= $ok_class ?> py-2 mb-3" style="font-size:.9rem"><?= htmlspecialchars($ok_msg) ?></div>
    <?php endif; ?>

    <!-- Configuración de visibles -->
    <div class="card card-panel mb-4">
        <div class="card-body py-3">
            <form method="post" class="form-inline">
                <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
                <label class="mr-2 font-weight-bold" style="font-size:.95rem">
                    <i class="fa fa-eye mr-1 text-primary"></i>Boletines visibles en la página pública:
                </label>
                <input type="number" name="max_visibles" value="<?= $max ?>" min="1" max="<?= count($boletines) ?>"
                    class="form-control form-control-sm mr-2" style="width:70px">
                <button type="submit" class="btn btn-sm text-white" style="background:#004085">Guardar</button>
                <span class="ml-3 text-muted" style="font-size:.85rem">
                    (Los primeros <?= $max ?> de la lista aparecen en la web)
                </span>
            </form>
        </div>
    </div>

    <!-- Tabla boletines -->
    <div class="card card-panel">
        <div class="card-header bg-white d-flex justify-content-between align-items-center" style="border-radius:12px 12px 0 0; border-bottom:1px solid #f0f0f0;">
            <span class="font-weight-bold" style="font-size:1rem">Boletines</span>
            <a href="/admin/nuevo.php" class="btn btn-sm text-white" style="background:#e10109; border-radius:8px">
                <i class="fa fa-plus mr-1"></i>Nuevo boletín
            </a>
        </div>
        <div class="card-body p-0">
        <?php if (empty($boletines)): ?>
            <p class="text-muted text-center py-4">No hay boletines. <a href="/admin/nuevo.php">Agrega el primero.</a></p>
        <?php else: ?>
            <table class="table mb-0">
                <thead class="thead-light">
                    <tr>
                        <th style="width:40px">#</th>
                        <th style="width:72px">Portada</th>
                        <th>Título / Fecha</th>
                        <th style="width:90px">Estado</th>
                        <th style="width:110px">Orden</th>
                        <th style="width:130px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($boletines as $i => $b): $pos = $i + 1; $visible = $pos <= $max; ?>
                <tr>
                    <td class="text-muted" style="font-size:.85rem"><?= $pos ?></td>
                    <td>
                        <img src="/<?= htmlspecialchars($b['portada']) ?>" class="portada-thumb" alt="">
                    </td>
                    <td>
                        <div class="font-weight-bold" style="font-size:.9rem"><?= htmlspecialchars($b['titulo']) ?></div>
                        <div class="text-muted" style="font-size:.8rem"><?= htmlspecialchars($b['fecha_texto']) ?></div>
                    </td>
                    <td>
                        <span class="badge <?= $visible ? 'badge-visible' : 'badge-archivado' ?>" style="font-size:.75rem; padding:.35em .6em; border-radius:6px">
                            <?= $visible ? 'Visible' : 'Archivado' ?>
                        </span>
                    </td>
                    <td>
                        <form method="post" class="d-inline">
                            <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($b['id']) ?>">
                            <button name="mover" value="arriba" class="btn btn-outline-secondary btn-sm px-2" <?= $i === 0 ? 'disabled' : '' ?> title="Subir">
                                <i class="fa fa-arrow-up"></i>
                            </button>
                            <button name="mover" value="abajo" class="btn btn-outline-secondary btn-sm px-2 ml-1" <?= $i === count($boletines)-1 ? 'disabled' : '' ?> title="Bajar">
                                <i class="fa fa-arrow-down"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="/admin/editar.php?id=<?= urlencode($b['id']) ?>" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-pen"></i>
                        </a>
                        <a href="/admin/eliminar.php?id=<?= urlencode($b['id']) ?>"
                           class="btn btn-outline-danger btn-sm ml-1"
                           onclick="return confirm('¿Eliminar este boletín? Se borrarán el PDF y la portada del servidor.')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
