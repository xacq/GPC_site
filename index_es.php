<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Green PC — Desarrollo de Software, IA y Ciberseguridad</title>
  <meta name="description" content="Green PC desarrolla software seguro, automatización práctica con inteligencia artificial y soluciones de ciberseguridad para organizaciones que quieren modernizarse.">
  <meta name="keywords" content="desarrollo web, automatización IA, diseño UX, ciberseguridad, apps móviles, soluciones digitales, Green PC, inteligencia artificial">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#071729">
  <meta property="og:title" content="Green PC — Desarrollo de Software, IA y Ciberseguridad">
  <meta property="og:description" content="Ingeniería de software segura, automatización práctica con IA y ciberseguridad para organizaciones modernas.">
  <meta property="og:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="1280">
  <meta property="og:image:alt" content="Ingeniería de productos digitales, IA y ciberseguridad de Green PC">
  <meta property="og:url" content="https://greenpc.dev/index_es.php">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Green PC">
  <meta property="og:locale" content="es_EC">
  <meta property="og:locale:alternate" content="en_US">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Green PC — Desarrollo de Software, IA y Ciberseguridad">
  <meta name="twitter:description" content="Ingeniería de software segura, automatización práctica con IA y ciberseguridad para organizaciones modernas.">
  <meta name="twitter:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <meta name="twitter:image:alt" content="Ingeniería de productos digitales, IA y ciberseguridad de Green PC">
  <link rel="canonical" href="https://greenpc.dev/index_es.php">
  <link rel="alternate" hreflang="en" href="https://greenpc.dev/">
  <link rel="alternate" hreflang="es" href="https://greenpc.dev/index_es.php">
  <link rel="alternate" hreflang="x-default" href="https://greenpc.dev/">
  <link rel="preload" as="image" href="assets/img/hero-bg.jpg" fetchpriority="high">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "@id": "https://greenpc.dev/#organization",
    "name": "Green PC",
    "url": "https://greenpc.dev/index_es.php",
    "logo": "https://greenpc.dev/assets/img/logo.png",
    "image": "https://greenpc.dev/assets/img/hero-bg.jpg",
    "description": "Desarrollo seguro de software, automatización con inteligencia artificial y servicios de ciberseguridad.",
    "areaServed": "Worldwide",
    "address": {"@type": "PostalAddress", "addressLocality": "Cuenca", "addressCountry": "EC"},
    "email": "info@greenpc.dev",
    "telephone": "+593998784470",
    "availableLanguage": ["Español", "Inglés"],
    "sameAs": [
      "https://www.facebook.com/greenpcecuador/",
      "https://www.linkedin.com/in/greenpc/",
      "https://github.com/xacq",
      "https://www.behance.net/xaviercalvas"
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Servicios tecnológicos",
      "itemListElement": [
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ingeniería de software a medida"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Automatización e integración de IA"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ciberseguridad de aplicaciones"}}
      ]
    }
  }
  </script>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css?v=20261111-15" rel="stylesheet">

  <style>
    .index-page .main {
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
      width: min(220px, 28vw);
      border-radius: 14px;
      border: 1px solid rgba(0,230,118,0.2);
      box-shadow: 0 0 0 0 rgba(0,230,118,0);
      transition: box-shadow 0.3s ease, transform 0.15s ease, border-color 0.3s ease;
      will-change: transform;
      display: block;
    }

    .hero-landing {
      min-height: 100vh;
      max-height: none;
      padding: 164px 0 108px;
    }

    .hero-landing::before {
      background:
        radial-gradient(circle at 15% 18%, rgba(0, 230, 118, 0.15), transparent 28%),
        radial-gradient(circle at 84% 22%, rgba(52, 152, 219, 0.3), transparent 32%),
        linear-gradient(135deg, rgba(3, 9, 18, 0.94), rgba(7, 23, 41, 0.78));
    }

    .hero-landing h1::after,
    .hero-landing h2::after {
      content: none;
    }

    .hero-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 22px;
      padding: 8px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.14);
      background: rgba(255,255,255,0.06);
      color: rgba(255,255,255,0.86);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    .hero-landing-copy {
      text-align: left;
    }

    .hero-landing-copy h1,
    .hero-landing-copy h2 {
      font-size: clamp(2.7rem, 5vw, 5rem);
      line-height: 1.02;
      margin-bottom: 18px;
      font-family: var(--nav-font);
      color: #fff;
      font-weight: 700;
    }

    .hero-lead {
      max-width: 680px;
      margin: 0;
      color: rgba(255,255,255,0.8);
      font-size: 1.08rem;
      line-height: 1.85;
    }

    .hero-action-row {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 30px;
    }

    .hero-primary-btn,
    .hero-secondary-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      min-width: 190px;
      padding: 14px 24px;
      border-radius: 999px;
      font-size: 14px;
      font-weight: 700;
      transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
    }

    .hero-primary-btn {
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
      color: #fff;
      box-shadow: 0 18px 36px rgba(52, 152, 219, 0.28);
    }

    .hero-primary-btn:hover {
      transform: translateY(-2px);
      color: #fff;
      box-shadow: 0 24px 40px rgba(52, 152, 219, 0.34);
    }

    .hero-secondary-btn {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.24);
      color: #fff;
    }

    .hero-secondary-btn:hover {
      transform: translateY(-2px);
      color: #fff;
      background: rgba(255,255,255,0.1);
    }

    .hero-proof-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
      margin-top: 30px;
    }

    .hero-proof-card {
      padding: 18px 18px 16px;
      border-radius: 20px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.09);
      backdrop-filter: blur(10px);
    }

    .hero-proof-card strong {
      display: block;
      color: #fff;
      font-size: 1.7rem;
      line-height: 1;
      margin-bottom: 6px;
      font-family: var(--heading-font);
    }

    .hero-proof-card span {
      color: rgba(255,255,255,0.74);
      font-size: 0.92rem;
    }

    .hero-focus-card {
      padding: 28px;
      border-radius: 28px;
      background: linear-gradient(180deg, rgba(8,24,42,0.88), rgba(8,18,31,0.72));
      border: 1px solid rgba(255,255,255,0.1);
      box-shadow: 0 30px 70px rgba(0,0,0,0.24);
    }

    .hero-focus-label {
      display: inline-flex;
      margin-bottom: 14px;
      color: var(--accent-color);
      font-size: 12px;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 700;
    }

    .hero-focus-card h3 {
      color: #fff;
      margin-bottom: 12px;
      font-size: 1.5rem;
    }

    .hero-focus-card p {
      color: rgba(255,255,255,0.72);
      line-height: 1.8;
      font-size: 0.98rem;
      margin-bottom: 18px;
    }

    .hero-focus-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 12px;
    }

    .hero-focus-card li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: rgba(255,255,255,0.84);
      line-height: 1.7;
      font-size: 0.96rem;
    }

    .hero-focus-card li i {
      color: #8df4c7;
      margin-top: 5px;
    }

    .pricing-showcase {
      position: relative;
      overflow: hidden;
    }

    .pricing-showcase::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        radial-gradient(circle at 10% 20%, rgba(0, 230, 118, 0.08), transparent 24%),
        radial-gradient(circle at 88% 18%, rgba(52, 152, 219, 0.12), transparent 28%),
        linear-gradient(180deg, #f7fbff 0%, #eef5fb 100%);
      pointer-events: none;
    }

    .pricing-shell {
      position: relative;
      z-index: 1;
    }

    .pricing-intro {
      max-width: 760px;
      margin-bottom: 34px;
    }

    .pricing-kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 14px;
      border-radius: 999px;
      background: rgba(52, 152, 219, 0.1);
      color: #1e88d8;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 18px;
    }

    .pricing-intro h2 {
      font-size: clamp(2rem, 4vw, 3.35rem);
      line-height: 1.06;
      margin-bottom: 16px;
    }

    .pricing-intro p {
      color: #5a6a7e;
      line-height: 1.85;
      margin-bottom: 0;
    }

    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 20px;
    }

    .pricing-card {
      position: relative;
      padding: 28px;
      border-radius: 28px;
      background: rgba(255,255,255,0.9);
      border: 1px solid rgba(52, 152, 219, 0.12);
      box-shadow: 0 24px 60px rgba(15, 42, 71, 0.1);
      backdrop-filter: blur(10px);
      height: 100%;
    }

    .pricing-card--featured {
      background: linear-gradient(180deg, rgba(10, 24, 44, 0.98), rgba(7, 22, 40, 0.92));
      border-color: rgba(255,255,255,0.08);
      transform: translateY(-8px);
    }

    .pricing-topline {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 22px;
    }

    .pricing-icon {
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.35rem;
      color: #fff;
      background: linear-gradient(135deg, #3498db, #0aa1ff);
      box-shadow: 0 16px 34px rgba(52, 152, 219, 0.28);
    }

    .pricing-card--featured .pricing-icon {
      background: linear-gradient(135deg, #00d26a, #0aa1ff);
      box-shadow: 0 18px 38px rgba(0, 210, 106, 0.22);
    }

    .pricing-tag {
      display: inline-flex;
      align-items: center;
      padding: 7px 12px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #1e88d8;
      background: rgba(52, 152, 219, 0.1);
    }

    .pricing-card--featured .pricing-tag {
      color: #fff;
      background: rgba(255,255,255,0.1);
    }

    .pricing-card h3 {
      font-size: 1.45rem;
      margin-bottom: 10px;
    }

    .pricing-card p {
      color: #5a6a7e;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .pricing-card--featured h3,
    .pricing-card--featured p,
    .pricing-card--featured li,
    .pricing-card--featured .pricing-base-label,
    .pricing-card--featured .payment-copy,
    .pricing-card--featured .payment-note {
      color: rgba(255,255,255,0.86);
    }

    .pricing-base {
      margin-bottom: 20px;
    }

    .pricing-base-label {
      display: block;
      color: #6d7e92;
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 8px;
    }

    .pricing-amount {
      display: flex;
      align-items: baseline;
      gap: 10px;
      font-family: var(--heading-font);
      color: #0f2742;
    }

    .pricing-card--featured .pricing-amount {
      color: #fff;
    }

    .pricing-amount strong {
      font-size: clamp(2.2rem, 5vw, 3.3rem);
      line-height: 1;
    }

    .pricing-amount span {
      font-size: 0.92rem;
      color: #6d7e92;
    }

    .pricing-card--featured .pricing-amount span {
      color: rgba(255,255,255,0.6);
    }

    .pricing-list {
      list-style: none;
      padding: 0;
      margin: 0 0 24px;
      display: grid;
      gap: 12px;
    }

    .pricing-list li {
      display: flex;
      gap: 10px;
      align-items: flex-start;
      color: #415468;
      line-height: 1.7;
    }

    .pricing-list i {
      color: #00c96b;
      margin-top: 5px;
    }

    .payment-box {
      padding: 18px 18px 16px;
      border-radius: 20px;
      background: rgba(5, 25, 48, 0.04);
      border: 1px solid rgba(52, 152, 219, 0.1);
    }

    .pricing-card--featured .payment-box {
      background: rgba(255,255,255,0.06);
      border-color: rgba(255,255,255,0.08);
    }

    .payment-title {
      display: block;
      font-weight: 700;
      margin-bottom: 10px;
      color: #0f2742;
    }

    .pricing-card--featured .payment-title {
      color: #fff;
    }

    .payment-logos {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 12px;
    }

    .payment-logo {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 12px;
      border-radius: 999px;
      background: rgba(255,255,255,0.88);
      border: 1px solid rgba(52, 152, 219, 0.12);
      color: #10314f;
      font-size: 0.83rem;
      font-weight: 700;
    }

    .payment-logo i {
      font-size: 1rem;
      color: #1e88d8;
    }

    .payment-copy,
    .payment-note {
      margin: 0;
      font-size: 0.92rem;
      line-height: 1.7;
    }

    .payment-note {
      margin-top: 8px;
      color: #6d7e92;
    }

    @media (max-width: 991px) {
      .pricing-grid {
        grid-template-columns: 1fr;
      }

      .pricing-card--featured {
        transform: none;
      }
    }

    @media (max-width: 767px) {
      .pricing-showcase {
        padding-top: 56px;
        padding-bottom: 56px;
      }

      .pricing-intro {
        margin-bottom: 26px;
      }

      .pricing-intro h2 {
        font-size: clamp(1.7rem, 8vw, 2.35rem);
        line-height: 1.12;
      }

      .pricing-card {
        padding: 22px 18px;
        border-radius: 22px;
      }

      .pricing-topline {
        align-items: flex-start;
        flex-direction: column;
        margin-bottom: 18px;
      }

      .pricing-icon {
        width: 50px;
        height: 50px;
        border-radius: 16px;
        font-size: 1.15rem;
      }

      .pricing-card h3 {
        font-size: 1.25rem;
      }

      .pricing-amount {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
      }

      .pricing-amount strong {
        font-size: clamp(2rem, 12vw, 2.8rem);
      }

      .payment-box {
        padding: 16px 14px 14px;
        border-radius: 18px;
      }

      .payment-logos {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px;
      }

      .payment-logo {
        justify-content: center;
        width: 100%;
        min-width: 0;
        padding: 9px 10px;
        font-size: 0.76rem;
        text-align: center;
      }
    }

    @media (max-width: 420px) {
      .pricing-card {
        padding: 20px 16px;
      }

      .payment-logos {
        grid-template-columns: 1fr;
      }

      .payment-logo {
        font-size: 0.8rem;
      }
    }

    .cta-panel {
      padding: 34px;
      border-radius: 30px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.12);
      backdrop-filter: blur(10px);
      box-shadow: 0 24px 60px rgba(0,0,0,0.22);
    }

    .cta-panel h3 {
      color: #fff;
      font-size: clamp(2rem, 3vw, 3rem);
      margin-bottom: 14px;
    }

    .cta-panel p {
      max-width: 760px;
      margin: 0 auto 22px;
      color: rgba(255,255,255,0.78);
      font-size: 1.05rem;
      line-height: 1.8;
    }

    @media (max-width: 991px) {
      .hero-landing {
        padding: 148px 0 92px;
      }

      .hero-focus-card {
        margin-top: 8px;
      }
    }

    @media (max-width: 767px) {
      .floating-commit {
        right: 12px;
        bottom: 12px;
      }

      .floating-commit__img {
        width: min(160px, 40vw);
      }

      .hero-landing-copy {
        text-align: center;
      }

      .hero-lead {
        margin: 0 auto;
      }

      .hero-action-row {
        justify-content: center;
      }

      .hero-primary-btn,
      .hero-secondary-btn {
        width: 100%;
        min-width: 0;
      }

      .hero-proof-grid {
        grid-template-columns: 1fr;
      }

      .cta-panel {
        padding: 26px 22px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .floating-commit__img,
      .hero-primary-btn,
      .hero-secondary-btn {
        transition: none !important;
      }
    }


  .gpc-popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.78);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 999999;
    padding: 18px;
  }

  .gpc-popup-overlay.active {
    display: flex;
  }

  .gpc-popup-box {
    position: relative;
    width: min(92vw, 520px);
    max-height: 92vh;
    animation: gpcPopupFadeIn 0.35s ease-out;
  }

  .gpc-popup-image {
    width: 100%;
    max-height: 92vh;
    object-fit: contain;
    border-radius: 18px;
    box-shadow: 0 18px 60px rgba(0, 0, 0, 0.65);
    display: block;
  }

  .gpc-popup-close {
    position: absolute;
    top: -14px;
    right: -14px;
    width: 42px;
    height: 42px;
    border: none;
    border-radius: 50%;
    background: #ffffff;
    color: #111111;
    font-size: 30px;
    line-height: 38px;
    font-weight: 500;
    cursor: pointer;
    z-index: 2;
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.35);
    transition: transform 0.2s ease, background 0.2s ease;
  }

  .gpc-popup-close:hover {
    transform: scale(1.08);
    background: #59ff2f;
  }

  @keyframes gpcPopupFadeIn {
    from {
      opacity: 0;
      transform: scale(0.92) translateY(18px);
    }
    to {
      opacity: 1;
      transform: scale(1) translateY(0);
    }
  }

  @media (max-width: 600px) {
    .gpc-popup-box {
      width: 94vw;
    }

    .gpc-popup-close {
      top: -10px;
      right: -8px;
      width: 38px;
      height: 38px;
      font-size: 28px;
    }
  }
  </style>

