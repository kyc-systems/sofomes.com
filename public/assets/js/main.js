/**
 * SOFOMES.COM - Main JavaScript
 * Handles navigation, FAQ, modals, and other interactions
 */

// ============================================
// 1. NAVIGATION
// ============================================

class Navigation {
  constructor() {
    this.nav = document.getElementById('main-nav');
    this.navToggle = document.getElementById('nav-toggle');
    this.navMenu = document.getElementById('nav-menu');

    this.init();
  }

  init() {
    // Scroll effect
    window.addEventListener('scroll', this.handleScroll.bind(this), { passive: true });

    // Mobile menu toggle
    if (this.navToggle) {
      this.navToggle.addEventListener('click', this.toggleMenu.bind(this));
    }

    // Close menu on link click
    this.navMenu?.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          this.navMenu.classList.remove('active');
        }
      });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', this.smoothScroll.bind(this));
    });
  }

  handleScroll() {
    if (window.scrollY > 50) {
      this.nav.classList.add('scrolled');
    } else {
      this.nav.classList.remove('scrolled');
    }
  }

  toggleMenu() {
    this.navMenu.classList.toggle('active');
  }

  smoothScroll(e) {
    const href = e.currentTarget.getAttribute('href');

    if (href.startsWith('#') && href.length > 1) {
      e.preventDefault();

      const target = document.querySelector(href);
      if (target) {
        const offsetTop = target.offsetTop - 72; // Nav height

        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    }
  }
}

// ============================================
// 2. FAQ ACCORDION
// ============================================

class FAQAccordion {
  constructor(container) {
    this.container = container || document.querySelector('#faq');
    if (!this.container) return;

    this.questions = this.container.querySelectorAll('.faq-question');
    this.init();
  }

  init() {
    this.questions.forEach(question => {
      question.addEventListener('click', this.toggle.bind(this, question));

      // Keyboard navigation
      question.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.toggle(question);
        }
      });
    });
  }

  toggle(question) {
    const isExpanded = question.getAttribute('aria-expanded') === 'true';

    // Close all other accordions
    this.questions.forEach(q => {
      if (q !== question) {
        q.setAttribute('aria-expanded', 'false');
      }
    });

    // Toggle clicked question
    question.setAttribute('aria-expanded', !isExpanded);

    // Track with analytics
    if (!isExpanded && window.gtag) {
      const questionText = question.querySelector('h4')?.textContent || '';
      gtag('event', 'faq_expand', {
        event_category: 'FAQ',
        event_label: questionText,
        value: 1
      });
    }
  }
}

// ============================================
// 3. MODALS
// ============================================

class ModalManager {
  constructor() {
    this.activeModal = null;
    this.init();
  }

  init() {
    // Close modal on background click
    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('modal')) {
        this.close(e.target.id);
      }
    });

    // Close modal on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.activeModal) {
        this.close(this.activeModal);
      }
    });
  }

  open(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add('active');
      this.activeModal = modalId;
      document.body.style.overflow = 'hidden';

      // Track
      if (window.gtag) {
        gtag('event', 'modal_open', {
          event_category: 'Engagement',
          event_label: modalId,
          value: 1
        });
      }
    }
  }

  close(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove('active');
      this.activeModal = null;
      document.body.style.overflow = '';
    }
  }
}

// ============================================
// 4. FORMS
// ============================================

class FormHandler {
  constructor() {
    this.forms = document.querySelectorAll('form');
    this.init();
  }

  init() {
    this.forms.forEach(form => {
      form.addEventListener('submit', this.handleSubmit.bind(this));
    });
  }

  async handleSubmit(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    // Disable submit button
    const submitBtn = form.querySelector('[type="submit"]');
    const originalText = submitBtn?.textContent;

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando...';
    }

    try {
      // Send to backend (replace with actual endpoint)
      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          ...data,
          profile: window.userProfile || 'unknown',
          timestamp: new Date().toISOString()
        })
      });

      if (response.ok) {
        // Success
        this.showSuccess(form);

        // Track
        if (window.gtag) {
          gtag('event', 'form_submit', {
            event_category: 'Lead Generation',
            event_label: form.id || 'contact_form',
            value: 1
          });
        }

        // Reset form
        form.reset();
      } else {
        this.showError(form, 'Hubo un error. Por favor intenta nuevamente.');
      }
    } catch (error) {
      console.error('Form submission error:', error);
      this.showError(form, 'Error de conexión. Por favor intenta más tarde.');
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      }
    }
  }

  showSuccess(form) {
    const message = document.createElement('div');
    message.className = 'form-message success';
    message.style.cssText = 'padding: 1rem; background: #10B981; color: white; border-radius: 8px; margin-top: 1rem; text-align: center; font-weight: 600;';
    message.textContent = '✓ Gracias! Te contactaremos pronto.';

    form.appendChild(message);

    setTimeout(() => {
      message.remove();
    }, 5000);
  }

  showError(form, errorMessage) {
    const message = document.createElement('div');
    message.className = 'form-message error';
    message.style.cssText = 'padding: 1rem; background: #EF4444; color: white; border-radius: 8px; margin-top: 1rem; text-align: center; font-weight: 600;';
    message.textContent = `✗ ${errorMessage}`;

    form.appendChild(message);

    setTimeout(() => {
      message.remove();
    }, 5000);
  }
}

