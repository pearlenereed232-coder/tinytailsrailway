/* ═══════════════════════════════════════════════════
   TINY TAILS STUDIO — MAIN JAVASCRIPT
   ═══════════════════════════════════════════════════ */

'use strict';

/* ── PAGE LOADER ──────────────────────────────────── */
window.addEventListener('load', () => {
  setTimeout(() => {
    const loader = document.getElementById('pageLoader');
    if (loader) loader.classList.add('hidden');
  }, 1800);
});

/* ── CURSOR GLOW ──────────────────────────────────── */
const cursorGlow = document.getElementById('cursorGlow');
if (cursorGlow) {
  document.addEventListener('mousemove', (e) => {
    cursorGlow.style.left = e.clientX + 'px';
    cursorGlow.style.top  = e.clientY + 'px';
  });
}

/* ── NAVBAR SCROLL BEHAVIOUR ─────────────────────── */
const navbar = document.getElementById('navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  });
}

/* ── HAMBURGER MENU ──────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const navLinks  = document.getElementById('navLinks');
if (hamburger && navLinks) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navLinks.classList.toggle('open');
  });
  // Close on link click
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger.classList.remove('open');
      navLinks.classList.remove('open');
    });
  });
  // Close on backdrop click
  document.addEventListener('click', (e) => {
    if (!navbar.contains(e.target)) {
      hamburger.classList.remove('open');
      navLinks.classList.remove('open');
    }
  });
}

/* ── TYPEWRITER EFFECT ───────────────────────────── */
const typewriterEl = document.getElementById('typewriter');
if (typewriterEl) {
  const words = ['Immortalized', 'Remembered', 'Celebrated', 'Cherished', 'Honoured'];
  let wIdx = 0, cIdx = 0, deleting = false;

  function typeWrite() {
    const word = words[wIdx];
    if (!deleting) {
      typewriterEl.textContent = word.slice(0, ++cIdx);
      if (cIdx === word.length) {
        deleting = true;
        setTimeout(typeWrite, 2000);
        return;
      }
    } else {
      typewriterEl.textContent = word.slice(0, --cIdx);
      if (cIdx === 0) {
        deleting = false;
        wIdx = (wIdx + 1) % words.length;
      }
    }
    setTimeout(typeWrite, deleting ? 60 : 110);
  }
  setTimeout(typeWrite, 600);
}

/* ── PAW PARTICLE GENERATOR ──────────────────────── */
const pawContainer = document.getElementById('pawParticles');
if (pawContainer) {
  const pawEmojis = ['🐾', '🐾', '🐾', '❤️', '✨', '⭐'];
  function createPaw() {
    const el = document.createElement('div');
    el.className = 'paw-particle';
    el.textContent = pawEmojis[Math.floor(Math.random() * pawEmojis.length)];
    el.style.cssText = `
      left: ${Math.random() * 100}%;
      font-size: ${0.6 + Math.random() * 1}rem;
      animation-duration: ${6 + Math.random() * 10}s;
      animation-delay: ${Math.random() * 4}s;
    `;
    pawContainer.appendChild(el);
    setTimeout(() => el.remove(), 18000);
  }
  // Initial burst
  for (let i = 0; i < 10; i++) setTimeout(createPaw, i * 300);
  // Ongoing
  setInterval(createPaw, 1500);
}

/* ── ANIMATE ON SCROLL (custom AOS) ─────────────── */
function initAOS() {
  const els = document.querySelectorAll('[data-aos]');
  const delays = {};
  els.forEach(el => {
    const delay = parseInt(el.dataset.aosDelay || 0);
    delays.set ? null : null; // store per-el
    el._aosDelay = delay;
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        setTimeout(() => {
          el.classList.add('aos-animate');
        }, el._aosDelay || 0);
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  els.forEach(el => observer.observe(el));
}
initAOS();

/* ── COUNTER ANIMATIONS ──────────────────────────── */
function animateCounter(el) {
  const target = parseInt(el.dataset.target);
  const isDecimal = el.classList.contains('stat-decimal');
  const duration = 2000;
  const step = 16;
  const totalSteps = duration / step;
  let current = 0;

  const timer = setInterval(() => {
    current += target / totalSteps;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    el.textContent = isDecimal
      ? (current / 10).toFixed(1)
      : Math.floor(current).toLocaleString();
  }, step);
}

const statObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const nums = entry.target.querySelectorAll('.stat-number');
      nums.forEach(n => animateCounter(n));
      statObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.4 });

const statsGrid = document.querySelector('.stats-grid');
if (statsGrid) statObserver.observe(statsGrid);