</head>

<body class="index-page">

  <a class="skip-link" href="#main-content">Saltar al contenido principal</a>
	
<!-- POPUP VACACIONALES GREEN PC -->
<!--div id="vacacionalesPopup" class="gpc-popup-overlay">
  <div class="gpc-popup-box">
    <button class="gpc-popup-close" onclick="cerrarPopupVacacionales()">×</button>

    <a href="https://wa.me/593998784470" target="_blank" rel="noopener">
      <img 
        src="assets/img/vaca.png" 
        alt="Vacacionales de Programación Green PC"
        class="gpc-popup-image"
      >
    </a>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
      const popup = document.getElementById("vacacionalesPopup");
      if (popup) {
        popup.classList.add("active");
      }
    }, 1200);
  });

  function cerrarPopupVacacionales() {
    const popup = document.getElementById("vacacionalesPopup");
    if (popup) {
      popup.classList.remove("active");
    }
  }

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      cerrarPopupVacacionales();
    }
  });

  document.getElementById("vacacionalesPopup")?.addEventListener("click", function (event) {
    if (event.target === this) {
      cerrarPopupVacacionales();
    }
  });
</script--!>
	
	
<!-- LOGO FLOTANTE -->
<div id="logo-float-wrap" class="floating-commit">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link" class="floating-commit__link">
    <img
      src="./assets/img/commit_logo.png"
      id="logo-float"
      class="floating-commit__img"
      alt="COMMIT by GreenPC"
    />
  </a>
