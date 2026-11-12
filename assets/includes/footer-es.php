<footer id="footer" class="footer footer-modern dark-background">
  <div class="container">
    <section class="footer-modern__cta" aria-labelledby="footer-cta-title-es">
      <div>
        <span class="footer-modern__eyebrow"><i class="bi bi-arrow-up-right-circle"></i> Un próximo paso claro</span>
        <h2 id="footer-cta-title-es">¿Tienes en mente un producto, flujo con IA o desafío de seguridad?</h2>
        <p>Tráenos el contexto. Te ayudaremos a identificar la primera decisión práctica.</p>
      </div>
      <a class="footer-modern__cta-button" href="index_es.php#contact">Iniciar proyecto <i class="bi bi-arrow-up-right"></i></a>
    </section>

    <div class="footer-modern__grid">
      <div class="footer-modern__brand">
        <a href="index_es.php" aria-label="Inicio de Green PC"><img src="assets/img/logo.png" alt="Green PC" width="1208" height="160"></a>
        <p>Productos digitales seguros, IA útil y ciberseguridad conectados a operaciones reales.</p>
        <div class="footer-modern__location"><i class="bi bi-geo-alt"></i><span>Cuenca, Ecuador · Trabajamos globalmente</span></div>
        <div class="footer-modern__socials">
          <a href="https://www.linkedin.com/in/greenpc/" target="_blank" rel="noopener" aria-label="Green PC en LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/xacq" target="_blank" rel="noopener" aria-label="Green PC en GitHub"><i class="bi bi-github"></i></a>
          <a href="https://www.behance.net/xaviercalvas" target="_blank" rel="noopener" aria-label="Green PC en Behance"><i class="bi bi-behance"></i></a>
          <a href="https://www.facebook.com/greenpcecuador/" target="_blank" rel="noopener" aria-label="Green PC en Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>

      <nav class="footer-modern__column" aria-label="Capacidades">
        <h3>Capacidades</h3>
        <a href="index_es.php#services"><span>01</span> Ingeniería de software</a>
        <a href="index_es.php#services"><span>02</span> IA y automatización</a>
        <a href="index_es.php#services"><span>03</span> Ciberseguridad</a>
      </nav>

      <nav class="footer-modern__column" aria-label="Explorar Green PC">
        <h3>Explorar</h3>
        <a href="index_es.php#portfolio">Trabajo seleccionado</a>
        <a href="index_es.php#pricing">Modelos de colaboración</a>
        <a href="programacion.php">Ejemplos funcionales</a>
        <a href="index_es.php#clients">Enfoque tecnológico</a>
      </nav>

      <div class="footer-modern__contact">
        <h3>Conversemos</h3>
        <p>Cuéntanos qué necesitas construir, automatizar o proteger.</p>
        <a href="mailto:info@greenpc.dev?subject=Consulta%20de%20proyecto%20para%20Green%20PC"><i class="bi bi-envelope"></i><span><small>Correo</small>info@greenpc.dev</span></a>
        <a href="https://wa.me/593998784470?text=Hola%20Green%20PC%2C%20quiero%20conversar%20sobre%20un%20proyecto." target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i><span><small>WhatsApp</small>+593 998 784 470</span></a>
      </div>
    </div>

    <div class="footer-modern__bottom">
      <p>© <?= date('Y'); ?> Green PC. Todos los derechos reservados.</p>
      <nav aria-label="Enlaces legales">
        <a href="system/politicasprivacidad.php">Privacidad</a>
        <a href="mailto:info@greenpc.dev?subject=Solicitud%20de%20Terminos%20y%20Condiciones">Términos</a>
        <a href="404.php?lang=es">Ayuda del sitio</a>
      </nav>
      <a class="footer-modern__language" href="<?= htmlspecialchars($footerLanguageUrl ?? 'index.php', ENT_QUOTES, 'UTF-8'); ?>"><i class="bi bi-translate"></i> English</a>
    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader" aria-hidden="true">
  <img src="assets/img/logo.png" alt="Green PC" class="preloader-logo">
  <span class="preloader-spinner"></span>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php if (!isset($pageUsesPhpEmailForm) || $pageUsesPhpEmailForm): ?>
<script src="assets/vendor/php-email-form/validate.js"></script>
<?php endif; ?>
<script src="assets/vendor/aos/aos.js"></script>
<?php if (!isset($pageUsesSwiper) || $pageUsesSwiper): ?>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<?php endif; ?>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<?php if (!isset($pageUsesPureCounter) || $pageUsesPureCounter): ?>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<?php endif; ?>

<!-- Main JS File -->
<script src="assets/js/main.js?v=20261111-10"></script>

</body>

</html>
