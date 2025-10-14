# GUÍA DE IMPLEMENTACIÓN - SOFOMES.COM
## Manual Técnico para Desarrolladores

---

## ÍNDICE

1. [Stack Tecnológico Recomendado](#stack-tecnológico)
2. [Estructura de Archivos](#estructura-archivos)
3. [Setup Inicial](#setup-inicial)
4. [Implementación por Componentes](#componentes)
5. [Optimizaciones de Performance](#performance)
6. [SEO y Analytics](#seo-analytics)
7. [Testing y QA](#testing)
8. [Deployment](#deployment)

---

## 1. STACK TECNOLÓGICO RECOMENDADO {#stack-tecnológico}

### Opción A: Vanilla Stack (Máximo Performance)

```json
{
  "html": "HTML5 semántico",
  "css": "CSS3 con Custom Properties",
  "js": "JavaScript ES6+ vanilla",
  "fonts": "Inter (Google Fonts)",
  "icons": "Heroicons SVG",
  "animations": "Intersection Observer API + CSS animations",
  "forms": "HTML5 validation + Fetch API",
  "build": "Vite o Parcel (bundler mínimo)"
}
```

**Ventajas:**
- Zero dependencies
- Performance óptimo
- Control total
- Ideal para landing page estática

### Opción B: Modern Stack (Escalabilidad)

```json
{
  "framework": "Next.js 14 (React)",
  "styling": "Tailwind CSS",
  "animations": "Framer Motion",
  "forms": "React Hook Form",
  "validation": "Zod",
  "icons": "Heroicons React",
  "hosting": "Vercel",
  "cms": "Sanity o Contentful (opcional)"
}
```

**Ventajas:**
- SEO automático (SSG/ISR)
- Componentes reutilizables
- Ecosistema robusto
- Fácil escalamiento a sitio completo

**Recomendación:** Opción A para MVP rápido, Opción B para producto escalable.

---

## 2. ESTRUCTURA DE ARCHIVOS {#estructura-archivos}

### Opción A: Vanilla Structure

```
sofomes.com/
├── index.html                 # Landing page principal
├── assets/
│   ├── css/
│   │   ├── reset.css         # CSS reset/normalize
│   │   ├── variables.css     # Custom properties (design tokens)
│   │   ├── base.css          # Estilos base y tipografía
│   │   ├── components.css    # Componentes reutilizables
│   │   ├── sections.css      # Estilos por sección
│   │   ├── animations.css    # Keyframes y transiciones
│   │   └── responsive.css    # Media queries
│   ├── js/
│   │   ├── main.js           # Entry point
│   │   ├── navigation.js     # Navegación sticky/mobile
│   │   ├── animations.js     # Intersection Observer
│   │   ├── forms.js          # Validación y submit
│   │   ├── accordion.js      # FAQ accordion
│   │   └── analytics.js      # Google Analytics/Tag Manager
│   ├── images/
│   │   ├── hero/             # Imágenes hero section
│   │   ├── logos/            # Logos CNBV, CONDUSEF
│   │   ├── infografias/      # Exports PNG de infografías
│   │   └── og/               # Open Graph images
│   ├── fonts/
│   │   └── inter/            # Inter font files (si self-hosted)
│   └── svg/
│       ├── icons/            # Iconos individuales
│       └── infografias/      # SVG de las 4 infografías
├── docs/
│   ├── DESIGN-SYSTEM.md
│   ├── WIREFRAMES.md
│   ├── INFOGRAFIAS.md
│   └── IMPLEMENTATION-GUIDE.md
├── public/
│   ├── robots.txt
│   ├── sitemap.xml
│   └── favicon.ico
└── package.json              # Dependencies (Vite, etc)
```

### Opción B: Next.js Structure

```
sofomes.com/
├── app/
│   ├── layout.tsx            # Root layout
│   ├── page.tsx              # Home page
│   ├── globals.css           # Global styles
│   └── components/
│       ├── Hero.tsx
│       ├── TrustBar.tsx
│       ├── Navigation.tsx
│       ├── SectionQue.tsx
│       ├── SectionTipos.tsx
│       ├── SectionVentajas.tsx
│       ├── SectionProceso.tsx
│       ├── SectionCompliance.tsx
│       ├── SectionGarantias.tsx
│       ├── FAQ.tsx
│       ├── CTAFinal.tsx
│       ├── Footer.tsx
│       └── infografias/
│           ├── Infografia1.tsx
│           ├── Infografia2.tsx
│           ├── Infografia3.tsx
│           └── Infografia4.tsx
├── public/
│   ├── images/
│   ├── fonts/
│   └── svg/
├── lib/
│   ├── constants.ts          # Design tokens
│   └── utils.ts              # Helper functions
├── styles/
│   └── tailwind.config.js
└── package.json
```

---

## 3. SETUP INICIAL {#setup-inicial}

### Opción A: Vanilla Setup

```bash
# 1. Crear estructura de carpetas
mkdir -p sofomes.com/{assets/{css,js,images,fonts,svg},public,docs}

# 2. Inicializar proyecto
cd sofomes.com
npm init -y

# 3. Instalar Vite (bundler ligero)
npm install --save-dev vite

# 4. Configurar package.json scripts
```

```json
{
  "name": "sofomes-landing",
  "version": "1.0.0",
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "preview": "vite preview"
  },
  "devDependencies": {
    "vite": "^5.0.0"
  }
}
```

```bash
# 5. Crear vite.config.js
```

```javascript
// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  root: './',
  build: {
    outDir: 'dist',
    minify: 'terser',
    sourcemap: false
  },
  server: {
    port: 3000,
    open: true
  }
});
```

### Opción B: Next.js Setup

```bash
# 1. Crear proyecto Next.js con Tailwind
npx create-next-app@latest sofomes.com --typescript --tailwind --app --no-src-dir

cd sofomes.com

# 2. Instalar dependencias adicionales
npm install framer-motion heroicons react-hook-form zod

# 3. Ejecutar desarrollo
npm run dev
```

---

## 4. IMPLEMENTACIÓN POR COMPONENTES {#componentes}

### 4.1 Variables CSS (Design Tokens)

```css
/* assets/css/variables.css */

:root {
  /* === COLORS === */

  /* Primary */
  --primary-900: #0A2463;
  --primary-700: #1E3A8A;
  --primary-500: #3B82F6;
  --primary-300: #93C5FD;
  --primary-100: #DBEAFE;

  /* Secondary */
  --secondary-900: #065F46;
  --secondary-500: #10B981;
  --secondary-300: #6EE7B7;
  --secondary-100: #D1FAE5;

  /* Accent */
  --accent-warning: #F59E0B;
  --accent-danger: #EF4444;
  --accent-success: #10B981;

  /* Neutral */
  --neutral-900: #111827;
  --neutral-700: #374151;
  --neutral-500: #6B7280;
  --neutral-300: #D1D5DB;
  --neutral-100: #F3F4F6;
  --neutral-50: #F9FAFB;
  --white: #FFFFFF;

  /* Gradients */
  --gradient-hero: linear-gradient(135deg, #0A2463 0%, #3B82F6 100%);
  --gradient-cta: linear-gradient(90deg, #3B82F6 0%, #2563EB 100%);
  --gradient-success: linear-gradient(135deg, #065F46 0%, #10B981 100%);

  /* === TYPOGRAPHY === */

  --font-display: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  --font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;

  /* Font Sizes */
  --text-xs: 0.75rem;      /* 12px */
  --text-sm: 0.875rem;     /* 14px */
  --text-base: 1rem;       /* 16px */
  --text-lg: 1.125rem;     /* 18px */
  --text-xl: 1.25rem;      /* 20px */
  --text-2xl: 1.5rem;      /* 24px */
  --text-3xl: 1.875rem;    /* 30px */
  --text-4xl: 2.25rem;     /* 36px */
  --text-5xl: 3rem;        /* 48px */
  --text-6xl: 3.75rem;     /* 60px */

  /* Font Weights */
  --font-light: 300;
  --font-normal: 400;
  --font-medium: 500;
  --font-semibold: 600;
  --font-bold: 700;
  --font-extrabold: 800;

  /* Line Heights */
  --leading-tight: 1.25;
  --leading-snug: 1.375;
  --leading-normal: 1.5;
  --leading-relaxed: 1.625;
  --leading-loose: 2;

  /* === SPACING === */

  --space-0: 0;
  --space-1: 0.25rem;      /* 4px */
  --space-2: 0.5rem;       /* 8px */
  --space-3: 0.75rem;      /* 12px */
  --space-4: 1rem;         /* 16px */
  --space-5: 1.5rem;       /* 24px */
  --space-6: 2rem;         /* 32px */
  --space-8: 3rem;         /* 48px */
  --space-10: 4rem;        /* 64px */
  --space-12: 6rem;        /* 96px */
  --space-16: 8rem;        /* 128px */
  --space-20: 10rem;       /* 160px */

  /* === SHADOWS === */

  --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
  --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.1);
  --shadow-2xl: 0 25px 50px rgba(0, 0, 0, 0.25);

  /* === BORDER RADIUS === */

  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 12px;
  --radius-xl: 16px;
  --radius-2xl: 24px;
  --radius-full: 9999px;

  /* === TRANSITIONS === */

  --duration-fast: 150ms;
  --duration-base: 300ms;
  --duration-slow: 500ms;

  --ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);
  --ease-out: cubic-bezier(0, 0, 0.2, 1);

  /* === BREAKPOINTS (para JS) === */

  --breakpoint-sm: 640px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 1024px;
  --breakpoint-xl: 1280px;

  /* === Z-INDEX === */

  --z-base: 1;
  --z-dropdown: 10;
  --z-sticky: 100;
  --z-modal: 1000;
}
```

### 4.2 Base Styles

```css
/* assets/css/base.css */

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
  scroll-padding-top: 80px; /* Altura del nav sticky */
}

body {
  font-family: var(--font-body);
  font-size: var(--text-base);
  line-height: var(--leading-normal);
  color: var(--neutral-700);
  background-color: var(--white);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Typography */

h1, h2, h3, h4, h5, h6 {
  font-weight: var(--font-bold);
  color: var(--primary-900);
  line-height: var(--leading-tight);
  margin-bottom: var(--space-4);
}

h1 {
  font-size: clamp(2.5rem, 5vw, 3.75rem);
  font-weight: var(--font-extrabold);
  letter-spacing: -0.025em;
}

h2 {
  font-size: clamp(1.875rem, 4vw, 2.25rem);
  font-weight: var(--font-bold);
}

h3 {
  font-size: clamp(1.5rem, 3vw, 1.875rem);
  font-weight: var(--font-semibold);
}

p {
  margin-bottom: var(--space-4);
}

a {
  color: var(--primary-500);
  text-decoration: none;
  transition: color var(--duration-base) var(--ease-in-out);
}

a:hover {
  color: var(--primary-700);
}

/* Utilities */

.container {
  width: 100%;
  max-width: 1280px;
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--space-4);
  padding-right: var(--space-4);
}

@media (min-width: 768px) {
  .container {
    padding-left: var(--space-6);
    padding-right: var(--space-6);
  }
}

.section {
  padding-top: var(--space-8);
  padding-bottom: var(--space-8);
}

@media (min-width: 768px) {
  .section {
    padding-top: var(--space-12);
    padding-bottom: var(--space-12);
  }
}

@media (min-width: 1024px) {
  .section {
    padding-top: var(--space-16);
    padding-bottom: var(--space-16);
  }
}

/* Focus States (Accesibilidad) */

*:focus {
  outline: 2px solid var(--primary-500);
  outline-offset: 2px;
}

*:focus:not(:focus-visible) {
  outline: none;
}

*:focus-visible {
  outline: 2px solid var(--primary-500);
  outline-offset: 2px;
  box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
}
```

### 4.3 Componente: Navegación Sticky

```html
<!-- HTML Structure -->
<nav class="nav" id="main-nav">
  <div class="container">
    <div class="nav-content">
      <!-- Logo -->
      <a href="#" class="nav-logo" aria-label="SOFOMES.COM - Inicio">
        <img src="/assets/images/logos/logo.svg" alt="SOFOMES.COM" width="180" height="40">
      </a>

      <!-- Desktop Navigation -->
      <ul class="nav-links" id="nav-links">
        <li><a href="#que-es" class="nav-link">¿Qué es?</a></li>
        <li><a href="#tipos" class="nav-link">Tipos</a></li>
        <li><a href="#ventajas" class="nav-link">Ventajas</a></li>
        <li><a href="#proceso" class="nav-link">Proceso</a></li>
        <li><a href="#compliance" class="nav-link">Compliance</a></li>
        <li><a href="#contacto" class="nav-link nav-link-cta">Contacto</a></li>
      </ul>

      <!-- Mobile Menu Toggle -->
      <button class="nav-toggle" id="nav-toggle" aria-label="Abrir menú de navegación" aria-expanded="false">
        <span class="hamburger"></span>
      </button>
    </div>
  </div>
</nav>
```

```css
/* assets/css/components.css - Navigation */

.nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: var(--z-sticky);
  background: var(--white);
  transition: all var(--duration-base) var(--ease-in-out);
}

.nav.scrolled {
  box-shadow: var(--shadow-md);
  backdrop-filter: blur(8px);
  background: rgba(255, 255, 255, 0.95);
}

.nav-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 72px;
}

.nav-logo img {
  display: block;
  height: 40px;
  width: auto;
}

.nav-links {
  display: none;
  list-style: none;
  gap: var(--space-6);
}

@media (min-width: 1024px) {
  .nav-links {
    display: flex;
  }
}

.nav-link {
  font-size: var(--text-base);
  font-weight: var(--font-medium);
  color: var(--neutral-700);
  transition: color var(--duration-base) var(--ease-in-out);
}

.nav-link:hover {
  color: var(--primary-500);
}

.nav-link.active {
  color: var(--primary-500);
  position: relative;
}

.nav-link.active::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  right: 0;
  height: 2px;
  background: var(--primary-500);
}

.nav-link-cta {
  padding: var(--space-2) var(--space-4);
  background: var(--gradient-cta);
  color: var(--white);
  border-radius: var(--radius-md);
}

.nav-link-cta:hover {
  color: var(--white);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

/* Mobile Menu Toggle */

.nav-toggle {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 44px;
  height: 44px;
  background: transparent;
  border: none;
  cursor: pointer;
}

@media (min-width: 1024px) {
  .nav-toggle {
    display: none;
  }
}

.hamburger,
.hamburger::before,
.hamburger::after {
  display: block;
  width: 24px;
  height: 2px;
  background: var(--primary-700);
  border-radius: 2px;
  transition: all var(--duration-base) var(--ease-in-out);
}

.hamburger {
  position: relative;
}

.hamburger::before,
.hamburger::after {
  content: '';
  position: absolute;
  left: 0;
}

.hamburger::before {
  top: -8px;
}

.hamburger::after {
  bottom: -8px;
}

/* Hamburger Animation */

.nav-toggle.active .hamburger {
  background: transparent;
}

.nav-toggle.active .hamburger::before {
  top: 0;
  transform: rotate(45deg);
}

.nav-toggle.active .hamburger::after {
  bottom: 0;
  transform: rotate(-45deg);
}

/* Mobile Menu */

@media (max-width: 1023px) {
  .nav-links {
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 72px;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--white);
    padding: var(--space-8) var(--space-4);
    gap: var(--space-4);
    transform: translateX(100%);
    transition: transform var(--duration-base) var(--ease-in-out);
  }

  .nav-links.active {
    transform: translateX(0);
  }

  .nav-link {
    font-size: var(--text-lg);
    padding: var(--space-3) 0;
    border-bottom: 1px solid var(--neutral-100);
  }
}
```

```javascript
// assets/js/navigation.js

class Navigation {
  constructor() {
    this.nav = document.getElementById('main-nav');
    this.navToggle = document.getElementById('nav-toggle');
    this.navLinks = document.getElementById('nav-links');
    this.links = this.navLinks.querySelectorAll('.nav-link');

    this.init();
  }

  init() {
    // Scroll effect
    window.addEventListener('scroll', () => this.handleScroll());

    // Mobile menu toggle
    this.navToggle.addEventListener('click', () => this.toggleMobileMenu());

    // Close mobile menu on link click
    this.links.forEach(link => {
      link.addEventListener('click', () => this.closeMobileMenu());
    });

    // Active link on scroll
    window.addEventListener('scroll', () => this.updateActiveLink());

    // Smooth scroll
    this.links.forEach(link => {
      link.addEventListener('click', (e) => this.smoothScroll(e));
    });
  }

  handleScroll() {
    if (window.scrollY > 50) {
      this.nav.classList.add('scrolled');
    } else {
      this.nav.classList.remove('scrolled');
    }
  }

  toggleMobileMenu() {
    const isActive = this.navToggle.classList.toggle('active');
    this.navLinks.classList.toggle('active');
    this.navToggle.setAttribute('aria-expanded', isActive);

    // Prevent body scroll when menu is open
    if (isActive) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
  }

  closeMobileMenu() {
    this.navToggle.classList.remove('active');
    this.navLinks.classList.remove('active');
    this.navToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  updateActiveLink() {
    const sections = document.querySelectorAll('section[id]');
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 100;
      const sectionId = section.getAttribute('id');
      const link = this.navLinks.querySelector(`a[href="#${sectionId}"]`);

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        this.links.forEach(l => l.classList.remove('active'));
        link?.classList.add('active');
      }
    });
  }

  smoothScroll(e) {
    const href = e.currentTarget.getAttribute('href');
    if (href.startsWith('#')) {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        const offsetTop = target.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    }
  }
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  new Navigation();
});
```

### 4.4 Componente: Hero Section

```html
<!-- HTML Structure -->
<section class="hero" id="hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title animate-fade-in-up">
          SOFOMES en México: La Alternativa de Financiamiento para PyMEs
        </h1>
        <p class="hero-subtitle animate-fade-in-up" style="animation-delay: 0.2s;">
          Crédito flexible fuera de la banca tradicional + Guía completa para
          constituir tu SOFOM ENR con certeza legal
        </p>
        <div class="hero-cta animate-fade-in-up" style="animation-delay: 0.4s;">
          <a href="#contacto" class="btn btn-primary">
            Solicitar Financiamiento
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#proceso" class="btn btn-secondary">
            Constituir SOFOM
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="hero-image animate-fade-in" style="animation-delay: 0.3s;">
        <img
          src="/assets/images/hero/hero-main.webp"
          srcset="
            /assets/images/hero/hero-main-640.webp 640w,
            /assets/images/hero/hero-main-1280.webp 1280w
          "
          sizes="(max-width: 768px) 100vw, 50vw"
          alt="PyME recibiendo financiamiento mediante SOFOM"
          width="600"
          height="400"
          loading="eager"
        >
      </div>
    </div>
  </div>
  <div class="hero-scroll-indicator">
    <svg class="scroll-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
    </svg>
  </div>
</section>
```

```css
/* assets/css/sections.css - Hero */

.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: var(--gradient-hero);
  overflow: hidden;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background-image: url('/assets/images/hero/hero-bg-pattern.svg');
  background-size: cover;
  opacity: 0.1;
}

.hero-content {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-8);
  align-items: center;
}

@media (min-width: 1024px) {
  .hero-content {
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
  }
}

.hero-text {
  color: var(--white);
}

.hero-title {
  color: var(--white);
  margin-bottom: var(--space-6);
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.hero-subtitle {
  font-size: var(--text-lg);
  line-height: var(--leading-relaxed);
  color: var(--primary-100);
  margin-bottom: var(--space-8);
  max-width: 600px;
}

.hero-cta {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}

@media (min-width: 640px) {
  .hero-cta {
    flex-direction: row;
  }
}

.hero-image {
  position: relative;
}

.hero-image img {
  width: 100%;
  height: auto;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-2xl);
}

.hero-scroll-indicator {
  position: absolute;
  bottom: var(--space-8);
  left: 50%;
  transform: translateX(-50%);
  z-index: 2;
}

.scroll-icon {
  color: var(--white);
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(10px);
  }
}
```

### 4.5 Componente: Botones

```css
/* assets/css/components.css - Buttons */

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-2);
  padding: var(--space-4) var(--space-8);
  font-size: var(--text-lg);
  font-weight: var(--font-semibold);
  font-family: var(--font-body);
  border-radius: var(--radius-md);
  border: none;
  cursor: pointer;
  transition: all var(--duration-base) var(--ease-in-out);
  text-decoration: none;
}

.btn-primary {
  color: var(--white);
  background: var(--gradient-cta);
  box-shadow: 0 4px 6px rgba(59, 130, 246, 0.25);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 12px rgba(59, 130, 246, 0.35);
  color: var(--white);
}

.btn-primary:active {
  transform: translateY(0);
}

.btn-secondary {
  color: var(--primary-700);
  background: var(--white);
  border: 2px solid var(--primary-500);
}

.btn-secondary:hover {
  background: var(--primary-50);
  border-color: var(--primary-700);
  color: var(--primary-700);
}

.btn-tertiary {
  color: var(--primary-500);
  background: transparent;
  padding: var(--space-2) var(--space-4);
}

.btn-tertiary:hover {
  color: var(--primary-700);
  text-decoration: underline;
}

.btn-icon {
  width: 20px;
  height: 20px;
  transition: transform var(--duration-base) var(--ease-in-out);
}

.btn:hover .btn-icon {
  transform: translateX(4px);
}

/* Button sizes */

.btn-sm {
  padding: var(--space-2) var(--space-4);
  font-size: var(--text-sm);
}

.btn-lg {
  padding: var(--space-5) var(--space-10);
  font-size: var(--text-xl);
}

/* Full width mobile */

@media (max-width: 639px) {
  .btn {
    width: 100%;
  }
}
```

### 4.6 Animaciones con Intersection Observer

```javascript
// assets/js/animations.js

class AnimationObserver {
  constructor() {
    this.options = {
      threshold: 0.2,
      rootMargin: '0px 0px -100px 0px'
    };

    this.init();
  }

  init() {
    // Observar elementos con clase .animate-on-scroll
    const elements = document.querySelectorAll('.animate-on-scroll');

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            observer.unobserve(entry.target);
          }
        });
      }, this.options);

      elements.forEach(el => observer.observe(el));
    } else {
      // Fallback para navegadores sin soporte
      elements.forEach(el => el.classList.add('animated'));
    }

    // Counter animation para estadísticas
    this.initCounters();
  }

  initCounters() {
    const counters = document.querySelectorAll('[data-counter]');

    if (counters.length === 0) return;

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, this.options);

    counters.forEach(counter => counterObserver.observe(counter));
  }

  animateCounter(element) {
    const target = parseInt(element.getAttribute('data-counter'));
    const duration = 2000; // 2 segundos
    const increment = target / (duration / 16); // 60fps
    let current = 0;

    const updateCounter = () => {
      current += increment;
      if (current < target) {
        element.textContent = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target;
      }
    };

    updateCounter();
  }
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  new AnimationObserver();
});
```

```css
/* assets/css/animations.css */

/* Fade In Up */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fadeInUp 0.6s var(--ease-out) forwards;
}

/* Fade In */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.animate-fade-in {
  animation: fadeIn 0.8s var(--ease-out) forwards;
}

/* Slide In Left */
@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.animate-slide-in-left {
  animation: slideInLeft 0.6s var(--ease-out) forwards;
}

/* Scale In */
@keyframes scaleIn {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.animate-scale-in {
  animation: scaleIn 0.5s var(--ease-out) forwards;
}

/* Scroll-triggered animations */
.animate-on-scroll {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s var(--ease-out);
}

.animate-on-scroll.animated {
  opacity: 1;
  transform: translateY(0);
}

/* Stagger delays para elementos hermanos */
.animate-on-scroll:nth-child(1) { transition-delay: 0ms; }
.animate-on-scroll:nth-child(2) { transition-delay: 100ms; }
.animate-on-scroll:nth-child(3) { transition-delay: 200ms; }
.animate-on-scroll:nth-child(4) { transition-delay: 300ms; }
```

---

## 5. OPTIMIZACIONES DE PERFORMANCE {#performance}

### 5.1 Critical CSS

```html
<!-- index.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Preconnect a dominios externos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Preload fuente crítica -->
  <link rel="preload" href="/assets/fonts/inter-var.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Critical CSS inline -->
  <style>
    /* Variables, reset, navigation, hero (above the fold) */
    /* ... código critical CSS ... */
  </style>

  <title>SOFOMES en México: Guía Definitiva de Financiamiento | SOFOMES.COM</title>

  <!-- Meta tags SEO -->
  <meta name="description" content="Guía completa sobre SOFOMES en México: financiamiento para PyMEs, proceso de constitución SOFOM ENR, ventajas fiscales y compliance PLD/FT.">
  <meta name="keywords" content="SOFOM México, financiamiento PyMEs, crédito SOFOM, constituir SOFOM ENR, CNBV, CONDUSEF">

  <!-- Open Graph -->
  <meta property="og:title" content="SOFOMES en México: La Alternativa de Financiamiento para PyMEs">
  <meta property="og:description" content="Descubre cómo acceder a financiamiento flexible o constituir tu SOFOM ENR con nuestra guía definitiva.">
  <meta property="og:image" content="https://sofomes.com/assets/images/og/og-main.jpg">
  <meta property="og:url" content="https://sofomes.com">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="SOFOMES en México: Guía Definitiva">
  <meta name="twitter:description" content="Financiamiento para PyMEs y guía de constitución SOFOM ENR">
  <meta name="twitter:image" content="https://sofomes.com/assets/images/og/og-main.jpg">

  <!-- Defer non-critical CSS -->
  <link rel="stylesheet" href="/assets/css/main.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="/assets/css/main.css"></noscript>

  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Content -->

  <!-- Defer scripts -->
  <script src="/assets/js/main.js" defer></script>
</body>
</html>
```

### 5.2 Image Optimization

```javascript
// Script para generar imágenes responsive con Sharp (build time)
// build-images.js

const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const sizes = [640, 1280, 1920];
const quality = 80;

async function optimizeImages() {
  const imagesDir = './assets/images';
  const outputDir = './dist/images';

  // Crear directorio de salida
  if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
  }

  // Procesar cada imagen
  const files = fs.readdirSync(imagesDir);

  for (const file of files) {
    const inputPath = path.join(imagesDir, file);
    const filename = path.parse(file).name;

    // Generar versiones responsive
    for (const size of sizes) {
      await sharp(inputPath)
        .resize(size, null, { withoutEnlargement: true })
        .webp({ quality })
        .toFile(path.join(outputDir, `${filename}-${size}.webp`));

      console.log(`✓ Generated ${filename}-${size}.webp`);
    }

    // Generar fallback JPEG
    await sharp(inputPath)
      .jpeg({ quality })
      .toFile(path.join(outputDir, `${filename}.jpg`));

    console.log(`✓ Generated ${filename}.jpg`);
  }
}

optimizeImages().catch(console.error);
```

### 5.3 Lazy Loading

```javascript
// assets/js/lazy-load.js

class LazyLoader {
  constructor() {
    this.images = document.querySelectorAll('img[loading="lazy"]');
    this.iframes = document.querySelectorAll('iframe[loading="lazy"]');

    this.init();
  }

  init() {
    // Navegadores modernos con soporte nativo
    if ('loading' in HTMLImageElement.prototype) {
      // El navegador maneja el lazy loading
      console.log('Native lazy loading supported');
    } else {
      // Fallback con Intersection Observer
      this.polyfill();
    }
  }

  polyfill() {
    const options = {
      rootMargin: '200px' // Cargar 200px antes de entrar en viewport
    };

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
          }
          if (img.dataset.srcset) {
            img.srcset = img.dataset.srcset;
          }
          img.classList.add('loaded');
          imageObserver.unobserve(img);
        }
      });
    }, options);

    this.images.forEach(img => imageObserver.observe(img));
    this.iframes.forEach(iframe => imageObserver.observe(iframe));
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new LazyLoader();
});
```

---

## 6. SEO Y ANALYTICS {#seo-analytics}

### 6.1 Structured Data (Schema.org)

```html
<!-- JSON-LD para Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FinancialService",
  "name": "SOFOMES.COM",
  "description": "Plataforma educativa sobre SOFOMES en México y servicios de constitución",
  "url": "https://sofomes.com",
  "logo": "https://sofomes.com/assets/images/logos/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+52-55-1234-5678",
    "contactType": "customer service",
    "availableLanguage": ["Spanish"]
  },
  "sameAs": [
    "https://linkedin.com/company/sofomes",
    "https://twitter.com/sofomesmx"
  ]
}
</script>

<!-- JSON-LD para FAQ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "¿Cuánto capital necesito para constituir una SOFOM ENR?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No existe un capital mínimo establecido por ley para constituir una SOFOM ENR. Sin embargo, el capital debe ser coherente con el plan de operaciones y suficiente para cubrir los gastos iniciales y operativos."
    }
  }, {
    "@type": "Question",
    "name": "¿Cuánto tiempo tarda el proceso de constitución?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "El proceso completo de constitución de una SOFOM ENR toma entre 90-120 días hábiles, considerando todos los pasos desde la solicitud de denominación hasta obtener la clave SITI PLD/FT de la CNBV."
    }
  }]
}
</script>
```

### 6.2 Google Analytics 4

```html
<!-- Google Tag Manager -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX', {
    page_path: window.location.pathname,
    send_page_view: true
  });
</script>
```

```javascript
// assets/js/analytics.js - Event tracking

class Analytics {
  constructor() {
    this.init();
  }

  init() {
    // Track CTA clicks
    document.querySelectorAll('[data-track-cta]').forEach(cta => {
      cta.addEventListener('click', (e) => {
        const ctaName = e.currentTarget.getAttribute('data-track-cta');
        this.trackEvent('cta_click', {
          cta_name: ctaName,
          cta_location: window.location.pathname
        });
      });
    });

    // Track form submissions
    document.querySelectorAll('form[data-track-form]').forEach(form => {
      form.addEventListener('submit', (e) => {
        const formName = e.currentTarget.getAttribute('data-track-form');
        this.trackEvent('form_submit', {
          form_name: formName
        });
      });
    });

    // Track scroll depth
    this.trackScrollDepth();

    // Track downloads
    document.querySelectorAll('[data-track-download]').forEach(link => {
      link.addEventListener('click', (e) => {
        const fileName = e.currentTarget.getAttribute('data-track-download');
        this.trackEvent('file_download', {
          file_name: fileName
        });
      });
    });
  }

  trackEvent(eventName, params = {}) {
    if (typeof gtag !== 'undefined') {
      gtag('event', eventName, params);
      console.log(`📊 Event tracked: ${eventName}`, params);
    }
  }

  trackScrollDepth() {
    const thresholds = [25, 50, 75, 100];
    const tracked = new Set();

    window.addEventListener('scroll', () => {
      const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;

      thresholds.forEach(threshold => {
        if (scrollPercent >= threshold && !tracked.has(threshold)) {
          tracked.add(threshold);
          this.trackEvent('scroll_depth', {
            percent: threshold
          });
        }
      });
    });
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new Analytics();
});
```

---

## 7. TESTING Y QA {#testing}

### 7.1 Checklist de Testing

```markdown
## Pre-Launch Checklist

### Performance
- [ ] Lighthouse Score > 90 (Performance, Accessibility, Best Practices, SEO)
- [ ] First Contentful Paint < 1.8s
- [ ] Time to Interactive < 3.8s
- [ ] Cumulative Layout Shift < 0.1
- [ ] Largest Contentful Paint < 2.5s
- [ ] Imágenes optimizadas (WebP/AVIF)
- [ ] Critical CSS inline
- [ ] JavaScript defer/async
- [ ] Lazy loading implementado

### SEO
- [ ] Meta tags completos en todas las páginas
- [ ] Open Graph tags configurados
- [ ] Twitter Card tags configurados
- [ ] Structured data (Schema.org) implementado
- [ ] Sitemap.xml generado
- [ ] Robots.txt configurado
- [ ] Canonical URLs correctos
- [ ] Alt text en todas las imágenes
- [ ] H1-H6 jerárquicos y correctos

### Accesibilidad (WCAG 2.1 AA)
- [ ] Contraste de colores > 4.5:1 (texto normal)
- [ ] Contraste de colores > 3:1 (texto grande)
- [ ] Navegación por teclado funcional
- [ ] Focus states visibles
- [ ] ARIA labels en elementos interactivos
- [ ] Skip links implementados
- [ ] Form labels asociados
- [ ] Error messages accesibles
- [ ] Screen reader testing (NVDA/JAWS)

### Responsive Design
- [ ] Mobile (320px-640px) ✓
- [ ] Tablet (640px-1024px) ✓
- [ ] Desktop (1024px+) ✓
- [ ] Touch targets mínimo 48x48px
- [ ] Texto legible sin zoom
- [ ] No scroll horizontal

### Cross-Browser Testing
- [ ] Chrome (últimas 2 versiones)
- [ ] Firefox (últimas 2 versiones)
- [ ] Safari (últimas 2 versiones)
- [ ] Edge (últimas 2 versiones)
- [ ] Mobile Safari (iOS 14+)
- [ ] Chrome Mobile (Android 10+)

### Funcionalidad
- [ ] Navegación smooth scroll funciona
- [ ] Mobile menu abre/cierra correctamente
- [ ] Forms validan correctamente
- [ ] Forms envían datos (testing endpoint)
- [ ] CTAs linkean a secciones correctas
- [ ] Infografías cargan y son interactivas
- [ ] FAQ accordion funciona
- [ ] Animaciones on-scroll funcionan
- [ ] No errores en consola

### Security
- [ ] HTTPS habilitado
- [ ] Headers de seguridad configurados
- [ ] Form honeypot anti-spam
- [ ] reCAPTCHA en formularios (si aplica)
- [ ] No secrets en código frontend
- [ ] Content Security Policy configurado

### Analytics
- [ ] Google Analytics tracking funciona
- [ ] Event tracking configurado
- [ ] Goal conversions definidos
- [ ] Heat mapping tool (opcional)
```

### 7.2 Testing Script

```javascript
// test.js - Automated testing con Playwright

const { test, expect } = require('@playwright/test');

test.describe('SOFOMES.COM Landing Page', () => {

  test.beforeEach(async ({ page }) => {
    await page.goto('https://sofomes.com');
  });

  test('Hero section loads correctly', async ({ page }) => {
    await expect(page.locator('h1')).toContainText('SOFOMES en México');
    await expect(page.locator('.btn-primary')).toBeVisible();
  });

  test('Navigation works', async ({ page }) => {
    await page.click('a[href="#ventajas"]');
    await page.waitForTimeout(1000);
    const section = await page.locator('#ventajas');
    await expect(section).toBeInViewport();
  });

  test('Mobile menu toggles', async ({ page }) => {
    await page.setViewportSize({ width: 375, height: 667 });
    await page.click('#nav-toggle');
    await expect(page.locator('#nav-links')).toHaveClass(/active/);
  });

  test('Form validation works', async ({ page }) => {
    await page.click('a[href="#contacto"]');
    await page.click('button[type="submit"]');
    const emailInput = page.locator('input[name="email"]');
    await expect(emailInput).toHaveAttribute('aria-invalid', 'true');
  });

  test('Accessibility: Focus management', async ({ page }) => {
    await page.keyboard.press('Tab');
    const focusedElement = await page.evaluate(() => document.activeElement.tagName);
    expect(focusedElement).toBeTruthy();
  });

  test('Performance: Images lazy load', async ({ page }) => {
    const images = await page.locator('img[loading="lazy"]').all();
    expect(images.length).toBeGreaterThan(0);
  });

});
```

---

## 8. DEPLOYMENT {#deployment}

### 8.1 Build Process

```json
// package.json - Build scripts

{
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "preview": "vite preview",
    "optimize-images": "node scripts/optimize-images.js",
    "prebuild": "npm run optimize-images",
    "postbuild": "npm run generate-sitemap",
    "generate-sitemap": "node scripts/generate-sitemap.js",
    "test": "playwright test",
    "lighthouse": "lighthouse https://sofomes.com --view"
  }
}
```

### 8.2 Vercel Deployment

```json
// vercel.json

{
  "version": 2,
  "builds": [
    {
      "src": "index.html",
      "use": "@vercel/static"
    }
  ],
  "headers": [
    {
      "source": "/(.*)",
      "headers": [
        {
          "key": "X-Content-Type-Options",
          "value": "nosniff"
        },
        {
          "key": "X-Frame-Options",
          "value": "DENY"
        },
        {
          "key": "X-XSS-Protection",
          "value": "1; mode=block"
        },
        {
          "key": "Referrer-Policy",
          "value": "strict-origin-when-cross-origin"
        }
      ]
    },
    {
      "source": "/assets/(.*)",
      "headers": [
        {
          "key": "Cache-Control",
          "value": "public, max-age=31536000, immutable"
        }
      ]
    }
  ],
  "redirects": [
    {
      "source": "/home",
      "destination": "/",
      "permanent": true
    }
  ]
}
```

### 8.3 CI/CD con GitHub Actions

```yaml
# .github/workflows/deploy.yml

name: Deploy to Production

on:
  push:
    branches: [main]

jobs:
  build-and-deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v3

      - name: Setup Node.js
        uses: actions/setup-node@v3
        with:
          node-version: '18'

      - name: Install dependencies
        run: npm ci

      - name: Run tests
        run: npm test

      - name: Build project
        run: npm run build

      - name: Deploy to Vercel
        uses: amondnet/vercel-action@v20
        with:
          vercel-token: ${{ secrets.VERCEL_TOKEN }}
          vercel-org-id: ${{ secrets.VERCEL_ORG_ID }}
          vercel-project-id: ${{ secrets.VERCEL_PROJECT_ID }}
          vercel-args: '--prod'
```

---

## PRÓXIMOS PASOS

1. **Fase 1: Setup** (1-2 días)
   - Configurar entorno de desarrollo
   - Instalar dependencias
   - Crear estructura de archivos

2. **Fase 2: Implementación Core** (5-7 días)
   - HTML semántico completo
   - CSS con design system
   - JavaScript funcionalidad básica

3. **Fase 3: Infografías** (3-4 días)
   - Crear SVGs de las 4 infografías
   - Implementar animaciones
   - Testing interactividad

4. **Fase 4: Optimización** (2-3 días)
   - Performance tuning
   - SEO implementation
   - Accessibility audit

5. **Fase 5: Testing** (2-3 días)
   - Cross-browser testing
   - Responsive testing
   - User acceptance testing

6. **Fase 6: Deploy** (1 día)
   - Deploy a staging
   - Final QA
   - Deploy a production

**Tiempo total estimado: 14-20 días**

---

## RECURSOS ADICIONALES

### Herramientas Recomendadas

- **Design:** Figma, Adobe XD
- **Code Editor:** VS Code
- **Version Control:** Git + GitHub
- **Performance:** Lighthouse, WebPageTest
- **SEO:** Google Search Console, Ahrefs
- **Analytics:** Google Analytics 4, Hotjar
- **Testing:** Playwright, BrowserStack
- **Deployment:** Vercel, Netlify, Cloudflare Pages

### Documentación

- [MDN Web Docs](https://developer.mozilla.org)
- [Web.dev](https://web.dev)
- [CSS-Tricks](https://css-tricks.com)
- [A11y Project](https://www.a11yproject.com)

---

**FIN DE LA GUÍA DE IMPLEMENTACIÓN**

Para cualquier duda o aclaración sobre la implementación, consultar los archivos:
- `/Users/isaac/Sites/localhost/sofomes.com/DESIGN-SYSTEM.md`
- `/Users/isaac/Sites/localhost/sofomes.com/WIREFRAMES.md`
- `/Users/isaac/Sites/localhost/sofomes.com/INFOGRAFIAS.md`
