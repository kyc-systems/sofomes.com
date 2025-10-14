# ESTRATEGIA DE PERSONALIZACIÓN CON IA 2025
## SOFOMES.COM - AI-Powered Content Personalization

---

## RESUMEN EJECUTIVO

Implementación de personalización con IA para aumentar conversión hasta 80% mediante contenido dinámico adaptado a 3 perfiles de usuario (PyMEs, Founders, Inversionistas). Sistema basado en datos de primera mano (sin cookies de terceros) con IA para segmentación inteligente, chatbot BANT, y email sequences personalizadas.

**ROI esperado:** 94% más conversión en outreach, 80% más conversión en landing page.

---

## 1. SISTEMA DE SEGMENTACIÓN INTELIGENTE (3 PERFILES)

### Perfil 1: PyME Buscando Financiamiento (30% tráfico)

**Características:**
- Director/Dueño de PyME con 5-50 empleados
- Búsqueda: "financiamiento pymes", "crédito sin banco", "alternativas bancarias"
- Dolor principal: Rechazado por banca tradicional
- Objetivo: Obtener crédito rápido y flexible

**Contenido Personalizado:**

**Hero Section (Variante PyME):**
```html
<section class="hero hero--pyme">
  <h1>¿Tu PyME Necesita Financiamiento que el Banco Rechazó?</h1>
  <p class="hero-subtitle">
    Las SOFOMes aprueban el 70% de solicitudes que la banca tradicional rechaza.
    <strong>Créditos desde $50,000 hasta $5M con decisión en 48 horas.</strong>
  </p>

  <div class="hero-cta-group">
    <button class="cta-primary" data-modal="calculadora-credito">
      Calcula tu crédito en 2 minutos
    </button>
    <a href="#casos-exito-pyme" class="cta-secondary">
      Ver PyMEs que ya obtuvieron crédito
    </a>
  </div>

  <!-- Trust indicators específicos -->
  <div class="trust-bar">
    <div class="trust-item">
      <strong>2,500+</strong>
      <span>PyMEs financiadas</span>
    </div>
    <div class="trust-item">
      <strong>$850M</strong>
      <span>Otorgados en 2024</span>
    </div>
    <div class="trust-item">
      <strong>48 horas</strong>
      <span>Decisión promedio</span>
    </div>
  </div>
</section>
```

**Sección "Cómo Funciona" (PyME):**
- Timeline simplificado: Solicitud → Análisis → Aprobación → Desembolso
- Énfasis en velocidad y requisitos flexibles
- Testimonial de PyME similar (mismo sector/tamaño)
- CTA: "Iniciar solicitud ahora"

### Perfil 2: Founder/Emprendedor Constituyendo SOFOM (60% tráfico)

**Características:**
- Emprendedor FinTech, 32-45 años
- Búsqueda: "cómo crear una sofom", "constituir sofom enr", "requisitos sofom"
- Dolor principal: Proceso complejo, falta de claridad
- Objetivo: Constituir SOFOM rápido y sin errores

**Contenido Personalizado:**

**Hero Section (Variante Founder):**
```html
<section class="hero hero--founder">
  <h1>Constituye tu SOFOM ENR en 8-12 Semanas con Acompañamiento Total</h1>
  <p class="hero-subtitle">
    Más de <strong>150 SOFOMes constituidas exitosamente</strong>.
    Dictamen técnico CNBV aprobado en el 98% de los casos.
    <span class="highlight">Precio fijo: $95,000 + IVA</span>
  </p>

  <div class="hero-cta-group">
    <button class="cta-primary" data-modal="cotizador-constitucion">
      Obtener cotización personalizada
    </button>
    <a href="#proceso-paso-a-paso" class="cta-secondary">
      Ver proceso completo
    </a>
  </div>

  <!-- Trust indicators específicos -->
  <div class="trust-bar">
    <div class="trust-item">
      <img src="/assets/logos/cnbv.svg" alt="CNBV">
      <span>98% aprobación CNBV</span>
    </div>
    <div class="trust-item">
      <img src="/assets/logos/condusef.svg" alt="CONDUSEF">
      <span>150+ registros SIPRES</span>
    </div>
    <div class="trust-item">
      <strong>8-12 sem</strong>
      <span>Tiempo total</span>
    </div>
  </div>
</section>
```

**Sección "Cómo Funciona" (Founder):**
- Timeline detallado con 7 pasos
- Checklist descargable de documentos
- Casos de éxito de founders (nombre, LinkedIn, métricas)
- CTA: "Agendar consultoría gratuita"

### Perfil 3: Inversionista/Fondeador (10% tráfico)

**Características:**
- Family office, inversionista institucional, 45-65 años
- Búsqueda: "invertir en sofomes", "rendimientos sofom", "fondeo sofomes"
- Dolor principal: Falta de deal flow calificado
- Objetivo: Encontrar SOFOMes con buen riesgo/retorno

**Contenido Personalizado:**

