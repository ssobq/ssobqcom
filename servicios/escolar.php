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

    <title>Paquetes Médicos Escolares en Barranquilla | SSO - CRC</title>
    <meta name="description" content="Exámenes médicos escolares en Barranquilla. Paquetes con visiometría, audiometría, optometría y examen médico general para certificados.">

    <style>
        /* Estilos específicos de la página */
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

        body {
            font-family: 'Open Sans', sans-serif;
        }
        
        strong {
            color: #004085;
        }
        
        .textoanuncio {
            color: white !important;
        }

        /* Estilo para el botón de WhatsApp en el pie */
        .btn-portal {
            transition: all 0.3s ease;
            background-color: #25D366;
            color: white;
            border: none;
        }
        
        .btn-portal:hover {
            background-color: #1ebe5d;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
            color: white;
        }

        /* Efecto hover para las tarjetas de los paquetes */
        .paquete-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .paquete-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        /* Alineación perfecta y margen izquierdo para los iconos de las listas */
        .icon-fixed-width {
            width: 30px;
            text-align: center;
            flex-shrink: 0;
            margin-left: 5px; /* Margen para separarlos del borde interno de la tarjeta */
        }
        .paquete-sin-card:hover {
            background-color: #004085;
        }
        .paquete-sin-card:hover strong {
            color: #ffffff;
        }
         .paquete-sin-card:hover span{
            color: #ffffff;
        }
        .paquete-sin-card:hover i{
            color: #ffffff;
        }
        .paquete-sin-card:hover p{
            color: #ffffff;
        }
        .paquete-sin-card:hover h4{
            color: #ffffff;
        }
         .paquete-prom-card:hover {
            background-color: #e10109;
        }
        .paquete-prom-card:hover strong {
            color: #ffffff;
        }
         .paquete-prom-card:hover span{
            color: #ffffff;
        }
        .paquete-prom-card:hover i{
            color: #ffffff;
        }
        .paquete-prom-card:hover p{
            color: #ffffff!important;
        }
        .paquete-prom-card:hover h4{
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        
        <!-- ========================================== -->
        <!-- ENCABEZADO Y DESCRIPCIÓN                   -->
        <!-- ========================================== -->
        <div class="row mb-4 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085; font-size: 2.5rem;">Paquetes Médicos Escolares</h1>
                <p class="lead mt-3">Asegure el certificado de sus hijos de forma rápida y confiable.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-12 col-lg-10 text-center">
                <p class="text-justify text-md-center" style="font-size: 1.1rem; line-height: 1.7; color: #444;">
                    El <strong>Perfil Escolar</strong> simplifica el proceso para cumplir con los requisitos de matrículas e instituciones educativas, ofreciendo evaluaciones médicas presenciales y entrega de certificados el mismo día. Contamos con dos opciones adaptadas a las necesidades de cada estudiante para garantizar su óptimo desarrollo y aprendizaje.
                </p>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- TARJETAS DE PAQUETES (UNA AL LADO DE OTRA) -->
        <!-- ========================================== -->
        <div class="row align-items-stretch mb-5">
            
            <!-- TARJETA 1: PAQUETE BÁSICO (CON PROMOCIÓN) -->
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="card border-0 shadow-sm w-100 h-100 paquete-card paquete-prom-card">
                    <!-- Cinta superior roja de promoción -->
                    <div class="text-white text-center py-2 font-weight-bold" style="background-color: #e10109; letter-spacing: 1px;">
                        <i class="fa-solid fa-gift mr-2"></i> ¡PROMOCIÓN 3X2!
                        <span class="d-block font-weight-normal mt-1" style="font-size: 0.75rem; letter-spacing: normal;"> ¡Promoción valida hasta el 31 de octubre!</span>
                    </div>
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <h4 class="font-weight-bold text-corporate-blue mb-4 text-center">Paquete Básico</h4>
                        
                        <ul class="list-unstyled mb-4 flex-grow-1">
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-user-doctor text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Examen Médico General:</strong> Evaluación física integral para certificar la aptitud del estudiante.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-ear-listen text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Audiometría:</strong> Evaluación de la capacidad auditiva, clave para el aprendizaje.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-eye text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Visiometría:</strong> Tamizaje visual preventivo.</span>
                            </li>
                        </ul>
                        
                        <!-- Caja de destaque de la promoción -->
                        <div class="p-3 rounded mt-auto">
                            <p class="mb-0 text-danger text-center font-weight-bold">
                                <i class="fa-solid fa-users mr-1"></i> ¡Paga 2 paquetes y asisten 3 estudiantes!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TARJETA 2: PAQUETE CON OPTOMETRÍA (SIN PROMOCIÓN) -->
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-sm w-100 h-100 paquete-card paquete-sin-card" style="border-top: 6px solid #004085 !important;">
                    <div class="card-body p-4 p-md-5 d-flex flex-column mt-2">
                        <h4 class="font-weight-bold text-corporate-blue mb-4 text-center">Paquete con Optometría</h4>
                        
                        <ul class="list-unstyled mb-4 flex-grow-1">
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-user-doctor text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Examen Médico General:</strong> Evaluación física integral para certificar la aptitud del estudiante.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-ear-listen text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Audiometría:</strong> Evaluación de la capacidad auditiva, clave para el aprendizaje.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="icon-fixed-width mr-3">
                                    <i class="fa-solid fa-glasses text-corporate-red" style="font-size: 1.2rem;"></i>
                                </div>
                                <span><strong>Optometría:</strong> Examen visual profundo con especialista para formulación de lentes.</span>
                            </li>
                        </ul>
                        
                        <!-- Aviso aclaratorio -->
                        <div class="p-3 rounded mt-auto">
                            <p class="mb-0 text-center small">
                                <i class="fa-solid fa-circle-info mr-1"></i> Este paquete es individual y no aplica para la promoción 3x2.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ========================================== -->
        <!-- INFORMACIÓN DE LA CITA                     -->
        <!-- ========================================== -->
        <div class="row mb-2">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-around text-center p-4 bg-white shadow-sm rounded" style="border: 1px solid #eaeaea;">
                    <div class="m-2">
                        <i class="fa-solid fa-location-dot mb-2 text-corporate-red" style="font-size: 1.5rem;"></i>
                        <p class="mb-0 font-weight-bold text-corporate-blue">Atención presencial</p>
                    </div>
                    <div class="m-2 border-left border-right px-4">
                        <i class="fa-solid fa-hands-holding-child mb-2 text-corporate-red" style="font-size: 1.5rem;"></i>
                        <p class="mb-0 font-weight-bold text-corporate-blue">Asistencia con adulto responsable</p>
                    </div>
                    <div class="m-2">
                        <i class="fa-solid fa-file-signature mb-2 text-corporate-red" style="font-size: 1.5rem;"></i>
                        <p class="mb-0 font-weight-bold text-corporate-blue">Certificado listo el mismo día</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- LLAMADO A LA ACCIÓN (BOTÓN WHATSAPP)       -->
        <!-- ========================================== -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="p-4 p-md-5 text-white rounded shadow-sm d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #003a8c;">
                    <h3 class="font-weight-bold mb-3">¿Listo para agendar?</h3>
                    <p class="mb-4" style="font-size: 1.1rem;">
                        <strong class="textoanuncio">Escríbenos para reservar tus citas y agilizar el proceso directamente desde WhatsApp.</strong>
                    </p>
                    <a href="https://wa.me/573153603621?text=Hola,%20deseo%20agendar%20citas%20para%20los%20Paquetes%20Escolares" target="_blank" class="btn btn-lg px-5 py-2 font-weight-bold rounded-pill shadow btn-portal">
                        <i class="fa-brands fa-whatsapp mr-2"></i> Agendar por WhatsApp
                    </a>
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