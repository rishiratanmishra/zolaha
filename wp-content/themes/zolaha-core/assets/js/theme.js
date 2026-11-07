/**
 * Zolaha Enterprise Theme Engine - Client Controller (v1.0.0)
 * Handles Zero-FOUC Theme Switching, Mobile Drawer & Interactions
 */

(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    initThemeSwitching();
    initMobileNavigation();
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
   * 2. Mobile Responsive Drawer Navigation
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
   * 3. Dynamic Footer Year
   */
  function initCopyrightYear() {
    var yearEl = document.getElementById('footer-current-year');
    if (yearEl) {
      yearEl.textContent = new Date().getFullYear();
    }
  }

})();