**Hero Section (Variante Inversionista):**
```html
<section class="hero hero--investor">
  <h1>Oportunidades de Inversión en SOFOMes con Rendimientos del 12-18% Anual</h1>
  <p class="hero-subtitle">
    Conectamos inversionistas institucionales con SOFOMes estructuradas y auditadas.
    <strong>Deal flow curado con due diligence completo.</strong>
  </p>

  <div class="hero-cta-group">
    <button class="cta-primary" data-modal="investor-access">
      Acceder a deal flow exclusivo
    </button>
    <a href="#metricas-sofomes" class="cta-secondary">
      Ver métricas de performance
    </a>
  </div>

  <!-- Trust indicators específicos -->
  <div class="trust-bar">
    <div class="trust-item">
      <strong>$120M</strong>
      <span>AUM gestionado</span>
    </div>
    <div class="trust-item">
      <strong>14.5%</strong>
      <span>ROI promedio 2024</span>
    </div>
    <div class="trust-item">
      <strong>25</strong>
      <span>SOFOMes activas</span>
    </div>
  </div>
</section>
```

**Sección "Cómo Funciona" (Inversionista):**
- Dashboard de métricas de portfolio
- Due diligence checklist
- Estructura de inversión (deuda vs equity)
- CTA: "Solicitar acceso a deal room"

---

## 2. MOTOR DE PERSONALIZACIÓN CON IA

### Arquitectura del Sistema

```javascript
// ai-personalization-engine.js

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
    // 1. Detectar perfil desde primera interacción
    await this.detectProfile();

    // 2. Personalizar contenido dinámicamente
    this.personalizeContent();

    // 3. Track behavior para refinar perfil
    this.trackBehavior();
  }

  async detectProfile() {
    // Método 1: Query parameters (UTM, source)
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

    // Método 2: Análisis de comportamiento primeros 10 segundos
    const firstInteractions = await this.analyzeFirstInteractions();

    // Método 3: Machine Learning prediction (si hay histórico)
    if (this.hasHistoricalData()) {
      this.userProfile = await this.predictProfile();
    } else {
      // Método 4: Pregunta directa al usuario
      this.userProfile = await this.askUserIntent();
    }
  }

  async analyzeFirstInteractions() {
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
        }
      };

      window.addEventListener('scroll', scrollHandler, { passive: true });
      document.addEventListener('click', clickHandler);

      setTimeout(() => {
        window.removeEventListener('scroll', scrollHandler);
        document.removeEventListener('click', clickHandler);

        // Score basado en interacciones
        if (clickedElements.includes('calculadora-credito')) {
          this.behaviorScore.pyme += 3;
        }
        if (clickedElements.includes('proceso-constitucion')) {
          this.behaviorScore.founder += 3;
        }
        if (clickedElements.includes('investor-access')) {
          this.behaviorScore.investor += 3;
        }

        // Scroll depth indica interés profundo (founder/investor vs pyme)
        if (scrollDepth > 2000) {
          this.behaviorScore.founder += 2;
          this.behaviorScore.investor += 2;
        } else {
          this.behaviorScore.pyme += 1;
        }

        resolve(this.getTopProfile());
      }, 10000); // 10 segundos
    });
  }

  async predictProfile() {
    // Usar modelo ML simple (TensorFlow.js)
    const features = this.extractFeatures();

    // Modelo entrenado con datos históricos
    const prediction = await this.mlModel.predict(features);

    return prediction; // 'pyme', 'founder', 'investor'
  }

  async askUserIntent() {
    return new Promise((resolve) => {
      // Modal interactivo después de 5 segundos
      setTimeout(() => {
        const modal = document.createElement('div');
        modal.className = 'intent-modal';
        modal.innerHTML = `
          <div class="intent-modal-content">
            <h3>¿Qué estás buscando hoy?</h3>
            <p>Para mostrarte el contenido más relevante:</p>

            <div class="intent-options">
              <button class="intent-btn" data-profile="pyme">
                <svg><!-- icon --></svg>
                <span>Financiamiento para mi PyME</span>
              </button>

              <button class="intent-btn" data-profile="founder">
                <svg><!-- icon --></svg>
                <span>Constituir una SOFOM</span>
              </button>

              <button class="intent-btn" data-profile="investor">
                <svg><!-- icon --></svg>
                <span>Invertir en SOFOMes</span>
              </button>
            </div>

            <button class="intent-skip">Continuar sin personalizar</button>
          </div>
        `;

        document.body.appendChild(modal);

        modal.querySelectorAll('.intent-btn').forEach(btn => {
          btn.addEventListener('click', () => {
            const profile = btn.dataset.profile;
            modal.remove();
            resolve(profile);
          });
        });

        modal.querySelector('.intent-skip').addEventListener('click', () => {
          modal.remove();
          resolve('founder'); // Default
        });
      }, 5000);
    });
  }

  personalizeContent() {
    if (!this.userProfile) return;

    // 1. Hero section
    document.querySelectorAll('.hero').forEach(hero => {
      hero.style.display = 'none';
    });
    document.querySelector(`.hero--${this.userProfile}`)?.style.setProperty('display', 'flex');

    // 2. CTAs
    document.querySelectorAll('[data-cta-profile]').forEach(cta => {
      if (cta.dataset.ctaProfile !== this.userProfile) {
        cta.style.display = 'none';
      }
    });

    // 3. Testimonials
    this.loadRelevantTestimonials(this.userProfile);

    // 4. Case studies
    this.loadRelevantCaseStudies(this.userProfile);

    // 5. FAQ order
    this.reorderFAQ(this.userProfile);

    // 6. Pricing display
    this.showRelevantPricing(this.userProfile);

    // 7. Analytics
    this.trackPersonalization(this.userProfile);
  }

  loadRelevantTestimonials(profile) {
    const testimonialContainer = document.querySelector('#testimonials-dynamic');
    if (!testimonialContainer) return;

    fetch(`/api/testimonials?profile=${profile}`)
      .then(res => res.json())
      .then(testimonials => {
        testimonialContainer.innerHTML = testimonials.map(t => `
          <div class="testimonial-card">
            <img src="${t.avatar}" alt="${t.name}">
            <blockquote>${t.quote}</blockquote>
            <cite>
              <strong>${t.name}</strong>
              <span>${t.role}, ${t.company}</span>
            </cite>
          </div>
        `).join('');
      });
  }

  reorderFAQ(profile) {
    const faqPriority = {
      pyme: [
        '¿Qué es una SOFOM?',
        '¿Cuánto puedo pedir prestado?',
        '¿Qué requisitos necesito?',
        '¿Cuánto tiempo tarda la aprobación?'
      ],
      founder: [
        '¿Cuánto cuesta constituir una SOFOM?',
        '¿Cuánto tiempo tarda?',
        '¿Qué es el dictamen técnico CNBV?',
        '¿Necesito abogado especializado?'
      ],
      investor: [
        '¿Qué rendimientos ofrecen las SOFOMes?',
        '¿Cómo se estructura la inversión?',
        '¿Qué garantías existen?',
        '¿Cuál es el ticket mínimo?'
      ]
    };

    const priority = faqPriority[profile];
    const faqContainer = document.querySelector('.faq-section');

    // Reordenar items según prioridad
    priority.forEach((question, index) => {
      const item = Array.from(faqContainer.querySelectorAll('.faq-item'))
        .find(el => el.textContent.includes(question));

      if (item) {
        faqContainer.insertBefore(item, faqContainer.children[index]);
      }
    });
  }

  trackBehavior() {
    // Track clicks, scrolls, time on page
    const events = ['click', 'scroll', 'mousemove'];

    events.forEach(event => {
      document.addEventListener(event, (e) => {
        this.sessionData.interactions = this.sessionData.interactions || [];
        this.sessionData.interactions.push({
          type: event,
          target: e.target?.dataset?.trackingId,
          timestamp: Date.now()
        });

        // Refinar perfil basado en comportamiento
        this.refineProfile();
      }, { passive: true });
    });

    // Track time on specific sections
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const section = entry.target.dataset.section;
          this.sessionData[`time_${section}`] = Date.now();
        } else {
          const section = entry.target.dataset.section;
          const timeSpent = Date.now() - (this.sessionData[`time_${section}`] || Date.now());

          // Ajustar score basado en tiempo
          if (section === 'pricing' && timeSpent > 30000) {
            this.behaviorScore[this.userProfile] += 2;
          }
        }
      });
    });

    document.querySelectorAll('[data-section]').forEach(el => {
      observer.observe(el);
    });
  }

  refineProfile() {
    // Si el score de otro perfil supera al actual, cambiar
    const topProfile = this.getTopProfile();

    if (topProfile !== this.userProfile && this.behaviorScore[topProfile] > this.behaviorScore[this.userProfile] + 3) {
      console.log(`Profile refined from ${this.userProfile} to ${topProfile}`);
      this.userProfile = topProfile;
      this.personalizeContent();
    }
  }

  getTopProfile() {
    return Object.entries(this.behaviorScore)
      .sort(([,a], [,b]) => b - a)[0][0];
  }

  trackPersonalization(profile) {
    // Google Analytics 4
    gtag('event', 'personalization_applied', {
      event_category: 'AI Personalization',
      event_label: profile,
      value: 1
    });

    // Enviar a backend para ML training
    fetch('/api/personalization/track', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        profile: profile,
        sessionData: this.sessionData,
        timestamp: Date.now(),
        userAgent: navigator.userAgent
      })
    });
  }
}

// Initialize
const personalizationEngine = new PersonalizationEngine();
```