</div>

<script>
(function(){
  const logo = document.getElementById('logo-float');
  const link = document.getElementById('logo-link');
  if (!logo || !link) return;

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
    window.addEventListener('scroll', function(){
      if(!ticking){
        requestAnimationFrame(function(){
          currentScrollY = window.scrollY;
          updateTransform();
          ticking = false;
        });
        ticking = true;
      }
    });
  }

  if (canTilt) {
    document.addEventListener('mousemove', function(e){
      const rect = logo.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      currentMouseX = Math.min(Math.max((e.clientX - cx) / (window.innerWidth / 2), -1), 1);
      currentMouseY = Math.min(Math.max((e.clientY - cy) / (window.innerHeight / 2), -1), 1);
      updateTransform();
    });
  }

  /* ── HOVER glow ── */
  link.addEventListener('mouseenter', function(){
    logo.style.boxShadow = '0 0 28px rgba(0,230,118,0.45), 0 0 60px rgba(0,230,118,0.15)';
    logo.style.borderColor = 'rgba(0,230,118,0.6)';
  });
  link.addEventListener('mouseleave', function(){
    logo.style.boxShadow = '0 0 0 0 rgba(0,230,118,0)';
    logo.style.borderColor = 'rgba(0,230,118,0.2)';
    currentMouseX = 0;
    currentMouseY = 0;
    updateTransform();
  });
})();
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./assets/img/logo.png" alt="Logo Green PC">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio<br></a></li>
          <li><a href="#services">Capacidades</a></li>
          <li><a href="#portfolio">Trabajo</a></li>
          <li><a href="#pricing">Precios</a></li>
          <li><a href="./programacion.php">Ejemplos</a></li>
          <li class="nav-contact-mobile"><a href="#contact"><i class="bi bi-arrow-up-right-circle"></i> Iniciar proyecto</a></li>
        </ul>
        <button type="button" class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Abrir navegación" aria-expanded="false" data-label-open="Abrir navegación" data-label-close="Cerrar navegación"></button>
      </nav>
      <div class="header-actions">
        <a class="header-language" href="./index.php" aria-label="Ver el sitio en inglés"><i class="bi bi-translate"></i><span>English</span></a>
        <a class="header-project-cta" href="#contact">Iniciar proyecto <i class="bi bi-arrow-up-right"></i></a>
      </div>
    </div>
    <div class="site-scroll-progress" aria-hidden="true"><span data-scroll-progress></span></div>
  </header>

  <main id="main-content" class="main" tabindex="-1">

    <!-- Sección Hero -->
    <section id="hero" class="hero section dark-background hero-landing">

      <img src="assets/img/hero-bg.jpg" alt="Fondo de productos digitales de Green PC" width="1920" height="1280" data-aos="fade-in" fetchpriority="high" decoding="async">

      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7 hero-landing-copy" data-aos="fade-up" data-aos-delay="100">
            <span class="hero-badge-pill"><i class="bi bi-stars"></i> Desarrollo · IA · Ciberseguridad</span>
            <h1>Construye mejor. Automatiza con IA. Opera con seguridad.</h1>
            <p class="hero-lead">Desarrollamos productos digitales seguros, integramos inteligencia artificial útil y fortalecemos los sistemas de los que depende tu organización.</p>
            <div class="hero-action-row">
              <a class="hero-primary-btn" href="#services"><i class="bi bi-grid-1x2-fill"></i> Explorar capacidades</a>
              <a class="hero-secondary-btn" href="#portfolio"><i class="bi bi-briefcase-fill"></i> Ver portafolio</a>
            </div>
            <div class="hero-proof-grid">
              <div class="hero-proof-card">
                <strong>22</strong>
                <span>proyectos seleccionados visibles en el portafolio</span>
              </div>
              <div class="hero-proof-card">
                <strong>10</strong>
                <span>lanzamientos recientes destacados primero</span>
              </div>
              <div class="hero-proof-card">
                <strong>3</strong>
                <span>capacidades conectadas: software, IA y seguridad</span>
              </div>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="180">
            <aside class="hero-focus-card">
              <span class="hero-focus-label">Tres capacidades conectadas</span>
              <h3>Tecnología diseñada para crear valor y reducir riesgos.</h3>
              <p>Unimos desarrollo, IA y ciberseguridad en un solo modelo de trabajo para que la innovación sea útil, mantenible y protegida.</p>
              <ul>
                <li><i class="bi bi-code-slash"></i><span>Software y plataformas a medida para flujos operativos reales.</span></li>
                <li><i class="bi bi-robot"></i><span>Asistentes y automatizaciones con IA que potencian equipos y eliminan tareas repetitivas.</span></li>
                <li><i class="bi bi-shield-check"></i><span>Revisión, endurecimiento y desarrollo con privacidad y seguridad desde el inicio.</span></li>
              </ul>
            </aside>
          </div>
        </div>

      </div>

    </section><!-- /Sección Hero -->

    <!-- Sección Navegador de Proyecto -->
    <section id="project-navigator" class="project-navigator section" aria-labelledby="project-navigator-title">
      <div class="container">
        <div class="project-navigator-shell" data-project-navigator data-aos="fade-up">
          <div class="project-navigator-intro">
            <span class="project-navigator-kicker"><i class="bi bi-signpost-split"></i> Empieza por tu prioridad</span>
            <h2 id="project-navigator-title">¿Qué necesitas impulsar?</h2>
            <p>Elige el resultado que buscas. Te mostraremos la ruta, capacidades y próximo paso más relevantes.</p>

            <div class="project-route-tabs" role="tablist" aria-label="Prioridades del proyecto">
              <button id="route-build-tab" class="project-route-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="route-build-panel" tabindex="0" data-route-tab="build">
                <span class="project-route-icon"><i class="bi bi-code-square"></i></span>
                <span><strong>Construir</strong><small>Un producto o plataforma</small></span>
              </button>
              <button id="route-automate-tab" class="project-route-tab" type="button" role="tab" aria-selected="false" aria-controls="route-automate-panel" tabindex="-1" data-route-tab="automate">
                <span class="project-route-icon"><i class="bi bi-stars"></i></span>
                <span><strong>Automatizar</strong><small>Un flujo de trabajo con IA</small></span>
              </button>
              <button id="route-secure-tab" class="project-route-tab" type="button" role="tab" aria-selected="false" aria-controls="route-secure-panel" tabindex="-1" data-route-tab="secure">
                <span class="project-route-icon"><i class="bi bi-shield-lock"></i></span>
                <span><strong>Proteger</strong><small>Un sistema u operación</small></span>
              </button>
            </div>
          </div>

          <div class="project-route-content">
            <article id="route-build-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-build-tab" data-route-panel="build">
              <span class="project-route-number">01 / Ingeniería de producto</span>
              <h3>Lanza un producto digital que encaje con la operación.</h3>
              <p>Convertimos una idea o proceso manual en una plataforma web, sistema interno o experiencia móvil mantenible.</p>
              <ul>
                <li><i class="bi bi-check2"></i> Estrategia de producto y UX</li>
                <li><i class="bi bi-check2"></i> Desarrollo web y móvil a medida</li>
                <li><i class="bi bi-check2"></i> Integraciones, pruebas y despliegue</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explorar desarrollo <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="#portfolio">Ver trabajos seleccionados</a>
              </div>
            </article>

            <article id="route-automate-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-automate-tab" data-route-panel="automate" hidden>
              <span class="project-route-number">02 / IA aplicada</span>
              <h3>Convierte el trabajo repetitivo en un flujo asistido por IA.</h3>
              <p>Detectamos oportunidades útiles de automatización y construimos pilotos que mantienen a las personas al mando de las decisiones críticas.</p>
              <ul>
                <li><i class="bi bi-check2"></i> Asistentes de IA y búsqueda de conocimiento</li>
                <li><i class="bi bi-check2"></i> Procesamiento de documentos y datos</li>
                <li><i class="bi bi-check2"></i> Pilotos medibles con supervisión humana</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explorar soluciones de IA <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="programacion.php#ejemplos">Ver ejemplos funcionales</a>
              </div>
            </article>

            <article id="route-secure-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-secure-tab" data-route-panel="secure" hidden>
              <span class="project-route-number">03 / Ciberseguridad</span>
              <h3>Reduce la exposición antes de la próxima etapa de crecimiento.</h3>
              <p>Revisamos la tecnología, priorizamos riesgos reales y fortalecemos el producto sin frenar la entrega.</p>
              <ul>
                <li><i class="bi bi-check2"></i> Revisión de aplicación y arquitectura</li>
                <li><i class="bi bi-check2"></i> Endurecimiento y hoja de ruta de remediación</li>
                <li><i class="bi bi-check2"></i> Ingeniería consciente de la privacidad</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explorar ciberseguridad <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="portal_lopdp.php">Ver plataforma de privacidad</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section><!-- /Sección Navegador de Proyecto -->

    <!-- Sección de Servicios -->
    <section id="services" class="services section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>DESARROLLO, IA Y CIBERSEGURIDAD</h2>
        <p>Desarrollo, IA y seguridad. Un solo aliado tecnológico.</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container">

        <div class="capabilities-grid">
          <article class="capability-card capability-card--development" data-aos="fade-up" data-aos-delay="100">
            <div class="capability-number">01</div>
            <div class="capability-icon"><i class="bi bi-code-square"></i></div>
            <span class="capability-kicker">Ingeniería de Software</span>
            <h3>Productos digitales para operaciones reales</h3>
            <p>Diseñamos y desarrollamos plataformas web, sistemas internos y experiencias móviles mantenibles alrededor de tus procesos.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Plataformas y sistemas empresariales a medida</li>
              <li><i class="bi bi-check2"></i> UX de producto, arquitectura e integraciones</li>
              <li><i class="bi bi-check2"></i> Modernización y entrega escalable</li>
            </ul>
            <div class="capability-actions" aria-label="Detalles de ingeniería de software">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalDesarrolloWeb">Plataformas web</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalDisenoUX">UX de producto</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalAppsMoviles">Apps móviles</button>
            </div>
          </article>

          <article class="capability-card capability-card--ai" data-aos="fade-up" data-aos-delay="180">
            <div class="capability-number">02</div>
            <div class="capability-icon"><i class="bi bi-cpu"></i></div>
            <span class="capability-kicker">Inteligencia Artificial</span>
            <h3>IA que mejora decisiones y ejecución</h3>
            <p>Conectamos la IA con procesos existentes para automatizar trabajo repetitivo, organizar información y responder más rápido.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Asistentes y flujos inteligentes</li>
              <li><i class="bi bi-check2"></i> Procesamiento y clasificación documental</li>
              <li><i class="bi bi-check2"></i> Investigación, prototipos e integración de IA</li>
            </ul>
            <div class="capability-actions" aria-label="Detalles de inteligencia artificial">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalAutomatizacion">Automatización con IA</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalInvestigacion">Investigación</button>
            </div>
          </article>

          <article class="capability-card capability-card--security" data-aos="fade-up" data-aos-delay="260">
            <div class="capability-number">03</div>
            <div class="capability-icon"><i class="bi bi-shield-lock"></i></div>
            <span class="capability-kicker">Ciberseguridad</span>
            <h3>Seguridad integrada en cada capa</h3>
            <p>Identificamos debilidades, fortalecemos aplicaciones y ayudamos a las organizaciones a gestionar datos con mayor confianza.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Revisión de aplicaciones y configuraciones</li>
              <li><i class="bi bi-check2"></i> Hardening y reducción de riesgos</li>
              <li><i class="bi bi-check2"></i> Apoyo en privacidad y cumplimiento</li>
            </ul>
            <div class="capability-actions" aria-label="Detalles de ciberseguridad">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalCiberseguridad">Servicios de seguridad</button>
            </div>
          </article>
        </div>

      </div>

    </section><!-- /Sección de Servicios -->

    <section id="pricing" class="pricing-showcase section">
      <div class="container pricing-shell">
        <div class="pricing-intro" data-aos="fade-up">
          <span class="pricing-kicker"><i class="bi bi-compass"></i> Modelos de colaboración</span>
          <h2>Empieza con el alcance correcto, no con un paquete tecnológico genérico.</h2>
          <p>Cada colaboración comienza con diagnóstico. Estas referencias ayudan a elegir un primer paso práctico antes de definir el alcance final.</p>
        </div>

        <div class="pricing-grid">
          <article class="pricing-card" data-aos="fade-up" data-aos-delay="50">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-code-square"></i></span>
              <span class="pricing-tag">Desarrollo</span>
            </div>
            <h3>Entrega de productos y plataformas</h3>
            <p>Para sitios a medida, sistemas internos, portales y productos digitales que necesitan una base técnica confiable.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Alcance inicial desde</span>
              <div class="pricing-amount"><strong>800 USD</strong><span>definido tras el diagnóstico</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Descubrimiento de flujos y arquitectura técnica.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Interfaz responsive, backend e integraciones.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Entrega lista para desplegar con criterios de seguridad.</span></li>
            </ul>
          </article>

          <article class="pricing-card pricing-card--featured" data-aos="fade-up" data-aos-delay="120">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-cpu"></i></span>
              <span class="pricing-tag">Inteligencia Artificial</span>
            </div>
            <h3>Piloto de flujo con IA</h3>
            <p>Para equipos que quieren validar un caso de uso útil antes de comprometerse con una transformación más amplia.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Alcance inicial desde</span>
              <div class="pricing-amount"><strong>500 USD</strong><span>piloto funcional</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Definición del caso de uso y revisión de datos.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Prototipo funcional conectado a un flujo real.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Criterios de evaluación y hoja de ruta para escalar.</span></li>
            </ul>
          </article>

          <article class="pricing-card" data-aos="fade-up" data-aos-delay="190">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-shield-check"></i></span>
              <span class="pricing-tag">Ciberseguridad</span>
            </div>
            <h3>Revisión de seguridad de aplicaciones</h3>
            <p>Para organizaciones que necesitan revisar una aplicación, configuración o despliegue antes de definir el trabajo de remediación.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Cotización</span>
              <div class="pricing-amount"><strong>A medida</strong><span>según sistemas y riesgo</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Revisión de superficie y configuración de la aplicación.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Hallazgos priorizados y explicados en contexto de negocio.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Hoja de ruta práctica de hardening y remediación.</span></li>
            </ul>
          </article>
        </div>

        <div class="pricing-contact-bar" data-aos="fade-up">
          <p><strong>Cada colaboración comienza con diagnóstico.</strong> El precio final refleja integraciones, sensibilidad de datos, infraestructura y plazo de entrega.</p>
          <a href="#contact">Hablemos de tu proyecto <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </section>

    <!-- Sección de Portafolio -->
    <section id="portfolio" class="portfolio section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TRABAJO SELECCIONADO</h2>
        <p>Software e IA para organizaciones reales</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container">

        <div class="isotope-layout" data-default-filter=".portfolio-featured" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".portfolio-featured" class="filter-active">Destacados</li>
            <li data-filter="*">Todos</li>
            <li data-filter=".filter-software">Software</li>
            <li data-filter=".filter-ai">Inteligencia Artificial</li>
            <li data-filter=".filter-security">Ciberseguridad y Privacidad</li>
            <li data-filter=".filter-research">Investigación y UX</li>
          </ul><!-- Fin de Filtros del Portafolio -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-fasthome.jpg" class="img-fluid" alt="Sitio inmobiliario de Fast Home AG" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Fast Home AG</h4>
                <p>Sitio web para búsqueda inmobiliaria</p>
                <a href="assets/img/masonry-portfolio/portfolio-fasthome.jpg" title="Sitio inmobiliario de Fast Home AG" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://fasthome.ch/" title="Visitar Fast Home AG" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-oma-annis.jpg" class="img-fluid" alt="Sitio web del restaurante Oma Anni's" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Oma Anni's</h4>
                <p>Sitio web de restaurante y menú digital</p>
                <a href="assets/img/masonry-portfolio/portfolio-oma-annis.jpg" title="Sitio web de Oma Anni's" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://oma-annis.ch/" title="Visitar Oma Anni's" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software">
              <img src="assets/img/masonry-portfolio/portfolio-inmoseeker.jpg" class="img-fluid" alt="Plataforma inmobiliaria InmoSeeker" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>InmoSeeker</h4>
                <p>Plataforma de solicitudes y búsqueda inmobiliaria</p>
                <a href="assets/img/masonry-portfolio/portfolio-inmoseeker.jpg" title="Plataforma inmobiliaria InmoSeeker" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://inmoseeker.com/" title="Visitar InmoSeeker" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-diehmension.jpg" class="img-fluid" alt="Sitio corporativo de diehm it-services" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>diehm it-services</h4>
                <p>Sitio corporativo para servicios de software y automatización</p>
                <a href="assets/img/masonry-portfolio/portfolio-diehmension.jpg" title="Sitio corporativo de diehm it-services" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://diehmension.ch/" title="Visitar diehm it-services" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-beauty-palast.jpg" class="img-fluid" alt="Sitio web de Beauty Palast Visp" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Beauty Palast Visp</h4>
                <p>Sitio web de belleza y experiencia de reservas</p>
                <a href="assets/img/masonry-portfolio/portfolio-beauty-palast.jpg" title="Sitio web de Beauty Palast Visp" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://beauty-palast-visp.ch/" title="Visitar Beauty Palast Visp" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-paola-alban.jpg" class="img-fluid" alt="Sitio de marca personal y educación inmobiliaria de Paola Alban" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Paola Albán</h4>
                <p>Marca personal y plataforma de educación inmobiliaria</p>
                <a href="assets/img/masonry-portfolio/portfolio-paola-alban.jpg" title="Plataforma digital de Paola Alban" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://paolaalban.com/" title="Visitar Paola Alban" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-vinesa.webp" class="img-fluid" alt="Portal de privacidad y gestión de solicitudes LOPDP de VINESA" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>VINESA Privacidad</h4>
                <p>Portal de privacidad y gestión de solicitudes LOPDP</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-vinesa.webp" title="Portal de privacidad de VINESA" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.vinesa.com.ec/" title="Visitar el portal de privacidad de VINESA" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-vinlitoral.webp" class="img-fluid" alt="Portal de privacidad y derechos LOPDP de VINLITORAL" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>VINLITORAL Privacidad</h4>
                <p>Portal de privacidad, derechos y solicitudes LOPDP</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-vinlitoral.webp" title="Portal de privacidad de VINLITORAL" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.vinlitoral.com.ec/" title="Visitar el portal de privacidad de VINLITORAL" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-plusbrand.webp" class="img-fluid" alt="Portal de privacidad y atención de solicitudes de PlusBrand" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>PlusBrand Privacidad</h4>
                <p>Portal de privacidad y atención de solicitudes LOPDP</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-plusbrand.webp" title="Portal de privacidad de PlusBrand" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.plusbrand.com.ec/" title="Visitar el portal de privacidad de PlusBrand" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-servmultimarc.webp" class="img-fluid" alt="Portal de privacidad y gestión de derechos de SERVMULTIMARC" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>SERVMULTIMARC Privacidad</h4>
                <p>Portal de privacidad y gestión de derechos LOPDP</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-servmultimarc.webp" title="Portal de privacidad de SERVMULTIMARC" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.laguarda.com.ec/" title="Visitar el portal de privacidad de SERVMULTIMARC" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Captura del sistema web PHP de Favian Lema Lawyers" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Favian Lema Lawyers</h4>
                <p>Sistema Web PHP</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Sistema Web PHP Favian Lema" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.favianlema.com/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Captura de la plataforma Java de Obsidiam Corp" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Obsidiam Corp.</h4>
                <p>Sistema Java Spring Boot</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Sistema Java de Obsidiam para Criptomonedas" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.obsidiam.com" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="Captura del sitio WordPress de ElPeriodicoDeCeuta" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>ElPeriodicoDeCeuta</h4>
                <p>Wordpress Sistema Web</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="ElPeriodicoDeCeuta Wordpress Sistema Web" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.elperiodicodeceuta.es/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg" ></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="Captura de la plataforma React de Openwebinars" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Openwebinars</h4>
                <p>Sistema Web con React + Investigación en TI</p>
                <a href="https://openwebinars.net/autor/xavicq/">Perfil Profesional</a>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="Documentación del Sistema React de Openwebinars + Investigación TI" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://openwebinars.net/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="Captura del periodico digital Masquealdia en WordPress" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Masquealdia</h4>
                <p>Sistema Wordpress</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Masquealdia Newspaper Wordpress" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://masquealdia.com/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="Captura de la plataforma editorial TeleCeuta en WordPress" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>TeleCeuta</h4>
                <p>Wordpress Sistema Web</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="TeleCeuta Wordpress Sistema Web" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.teleceuta.com" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="Captura del sistema de responsabilidad empresarial de CHC Empresarial" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>CHC Empresarial</h4>
                <p>Sistema de Responsabilidad en Wordpress</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="Solución de Sistema de Responsabilidad en Wordpress" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://chcempresarial.com/index.php" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="Captura de la plataforma ULANS de tutoriales y diseno web" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>ULANS</h4>
                <p>Tutoriales y Diseño Web en React + Node JS</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Tutoriales y Diseño Web en React + Node JS de ULANS" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://universidadulans.com/campus/login/index.php" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-ai">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="Captura de la plataforma medica con IA de AINNOVA Technologies" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>AINNOVA Technologies</h4>
                <p>Sistema Médico Django respaldado con IA y Modelos Entrenados</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Sistema Médico Django respaldado con IA y Modelos Entrenados" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.ainnovatech.com/" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" class="img-fluid" alt="Captura de la plataforma Moodle de la PUCE Ecuador" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>PUCE Ecuador</h4>
                <p>Sistema de Plataforma Moodle con PHP y Tailwind UX</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" title="Sistema de Plataforma Moodle de PUCE con PHP y Tailwind UX" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://auth-eva.puce.edu.ec:8443/login?service=https%3A%2F%2Fssoserver2.puce.edu.ec%2F"  target="_blank" rel="noopener" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" class="img-fluid" alt="Vista previa del portafolio de diseno en Behance de Green PC" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Behance</h4>
               <p>Carpeta con trabajos de diseño</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" title="Carpeta de Behance con trabajos de diseño" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.behance.net/xaviercalvas"  target="_blank" rel="noopener" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-ai">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" class="img-fluid" alt="Vista previa de la plataforma RHEA en desarrollo" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>RHEA System Platform (en desarrollo)</h4>
                <p>Sistema Django con Soporte de Automatización con IA</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" title="Plataforma RHEA con soporte de automatización con Django e IA (en desarrollo)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

          </div><!-- Fin del Contenedor del Portafolio -->
          <div class="portfolio-toggle-wrap">
            <button class="portfolio-toggle" type="button" aria-expanded="false" data-show-all="Ver los 22 proyectos" data-show-featured="Ver proyectos destacados">
              <span data-portfolio-toggle-label>Ver los 22 proyectos</span>
              <i class="bi bi-arrow-down-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </section><!-- /Sección de Portafolio -->

    <!-- Explorador de Tecnologías -->
    <section id="clients" class="technology-explorer section" aria-labelledby="technology-title">
      <div class="container section-title" data-aos="fade-up">
        <h2>TECNOLOGÍA CON PROPÓSITO</h2>
        <p id="technology-title">El stack correcto para cada resultado</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="technology-shell" data-technology-explorer>
          <div class="technology-tabs" role="tablist" aria-label="Áreas tecnológicas">
            <button id="tech-development-tab" class="technology-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="tech-development-panel" tabindex="0" data-technology-tab="development">
              <span>01</span><i class="bi bi-code-square"></i><strong>Desarrollo</strong><small>Productos y plataformas</small>
            </button>
            <button id="tech-ai-tab" class="technology-tab" type="button" role="tab" aria-selected="false" aria-controls="tech-ai-panel" tabindex="-1" data-technology-tab="ai">
              <span>02</span><i class="bi bi-stars"></i><strong>IA y automatización</strong><small>Inteligencia útil</small>
            </button>
            <button id="tech-security-tab" class="technology-tab" type="button" role="tab" aria-selected="false" aria-controls="tech-security-panel" tabindex="-1" data-technology-tab="security">
              <span>03</span><i class="bi bi-shield-lock"></i><strong>Ciberseguridad</strong><small>Protección por diseño</small>
            </button>
          </div>

          <div class="technology-panels">
            <article id="tech-development-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-development-tab" data-technology-panel="development">
              <div class="technology-panel-heading">
                <span>Ingeniería de producto</span>
                <h3>Una base mantenible para el crecimiento del producto.</h3>
                <p>Seleccionamos frameworks e infraestructura según el flujo, las integraciones, la escala y el modelo de propiedad del producto.</p>
              </div>
              <div class="technology-stack-grid">
                <div class="technology-stack-card"><small>Interfaz</small><strong>React · TypeScript · Bootstrap</strong><p>Experiencias responsivas y sistemas de interfaz reutilizables.</p></div>
                <div class="technology-stack-card"><small>Aplicación</small><strong>Python · Django · PHP · Node.js</strong><p>Lógica de negocio, APIs e integraciones mantenibles.</p></div>
                <div class="technology-stack-card"><small>Datos y entrega</small><strong>SQL · APIs REST · Cloud · CI/CD</strong><p>Flujos de datos confiables y despliegues repetibles.</p></div>
              </div>
              <div class="technology-criteria"><span>Criterios de selección</span><ul><li>Mantenibilidad</li><li>Ajuste de integración</li><li>Rendimiento</li><li>Propiedad del equipo</li></ul></div>
            </article>

            <article id="tech-ai-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-ai-tab" data-technology-panel="ai" hidden>
              <div class="technology-panel-heading">
                <span>Inteligencia aplicada</span>
                <h3>IA conectada con un flujo medible.</h3>
                <p>El modelo es solo un componente. Combinamos preparación de datos, automatización, evaluación y supervisión humana.</p>
              </div>
              <div class="technology-stack-grid">
                <div class="technology-stack-card"><small>Automatización</small><strong>Python · APIs · OCR</strong><p>Procesamiento de documentos, datos y tareas repetitivas.</p></div>
                <div class="technology-stack-card"><small>Inteligencia</small><strong>LLMs · Machine Learning · Retrieval</strong><p>Asistentes, clasificación y respuestas basadas en conocimiento.</p></div>
                <div class="technology-stack-card"><small>Control</small><strong>Evaluación · Revisión humana · Trazabilidad</strong><p>Controles de calidad y límites de decisión visibles.</p></div>
              </div>
              <div class="technology-criteria"><span>Criterios de selección</span><ul><li>Utilidad de negocio</li><li>Preparación de datos</li><li>Control de calidad</li><li>Costo operativo</li></ul></div>
            </article>

            <article id="tech-security-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-security-tab" data-technology-panel="security" hidden>
              <div class="technology-panel-heading">
                <span>Ingeniería segura</span>
                <h3>Protección integrada en el ciclo del producto.</h3>
                <p>Las decisiones de seguridad responden a la superficie de la aplicación, sensibilidad de datos y riesgo operativo, no a una lista genérica.</p>
              </div>
              <div class="technology-stack-grid">
                <div class="technology-stack-card"><small>Aplicación</small><strong>OWASP · Control de acceso · Validación</strong><p>Revisión de rutas críticas, identidad y comportamiento.</p></div>
                <div class="technology-stack-card"><small>Infraestructura</small><strong>Hardening · Mínimo privilegio · Monitoreo</strong><p>Reducción de exposición en configuración y despliegue.</p></div>
                <div class="technology-stack-card"><small>Privacidad</small><strong>Minimización · Consentimiento · Trazabilidad</strong><p>Gestión de información con propósito y evidencia claros.</p></div>
              </div>
              <div class="technology-criteria"><span>Criterios de selección</span><ul><li>Exposición al riesgo</li><li>Sensibilidad de datos</li><li>Impacto operativo</li><li>Remediación práctica</li></ul></div>
            </article>
          </div>
        </div>
      </div>
    </section><!-- /Explorador de Tecnologías -->

