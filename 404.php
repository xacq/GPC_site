<?php
http_response_code(404);
header('X-Robots-Tag: noindex, nofollow', true);

$requestedLanguage = isset($_GET['lang']) ? strtolower((string) $_GET['lang']) : '';
$browserLanguage = strtolower((string) ($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''));
$isSpanish = $requestedLanguage === 'es' || ($requestedLanguage !== 'en' && substr($browserLanguage, 0, 2) === 'es');

$copy = $isSpanish ? [
  'lang' => 'es',
  'title' => 'Página no encontrada — Green PC',
  'eyebrow' => 'ERROR 404 · RUTA NO DISPONIBLE',
  'heading' => 'Esta ruta no lleva a ningún producto.',
  'body' => 'La página pudo cambiar de dirección, fue retirada o el enlace está incompleto. Volvamos a un punto seguro.',
  'home' => 'Volver al inicio',
  'services' => 'Explorar capacidades',
  'examples' => 'Ver ejemplos',
  'homeUrl' => './index_es.php',
  'switchLabel' => 'English',
  'switchUrl' => './404.php?lang=en',
  'status' => 'Estado del sistema',
  'statusValue' => 'El sitio funciona correctamente',
  'route' => 'Ruta solicitada',
  'next' => 'Siguiente paso recomendado',
  'nextValue' => 'Regresar a la portada y elegir una capacidad'
] : [
  'lang' => 'en',
  'title' => 'Page not found — Green PC',
  'eyebrow' => 'ERROR 404 · ROUTE UNAVAILABLE',
  'heading' => 'This route does not lead to a product.',
  'body' => 'The page may have moved, been removed or the link may be incomplete. Let us return to a safe starting point.',
  'home' => 'Return home',
  'services' => 'Explore capabilities',
  'examples' => 'View examples',
  'homeUrl' => './index.php',
  'switchLabel' => 'Español',
  'switchUrl' => './404.php?lang=es',
  'status' => 'System status',
  'statusValue' => 'The website is operating normally',
  'route' => 'Requested route',
  'next' => 'Recommended next step',
  'nextValue' => 'Return to the homepage and choose a capability'
];