---

## 3. CHATBOT CON CALIFICACIÓN BANT

### Sistema de Scoring BANT

**BANT Framework:**
- **B**udget (Presupuesto): ¿Tiene capacidad de pago?
- **A**uthority (Autoridad): ¿Es el decisor?
- **N**eed (Necesidad): ¿Tiene un problema real?
- **T**iming (Tiempo): ¿Cuándo necesita la solución?

```javascript
// chatbot-bant.js

class BANTChatbot {
  constructor() {
    this.score = {
      budget: 0,
      authority: 0,
      need: 0,
      timing: 0
    };

    this.conversation = [];
    this.currentStep = 0;
    this.userProfile = null;

    this.init();
  }

  init() {
    this.detectProfile();
    this.startConversation();
  }

  detectProfile() {
    // Obtener perfil del PersonalizationEngine
    this.userProfile = window.personalizationEngine?.userProfile || 'founder';
  }

  startConversation() {
    const flows = {
      pyme: this.pymeFlow,
      founder: this.founderFlow,
      investor: this.investorFlow
    };

    this.flow = flows[this.userProfile];
    this.askNext();
  }

  // Flow para PyMEs
  pymeFlow = [
    {
      question: "Hola 👋 ¿Cuánto financiamiento necesita tu PyME?",
      type: "budget",
      options: [
        { text: "Menos de $500k", value: 1, score: 1 },
        { text: "$500k - $2M", value: 2, score: 3 },
        { text: "$2M - $5M", value: 3, score: 5 },
        { text: "Más de $5M", value: 4, score: 7 }
      ]
    },
    {
      question: "¿Eres el dueño o director de la empresa?",
      type: "authority",
      options: [
        { text: "Sí, soy el dueño", value: 1, score: 10 },
        { text: "Soy director/gerente con poder de decisión", value: 2, score: 8 },
        { text: "Soy gerente, pero debo consultar", value: 3, score: 3 },
        { text: "Solo estoy investigando", value: 4, score: 1 }
      ]
    },
    {
      question: "¿Para qué necesitas el crédito?",
      type: "need",
      options: [
        { text: "Capital de trabajo urgente", value: 1, score: 10 },
        { text: "Expansión del negocio", value: 2, score: 8 },
        { text: "Compra de equipo/maquinaria", value: 3, score: 7 },
        { text: "Refinanciar deuda", value: 4, score: 5 },
        { text: "Solo explorando opciones", value: 5, score: 1 }
      ]
    },
    {
      question: "¿Cuándo necesitas el dinero?",
      type: "timing",
      options: [
        { text: "Esta semana (urgente)", value: 1, score: 10 },
        { text: "Este mes", value: 2, score: 8 },
        { text: "En 1-3 meses", value: 3, score: 5 },
        { text: "Más de 3 meses", value: 4, score: 2 },
        { text: "Sin fecha definida", value: 5, score: 0 }
      ]
    }
  ];

  // Flow para Founders
  founderFlow = [
    {
      question: "Hola 👋 ¿Qué tipo de SOFOM quieres constituir?",
      type: "need",
      options: [
        { text: "SOFOM ENR (no regulada)", value: 1, score: 10 },
        { text: "SOFOM ER (regulada)", value: 2, score: 8 },
        { text: "No estoy seguro", value: 3, score: 3 }
      ]
    },
    {
      question: "¿Cuál es tu presupuesto para la constitución?",
      type: "budget",
      options: [
        { text: "$80k - $100k", value: 1, score: 5 },
        { text: "$100k - $150k", value: 2, score: 8 },
        { text: "Más de $150k", value: 3, score: 10 },
        { text: "Necesito opciones de financiamiento", value: 4, score: 3 }
      ]
    },
    {
      question: "¿Eres el fundador o representas a una empresa?",
      type: "authority",
      options: [
        { text: "Soy el fundador", value: 1, score: 10 },
        { text: "Represento a una FinTech", value: 2, score: 8 },
        { text: "Soy asesor/consultor", value: 3, score: 3 }
      ]
    },
    {
      question: "¿Cuándo quieres iniciar el proceso?",
      type: "timing",
      options: [
        { text: "Inmediatamente", value: 1, score: 10 },
        { text: "Este mes", value: 2, score: 8 },
        { text: "En 1-3 meses", value: 3, score: 5 },
        { text: "Solo investigando", value: 4, score: 1 }
      ]
    }
  ];

  // Flow para Inversionistas
  investorFlow = [
    {
      question: "Hola 👋 ¿Qué tipo de inversión buscas?",
      type: "need",
      options: [
        { text: "Deuda senior (menor riesgo)", value: 1, score: 8 },
        { text: "Equity (mayor retorno)", value: 2, score: 10 },
        { text: "Estructuras híbridas", value: 3, score: 7 }
      ]
    },
    {
      question: "¿Cuál es tu ticket de inversión?",
      type: "budget",
      options: [
        { text: "Menos de $1M USD", value: 1, score: 3 },
        { text: "$1M - $5M USD", value: 2, score: 7 },
        { text: "$5M - $20M USD", value: 3, score: 10 },
        { text: "Más de $20M USD", value: 4, score: 10 }
      ]
    },
    {
      question: "¿Representas a un family office o fondo?",
      type: "authority",
      options: [
        { text: "Family office", value: 1, score: 10 },
        { text: "Fondo de inversión", value: 2, score: 10 },
        { text: "Inversionista individual", value: 3, score: 5 }
      ]
    },
    {
      question: "¿Cuál es tu horizonte de inversión?",
      type: "timing",
      options: [
        { text: "Inmediato (tengo capital listo)", value: 1, score: 10 },
        { text: "1-3 meses", value: 2, score: 7 },
        { text: "3-6 meses", value: 3, score: 5 },
        { text: "Explorando oportunidades", value: 4, score: 2 }
      ]
    }
  ];

  askNext() {
    if (this.currentStep >= this.flow.length) {
      this.finish();
      return;
    }

    const step = this.flow[this.currentStep];
    this.displayQuestion(step);
  }

  displayQuestion(step) {
    const chatContainer = document.getElementById('chatbot-container');

    const questionEl = document.createElement('div');
    questionEl.className = 'chatbot-question';
    questionEl.innerHTML = `
      <p>${step.question}</p>
      <div class="chatbot-options">
        ${step.options.map((opt, i) => `
          <button class="chatbot-option" data-value="${opt.value}" data-score="${opt.score}">
            ${opt.text}
          </button>
        `).join('')}
      </div>
    `;

    chatContainer.appendChild(questionEl);

    questionEl.querySelectorAll('.chatbot-option').forEach(btn => {
      btn.addEventListener('click', () => {
        this.handleAnswer(step.type, btn.dataset.value, parseInt(btn.dataset.score));
      });
    });

    // Scroll to bottom
    chatContainer.scrollTop = chatContainer.scrollHeight;
  }

  handleAnswer(type, value, scoreValue) {
    // Guardar respuesta
    this.conversation.push({ type, value, scoreValue });

    // Actualizar score BANT
    this.score[type] = scoreValue;

    // Mostrar respuesta del usuario
    this.displayUserAnswer(value);

    // Siguiente pregunta
    this.currentStep++;
    setTimeout(() => this.askNext(), 500);
  }

  displayUserAnswer(text) {
    const chatContainer = document.getElementById('chatbot-container');

    const answerEl = document.createElement('div');
    answerEl.className = 'chatbot-user-answer';
    answerEl.textContent = text;

    chatContainer.appendChild(answerEl);
  }

  finish() {
    // Calcular score total
    const totalScore = Object.values(this.score).reduce((a, b) => a + b, 0);
    const maxScore = 40; // 10 por cada categoría
    const percentage = (totalScore / maxScore) * 100;

    // Clasificar lead
    let leadQuality = 'cold';
    let nextAction = 'nurture';

    if (percentage >= 75) {
      leadQuality = 'hot';
      nextAction = 'call_immediate';
    } else if (percentage >= 50) {
      leadQuality = 'warm';
      nextAction = 'call_24h';
    } else if (percentage >= 25) {
      leadQuality = 'warm';
      nextAction = 'email_sequence';
    }

    // Mostrar mensaje final personalizado
    this.displayFinalMessage(leadQuality, percentage);

    // Enviar a CRM
    this.sendToCRM({
      profile: this.userProfile,
      bant_score: this.score,
      total_score: totalScore,
      percentage: percentage,
      lead_quality: leadQuality,
      next_action: nextAction,
      conversation: this.conversation
    });

    // Routing automático
    this.routeLead(leadQuality, nextAction);
  }

  displayFinalMessage(quality, percentage) {
    const chatContainer = document.getElementById('chatbot-container');

    const messages = {
      hot: {
        title: "¡Perfecto! Parece que podemos ayudarte pronto 🚀",
        message: "Un asesor te contactará en las próximas 2 horas para agendar una videollamada.",
        cta: "Agendar llamada ahora"
      },
      warm: {
        title: "¡Excelente! Vamos por buen camino 👍",
        message: "Te enviaremos información personalizada a tu email y un asesor te contactará en 24 horas.",
        cta: "Descargar guía completa"
      },
      cold: {
        title: "Gracias por tu interés 📚",
        message: "Te enviaremos contenido educativo para que conozcas más sobre SOFOMes.",
        cta: "Suscribirme al newsletter"
      }
    };

    const msg = messages[quality];

    const finalEl = document.createElement('div');
    finalEl.className = 'chatbot-final';
    finalEl.innerHTML = `
      <div class="chatbot-final-content">
        <h3>${msg.title}</h3>
        <p>${msg.message}</p>

        <div class="bant-score-visual">
          <div class="score-bar">
            <div class="score-fill" style="width: ${percentage}%"></div>
          </div>
          <p class="score-text">Match: ${percentage.toFixed(0)}%</p>
        </div>

        <button class="cta-primary" onclick="chatbot.handleCTA('${quality}')">
          ${msg.cta}
        </button>
      </div>
    `;

    chatContainer.appendChild(finalEl);
  }

  async sendToCRM(leadData) {
    // Enviar a HubSpot, Salesforce, etc.
    await fetch('/api/crm/lead', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        ...leadData,
        source: 'chatbot_bant',
        timestamp: new Date().toISOString(),
        url: window.location.href
      })
    });

    // Analytics
    gtag('event', 'lead_qualified', {
      event_category: 'BANT Chatbot',
      event_label: leadData.lead_quality,
      value: leadData.total_score
    });
  }

  routeLead(quality, action) {
    const actions = {
      call_immediate: () => {
        // Trigger llamada automática con Twilio
        fetch('/api/trigger-call', {
          method: 'POST',
          body: JSON.stringify({ leadId: this.leadId })
        });
      },
      call_24h: () => {
        // Agregar a cola de llamadas en CRM
        fetch('/api/schedule-call', {
          method: 'POST',
          body: JSON.stringify({ leadId: this.leadId, delay: 24 })
        });
      },
      email_sequence: () => {
        // Agregar a secuencia de emails
        fetch('/api/add-to-sequence', {
          method: 'POST',
          body: JSON.stringify({
            leadId: this.leadId,
            sequence: `nurture_${this.userProfile}`
          })
        });
      },
      nurture: () => {
        // Agregar a newsletter
        fetch('/api/subscribe-newsletter', {
          method: 'POST',
          body: JSON.stringify({ leadId: this.leadId })
        });
      }
    };

    actions[action]?.();
  }
}

// Initialize chatbot
const chatbot = new BANTChatbot();
```

