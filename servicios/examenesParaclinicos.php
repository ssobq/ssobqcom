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

    <title>Exámenes Paraclínicos | SSO - CRC</title>

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
            border-color: rgba(225, 1, 9, 0.3);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .para-list-item i {
            margin-right: 18px;
            font-size: 1.4rem;
            color: #e10109;
        }
        
        .para-list-item span {
            font-size: 1.1rem;
            color: #495057;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <div class="row">
            <div class="col-12">
                <div class="hero-paraclinicos shadow-sm d-flex align-items-center justify-content-center text-center">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white">
                        <i class="fa-solid fa-heart-pulse fa-3x mb-3" style="color: #e10109;"></i>
                        <h1 class="display-4 font-weight-bold mb-3">Exámenes Paraclínicos</h1>
                        <p class="lead mb-0">Tecnología de precisión para diagnósticos ocupacionales exactos.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 15px;">
                    
                    <h3 class="font-weight-bold text-center text-corporate-blue mb-4 border-bottom pb-3">Servicios de Apoyo Diagnóstico</h3>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="para-list-item">
                                <i class="fa-solid fa-ear-listen"></i>
                                <span>Audiometría vía aérea</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-ear-listen"></i>
                                <span>Audiometría clínica</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-eye"></i>
                                <span>Visiometría</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-eye"></i>
                                <span>Optometría general</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-heart-circle-bolt"></i>
                                <span>Electrocardiograma</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-lungs"></i>
                                <span>Espirometría</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-x-ray"></i>
                                <span>Rayos X, ecografías, radiografías de tórax lectura ILO.</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-person-walking"></i>
                                <span>Valoración por fisioterapeuta</span>
                            </div>
                            <div class="para-list-item">
                                <i class="fa-solid fa-head-side-cough"></i>
                                <span>Valoración foniátrica</span>
                            </div>
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