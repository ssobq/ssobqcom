<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Salud Visual | SSO - CRC</title>

    <style>
        #serviciosNav { color: #e10109 !important; font-weight: bold; }
        .text-corporate-blue { color: #004085; }
        .text-corporate-red { color: #e10109; }
        
        .visual-card {
            border-radius: 15px;
            border: none;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 25px;
            height: 100%;
        }

        .visual-icon { font-size: 2rem; color: #e10109; margin-bottom: 15px; }
        
        .item-list { list-style: none; padding: 0; }
        .item-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
            color: #495057;
            font-weight: 500;
        }
        .item-list li i { margin-right: 10px; color: #004085; font-size: 0.7rem; }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Salud Visual</h1>
                <p class="lead text-muted mt-3">Las mejores alternativas para tu visión y estilo.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img class="img-fluid rounded shadow-sm w-100" src="/img/servicios/saludVisual/valor-de-optometria-ssobq.jpg" alt="Optometría">
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card visual-card shadow-sm">
                            <i class="fa-solid fa-glasses visual-icon"></i>
                            <h4 class="text-corporate-blue font-weight-bold">Tipos de Lentes</h4>
                            <ul class="item-list">
                                <li><i class="fa-solid fa-chevron-right"></i> Lentes Monofocales</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Lentes Bifocales</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Lentes Progresivos</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card visual-card shadow-sm">
                            <i class="fa-solid fa-shield-halved visual-icon"></i>
                            <h4 class="text-corporate-blue font-weight-bold">Tratamientos</h4>
                            <ul class="item-list">
                                <li><i class="fa-solid fa-chevron-right"></i> Policarbonato</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Antireflejos</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Antireflejo Blue</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Fotocromático</li>
                                <li><i class="fa-solid fa-chevron-right"></i> Transitions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                    <img class="img-fluid w-100" src="/img/servicios/saludVisual/monturas-de-gafas-ssobq.jpg" alt="Monturas de gafas">
                </div>
            </div>
        </div>
    </main>

    <?php include '../html/footer.html'; ?>
</body>
</html>