/* ── GALLERY FILTER TABS ─────────────────────────── */
const tabs = document.querySelectorAll('.gallery-tabs .tab');
const galleryItems = document.querySelectorAll('.gallery-item');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const filter = tab.dataset.filter;

    galleryItems.forEach(item => {
      const show = filter === 'all' || item.dataset.filter === filter;
      item.style.transition = 'opacity .3s, transform .3s';
      if (show) {
        item.style.opacity = '1';
        item.style.transform = 'scale(1)';
        item.style.pointerEvents = 'auto';
      } else {
        item.style.opacity = '0';
        item.style.transform = 'scale(0.9)';
        item.style.pointerEvents = 'none';
      }
    });
  });
});

/* ── REVIEWS CAROUSEL ────────────────────────────── */
(function initCarousel() {
  const track  = document.getElementById('carouselTrack');
  const dotsEl = document.getElementById('carouselDots');
  const prev   = document.getElementById('prevBtn');
  const next   = document.getElementById('nextBtn');
  if (!track) return;

  const slides = track.querySelectorAll('.review-slide');
  const total  = slides.length;
  let perView  = window.innerWidth > 900 ? 3 : window.innerWidth > 600 ? 2 : 1;
  let maxIdx   = total - perView;
  let current  = 0;
  let autoPlay;

  // Build dots
  for (let i = 0; i <= maxIdx; i++) {
    const dot = document.createElement('div');
    dot.className = 'dot' + (i === 0 ? ' active' : '');
    dot.addEventListener('click', () => goTo(i));
    dotsEl.appendChild(dot);
  }

  function getSlideWidth() {
    const gap = 24;
    const containerW = track.parentElement.offsetWidth;
    return (containerW - gap * (perView - 1)) / perView;
  }

  function goTo(idx) {
    current = Math.max(0, Math.min(idx, maxIdx));
    const sw = getSlideWidth() + 24; // width + gap
    track.style.transform = `translateX(-${current * sw}px)`;
    dotsEl.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === current));
  }

  function goNext() { goTo(current < maxIdx ? current + 1 : 0); }
  function goPrev() { goTo(current > 0 ? current - 1 : maxIdx); }

  next && next.addEventListener('click', () => { goPrev() ; resetAuto(); });
  prev && prev.addEventListener('click', () => { goNext(); resetAuto(); });

  function startAuto() { autoPlay = setInterval(goNext, 4500); }
  function resetAuto() { clearInterval(autoPlay); startAuto(); }
  startAuto();

  // Touch / swipe support
  let touchStartX = 0;
  track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
  track.addEventListener('touchend', e => {
    const diff = touchStartX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) { diff > 0 ? goNext() : goPrev(); resetAuto(); }
  });

  // Recalculate on resize
  window.addEventListener('resize', () => {
    perView = window.innerWidth > 900 ? 3 : window.innerWidth > 600 ? 2 : 1;
    maxIdx  = total - perView;
    goTo(Math.min(current, maxIdx));
  });
})();

/* ── FAQ ACCORDION ───────────────────────────────── */
window.toggleFaq = function(questionEl) {
  const item = questionEl.parentElement;
  const wasOpen = item.classList.contains('open');
  // Close all
  document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
  // Open clicked (unless it was already open)
  if (!wasOpen) item.classList.add('open');
};

/* ── NEWSLETTER FORMS ────────────────────────────── */
function handleNewsletterForm(formId, successId) {
  const form = document.getElementById(formId);
  const succ = document.getElementById(successId);
  if (!form) return;
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    const origText = btn.innerHTML;
    btn.innerHTML = '⏳ Subscribing...';
    btn.disabled = true;
    setTimeout(() => {
      if (succ) {
        form.style.display = 'none';
        succ.style.display = 'block';
      } else {
        btn.innerHTML = '✅ You\'re in!';
        setTimeout(() => { btn.innerHTML = origText; btn.disabled = false; }, 3000);
      }
    }, 1200);
  });
}
handleNewsletterForm('nlForm', 'nlSuccess');
handleNewsletterForm('footerForm', null);

/* ── SMOOTH SCROLL FOR ANCHOR LINKS ──────────────── */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

/* ── PROCESS TIMELINE ANIMATION ─────────────────── */
const timelineLine = document.querySelector('.timeline-line');
if (timelineLine) {
  const lineObserver = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting) {
      timelineLine.style.transition = 'transform 1.5s ease';
      timelineLine.style.transformOrigin = 'top';
      timelineLine.style.transform = 'scaleY(1)';
      lineObserver.disconnect();
    }
  }, { threshold: 0.1 });
  timelineLine.style.transform = 'scaleY(0)';
  lineObserver.observe(timelineLine);
}

