<?php
require_once __DIR__ . '/auth.php';
check_auth();

$id = $_GET['id'] ?? ($_POST['id'] ?? '');
$datos = leer_datos();
$idx = null;
foreach ($datos['boletines'] as $i => $b) {
    if ($b['id'] === $id) { $idx = $i; break; }
}
if ($idx === null) { header('Location: /admin/dashboard.php'); exit; }

$b = $datos['boletines'][$idx];
$error = '';
$exito = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])) {
    if (!verify_csrf($_POST['csrf'] ?? '')) {
        $error = 'Token inválido.';
    } else {
        $titulo      = trim($_POST['titulo'] ?? '');
        $resumen     = trim($_POST['resumen'] ?? '');
        $fecha_texto = trim($_POST['fecha_texto'] ?? '');
        $numero      = (int)($_POST['numero'] ?? 0);

        if (!$titulo || !$resumen || !$fecha_texto || !$numero) {
            $error = 'Completa todos los campos.';
        } else {
            // Nuevo PDF (opcional)
            if (!empty($_FILES['pdf']['tmp_name'])) {
                $pdf = $_FILES['pdf'];
                $pdf_ext  = strtolower(pathinfo($pdf['name'], PATHINFO_EXTENSION));
                $pdf_mime = mime_content_type($pdf['tmp_name']);
                if ($pdf_ext !== 'pdf' || $pdf_mime !== 'application/pdf') {
                    $error = 'El archivo debe ser un PDF válido.';
                } elseif ($pdf['size'] > MAX_PDF_BYTES) {
                    $error = 'El PDF supera el límite de 3 MB (' . round($pdf['size']/1024/1024, 2) . ' MB).';
                } else {
                    $pdf_name = sanitize_filename('boletin-' . $numero . '-' . date('Y') . '.' . $pdf_ext);
                    $pdf_dest = PDF_DIR . $pdf_name;
                    if (!move_uploaded_file($pdf['tmp_name'], $pdf_dest)) {
                        $error = 'Error al guardar el PDF.';
                    } else {
                        // Borrar PDF anterior si es diferente
                        $old = __DIR__ . '/../' . $b['pdf'];
                        if (file_exists($old) && realpath($old) !== realpath($pdf_dest)) @unlink($old);
                        $b['pdf'] = 'pdf/Boletines/' . $pdf_name;
                    }
                }
            }

            // Nueva portada (opcional)
            if (!$error && !empty($_FILES['portada']['tmp_name'])) {
                $img = $_FILES['portada'];
                $img_ext  = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
                $img_mime = mime_content_type($img['tmp_name']);
                $allowed_img = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'webp' => 'image/webp'];
                if (!isset($allowed_img[$img_ext]) || $allowed_img[$img_ext] !== $img_mime) {
                    $error = 'La portada debe ser JPG, PNG o WebP.';
                } else {
                    $img_name = sanitize_filename('portada-boletin-' . $numero . '.' . $img_ext);
                    $img_dest = IMG_DIR . $img_name;
                    if (!move_uploaded_file($img['tmp_name'], $img_dest)) {
                        $error = 'Error al guardar la portada.';
                    } else {
                        $old = __DIR__ . '/../' . $b['portada'];
                        if (file_exists($old) && realpath($old) !== realpath($img_dest)) @unlink($old);
                        $b['portada'] = 'img/portada-boletines/' . $img_name;
                    }
                }
            }

            if (!$error) {
                $b['numero']      = $numero;
                $b['titulo']      = $titulo;
                $b['resumen']     = $resumen;
                $b['fecha_texto'] = $fecha_texto;
                $datos['boletines'][$idx] = $b;
                guardar_datos($datos);
                $exito = true;
            }
        }
    }
}
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar boletín — SSO Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body { background:#f4f6fb; }
.topbar { background:#004085; color:#fff; padding:.75rem 1.5rem; display:flex; justify-content:space-between; align-items:center; }
.topbar .logo { font-weight:800; font-size:1.2rem; }
.topbar a { color:rgba(255,255,255,.8); font-size:.875rem; }
.topbar a:hover { color:#fff; text-decoration:none; }
.card-panel { border:none; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,.08); }
.drop-zone { border:2px dashed #c8d8ea; border-radius:10px; padding:1.5rem; text-align:center; cursor:pointer; transition:.2s; background:#f8fbff; }
.drop-zone:hover { border-color:#004085; }
.drop-zone input[type=file] { display:none; }
label { font-weight:600; font-size:.875rem; }
.current-thumb { width:80px; height:64px; object-fit:cover; border-radius:8px; }
</style>
</head>
<body>
<div class="topbar">
    <span class="logo">SSO <span style="font-weight:300;opacity:.7">Admin</span></span>
    <a href="/admin/dashboard.php"><i class="fa fa-arrow-left mr-1"></i>Volver al panel</a>
</div>

<div class="container py-4" style="max-width:700px">
    <h5 class="font-weight-bold mb-4">Editar: <?= htmlspecialchars($b['titulo']) ?></h5>

    <?php if ($exito): ?>
    <div class="alert alert-success"><i class="fa fa-check-circle mr-2"></i>Cambios guardados. <a href="/admin/dashboard.php">← Panel</a></div>
    <?php endif; ?>
    <?php if ($error): ?>
    <div class="alert alert-danger py-2" style="font-size:.9rem"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="card card-panel">
        <div class="card-body p-4">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                <input type="hidden" name="guardar" value="1">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Número de edición</label>
                            <input type="number" name="numero" class="form-control" min="1" value="<?= $b['numero'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de publicación</label>
                            <input type="text" name="fecha_texto" class="form-control" value="<?= htmlspecialchars($b['fecha_texto']) ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($b['titulo']) ?>" required>
                </div>

                <div class="form-group">
                    <label>Frase de resumen</label>
                    <textarea name="resumen" class="form-control" rows="3" required><?= htmlspecialchars($b['resumen']) ?></textarea>
                </div>

                <div class="form-group">
                    <label>PDF actual</label>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa fa-file-pdf fa-2x text-danger mr-2"></i>
                        <span style="font-size:.85rem" class="text-muted"><?= basename($b['pdf']) ?></span>
                        <a href="/<?= htmlspecialchars($b['pdf']) ?>" target="_blank" class="btn btn-outline-secondary btn-sm ml-auto">
                            <i class="fa fa-eye mr-1"></i>Ver
                        </a>
                    </div>
                    <div class="drop-zone" onclick="document.getElementById('pdfInput').click()">
                        <i class="fa fa-upload mr-1 text-muted"></i>
                        <span id="pdfLabel" class="text-muted" style="font-size:.85rem">Clic para reemplazar PDF (opcional, máx 3 MB)</span>
                        <input type="file" id="pdfInput" name="pdf" accept=".pdf,application/pdf">
                    </div>
                </div>

                <div class="form-group">
                    <label>Portada actual</label>
                    <div class="d-flex align-items-center mb-2">
                        <img src="/<?= htmlspecialchars($b['portada']) ?>" class="current-thumb mr-2" alt="">
                        <span style="font-size:.85rem" class="text-muted"><?= basename($b['portada']) ?></span>
                    </div>
                    <div class="drop-zone" onclick="document.getElementById('imgInput').click()">
                        <i class="fa fa-image mr-1 text-muted"></i>
                        <span id="imgLabel" class="text-muted" style="font-size:.85rem">Clic para reemplazar portada (opcional)</span>
                        <input type="file" id="imgInput" name="portada" accept="image/jpeg,image/png,image/webp,.jpg,.jpeg,.png,.webp">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="/admin/dashboard.php" class="btn btn-outline-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn text-white font-weight-bold" style="background:#004085; border-radius:8px; min-width:140px">
                        <i class="fa fa-save mr-1"></i>Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('pdfInput').addEventListener('change', function() {
    if (this.files[0]) document.getElementById('pdfLabel').textContent = this.files[0].name;
});
document.getElementById('imgInput').addEventListener('change', function() {
    if (this.files[0]) document.getElementById('imgLabel').textContent = this.files[0].name;
});
</script>
</body>
</html>
