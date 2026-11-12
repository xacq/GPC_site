<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Green PC — Software Development, AI & Cybersecurity</title>
  <meta name="description" content="Green PC builds secure software, practical AI automation and cybersecurity solutions for organizations ready to modernize and scale.">
  <meta name="keywords" content="web development, AI, artificial intelligence, UX design, cybersecurity, mobile apps, digital solutions, automation, Green PC">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#071729">
  <meta property="og:title" content="Green PC — Software Development, AI & Cybersecurity">
  <meta property="og:description" content="Secure software engineering, practical AI automation and cybersecurity for modern organizations.">
  <meta property="og:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="1280">
  <meta property="og:image:alt" content="Green PC digital product engineering, AI and cybersecurity">
  <meta property="og:url" content="https://greenpc.dev/">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Green PC">
  <meta property="og:locale" content="en_US">
  <meta property="og:locale:alternate" content="es_EC">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Green PC — Software Development, AI & Cybersecurity">
  <meta name="twitter:description" content="Secure software engineering, practical AI automation and cybersecurity for modern organizations.">
  <meta name="twitter:image" content="https://greenpc.dev/assets/img/hero-bg.jpg">
  <meta name="twitter:image:alt" content="Green PC digital product engineering, AI and cybersecurity">
  <link rel="canonical" href="https://greenpc.dev/">
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
    "url": "https://greenpc.dev/",
    "logo": "https://greenpc.dev/assets/img/logo.png",
    "image": "https://greenpc.dev/assets/img/hero-bg.jpg",
    "description": "Secure software development, artificial intelligence automation and cybersecurity services.",
    "areaServed": "Worldwide",
    "address": {"@type": "PostalAddress", "addressLocality": "Cuenca", "addressCountry": "EC"},
    "email": "info@greenpc.dev",
    "telephone": "+593998784470",
    "availableLanguage": ["English", "Spanish"],
    "sameAs": [
      "https://www.facebook.com/greenpcecuador/",
      "https://www.linkedin.com/in/greenpc/",
      "https://github.com/xacq",
      "https://www.behance.net/xaviercalvas"
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Technology services",
      "itemListElement": [
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Custom software engineering"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI automation and integration"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Application cybersecurity"}}
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

  <a class="skip-link" href="#main-content">Skip to main content</a>


<!-- LOGO FLOTANTE -->
<!--div id="logo-float-wrap" class="floating-commit">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link" class="floating-commit__link">
    <img
      src="./assets/img/commit_logo.png"
      id="logo-float"
      class="floating-commit__img"
      alt="COMMIT by GreenPC"
    />
  </a>
</div>

	<!-- POPUP VACACIONALES GREEN PC -->
	<!--div id="vacacionalesPopup" class="gpc-popup-overlay">
	  <div class="gpc-popup-box">
	    <button class="gpc-popup-close" onclick="cerrarPopupVacacionales()">×</button>
	
	    <a href="https://wa.me/593998784470" target="_blank" rel="noopener">
	      <img 
	        src="./assets/img/vaca.png" 
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
</script-->

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
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#services">Capabilities</a></li>
          <li><a href="#portfolio">Work</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="./examples.php">Examples</a></li>
          <li class="nav-contact-mobile"><a href="#contact"><i class="bi bi-arrow-up-right-circle"></i> Start a project</a></li>
        </ul>
        <button type="button" class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Open navigation" aria-expanded="false" data-label-open="Open navigation" data-label-close="Close navigation"></button>
      </nav>
      <div class="header-actions">
        <a class="header-language" href="./index_es.php" aria-label="View website in Spanish"><i class="bi bi-translate"></i><span>Español</span></a>
        <a class="header-project-cta" href="#contact">Start a project <i class="bi bi-arrow-up-right"></i></a>
      </div>
    </div>
    <div class="site-scroll-progress" aria-hidden="true"><span data-scroll-progress></span></div>
  </header>

  <main id="main-content" class="main" tabindex="-1">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background hero-landing">

      <img src="assets/img/hero-bg.jpg" alt="Digital product background for Green PC" width="1920" height="1280" data-aos="fade-in" fetchpriority="high" decoding="async">

      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7 hero-landing-copy" data-aos="fade-up" data-aos-delay="100">
            <span class="hero-badge-pill"><i class="bi bi-stars"></i> Development · AI · Cybersecurity</span>
            <h1>Build smarter. Automate with AI. Operate securely.</h1>
            <p class="hero-lead">We engineer secure digital products, integrate practical artificial intelligence and strengthen the systems your organization depends on.</p>
            <div class="hero-action-row">
              <a class="hero-primary-btn" href="#services"><i class="bi bi-grid-1x2-fill"></i> Explore capabilities</a>
              <a class="hero-secondary-btn" href="#portfolio"><i class="bi bi-briefcase-fill"></i> See portfolio</a>
            </div>
            <div class="hero-proof-grid">
              <div class="hero-proof-card">
                <strong>22</strong>
                <span>selected projects visible in our portfolio</span>
              </div>
              <div class="hero-proof-card">
                <strong>10</strong>
                <span>recent launches featured first</span>
              </div>
              <div class="hero-proof-card">
                <strong>3</strong>
                <span>connected capabilities: software, AI and security</span>
              </div>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="180">
            <aside class="hero-focus-card">
              <span class="hero-focus-label">Three connected capabilities</span>
              <h3>Technology designed to create value and reduce risk.</h3>
              <p>We bring development, AI and cybersecurity into one delivery model so innovation remains useful, maintainable and protected.</p>
              <ul>
                <li><i class="bi bi-code-slash"></i><span>Custom software and platforms aligned with real operational workflows.</span></li>
                <li><i class="bi bi-robot"></i><span>AI assistants and automation that augment teams and remove repetitive work.</span></li>
                <li><i class="bi bi-shield-check"></i><span>Security reviews, hardening and privacy-aware engineering from the start.</span></li>
              </ul>
            </aside>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Project Navigator Section -->
    <section id="project-navigator" class="project-navigator section" aria-labelledby="project-navigator-title">
      <div class="container">
        <div class="project-navigator-shell" data-project-navigator data-aos="fade-up">
          <div class="project-navigator-intro">
            <span class="project-navigator-kicker"><i class="bi bi-signpost-split"></i> Start with your priority</span>
            <h2 id="project-navigator-title">What needs to move forward?</h2>
            <p>Choose the outcome you need. We will show you the most relevant route, capabilities and next step.</p>

            <div class="project-route-tabs" role="tablist" aria-label="Project priorities">
              <button id="route-build-tab" class="project-route-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="route-build-panel" tabindex="0" data-route-tab="build">
                <span class="project-route-icon"><i class="bi bi-code-square"></i></span>
                <span><strong>Build</strong><small>A product or platform</small></span>
              </button>
              <button id="route-automate-tab" class="project-route-tab" type="button" role="tab" aria-selected="false" aria-controls="route-automate-panel" tabindex="-1" data-route-tab="automate">
                <span class="project-route-icon"><i class="bi bi-stars"></i></span>
                <span><strong>Automate</strong><small>A workflow with AI</small></span>
              </button>
              <button id="route-secure-tab" class="project-route-tab" type="button" role="tab" aria-selected="false" aria-controls="route-secure-panel" tabindex="-1" data-route-tab="secure">
                <span class="project-route-icon"><i class="bi bi-shield-lock"></i></span>
                <span><strong>Secure</strong><small>A system or operation</small></span>
              </button>
            </div>
          </div>

          <div class="project-route-content">
            <article id="route-build-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-build-tab" data-route-panel="build">
              <span class="project-route-number">01 / Product engineering</span>
              <h3>Launch a digital product that fits the operation.</h3>
              <p>We turn an idea or manual process into a maintainable web platform, internal system or mobile experience.</p>
              <ul>
                <li><i class="bi bi-check2"></i> Product strategy and UX</li>
                <li><i class="bi bi-check2"></i> Custom web and mobile development</li>
                <li><i class="bi bi-check2"></i> Integrations, testing and deployment</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explore development <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="#portfolio">See selected work</a>
              </div>
            </article>

            <article id="route-automate-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-automate-tab" data-route-panel="automate" hidden>
              <span class="project-route-number">02 / Applied AI</span>
              <h3>Turn repetitive work into an AI-assisted workflow.</h3>
              <p>We identify useful automation opportunities and build pilots that keep people in control of critical decisions.</p>
              <ul>
                <li><i class="bi bi-check2"></i> AI assistants and knowledge search</li>
                <li><i class="bi bi-check2"></i> Document and data processing</li>
                <li><i class="bi bi-check2"></i> Measurable pilots with human oversight</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explore AI solutions <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="examples.php#ejemplos">See working examples</a>
              </div>
            </article>

            <article id="route-secure-panel" class="project-route-panel" role="tabpanel" aria-labelledby="route-secure-tab" data-route-panel="secure" hidden>
              <span class="project-route-number">03 / Cybersecurity</span>
              <h3>Reduce exposure before the next stage of growth.</h3>
              <p>We review the technology, prioritize real risks and strengthen the product without slowing down delivery.</p>
              <ul>
                <li><i class="bi bi-check2"></i> Application and architecture review</li>
                <li><i class="bi bi-check2"></i> Hardening and remediation roadmap</li>
                <li><i class="bi bi-check2"></i> Privacy-aware engineering practices</li>
              </ul>
              <div class="project-route-actions">
                <a class="project-route-primary" href="#services">Explore cybersecurity <i class="bi bi-arrow-up-right"></i></a>
                <a class="project-route-secondary" href="portal_lopdp.php">View privacy platform</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section><!-- /Project Navigator Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>DEVELOPMENT, AI &amp; CYBERSECURITY</h2>
        <p>Engineering, AI and security. One technology partner.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="capabilities-grid">
          <article class="capability-card capability-card--development" data-aos="fade-up" data-aos-delay="100">
            <div class="capability-number">01</div>
            <div class="capability-icon"><i class="bi bi-code-square"></i></div>
            <span class="capability-kicker">Software Engineering</span>
            <h3>Digital products built for real operations</h3>
            <p>We design and engineer maintainable web platforms, internal systems and mobile experiences around your workflows.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Custom platforms and business systems</li>
              <li><i class="bi bi-check2"></i> Product UX, architecture and integrations</li>
              <li><i class="bi bi-check2"></i> Modernization and scalable delivery</li>
            </ul>
            <div class="capability-actions" aria-label="Software engineering details">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalWebDev">Web platforms</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalUXDesign">Product UX</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalMobileApps">Mobile apps</button>
            </div>
          </article>

          <article class="capability-card capability-card--ai" data-aos="fade-up" data-aos-delay="180">
            <div class="capability-number">02</div>
            <div class="capability-icon"><i class="bi bi-cpu"></i></div>
            <span class="capability-kicker">Artificial Intelligence</span>
            <h3>AI that improves decisions and execution</h3>
            <p>We connect AI to existing processes so teams can automate repetitive work, organize information and respond faster.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Assistants and intelligent workflows</li>
              <li><i class="bi bi-check2"></i> Document processing and classification</li>
              <li><i class="bi bi-check2"></i> Research, prototypes and AI integration</li>
            </ul>
            <div class="capability-actions" aria-label="Artificial intelligence details">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalAutomation">AI automation</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalResearch">Research</button>
            </div>
          </article>

          <article class="capability-card capability-card--security" data-aos="fade-up" data-aos-delay="260">
            <div class="capability-number">03</div>
            <div class="capability-icon"><i class="bi bi-shield-lock"></i></div>
            <span class="capability-kicker">Cybersecurity</span>
            <h3>Security integrated into every layer</h3>
            <p>We identify weaknesses, strengthen applications and help organizations handle data with greater confidence.</p>
            <ul>
              <li><i class="bi bi-check2"></i> Application and configuration reviews</li>
              <li><i class="bi bi-check2"></i> Hardening and risk reduction</li>
              <li><i class="bi bi-check2"></i> Privacy and compliance support</li>
            </ul>
            <div class="capability-actions" aria-label="Cybersecurity details">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modalCybersecurity">Security services</button>
            </div>
          </article>
        </div>

      </div>

    </section><!-- /Services Section -->

    <section id="pricing" class="pricing-showcase section">
      <div class="container pricing-shell">
        <div class="pricing-intro" data-aos="fade-up">
          <span class="pricing-kicker"><i class="bi bi-compass"></i> Engagement models</span>
          <h2>Start with the right scope—not a generic technology package.</h2>
          <p>Each engagement begins with discovery. These reference points help teams choose a practical first step before defining the final scope.</p>
        </div>

        <div class="pricing-grid">
          <article class="pricing-card" data-aos="fade-up" data-aos-delay="50">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-code-square"></i></span>
              <span class="pricing-tag">Development</span>
            </div>
            <h3>Product &amp; platform delivery</h3>
            <p>For custom websites, internal systems, portals and digital products that need a reliable technical foundation.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Initial scope from</span>
              <div class="pricing-amount"><strong>800 USD</strong><span>defined after discovery</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Workflow discovery and technical architecture.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Responsive interface, backend and integrations.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Deployment-ready delivery with security considerations.</span></li>
            </ul>
          </article>

          <article class="pricing-card pricing-card--featured" data-aos="fade-up" data-aos-delay="120">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-cpu"></i></span>
              <span class="pricing-tag">Artificial Intelligence</span>
            </div>
            <h3>AI workflow pilot</h3>
            <p>For teams that want to validate one useful AI use case before committing to a broader transformation.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Initial scope from</span>
              <div class="pricing-amount"><strong>500 USD</strong><span>pilot engagement</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Use-case definition and data readiness review.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Working prototype connected to a real workflow.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Evaluation criteria and scale-up roadmap.</span></li>
            </ul>
          </article>

          <article class="pricing-card" data-aos="fade-up" data-aos-delay="190">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-shield-check"></i></span>
              <span class="pricing-tag">Cybersecurity</span>
            </div>
            <h3>Application security review</h3>
            <p>For organizations that need a focused review of an application, configuration or deployment before defining remediation work.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Quote</span>
              <div class="pricing-amount"><strong>Tailored</strong><span>to systems and risk</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Application surface and configuration review.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Prioritized findings explained in business context.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Practical hardening and remediation roadmap.</span></li>
            </ul>
          </article>
        </div>

        <div class="pricing-contact-bar" data-aos="fade-up">
          <p><strong>Every engagement starts with discovery.</strong> Final pricing reflects integrations, data sensitivity, infrastructure and delivery timeline.</p>
          <a href="#contact">Discuss your project <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </section>


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SELECTED WORK</h2>
        <p>Software and AI built for real organizations</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter=".portfolio-featured" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".portfolio-featured" class="filter-active">Featured</li>
            <li data-filter="*">All</li>
            <li data-filter=".filter-software">Software</li>
            <li data-filter=".filter-ai">Artificial Intelligence</li>
            <li data-filter=".filter-security">Cybersecurity &amp; Privacy</li>
            <li data-filter=".filter-research">Research &amp; UX</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-fasthome.jpg" class="img-fluid" alt="Fast Home AG real estate website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Fast Home AG</h4>
                <p>Real estate discovery website</p>
                <a href="assets/img/masonry-portfolio/portfolio-fasthome.jpg" title="Fast Home AG real estate website" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://fasthome.ch/" title="Visit Fast Home AG" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-oma-annis.jpg" class="img-fluid" alt="Oma Anni's restaurant website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Oma Anni's</h4>
                <p>Restaurant website and digital menu</p>
                <a href="assets/img/masonry-portfolio/portfolio-oma-annis.jpg" title="Oma Anni's restaurant website" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://oma-annis.ch/" title="Visit Oma Anni's" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software">
              <img src="assets/img/masonry-portfolio/portfolio-inmoseeker.jpg" class="img-fluid" alt="InmoSeeker real estate request platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>InmoSeeker</h4>
                <p>Real estate request and search platform</p>
                <a href="assets/img/masonry-portfolio/portfolio-inmoseeker.jpg" title="InmoSeeker real estate platform" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://inmoseeker.com/" title="Visit InmoSeeker" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-diehmension.jpg" class="img-fluid" alt="diehm it-services corporate website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>diehm it-services</h4>
                <p>Corporate website for software and automation services</p>
                <a href="assets/img/masonry-portfolio/portfolio-diehmension.jpg" title="diehm it-services corporate website" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://diehmension.ch/" title="Visit diehm it-services" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-beauty-palast.jpg" class="img-fluid" alt="Beauty Palast Visp website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Beauty Palast Visp</h4>
                <p>Beauty studio website and appointment journey</p>
                <a href="assets/img/masonry-portfolio/portfolio-beauty-palast.jpg" title="Beauty Palast Visp website" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://beauty-palast-visp.ch/" title="Visit Beauty Palast Visp" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-research">
              <img src="assets/img/masonry-portfolio/portfolio-paola-alban.jpg" class="img-fluid" alt="Paola Alban personal brand and real estate education website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Paola Albán</h4>
                <p>Personal brand and real estate education platform</p>
                <a href="assets/img/masonry-portfolio/portfolio-paola-alban.jpg" title="Paola Alban digital platform" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://paolaalban.com/" title="Visit Paola Alban" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-vinesa.webp" class="img-fluid" alt="VINESA privacy and LOPDP request management portal" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>VINESA Privacy</h4>
                <p>Privacy and LOPDP request management portal</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-vinesa.webp" title="VINESA privacy portal" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.vinesa.com.ec/" title="Visit the VINESA privacy portal" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-vinlitoral.webp" class="img-fluid" alt="VINLITORAL privacy rights and LOPDP request portal" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>VINLITORAL Privacy</h4>
                <p>Privacy, rights and LOPDP request portal</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-vinlitoral.webp" title="VINLITORAL privacy portal" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.vinlitoral.com.ec/" title="Visit the VINLITORAL privacy portal" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-plusbrand.webp" class="img-fluid" alt="PlusBrand privacy and LOPDP request portal" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>PlusBrand Privacy</h4>
                <p>Privacy and LOPDP request management portal</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-plusbrand.webp" title="PlusBrand privacy portal" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.plusbrand.com.ec/" title="Visit the PlusBrand privacy portal" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item portfolio-featured filter-software filter-security">
              <img src="assets/img/masonry-portfolio/portfolio-privacidad-servmultimarc.webp" class="img-fluid" alt="SERVMULTIMARC privacy and data rights management portal" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>SERVMULTIMARC Privacy</h4>
                <p>Privacy and LOPDP rights management portal</p>
                <a href="assets/img/masonry-portfolio/portfolio-privacidad-servmultimarc.webp" title="SERVMULTIMARC privacy portal" data-gallery="portfolio-gallery-privacy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://privacidad.laguarda.com.ec/" title="Visit the SERVMULTIMARC privacy portal" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Screenshot of the Favian Lema Lawyers PHP web system" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Favian Lema Lawyers</h4>
                <p>PHP Web System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Favian Lema PHP Web System" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.favianlema.com/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Screenshot of the Obsidiam Corp Java Spring Boot platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Obsidiam Corp.</h4>
                <p>Java Spring Boot System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Obsidiam Java System for Criptocoins" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.obsidiam.com" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="Screenshot of the ElPeriodicoDeCeuta WordPress website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>ElPeriodicoDeCeuta</h4>
                <p>WordPress System </p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="elperiodicodeceuta.es WordPress System" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.elperiodicodeceuta.es/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg" ></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="Screenshot of the Openwebinars React web platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Openwebinars</h4>
                <p>React Web System + Researching IT</p>
                <a href="https://openwebinars.net/autor/xavicq/">Professional Profile</a>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="Openwebinars React System + Researching IT Documentation" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://openwebinars.net/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="Screenshot of the Masquealdia WordPress news site" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Masquealdia</h4>
                <p>Wordpress System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Masquealdia Newspaper Wordpress" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://masquealdia.com/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="Screenshot of the TeleCeuta WordPress publishing platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>TeleCeuta</h4>
                <p>Wordpress System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="TeleCeuta Wordpress System" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.teleceuta.com" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="Screenshot of the CHC Empresarial accountability website" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>CHC Empresarial</h4>
                <p>Wordpress Accountability System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="Wordpress Accountability System Solution" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://chcempresarial.com/index.php" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="Screenshot of the ULANS tutorials and web design platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>ULANS</h4>
                <p>Tutorials and Web Design on React + Node JS</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="ULANS Tutorials and Web Design on on React + Node JS" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://universidadulans.com/campus/login/index.php" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-ai">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="Screenshot of the AINNOVA Technologies medical AI platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>AINNOVA Technologies</h4>
               <p>Django Medical System supported with AI and Models Trained</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Django Medical System supported with AI and Models Trained" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.ainnovatech.com/" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" class="img-fluid" alt="Screenshot of the PUCE Ecuador Moodle platform" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>PUCE Ecuador</h4>
               <p>Moodle Platform System with PHP and Tailwind UX</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" title="PUCE Moodle Platform System with PHP and Tailwind UX" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://auth-eva.puce.edu.ec:8443/login?service=https%3A%2F%2Fssoserver2.puce.edu.ec%2F"  target="_blank" rel="noopener" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-research">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" class="img-fluid" alt="Preview of the Green PC Behance design portfolio" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>Behance</h4>
               <p>Folder with design works</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" title="Behance Folder with design works" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.behance.net/xaviercalvas"  target="_blank" rel="noopener" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software filter-ai">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" class="img-fluid" alt="Preview of the RHEA platform under development" loading="lazy" decoding="async">
              <div class="portfolio-info">
                <h4>RHEA System Platform (on dev)</h4>
               <p>Django System with AI Automatization Support</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" title="RHEA System Platform with Django and AI Automatization Support (developing)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <!--a href="#"  target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a-->
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
          <div class="portfolio-toggle-wrap">
            <button class="portfolio-toggle" type="button" aria-expanded="false" data-show-all="View all 22 projects" data-show-featured="Show featured projects">
              <span data-portfolio-toggle-label>View all 22 projects</span>
              <i class="bi bi-arrow-down-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </section><!-- /Portfolio Section -->

<!-- Technology Explorer -->
<section id="clients" class="technology-explorer section" aria-labelledby="technology-title">
  <div class="container section-title" data-aos="fade-up">
    <h2>TECHNOLOGY, WITH A REASON</h2>
    <p id="technology-title">The right stack for each outcome</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="technology-shell" data-technology-explorer>
      <div class="technology-tabs" role="tablist" aria-label="Technology areas">
        <button id="tech-development-tab" class="technology-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="tech-development-panel" tabindex="0" data-technology-tab="development">
          <span>01</span><i class="bi bi-code-square"></i><strong>Development</strong><small>Products and platforms</small>
        </button>
        <button id="tech-ai-tab" class="technology-tab" type="button" role="tab" aria-selected="false" aria-controls="tech-ai-panel" tabindex="-1" data-technology-tab="ai">
          <span>02</span><i class="bi bi-stars"></i><strong>AI &amp; automation</strong><small>Useful intelligence</small>
        </button>
        <button id="tech-security-tab" class="technology-tab" type="button" role="tab" aria-selected="false" aria-controls="tech-security-panel" tabindex="-1" data-technology-tab="security">
          <span>03</span><i class="bi bi-shield-lock"></i><strong>Cybersecurity</strong><small>Protection by design</small>
        </button>
      </div>

      <div class="technology-panels">
        <article id="tech-development-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-development-tab" data-technology-panel="development">
          <div class="technology-panel-heading">
            <span>Product engineering</span>
            <h3>A maintainable foundation for product growth.</h3>
            <p>We select frameworks and infrastructure around the workflow, integrations, scale and ownership model of the product.</p>
          </div>
          <div class="technology-stack-grid">
            <div class="technology-stack-card"><small>Interface</small><strong>React · TypeScript · Bootstrap</strong><p>Responsive experiences and reusable interface systems.</p></div>
            <div class="technology-stack-card"><small>Application</small><strong>Python · Django · PHP · Node.js</strong><p>Business logic, APIs and integrations built for maintainability.</p></div>
            <div class="technology-stack-card"><small>Data &amp; delivery</small><strong>SQL · REST APIs · Cloud · CI/CD</strong><p>Reliable data flows and repeatable deployment practices.</p></div>
          </div>
          <div class="technology-criteria"><span>Selection criteria</span><ul><li>Maintainability</li><li>Integration fit</li><li>Performance</li><li>Team ownership</li></ul></div>
        </article>

        <article id="tech-ai-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-ai-tab" data-technology-panel="ai" hidden>
          <div class="technology-panel-heading">
            <span>Applied intelligence</span>
            <h3>AI connected to a measurable workflow.</h3>
            <p>The model is only one component. We combine data preparation, automation, evaluation and human oversight.</p>
          </div>
          <div class="technology-stack-grid">
            <div class="technology-stack-card"><small>Automation</small><strong>Python · APIs · OCR</strong><p>Document, data and repetitive workflow processing.</p></div>
            <div class="technology-stack-card"><small>Intelligence</small><strong>LLMs · Machine learning · Retrieval</strong><p>Assistants, classification and knowledge-based responses.</p></div>
            <div class="technology-stack-card"><small>Control</small><strong>Evaluation · Human review · Traceability</strong><p>Quality checks and visible decision boundaries.</p></div>
          </div>
          <div class="technology-criteria"><span>Selection criteria</span><ul><li>Business usefulness</li><li>Data readiness</li><li>Quality controls</li><li>Operating cost</li></ul></div>
        </article>

        <article id="tech-security-panel" class="technology-panel" role="tabpanel" aria-labelledby="tech-security-tab" data-technology-panel="security" hidden>
          <div class="technology-panel-heading">
            <span>Secure engineering</span>
            <h3>Protection embedded in the product lifecycle.</h3>
            <p>Security choices follow the application surface, data sensitivity and operational risk—not a generic checklist.</p>
          </div>
          <div class="technology-stack-grid">
            <div class="technology-stack-card"><small>Application</small><strong>OWASP · Access control · Validation</strong><p>Reviewing critical paths, identity and application behavior.</p></div>
            <div class="technology-stack-card"><small>Infrastructure</small><strong>Hardening · Least privilege · Monitoring</strong><p>Reducing exposure across configuration and deployment.</p></div>
            <div class="technology-stack-card"><small>Privacy</small><strong>Data minimization · Consent · Traceability</strong><p>Handling information with clearer purpose and evidence.</p></div>
          </div>
          <div class="technology-criteria"><span>Selection criteria</span><ul><li>Risk exposure</li><li>Data sensitivity</li><li>Operational impact</li><li>Practical remediation</li></ul></div>
        </article>
      </div>
    </div>
  </div>
</section><!-- /Technology Explorer -->

<!-- Call To Action Section -->
<section id="contact" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="Background for Green PC contact section" loading="lazy" decoding="async">

  <div class="container">
    <div class="cta-panel cta-panel--focused" data-aos="zoom-in" data-aos-delay="100">
      <div class="cta-final-grid">
        <div class="cta-final-copy">
          <span class="cta-kicker"><i class="bi bi-chat-square-dots"></i> A clear next step</span>
          <h3>Bring the challenge. We will help shape the first decision.</h3>
          <p>Tell us what needs attention and start a direct conversation with our team.</p>
          <div class="cta-actions">
            <a class="cta-btn cta-btn-primary" href="mailto:info@greenpc.dev?subject=Project%20discovery%20with%20Green%20PC"><i class="bi bi-envelope"></i> Start by email</a>
            <a class="cta-btn cta-btn-secondary" href="https://wa.me/593998784470?text=Hello%20Green%20PC%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Talk on WhatsApp</a>
          </div>
          <p class="cta-email-note">Prefer email? <a href="mailto:info@greenpc.dev?subject=Project%20discovery%20with%20Green%20PC">info@greenpc.dev</a></p>
        </div>

        <aside class="cta-next-steps" aria-labelledby="cta-next-steps-title">
          <span class="cta-next-label">What happens next</span>
          <h4 id="cta-next-steps-title">From context to an actionable first step.</h4>
          <ol>
            <li><span>01</span><div><strong>Review the context</strong><small>Workflow, users, constraints and risks.</small></div></li>
            <li><span>02</span><div><strong>Prioritize the decision</strong><small>The highest-value next move becomes visible.</small></div></li>
            <li><span>03</span><div><strong>Define the right scope</strong><small>Technology follows the problem, not the reverse.</small></div></li>
          </ol>
        </aside>
      </div>

      <div class="cta-trust cta-trust--footer" aria-label="Engagement assurances">
        <span><i class="bi bi-file-earmark-lock"></i> NDA available</span>
        <span><i class="bi bi-signpost-split"></i> Practical next steps</span>
        <span><i class="bi bi-translate"></i> English / Spanish</span>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

  </main>

  <!-- ===== SERVICE MODALS (EN) ===== -->

  <!-- Modal: Web Dev -->
  <div class="modal fade" id="modalWebDev" tabindex="-1" aria-labelledby="modalWebDevLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-globe" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalWebDevLabel">Web platforms</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Web Dev image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/webdev.jpg" alt="Web Development" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Web Development?</h6> -->
              <!-- <p>Web development is the process of building, programming, and maintaining websites and web applications that live on the internet. It encompasses everything from simple static pages to complex dynamic platforms.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Custom websites and web applications</li>
                <li><i class="bi bi-check-circle-fill"></i> Modern frameworks: React, Node.js, Laravel, Django, etc.</li>
                <li><i class="bi bi-check-circle-fill"></i> Fully responsive &amp; mobile-first design</li>
                <li><i class="bi bi-check-circle-fill"></i> RESTful APIs &amp; backend integration</li>
                <li><i class="bi bi-check-circle-fill"></i> Performance optimization &amp; SEO</li>
                <li><i class="bi bi-check-circle-fill"></i> Ongoing maintenance &amp; support</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Web Dev -->

  <!-- Modal: UX Design -->
  <div class="modal fade" id="modalUXDesign" tabindex="-1" aria-labelledby="modalUXDesignLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-ui-radios" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalUXDesignLabel">Product UX</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your UX Design image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/uxdesign.jpg" alt="UX Design" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is UX Design?</h6> -->
              <!-- <p>User Experience (UX) Design focuses on creating products that deliver meaningful, relevant, and enjoyable experiences to users. It covers the entire journey of interaction between a person and a product.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> User research &amp; persona creation</li>
                <li><i class="bi bi-check-circle-fill"></i> Wireframing &amp; prototyping</li>
                <li><i class="bi bi-check-circle-fill"></i> UI design systems &amp; style guides</li>
                <li><i class="bi bi-check-circle-fill"></i> Usability testing &amp; iteration</li>
                <li><i class="bi bi-check-circle-fill"></i> Accessible &amp; inclusive design</li>
                <li><i class="bi bi-check-circle-fill"></i> Design handoff for developers</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: UX Design -->

  <!-- Modal: Research -->
  <div class="modal fade" id="modalResearch" tabindex="-1" aria-labelledby="modalResearchLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-journal-richtext" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalResearchLabel">Technology research</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Research image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/research.jpg" alt="Research" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Technology Research?</h6>
              <p>Technology research involves systematically gathering, analyzing, and interpreting data to uncover insights that drive better strategic decisions, product development, and competitive advantage.</p> -->
              
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Market &amp; competitive analysis</li>
                <li><i class="bi bi-check-circle-fill"></i> Technology feasibility studies</li>
                <li><i class="bi bi-check-circle-fill"></i> Data collection &amp; analytics</li>
                <li><i class="bi bi-check-circle-fill"></i> AI-assisted research reports</li>
                <li><i class="bi bi-check-circle-fill"></i> Trend forecasting &amp; insights</li>
                <li><i class="bi bi-check-circle-fill"></i> Academic &amp; industry documentation</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Research -->

  <!-- Modal: Automation -->
  <div class="modal fade" id="modalAutomation" tabindex="-1" aria-labelledby="modalAutomationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-robot"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAutomationLabel">AI automation</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Automation image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/automation.jpg" alt="Automation" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is AI Automation?</h6>
              <p>AI Automation uses artificial intelligence and machine learning to perform repetitive tasks, optimize workflows, and make intelligent decisions — freeing your team to focus on what matters most.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Workflow &amp; process automation</li>
                <li><i class="bi bi-check-circle-fill"></i> AI chatbots &amp; virtual assistants</li>
                <li><i class="bi bi-check-circle-fill"></i> RPA (Robotic Process Automation)</li>
                <li><i class="bi bi-check-circle-fill"></i> Integration with Make, Zapier, n8n</li>
                <li><i class="bi bi-check-circle-fill"></i> Custom automation scripts &amp; APIs</li>
                <li><i class="bi bi-check-circle-fill"></i> Business intelligence dashboards</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Automation -->

  <!-- Modal: Mobile Apps -->
  <div class="modal fade" id="modalMobileApps" tabindex="-1" aria-labelledby="modalMobileAppsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-phone"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalMobileAppsLabel">Mobile Apps</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Mobile Apps image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/mobileapps.jpg" alt="Mobile Apps" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What are Mobile Apps?</h6>
              <p>Mobile applications are software programs designed to run on smartphones and tablets. They provide users with quick, touchscreen-optimized access to services, information, and tools from anywhere.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Native iOS &amp; Android development</li>
                <li><i class="bi bi-check-circle-fill"></i> Cross-platform apps (React Native, Flutter)</li>
                <li><i class="bi bi-check-circle-fill"></i> UI/UX design for mobile</li>
                <li><i class="bi bi-check-circle-fill"></i> API &amp; backend integration</li>
                <li><i class="bi bi-check-circle-fill"></i> App Store &amp; Google Play publishing</li>
                <li><i class="bi bi-check-circle-fill"></i> Maintenance &amp; version updates</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Mobile Apps -->

  <!-- Modal: Cybersecurity -->
  <div class="modal fade" id="modalCybersecurity" tabindex="-1" aria-labelledby="modalCybersecurityLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-fingerprint"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalCybersecurityLabel">Cybersecurity</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Cybersecurity image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/cybersecurity.jpg" alt="Cybersecurity" class="img-fluid rounded service-modal-img" loading="lazy" decoding="async" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Cybersecurity?</h6>
              <p>Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. It involves defending against unauthorized access, data breaches, ransomware, and other cyber threats.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Security audits &amp; vulnerability assessments</li>
                <li><i class="bi bi-check-circle-fill"></i> Penetration testing</li>
                <li><i class="bi bi-check-circle-fill"></i> Data encryption &amp; secure protocols</li>
                <li><i class="bi bi-check-circle-fill"></i> Firewall &amp; intrusion detection</li>
                <li><i class="bi bi-check-circle-fill"></i> Security training for teams</li>
                <li><i class="bi bi-check-circle-fill"></i> Compliance (GDPR, ISO 27001)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>

      </div>
    </div>
  </div><!-- End Modal: Cybersecurity -->



  <nav class="mobile-action-bar" aria-label="Quick project actions" data-mobile-action-bar>
    <a href="#project-navigator" class="mobile-action-route"><i class="bi bi-signpost-split"></i><span>Choose a route</span></a>
    <a href="#contact" class="mobile-action-primary"><span>Start a project</span><i class="bi bi-arrow-up-right"></i></a>
  </nav>
	

<?php
$pageUsesSwiper = false;
$pageUsesPhpEmailForm = false;
$pageUsesPureCounter = false;
include_once './assets/includes/footer.php';
?>
