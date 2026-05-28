<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/logo.ico" />
    <link rel="shortcut icon" href="img/favicon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylo.css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Boletines Informativos | SSO - CRC</title>
</head>

<body>

    <?php
    include 'html/nav.html';
    ?>

    <main class="container my-5">
        
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085;">Boletines Informativos</h1>
                <p class="lead text-muted">Manténgase al día con nuestras últimas publicaciones, normativas y consejos de Salud Ocupacional.</p>
                <hr class="w-25" style="border: 2px solid #e10109;">
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column text-center">
                        <div class="mb-3">
                            <i class="fa fa-file-pdf-o fa-4x" style="color: #e10109;"></i>
                        </div>
                        <h5 class="card-title font-weight-bold text-dark">Boletín edición N. 52</h5>
                        <p class="card-text text-secondary flex-grow-1">Descubra las claves para una comunicación asertiva, el poder del lenguaje corporal y cómo alcanzar la excelencia en el servicio al usuario.</p>
                        <span class="text-muted small mb-3 d-block"><i class="fa fa-calendar"></i> Publicado: Mayo, 2026</span>
                        
                        <a href="#modalBoletin1" data-toggle="modal" class="btn btn-block text-white font-weight-bold" style="background-color: #004085;">
                            <i class="fa fa-eye"></i> Visualizar Boletín
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column text-center">
                        <div class="mb-3">
                            <i class="fa fa-file-pdf-o fa-4x" style="color: #e10109;"></i>
                        </div>
                        <h5 class="card-title font-weight-bold text-dark">Boletín edición N. 51</h5>
                        <p class="card-text text-secondary flex-grow-1">Conozca la importancia de los exámenes médicos periódicos , el análisis ergonómico de su puesto de trabajo y consejos para su salud cardiovascular.</p>
                        <span class="text-muted small mb-3 d-block"><i class="fa fa-calendar"></i> Publicado: Abril, 2026</span>
                        
                        <a href="#modalBoletin2" data-toggle="modal" class="btn btn-block text-white font-weight-bold" style="background-color: #004085;">
                            <i class="fa fa-eye"></i> Visualizar Boletín
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column text-center">
                        <div class="mb-3">
                            <i class="fa fa-file-pdf-o fa-4x" style="color: #e10109;"></i>
                        </div>
                        <h5 class="card-title font-weight-bold text-dark">Boletín edición N. 50</h5>
                        <p class="card-text text-secondary flex-grow-1">Descubra cómo fortalecer la cultura preventiva en su empresa, implementar el Plan Estratégico de Seguridad Vial y prevenir riesgos en alturas.</p>
                        <span class="text-muted small mb-3 d-block"><i class="fa fa-calendar"></i> Publicado: Marzo, 2026</span>
                        
                        <a href="#modalBoletin3" data-toggle="modal" class="btn btn-block text-white font-weight-bold" style="background-color: #004085;">
                            <i class="fa fa-eye"></i> Visualizar Boletín
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <div class="modal fade" id="modalBoletin1" role="dialog" aria-hidden="true" style="padding-right: 0;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-primary colorAzul font-weight-bold">Boletín Mayo 2026 - SSO - CRC</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="pdf/Boletines/boletin-mayo-2026.pdf" width="100%" height="600px" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBoletin2" role="dialog" aria-hidden="true" style="padding-right: 0;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-primary colorAzul font-weight-bold">Boletín Abril 2026 - SSO - CRC</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="pdf/Boletines/boletin-abril-2026_144dpi_50.pdf" width="100%" height="600px" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBoletin3" role="dialog" aria-hidden="true" style="padding-right: 0;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-primary colorAzul font-weight-bold">Boletín Marzo 2026 - SSO - CRC</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="pdf/Boletines/boletin-marzo-2026.pdf" width="100%" height="600px" style="border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'html/footer.html';
    ?>


    <style type="text/css">
        #boletinesNav {
            color: #e10109 !important;
            font-weight: bold;
        }
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>