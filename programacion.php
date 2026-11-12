<?php
$isEnglish = ($examplesLanguage ?? 'es') === 'en';

$solutions = [
    [
        'id' => 'cabany',
        'category' => 'Marketplace Turístico',
        'title' => 'CABANY Project',
        'subtitle' => 'Hospedajes, experiencias y operación turística en una experiencia digital completa.',
        'description' => 'Mockup funcional en español para explorar alojamientos, solicitar reservas, registrar proveedores y revisar la operación desde paneles dedicados.',
        'image' => 'assets/img/cabany-preview.svg',
        'alt' => 'Vista previa del marketplace turístico CABANY Project',
        'tags' => ['Marketplace', 'Reservas', 'Paneles'],
        'highlights' => [
            'Catálogo de alojamientos con búsqueda, filtros y favoritos.',
            'Solicitud de reserva asistida con validación de fechas.',
            'Registro de proveedores y flujo de aprobación de publicaciones.',
            'Paneles diferenciados para cliente, propietario y administración.',
        ],
        'note' => 'Ejemplo funcional en español con datos demostrativos y navegación entre las principales vistas del producto.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './cabany preview.html',
                'label' => 'Abrir ejemplo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'lopdp',
        'category' => 'Privacidad y Cumplimiento',
        'title' => 'Portal de Proteccion de Datos',
        'subtitle' => 'LOPDP para organizaciones que necesitan evidencia, trazabilidad y autoservicio.',
        'description' => 'Centraliza politicas, consentimientos, solicitudes y seguimiento del tratamiento de datos en una experiencia clara para usuarios y equipos internos.',
        'image' => 'assets/img/lopdp.jpg',
        'alt' => 'Vista del portal de proteccion de datos personales',
        'tags' => ['LOPDP', 'Portal web', 'Cumplimiento'],
        'highlights' => [
            'Portal de privacidad con informacion organizada para titulares y responsables.',
            'Gestion de solicitudes y derechos del titular con trazabilidad.',
            'Espacios para politicas, consentimientos, avisos y evidencias.',
            'Base pensada para ajustarse a flujos reales de cumplimiento.',
        ],
        'note' => 'Adaptado a la normativa ecuatoriana. El alcance final depende del numero de modulos y servicios requeridos.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './portal_lopdp.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'ml',
        'category' => 'Machine Learning',
        'title' => 'Sistema Integral de Riesgo Crediticio',
        'subtitle' => 'Scoring, trazabilidad operativa y analitica aplicada a cartera.',
        'description' => 'Un sistema pensado para importar informacion, evaluar clientes, revisar lotes y tomar decisiones con apoyo de modelos entrenados y reglas de negocio.',
        'image' => 'assets/img/modelo_risk.jpg',
        'alt' => 'Panel de riesgo crediticio con analitica y scoring',
        'tags' => ['ML', 'Scoring', 'Finanzas'],
        'highlights' => [
            'Dashboard con KPIs, alertas y evolucion mensual del riesgo.',
            'Importacion de datos con trazabilidad por batch y usuario.',
            'Ficha completa de cliente, credito y reevaluaciones historicas.',
            'Scoring predictivo con probabilidad, contraste y clasificacion.',
        ],
        'note' => 'Puede desplegarse por modulos para equipos de credito, analitica o auditoria.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './modelo_risk_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
            [
                'type' => 'modal',
                'target' => '#videoModalRisk',
                'label' => 'Ver video',
                'icon' => 'bi bi-play-circle-fill',
                'class' => 'btn btn-outline-secondary',
            ],
        ],
    ],
    [
        'id' => 'ocr',
        'category' => 'Gestion Documental + OCR',
        'title' => 'Sistema Documental con OCR e Intranet',
        'subtitle' => 'Captura, lectura y gestion segura de documentos sin exposicion externa.',
        'description' => 'Digitaliza procesos documentales internos con extraccion automatica de datos, control operativo y administracion cerrada en red local.',
        'image' => 'assets/img/gestor.jpg',
        'alt' => 'Sistema documental con OCR y administracion interna',
        'tags' => ['OCR', 'Intranet', 'Automatizacion'],
        'highlights' => [
            'Panel operativo con indicadores, alertas y seguimiento.',
            'Carga y clasificacion documental con trazabilidad completa.',
            'Extraccion de datos y apoyo a validaciones de procesos.',
            'Arquitectura pensada para intranet sin acceso externo.',
        ],
        'note' => 'Adecuado para organizaciones que priorizan control interno, confidencialidad y velocidad de consulta.',
        'actions' => [
            [
                'type' => 'modal',
                'target' => '#videoModalGestor',
                'label' => 'Ver video',
                'icon' => 'bi bi-play-circle-fill',
                'class' => 'btn btn-outline-secondary',
            ],
        ],
    ],
    [
        'id' => 'erp',
        'category' => 'Sistemas de Informacion',
        'title' => 'Plataformas Contables, Inventario y Facturacion',
        'subtitle' => 'Operacion multiempresa con foco en control, tributacion y reportes.',
        'description' => 'Modelamos sistemas administrativos para procesos de facturacion, contabilidad, libros, reportes y obligaciones tributarias con estructura escalable.',
        'image' => 'assets/img/contable.jpg',
        'alt' => 'Sistema contable con modulos financieros y tributarios',
        'tags' => ['ERP', 'Facturacion', 'Multiempresa'],
        'highlights' => [
            'Dashboard con comprobantes recientes y alertas tributarias.',
            'Libro diario, mayor general y plan de cuentas NIIF.',
            'Facturacion electronica y control de IVA, retenciones y formularios.',
            'Reportes financieros con enfoque operativo y de cumplimiento.',
        ],
        'note' => 'Adaptado a normativa ecuatoriana: RUC, IVA, formularios SRI y NIIF PYMES.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './contable_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'gobernanza',
        'category' => 'Gobernanza Digital',
        'title' => 'Gestion Ambiental y Seguimiento de Cumplimiento',
        'subtitle' => 'Operacion ambiental, auditoria y control multiempresa en un solo entorno.',
        'description' => 'Construimos tableros y flujos para PMA, auditorias, residuos, monitoreos y reportes, con prioridades y evidencias visibles para todo el equipo.',
        'image' => 'assets/img/gobernanza.jpg',
        'alt' => 'Plataforma de gobernanza y gestion ambiental',
        'tags' => ['Auditoria', 'Ambiental', 'Trazabilidad'],
        'highlights' => [
            'KPIs de cumplimiento, alertas criticas y cronologia de actividades.',
            'Seguimiento de PMA con carga de evidencias por area.',
            'Monitoreos, auditorias e informes con historial operativo.',
            'Calendario y gestion multiempresa por sede o proyecto.',
        ],
        'note' => 'El modelo tambien puede adaptarse a riesgos, control interno o seguimiento normativo sectorial.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './gobernanza_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'movil',
        'category' => 'Movil',
        'title' => 'Apps Android e iOS para Operacion en Campo',
        'subtitle' => 'Experiencias moviles conectadas a procesos reales, incluso offline.',
        'description' => 'Aplicaciones para captura de evidencia, gestion de tareas, sincronizacion y consulta rapida de informacion critica desde terreno.',
        'image' => 'assets/img/movil_mockup.jpg',
        'alt' => 'Aplicacion movil para gestion operativa en campo',
        'tags' => ['Android', 'iOS', 'Offline-first'],
        'highlights' => [
            'Dashboard inicial con tareas, alertas y estado operativo.',
            'Detalle tecnico por obligacion, proyecto o proceso.',
            'Captura guiada de evidencia con metadatos.',
            'Sincronizacion diferida y operacion offline-first.',
        ],
        'note' => 'Ideal para equipos de campo, supervision, auditoria o levantamiento de informacion.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './movil_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'educacion',
        'category' => 'Educacion + IA',
        'title' => 'Control Academico y Analitica Educativa',
        'subtitle' => 'Indicadores, rendimiento y acompanamiento con apoyo de IA.',
        'description' => 'Paneles pensados para instituciones que necesitan revisar rendimiento, detectar riesgo academico y activar acciones con mayor velocidad.',
        'image' => 'assets/img/academico.jpg',
        'alt' => 'Plataforma educativa con paneles y analitica academica',
        'tags' => ['Educacion', 'Analitica', 'IA'],
        'highlights' => [
            'KPIs academicos, ranking y alertas por rendimiento.',
            'Graficas comparativas, linea de tendencia y heatmap.',
            'Busquedas en tiempo real por estudiante, materia o curso.',
            'Asistente IA para consultas y lectura ejecutiva del grupo.',
        ],
        'note' => 'Puede integrarse con flujos de seguimiento docente, coordinacion o calidad educativa.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './academico_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
];

