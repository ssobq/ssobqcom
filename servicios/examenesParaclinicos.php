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

    <title>Exámenes Paraclínicos en Barranquilla | SSO - CRC</title>
    <meta name="description" content="Exámenes paraclínicos ocupacionales en Barranquilla: audiometría, optometría, espirometría, visiometría y electrocardiograma. SSO - CRC.">

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

        /* Banner Superior Parallax */
        .hero-paraclinicos {
            background-image: url("/img/servicios/examenParaclinico/paraclinicos-ssobq.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Efecto Parallax */
            position: relative;
            padding: 80px 20px;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        /* Filtro oscuro para contraste de texto */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 64, 133, 0.85); /* Azul corporativo con opacidad */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Efecto interactivo en la lista */
        .para-list-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 12px 20px;
            border-radius: 8px;
            background-color: #ffffff;
            border: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .para-list-item:hover {
            background-color: #f8f9fa;
            transform: translateX(8px);
            border-color: #004085;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .para-list-item:hover {
            background-color: #004085;
            transform: translateX(8px);
            border-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .para-list-item:hover i {
            color: #fff;
        }

        .para-list-item:hover span {
            color: #fff;
        }

        .para-list-item:hover {
            background-color: #004085;
            transform: translateX(8px);
            border-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .para-list-item i {
            margin-right: 18px;
            font-size: 1.4rem;
            color: #e10109;
        }
        
        .para-list-item span {
            font-size: 1.1rem;
            color: #000000;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">

        <div class="row mb-3 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Exámenes Paraclínicos</h1>
                <p class="lead mt-3">Tecnología de precisión para diagnósticos ocupacionales exactos.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center justify-content-center mb-5">
            
            <!-- Columna Izquierda: Tarjeta de Lista -->
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 15px; height: 100%;">
                    
                    <!-- Título alineado a la izquierda -->
                    <h3 class="font-weight-bold text-corporate-blue mb-4 border-bottom pb-3">Servicios de Apoyo Diagnóstico</h3>
                    
                    <!-- Lista de servicios (sin mx-auto para que fluya hacia los bordes) -->
                    <div class="para-list-item">
                        <i class="fa-solid fa-headphones fa-fw text-corporate-red"></i>
                        <span>Audiometría vía aérea</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-ear-listen fa-fw text-corporate-red"></i>
                        <span>Audiometría clínica</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-eye fa-fw text-corporate-red"></i>
                        <span>Visiometría</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-glasses fa-fw text-corporate-red"></i>
                        <span>Optometría general</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-heart-pulse fa-fw text-corporate-red"></i>
                        <span>Electrocardiograma</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-lungs fa-fw text-corporate-red"></i>
                        <span>Espirometría</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-x-ray fa-fw text-corporate-red"></i>
                        <span>Rayos X, ecografías, radiografías de tórax lectura ILO.</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-person-walking fa-fw text-corporate-red"></i>
                        <span>Valoración por fisioterapeuta</span>
                    </div>
                    <div class="para-list-item">
                        <i class="fa-solid fa-comment-medical fa-fw text-corporate-red"></i>
                        <span>Valoración foniátrica</span>
                    </div>
                    
                </div>
            </div>

            <!-- Columna Derecha: Imagen -->
            <div class="col-12 col-lg-5">
                <div class="shadow-sm overflow-hidden" style="border-radius: 15px;">
                    <!-- Nota: Cambia la ruta en src="" por la imagen que desees usar -->
                    <img class="img-fluid w-100" src="/img/servicios/examenParaclinico/ExamenParaclinicos.webp" alt="Profesional médico realizando evaluación" loading="lazy" style="object-fit: cover; min-height: 400px;">
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