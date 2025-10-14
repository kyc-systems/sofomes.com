/**
 * SOFOMES.COM - AI Personalization Engine
 * Detecta y personaliza contenido basado en perfil de usuario
 */

class PersonalizationEngine {
  constructor() {
    this.userProfile = null;
    this.sessionData = {};
    this.behaviorScore = {
      pyme: 0,
      founder: 0,
      investor: 0
    };

    this.init();
  }

  async init() {
    // 1. Detect profile from first interaction
    await this.detectProfile();

    // 2. Personalize content dynamically
    this.personalizeContent();

    // 3. Track behavior to refine profile
    this.trackBehavior();

    // 4. Analytics
    this.trackPersonalization();
  }

  async detectProfile() {
    // Method 1: Query parameters (UTM, source)
    const urlParams = new URLSearchParams(window.location.search);
    const utmCampaign = urlParams.get('utm_campaign');
    const source = urlParams.get('source');

    if (utmCampaign?.includes('pyme') || source === 'financiamiento') {
      this.userProfile = 'pyme';
      return;
    }

    if (utmCampaign?.includes('founder') || source === 'constitucion') {
      this.userProfile = 'founder';
      return;
    }

    if (utmCampaign?.includes('investor') || source === 'inversion') {
      this.userProfile = 'investor';
      return;
    }

    // Method 2: Analyze behavior first 10 seconds
    const behavior = await this.analyzeFirstInteractions();

    // Method 3: Ask user intent (after 5 seconds if still unsure)
    if (!this.userProfile || this.getTopProfile() === 'founder') {
      setTimeout(() => {
        if (!this.userProfile || this.behaviorScore[this.userProfile] < 3) {
          this.askUserIntent();
        }
      }, 5000);
    }

    // Default to founder if no clear signal
    if (!this.userProfile) {
      this.userProfile = 'founder';
    }
  }

  analyzeFirstInteractions() {
    return new Promise((resolve) => {
      let scrollDepth = 0;
      let clickedElements = [];

      const scrollHandler = () => {
        scrollDepth = Math.max(scrollDepth, window.scrollY);
      };

      const clickHandler = (e) => {
        const element = e.target.closest('[data-profile-signal]');
        if (element) {
          clickedElements.push(element.dataset.profileSignal);

          // Update scores based on clicks
          if (element.dataset.profileSignal === 'calculadora') {
            this.behaviorScore.pyme += 3;
          } else if (element.dataset.profileSignal === 'constitucion') {
            this.behaviorScore.founder += 3;
          } else if (element.dataset.profileSignal === 'investor') {
            this.behaviorScore.investor += 3;
          }
        }
      };

      window.addEventListener('scroll', scrollHandler, { passive: true });
      document.addEventListener('click', clickHandler);

      setTimeout(() => {
        window.removeEventListener('scroll', scrollHandler);
        document.removeEventListener('click', clickHandler);

        // Score based on scroll depth
        if (scrollDepth > 2000) {
          this.behaviorScore.founder += 2;
          this.behaviorScore.investor += 2;
        } else {
          this.behaviorScore.pyme += 1;
        }

        this.userProfile = this.getTopProfile();
        resolve(this.userProfile);
      }, 10000); // 10 seconds
    });
  }

