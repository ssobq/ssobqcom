<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Asesoría Especializada en SST | SSO - CRC</title>

    <style>
        #serviciosNav { color: #e10109 !important; font-weight: bold; }
        .text-corporate-blue { color: #004085; }
        .text-corporate-red { color: #e10109; }

        .service-card {
            border-radius: 15px;
            border-left: 5px solid #004085;
            transition: all 0.3s ease;
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .service-card:hover { transform: translateX(10px); border-left-color: #e10109; }
        .service-icon { font-size: 1.5rem; color: #004085; margin-right: 15px; }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Asesoría Integral en SST</h1>
                <p class="lead text-muted mt-3">Acompañamiento experto para garantizar un entorno de trabajo seguro y normativo.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-7">
                
                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-clipboard-check service-icon"></i>
                        <h5 class="font-weight-bold text-corporate-blue mb-0">SG-SST (Sistema de Gestión)</h5>
                    </div>
                    <p class="mt-2 text-muted mb-0 pl-5">Asesoría, implementación y seguimiento continuo para el cumplimiento legal de su empresa.</p>
                </div>

                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-file-signature service-icon"></i>
                        <h5 class="font-weight-bold text-corporate-blue mb-0">Profesiogramas</h5>
                    </div>
                    <p class="mt-2 text-muted mb-0 pl-5">Definición de perfiles ocupacionales alineados con los riesgos específicos de su actividad.</p>
                </div>

                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-heart-pulse service-icon"></i>
                        <h5 class="font-weight-bold text-corporate-blue mb-0">Tamizaje Cardiovascular</h5>
                    </div>
                    <p class="mt-2 text-muted mb-0 pl-5">Evaluación preventiva para identificar riesgos de salud en su personal colaborador.</p>
                </div>

                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-file-medical service-icon"></i>
                        <h5 class="font-weight-bold text-corporate-blue mb-0">Diagnóstico de Salud</h5>
                    </div>
                    <p class="mt-2 text-muted mb-0 pl-5">Análisis exhaustivo de las condiciones de salud poblacional dentro de su organización.</p>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="shadow-sm rounded overflow-hidden">
                    <img class="img-fluid w-100" src="/img/servicios/sst/compania-sst-ssobq.jpg" alt="Especialistas en SST SSO - CRC">
                </div>
                <div class="alert mt-3 text-center" style="background-color: #004085; color: white;">
                    <i class="fa-solid fa-user-doctor mr-2"></i> <strong>Equipo experto a su servicio</strong>
                </div>
            </div>
        </div>
    </main>

    <?php include '../html/footer.html'; ?>
</body>
</html>