/* ── PRODUCT CARD TILT EFFECT ────────────────────── */
document.querySelectorAll('.product-card, .review-card, .stat-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width  - 0.5;
    const y = (e.clientY - rect.top)  / rect.height - 0.5;
    card.style.transform = `perspective(800px) rotateX(${-y * 4}deg) rotateY(${x * 4}deg) translateY(-4px)`;
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
    card.style.transition = 'transform .5s ease';
  });
  card.addEventListener('mouseenter', () => {
    card.style.transition = 'transform .1s ease';
  });
});

/* ── CUSTOMIZE FORM INTERACTIVITY ────────────────── */
(function initCustomizeForm() {
  // Product option selector
  document.querySelectorAll('.product-option').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('.product-option').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      const radio = opt.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
      // Update summary price
      const price = opt.querySelector('.po-price');
      const summaryTotal = document.querySelector('.summary-total strong');
      if (price && summaryTotal) summaryTotal.textContent = price.textContent;
    });
  });

  // Drag-and-drop upload zone
  const uploadZone = document.querySelector('.upload-zone');
  if (uploadZone) {
    uploadZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      uploadZone.style.borderColor = 'var(--clr-primary)';
      uploadZone.style.background = 'rgba(196,113,79,.06)';
    });
    uploadZone.addEventListener('dragleave', () => {
      uploadZone.style.borderColor = '';
      uploadZone.style.background = '';
    });
    uploadZone.addEventListener('drop', (e) => {
      e.preventDefault();
      uploadZone.style.borderColor = '';
      uploadZone.style.background = '';
      const files = e.dataTransfer.files;
      if (files.length) {
        uploadZone.querySelector('.upload-text').textContent = `✅ ${files.length} photo(s) selected — looking great!`;
        uploadZone.querySelector('.upload-icon').textContent = '🐾';
      }
    });
    uploadZone.addEventListener('click', () => {
      const input = document.createElement('input');
      input.type = 'file'; input.multiple = true; input.accept = 'image/*';
      input.click();
      input.addEventListener('change', () => {
        if (input.files.length) {
          uploadZone.querySelector('.upload-text').textContent = `✅ ${input.files.length} photo(s) ready!`;
          uploadZone.querySelector('.upload-icon').textContent = '🐾';
        }
      });
    });
  }

  // Order form submit
  const orderForm = document.getElementById('orderForm');
  if (orderForm) {
    orderForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = orderForm.querySelector('.form-submit');
      btn.innerHTML = '🎨 Sending Your Order...';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '✅ Order Received! We\'ll email you within 24 hours.';
        btn.style.background = '#4CAF50';
      }, 2000);
    });
  }
})();

/* ── SCROLL PROGRESS BAR ─────────────────────────── */
(function() {
  const bar = document.createElement('div');
  bar.style.cssText = `
    position:fixed; top:0; left:0; height:3px; width:0%;
    background:linear-gradient(90deg,#C4714F,#D4A853);
    z-index:9999; transition:width .1s ease;
  `;
  document.body.prepend(bar);
  window.addEventListener('scroll', () => {
    const pct = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
    bar.style.width = pct + '%';
  });
})();

/* ── "BACK TO TOP" BUTTON ────────────────────────── */
(function() {
  const btn = document.createElement('button');
  btn.innerHTML = '↑';
  btn.setAttribute('aria-label', 'Back to top');
  btn.style.cssText = `
    position:fixed; bottom:2rem; right:2rem; z-index:800;
    width:44px; height:44px; border-radius:50%;
    background:var(--clr-primary); color:white;
    font-size:1.2rem; font-weight:700; border:none;
    box-shadow:0 4px 16px rgba(196,113,79,.4);
    cursor:pointer; opacity:0; transform:translateY(20px);
    transition:opacity .3s,transform .3s,background .2s;
  `;
  document.body.appendChild(btn);
  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  btn.addEventListener('mouseenter', () => btn.style.background = 'var(--clr-primary-d)');
  btn.addEventListener('mouseleave', () => btn.style.background = 'var(--clr-primary)');
  window.addEventListener('scroll', () => {
    const show = window.scrollY > 400;
    btn.style.opacity = show ? '1' : '0';
    btn.style.transform = show ? 'translateY(0)' : 'translateY(20px)';
    btn.style.pointerEvents = show ? 'auto' : 'none';
  });
})();

console.log('🐾 Tiny Tails Studio — crafted with love.');