  askUserIntent() {
    // Check if already shown
    if (localStorage.getItem('intent_modal_shown')) {
      return;
    }

    const modal = document.createElement('div');
    modal.className = 'intent-modal';
    modal.innerHTML = `
      <div class="modal active" id="intent-modal">
        <div class="modal-content" style="max-width: 500px">
          <button class="modal-close" onclick="document.getElementById('intent-modal').remove()">&times;</button>

          <h3 style="margin-bottom: 1rem">¿Qué estás buscando hoy?</h3>
          <p style="color: #6B7280; margin-bottom: 2rem">Para mostrarte el contenido más relevante:</p>

          <div style="display: grid; gap: 1rem; margin-bottom: 2rem">
            <button class="intent-btn" data-profile="pyme" style="padding: 1rem; border: 2px solid #E5E7EB; border-radius: 8px; background: white; cursor: pointer; text-align: left; transition: all 0.2s ease; font-weight: 600;">
              <span style="font-size: 1.5rem; margin-right: 0.5rem">💰</span>
              Financiamiento para mi PyME
            </button>

            <button class="intent-btn" data-profile="founder" style="padding: 1rem; border: 2px solid #E5E7EB; border-radius: 8px; background: white; cursor: pointer; text-align: left; transition: all 0.2s ease; font-weight: 600;">
              <span style="font-size: 1.5rem; margin-right: 0.5rem">🏢</span>
              Constituir una SOFOM
            </button>

            <button class="intent-btn" data-profile="investor" style="padding: 1rem; border: 2px solid #E5E7EB; border-radius: 8px; background: white; cursor: pointer; text-align: left; transition: all 0.2s ease; font-weight: 600;">
              <span style="font-size: 1.5rem; margin-right: 0.5rem">📈</span>
              Invertir en SOFOMes
            </button>
          </div>

          <button class="intent-skip" style="width: 100%; padding: 0.75rem; border: none; background: transparent; color: #6B7280; cursor: pointer; text-decoration: underline;">
            Continuar sin personalizar
          </button>
        </div>
      </div>
    `;

    document.body.appendChild(modal);

    // Add hover effects
    const intentBtns = modal.querySelectorAll('.intent-btn');
    intentBtns.forEach(btn => {
      btn.addEventListener('mouseenter', () => {
        btn.style.borderColor = '#3B82F6';
        btn.style.background = '#F0F9FF';
      });

      btn.addEventListener('mouseleave', () => {
        btn.style.borderColor = '#E5E7EB';
        btn.style.background = 'white';
      });

      btn.addEventListener('click', () => {
        const profile = btn.dataset.profile;
        this.userProfile = profile;
        this.personalizeContent();
        localStorage.setItem('intent_modal_shown', 'true');
        modal.querySelector('.modal').remove();
      });
    });

    modal.querySelector('.intent-skip').addEventListener('click', () => {
      localStorage.setItem('intent_modal_shown', 'true');
      modal.querySelector('.modal').remove();
    });
  }

  personalizeContent() {
    if (!this.userProfile) return;

    console.log('Personalizing for:', this.userProfile);

    // 1. Hero section
    document.querySelectorAll('.hero').forEach(hero => {
      hero.style.display = 'none';
    });

    const targetHero = document.querySelector(`.hero--${this.userProfile}`);
    if (targetHero) {
      targetHero.style.display = 'flex';
    }

    // 2. CTAs
    document.querySelectorAll('[data-cta-profile]').forEach(cta => {
      if (cta.dataset.ctaProfile !== this.userProfile) {
        cta.style.display = 'none';
      }
    });

    // 3. Store profile for other scripts
    window.userProfile = this.userProfile;
  }

  trackBehavior() {
    // Track clicks
    document.addEventListener('click', (e) => {
      const target = e.target.closest('a, button');
      if (target) {
        this.sessionData.interactions = this.sessionData.interactions || [];
        this.sessionData.interactions.push({
          type: 'click',
          target: target.textContent?.substring(0, 50),
          timestamp: Date.now()
        });
      }
    }, { passive: true });

    // Track scroll depth
    let maxScroll = 0;
    window.addEventListener('scroll', () => {
      const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      maxScroll = Math.max(maxScroll, scrollPercent);
      this.sessionData.maxScroll = Math.round(maxScroll);
    }, { passive: true });

    // Track time on page
    this.sessionData.entryTime = Date.now();

    window.addEventListener('beforeunload', () => {
      this.sessionData.timeOnPage = Math.round((Date.now() - this.sessionData.entryTime) / 1000);

      // Send to analytics
      if (navigator.sendBeacon && window.gtag) {
        gtag('event', 'session_end', {
          event_category: 'Engagement',
          profile: this.userProfile,
          time_on_page: this.sessionData.timeOnPage,
          max_scroll: this.sessionData.maxScroll,
          interactions: this.sessionData.interactions?.length || 0
        });
      }
    });
  }

  getTopProfile() {
    const sorted = Object.entries(this.behaviorScore)
      .sort(([,a], [,b]) => b - a);
    return sorted[0][0];
  }

  trackPersonalization() {
    // Google Analytics 4
    if (window.gtag) {
      gtag('event', 'personalization_applied', {
        event_category: 'AI Personalization',
        event_label: this.userProfile,
        value: 1
      });
    }

    // Console log for debugging
    console.log('Personalization Engine initialized:', {
      profile: this.userProfile,
      scores: this.behaviorScore
    });
  }
}

// Initialize on DOM ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    window.personalizationEngine = new PersonalizationEngine();
  });
} else {
  window.personalizationEngine = new PersonalizationEngine();
}
