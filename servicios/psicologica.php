<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Pruebas Psicológicas | SSO - CRC</title>

    <style>
        #serviciosNav { color: #e10109 !important; font-weight: bold; }
        .text-corporate-blue { color: #004085; }
        .text-corporate-red { color: #e10109; }
        
        .info-card {
            border-radius: 15px;
            border: none;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .info-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        
        .psi-icon {
            font-size: 2.5rem;
            color: #e10109;
            margin-bottom: 20px;
        }

        .psi-list { list-style: none; padding: 0; margin-top: 15px; }
        .psi-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
            color: #555;
            display: flex;
            align-items: center;
        }
        .psi-list li i { margin-right: 12px; color: #004085; font-size: 0.7rem; }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Pruebas Psicológicas</h1>
                <p class="lead text-muted mt-3">Evaluaciones especializadas para entornos laborales y organizacionales.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row justify-content-center">
            
            <div class="col-12 col-md-4 mb-4">
                <div class="card info-card p-4">
                    <i class="fa-solid fa-user-check psi-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Valoración Psicológica</h4>
                    <ul class="psi-list">
                        <li><i class="fa-solid fa-chevron-right"></i> Altura</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Ansiedad</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Cargos medios</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Conductor</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Espacios confinados</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Estudiantil</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Mental - Social</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card info-card p-4">
                    <i class="fa-solid fa-file-contract psi-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Informe Psicotécnico</h4>
                    <ul class="psi-list">
                        <li><i class="fa-solid fa-chevron-right"></i> Cargos medios</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Conductores</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Especializadas</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Altura y/o Confinados</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card info-card p-4">
                    <i class="fa-solid fa-chart-line psi-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Desarrollo Organizacional</h4>
                    <ul class="psi-list">
                        <li><i class="fa-solid fa-chevron-right"></i> Evaluación de desempeño</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Programa de bienestar</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Estudio de clima laboral</li>
                        <li><i class="fa-solid fa-chevron-right"></i> Evaluación de coordinación motriz</li>
                    </ul>
                </div>
            </div>

        </div>
    </main>

    <?php include '../html/footer.html'; ?>

</body>
</html>