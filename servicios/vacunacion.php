<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <script src="https://kit.fontawesome.com/cf867249a1.js" crossorigin="anonymous"></script>

    <title>Vacunación | SSO - CRC</title>

    <style>
        #serviciosNav { color: #e10109 !important; font-weight: bold; }
        .text-corporate-blue { color: #004085; }
        
        .vac-card {
            border-radius: 15px;
            border: none;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 25px;
            border-left: 5px solid #004085;
        }

        .vac-icon { font-size: 2rem; color: #004085; margin-bottom: 15px; }
        
        .vac-list { list-style: none; padding: 0; }
        .vac-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
            color: #555;
            display: flex;
            align-items: flex-start;
        }
        .vac-list li i { margin-top: 6px; margin-right: 12px; color: #e10109; font-size: 0.8rem; }
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

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <i class="fa-solid fa-shield-virus vac-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Tétanos</h4>
                    <ul class="vac-list">
                        <li><i class="fa-solid fa-check"></i> Vía intramuscular (Deltoides).</li>
                        <li><i class="fa-solid fa-check"></i> Apta en niños y mujeres en embarazo.</li>
                        <li><i class="fa-solid fa-check"></i> Esquema de 3 dosis (protección por 10 años).</li>
                        <li><i class="fa-solid fa-check"></i> Adultos no vacunados: Esquema de 0, 1 y 6 meses.</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <i class="fa-solid fa-virus vac-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Hepatitis B</h4>
                    <ul class="vac-list">
                        <li><i class="fa-solid fa-check"></i> 1ª Dosis: Inicio de esquema.</li>
                        <li><i class="fa-solid fa-check"></i> 2ª Dosis: Al mes de la primera.</li>
                        <li><i class="fa-solid fa-check"></i> 3ª Dosis: Al mes de la segunda.</li>
                        <li><i class="fa-solid fa-check"></i> Refuerzo: Al año de la 3ª dosis y cada 5 años.</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <i class="fa-solid fa-mosquito vac-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Fiebre Amarilla</h4>
                    <ul class="vac-list">
                        <li><i class="fa-solid fa-check"></i> Inmunidad de por vida.</li>
                        <li><i class="fa-solid fa-check"></i> Recomendada para zonas de riesgo y viajes internacionales.</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card vac-card">
                    <i class="fa-solid fa-temperature-low vac-icon"></i>
                    <h4 class="text-corporate-blue font-weight-bold">Influenza</h4>
                    <ul class="vac-list">
                        <li><i class="fa-solid fa-check"></i> Vacunación anual obligatoria (a partir de 6 meses).</li>
                        <li><i class="fa-solid fa-check"></i> Aprobada para personas con patologías cardiacas.</li>
                        <li><i class="fa-solid fa-check"></i> La inmunidad se atenúa con el tiempo, requiere refuerzo anual.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-4">
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
</body>
</html>