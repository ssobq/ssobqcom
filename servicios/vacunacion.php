<!doctype html>
<html lang="es">

<head>
    <?php include '../html/analytics.html'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Vacunación Ocupacional en Barranquilla | SSO - CRC</title>
    <meta name="description" content="Servicios de vacunación ocupacional en Barranquilla: tétano, hepatitis B, influenza y más para empresas y trabajadores. SSO - CRC.">

    <style>
        #serviciosNav { color: #e10109 !important; font-weight: bold; }
        .text-corporate-blue { color: #004085; }
        .text-corporate-red { color: #e10109;}
        
        .vac-card {
            border-radius: 15px;
            border: none;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            border-left: 5px solid #004085;
            overflow: hidden;
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 20px 25px;
            transition: background-color 0.3s ease;
        }
        
        .card-header:hover {
            background-color: #f8f9fa;
        }

        .vac-icon { font-size: 1.5rem; color: #e10109; margin-right: 12px; }
        
        /* === Estilos base para Celulares (Mobile First) === */
        .vac-list { 
            list-style: none; 
            padding: 0; 
            margin: 0; 
            padding-left: 5px; 
            padding-right: 5px; 
        }
        
        .vac-list li {
            padding: 10px 5px; 
            border-bottom: 1px solid #ececec;
            color: #050505;
            display: flex;
            align-items: flex-start;
            font-size: 0.95rem; 
        }
        
        .vac-list li:last-child { 
            border-bottom: none; 
        }
        
        .vac-list li i { 
            margin-top: 5px; 
            margin-right: 10px; 
            color: #e10109; 
            font-size: 0.85rem; 
            flex-shrink: 0; 
        }

        /* === Ajustes para Tablets y Computadores === */
        @media (min-width: 768px) {
            .vac-list {
                padding-left: 15px; 
                padding-right: 15px;
            }
            
            .vac-list li {
                padding: 12px 10px;
                font-size: 1rem;
            }
            
            .vac-list li i {
                margin-right: 15px;
            }
        }

        .toggle-icon {
            color: #004085;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }
        
        .card-header[aria-expanded="true"] .toggle-icon {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Servicios de Vacunación</h1>
                <p class="lead text-muted mt-3">Protección preventiva para su salud y la de su equipo.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <!-- ================= SECCIÓN 1: SIEMPRE DISPONIBLES ================= -->
        <div class="row mb-4">
            <div class="col-12">
                <h3 class="text-corporate-blue border-bottom pb-2 mb-4">
                    <i class="fa-solid fa-syringe mr-2 text-corporate-red"></i>Vacunas Siempre Disponibles
                </h3>
            </div>
        </div>

        <div class="row">
            <!-- Tétanos -->
            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTetanos" aria-expanded="false" style="cursor: pointer;">
                        <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                            <i class="fa-solid fa-shield-virus vac-icon"></i> Tétanos
                        </h4>
                        <i class="fa-solid fa-chevron-down toggle-icon"></i>
                    </div>
                    <div id="collapseTetanos" class="collapse">
                        <div class="card-body pt-0 px-3 px-md-4 pb-4">
                            <ul class="vac-list mt-3">
                                <li><i class="fa-solid fa-check"></i> Vía intramuscular (Deltoides).</li>
                                <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                                <li><i class="fa-solid fa-check"></i> 2ª Dosis: Al mes de la primera.</li>
                                <li><i class="fa-solid fa-check"></i> 3ª Dosis: A los 6 meses de la segunda.</li>
                                <li><i class="fa-solid fa-check"></i> Refuerzo anual para mujeres en edad fértil.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hepatitis B -->
            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseHepatitis" aria-expanded="false" style="cursor: pointer;">
                        <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                            <i class="fa-solid fa-virus vac-icon"></i> Hepatitis B
                        </h4>
                        <i class="fa-solid fa-chevron-down toggle-icon"></i>
                    </div>
                    <div id="collapseHepatitis" class="collapse">
                        <div class="card-body pt-0 px-3 px-md-4 pb-4">
                            <ul class="vac-list mt-3">
                                <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                                <li><i class="fa-solid fa-check"></i> 2ª Dosis: Al mes de la primera.</li>
                                <li><i class="fa-solid fa-check"></i> 3ª Dosis: A los 6 meses de la primera dosis.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Fiebre Amarilla -->
            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseAmarilla" aria-expanded="false" style="cursor: pointer;">
                        <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                            <i class="fa-solid fa-mosquito vac-icon"></i> Fiebre Amarilla
                        </h4>
                        <i class="fa-solid fa-chevron-down toggle-icon"></i>
                    </div>
                    <div id="collapseAmarilla" class="collapse">
                        <div class="card-body pt-0 px-3 px-md-4 pb-4">
                            <ul class="vac-list mt-3">
                                <li><i class="fa-solid fa-check"></i> Inmunidad de por vida.</li>
                                <li><i class="fa-solid fa-check"></i> Recomendada para zonas de riesgo y viajes internacionales.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Influenza -->
            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseInfluenza" aria-expanded="false" style="cursor: pointer;">
                        <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                            <i class="fa-solid fa-temperature-low vac-icon"></i> Influenza
                        </h4>
                        <i class="fa-solid fa-chevron-down toggle-icon"></i>
                    </div>
                    <div id="collapseInfluenza" class="collapse">
                        <div class="card-body pt-0 px-3 px-md-4 pb-4">
                            <ul class="vac-list mt-3">
                                <li><i class="fa-solid fa-check"></i> Dosis Anual.</li>
                                <li><i class="fa-solid fa-check"></i> La inmunidad se atenúa con el tiempo, requiere refuerzo anual.</li>
                                <li><i class="fa-solid fa-check"></i> Aprobada para personas con patologías cardiacas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= SECCIÓN 2: BAJO PEDIDO ================= -->
        <div class="row mb-4 mt-4">
            <div class="col-12">
                <h3 class="text-corporate-blue border-bottom pb-2 mb-4">
                    <i class="fa-solid fa-box-open mr-2 text-corporate-red"></i>Vacunas Disponibles Bajo Pedido
                </h3>
                <p class="lead mt-2">Vacunas que debe comprar antes de la colocación.</p>
            </div>
        </div>

        <div class="row">
           
            <!-- Meningococo B -->
                <div class="col-12 col-md-6">
                    <div class="card vac-card">
                        <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseMeningococo" aria-expanded="false" style="cursor: pointer;">
                            <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                                <i class="fa-solid fa-temperature-low vac-icon"></i> Meningococo B
                            </h4>
                            <i class="fa-solid fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapseMeningococo" class="collapse">
                            <div class="card-body pt-0 px-3 px-md-4 pb-4">
                                <ul class="vac-list mt-3">
                                    <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                                    <li><i class="fa-solid fa-check"></i> 2ª Dosis: A los 6 meses de la primera.</li>                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Varicela -->
                <div class="col-12 col-md-6">
                    <div class="card vac-card">
                        <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseVaricela" aria-expanded="false" style="cursor: pointer;">
                            <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                                <i class="fa-solid fa-temperature-low vac-icon"></i> Varicela
                            </h4>
                            <i class="fa-solid fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapseVaricela" class="collapse">
                            <div class="card-body pt-0 px-3 px-md-4 pb-4">
                                <ul class="vac-list mt-3">
                                    <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                                    <li><i class="fa-solid fa-check"></i> 2ª Dosis: A los 2 meses de la primera.</li>                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Sarampion / Rubeola o Triple viral -->
                <div class="col-12 col-md-6">
                    <div class="card vac-card">
                        <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTripleViral" aria-expanded="false" style="cursor: pointer;">
                            <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                                <i class="fa-solid fa-temperature-low vac-icon"></i> Sarampion / Rubeola o Triple viral
                            </h4>
                            <i class="fa-solid fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapseTripleViral" class="collapse">
                            <div class="card-body pt-0 px-3 px-md-4 pb-4">
                                <ul class="vac-list mt-3">
                                    <li><i class="fa-solid fa-check"></i> Inmunidad de por vida.</li>                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hepatitis A -->
                <div class="col-12 col-md-6">
                    <div class="card vac-card">
                        <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseHepatitisA" aria-expanded="false" style="cursor: pointer;">
                            <h4 class="text-corporate-blue font-weight-bold mb-0 d-flex align-items-center">
                                <i class="fa-solid fa-temperature-low vac-icon"></i> Hepatitis A
                            </h4>
                            <i class="fa-solid fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapseHepatitisA" class="collapse">
                            <div class="card-body pt-0 px-3 px-md-4 pb-4">
                                <ul class="vac-list mt-3">
                                    <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                                    <li><i class="fa-solid fa-check"></i> 2ª Dosis: A los 2 meses de la primera.</li>                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>

            
        </div>

        <!-- Banner de Importante -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="alert alert-danger shadow-sm text-center p-4" style="border-radius: 15px; border: none; background-color: #e10109; color: white;">
                    <i class="fa-solid fa-triangle-exclamation fa-2x mb-3"></i>
                    <h4 class="font-weight-bold">IMPORTANTE</h4>
                    <p class="mb-0 font-weight-bold">Para validar su esquema de vacunación, es indispensable presentar su carnet físico al momento de la atención.</p>
                </div>
            </div>
        </div>
    </main>

    <?php include '../html/footer.html'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>