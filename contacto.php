<!doctype html>
<html lang="es">

<head>
    <?php include 'html/analytics.html'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylo.css">

    <meta name="description" content="Contáctanos para agendar tus exámenes ocupacionales en Barranquilla. Teléfonos, WhatsApp y dirección de SSO - CRC Servicios de Salud Ocupacional.">
    <meta name="keywords" content="SSO, contacto sso, Sso, Servicios de salud ocupacional, SSO - CRC, directorio sso, salud en el trabajo, sso barranquilla, salud ocupacional barranquilla">

    <link rel="canonical" href="https://www.ssobq.com/contacto.php">

    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="SSO - CRC Servicios de Salud Ocupacional">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contacto | SSO - CRC">
    <meta property="og:description" content="Comuníquese con nuestros diferentes departamentos. En SSO - CRC estamos listos para atender sus solicitudes en salud ocupacional.">
    <meta property="og:url" content="https://www.ssobq.com/contacto.php">
    <meta property="og:image" content="https://www.ssobq.com/img/logo.png">

    <meta name="google-site-verification" content="PMbjD96NUeb_WmZZaNueqxxDQiH_kU5IXAGHMon5BQ0" />

    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Contacto y Agendamiento en Barranquilla | SSO - CRC</title>

    <style>
        /* Estilos específicos de esta página */
        #contactoNav {
            color: #e10109 !important;
            font-weight: bold;
        }

        .contact-card {
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 4px solid #004085;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 64, 133, 0.1) !important;
        }

        .quick-link {
            transition: color 0.2s ease;
        }

        .quick-link:hover {
            color: #e10109 !important;
            text-decoration: none;
        }

        .campo-trampa {
            position: absolute;
            left: -9999px;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-light">

    <?php include 'html/nav.html'; ?>

    <main class="container my-5">

        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold" style="color: #004085;">Contacto</h1>
                <p class="lead text-muted mt-3">Estamos aquí para brindarle la mejor atención. Seleccione el área que necesita.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <?php if (($_GET['estado'] ?? '') === 'enviado'): ?>
            <div class="row mb-4">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="alert alert-success text-center" role="alert">
                        <i class="fa-solid fa-circle-check mr-2"></i>
                        ¡Mensaje enviado! Te responderemos lo antes posible.
                    </div>
                </div>
            </div>
        <?php elseif (($_GET['estado'] ?? '') === 'error'): ?>
            <div class="row mb-4">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="alert alert-danger text-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation mr-2"></i>
                        No se pudo enviar el mensaje. Revisa los datos e intenta de nuevo, o escríbenos directo a una de las áreas de abajo.
                    </div>
                </div>
            </div>
        <?php endif; ?>



        <section class="row mb-5 align-items-stretch">

            <div class="col-12 col-lg-5 mb-4 mb-lg-0 d-flex">
                <div class="card border-0 shadow-sm w-100 p-4 p-md-5" style="border-radius: 15px; background-color: #004085; color: white;">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa-solid fa-building fa-3x mr-3 text-white"></i>
                        <h2 class="font-weight-bold mb-0">Sede Principal</h2>
                    </div>

                    <div class="mt-2">
                        <div class="d-flex mb-3 align-items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3" style="font-size: 1.5rem; color: #e10109;"></i>
                            <div>
                                <h5 class="mb-1 font-weight-bold">Dirección</h5>
                                <p class="mb-0 text-light" style="font-size: 1.1rem;">Cra. 49 # 74 - 77 / 91<br>Barrio: América<br>Barranquilla, Atlántico - Colombia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7 d-flex">
                <div class="w-100 shadow-sm" style="border-radius: 15px; overflow: hidden; background: #fff; min-height: 300px;">
                    <div class="embed-responsive embed-responsive-16by9 h-100">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.17460198895!2d-74.8067933!3d10.9977773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8509e5903c8308f!2sSERVICIOS+DE+SALUD+OCUPACIONAL+S.A.S.!5e0!3m2!1ses!2sco!4v1564246619674!5m2!1ses!2sco" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </section>

        <div class="row mt-5 mb-4">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold text-uppercase mb-4" style="color: #004085;">Directorio de Áreas</h2>
            </div>
        </div>

        <div class="row align-items-stretch">

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Administrativa y Financiera</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Solicitud certificaciones comerciales, información legal.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Daniel Badillo</span>
                            <span class="small text-secondary">Director Administrativo y Financiero</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:administrativa@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> administrativa@ssobq.com</a>
                            <a href="https://wa.me/573104240457" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 310 424 0457</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 105</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Admisiones</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Solicitud de programación para citas.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Juan Madrid</span>
                            <span class="small text-secondary">Líder de admisiones</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:orden@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> orden@ssobq.com</a>
                            <a href="https://wa.me/573015220695" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 301 522 0695</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 101</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Cartera</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Estados de cuenta y envío de soportes de pago.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Sergio Orozco</span>
                            <span class="small text-secondary">Asistente Administrativo y Financiero</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:cartera@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> cartera@ssobq.com</a>
                            <a href="https://wa.me/573042725329" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 304 272 5329</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 115</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">CRC (Conductores)</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Atención al cliente Centro de Reconocimiento.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Fabian Ramirez</span>
                            <span class="small text-secondary">Coordinador CRC</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:administracioncrc@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> administracioncrc@ssobq.com</a>
                            <a href="https://wa.me/573157400411" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 315 740 0411</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 104</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Conceptos</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Solicitud de resultados o certificados de aptitud.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Karen Guerra</span>
                            <span class="small text-secondary">Gestora de Servicios</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:resultados@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> resultados@ssobq.com</a>
                            <a href="https://wa.me/573042725330" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 304 272 5330</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 108</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Gestión Comercial</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Cotizaciones y jornadas de salud empresarial.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Alexandra Molinares</span>
                            <span class="small text-secondary">Gestora Comercial</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:gestioncomercial@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> gestioncomercial@ssobq.com</a>
                            <a href="https://wa.me/573153603621" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 315 360 3621</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 115</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Regionales</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Atención para la red nacional.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Sheyla Carrillo</span>
                            <span class="small text-secondary">Atención al Usuario</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:regional@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> regional@ssobq.com</a>
                            <a href="https://wa.me/573146162308" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 314 616 2308</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 104</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card contact-card border-0 shadow-sm h-100 p-3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="font-weight-bold mb-1" style="color: #004085;">Servicios</h5>
                        <p class="text-muted small mb-3 border-bottom pb-2">Atención VIP y casos particulares del servicio.</p>

                        <div class="mb-3">
                            <span class="font-weight-bold d-block text-dark">Adriana Leal</span>
                            <span class="small text-secondary">Directora de Servicios</span>
                        </div>

                        <div class="mt-auto">
                            <a href="mailto:dir.servicios@ssobq.com" class="d-block mb-2 text-dark quick-link"><i class="fa-solid fa-envelope mr-2 text-danger"></i> dir.servicios@ssobq.com</a>
                            <a href="https://wa.me/573157562998" target="_blank" class="d-block mb-1 text-dark quick-link"><i class="fa-brands fa-whatsapp mr-2 text-success"></i> 315 756 2998</a>
                            <span class="text-muted small"><i class="fa-solid fa-phone mr-1"></i> (605) 332 7294 - Ext. 107</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <section id="formulario-contacto" class="row mb-5 justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 15px;">
                    <h2 class="font-weight-bold text-center mb-4" style="color: #004085;">Escríbenos</h2>
                    <form action="procesar-contacto.php" method="POST" novalidate>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre completo *</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="120">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="correo">Correo electrónico *</label>
                                <input type="email" class="form-control" id="correo" name="correo" required maxlength="150">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telefono">Teléfono (opcional)</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="30">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="area">¿A qué área te diriges? *</label>
                                <select class="form-control" id="area" name="area" required>
                                    <option value="" selected disabled>Selecciona un área</option>
                                    <option value="administrativa">Administrativa y Financiera</option>
                                    <option value="admisiones">Admisiones (citas)</option>
                                    <option value="cartera">Cartera</option>
                                    <option value="crc">CRC (Conductores)</option>
                                    <option value="conceptos">Conceptos / Certificados de aptitud</option>
                                    <option value="comercial">Gestión Comercial</option>
                                    <option value="regionales">Regionales</option>
                                    <option value="servicios">Servicios / Atención VIP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje *</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required maxlength="2000"></textarea>
                        </div>

                        <!-- Campo trampa anti-spam: invisible para personas, los bots suelen llenarlo -->
                        <div class="campo-trampa" aria-hidden="true">
                            <label for="sitio_web">No llenar este campo</label>
                            <input type="text" id="sitio_web" name="sitio_web" tabindex="-1" autocomplete="off">
                        </div>

                        <button type="submit" class="btn btn-block font-weight-bold rounded-pill shadow-sm" style="background-color: #e10109; color: white; padding: 12px 0;">
                            <i class="fa-solid fa-paper-plane mr-2"></i> Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <?php include 'html/footer.html'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>