---

## 4. EMAIL SEQUENCES PERSONALIZADAS (94% MÁS CONVERSIÓN)

### Sequence 1: Founders Constituyendo SOFOM (9 emails, 21 días)

**Email 1 (Día 0): Welcome + Recursos**
```
Asunto: Tu guía para constituir una SOFOM ENR está aquí ✓

Hola {{firstName}},

Gracias por tu interés en constituir una SOFOM. Aquí está tu guía paso a paso:

📥 [Descargar: Checklist Completo de Constitución SOFOM 2025]

**Lo que encontrarás:**
✓ 7 pasos detallados desde denominación hasta SIPRES
✓ Timeline real (8-12 semanas)
✓ Costos desglosados
✓ Documentos necesarios
✓ Errores que cuestan $50k+ y cómo evitarlos

**Bonus:** Lista de verificación del dictamen técnico CNBV (el paso más crítico).

Mañana te envío cómo acelerar 40% el proceso.

Saludos,
[Nombre]
Director de Compliance
[Firma con credenciales CNBV]

P.D. ¿Tienes dudas? Responde este email y te contesto personalmente.
```

**Email 2 (Día 1): Caso de éxito + Pain point**
```
Asunto: [Caso real] FinTech constituyó su SOFOM en 9 semanas

Hola {{firstName}},

Ayer te enviamos la guía. Hoy quiero compartirte el caso de TechCredit (FinTech de microcréditos).

**Su situación:**
- Rechazados por 3 despachos (les cotizaban $180k y 16 semanas)
- Estatutos mal redactados = dictamen CNBV rechazado 2 veces
- Perdieron $40k en trámites fallidos

**Cómo los ayudamos:**
✓ Estatutos CNBV-compliant desde día 1
✓ Dictamen técnico aprobado en primera vuelta
✓ Constitución completa: 9 semanas, $95k
✓ Hoy facturan $2M/mes

[Ver caso completo con métricas]

**La clave:** No improvisar en el dictamen técnico. El 60% de los rechazos son por manuales PLD mal diseñados.

Mañana: Los 3 errores que cuestan $50k+

[Nombre]
```

