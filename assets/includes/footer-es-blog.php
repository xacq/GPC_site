
<footer id="footer" class="footer footer-modern dark-background">
  <div class="container">
    <section class="footer-modern__cta" aria-labelledby="footer-cta-title-blog">
      <div>
        <span class="footer-modern__eyebrow"><i class="bi bi-arrow-up-right-circle"></i> Un próximo paso claro</span>
        <h2 id="footer-cta-title-blog">¿Tienes en mente un producto, flujo con IA o desafío de seguridad?</h2>
        <p>Tráenos el contexto. Te ayudaremos a identificar la primera decisión práctica.</p>
      </div>
      <a class="footer-modern__cta-button" href="../index_es.php#contact">Iniciar proyecto <i class="bi bi-arrow-up-right"></i></a>
    </section>

    <div class="footer-modern__grid">
      <div class="footer-modern__brand">
        <a href="../index_es.php" aria-label="Inicio de Green PC"><img src="../assets/img/logo.png" alt="Green PC" width="1208" height="160"></a>
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
        <a href="../index_es.php#services"><span>01</span> Ingeniería de software</a>
        <a href="../index_es.php#services"><span>02</span> IA y automatización</a>
        <a href="../index_es.php#services"><span>03</span> Ciberseguridad</a>
      </nav>

      <nav class="footer-modern__column" aria-label="Explorar Green PC">
        <h3>Explorar</h3>
        <a href="../index_es.php#portfolio">Trabajo seleccionado</a>
        <a href="../index_es.php#pricing">Modelos de colaboración</a>
        <a href="../programacion.php">Ejemplos funcionales</a>
        <a href="../index_es.php#clients">Enfoque tecnológico</a>
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
        <a href="../system/politicasprivacidad.php">Privacidad</a>
        <a href="mailto:info@greenpc.dev?subject=Solicitud%20de%20Terminos%20y%20Condiciones">Términos</a>
        <a href="../404.php?lang=es">Ayuda del sitio</a>
      </nav>
      <a class="footer-modern__language" href="../index.php"><i class="bi bi-translate"></i> English</a>
    </div>
  </div>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader" aria-hidden="true">
  <img src="../assets/img/logo.png" alt="Green PC" class="preloader-logo">
  <span class="preloader-spinner"></span>
</div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const readingProgressBar = document.getElementById('myBar');

    if (readingProgressBar) {
        const updateReadingProgress = function () {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            readingProgressBar.style.width = scrolled + '%';
        };

        updateReadingProgress();
        window.addEventListener('scroll', updateReadingProgress, { passive: true });
    }

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Elementos del DOM
    const audioPlayer = new Audio('<?= htmlspecialchars($audioFile) ?>');
    const playPauseBtn = document.querySelector('.btn-audio-play-pause');
    const progressBar = document.querySelector('.progress-bar-audio');
    const progressContainer = document.querySelector('.audio-progress-container');
    const currentTimeEl = document.querySelector('.audio-current-time');
    const durationEl = document.querySelector('.audio-duration');
    
    // Verificar si los elementos existen
    if (!playPauseBtn || !progressBar || !progressContainer || !currentTimeEl || !durationEl) {
        return;
    }
    
    // Formatear tiempo a MM:SS
    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
    }
    
    // Actualizar barra de progreso y tiempo
    function updateProgress() {
        if (audioPlayer.duration && !isNaN(audioPlayer.duration)) {
            const progressPercent = (audioPlayer.currentTime / audioPlayer.duration) * 100;
            progressBar.style.width = `${progressPercent}%`;
            currentTimeEl.textContent = formatTime(audioPlayer.currentTime);
        }
    }
    
    // Cargar metadatos del audio
    audioPlayer.addEventListener('loadedmetadata', function() {
        if (audioPlayer.duration && !isNaN(audioPlayer.duration)) {
            durationEl.textContent = formatTime(audioPlayer.duration);
        }
    });
    
    // Manejar errores
    audioPlayer.addEventListener('error', function() {
        console.error('Error de audio:', audioPlayer.error);
        playPauseBtn.setAttribute('disabled', 'disabled');
        playPauseBtn.innerHTML = '<i class="bi bi-volume-mute-fill"></i>';
    });
    
    // Control Play/Pause
    function togglePlayPause() {
        if (audioPlayer.paused) {
            audioPlayer.play()
                .then(() => {
                    playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                })
                .catch(error => {
                    console.error('Error al reproducir:', error);
                    alert('Error al iniciar la reproducción: ' + error.message);
                });
        } else {
            audioPlayer.pause();
            playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
        }
    }
    
    // Barra de progreso clickeable
    progressContainer.addEventListener('click', function(e) {
        if (!audioPlayer.duration || isNaN(audioPlayer.duration)) return;
        
        const rect = this.getBoundingClientRect();
        const pos = (e.clientX - rect.left) / this.offsetWidth;
        audioPlayer.currentTime = pos * audioPlayer.duration;
    });
    
    // Actualización durante la reproducción
    audioPlayer.addEventListener('timeupdate', updateProgress);
    
    // Cambiar icono al finalizar
    audioPlayer.addEventListener('ended', function() {
        playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
    });
    
    // Asignar evento al botón
    playPauseBtn.addEventListener('click', togglePlayPause);
});
</script>

</body>