$musicastScreens = [
    ['icon' => 'bi bi-music-note-beamed', 'name' => 'Splash / Bienvenida'],
    ['icon' => 'bi bi-person-plus-fill',  'name' => 'Registro Cliente / Proveedor'],
    ['icon' => 'bi bi-shield-lock-fill',  'name' => 'Login con autenticacion social'],
    ['icon' => 'bi bi-house-heart-fill',  'name' => 'Home con categorias y proveedores'],
    ['icon' => 'bi bi-funnel-fill',       'name' => 'Busqueda con filtros por genero'],
    ['icon' => 'bi bi-images',            'name' => 'Detalle del proveedor con galeria'],
    ['icon' => 'bi bi-calendar2-check',   'name' => 'Formulario de reserva (paso 1/3)'],
    ['icon' => 'bi bi-credit-card-2-front-fill', 'name' => 'Pasarela de pago (3 metodos)'],
    ['icon' => 'bi bi-patch-check-fill',  'name' => 'Confirmacion con numero de reserva'],
    ['icon' => 'bi bi-person-circle',     'name' => 'Perfil completo del usuario'],
];

$videoModals = [
    [
        'id' => 'videoModalRisk',
        'title' => 'Video - Sistema de Riesgo Crediticio',
        'poster' => 'assets/img/modelo_risk.jpg',
        'src' => 'assets/video/video_riesgo.mp4',
    ],
    [
        'id' => 'videoModalGestor',
        'title' => 'Video - Sistema de Gestion Documental + OCR + LAN',
        'poster' => 'assets/img/gestor.jpg',
        'src' => 'assets/video/video_gestor.mp4',
    ],
];

$demoCount = 0;
foreach ($solutions as $solution) {
    foreach ($solution['actions'] as $action) {
        if ($action['type'] === 'link') {
            $demoCount++;
        }
    }
}

$videoCount = count($videoModals);
$solutionCount = count($solutions);

$carouselExamples = [];
foreach ($solutions as $solution) {
    $href = '#' . $solution['id'];
    foreach ($solution['actions'] as $action) {
        if ($action['type'] === 'link') {
            $href = $action['href'];
            break;
        }
    }

    $carouselExamples[] = [
        'category' => $solution['category'],
        'title' => $solution['title'],
        'subtitle' => $solution['subtitle'],
        'image' => $solution['image'],
        'alt' => $solution['alt'],
        'tags' => $solution['tags'],
        'href' => $href,
    ];
}

$carouselExamples[] = [
    'category' => 'App Móvil',
    'title' => 'MUSICAST',
    'subtitle' => 'Marketplace móvil para descubrir y reservar servicios musicales.',
    'image' => 'assets/img/services/musicast.jpg',
    'alt' => 'Vista previa de la aplicación móvil MUSICAST',
    'tags' => ['App móvil', 'Marketplace', 'Reservas'],
    'href' => './musicast.php',
];