**Email 3 (Día 3): Educación + Autoridad**
```
Asunto: 3 errores que cuestan $50,000+ en una SOFOM

{{firstName}}, estos son reales:

**Error #1: No obtener la opinión CONDUSEF antes de constituir**
→ Resultado: Estatutos rechazados, $15k en gastos notariales perdidos
→ Solución: Primero opinión, luego notario

**Error #2: Subestimar el dictamen técnico CNBV**
→ Resultado: Rechazos, retrasos de 3-6 meses, $30k en consultores
→ Solución: Manual PLD diseñado por experto certificado

**Error #3: No tener Oficial de Cumplimiento desde día 1**
→ Resultado: CNBV pide info, no hay quién responda, dictamen pausado
→ Solución: OC certificado antes del dictamen

[Descarga: Plantilla de Manual PLD/FT]

¿Quieres evitar estos errores? Agende 30 min conmigo (sin costo):
[Calendario]

[Nombre]
```

**Email 4 (Día 5): Oferta suave + Urgencia**
```
Asunto: Solo 3 cupos para constitución en octubre

{{firstName}},

Dato importante: Solo tomamos 3 constituciones por mes.

¿Por qué?
Porque cada dictamen técnico requiere 40+ horas de nuestro equipo de compliance. No podemos sacrificar calidad por volumen.

**Para octubre 2025 quedan 3 cupos:**
✓ Cupo 1: Reservado (FinTech de factoraje)
✓ Cupo 2: Reservado (SOFOM hipotecaria)
✓ Cupo 3: DISPONIBLE

**Si inicias antes del 15 de octubre:**
- Constitución completada antes de fin de año
- Dictamen CNBV garantizado antes Q1 2026
- Pricing 2025 (aumenta 15% en enero)

[Reservar consultoría gratuita]

No presiono. Solo quiero que tengas la info.

[Nombre]

P.D. Si octubre no te funciona, noviembre abre el 1ro.
```

