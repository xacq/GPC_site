<footer id="footer" class="footer footer-modern dark-background">
  <div class="container">
    <section class="footer-modern__cta" aria-labelledby="footer-cta-title-en">
      <div>
        <span class="footer-modern__eyebrow"><i class="bi bi-arrow-up-right-circle"></i> A clear next step</span>
        <h2 id="footer-cta-title-en">Have a product, AI workflow or security challenge in mind?</h2>
        <p>Bring us the context. We will help you identify the first practical decision.</p>
      </div>
      <a class="footer-modern__cta-button" href="index.php#contact">Start a project <i class="bi bi-arrow-up-right"></i></a>
    </section>

    <div class="footer-modern__grid">
      <div class="footer-modern__brand">
        <a href="index.php" aria-label="Green PC home"><img src="assets/img/logo.png" alt="Green PC" width="1208" height="160"></a>
        <p>Secure digital products, useful AI and cybersecurity connected to real operations.</p>
        <div class="footer-modern__location"><i class="bi bi-geo-alt"></i><span>Cuenca, Ecuador · Working worldwide</span></div>
        <div class="footer-modern__socials">
          <a href="https://www.linkedin.com/in/greenpc/" target="_blank" rel="noopener" aria-label="Green PC on LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/xacq" target="_blank" rel="noopener" aria-label="Green PC on GitHub"><i class="bi bi-github"></i></a>
          <a href="https://www.behance.net/xaviercalvas" target="_blank" rel="noopener" aria-label="Green PC on Behance"><i class="bi bi-behance"></i></a>
          <a href="https://www.facebook.com/greenpcecuador/" target="_blank" rel="noopener" aria-label="Green PC on Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>

      <nav class="footer-modern__column" aria-label="Capabilities">
        <h3>Capabilities</h3>
        <a href="index.php#services"><span>01</span> Software engineering</a>
        <a href="index.php#services"><span>02</span> AI &amp; automation</a>
        <a href="index.php#services"><span>03</span> Cybersecurity</a>
      </nav>

      <nav class="footer-modern__column" aria-label="Explore Green PC">
        <h3>Explore</h3>
        <a href="index.php#portfolio">Selected work</a>
        <a href="index.php#pricing">Collaboration models</a>
        <a href="examples.php">Functional examples</a>
        <a href="index.php#clients">Technology approach</a>
      </nav>

      <div class="footer-modern__contact">
        <h3>Let’s talk</h3>
        <p>Tell us what needs to be built, automated or protected.</p>
        <a href="mailto:info@greenpc.dev?subject=Project%20inquiry%20for%20Green%20PC"><i class="bi bi-envelope"></i><span><small>Email</small>info@greenpc.dev</span></a>
        <a href="https://wa.me/593998784470?text=Hello%20Green%20PC%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i><span><small>WhatsApp</small>+593 998 784 470</span></a>
      </div>
    </div>

    <div class="footer-modern__bottom">
      <p>© <?= date('Y'); ?> Green PC. All rights reserved.</p>
      <nav aria-label="Legal links">
        <a href="system/politicasprivacidad.php">Privacy</a>
        <a href="mailto:info@greenpc.dev?subject=Terms%20and%20Conditions%20Request">Terms</a>
        <a href="404.php?lang=en">Site help</a>
      </nav>
      <a class="footer-modern__language" href="<?= htmlspecialchars($footerLanguageUrl ?? 'index_es.php', ENT_QUOTES, 'UTF-8'); ?>"><i class="bi bi-translate"></i> Español</a>
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
