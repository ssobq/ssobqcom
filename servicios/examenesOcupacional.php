<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/stylo.css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Exámenes Ocupacionales | SSO - CRC</title>

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

        /* Estilo interactivo para la lista de exámenes */
        .ocu-list-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 8px;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .ocu-list-item:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
        }

        .ocu-list-item i {
            margin-top: 4px;
            margin-right: 15px;
            font-size: 1.2rem;
            color: #e10109;
        }
        
        .ocu-list-item span {
            font-size: 1.05rem;
            color: #495057;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085; font-size: 2.5rem;">Exámenes Médicos Ocupacionales</h1>
                <p class="lead text-muted mt-3">Evaluaciones clínicas integrales para garantizar la salud y seguridad de sus trabajadores.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center mb-5">
            
            <div class="col-12 col-lg-7 mb-4 mb-lg-0 d-flex">
                <div class="card border-0 shadow-sm w-100 p-4 p-md-5" style="border-radius: 15px;">
                    <h4 class="font-weight-bold text-corporate-blue mb-4 border-bottom pb-3">Nuestras Evaluaciones</h4>
                    
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Examen médico ocupacional de pre-ingreso.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Examen médico ocupacional periódico.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Examen médico ocupacional de egreso.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Evaluación médica por retorno laboral.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Examen post incapacidad y/o seguimiento.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis osteomuscular.</span>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 mt-2 mt-md-0">
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis altura y/o espacios confinados.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis conductores.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis manipulación de alimentos.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis medicamentos y/o sustancias químicas.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis riesgo o maniobras eléctricas.</span>
                            </div>
                            <div class="ocu-list-item">
                                <i class="fa-solid fa-stethoscope"></i>
                                <span>Énfasis cardiovascular y/o respiratorio.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 d-flex">
                <div class="w-100 shadow-sm" style="border-radius: 15px; overflow: hidden; height: 100%;">
                    <img class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 350px;" src="/img/servicios/examenOcupacional/examen-ocupacional-ssobq.jpg" alt="Exámenes Ocupacionales SSO - CRC">
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