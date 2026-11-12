/**
* Template Name: Gp
* Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
* Updated: Aug 15 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Show proof of work before commercial options on the home page.
   * Moving the node preserves a single source of truth for both languages.
   */
  const homePortfolio = document.querySelector('#portfolio');
  const homePricing = document.querySelector('#pricing');
  if (homePortfolio && homePricing) {
    homePricing.before(homePortfolio);
  }

  /**
   * Interactive project route selector
   */
  document.querySelectorAll('[data-project-navigator]').forEach(navigator => {
    const tabs = Array.from(navigator.querySelectorAll('[data-route-tab]'));
    const panels = Array.from(navigator.querySelectorAll('[data-route-panel]'));

    function activateRoute(activeTab, moveFocus = false) {
      const route = activeTab.dataset.routeTab;

      tabs.forEach(tab => {
        const isActive = tab === activeTab;
        tab.classList.toggle('is-active', isActive);
        tab.setAttribute('aria-selected', String(isActive));
        tab.tabIndex = isActive ? 0 : -1;
      });

      panels.forEach(panel => {
        panel.hidden = panel.dataset.routePanel !== route;
      });

      if (moveFocus) activeTab.focus();
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => activateRoute(tab));
      tab.addEventListener('keydown', event => {
        let nextIndex = null;
        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') nextIndex = (index + 1) % tabs.length;
        if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') nextIndex = (index - 1 + tabs.length) % tabs.length;
        if (event.key === 'Home') nextIndex = 0;
        if (event.key === 'End') nextIndex = tabs.length - 1;
        if (nextIndex === null) return;

        event.preventDefault();
        activateRoute(tabs[nextIndex], true);
      });
    });
  });

  /**
   * Lightweight reading progress for the fixed header
   */
  const scrollProgress = document.querySelector('[data-scroll-progress]');
  if (scrollProgress) {
    let progressFrame = null;

    function updateScrollProgress() {
      const availableScroll = document.documentElement.scrollHeight - window.innerHeight;
      const progress = availableScroll > 0 ? Math.min(Math.max(window.scrollY / availableScroll, 0), 1) : 0;
      scrollProgress.style.transform = `scaleX(${progress})`;
      progressFrame = null;
    }

    function requestProgressUpdate() {
      if (progressFrame === null) progressFrame = window.requestAnimationFrame(updateScrollProgress);
    }

    updateScrollProgress();
    document.addEventListener('scroll', requestProgressUpdate, { passive: true });
    window.addEventListener('resize', requestProgressUpdate, { passive: true });
  }

  /**
   * Keep the mobile action bar useful without covering the final contact step
   */
  const mobileActionBar = document.querySelector('[data-mobile-action-bar]');
  const contactSection = document.querySelector('#contact');
  if (mobileActionBar && contactSection && 'IntersectionObserver' in window) {
    const contactObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => mobileActionBar.classList.toggle('is-hidden', entry.isIntersecting));
    }, { threshold: 0.12 });
    contactObserver.observe(contactSection);
  }

  /**
   * Accessible technology stack explorer
   */
  document.querySelectorAll('[data-technology-explorer]').forEach(explorer => {
    const tabs = Array.from(explorer.querySelectorAll('[data-technology-tab]'));
    const panels = Array.from(explorer.querySelectorAll('[data-technology-panel]'));

    function activateTechnology(activeTab, moveFocus = false) {
      const technology = activeTab.dataset.technologyTab;
      tabs.forEach(tab => {
        const isActive = tab === activeTab;
        tab.classList.toggle('is-active', isActive);
        tab.setAttribute('aria-selected', String(isActive));
        tab.tabIndex = isActive ? 0 : -1;
      });
      panels.forEach(panel => {
        panel.hidden = panel.dataset.technologyPanel !== technology;
      });
      if (moveFocus) activeTab.focus();
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => activateTechnology(tab));
      tab.addEventListener('keydown', event => {
        let nextIndex = null;
        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') nextIndex = (index + 1) % tabs.length;
        if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') nextIndex = (index - 1 + tabs.length) % tabs.length;
        if (event.key === 'Home') nextIndex = 0;
        if (event.key === 'End') nextIndex = tabs.length - 1;
        if (nextIndex === null) return;
        event.preventDefault();
        activateTechnology(tabs[nextIndex], true);
      });
    });
  });

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    const isOpen = document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
    mobileNavToggleBtn.setAttribute('aria-expanded', String(isOpen));
    mobileNavToggleBtn.setAttribute(
      'aria-label',
      isOpen ? mobileNavToggleBtn.dataset.labelClose : mobileNavToggleBtn.dataset.labelOpen
    );
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    let preloaderDismissed = false;
    function dismissPreloader() {
      if (preloaderDismissed) return;
      preloaderDismissed = true;
      preloader.classList.add('is-hidden');
      window.setTimeout(() => preloader.remove(), 220);
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', dismissPreloader, { once: true });
    } else {
      dismissPreloader();
    }
    window.setTimeout(dismissPreloader, 900);
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';
    const portfolioToggle = isotopeItem.querySelector('.portfolio-toggle');

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });

      if (portfolioToggle) {
        const toggleLabel = portfolioToggle.querySelector('[data-portfolio-toggle-label]');

        portfolioToggle.addEventListener('click', function() {
          const willShowAll = this.getAttribute('aria-expanded') !== 'true';
          this.setAttribute('aria-expanded', willShowAll ? 'true' : 'false');
          toggleLabel.textContent = willShowAll ? this.dataset.showFeatured : this.dataset.showAll;
          this.querySelector('i')?.classList.toggle('bi-arrow-up-left', willShowAll);
          this.querySelector('i')?.classList.toggle('bi-arrow-down-right', !willShowAll);

          isotopeItem.querySelectorAll('.isotope-filters li').forEach(item => item.classList.remove('filter-active'));
          const selectedFilter = isotopeItem.querySelector(`.isotope-filters li[data-filter="${willShowAll ? '*' : '.portfolio-featured'}"]`);
          selectedFilter?.classList.add('filter-active');

          initIsotope.arrange({
            filter: willShowAll ? '*' : '.portfolio-featured'
          });
        });
      }
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.setAttribute('role', 'button');
      filters.setAttribute('tabindex', '0');

      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }

        if (portfolioToggle) {
          const isFeatured = this.getAttribute('data-filter') === '.portfolio-featured';
          portfolioToggle.setAttribute('aria-expanded', isFeatured ? 'false' : 'true');
          portfolioToggle.querySelector('[data-portfolio-toggle-label]').textContent = isFeatured ? portfolioToggle.dataset.showAll : portfolioToggle.dataset.showFeatured;
          portfolioToggle.querySelector('i')?.classList.toggle('bi-arrow-up-left', !isFeatured);
          portfolioToggle.querySelector('i')?.classList.toggle('bi-arrow-down-right', isFeatured);
        }
      }, false);

      filters.addEventListener('keydown', function(event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          this.click();
        }
      });
    });

  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();
