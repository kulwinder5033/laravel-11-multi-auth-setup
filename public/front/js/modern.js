/* Child Life Care Foundation — front-end behaviour (no dependencies) */
(function () {
  'use strict';

  var ready = function (fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  };

  ready(function () {
    /* ---------- Sticky header shadow ---------- */
    var header = document.querySelector('.site-header');
    if (header) {
      var onScroll = function () {
        header.classList.toggle('is-stuck', window.scrollY > 8);
      };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---------- Mobile navigation ---------- */
    var toggle = document.querySelector('.nav__toggle');
    var menu = document.getElementById('primary-menu');

    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        var open = menu.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      });

      // Submenus open on tap below the desktop breakpoint.
      menu.querySelectorAll('li > a').forEach(function (link) {
        var parent = link.parentElement;
        if (!parent.querySelector('.submenu')) return;
        link.addEventListener('click', function (e) {
          if (window.matchMedia('(max-width: 991px)').matches) {
            e.preventDefault();
            parent.classList.toggle('is-open');
          }
        });
      });

      document.addEventListener('click', function (e) {
        if (!menu.contains(e.target) && !toggle.contains(e.target)) {
          menu.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });

      window.addEventListener('resize', function () {
        if (!window.matchMedia('(max-width: 991px)').matches) {
          menu.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

    /* ---------- Scroll reveal ---------- */
    var revealables = document.querySelectorAll('[data-reveal]');
    if (revealables.length) {
      if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-in');
              io.unobserve(entry.target);
            }
          });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        revealables.forEach(function (el) { io.observe(el); });
      } else {
        revealables.forEach(function (el) { el.classList.add('is-in'); });
      }
    }

    /* ---------- Count-up numbers ---------- */
    var counters = document.querySelectorAll('[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
      var run = function (el) {
        var target = parseFloat(el.getAttribute('data-count')) || 0;
        var duration = 1400;
        var start = null;
        var step = function (ts) {
          if (start === null) start = ts;
          var p = Math.min((ts - start) / duration, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          el.textContent = Math.round(target * eased).toLocaleString('en-IN');
          if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
      };
      var co = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) { run(entry.target); co.unobserve(entry.target); }
        });
      }, { threshold: 0.4 });
      counters.forEach(function (el) { co.observe(el); });
    }

    /* ---------- Carousels ---------- */
    document.querySelectorAll('[data-carousel]').forEach(function (root) {
      var track = root.querySelector('.carousel__track');
      if (!track) return;
      var amount = function () {
        var first = track.firstElementChild;
        return first ? first.getBoundingClientRect().width + 28 : track.clientWidth * 0.8;
      };
      var prev = root.querySelector('[data-carousel-prev]');
      var next = root.querySelector('[data-carousel-next]');
      if (prev) prev.addEventListener('click', function () { track.scrollBy({ left: -amount(), behavior: 'smooth' }); });
      if (next) next.addEventListener('click', function () { track.scrollBy({ left: amount(), behavior: 'smooth' }); });
    });

    /* ---------- Lightbox ---------- */
    var triggers = Array.prototype.slice.call(document.querySelectorAll('[data-lightbox]'));
    if (triggers.length) {
      var box = document.createElement('div');
      box.className = 'lightbox';
      box.innerHTML =
        '<button class="lightbox__close" type="button" aria-label="Close">' +
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>' +
        '<button class="lightbox__prev" type="button" aria-label="Previous">' +
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg></button>' +
        '<button class="lightbox__next" type="button" aria-label="Next">' +
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></button>' +
        '<img alt="">';
      document.body.appendChild(box);

      var img = box.querySelector('img');
      var index = 0;

      var show = function (i) {
        index = (i + triggers.length) % triggers.length;
        img.src = triggers[index].getAttribute('href');
        var thumb = triggers[index].querySelector('img');
        img.alt = thumb ? thumb.alt : '';
      };
      var open = function (i) {
        show(i);
        box.classList.add('is-open');
        document.body.style.overflow = 'hidden';
      };
      var close = function () {
        box.classList.remove('is-open');
        document.body.style.overflow = '';
      };

      triggers.forEach(function (a, i) {
        a.addEventListener('click', function (e) { e.preventDefault(); open(i); });
      });
      box.querySelector('.lightbox__close').addEventListener('click', close);
      box.querySelector('.lightbox__prev').addEventListener('click', function () { show(index - 1); });
      box.querySelector('.lightbox__next').addEventListener('click', function () { show(index + 1); });
      box.addEventListener('click', function (e) { if (e.target === box) close(); });
      document.addEventListener('keydown', function (e) {
        if (!box.classList.contains('is-open')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') show(index - 1);
        if (e.key === 'ArrowRight') show(index + 1);
      });
    }

    /* ---------- Hero slider ---------- */
    var hero = document.querySelector('[data-hero]');
    if (hero) {
      var slides = Array.prototype.slice.call(hero.querySelectorAll('.hero__slide'));
      var dotWrap = hero.querySelector('.hero__dots');
      var at = 0;
      var timer = null;

      if (slides.length > 1) {
        slides.forEach(function (_, i) {
          var dot = document.createElement('button');
          dot.type = 'button';
          dot.setAttribute('aria-label', 'Slide ' + (i + 1));
          dot.addEventListener('click', function () { go(i); restart(); });
          dotWrap.appendChild(dot);
        });
      }

      var go = function (i) {
        at = (i + slides.length) % slides.length;
        slides.forEach(function (s, n) { s.classList.toggle('is-active', n === at); });
        if (dotWrap) {
          Array.prototype.forEach.call(dotWrap.children, function (d, n) {
            d.classList.toggle('is-active', n === at);
          });
        }
      };
      var restart = function () {
        if (slides.length < 2) return;
        clearInterval(timer);
        timer = setInterval(function () { go(at + 1); }, 6000);
      };

      go(0);
      restart();

      var prevBtn = hero.querySelector('[data-hero-prev]');
      var nextBtn = hero.querySelector('[data-hero-next]');
      if (prevBtn) prevBtn.addEventListener('click', function () { go(at - 1); restart(); });
      if (nextBtn) nextBtn.addEventListener('click', function () { go(at + 1); restart(); });

      hero.addEventListener('mouseenter', function () { clearInterval(timer); });
      hero.addEventListener('mouseleave', restart);
    }

    /* ---------- Back to top ---------- */
    var top = document.querySelector('.to-top');
    if (top) {
      var toggleTop = function () { top.classList.toggle('is-visible', window.scrollY > 500); };
      toggleTop();
      window.addEventListener('scroll', toggleTop, { passive: true });
      top.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }
  });
})();