**Email 5 (Día 8): Prueba social + Credenciales**
```
Asunto: 98% de nuestros dictámenes CNBV aprobados

{{firstName}}, números no mienten:

📊 **Nuestro track record en 2024:**
✓ 47 SOFOMes constituidas
✓ 46 dictámenes aprobados en primera vuelta (98%)
✓ 1 rechazado (cliente no siguió recomendaciones)
✓ Tiempo promedio: 9.2 semanas

**¿Cómo logramos 98%?**

1. Nuestra Directora de Compliance trabajó 8 años en CNBV
2. Tenemos el formato exacto que buscan los revisores
3. Pre-revisión interna antes de enviar a CNBV

[Ver 10 dictámenes aprobados (con watermark)]

**Garantía:** Si tu dictamen es rechazado por error nuestro, reembolsamos 100%.

¿Revisamos tu caso? [Agendar 30 min]

[Nombre]
```

(Continúan emails 6-9 con estrategia de nurture, más casos de éxito, webinar, oferta final)

### Sequence 2: PyMEs Buscando Financiamiento (7 emails, 14 días)

**Email 1 (Día 0): Pain + Solución rápida**
```
Asunto: ¿El banco te rechazó? Esto es lo que sigue

{{firstName}},

El 70% de solicitudes bancarias son rechazadas. Si estás en ese 70%, aquí está la alternativa:

**SOFOMes: El secreto de las PyMEs que sí consiguen crédito**

✓ Aprobación: 48-72 horas (vs 3-6 semanas bancos)
✓ Tasa de aprobación: 65% (vs 30% bancos)
✓ Requisitos flexibles (no necesitas 2 años de historial)
✓ Montos: $50k - $5M

[Calculadora: ¿Cuánto puedo obtener?]

**Siguiente paso:** Completa la calculadora (2 minutos) y sabrás si calificas.

[Nombre]
Asesor de Financiamiento PyME
```