if ($isEnglish) {
    $englishExamples = [
        'CABANY Project' => ['category' => 'Tourism Marketplace', 'subtitle' => 'Lodging, experiences and tourism operations in one complete digital journey.', 'tags' => ['Marketplace', 'Bookings', 'Dashboards']],
        'Portal de Proteccion de Datos' => ['category' => 'Privacy & Compliance', 'title' => 'Data Protection Portal', 'subtitle' => 'LOPDP workflows for organizations that need evidence, traceability and self-service.', 'tags' => ['LOPDP', 'Web portal', 'Compliance']],
        'Sistema Integral de Riesgo Crediticio' => ['category' => 'Machine Learning', 'title' => 'Credit Risk Management System', 'subtitle' => 'Scoring, operational traceability and portfolio analytics.', 'tags' => ['ML', 'Scoring', 'Finance']],
        'Sistema Documental con OCR e Intranet' => ['category' => 'Document Management + OCR', 'title' => 'OCR Document & Intranet System', 'subtitle' => 'Secure document capture, reading and management without external exposure.', 'tags' => ['OCR', 'Intranet', 'Automation']],
        'Plataformas Contables, Inventario y Facturacion' => ['category' => 'Information Systems', 'title' => 'Accounting, Inventory & Billing Platform', 'subtitle' => 'Multi-company operations focused on control, taxation and reporting.', 'tags' => ['ERP', 'Billing', 'Multi-company']],
        'Gestion Ambiental y Seguimiento de Cumplimiento' => ['category' => 'Digital Governance', 'title' => 'Environmental & Compliance Management', 'subtitle' => 'Environmental operations, auditing and multi-company control in one environment.', 'tags' => ['Auditing', 'Environment', 'Traceability']],
        'Apps Android e iOS para Operacion en Campo' => ['category' => 'Mobile', 'title' => 'Android & iOS Field Operations Apps', 'subtitle' => 'Mobile experiences connected to real workflows, including offline operation.', 'tags' => ['Android', 'iOS', 'Offline-first']],
        'Control Academico y Analitica Educativa' => ['category' => 'Education + AI', 'title' => 'Academic Management & Learning Analytics', 'subtitle' => 'Performance indicators and student support powered by AI.', 'tags' => ['Education', 'Analytics', 'AI']],
        'MUSICAST' => ['category' => 'Mobile App', 'subtitle' => 'A mobile marketplace for discovering and booking music services.', 'tags' => ['Mobile app', 'Marketplace', 'Bookings']],
    ];

    foreach ($carouselExamples as &$example) {
        $sourceTitle = $example['title'];
        if (!isset($englishExamples[$sourceTitle])) {
            continue;
        }
        $translated = $englishExamples[$sourceTitle];
        $example['category'] = $translated['category'];
        $example['title'] = $translated['title'] ?? $sourceTitle;
        $example['subtitle'] = $translated['subtitle'];
        $example['tags'] = $translated['tags'];
    }
    unset($example);
}

$exampleCount = count($carouselExamples);
$pageTitle = $isEnglish ? 'Software, AI & App Examples — Green PC' : 'Ejemplos de Software, IA y Apps — Green PC';
$pageDescription = $isEnglish
    ? 'Explore functional Green PC examples: marketplaces, portals, web systems, OCR, machine learning, mobile apps and operational platforms.'
    : 'Explora ejemplos funcionales de Green PC: marketplaces, portales, sistemas web, OCR, machine learning, apps móviles y plataformas operativas.';
