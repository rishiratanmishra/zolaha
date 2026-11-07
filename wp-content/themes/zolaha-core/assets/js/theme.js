/**
 * Zolaha Tier-1 Client Controller & Real-Time Interaction Engine (v2.1.0)
 * Zero external dependencies. Instant local execution.
 */

(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    initThemeSwitching();
    initMobileNavigation();
    initQuickLaunchEngine();
    initCopyrightYear();
  });

  /**
   * 1. Theme Management (Dark / Light Mode)
   */
  function initThemeSwitching() {
    var themeButtons = document.querySelectorAll('[data-action="toggle-theme"]');
    if (!themeButtons.length) return;

    var currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
    updateThemeIcons(currentTheme);

    themeButtons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var active = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
        var next = active === 'dark' ? 'light' : 'dark';

        document.documentElement.setAttribute('data-theme', next);
        try {
          localStorage.setItem('zolaha-theme', next);
        } catch (err) {}

        updateThemeIcons(next);
      });
    });
  }

  function updateThemeIcons(theme) {
    var sunIcons = document.querySelectorAll('.icon-sun');
    var moonIcons = document.querySelectorAll('.icon-moon');

    if (theme === 'dark') {
      sunIcons.forEach(function(el) { el.classList.remove('hidden'); });
      moonIcons.forEach(function(el) { el.classList.add('hidden'); });
    } else {
      sunIcons.forEach(function(el) { el.classList.add('hidden'); });
      moonIcons.forEach(function(el) { el.classList.remove('hidden'); });
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

    // A. Keyboard shortcut: Cmd+K / Ctrl+K or "/" to focus search
    window.addEventListener('keydown', function(e) {
      if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
        e.preventDefault();
        if (searchInput) {
          searchInput.focus();
          searchInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      } else if (e.key === '/' && document.activeElement !== searchInput && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
        e.preventDefault();
        if (searchInput) {
          searchInput.focus();
          searchInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      }
    });

    // B. Real-time text search filtering
    if (searchInput) {
      searchInput.addEventListener('input', function() {
        var query = searchInput.value.trim().toLowerCase();

        // Clear active states on chips if typing custom query
        if (query.length > 0) {
          filterChips.forEach(function(chip) { chip.classList.remove('active'); chip.setAttribute('aria-selected', 'false'); });
        }

        productCards.forEach(function(card) {
          var searchCorpus = (card.getAttribute('data-search') || '') + ' ' + card.innerText.toLowerCase();
          if (!query || searchCorpus.indexOf(query) !== -1) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    }

    // C. Category filter pills
    filterChips.forEach(function(chip) {
      chip.addEventListener('click', function() {
        var filter = chip.getAttribute('data-filter');

        // Update active pill state
        filterChips.forEach(function(c) {
          c.classList.remove('active');
          c.setAttribute('aria-selected', 'false');
        });
        chip.classList.add('active');
        chip.setAttribute('aria-selected', 'true');

        // Clear search input if filter is tapped
        if (searchInput) {
          searchInput.value = '';
        }

        // Filter cards
        productCards.forEach(function(card) {
          var category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  /**
   * 3. Mobile Responsive Drawer Navigation
   */
  function initMobileNavigation() {
    var toggleBtn = document.querySelector('[data-action="toggle-mobile-menu"]');
    var mobileDrawer = document.getElementById('mobile-drawer');
    if (!toggleBtn || !mobileDrawer) return;

    toggleBtn.addEventListener('click', function() {
      var isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
      toggleBtn.setAttribute('aria-expanded', !isExpanded);
      mobileDrawer.classList.toggle('hidden');
    });

    // Close when clicking any link inside drawer
    var links = mobileDrawer.querySelectorAll('a');
    links.forEach(function(link) {
      link.addEventListener('click', function() {
        mobileDrawer.classList.add('hidden');
        toggleBtn.setAttribute('aria-expanded', 'false');
      });
    });

    // Close on Escape key press
    window.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !mobileDrawer.classList.contains('hidden')) {
        mobileDrawer.classList.add('hidden');
        toggleBtn.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /**
   * 4. Dynamic Footer Year
   */
  function initCopyrightYear() {
    var yearEl = document.getElementById('footer-current-year');
    if (yearEl) {
      yearEl.textContent = new Date().getFullYear();
    }
  }

})();