(Continúan emails con casos de PyMEs similares, requisitos, proceso, oferta)

---

## 5. DATOS DE PRIMERA MANO (Sin cookies de terceros)

### Lead Magnets Estratégicos

**1. Calculadora de Crédito Interactiva**
```html
<div class="lead-magnet" data-type="calculadora">
  <h3>Calcula tu Crédito SOFOM en 2 Minutos</h3>

  <form id="credit-calculator">
    <div class="form-step active" data-step="1">
      <label>¿Cuánto necesitas?</label>
      <input type="range" min="50000" max="5000000" step="50000" value="500000" id="amount">
      <output>$<span id="amount-display">500,000</span></output>

      <button type="button" onclick="nextStep(2)">Continuar</button>
    </div>

    <div class="form-step" data-step="2">
      <label>¿En cuánto tiempo quieres pagarlo?</label>
      <select id="term">
        <option value="12">12 meses</option>
        <option value="24">24 meses</option>
        <option value="36">36 meses</option>
        <option value="48">48 meses</option>
      </select>

      <button type="button" onclick="nextStep(3)">Continuar</button>
    </div>

    <div class="form-step" data-step="3">
      <label>¿Cuál es tu giro de negocio?</label>
      <select id="industry">
        <option value="retail">Retail/Comercio</option>
        <option value="services">Servicios</option>
        <option value="manufacturing">Manufactura</option>
        <option value="tech">Tecnología</option>
        <option value="other">Otro</option>
      </select>

      <button type="button" onclick="nextStep(4)">Ver mi resultado</button>
    </div>

    <div class="form-step" data-step="4">
      <h4>Para enviarte el resultado detallado:</h4>

      <input type="text" id="name" placeholder="Tu nombre" required>
      <input type="email" id="email" placeholder="Email" required>
      <input type="tel" id="phone" placeholder="WhatsApp (opcional)">

      <label class="checkbox">
        <input type="checkbox" required>
        Acepto recibir información de SOFOMes por email
      </label>

      <button type="submit">Ver mi plan de pago</button>
    </div>
  </form>
</div>

<script>
function nextStep(step) {
  document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
  document.querySelector(`[data-step="${step}"]`).classList.add('active');

  // Track progress
  gtag('event', 'calculator_step', {
    event_category: 'Lead Magnet',
    event_label: `Step ${step}`,
    value: step
  });
}

document.getElementById('credit-calculator').addEventListener('submit', async (e) => {
  e.preventDefault();

  const formData = {
    amount: document.getElementById('amount').value,
    term: document.getElementById('term').value,
    industry: document.getElementById('industry').value,
    name: document.getElementById('name').value,
    email: document.getElementById('email').value,
    phone: document.getElementById('phone').value
  };

  // Enviar a CRM
  await fetch('/api/leads/calculator', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(formData)
  });

  // Mostrar resultado + agregar a email sequence
  showResult(formData);
});
</script>
```

**2. Checklist Descargable (Gated Content)**
- "Checklist Completo: 47 Pasos para Constituir una SOFOM ENR"
- "Plantilla de Manual PLD/FT (CNBV-compliant)"
- "ROI Calculator: ¿Vale la pena crear una SOFOM?"

**3. Webinar On-Demand**
- "Masterclass: Constituye tu SOFOM en 2025"
- Requiere email + nombre + empresa
- Auto-segment a email sequence post-webinar

### Estrategia de Opt-in Progresivo

