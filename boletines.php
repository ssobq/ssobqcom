<!doctype html>
<html lang="es">

<head>
    <?php include 'html/analytics.html'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/logo.ico" />
    <link rel="shortcut icon" href="img/favicon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylo.css">

    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Boletines de Salud Ocupacional y SST | SSO - CRC</title>
    <meta name="description" content="Boletines informativos de SSO - CRC sobre salud ocupacional, SST y seguridad y salud en el trabajo. Mantente al día con nuestras publicaciones.">
</head>

<body class="bg-light">

    <?php include 'html/nav.html'; ?>

    <main class="container my-5">

        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085;">Boletines Informativos</h1>
                <p class="lead text-muted mt-3">Manténgase al día con nuestras últimas publicaciones, normativas y consejos de Salud Ocupacional.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        
        <!-- Bloque de suscripción al boletín -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0" style="border-radius: 15px; background-color: #004085;">
                    <div class="card-body p-4 text-center text-white">
                        <h5 class="font-weight-bold mb-2"><i class="fa-solid fa-envelope-open-text mr-2"></i>Suscríbete a nuestro boletín</h5>
                        <p class="mb-3" style="opacity: 0.9;">Recibe cada edición directamente en tu correo, apenas la publiquemos.</p>

                        <form action="https://ssobq.us1.list-manage.com/subscribe/post?u=17a096bab8cc3043ce6babf55&amp;id=06342144e3&amp;f_id=0094c2e1f0" method="post" target="_blank" novalidate class="form-inline justify-content-center">
                            <label for="mce-EMAIL" class="sr-only">Correo electrónico</label>
                            <input type="email" name="EMAIL" id="mce-EMAIL" required
                                class="form-control mr-2 mb-2 mb-md-0"
                                placeholder="tu@correo.com"
                                style="border-radius: 50px; min-width: 260px; border: none; padding: 10px 20px;">

                            <!-- Campo anti-spam honeypot de Mailchimp (no tocar) -->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_17a096bab8cc3043ce6babf55_06342144e3" tabindex="-1" value="">
                            </div>

                            <button type="submit" class="btn font-weight-bold rounded-pill shadow-sm transition-btn mb-2 mb-md-0"
                                style="background-color: #e10109; color: #fff; padding: 10px 30px;">
                                <i class="fa-solid fa-paper-plane mr-1"></i> Suscribirme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $json_data = json_decode(file_get_contents(__DIR__ . '/data/boletines.json'), true);
        $max_vis   = (int)($json_data['max_visibles'] ?? 3);
        $boletines = array_slice($json_data['boletines'] ?? [], 0, $max_vis);
        ?>
        <div class="row align-items-stretch">
        <?php foreach ($boletines as $idx => $bol): $mid = 'modal_' . htmlspecialchars($bol['id']); ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0 doc-card" style="border-radius: 15px;">
                    <div class="card-body d-flex flex-column text-center p-4">
                        <img src="/<?= htmlspecialchars($bol['portada']) ?>" alt="<?= htmlspecialchars($bol['titulo']) ?>" class="boletin-img" <?= $idx > 0 ? 'loading="lazy"' : '' ?>>
                        <h5 class="card-title font-weight-bold" style="color: #004085;"><?= htmlspecialchars($bol['titulo']) ?></h5>
                        <p class="card-text text-secondary flex-grow-1" style="font-size: 0.95rem;"><?= htmlspecialchars($bol['resumen']) ?></p>
                        <span class="text-muted small mb-4 d-block font-weight-bold">
                            <i class="fa fa-calendar text-corporate-red mr-1"></i> Publicado: <?= htmlspecialchars($bol['fecha_texto']) ?>
                        </span>
                        <a href="#<?= $mid ?>" data-toggle="modal" class="btn btn-block text-white font-weight-bold rounded-pill shadow-sm transition-btn mt-auto" style="background-color: #004085; padding: 10px 0;">
                            <i class="fa fa-eye mr-1"></i> Visualizar Boletín
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </main>



    <!-- Modales generados dinámicamente desde boletines.json -->
    <?php foreach ($boletines as $bol): $mid = 'modal_' . htmlspecialchars($bol['id']); ?>
    <div class="modal fade" id="<?= $mid ?>" role="dialog" aria-hidden="true" style="padding-right: 0;">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: 12px; overflow: hidden;">
                <div class="modal-header">
                    <h5 class="modal-title text-primary colorAzul font-weight-bold"><?= htmlspecialchars($bol['titulo']) ?> - SSO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="/<?= htmlspecialchars($bol['pdf']) ?>" width="100%" height="600px" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>


    




    <!-- Footer -->
    <?php include 'html/footer.html'; ?>

    <style type="text/css">
        #boletinesNav {
            color: #e10109 !important;
            font-weight: bold;
        }

        .text-corporate-red {
            color: #e10109;
        }

        .doc-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .doc-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12) !important;
        }

        .transition-btn {
            transition: all 0.3s ease;
        }

        .transition-btn:hover {
            background-color: #e10109 !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(225, 1, 9, 0.2) !important;
        }

        /* Estilo para las portadas miniatura */
        .boletin-img {
            width: 100%;
            height: 200px;
            /* Altura fija para uniformidad */
            object-fit: cover;
            /* Recorta la imagen sin deformarla */
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .doc-card:hover .boletin-img {
            transform: scale(1.05);
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>