// ============================================
// 5. INTERSECTION OBSERVER (Animations)
// ============================================

class AnimationObserver {
  constructor() {
    this.observer = null;
    this.init();
  }

  init() {
    // Only if user prefers motion
    if (window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
      this.observer = new IntersectionObserver(
        (entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              this.observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.1,
          rootMargin: '0px 0px -50px 0px'
        }
      );

      // Observe all elements with .fade-in class
      document.querySelectorAll('.fade-in').forEach(el => {
        this.observer.observe(el);
      });
    }
  }
}

// ============================================
// 6. SERVICE TABS
// ============================================

class ServiceTabs {
  constructor() {
    this.tabs = document.querySelectorAll('.service-tab');
    this.contents = document.querySelectorAll('.service-content');

    if (this.tabs.length === 0) return;

    this.init();
  }

  init() {
    this.tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => {
        this.switchTab(index);
      });
    });

    // Activate first tab
    if (this.tabs.length > 0) {
      this.switchTab(0);
    }
  }

  switchTab(index) {
    // Remove active from all tabs and contents
    this.tabs.forEach(tab => tab.classList.remove('active'));
    this.contents.forEach(content => content.classList.remove('active'));

    // Add active to selected
    this.tabs[index]?.classList.add('active');
    this.contents[index]?.classList.add('active');

    // Track
    if (window.gtag) {
      const tabName = this.tabs[index]?.textContent || '';
      gtag('event', 'tab_click', {
        event_category: 'Engagement',
        event_label: tabName,
        value: 1
      });
    }
  }
}

// ============================================
// 7. GLOBAL FUNCTIONS
// ============================================

// Open modal (used by buttons)
window.openModal = function(modalId) {
  if (window.modalManager) {
    window.modalManager.open(modalId);
  }
};

// Close modal (used by buttons)
window.closeModal = function(modalId) {
  if (window.modalManager) {
    window.modalManager.close(modalId);
  }
};

// ============================================
// 8. INITIALIZATION
// ============================================

document.addEventListener('DOMContentLoaded', () => {
  // Initialize all components
  window.navigation = new Navigation();
  window.faqAccordion = new FAQAccordion();
  window.modalManager = new ModalManager();
  window.formHandler = new FormHandler();
  window.animationObserver = new AnimationObserver();
  window.serviceTabs = new ServiceTabs();

  console.log('SOFOMES.COM initialized');
});

// ============================================
// 9. PERFORMANCE MONITORING
// ============================================

// Web Vitals tracking
if ('PerformanceObserver' in window) {
  // Track LCP
  const lcpObserver = new PerformanceObserver((list) => {
    const entries = list.getEntries();
    const lastEntry = entries[entries.length - 1];

    if (window.gtag) {
      gtag('event', 'LCP', {
        event_category: 'Web Vitals',
        value: Math.round(lastEntry.renderTime || lastEntry.loadTime),
        event_label: 'Largest Contentful Paint',
        non_interaction: true
      });
    }
  });

  try {
    lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });
  } catch (e) {
    console.warn('LCP observation not supported');
  }

  // Track FID/INP
  const fidObserver = new PerformanceObserver((list) => {
    const entries = list.getEntries();

    entries.forEach(entry => {
      if (window.gtag) {
        gtag('event', 'FID', {
          event_category: 'Web Vitals',
          value: Math.round(entry.processingStart - entry.startTime),
          event_label: 'First Input Delay',
          non_interaction: true
        });
      }
    });
  });

  try {
    fidObserver.observe({ entryTypes: ['first-input'] });
  } catch (e) {
    console.warn('FID observation not supported');
  }
}

// ============================================
// 10. ERROR HANDLING
// ============================================

window.addEventListener('error', (e) => {
  console.error('Global error:', e.error);

  // Track errors in production
  if (window.gtag && window.location.hostname !== 'localhost') {
    gtag('event', 'exception', {
      description: e.error?.message || 'Unknown error',
      fatal: false
    });
  }
});
