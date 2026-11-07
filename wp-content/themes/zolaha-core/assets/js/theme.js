/**
 * Zolaha site interactions
 */

(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    initThemeSwitching();
    initMobileNavigation();
    initQuickLaunchEngine();
    initRevealEffects();
  });

  /**
   * 1. Theme Management (Dark / Light Mode)
   */
  function initThemeSwitching() {
    var themeButtons = document.querySelectorAll('[data-action="toggle-theme"]');
    if (!themeButtons.length) return;

    var currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
    updateThemeLabel(currentTheme);

    themeButtons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var active = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
        var next = active === 'dark' ? 'light' : 'dark';

        document.documentElement.setAttribute('data-theme', next);
        try {
          localStorage.setItem('zolaha-theme', next);
        } catch (err) {
          console.warn('Unable to save theme preference.', err);
        }

        updateThemeLabel(next);
      });
    });
  }

  function updateThemeLabel(theme) {
    var themeButton = document.querySelector('[data-action="toggle-theme"]');
    if (themeButton) {
      var label = theme === 'dark' ? themeButton.getAttribute('data-light-label') : themeButton.getAttribute('data-dark-label');
      themeButton.setAttribute('aria-label', label);
    }
  }

  /**
   * 2. Quick-Launch Search & Category Filter Engine
   */
  function initQuickLaunchEngine() {
    var searchInput = document.getElementById('product-quick-search');
    var filterChips = document.querySelectorAll('.filter-chip');
    var productCards = document.querySelectorAll('.product-card-item');

    if (!productCards.length) return;

    var emptyState = document.getElementById('product-search-empty');
    var currentFilter = 'all';

    function applyFilters() {
      var query = searchInput ? searchInput.value.trim().toLowerCase() : '';
      var visibleCount = 0;

      productCards.forEach(function(card) {
        var matchesCategory = currentFilter === 'all' || card.getAttribute('data-category') === currentFilter;
        var searchCorpus = (card.getAttribute('data-search') || '') + ' ' + card.textContent.toLowerCase();
        var matchesQuery = !query || searchCorpus.indexOf(query) !== -1;
        var isVisible = matchesCategory && matchesQuery;

        card.hidden = !isVisible;
        if (isVisible) visibleCount += 1;
      });

      if (emptyState) emptyState.hidden = visibleCount > 0;
    }

    if (searchInput) {
      searchInput.addEventListener('input', applyFilters);
    }

    filterChips.forEach(function(chip) {
      chip.addEventListener('click', function() {
        currentFilter = chip.getAttribute('data-filter') || 'all';

        filterChips.forEach(function(filterChip) {
          var isActive = filterChip === chip;
          filterChip.classList.toggle('active', isActive);
          filterChip.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });

        applyFilters();
      });
    });

    applyFilters();
  }

  /**
   * 3. One-time section and word reveals
   */
  function initRevealEffects() {
    if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      return;
    }

    var revealSections = document.querySelectorAll('.section-spacing');
    var revealObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });

    revealSections.forEach(function(section) {
      section.classList.add('reveal-on-scroll');
      revealObserver.observe(section);
    });

    var taglineWords = document.querySelectorAll('.tagline-word');
    if (!taglineWords.length) return;

    document.documentElement.classList.add('js-tagline-reveal');
    var wordObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -18% 0px' });

    taglineWords.forEach(function(word) {
      wordObserver.observe(word);
    });
  }

  /**
   * 4. Mobile navigation
   */
  function initMobileNavigation() {
    var toggleBtn = document.querySelector('[data-action="toggle-mobile-menu"]');
    var mobileDrawer = document.getElementById('mobile-drawer');
    if (!toggleBtn || !mobileDrawer) return;

    toggleBtn.addEventListener('click', function() {
      var isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
      var shouldOpen = !isExpanded;
      var nextLabel = shouldOpen ? toggleBtn.getAttribute('data-close-label') : toggleBtn.getAttribute('data-open-label');
      toggleBtn.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
      toggleBtn.setAttribute('aria-label', nextLabel);
      mobileDrawer.classList.toggle('hidden', !shouldOpen);
      document.body.classList.toggle('nav-open', shouldOpen);
    });

    // Close when clicking any link inside drawer
    var links = mobileDrawer.querySelectorAll('a');
    links.forEach(function(link) {
      link.addEventListener('click', function() {
        mobileDrawer.classList.add('hidden');
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.setAttribute('aria-label', toggleBtn.getAttribute('data-open-label'));
        document.body.classList.remove('nav-open');
      });
    });

    // Close on Escape key press
    window.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !mobileDrawer.classList.contains('hidden')) {
        mobileDrawer.classList.add('hidden');
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.setAttribute('aria-label', toggleBtn.getAttribute('data-open-label'));
        document.body.classList.remove('nav-open');
        toggleBtn.focus();
      }
    });
  }

})();