$requestedPath = parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH) ?: '/';
?>
<!DOCTYPE html>
<html lang="<?= $copy['lang']; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta name="theme-color" content="#061321">
  <title><?= $copy['title']; ?></title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/css/main.css?v=20261111-15" rel="stylesheet">
  <style>
    :root {
      color-scheme: dark;
    }

    * {
      box-sizing: border-box;
    }

    body.error-page {
      min-height: 100vh;
      margin: 0;
      overflow-x: hidden;
      background:
        radial-gradient(circle at 14% 18%, rgba(0, 230, 118, 0.13), transparent 27%),
        radial-gradient(circle at 82% 20%, rgba(52, 152, 219, 0.24), transparent 31%),
        linear-gradient(145deg, #030910 0%, #071729 55%, #061321 100%);
      color: #f5f8fb;
      font-family: var(--default-font, system-ui, sans-serif);
    }

    .error-shell {
      position: relative;
      display: grid;
      grid-template-rows: auto 1fr auto;
      width: min(1180px, calc(100% - 40px));
      min-height: 100vh;
      margin: 0 auto;
      padding: 28px 0;
    }

    .error-header,
    .error-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .error-logo img {
      display: block;
      width: clamp(190px, 22vw, 270px);
      height: auto;
    }

    .language-link {
      padding: 10px 16px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      border-radius: 999px;
      color: #f5f8fb;
      font-size: 0.82rem;
      font-weight: 700;
      text-decoration: none;
      transition: border-color 0.2s ease, background-color 0.2s ease;
    }

    .language-link:hover,
    .language-link:focus-visible {
      border-color: #72e8ce;
      background: rgba(114, 232, 206, 0.08);
      color: #fff;
    }

    .error-main {
      display: grid;
      grid-template-columns: minmax(0, 1.08fr) minmax(340px, 0.92fr);
      gap: clamp(42px, 8vw, 96px);
      align-items: center;
      padding: 72px 0;
    }

    .error-code {
      position: absolute;
      top: 50%;
      right: -3vw;
      z-index: 0;
      color: rgba(255, 255, 255, 0.025);
      font: 800 clamp(12rem, 30vw, 30rem)/0.7 var(--nav-font, system-ui, sans-serif);
      transform: translateY(-50%);
      pointer-events: none;
      user-select: none;
    }

    .error-copy,
    .error-diagnostic {
      position: relative;
      z-index: 1;
    }

    section.error-copy {
      padding: 0;
      background: transparent;
      color: inherit;
    }

    .error-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 24px;
      color: #72e8ce;
      font-size: 0.75rem;
      font-weight: 800;
      letter-spacing: 0.13em;
    }

    .error-eyebrow::before {
      width: 28px;
      height: 1px;
      background: currentColor;
      content: "";
    }

    .error-copy h1 {
      max-width: 780px;
      margin: 0 0 24px;
      color: #fff;
      font: 700 clamp(2.7rem, 6vw, 5.9rem)/0.98 var(--nav-font, system-ui, sans-serif);
      letter-spacing: -0.045em;
    }

    .error-copy p {
      max-width: 670px;
      margin: 0;
      color: rgba(236, 244, 250, 0.72);
      font-size: clamp(1rem, 1.6vw, 1.2rem);
      line-height: 1.8;
    }

    .error-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 34px;
    }

    .error-action {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 0 21px;
      border: 1px solid rgba(255, 255, 255, 0.17);
      border-radius: 14px;
      color: #f6f9fb;
      font-weight: 750;
      text-decoration: none;
      transition: transform 0.2s ease, border-color 0.2s ease, background-color 0.2s ease;
    }

    .error-action--primary {
      border-color: transparent;
      background: linear-gradient(135deg, #55e2c4, #69aef8);
      color: #04111d;
    }

    .error-action:hover,
    .error-action:focus-visible {
      border-color: #72e8ce;
      color: #fff;
      transform: translateY(-2px);
    }

    .error-action--primary:hover,
    .error-action--primary:focus-visible {
      color: #04111d;
    }

    .error-diagnostic {
      overflow: hidden;
      border: 1px solid rgba(128, 191, 235, 0.2);
      border-radius: 24px;
      background: rgba(6, 21, 37, 0.78);
      box-shadow: 0 35px 80px rgba(0, 0, 0, 0.28);
      backdrop-filter: blur(18px);
    }

    .diagnostic-bar {
      display: flex;
      gap: 7px;
      padding: 17px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .diagnostic-bar span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.26);
    }

    .diagnostic-content {
      display: grid;
      gap: 26px;
      padding: clamp(28px, 5vw, 46px);
    }

    .diagnostic-item small {
      display: block;
      margin-bottom: 8px;
      color: #72e8ce;
      font-size: 0.68rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    .diagnostic-item strong,
    .diagnostic-item code {
      color: rgba(255, 255, 255, 0.88);
      font-size: 0.94rem;
      line-height: 1.65;
    }

    .diagnostic-item code {
      display: block;
      overflow: hidden;
      padding: 12px 14px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.055);
      color: #9ecdf5;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .error-footer {
      color: rgba(255, 255, 255, 0.44);
      font-size: 0.78rem;
    }

    .error-footer a {
      color: rgba(255, 255, 255, 0.7);
    }

    @media (max-width: 860px) {
      .error-main {
        grid-template-columns: 1fr;
        padding: 64px 0;
      }

      .error-diagnostic {
        max-width: 620px;
      }
    }

    @media (max-width: 575px) {
      .error-shell {
        width: min(100% - 28px, 1180px);
        padding: 20px 0;
      }

      .error-logo img {
        width: 175px;
      }

      .error-main {
        gap: 38px;
        padding: 52px 0;
      }

      .error-actions {
        flex-direction: column;
      }

      .error-action {
        width: 100%;
      }

      .error-footer {
        align-items: flex-start;
        flex-direction: column;
        gap: 8px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      *,
      *::before,
      *::after {
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
      }
    }
  </style>
</head>
<body class="error-page">
  <div class="error-shell">
    <header class="error-header">
      <a class="error-logo" href="<?= $copy['homeUrl']; ?>" aria-label="Green PC">
        <img src="assets/img/logo.png" alt="Green PC" width="1208" height="160">
      </a>
      <a class="language-link" href="<?= $copy['switchUrl']; ?>"><?= $copy['switchLabel']; ?></a>
    </header>

    <main class="error-main">
      <div class="error-code" aria-hidden="true">404</div>
      <section class="error-copy" aria-labelledby="error-title">
        <span class="error-eyebrow"><?= $copy['eyebrow']; ?></span>
        <h1 id="error-title"><?= $copy['heading']; ?></h1>
        <p><?= $copy['body']; ?></p>
        <div class="error-actions">
          <a class="error-action error-action--primary" href="<?= $copy['homeUrl']; ?>"><?= $copy['home']; ?> <span aria-hidden="true">&nbsp;→</span></a>
          <a class="error-action" href="<?= $copy['homeUrl']; ?>#services"><?= $copy['services']; ?></a>
          <a class="error-action" href="./programacion.php<?= $isSpanish ? '' : '?lang=en'; ?>#ejemplos"><?= $copy['examples']; ?></a>
        </div>
      </section>

      <aside class="error-diagnostic" aria-label="<?= $copy['status']; ?>">
        <div class="diagnostic-bar" aria-hidden="true"><span></span><span></span><span></span></div>
        <div class="diagnostic-content">
          <div class="diagnostic-item">
            <small><?= $copy['status']; ?></small>
            <strong>● <?= $copy['statusValue']; ?></strong>
          </div>
          <div class="diagnostic-item">
            <small><?= $copy['route']; ?></small>
            <code><?= htmlspecialchars($requestedPath, ENT_QUOTES, 'UTF-8'); ?></code>
          </div>
          <div class="diagnostic-item">
            <small><?= $copy['next']; ?></small>
            <strong><?= $copy['nextValue']; ?></strong>
          </div>
        </div>
      </aside>
    </main>

    <footer class="error-footer">
      <span>© <?= date('Y'); ?> Green PC</span>
      <a href="mailto:info@greenpc.dev">info@greenpc.dev</a>
    </footer>
  </div>
</body>
</html>