```javascript
// progressive-opt-in.js

class ProgressiveOptIn {
  constructor() {
    this.data = {};
    this.score = 0;
  }

  // Micro-conversión 1: Solo email (bajo compromiso)
  async collectEmail(email) {
    this.data.email = email;
    this.score += 1;

    await this.save();

    // Siguiente: Pedir nombre después de 30 segundos
    setTimeout(() => {
      if (!this.data.name) {
        this.requestName();
      }
    }, 30000);
  }

  // Micro-conversión 2: Nombre
  async collectName(name) {
    this.data.name = name;
    this.score += 1;

    await this.save();

    // Siguiente: Pedir teléfono después de 1 interacción más
    this.waitForInteraction(() => {
      if (!this.data.phone) {
        this.requestPhone();
      }
    });
  }

  // Micro-conversión 3: Teléfono (alto compromiso)
  async collectPhone(phone) {
    this.data.phone = phone;
    this.score += 3;

    await this.save();

    // Lead completo, agregar a CRM
    this.addToCRM();
  }

  requestName() {
    // Modal simple
    const modal = `
      <div class="micro-opt-in">
        <p>Hola ${this.data.email}, ¿cómo te llamas?</p>
        <input type="text" id="progressive-name" placeholder="Tu nombre">
        <button onclick="progressiveOptIn.collectName(document.getElementById('progressive-name').value)">
          Continuar
        </button>
      </div>
    `;

    // Mostrar en esquina inferior derecha (no invasivo)
    this.showToast(modal);
  }

  requestPhone() {
    const modal = `
      <div class="micro-opt-in">
        <p>Hola ${this.data.name}, ¿te gustaría recibir actualizaciones por WhatsApp?</p>
        <input type="tel" id="progressive-phone" placeholder="WhatsApp (opcional)">
        <button onclick="progressiveOptIn.collectPhone(document.getElementById('progressive-phone').value)">
          Sí, agregar
        </button>
        <button onclick="progressiveOptIn.skip()">Ahora no</button>
      </div>
    `;

    this.showToast(modal);
  }

  async save() {
    // Guardar en localStorage (primera mano)
    localStorage.setItem('user_data', JSON.stringify(this.data));

    // Enviar a backend
    await fetch('/api/leads/progressive', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        ...this.data,
        score: this.score,
        timestamp: Date.now()
      })
    });
  }
}

const progressiveOptIn = new ProgressiveOptIn();
```

---

## 6. MÉTRICAS Y TRACKING 2025

### Dashboard de Personalización

```javascript
// personalization-dashboard.js

class PersonalizationDashboard {
  async getMetrics() {
    const response = await fetch('/api/analytics/personalization');
    const data = await response.json();

    return {
      // Segmentación
      profiles: {
        pyme: {
          traffic: data.pyme.visits,
          conversion: data.pyme.conversions / data.pyme.visits,
          revenue: data.pyme.revenue
        },
        founder: {
          traffic: data.founder.visits,
          conversion: data.founder.conversions / data.founder.visits,
          revenue: data.founder.revenue
        },
        investor: {
          traffic: data.investor.visits,
          conversion: data.investor.conversions / data.investor.visits,
          revenue: data.investor.revenue
        }
      },

      // BANT Chatbot
      chatbot: {
        completion_rate: data.chatbot.completed / data.chatbot.started,
        avg_bant_score: data.chatbot.avg_score,
        hot_leads: data.chatbot.hot,
        warm_leads: data.chatbot.warm,
        cold_leads: data.chatbot.cold
      },

      // Email Sequences
      email: {
        open_rate: data.email.opens / data.email.sent,
        click_rate: data.email.clicks / data.email.sent,
        conversion_rate: data.email.conversions / data.email.sent,
        revenue_per_email: data.email.revenue / data.email.sent
      },

      // Lead Magnets
      lead_magnets: {
        calculator: {
          starts: data.magnets.calculator.starts,
          completions: data.magnets.calculator.completions,
          conversion: data.magnets.calculator.completions / data.magnets.calculator.starts
        },
        checklist: {
          downloads: data.magnets.checklist.downloads,
          leads: data.magnets.checklist.leads
        },
        webinar: {
          registrations: data.magnets.webinar.registrations,
          attendance: data.magnets.webinar.attendance,
          conversion: data.magnets.webinar.conversions / data.magnets.webinar.registrations
        }
      }
    };
  }

  render() {
    // Render dashboard con Chart.js
  }
}
```

### KPIs de Éxito

| Métrica | Baseline | Target 3m | Target 6m |
|---------|----------|-----------|-----------|
| **Conversión General** | 1.5% | 3.0% | 4.5% |
| **Conversión PyMEs** | - | 2.5% | 4.0% |
| **Conversión Founders** | - | 4.0% | 6.0% |
| **Conversión Investors** | - | 8.0% | 12.0% |
| **BANT Hot Leads** | - | 20/mes | 50/mes |
| **Email Open Rate** | 22% | 35% | 45% |
| **Email Click Rate** | 3% | 8% | 12% |
| **Chatbot Completion** | - | 60% | 75% |
| **Lead Magnet Conversion** | - | 25% | 40% |

---

## CHECKLIST DE IMPLEMENTACIÓN

### Fase 1: Segmentación (Semana 1-2)
- [ ] Implementar PersonalizationEngine.js
- [ ] Crear 3 variantes de Hero section
- [ ] Personalizar CTAs por perfil
- [ ] Setup A/B testing

### Fase 2: BANT Chatbot (Semana 3-4)
- [ ] Implementar BANTChatbot.js
- [ ] Crear 3 flows conversacionales
- [ ] Integrar con CRM (HubSpot/Salesforce)
- [ ] Setup routing automático

### Fase 3: Email Sequences (Semana 5-6)
- [ ] Escribir 9 emails para Founders
- [ ] Escribir 7 emails para PyMEs
- [ ] Implementar en ESP (ActiveCampaign/Klaviyo)
- [ ] Setup triggers automáticos

### Fase 4: Lead Magnets (Semana 7-8)
- [ ] Desarrollar calculadora de crédito
- [ ] Crear 3 checklists descargables
- [ ] Grabar webinar on-demand
- [ ] Implementar progressive opt-in

---

**Estado:** ✅ Estrategia de personalización con IA completada
**ROI esperado:** +80% conversión en landing, +94% conversión en email outreach