<!-- Call To Action Section -->
<section id="contact" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="Fondo de la sección de contacto de Green PC" loading="lazy" decoding="async">

  <div class="container">
    <div class="cta-panel cta-panel--focused" data-aos="zoom-in" data-aos-delay="100">
      <div class="cta-final-grid">
        <div class="cta-final-copy">
          <span class="cta-kicker"><i class="bi bi-chat-square-dots"></i> Un próximo paso claro</span>
          <h3>Trae el desafío. Te ayudaremos a definir la primera decisión.</h3>
          <p>Cuéntanos qué necesita atención e inicia una conversación directa con nuestro equipo.</p>
          <div class="cta-actions">
            <a class="cta-btn cta-btn-primary" href="mailto:info@greenpc.dev?subject=Diagnostico%20de%20proyecto%20con%20Green%20PC"><i class="bi bi-envelope"></i> Empezar por correo</a>
            <a class="cta-btn cta-btn-secondary" href="https://wa.me/593998784470?text=Hola%20Green%20PC%2C%20quiero%20conversar%20sobre%20un%20proyecto." target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Conversar por WhatsApp</a>
          </div>
          <p class="cta-email-note">¿Prefieres correo? <a href="mailto:info@greenpc.dev?subject=Diagnostico%20de%20proyecto%20con%20Green%20PC">info@greenpc.dev</a></p>
        </div>

        <aside class="cta-next-steps" aria-labelledby="cta-next-steps-title">
          <span class="cta-next-label">Qué sucede después</span>
          <h4 id="cta-next-steps-title">Del contexto a un primer paso accionable.</h4>
          <ol>
            <li><span>01</span><div><strong>Revisamos el contexto</strong><small>Flujo, usuarios, restricciones y riesgos.</small></div></li>
            <li><span>02</span><div><strong>Priorizamos la decisión</strong><small>Se hace visible el siguiente movimiento de mayor valor.</small></div></li>
            <li><span>03</span><div><strong>Definimos el alcance</strong><small>La tecnología sigue al problema, no al revés.</small></div></li>
          </ol>
        </aside>
      </div>

      <div class="cta-trust cta-trust--footer" aria-label="Garantías de colaboración">
        <span><i class="bi bi-file-earmark-lock"></i> NDA disponible</span>
        <span><i class="bi bi-signpost-split"></i> Próximos pasos prácticos</span>
        <span><i class="bi bi-translate"></i> Español / Inglés</span>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

  </main>

  <!-- ===== MODALES DE SERVICIOS (ES) ===== -->

  <!-- Modal: Desarrollo Web -->
  <div class="modal fade" id="modalDesarrolloWeb" tabindex="-1" aria-labelledby="modalDesarrolloWebLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-globe" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalDesarrolloWebLabel">Plataformas web</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Desarrollo Web -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/webdev.jpg" alt="Desarrollo Web" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es el Desarrollo Web?</h6>
              <p>El desarrollo web es el proceso de construir, programar y mantener sitios web y aplicaciones que funcionan en internet. Abarca desde páginas estáticas simples hasta plataformas dinámicas y complejas.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Sitios web y aplicaciones web a medida</li>
                <li><i class="bi bi-check-circle-fill"></i> Frameworks modernos: React, Vue, Laravel, Django</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño responsivo y mobile-first</li>
                <li><i class="bi bi-check-circle-fill"></i> APIs RESTful e integración de backends</li>
                <li><i class="bi bi-check-circle-fill"></i> Optimización de rendimiento y SEO</li>
                <li><i class="bi bi-check-circle-fill"></i> Mantenimiento y soporte continuo</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Desarrollo Web -->

  <!-- Modal: Diseño UX -->
  <div class="modal fade" id="modalDisenoUX" tabindex="-1" aria-labelledby="modalDisenoUXLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-ui-radios" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalDisenoUXLabel">UX de producto</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Diseño UX -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/uxdesign.jpg" alt="Diseño UX" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es el Diseño UX?</h6>
              <p>El Diseño de Experiencia de Usuario (UX) se enfoca en crear productos que brinden experiencias significativas, relevantes y agradables. Cubre todo el recorrido de interacción entre una persona y un producto digital.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Investigación de usuarios y creación de personas</li>
                <li><i class="bi bi-check-circle-fill"></i> Wireframing y prototipado</li>
                <li><i class="bi bi-check-circle-fill"></i> Sistemas de diseño UI y guías de estilo</li>
                <li><i class="bi bi-check-circle-fill"></i> Pruebas de usabilidad e iteración</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño accesible e inclusivo</li>
                <li><i class="bi bi-check-circle-fill"></i> Entrega de diseño para desarrolladores</li>
              </ul>
            </div>
          </div>
        </div>
          <div class="modal-footer service-modal-footer">
            <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
          </div>
      </div>
    </div>
  </div><!-- Fin Modal: Diseño UX -->

  <!-- Modal: Investigación -->
  <div class="modal fade" id="modalInvestigacion" tabindex="-1" aria-labelledby="modalInvestigacionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-journal-richtext" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalInvestigacionLabel">Investigación tecnológica</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Investigación -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/research.jpg" alt="Investigación" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Investigación Tecnológica?</h6>
              <p>La investigación tecnológica implica recopilar, analizar e interpretar datos de forma sistemática para descubrir perspectivas que impulsen mejores decisiones estratégicas, desarrollo de productos y ventaja competitiva.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Análisis de mercado y competencia</li>
                <li><i class="bi bi-check-circle-fill"></i> Estudios de viabilidad tecnológica</li>
                <li><i class="bi bi-check-circle-fill"></i> Recopilación y análisis de datos</li>
                <li><i class="bi bi-check-circle-fill"></i> Informes de investigación asistidos por IA</li>
                <li><i class="bi bi-check-circle-fill"></i> Pronóstico de tendencias e insights</li>
                <li><i class="bi bi-check-circle-fill"></i> Documentación académica e industrial</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Investigación -->

  <!-- Modal: Automatización -->
  <div class="modal fade" id="modalAutomatizacion" tabindex="-1" aria-labelledby="modalAutomatizacionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-robot" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAutomatizacionLabel">Automatización con IA</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Automatización -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/automation.jpg" alt="Automatización" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Automatización con IA?</h6>
              <p>La automatización con IA utiliza inteligencia artificial y aprendizaje automático para ejecutar tareas repetitivas, optimizar flujos de trabajo y tomar decisiones inteligentes, liberando a tu equipo para enfocarse en lo que más importa.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Automatización de flujos y procesos</li>
                <li><i class="bi bi-check-circle-fill"></i> Chatbots de IA y asistentes virtuales</li>
                <li><i class="bi bi-check-circle-fill"></i> RPA (Automatización Robótica de Procesos)</li>
                <li><i class="bi bi-check-circle-fill"></i> Integración con Make, Zapier, n8n</li>
                <li><i class="bi bi-check-circle-fill"></i> Scripts de automatización personalizados y APIs</li>
                <li><i class="bi bi-check-circle-fill"></i> Dashboards de inteligencia de negocio</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Automatización -->

  <!-- Modal: Aplicaciones Móviles -->
  <div class="modal fade" id="modalAppsMoviles" tabindex="-1" aria-labelledby="modalAppsMovilesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-phone" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAppsMovilesLabel">Aplicaciones Móviles</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Aplicaciones Móviles -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/mobileapps.jpg" alt="Aplicaciones Móviles" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué son las Aplicaciones Móviles?</h6>
              <p>Las aplicaciones móviles son programas de software diseñados para ejecutarse en smartphones y tabletas. Brindan acceso rápido y optimizado para pantalla táctil a servicios, información y herramientas desde cualquier lugar.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Desarrollo nativo para iOS y Android</li>
                <li><i class="bi bi-check-circle-fill"></i> Apps multiplataforma (React Native, Flutter)</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño UI/UX para móvil</li>
                <li><i class="bi bi-check-circle-fill"></i> Integración de APIs y backends</li>
                <li><i class="bi bi-check-circle-fill"></i> Publicación en App Store y Google Play</li>
                <li><i class="bi bi-check-circle-fill"></i> Mantenimiento y actualizaciones de versiones</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Aplicaciones Móviles -->

  <!-- Modal: Ciberseguridad -->
  <div class="modal fade" id="modalCiberseguridad" tabindex="-1" aria-labelledby="modalCiberseguridadLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-fingerprint" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalCiberseguridadLabel">Ciberseguridad</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Ciberseguridad -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/cybersecurity.jpg" alt="Ciberseguridad" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Ciberseguridad?</h6>
              <p>La ciberseguridad es la práctica de proteger sistemas, redes y programas de ataques digitales. Implica defenderse contra el acceso no autorizado, brechas de datos, ransomware y otras amenazas cibernéticas.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Auditorías de seguridad y evaluación de vulnerabilidades</li>
                <li><i class="bi bi-check-circle-fill"></i> Pruebas de penetración</li>
                <li><i class="bi bi-check-circle-fill"></i> Cifrado de datos y protocolos seguros</li>
                <li><i class="bi bi-check-circle-fill"></i> Firewall y detección de intrusiones</li>
                <li><i class="bi bi-check-circle-fill"></i> Capacitación en seguridad para equipos</li>
                <li><i class="bi bi-check-circle-fill"></i> Cumplimiento normativo (GDPR, ISO 27001)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Ciberseguridad -->


  <nav class="mobile-action-bar" aria-label="Acciones rápidas del proyecto" data-mobile-action-bar>
    <a href="#project-navigator" class="mobile-action-route"><i class="bi bi-signpost-split"></i><span>Elegir una ruta</span></a>
    <a href="#contact" class="mobile-action-primary"><span>Iniciar proyecto</span><i class="bi bi-arrow-up-right"></i></a>
  </nav>

<?php
$pageUsesSwiper = false;
$pageUsesPhpEmailForm = false;
$pageUsesPureCounter = false;
include_once './assets/includes/footer-es.php'; // Include the footer file
?>
