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

    <title>Salud Visual y Optometría Ocupacional en Barranquilla | SSO - CRC</title>
    <meta name="description" content="Exámenes de salud visual y optometría ocupacional en Barranquilla: visiometría y valoración visual para el trabajo. SSO - CRC.">

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
        
        /* Estilos para los botones del acordeón */
        .accordion-item-btn {
            background: #fdfdfd;
            border: 1px solid #eaeaea;
            border-left: 4px solid #004085;
            border-radius: 10px;
            padding: 14px 18px;
            width: 100%;
            text-align: left;
            font-size: 0.95rem;
            font-weight: 700;
            color: #004085;
            transition: all 0.3s ease;
            box-shadow: none !important;
            display: block;
        }

        .accordion-item-btn:hover {
            background: #f8f9fa;
            border-left-color: #e10109;
            color: #e10109;
            text-decoration: none;
        }

        .accordion-item-btn.active-accordion {
            background: #f1f5fa;
            border-left-color: #e10109;
            color: #e10109;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        /* Cuerpo colapsable con la descripción */
        .accordion-item-body {
            background: #fff;
            border: 1px solid #eaeaea;
            border-top: none;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 15px 18px;
            font-size: 0.85rem;
            color: #000000;
            margin-bottom: 12px;
            line-height: 1.5;
            display: none; /* Controlado por JS */
            font-family: 'Open Sans', sans-serif;
        }

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

    </style>
</head>

<body class="bg-light">

    <?php include '../html/nav.html'; ?>

    <main class="container my-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 font-weight-bold text-corporate-blue">Salud Visual</h1>
                <p class="lead mt-3">Las mejores alternativas para tu visión y estilo.</p>
                <hr class="mx-auto" style="border: 2px solid #e10109; width: 80px;">
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img class="img-fluid rounded shadow-sm w-100" src="/img/servicios/saludVisual/valor-de-optometria-ssobq.jpg" alt="Optometría" loading="lazy">
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <!-- Contenedor 1: Tipos de Lentes -->
                    <div class="col-md-6 mb-4">
                        <div class="card visual-card shadow-sm">
                            <i class="fa-solid fa-glasses visual-icon"></i>
                            <h4 class="text-corporate-blue font-weight-bold mb-3">Tipos de Lentes</h4>
                            
                            <div class="accordion-group" data-group="lentes">
                                <!-- Ítem 1 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="lente1">Lentes Monofocales</button>
                                    <div id="lente1" class="accordion-item-body">
                                        Diseñados para corregir un solo campo de visión (lejos o cerca).
                                    </div>
                                </div>

                                <!-- Ítem 2 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="lente2">Lentes Bifocales</button>
                                    <div id="lente2" class="accordion-item-body">
                                        Divididos en dos zonas para ver claramente de lejos y de cerca en un solo lente.
                                    </div>
                                </div>

                                <!-- Ítem 3 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="lente3">Lentes Progresivos</button>
                                    <div id="lente3" class="accordion-item-body">
                                        Transición visual gradual y sin líneas divisorias para todas las distancias.
                                    </div>
                                </div>
                                <!-- Ítem 4 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="lenteSeguridad">Lentes de Seguridad</button>
                                    <div id="lenteSeguridad" class="accordion-item-body">
                                        Gafas diseñadas para proteger los ojos de los trabajadores contra cualquier tipo de riesgo en el entorno laboral.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenedor 2: Tratamientos -->
                    <div class="col-md-6 mb-4">
                        <div class="card visual-card shadow-sm">
                            <i class="fa-solid fa-shield-halved visual-icon"></i>
                            <h4 class="text-corporate-blue font-weight-bold mb-3">Tratamientos</h4>
                            
                            <div class="accordion-group" data-group="tratamientos">
                                <!-- Ítem 1 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="trat1">Policarbonato</button>
                                    <div id="trat1" class="accordion-item-body">
                                        Material ultra resistente a impactos, liviano y con protección UV.
                                    </div>
                                </div>

                                <!-- Ítem 2 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="trat2">Antireflejos</button>
                                    <div id="trat2" class="accordion-item-body">
                                        Elimina molestos brillos y reflejos de luz mejorando la nitidez visual.
                                    </div>
                                </div>

                                <!-- Ítem 5 -->
                                <div class="mb-2">
                                    <button type="button" class="accordion-item-btn" data-target="trat5">Transitions</button>
                                    <div id="trat5" class="accordion-item-body">
                                        Tecnología inteligente que protege de los rayos UVA y UVB emitidos por el sol.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                    <img class="img-fluid w-100" src="/img/servicios/saludVisual/monturas-de-gafas-ssobq.jpg" alt="Monturas de gafas" loading="lazy">
                </div>
            </div>
        </div>

        <div class="row mt-4 text-center">
            <div class="col-12">
                    <a href="https://wa.me/573018461574?text=Hola,%20deseo%20agendar%20citas%20para%20los%20Paquetes%20Escolares" target="_blank" class="btn btn-lg px-5 py-2 font-weight-bold rounded-pill shadow btn-portal">
                        <i class="fa-brands fa-whatsapp mr-2"></i> Agendar por WhatsApp
                    </a>
            </div>
        </div>

    </main>

    <?php include '../html/footer.html'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Script JavaScript para controlar el acordeón -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".accordion-item-btn");

            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    const targetId = this.getAttribute("data-target");
                    const targetBody = document.getElementById(targetId);
                    const groupContainer = this.closest(".accordion-group");

                    // Si ya está abierto, lo cerramos
                    const isOpen = targetBody.style.display === "block";

                    // Cerrar todos los elementos del mismo grupo primero (efecto acordeón exclusivo)
                    groupContainer.querySelectorAll(".accordion-item-body").forEach(body => {
                        body.style.display = "none";
                    });
                    groupContainer.querySelectorAll(".accordion-item-btn").forEach(btn => {
                        btn.classList.remove("active-accordion");
                    });

                    // Si no estaba abierto, lo abrimos
                    if (!isOpen) {
                        targetBody.style.display = "block";
                        this.classList.add("active-accordion");
                    }
                });
            });
        });
    </script>
</body>
</html>