$pageUrl = $isEnglish ? 'https://greenpc.dev/examples.php' : 'https://greenpc.dev/programacion.php';
?>
<!DOCTYPE html>
<html lang="<?= $isEnglish ? 'en' : 'es'; ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $pageTitle; ?></title>
  <meta name="description" content="<?= $pageDescription; ?>">
  <meta name="keywords" content="<?= $isEnglish ? 'software examples, web demos, marketplace, machine learning, OCR, mobile apps, Green PC' : 'ejemplos software, demos web, marketplace, machine learning, OCR, apps móviles, Green PC'; ?>">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#071729">
  <meta property="og:title" content="<?= $pageTitle; ?>">
  <meta property="og:description" content="<?= $pageDescription; ?>">
  <meta property="og:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="1280">
  <meta property="og:image:alt" content="<?= $isEnglish ? 'Green PC functional software examples' : 'Ejemplos funcionales de software de Green PC'; ?>">
  <meta property="og:url" content="<?= $pageUrl; ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Green PC">
  <meta property="og:locale" content="<?= $isEnglish ? 'en_US' : 'es_EC'; ?>">
  <meta property="og:locale:alternate" content="<?= $isEnglish ? 'es_EC' : 'en_US'; ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $pageTitle; ?>">
  <meta name="twitter:description" content="<?= $pageDescription; ?>">
  <meta name="twitter:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <link rel="canonical" href="<?= $pageUrl; ?>">
  <link rel="alternate" hreflang="es" href="https://greenpc.dev/programacion.php">
  <link rel="alternate" hreflang="en" href="https://greenpc.dev/examples.php">
  <link rel="alternate" hreflang="x-default" href="https://greenpc.dev/examples.php">
  <link rel="preload" as="image" href="assets/img/hero-bg.jpg" fetchpriority="high">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": <?= json_encode($pageTitle, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
    "description": <?= json_encode($pageDescription, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
    "url": <?= json_encode($pageUrl, JSON_UNESCAPED_SLASHES); ?>,
    "isPartOf": {"@type": "WebSite", "name": "Green PC", "url": "https://greenpc.dev/"},
    "inLanguage": "<?= $isEnglish ? 'en' : 'es'; ?>",
    "numberOfItems": <?= $exampleCount; ?>
  }
  </script>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/main.css?v=20261111-15" rel="stylesheet">

  <style>
    .programming-page {
      --program-surface: #f5f9ff;
      --program-border: rgba(52, 152, 219, 0.18);
      --program-shadow: 0 24px 60px rgba(11, 36, 69, 0.12);
      --program-dark: #061728;
      --program-emerald: #00a67d;
    }

    .programming-page .main {
      overflow: clip;
    }

    .floating-commit {
      position: fixed;
      right: 18px;
      bottom: 18px;
      z-index: 999;
      display: inline-flex;
    }

    .floating-commit__link {
      display: block;
      text-decoration: none;
    }

    .floating-commit__img {
      width: min(220px, 34vw);
      border-radius: 16px;
      border: 1px solid rgba(0, 230, 118, 0.22);
      box-shadow: 0 0 0 0 rgba(0, 230, 118, 0);
      transition: box-shadow 0.3s ease, transform 0.2s ease, border-color 0.3s ease;
      will-change: transform;
      display: block;
      background: rgba(6, 23, 40, 0.7);
      backdrop-filter: blur(8px);
    }

    .program-hero {
      min-height: 100vh;
      max-height: none;
      padding: 168px 0 110px;
    }

    .program-hero::before {
      background:
        radial-gradient(circle at 15% 20%, rgba(0, 230, 118, 0.18), transparent 28%),
        radial-gradient(circle at 85% 18%, rgba(52, 152, 219, 0.32), transparent 32%),
        linear-gradient(135deg, rgba(3, 9, 18, 0.96), rgba(7, 23, 41, 0.82));
    }

    .program-hero__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.88);
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .program-hero h1 {
      font-family: var(--nav-font);
      font-size: clamp(2.6rem, 4.8vw, 4.9rem);
      line-height: 1.02;
      margin-bottom: 18px;
      color: #fff;
    }

    .program-hero p {
      font-size: 1.08rem;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.82);
      margin-bottom: 0;
      max-width: 700px;
    }

    .program-hero__actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 32px;
    }

    .program-hero__actions .btn {
      min-width: 190px;
      padding: 14px 24px;
      border-radius: 999px;
      font-weight: 600;
      border-width: 1px;
      box-shadow: 0 14px 32px rgba(0, 0, 0, 0.18);
    }

    .program-hero__actions .btn-primary {
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
      border-color: transparent;
    }

    .program-hero__actions .btn-outline-light {
      background: rgba(255, 255, 255, 0.05);
      border-color: rgba(255, 255, 255, 0.28);
    }

    .program-hero__stats {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 16px;
      margin-top: 34px;
    }

    .program-stat {
      padding: 18px 18px 16px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }

    .program-stat strong {
      display: block;
      color: #fff;
      font-size: 1.8rem;
      line-height: 1;
      margin-bottom: 8px;
      font-family: var(--heading-font);
    }

    .program-stat span {
      color: rgba(255, 255, 255, 0.72);
      font-size: 0.95rem;
    }

    .program-hero__panel {
      position: relative;
      padding: 28px;
      border-radius: 30px;
      background: linear-gradient(180deg, rgba(8, 24, 42, 0.88), rgba(8, 18, 31, 0.72));
      border: 1px solid rgba(255, 255, 255, 0.09);
      box-shadow: 0 30px 70px rgba(0, 0, 0, 0.24);
      overflow: hidden;
    }

    .program-hero__panel::before {
      content: "";
      position: absolute;
      inset: auto -70px -70px auto;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 230, 118, 0.24), transparent 70%);
      pointer-events: none;
    }

    .program-hero__panel h2 {
      margin-bottom: 12px;
      font-size: 1.35rem;
      color: #fff;
    }

    .program-hero__panel p {
      font-size: 0.98rem;
      color: rgba(255, 255, 255, 0.74);
      line-height: 1.75;
    }

    .program-hero__checklist {
      list-style: none;
      padding: 0;
      margin: 24px 0 0;
      display: grid;
      gap: 12px;
    }

    .program-hero__checklist li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: rgba(255, 255, 255, 0.84);
      font-size: 0.96rem;
      line-height: 1.65;
    }

    .program-hero__checklist i {
      color: #8df4c7;
      font-size: 1.05rem;
      margin-top: 4px;
    }

    .solutions-section {
      position: relative;
      background:
        radial-gradient(circle at top right, rgba(52, 152, 219, 0.08), transparent 28%),
        linear-gradient(180deg, #ffffff, #f6fbff 46%, #eef6fc 100%);
    }

    .solutions-jump-nav {
      position: sticky;
      top: 82px;
      z-index: 12;
      margin-bottom: 34px;
      padding: 14px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.86);
      border: 1px solid rgba(15, 23, 42, 0.08);
      box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);
      backdrop-filter: blur(14px);
    }

    .solutions-jump-nav__label {
      display: block;
      font-size: 0.85rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #60758a;
      margin-bottom: 12px;
      font-weight: 700;
    }

    .solutions-jump-nav__items {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .solutions-jump-nav__items a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      border-radius: 999px;
      color: #17324d;
      background: #edf6ff;
      border: 1px solid transparent;
      font-weight: 600;
      font-size: 0.95rem;
    }

    .solutions-jump-nav__items a:hover {
      color: #0b2033;
      background: #dff0ff;
      border-color: rgba(52, 152, 219, 0.18);
      transform: translateY(-1px);
    }

    .examples-showcase {
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 10% 15%, rgba(80, 224, 201, 0.12), transparent 28%),
        linear-gradient(180deg, #071727, #0b2236);
    }

    .examples-showcase .section-title h2,
    .examples-showcase .section-title p {
      color: #fff;
    }

    .examples-swiper {
      overflow: visible;
      padding: 12px 0 68px;
    }

    .examples-swiper .swiper-slide {
      height: auto;
    }

    .example-slide {
      display: grid;
      grid-template-columns: minmax(0, 1.08fr) minmax(330px, .92fr);
      min-height: 500px;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 30px;
      background: rgba(255, 255, 255, 0.07);
      box-shadow: 0 34px 85px rgba(0, 0, 0, 0.26);
    }

    .example-slide__visual {
      position: relative;
      min-height: 500px;
      overflow: hidden;
      background: #10243a;
    }

    .example-slide__visual::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, transparent 55%, rgba(7, 23, 39, 0.72));
      pointer-events: none;
    }

    .example-slide__visual img {
      width: 100%;
      height: 100%;
      min-height: 500px;
      object-fit: cover;
      transition: transform .8s ease;
    }

    .example-slide:hover .example-slide__visual img {
      transform: scale(1.035);
    }

    .example-slide__category {
      position: absolute;
      top: 22px;
      left: 22px;
      z-index: 2;
      padding: 8px 13px;
      border: 1px solid rgba(255, 255, 255, .28);
      border-radius: 999px;
      color: #fff;
      background: rgba(6, 23, 40, .7);
      font-size: .74rem;
      font-weight: 800;
      letter-spacing: .08em;
      text-transform: uppercase;
      backdrop-filter: blur(10px);
    }

    .example-slide__content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: clamp(30px, 5vw, 58px);
      color: #fff;
    }

    .example-slide__count {
      color: #78ead9;
      font-size: .78rem;
      font-weight: 800;
      letter-spacing: .12em;
      text-transform: uppercase;
    }

    .example-slide__content h3 {
      margin: 14px 0 14px;
      color: #fff;
      font-size: clamp(2rem, 4vw, 3.4rem);
      font-weight: 800;
      line-height: 1.03;
    }

    .example-slide__content p {
      margin: 0;
      color: rgba(255, 255, 255, .74);
      font-size: 1rem;
      line-height: 1.75;
    }

    .example-slide__tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin: 22px 0 28px;
    }

    .example-slide__tags span {
      padding: 7px 11px;
      border: 1px solid rgba(120, 234, 217, .24);
      border-radius: 999px;
      color: #9bf0e3;
      background: rgba(80, 224, 201, .08);
      font-size: .76rem;
      font-weight: 700;
    }

    .example-slide__action {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      align-self: flex-start;
      gap: 9px;
      padding: 13px 18px;
      border-radius: 999px;
      color: #071a29;
      background: #50e0c9;
      font-weight: 800;
      transition: transform .3s ease, background .3s ease;
    }

    .example-slide__action:hover {
      transform: translateY(-2px);
      color: #071a29;
      background: #fff;
    }

    .examples-swiper .swiper-pagination-bullet {
      width: 10px;
      height: 10px;
      background: rgba(255, 255, 255, .45);
      opacity: 1;
    }

    .examples-swiper .swiper-pagination-bullet-active {
      width: 28px;
      border-radius: 999px;
      background: #50e0c9;
    }

    .examples-swiper .examples-prev,
    .examples-swiper .examples-next {
      width: 46px;
      height: 46px;
      border: 1px solid rgba(255, 255, 255, .18);
      border-radius: 50%;
      color: #fff;
      background: rgba(7, 23, 39, .76);
      backdrop-filter: blur(10px);
    }

    .examples-swiper .examples-prev::after,
    .examples-swiper .examples-next::after {
      font-size: 16px;
      font-weight: 800;
    }

    @media (max-width: 991px) {
      .example-slide {
        grid-template-columns: 1fr;
      }

      .example-slide__visual,
      .example-slide__visual img {
        min-height: 360px;
      }

      .example-slide__visual::after {
        background: linear-gradient(180deg, transparent 62%, rgba(7, 23, 39, .72));
      }
    }

    @media (max-width: 575px) {
      .example-slide {
        border-radius: 22px;
      }

      .example-slide__visual,
      .example-slide__visual img {
        min-height: 255px;
      }

      .example-slide__content {
        padding: 28px 22px 34px;
      }

      .examples-swiper .examples-prev,
      .examples-swiper .examples-next {
        display: none;
      }
    }

    .solution-card {
      scroll-margin-top: 122px;
      margin-bottom: 34px;
      border-radius: 34px;
      overflow: hidden;
      border: 1px solid var(--program-border);
      background: rgba(255, 255, 255, 0.92);
      box-shadow: var(--program-shadow);
    }

    .solution-card__media {
      position: relative;
      min-height: 100%;
      background: #0b2033;
    }

    .solution-card__media img {
      width: 100%;
      height: 100%;
      min-height: 320px;
      object-fit: cover;
      display: block;
    }

    .solution-card__overlay {
      position: absolute;
      inset: auto 18px 18px 18px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .solution-card__overlay span,
    .solution-chip {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(6, 23, 40, 0.8);
      border: 1px solid rgba(255, 255, 255, 0.14);
      color: #fff;
      font-size: 0.84rem;
      font-weight: 600;
      backdrop-filter: blur(10px);
    }

    .solution-card__content {
      padding: 34px;
    }

    .solution-card__kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
      color: #43637f;
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .solution-card__kicker::before {
      content: "";
      width: 28px;
      height: 1px;
      background: rgba(52, 152, 219, 0.45);
    }

    .solution-card__content h3 {
      font-size: clamp(1.75rem, 2vw, 2.3rem);
      line-height: 1.1;
      margin-bottom: 12px;
      color: #0d2236;
    }

    .solution-card__subtitle {
      font-size: 1.05rem;
      color: #234664;
      font-weight: 600;
      margin-bottom: 14px;
    }

    .solution-card__description {
      color: #56697d;
      line-height: 1.85;
      margin-bottom: 22px;
      font-size: 0.99rem;
    }

    .solution-card__chips {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 22px;
    }

    .solution-chip {
      background: #f0f8ff;
      color: #1f4e75;
      border-color: rgba(52, 152, 219, 0.14);
      backdrop-filter: none;
    }

    .solution-card__list {
      list-style: none;
      padding: 0;
      margin: 0 0 22px;
      display: grid;
      gap: 12px;
    }

    .solution-card__list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: #334a60;
      line-height: 1.7;
    }

    .solution-card__list i {
      color: var(--program-emerald);
      font-size: 1rem;
      margin-top: 5px;
    }

    .solution-card__note {
      padding: 16px 18px;
      border-radius: 18px;
      background: linear-gradient(180deg, rgba(52, 152, 219, 0.08), rgba(52, 152, 219, 0.03));
      border: 1px solid rgba(52, 152, 219, 0.12);
      color: #36546f;
      font-size: 0.94rem;
      line-height: 1.7;
      margin-bottom: 24px;
    }

    .solution-card__actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .solution-card__actions .btn {
      padding: 12px 18px;
      border-radius: 14px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    /* ── MUSICAST special section ── */
    .musicast-section {
      background: linear-gradient(160deg, #0a0a0f 0%, #10080e 40%, #0d0b00 100%);
      position: relative;
      overflow: hidden;
    }

    .musicast-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 20% 50%, rgba(212, 160, 23, 0.12) 0%, transparent 55%),
        radial-gradient(ellipse at 80% 20%, rgba(180, 60, 120, 0.10) 0%, transparent 45%),
        radial-gradient(ellipse at 60% 90%, rgba(212, 160, 23, 0.07) 0%, transparent 40%);
      pointer-events: none;
    }

    .musicast-section .section-title h2 {
      color: #fff;
    }

    .musicast-section .section-title p {
      color: rgba(255,255,255,0.68);
    }

    .musicast-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 7px 16px;
      border-radius: 999px;
      border: 1px solid rgba(212, 160, 23, 0.45);
      background: rgba(212, 160, 23, 0.10);
      color: #f0c040;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .musicast-headline {
      font-family: var(--heading-font);
      font-size: clamp(2.4rem, 4vw, 4rem);
      font-weight: 800;
      line-height: 1.05;
      color: #ffffff;
      margin-bottom: 8px;
    }

    .musicast-headline span {
      background: linear-gradient(90deg, #f0c040, #e07b30, #f0c040);
      background-size: 200% auto;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: musicastShine 4s linear infinite;
    }

    @keyframes musicastShine {
      to { background-position: 200% center; }
    }

    .musicast-tagline {
      font-size: 1.05rem;
      color: rgba(255,255,255,0.75);
      line-height: 1.8;
      max-width: 540px;
      margin-bottom: 28px;
    }

    .musicast-nav-info {
      padding: 18px 22px;
      border-radius: 18px;
      background: rgba(212, 160, 23, 0.08);
      border: 1px solid rgba(212, 160, 23, 0.22);
      color: rgba(255,255,255,0.80);
      font-size: 0.93rem;
      line-height: 1.75;
      margin-bottom: 28px;
    }

    .musicast-nav-info strong {
      color: #f0c040;
    }

    .musicast-screens-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin-bottom: 28px;
    }

    .musicast-screen-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 14px;
      border-radius: 14px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(212, 160, 23, 0.14);
      transition: background 0.25s, border-color 0.25s;
    }

    .musicast-screen-item:hover {
      background: rgba(212, 160, 23, 0.10);
      border-color: rgba(212, 160, 23, 0.35);
    }

    .musicast-screen-num {
      flex-shrink: 0;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: linear-gradient(135deg, #d4a017, #e07b30);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      font-weight: 700;
      color: #0a0a0f;
    }

    .musicast-screen-icon {
      color: #f0c040;
      font-size: 1rem;
    }

    .musicast-screen-name {
      color: rgba(255,255,255,0.85);
      font-size: 0.88rem;
      font-weight: 500;
    }

    .musicast-palette {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 28px;
    }

    .musicast-palette-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      border-radius: 999px;
      font-size: 0.84rem;
      font-weight: 600;
      border: 1px solid;
    }

    .musicast-chip-dark {
      background: rgba(10,10,15,0.8);
      color: rgba(255,255,255,0.88);
      border-color: rgba(255,255,255,0.14);
    }

    .musicast-chip-gold {
      background: rgba(212, 160, 23, 0.15);
      color: #f0c040;
      border-color: rgba(212, 160, 23, 0.40);
    }

    .musicast-chip-type {
      background: rgba(255,255,255,0.07);
      color: rgba(255,255,255,0.78);
      border-color: rgba(255,255,255,0.10);
    }

    .musicast-chip-gradient {
      background: linear-gradient(135deg, rgba(212,160,23,0.12), rgba(180,60,120,0.12));
      color: rgba(255,255,255,0.84);
      border-color: rgba(212,160,23,0.25);
    }

    .musicast-img-frame {
      position: relative;
      border-radius: 28px;
      overflow: hidden;
      box-shadow:
        0 0 0 1px rgba(212, 160, 23, 0.25),
        0 40px 100px rgba(0,0,0,0.55),
        0 0 80px rgba(212, 160, 23, 0.08);
    }

    .musicast-img-frame img {
      display: block;
      width: 100%;
      height: 100%;
      min-height: 480px;
      object-fit: cover;
    }

    .musicast-img-badge {
      position: absolute;
      top: 18px;
      left: 18px;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 9px 14px;
      border-radius: 999px;
      background: rgba(10,8,0,0.80);
      border: 1px solid rgba(212,160,23,0.40);
      backdrop-filter: blur(12px);
      color: #f0c040;
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.04em;
    }

    .musicast-img-screens-badge {
      position: absolute;
      bottom: 18px;
      right: 18px;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      border-radius: 16px;
      background: rgba(10,8,0,0.82);
      border: 1px solid rgba(212,160,23,0.30);
      backdrop-filter: blur(12px);
    }

    .musicast-img-screens-badge strong {
      font-size: 1.5rem;
      font-weight: 800;
      color: #f0c040;
      line-height: 1;
    }

    .musicast-img-screens-badge span {
      font-size: 0.82rem;
      color: rgba(255,255,255,0.72);
      line-height: 1.3;
    }

    .musicast-glow-line {
      position: absolute;
      inset: auto 0 -1px 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, rgba(212,160,23,0.6), transparent);
    }

    @media (max-width: 991px) {
      .musicast-img-frame img { min-height: 340px; }
      .musicast-screens-grid { grid-template-columns: 1fr; }
    }
    /* ── END MUSICAST ── */

    .program-process {
      background: linear-gradient(180deg, #071727, #0b2236);
    }

    .program-process .section-title h2,
    .program-process .section-title p {
      color: #fff;
    }

    .process-card {
      height: 100%;
      padding: 28px;
      border-radius: 28px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.22);
    }

    .process-card__step {
      display: inline-flex;
      width: 48px;
      height: 48px;
      align-items: center;
      justify-content: center;
      border-radius: 16px;
      margin-bottom: 18px;
      font-size: 1.15rem;
      font-weight: 700;
      color: #fff;
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
    }

    .process-card h3 {
      color: #fff;
      margin-bottom: 12px;
      font-size: 1.3rem;
    }

    .process-card p {
      color: rgba(255, 255, 255, 0.74);
      line-height: 1.8;
      margin-bottom: 0;
    }

    .program-tech .swiper {
      padding: 12px 8px 36px;
      border-radius: 28px;
      background: linear-gradient(180deg, #ffffff, #f8fbff);
      border: 1px solid rgba(52, 152, 219, 0.12);
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    }

    .program-tech .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 110px;
    }

    .program-tech .swiper-slide img {
      max-height: 58px;
    }

    .program-cta {
      padding: 90px 0;
      position: relative;
      overflow: hidden;
    }

    .program-cta img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .program-cta::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(3, 9, 18, 0.88), rgba(7, 23, 41, 0.72));
      z-index: 2;
    }

    .program-cta .container {
      position: relative;
      z-index: 3;
    }

    .program-cta__panel {
      padding: 34px;
      border-radius: 32px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      text-align: center;
      box-shadow: 0 26px 60px rgba(0, 0, 0, 0.2);
    }

    .program-cta__panel h2 {
      color: #fff;
      font-size: clamp(2rem, 3vw, 3rem);
      margin-bottom: 14px;
    }

    .program-cta__panel p {
      color: rgba(255, 255, 255, 0.78);
      font-size: 1.05rem;
      line-height: 1.8;
      max-width: 760px;
      margin: 0 auto 24px;
    }

    .program-video-modal .modal-content {
      background: #081320;
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 22px;
      overflow: hidden;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
      animation: modalSlideIn 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .program-video-modal .modal-header {
      background: linear-gradient(135deg, #10253a, #0b1828);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .program-video-modal .modal-title {
      color: #fff;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .program-video-modal .modal-body {
      background: #000;
      padding: 0;
    }

    .program-video-modal video {
      display: block;
      width: 100%;
      max-height: 75vh;
      object-fit: contain;
    }

    @keyframes modalSlideIn {
      from {
        transform: scale(0.92) translateY(20px);
        opacity: 0;
      }

      to {
        transform: scale(1) translateY(0);
        opacity: 1;
      }
    }

    @media (max-width: 991px) {
      .program-hero {
        padding: 148px 0 80px;
      }

      .program-hero__panel {
        margin-top: 28px;
      }

      .solution-card__content {
        padding: 28px;
      }

      .solutions-jump-nav {
        top: 74px;
      }
    }

    @media (max-width: 767px) {
      .floating-commit {
        right: 12px;
        bottom: 12px;
      }

      .floating-commit__img {
        width: min(160px, 42vw);
      }

      .program-hero__stats {
        grid-template-columns: 1fr;
      }

      .program-hero__actions .btn,
      .program-cta__panel .btn {
        width: 100%;
        min-width: 0;
      }

      .solution-card {
        border-radius: 26px;
      }

      .solution-card__content {
        padding: 24px 22px;
      }

      .solution-card__media img {
        min-height: 260px;
      }

      .solutions-jump-nav {
        position: relative;
        top: 0;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .floating-commit__img,
      .solutions-jump-nav__items a,
      .solution-card__actions .btn,
      .program-hero__actions .btn,
      .program-video-modal .modal-content {
        transition: none !important;
        animation: none !important;
      }
    }
  </style>
</head>

<body class="index-page programming-page">

  <a class="skip-link" href="#main-content"><?= $isEnglish ? 'Skip to main content' : 'Saltar al contenido principal'; ?></a>

<div id="logo-float-wrap" class="floating-commit">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link" class="floating-commit__link" aria-label="<?= $isEnglish ? 'Open COMMIT by Green PC' : 'Abrir COMMIT by Green PC'; ?>">
    <img src="./assets/img/commit_logo.png" id="logo-float" class="floating-commit__img" alt="COMMIT by Green PC">
  </a>
</div>

<script>
(function () {
  const logo = document.getElementById('logo-float');
  const link = document.getElementById('logo-link');

  if (!logo || !link) {
    return;
  }

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const canTilt = window.matchMedia('(pointer:fine)').matches && !reduceMotion;

  let currentScrollY = 0;
  let currentMouseX = 0;
  let currentMouseY = 0;

  function updateTransform() {
    const scrollTranslate = reduceMotion ? 0 : currentScrollY * -0.01;
    const scrollRotate = reduceMotion ? 0 : currentScrollY * 0.001;
    const tiltX = canTilt ? currentMouseX * 12 : 0;
    const tiltY = canTilt ? currentMouseY * -12 : 0;

    logo.style.transform = 'translateY(' + scrollTranslate + 'px) rotate(' + scrollRotate + 'deg) perspective(600px) rotateY(' + tiltX + 'deg) rotateX(' + tiltY + 'deg)';
  }

  if (!reduceMotion) {
    let ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(function () {
          currentScrollY = window.scrollY;
          updateTransform();
          ticking = false;
        });
        ticking = true;
      }
    });
  }

  if (canTilt) {
    document.addEventListener('mousemove', function (e) {
      const rect = logo.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      currentMouseX = Math.min(Math.max((e.clientX - cx) / (window.innerWidth / 2), -1), 1);
      currentMouseY = Math.min(Math.max((e.clientY - cy) / (window.innerHeight / 2), -1), 1);
      updateTransform();
    });
  }

  link.addEventListener('mouseenter', function () {
    logo.style.boxShadow = '0 0 28px rgba(0,230,118,0.4), 0 0 60px rgba(0,230,118,0.16)';
    logo.style.borderColor = 'rgba(0,230,118,0.55)';
  });

  link.addEventListener('mouseleave', function () {
    logo.style.boxShadow = '0 0 0 0 rgba(0,230,118,0)';
    logo.style.borderColor = 'rgba(0,230,118,0.22)';
    currentMouseX = 0;
    currentMouseY = 0;
    updateTransform();
  });
})();
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?= $isEnglish ? './index.php' : './index_es.php'; ?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./assets/img/logo.png" alt="<?= $isEnglish ? 'Green PC logo' : 'Logo de Green PC'; ?>">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= $isEnglish ? './index.php#hero' : './index_es.php#hero'; ?>"><?= $isEnglish ? 'Home' : 'Inicio'; ?></a></li>
          <li><a href="<?= $isEnglish ? './index.php#services' : './index_es.php#services'; ?>"><?= $isEnglish ? 'Capabilities' : 'Capacidades'; ?></a></li>
          <li><a href="<?= $isEnglish ? './index.php#portfolio' : './index_es.php#portfolio'; ?>"><?= $isEnglish ? 'Work' : 'Trabajo'; ?></a></li>
          <li><a href="<?= $isEnglish ? './index.php#pricing' : './index_es.php#pricing'; ?>"><?= $isEnglish ? 'Pricing' : 'Precios'; ?></a></li>
          <li><a href="#ejemplos" class="active"><?= $isEnglish ? 'Examples' : 'Ejemplos'; ?></a></li>
          <li class="nav-contact-mobile"><a href="<?= $isEnglish ? './index.php#contact' : './index_es.php#contact'; ?>"><i class="bi bi-arrow-up-right-circle"></i> <?= $isEnglish ? 'Start a project' : 'Iniciar proyecto'; ?></a></li>
        </ul>
        <button type="button" class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="<?= $isEnglish ? 'Open navigation' : 'Abrir navegación'; ?>" aria-expanded="false" data-label-open="<?= $isEnglish ? 'Open navigation' : 'Abrir navegación'; ?>" data-label-close="<?= $isEnglish ? 'Close navigation' : 'Cerrar navegación'; ?>"></button>
      </nav>
      <div class="header-actions">
        <a class="header-language" href="<?= $isEnglish ? './programacion.php' : './examples.php'; ?>" aria-label="<?= $isEnglish ? 'View website in Spanish' : 'Ver el sitio en inglés'; ?>"><i class="bi bi-translate"></i><span><?= $isEnglish ? 'Español' : 'English'; ?></span></a>
        <a class="header-project-cta" href="<?= $isEnglish ? './index.php#contact' : './index_es.php#contact'; ?>"><?= $isEnglish ? 'Start a project' : 'Iniciar proyecto'; ?> <i class="bi bi-arrow-up-right"></i></a>
      </div>
    </div>
    <div class="site-scroll-progress" aria-hidden="true"><span data-scroll-progress></span></div>
  </header>

  <main id="main-content" class="main" tabindex="-1">
    <section id="hero" class="hero section dark-background program-hero">
      <img src="assets/img/hero-bg.jpg" alt="<?= $isEnglish ? 'Technology background for the Green PC examples gallery' : 'Fondo tecnológico para la galería de ejemplos de Green PC'; ?>" width="1920" height="1280" data-aos="fade-in" fetchpriority="high" decoding="async">
      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <span class="program-hero__eyebrow"><i class="bi bi-window-stack"></i> <?= $isEnglish ? 'Functional examples · Green PC' : 'Ejemplos funcionales · Green PC'; ?></span>
            <h1><?= $isEnglish ? 'Explore digital products before defining your own.' : 'Explora productos digitales antes de definir el tuyo.'; ?></h1>
            <p><?= $isEnglish ? 'We bring marketplaces, web platforms, mobile apps, OCR, analytics and operational systems together in one browsable gallery. Compare approaches, open the mockups and discover which solution best fits your operation.' : 'Reunimos marketplaces, plataformas web, apps móviles, OCR, analítica y sistemas operativos en una galería navegable. Compara enfoques, abre los mockups y descubre qué tipo de solución encaja mejor con tu operación.'; ?></p>

            <div class="program-hero__actions">
              <a class="btn btn-primary" href="#ejemplos"><i class="bi bi-play-circle"></i> <?= $isEnglish ? 'Browse examples' : 'Recorrer ejemplos'; ?></a>
              <a class="btn btn-outline-light" href="https://wa.link/hczezg" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> <?= $isEnglish ? 'Discuss scope' : 'Solicitar alcance'; ?></a>
            </div>

            <div class="program-hero__stats">
              <div class="program-stat">
                <strong><?= $exampleCount; ?></strong>
                <span><?= $isEnglish ? 'examples collected in the carousel' : 'ejemplos reunidos en el carrusel'; ?></span>
              </div>
              <div class="program-stat">
                <strong><?= $demoCount; ?></strong>
                <span><?= $isEnglish ? 'browsable demos for validating direction' : 'demos navegables para validar enfoque'; ?></span>
              </div>
              <div class="program-stat">
                <strong><?= $videoCount; ?></strong>
                <span><?= $isEnglish ? 'cases with video walkthroughs' : 'casos con video para ver el flujo'; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="180">
            <aside class="program-hero__panel">
              <h2><?= $isEnglish ? 'What you can expect' : 'Qué puedes esperar del servicio'; ?></h2>
              <p><?= $isEnglish ? 'Each example starts with a concrete operational problem and translates it into clear modules, workflows and deliverables. The goal is not simply to have a system, but to reduce friction and improve control.' : 'Cada solución parte de un problema operativo concreto y se aterriza en módulos, flujos y entregables claros. El objetivo no es solo "tener un sistema", sino reducir fricción y mejorar control.'; ?></p>
              <ul class="program-hero__checklist">
                <li><i class="bi bi-check2-circle"></i><span><?= $isEnglish ? 'Modular scope that can grow in phases without rebuilding everything.' : 'Alcance modular para crecer por fases sin rehacer todo.'; ?></span></li>
                <li><i class="bi bi-check2-circle"></i><span><?= $isEnglish ? 'Demos and mockups for validating interface and priorities before major investment.' : 'Demos y mockups para validar interfaz y prioridades antes de invertir fuerte.'; ?></span></li>
                <li><i class="bi bi-check2-circle"></i><span><?= $isEnglish ? 'Architecture aligned with control, traceability and operational security.' : 'Arquitectura alineada con control, trazabilidad y seguridad operativa.'; ?></span></li>
                <li><i class="bi bi-check2-circle"></i><span><?= $isEnglish ? 'Integration with internal processes, intranets or mobile applications.' : 'Integración posible con procesos internos, intranet o aplicaciones móviles.'; ?></span></li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <section id="ejemplos" class="section examples-showcase">
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $isEnglish ? 'Examples' : 'Ejemplos'; ?></h2>
        <p><?= $isEnglish ? 'Browse every available mockup and demo' : 'Recorre todos los mockups y demos disponibles'; ?></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper examples-swiper" aria-label="<?= $isEnglish ? 'Green PC examples carousel' : 'Carrusel de ejemplos de Green PC'; ?>">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 650,
              "autoplay": {"delay": 5500, "disableOnInteraction": false},
              "slidesPerView": 1,
              "spaceBetween": 24,
              "keyboard": {"enabled": true},
              "pagination": {"el": ".examples-pagination", "type": "bullets", "clickable": true},
              "navigation": {"nextEl": ".examples-next", "prevEl": ".examples-prev"}
            }
          </script>

          <div class="swiper-wrapper">
            <?php foreach ($carouselExamples as $index => $example): ?>
              <div class="swiper-slide">
                <article class="example-slide">
                  <div class="example-slide__visual">
                    <img src="<?= htmlspecialchars($example['image']); ?>" alt="<?= htmlspecialchars($example['alt']); ?>" loading="<?= $index === 0 ? 'eager' : 'lazy'; ?>">
                    <span class="example-slide__category"><?= htmlspecialchars($example['category']); ?></span>
                  </div>
                  <div class="example-slide__content">
                    <span class="example-slide__count"><?= $isEnglish ? 'Example' : 'Ejemplo'; ?> <?= $index + 1; ?> <?= $isEnglish ? 'of' : 'de'; ?> <?= $exampleCount; ?></span>
                    <h3><?= htmlspecialchars($example['title']); ?></h3>
                    <p><?= htmlspecialchars($example['subtitle']); ?></p>
                    <div class="example-slide__tags">
                      <?php foreach ($example['tags'] as $tag): ?>
                        <span><?= htmlspecialchars($tag); ?></span>
                      <?php endforeach; ?>
                    </div>
                    <a class="example-slide__action" href="<?= htmlspecialchars($example['href']); ?>">
                      <?= $isEnglish ? 'View example' : 'Ver ejemplo'; ?> <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="swiper-button-prev examples-prev" type="button" aria-label="<?= $isEnglish ? 'Previous example' : 'Ejemplo anterior'; ?>"></button>
          <button class="swiper-button-next examples-next" type="button" aria-label="<?= $isEnglish ? 'Next example' : 'Ejemplo siguiente'; ?>"></button>
          <div class="swiper-pagination examples-pagination"></div>
        </div>
      </div>
    </section>

  </main>

  <nav class="mobile-action-bar" aria-label="<?= $isEnglish ? 'Quick project actions' : 'Acciones rápidas del proyecto'; ?>" data-mobile-action-bar>
    <a href="#ejemplos" class="mobile-action-route"><i class="bi bi-window-stack"></i><span><?= $isEnglish ? 'View examples' : 'Ver ejemplos'; ?></span></a>
    <a href="<?= $isEnglish ? './index.php#contact' : './index_es.php#contact'; ?>" class="mobile-action-primary"><span><?= $isEnglish ? 'Start a project' : 'Iniciar proyecto'; ?></span><i class="bi bi-arrow-up-right"></i></a>
  </nav>

  <?php
  $pageUsesSwiper = true;
  $pageUsesPhpEmailForm = false;
  $pageUsesPureCounter = false;
  $footerLanguageUrl = $isEnglish ? 'programacion.php' : 'examples.php';
  include $isEnglish ? './assets/includes/footer.php' : './assets/includes/footer-es.php';
  ?>
