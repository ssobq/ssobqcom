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

    <title>Exámenes de Laboratorio | SSO - CRC</title>

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

        /* Banner Superior con efecto Parallax */
        .hero-laboratorio {
            background-image: url("/img/servicios/examenLaboratorio/laboratorio-fondo-ssobq.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            padding: 80px 20px;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        /* Capa de color sobre la imagen para que el texto sea legible */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 64, 133, 0.85); /* Azul corporativo transparente */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Estilo moderno para la lista de exámenes */
        .lab-list-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .lab-list-item:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
        }

        .lab-list-item i {
            margin-top: 4px;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        .lab-list-item span {
            font-size: 1.05rem;
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
                <div class="hero-laboratorio shadow-sm d-flex align-items-center justify-content-center text-center">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white">
                        <i class="fa-solid fa-microscope fa-3x mb-3" style="color: #e10109;"></i>
                        <h1 class="display-4 font-weight-bold mb-3">Exámenes de Laboratorio</h1>
                        <p class="lead mb-0">Resultados rápidos, seguros y confiables para el bienestar de sus colaboradores.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 15px;">
                    
                    <h3 class="font-weight-bold text-center text-corporate-blue mb-5">Nuestro Catálogo de Pruebas</h3>
                    
                    <div class="row">
                        <div class="col-12 col-md-6 border-md-right pr-md-4">
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Pruebas de alcohol en sangre o en saliva</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Antígeno prostático</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Bilirrubina total y directa</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>BUN (Nitrógeno Ureico)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>BASC 2 drogas (Cocaína - Marihuana)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>BASC 3 drogas (Cocaína - Marihuana - Anfetaminas)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>BASC 5 drogas (Coc - Mar - Anf - Opiáceos - Metanfetaminas)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>BASC 10 drogas (Amp - Bar - Bzo - Coc - Mdma - Met - Mtd - Opi - Tca - Thc)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Creatinina</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Colesterol total</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Transaminasa GOT</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Transaminasa GPT</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 pl-md-4 mt-4 mt-md-0">
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Glicemia</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Triglicéridos</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Colinesterasa sérica</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Colinesterasa eritrocitaria</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Coprológico</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Extendido de sangre periférica</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Frotis de garganta</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Grupo sanguíneo y factor RH</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Hemograma tipo IV</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>KOH de uñas</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Parcial de orina</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Perfil lipídico</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial text-corporate-red"></i>
                                <span>Serología VDRL (KAHN)</span>
                            </div>
                            <div class="lab-list-item">
                                <i class="fa-solid fa-vial-circle-check text-corporate-blue"></i>
                                <span class="font-weight-bold">Entre otros exámenes especializados...</span>
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