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

    <title>Paquetes de Servicios | SSO - CRC</title>

    <style>
        #serviciosNav {
            color: #e10109 !important;
            font-weight: bold;
        }
        
        .text-corporate-blue { color: #004085; }
        .text-corporate-red { color: #e10109; }

        /* Estilo de Tarjetas de Paquetes */
        .package-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .package-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 64, 133, 0.15) !important;
        }

        .package-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        /* Estilo de la lista de exámenes */
        .pack-list-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .pack-list-item i {
            margin-top: 4px;
            margin-right: 12px;
            font-size: 1.1rem;
        }

        /* Leyenda de Exámenes */
        .legend-badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 16px;
            border-radius: 50px;
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            margin: 0 10px;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <div class="row mb-4 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085; font-size: 2.5rem;">Paquetes de Servicios</h1>
                <p class="lead text-muted mt-3">Soluciones integrales diseñadas a la medida de cada perfil laboral.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
                <div class="legend-badge">
                    <i class="fa-solid fa-circle-check text-corporate-red mr-2"></i>
                    <span class="font-weight-bold text-corporate-blue">Exámenes Básicos</span>
                </div>
                <div class="legend-badge mt-2 mt-sm-0">
                    <i class="fa-solid fa-circle-plus text-secondary mr-2"></i>
                    <span class="font-weight-bold text-secondary">Exámenes Complementarios</span>
                </div>
            </div>
        </div>

        <div class="row align-items-stretch">

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/Administrativo.jpg" alt="Paquete Administrativo">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Perfil Administrativo</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico ocupacional énfasis osteomuscular</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Visiometría</span>
                        </div>
                        <div class="pack-list-item text-secondary mt-3 pt-2 border-top">
                            <i class="fa-solid fa-circle-plus"></i><span>Valoración psicológica cargos medios / informe psicotécnico</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/altura.jpg" alt="Paquete Alturas">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Trabajo en Alturas</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico ocupacional énfasis en altura</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría y Optometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Perfil lipídico, Glicemia y Hemograma</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Electrocardiograma (a partir de 40 años)</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Valoración psicológica / informe psicotécnico</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/CONDUCTOR.jpg" alt="Paquete Conductor">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Perfil Conductor</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico énfasis osteomuscular</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría y Optometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Prueba de coordinación motriz psicológica</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Valoración / Informe psicológico conductor</span>
                        </div>
                        <div class="pack-list-item text-secondary mt-3 pt-2 border-top">
                            <i class="fa-solid fa-circle-plus"></i><span>Glicemia</span>
                        </div>
                        <div class="pack-list-item text-secondary">
                            <i class="fa-solid fa-circle-plus"></i><span>Perfil lipídico</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/docente-call-center.jpg" alt="Paquete Docente Call Center">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Docente / Call Center</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico énfasis osteomuscular</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Visiometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Valoración foniátrica</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/Espacios-confinados.jpg" alt="Paquete Espacios Confinados">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Espacios Confinados</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico énfasis en espacios confinados</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría y Optometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Espirometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Perfil lipídico, Glicemia y Hemograma</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Valoración psicológica espacios confinados</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Electrocardiograma (a partir de 40 años)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/manipulacion-de-alimentos.jpg" alt="Paquete Manipulación de Alimentos">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Manipulación de Alimentos</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico énfasis osteomuscular</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>KOH uñas, Coprológico, Frotis de garganta</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Curso de manipulación de alimentos</span>
                        </div>
                        <div class="pack-list-item text-secondary mt-3 pt-2 border-top">
                            <i class="fa-solid fa-circle-plus"></i><span>Carnet manipulación de alimentos</span>
                        </div>
                        <div class="pack-list-item text-secondary">
                            <i class="fa-solid fa-circle-plus"></i><span>Electromiografía de mano dominante</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/altura-conductor.jpg" alt="Paquete Altura y Conductor">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Alturas + Conductor</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico énfasis en altura</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría y Optometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Perfil lipídico, Glicemia y Hemograma</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Prueba de coordinación motriz psicológica</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Electrocardiograma (a partir de 40 años)</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Valoración psicológica para trabajo en altura</span>
                        </div>
                        <div class="pack-list-item text-secondary mt-3 pt-2 border-top">
                            <i class="fa-solid fa-circle-plus"></i><span>Valoración / Informe psicológico conductor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card border-0 shadow-sm h-100 package-card bg-white">
                    <img class="package-img" src="/img/servicios/paquetes/escolar.jpg" alt="Paquete Escolar">
                    <h5 class="card-title text-center text-corporate-blue font-weight-bold py-3 mb-0 border-bottom mx-3">Perfil Escolar</h5>
                    <div class="card-body">
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Examen médico general</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Visiometría</span>
                        </div>
                        <div class="pack-list-item text-dark">
                            <i class="fa-solid fa-circle-check text-corporate-red"></i><span>Audiometría</span>
                        </div>
                        <div class="pack-list-item text-secondary mt-3 pt-2 border-top">
                            <i class="fa-solid fa-circle-plus"></i><span>Optometría</span>
                        </div>
                    </div>
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