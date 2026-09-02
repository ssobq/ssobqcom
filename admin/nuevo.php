<?php
require_once __DIR__ . '/auth.php';
check_auth();

$error = '';
$exito = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verify_csrf($_POST['csrf'] ?? '')) {
        $error = 'Token inválido. Recarga la página.';
    } else {
        $titulo      = trim($_POST['titulo'] ?? '');
        $resumen     = trim($_POST['resumen'] ?? '');
        $fecha_texto = trim($_POST['fecha_texto'] ?? '');
        $numero      = (int)($_POST['numero'] ?? 0);

        if (!$titulo || !$resumen || !$fecha_texto || !$numero) {
            $error = 'Completa todos los campos de texto.';
        } elseif (empty($_FILES['pdf']['tmp_name'])) {
            $error = 'Debes subir el archivo PDF.';
        } elseif (empty($_FILES['portada']['tmp_name'])) {
            $error = 'Debes subir la imagen de portada.';
        } else {
            // Validar PDF
            $pdf = $_FILES['pdf'];
            $pdf_ext = strtolower(pathinfo($pdf['name'], PATHINFO_EXTENSION));
            $pdf_mime = mime_content_type($pdf['tmp_name']);
            if ($pdf_ext !== 'pdf' || $pdf_mime !== 'application/pdf') {
                $error = 'El archivo debe ser un PDF válido.';
            } elseif ($pdf['size'] > MAX_PDF_BYTES) {
                $error = 'El PDF supera el límite de 3 MB (' . round($pdf['size']/1024/1024, 2) . ' MB).';
            }

            // Validar portada
            if (!$error) {
                $img = $_FILES['portada'];
                $img_ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
                $img_mime = mime_content_type($img['tmp_name']);
                $allowed_img = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'webp' => 'image/webp'];
                if (!isset($allowed_img[$img_ext]) || $allowed_img[$img_ext] !== $img_mime) {
                    $error = 'La portada debe ser JPG, PNG o WebP.';
                }
            }

            if (!$error) {
                $id = 'b_' . time() . '_' . bin2hex(random_bytes(3));

                $pdf_name  = sanitize_filename('boletin-' . $numero . '-' . date('Y') . '.' . $pdf_ext);
                $img_name  = sanitize_filename('portada-boletin-' . $numero . '.' . $img_ext);

                $pdf_dest = PDF_DIR . $pdf_name;
                $img_dest = IMG_DIR . $img_name;

                if (!move_uploaded_file($pdf['tmp_name'], $pdf_dest)) {
                    $error = 'Error al guardar el PDF. Verifica permisos de la carpeta.';
                } elseif (!move_uploaded_file($img['tmp_name'], $img_dest)) {
                    unlink($pdf_dest);
                    $error = 'Error al guardar la portada. Verifica permisos de la carpeta.';
                } else {
                    $datos = leer_datos();
                    array_unshift($datos['boletines'], [
                        'id'          => $id,
                        'numero'      => $numero,
                        'titulo'      => $titulo,
                        'resumen'     => $resumen,
                        'fecha_texto' => $fecha_texto,
                        'pdf'         => 'pdf/Boletines/' . $pdf_name,
                        'portada'     => 'img/portada-boletines/' . $img_name,
                        'creado_en'   => date('Y-m-d'),
                    ]);
                    guardar_datos($datos);
                    $exito = true;
                }
            }
        }
    }
}
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nuevo boletín — SSO Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body { background:#f4f6fb; }
.topbar { background:#004085; color:#fff; padding:.75rem 1.5rem; display:flex; justify-content:space-between; align-items:center; }
.topbar .logo { font-weight:800; font-size:1.2rem; }
.topbar a { color:rgba(255,255,255,.8); font-size:.875rem; }
.topbar a:hover { color:#fff; text-decoration:none; }
.card-panel { border:none; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,.08); }
.drop-zone { border:2px dashed #c8d8ea; border-radius:10px; padding:2rem; text-align:center; cursor:pointer; transition:.2s; background:#f8fbff; }
.drop-zone:hover { border-color:#004085; background:#eef4fc; }
.drop-zone input[type=file] { display:none; }
.preview-img { max-height:120px; border-radius:8px; margin-top:.75rem; display:none; }
label { font-weight:600; font-size:.875rem; }
</style>
</head>
<body>
<div class="topbar">
    <span class="logo">SSO <span style="font-weight:300;opacity:.7">Admin</span></span>
    <a href="/admin/dashboard.php"><i class="fa fa-arrow-left mr-1"></i>Volver al panel</a>
</div>

<div class="container py-4" style="max-width:700px">
    <h5 class="font-weight-bold mb-4">Nuevo boletín</h5>

    <?php if ($exito): ?>
    <div class="alert alert-success">
        <i class="fa fa-check-circle mr-2"></i>Boletín agregado exitosamente.
        <a href="/admin/dashboard.php" class="ml-2">← Volver al panel</a>
    </div>
    <?php endif; ?>

    <?php if ($error): ?>
    <div class="alert alert-danger py-2" style="font-size:.9rem"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if (!$exito): ?>
    <div class="card card-panel">
        <div class="card-body p-4">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="csrf" value="<?= csrf_token() ?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Número de edición</label>
                            <input type="number" name="numero" class="form-control" min="1" value="<?= htmlspecialchars($_POST['numero'] ?? '') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de publicación</label>
                            <input type="text" name="fecha_texto" class="form-control" placeholder="Ej: Septiembre, 2026" value="<?= htmlspecialchars($_POST['fecha_texto'] ?? '') ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Ej: Boletín edición N. 56" value="<?= htmlspecialchars($_POST['titulo'] ?? '') ?>" required>
                </div>

                <div class="form-group">
                    <label>Frase de resumen</label>
                    <textarea name="resumen" class="form-control" rows="3" placeholder="Breve descripción del contenido..." required><?= htmlspecialchars($_POST['resumen'] ?? '') ?></textarea>
                </div>

                <div class="form-group">
                    <label>Archivo PDF <small class="text-muted font-weight-normal">(máx. 3 MB)</small></label>
                    <div class="drop-zone" id="pdfZone" onclick="document.getElementById('pdfInput').click()">
                        <i class="fa fa-file-pdf fa-2x text-danger mb-2"></i>
                        <div id="pdfLabel" class="text-muted" style="font-size:.9rem">Haz clic para seleccionar el PDF</div>
                        <input type="file" id="pdfInput" name="pdf" accept=".pdf,application/pdf">
                    </div>
                </div>

                <div class="form-group">
                    <label>Imagen de portada <small class="text-muted font-weight-normal">(JPG, PNG o WebP)</small></label>
                    <div class="drop-zone" id="imgZone" onclick="document.getElementById('imgInput').click()">
                        <i class="fa fa-image fa-2x text-primary mb-2"></i>
                        <div id="imgLabel" class="text-muted" style="font-size:.9rem">Haz clic para seleccionar la portada</div>
                        <input type="file" id="imgInput" name="portada" accept="image/jpeg,image/png,image/webp,.jpg,.jpeg,.png,.webp">
                        <img id="imgPreview" class="preview-img" alt="Vista previa">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="/admin/dashboard.php" class="btn btn-outline-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn text-white font-weight-bold" style="background:#004085; border-radius:8px; min-width:140px">
                        <i class="fa fa-upload mr-1"></i>Publicar boletín
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>

<script>
document.getElementById('pdfInput').addEventListener('change', function() {
    var f = this.files[0];
    if (f) document.getElementById('pdfLabel').textContent = f.name + ' (' + (f.size/1024/1024).toFixed(2) + ' MB)';
});
document.getElementById('imgInput').addEventListener('change', function() {
    var f = this.files[0];
    if (!f) return;
    document.getElementById('imgLabel').textContent = f.name;
    var reader = new FileReader();
    reader.onload = function(e) {
        var p = document.getElementById('imgPreview');
        p.src = e.target.result; p.style.display = 'block';
    };
    reader.readAsDataURL(f);
});
</script>
</body>
</html>
