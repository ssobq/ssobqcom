<!doctype html>
<html lang="es">

<head>
    <?php include '../html/analytics.html'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/stylo.css">

    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <!-- Importamos los iconos de Bootstrap para la flechita -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Centro de Reconocimiento de Conductores (CRC) en Barranquilla</title>
    <meta name="description" content="Certificado de aptitud para licencia de conducción en Barranquilla. Centro de Reconocimiento de Conductores (CRC) de SSO - CRC.">

    <style>
        #serviciosNav {
            color: #e10109 !important;
            font-weight: bold;
        }

        .text-corporate-blue {
            color: #004085;
        }
        
        .text-corporate-red {
            color: #e10109;
        }

        .exam-card {
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-bottom: 4px solid #004085;
            /* Evitamos que se estiren obligatoriamente por culpa de las demás */
            height: auto !important; 
        }

        .exam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 64, 133, 0.15) !important;
            border-bottom-color: #e10109;
        }

        .exam-card:hover h6 {
            color: #e10109 !important;
        }

        .btn-agenda {
            transition: all 0.3s ease;
            border-radius: 50px;
            padding: 12px 35px;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .btn-agenda:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(225, 1, 9, 0.3);
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <div class="row mb-5 text-center">
            <div class="col-12">
                <img class="img-fluid shadow-sm" src="/img/servicios/CRC/CRC.png" alt="Centro de Reconocimiento de Conductores SSO" style="border-radius: 15px; width: 100%; max-height: 300px; object-fit: cover;" loading="lazy">
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-12 col-lg-10">
                <h2 class="font-weight-bold text-corporate-blue mb-4 text-center">Certificados Médicos para Licencias de Conducción</h2>
                <div class="card border-0 shadow-sm p-2 p-md-3 text-center" style="border-radius: 15px;">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                        <strong class="text-corporate-blue"> Tramita, renueva o recategoriza </strong> tu licencia sin filas ni demoras. Somos una IPS acreditada por <strong class="text-corporate-blue"> ONAC </strong>, con tecnología de última generación para entregarte resultados al instante y cargar todo directo al RUNT.                     </p>
                </div>
            </div>
        </div>

        <div class="row mt-2 mb-5">
            <div class="col-12 text-center">
                <a href="https://wa.me/573157400411" class="btn text-white font-weight-bold btn-agenda shadow" style="background-color: #e10109;">
                    <i class="fa-solid fa-calendar-check mr-2"></i> AGENDA TU CITA AHORA
                </a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center mb-4">
                <h3 class="font-weight-bold text-corporate-blue text-uppercase">Nuestras Evaluaciones</h3>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 60px;">
            </div>
        </div>

        <!-- Cambio align-items-stretch por align-items-start para que cada tarjeta sea independiente -->
        <div class="row align-items-start text-center mb-5" id="grupoEvaluaciones">
            
            <!-- Tarjeta 1: Psicología y Coordinación Motriz -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card bg-white border-0 shadow-sm p-4 exam-card" type="button" data-toggle="collapse" data-target="#collapsePsicologia" aria-expanded="false" aria-controls="collapsePsicologia" style="cursor: pointer;">
                    <img class="img-fluid mx-auto mb-4" src="/img/servicios/CRC/Psicosensometrica.png" alt="Psicología" style="max-height: 80px;" loading="lazy">
                    <h6 class="font-weight-bold text-corporate-blue mb-2" style="transition: color 0.3s ease;">Psicología y Coordinación Motriz</h6>
                    <i class="bi bi-chevron-down small"></i>
                    
                    <div class="collapse text-start mt-3 pt-3 border-top" id="collapsePsicologia" data-parent="#grupoEvaluaciones">
                        <p class="small mb-0">Evaluamos las capacidades de reacción, orientación espacial, coordinación visomotriz y estabilidad emocional requeridas para una conducción segura.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Optometría -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card bg-white border-0 shadow-sm p-4 exam-card" type="button" data-toggle="collapse" data-target="#collapseOptometria" aria-expanded="false" aria-controls="collapseOptometria" style="cursor: pointer;">
                    <img class="img-fluid mx-auto mb-4" src="/img/servicios/CRC/optometria.png" alt="Optometría" style="max-height: 80px;" loading="lazy">
                    <h6 class="font-weight-bold text-corporate-blue mb-2" style="transition: color 0.3s ease;">Optometría</h6>
                    <i class="bi bi-chevron-down small"></i>
                    
                    <div class="collapse text-start mt-3 pt-3 border-top" id="collapseOptometria" data-parent="#grupoEvaluaciones">
                        <p class="small mb-0">Examinamos la agudeza visual cercana y lejana, la visión de colores (daltonismo) y la capacidad de acomodación indispensable para manejar.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Fonoaudiología -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card bg-white border-0 shadow-sm p-4 exam-card" type="button" data-toggle="collapse" data-target="#collapseFonoaudiologia" aria-expanded="false" aria-controls="collapseFonoaudiologia" style="cursor: pointer;">
                    <img class="img-fluid mx-auto mb-4" src="/img/servicios/CRC/Audiometria.png" alt="Fonoaudiología" style="max-height: 80px;" loading="lazy">
                    <h6 class="font-weight-bold text-corporate-blue mb-2" style="transition: color 0.3s ease;">Fonoaudiología</h6>
                    <i class="bi bi-chevron-down text-muted small"></i>
                    
                    <div class="collapse text-start mt-3 pt-3 border-top" id="collapseFonoaudiologia" data-parent="#grupoEvaluaciones">
                        <p class="small mb-0">Medimos la capacidad auditiva en diferentes frecuencias para garantizar que percibes correctamente las señales de tránsito acústicas.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4: Medicina General -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card bg-white border-0 shadow-sm p-4 exam-card" type="button" data-toggle="collapse" data-target="#collapseMedicina" aria-expanded="false" aria-controls="collapseMedicina" style="cursor: pointer;">
                    <img class="img-fluid mx-auto mb-4" src="/img/servicios/CRC/Examen-medico.png" alt="Medicina General" style="max-height: 80px;" loading="lazy">
                    <h6 class="font-weight-bold text-corporate-blue mb-2" style="transition: color 0.3s ease;">Medicina</h6>
                    <i class="bi bi-chevron-down text-muted small"></i>
                    
                    <div class="collapse text-start mt-3 pt-3 border-top" id="collapseMedicina" data-parent="#grupoEvaluaciones">
                        <p class="small mb-0">Valoración médica integral para certificar tu estado de salud general, aptitud física y condiciones óptimas para la conducción.</p>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include '../html/footer.html'; ?>

    <!-- Scripts necesarios compatibles con Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>