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

    <title>Exámenes Médicos Ocupacionales en Barranquilla | SSO - CRC</title>
    <meta name="description" content="Exámenes médicos ocupacionales de ingreso, periódicos y de retiro en Barranquilla. Resultados confiables con SSO - CRC. Agenda tu cita hoy.">

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

        /* Efecto interactivo unificado para la lista de exámenes */
        .ocu-list-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 12px 20px;
            border-radius: 8px;
            background-color: #ffffff;
            border: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .ocu-list-item:hover {
            background-color: #004085;
            transform: translateX(8px);
            border-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .ocu-list-item:hover i {
            color: #fff;
        }

        .ocu-list-item:hover span {
            color: #fff;
        }

        .ocu-list-item i {
            margin-right: 18px;
            font-size: 1.4rem;
            color: #e10109;
            transition: color 0.3s ease;
        }
        
        .ocu-list-item span {
            font-size: 1.1rem;
            color: #000000;
            font-weight: 500;
            transition: color 0.3s ease;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <div class="row mb-3 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Exámenes Médicos Ocupacionales</h1>
                <p class="lead mt-3">Evaluaciones clínicas integrales para garantizar la salud y seguridad de sus trabajadores.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center justify-content-center mb-5">
            
            <!-- Columna Izquierda: Tarjeta de Lista -->
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 15px; height: 100%;">
                    
                    <h3 class="font-weight-bold text-corporate-blue mb-4 border-bottom pb-3">Nuestras Evaluaciones</h3>
                    
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-user-plus fa-fw"></i>
                                <span>Examen médico ocupacional de pre-ingreso.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-calendar-check fa-fw"></i>
                                <span>Examen médico ocupacional periódico.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-file-export fa-fw"></i>
                                <span>Examen médico ocupacional de egreso.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-briefcase-medical fa-fw"></i>
                                <span>Evaluación médica por retorno laboral.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-notes-medical fa-fw"></i>
                                <span>Examen post incapacidad y/o seguimiento.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-bone fa-fw"></i>
                                <span>Énfasis osteomuscular.</span>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-helmet-safety fa-fw"></i>
                                <span>Énfasis altura y/o espacios confinados.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-car fa-fw"></i>
                                <span>Énfasis conductores.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-utensils fa-fw"></i>
                                <span>Énfasis manipulación de alimentos.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-flask fa-fw"></i>
                                <span>Énfasis medicamentos y sustancias químicas.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-bolt fa-fw"></i>
                                <span>Énfasis riesgo o maniobras eléctricas.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-heart-pulse fa-fw"></i>
                                <span>Énfasis cardiovascular y/o respiratorio.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Imagen -->
            <div class="col-12 col-lg-5">
                <div class="shadow-sm overflow-hidden" style="border-radius: 15px;">
                    <img class="img-fluid w-100" src="/img/servicios/examenOcupacional/examen-ocupacional-ssobq.jpg" alt="Exámenes Ocupacionales SSO - CRC" loading="lazy" style="object-fit: cover; min-height: 400px;">
                </div>
            </div>

        </div>

    </main>

    <?php include '../html/footer.html'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>