# DESIGN SYSTEM - SOFOMES.COM
## Sistema de Diseño Completo para Landing Page

---

## 1. ARQUITECTURA DE INFORMACIÓN (IA)

### 1.1 Estructura de Navegación

```
SOFOMES.COM
│
├── [HERO SECTION] - Above the Fold
│   ├── H1 Principal + Value Proposition
│   ├── Subtítulo explicativo
│   └── CTA Primario + CTA Secundario
│
├── [TRUST BAR] - Indicadores de Confianza
│   ├── Logos reguladores (CNBV, CONDUSEF)
│   ├── Estadísticas clave
│   └── Badges de confianza
│
├── [NAVEGACIÓN PRINCIPAL]
│   ├── ¿Qué es una SOFOM?
│   ├── Tipos de SOFOM
│   ├── Ventajas
│   ├── Proceso de Constitución
│   ├── Compliance PLD/FT
│   └── Contacto
│
├── [SECCIÓN 1] ¿Qué es una SOFOM?
│   ├── Definición clara y accesible
│   ├── Infografía #1: Objeto Múltiple
│   └── Comparativa vs Banca Tradicional
│
├── [SECCIÓN 2] Tipos de SOFOM
│   ├── Infografía #2: ER vs ENR
│   ├── Tabla comparativa interactiva
│   └── Casos de uso por tipo
│
├── [SECCIÓN 3] Ventajas Competitivas
│   ├── Para PyMEs (Card Layout)
│   ├── Para Inversionistas (Card Layout)
│   ├── Beneficios Fiscales (Destacados)
│   └── Estadísticas de impacto
│
├── [SECCIÓN 4] Proceso de Constitución
│   ├── Infografía #3: Flujograma 7 pasos
│   ├── Timeline interactivo
│   └── Checklist descargable
│
├── [SECCIÓN 5] Compliance PLD/FT
│   ├── Explicación visual del marco regulatorio
│   ├── Rol del Oficial de Cumplimiento
│   └── Tecnología y digitalización
│
├── [SECCIÓN 6] Garantías
│   ├── Infografía #4: Fideicomiso vs Hipoteca
│   └── Casos de éxito
│
├── [SECCIÓN 7] Fondeo y Crecimiento
│   ├── Fuentes de financiamiento
│   └── Estrategias de escalamiento
│
├── [FAQ SECTION] - Preguntas Frecuentes
│   └── Accordion interactivo
│
├── [CTA FINAL] - Conversion Zone
│   ├── Formulario de contacto
│   ├── Lead magnet (guía descargable)
│   └── Calendario de asesoría
│
└── [FOOTER]
    ├── Links legales
    ├── Recursos adicionales
    └── Información de contacto
```

### 1.2 Jerarquía de Conversión

**Objetivos de conversión por audiencia:**

1. **PyMEs buscando financiamiento**
   - CTA: "Solicitar Financiamiento"
   - Lead Magnet: "Guía: Cómo obtener crédito SOFOM en 5 pasos"

2. **Emprendedores creando SOFOM**
   - CTA: "Iniciar Constitución"
   - Lead Magnet: "Checklist completo para constituir SOFOM ENR"

3. **Inversionistas**
   - CTA: "Agendar Consultoría"
   - Lead Magnet: "Análisis: ROI en el sector SOFOM"

---

## 2. DESIGN SYSTEM VISUAL

### 2.1 Paleta de Colores

**Filosofía:** Confianza financiera + Innovación accesible + Profesionalismo

```css
/* PRIMARY COLORS - Confianza y Estabilidad */
--primary-900: #0A2463;      /* Azul Marino - Headers, Texto importante */
--primary-700: #1E3A8A;      /* Azul Profundo - Hover states */
--primary-500: #3B82F6;      /* Azul Claro - CTAs primarios */
--primary-300: #93C5FD;      /* Azul Pastel - Backgrounds suaves */
--primary-100: #DBEAFE;      /* Azul Muy Claro - Highlights */

/* SECONDARY COLORS - Innovación y Acción */
--secondary-900: #065F46;    /* Verde Esmeralda - Éxito, Ventajas */
--secondary-500: #10B981;    /* Verde Brillante - CTAs secundarios */
--secondary-300: #6EE7B7;    /* Verde Claro - Iconos de beneficio */
--secondary-100: #D1FAE5;    /* Verde Pastel - Backgrounds de ventajas */

/* ACCENT COLORS - Llamados de Atención */
--accent-warning: #F59E0B;   /* Ámbar - Alertas informativas */
--accent-danger: #EF4444;    /* Rojo - Advertencias importantes */
--accent-success: #10B981;   /* Verde - Confirmaciones */

/* NEUTRAL COLORS - Texto y Fondos */
--neutral-900: #111827;      /* Negro Carbón - Texto principal */
--neutral-700: #374151;      /* Gris Oscuro - Texto secundario */
--neutral-500: #6B7280;      /* Gris Medio - Texto terciario */
--neutral-300: #D1D5DB;      /* Gris Claro - Bordes */
--neutral-100: #F3F4F6;      /* Gris Muy Claro - Backgrounds */
--neutral-50: #F9FAFB;       /* Casi Blanco - Secciones alternas */
--white: #FFFFFF;            /* Blanco Puro */

/* GRADIENT OVERLAYS */
--gradient-hero: linear-gradient(135deg, #0A2463 0%, #3B82F6 100%);
--gradient-cta: linear-gradient(90deg, #3B82F6 0%, #2563EB 100%);
--gradient-success: linear-gradient(135deg, #065F46 0%, #10B981 100%);
```

**Ratios de Contraste (WCAG 2.1 AA):**
- Texto normal: mínimo 4.5:1
- Texto grande (18px+): mínimo 3:1
- Elementos interactivos: mínimo 3:1

### 2.2 Tipografía

**Filosofía:** Legibilidad profesional + Jerarquía clara

```css
/* FONT FAMILIES */
--font-display: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
--font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
--font-mono: 'JetBrains Mono', 'Courier New', monospace;

/* FONT SIZES - Sistema basado en escala modular (1.250 - Major Third) */
--text-xs: 0.75rem;      /* 12px - Legal, disclaimers */
--text-sm: 0.875rem;     /* 14px - Etiquetas, metadatos */
--text-base: 1rem;       /* 16px - Cuerpo de texto */
--text-lg: 1.125rem;     /* 18px - Destacados, leads */
--text-xl: 1.25rem;      /* 20px - Subtítulos pequeños */
--text-2xl: 1.5rem;      /* 24px - H4 */
--text-3xl: 1.875rem;    /* 30px - H3 */
--text-4xl: 2.25rem;     /* 36px - H2 */
--text-5xl: 3rem;        /* 48px - H1 */
--text-6xl: 3.75rem;     /* 60px - Hero Display */

/* FONT WEIGHTS */
--font-light: 300;
--font-normal: 400;
--font-medium: 500;
--font-semibold: 600;
--font-bold: 700;
--font-extrabold: 800;

/* LINE HEIGHTS */
--leading-tight: 1.25;    /* Headlines */
--leading-snug: 1.375;    /* Subheadings */
--leading-normal: 1.5;    /* Body text */
--leading-relaxed: 1.625; /* Long form content */
--leading-loose: 2;       /* Spacious sections */

/* LETTER SPACING */
--tracking-tight: -0.025em;
--tracking-normal: 0;
--tracking-wide: 0.025em;
--tracking-wider: 0.05em;
```

**Escala Tipográfica Aplicada:**

```css
/* H1 - Hero Principal */
.h1-hero {
  font-size: clamp(2.5rem, 5vw, 3.75rem); /* Responsive 40-60px */
  font-weight: var(--font-extrabold);
  line-height: var(--leading-tight);
  letter-spacing: var(--tracking-tight);
  color: var(--primary-900);
}

/* H2 - Títulos de Sección */
.h2-section {
  font-size: clamp(1.875rem, 4vw, 2.25rem); /* Responsive 30-36px */
  font-weight: var(--font-bold);
  line-height: var(--leading-snug);
  color: var(--primary-900);
}

/* H3 - Subsecciones */
.h3-subsection {
  font-size: clamp(1.5rem, 3vw, 1.875rem); /* Responsive 24-30px */
  font-weight: var(--font-semibold);
  line-height: var(--leading-snug);
  color: var(--primary-700);
}

/* Body - Texto Principal */
.body-text {
  font-size: var(--text-base);
  font-weight: var(--font-normal);
  line-height: var(--leading-relaxed);
  color: var(--neutral-700);
}

/* Lead - Texto Introductorio */
.lead-text {
  font-size: var(--text-lg);
  font-weight: var(--font-normal);
  line-height: var(--leading-relaxed);
  color: var(--neutral-700);
}
```

### 2.3 Espaciado y Grid System

**Sistema de Espaciado (8px base unit):**

```css
/* SPACING SCALE */
--space-0: 0;
--space-1: 0.25rem;   /* 4px */
--space-2: 0.5rem;    /* 8px - Base unit */
--space-3: 0.75rem;   /* 12px */
--space-4: 1rem;      /* 16px */
--space-5: 1.5rem;    /* 24px */
--space-6: 2rem;      /* 32px */
--space-8: 3rem;      /* 48px */
--space-10: 4rem;     /* 64px */
--space-12: 6rem;     /* 96px */
--space-16: 8rem;     /* 128px */
--space-20: 10rem;    /* 160px */

/* SECTION PADDING */
--section-padding-mobile: var(--space-8);  /* 48px */
--section-padding-tablet: var(--space-12); /* 96px */
--section-padding-desktop: var(--space-16); /* 128px */

/* CONTAINER WIDTHS */
--container-sm: 640px;   /* Small devices */
--container-md: 768px;   /* Tablets */
--container-lg: 1024px;  /* Laptops */
--container-xl: 1280px;  /* Desktops */
--container-2xl: 1536px; /* Large screens */
```

**Grid System (12 columnas):**

```css
.container {
  width: 100%;
  max-width: var(--container-xl);
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--space-4);
  padding-right: var(--space-4);
}

.grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: var(--space-6);
}

/* Column Spans */
.col-span-1 { grid-column: span 1; }
.col-span-2 { grid-column: span 2; }
.col-span-3 { grid-column: span 3; }
.col-span-4 { grid-column: span 4; }
.col-span-6 { grid-column: span 6; }
.col-span-8 { grid-column: span 8; }
.col-span-12 { grid-column: span 12; }
```

### 2.4 Breakpoints Responsivos (Mobile-First)

```css
/* BREAKPOINTS */
--breakpoint-sm: 640px;   /* Tablets pequeñas */
--breakpoint-md: 768px;   /* Tablets */
--breakpoint-lg: 1024px;  /* Laptops */
--breakpoint-xl: 1280px;  /* Desktops */
--breakpoint-2xl: 1536px; /* Large screens */

/* MEDIA QUERIES */
@media (min-width: 640px) { /* sm */ }
@media (min-width: 768px) { /* md */ }
@media (min-width: 1024px) { /* lg */ }
@media (min-width: 1280px) { /* xl */ }
@media (min-width: 1536px) { /* 2xl */ }
```

**Estrategia Mobile-First:**
1. Diseño base: 320px-640px (Mobile)
2. Breakpoint 1: 640px+ (Tablet pequeña)
3. Breakpoint 2: 768px+ (Tablet)
4. Breakpoint 3: 1024px+ (Desktop)

### 2.5 Componentes UI Reutilizables

#### 2.5.1 Botones (CTAs)

```css
/* PRIMARY BUTTON */
.btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--space-4) var(--space-8);
  font-size: var(--text-lg);
  font-weight: var(--font-semibold);
  color: var(--white);
  background: var(--gradient-cta);
  border: none;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(59, 130, 246, 0.25);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 12px rgba(59, 130, 246, 0.35);
}

.btn-primary:active {
  transform: translateY(0);
}

/* SECONDARY BUTTON */
.btn-secondary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--space-4) var(--space-8);
  font-size: var(--text-lg);
  font-weight: var(--font-semibold);
  color: var(--primary-700);
  background: var(--white);
  border: 2px solid var(--primary-500);
  border-radius: 8px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}

.btn-secondary:hover {
  background: var(--primary-50);
  border-color: var(--primary-700);
}

/* TERTIARY BUTTON (Text only) */
.btn-tertiary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-4);
  font-size: var(--text-base);
  font-weight: var(--font-semibold);
  color: var(--primary-500);
  background: transparent;
  border: none;
  transition: color 0.2s ease;
  cursor: pointer;
}

.btn-tertiary:hover {
  color: var(--primary-700);
  text-decoration: underline;
}
```

#### 2.5.2 Cards

```css
/* CARD BASE */
.card {
  background: var(--white);
  border-radius: 12px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  padding: var(--space-6);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

/* CARD CON ICONO */
.card-icon {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}

.card-icon-header {
  display: flex;
  align-items: center;
  gap: var(--space-4);
}

.card-icon-image {
  width: 48px;
  height: 48px;
  border-radius: 8px;
  background: var(--primary-100);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

/* CARD DESTACADA */
.card-featured {
  background: var(--gradient-hero);
  color: var(--white);
  border: 2px solid var(--primary-300);
}
```

#### 2.5.3 Badges y Tags

```css
/* BADGE BASE */
.badge {
  display: inline-flex;
  align-items: center;
  padding: var(--space-1) var(--space-3);
  font-size: var(--text-sm);
  font-weight: var(--font-medium);
  border-radius: 9999px;
}

.badge-primary {
  background: var(--primary-100);
  color: var(--primary-900);
}

.badge-success {
  background: var(--secondary-100);
  color: var(--secondary-900);
}

.badge-warning {
  background: #FEF3C7;
  color: #92400E;
}
```

#### 2.5.4 Accordions (FAQ)

```css
/* ACCORDION ITEM */
.accordion-item {
  border-bottom: 1px solid var(--neutral-200);
}

.accordion-header {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: var(--space-5) 0;
  font-size: var(--text-lg);
  font-weight: var(--font-semibold);
  color: var(--neutral-900);
  background: transparent;
  border: none;
  cursor: pointer;
  transition: color 0.2s ease;
}

.accordion-header:hover {
  color: var(--primary-500);
}

.accordion-icon {
  transition: transform 0.3s ease;
}

.accordion-item.active .accordion-icon {
  transform: rotate(180deg);
}

.accordion-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.accordion-item.active .accordion-content {
  max-height: 500px;
  padding-bottom: var(--space-5);
}
```

#### 2.5.5 Form Elements

```css
/* INPUT BASE */
.input {
  width: 100%;
  padding: var(--space-3) var(--space-4);
  font-size: var(--text-base);
  color: var(--neutral-900);
  background: var(--white);
  border: 2px solid var(--neutral-300);
  border-radius: 8px;
  transition: all 0.2s ease;
}

.input:focus {
  outline: none;
  border-color: var(--primary-500);
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.input::placeholder {
  color: var(--neutral-500);
}

/* LABEL */
.label {
  display: block;
  margin-bottom: var(--space-2);
  font-size: var(--text-sm);
  font-weight: var(--font-medium);
  color: var(--neutral-700);
}

/* SELECT */
.select {
  width: 100%;
  padding: var(--space-3) var(--space-4);
  font-size: var(--text-base);
  color: var(--neutral-900);
  background: var(--white);
  border: 2px solid var(--neutral-300);
  border-radius: 8px;
  cursor: pointer;
}

/* TEXTAREA */
.textarea {
  width: 100%;
  min-height: 120px;
  padding: var(--space-3) var(--space-4);
  font-size: var(--text-base);
  font-family: var(--font-body);
  color: var(--neutral-900);
  background: var(--white);
  border: 2px solid var(--neutral-300);
  border-radius: 8px;
  resize: vertical;
}
```

### 2.6 Shadows y Effects

```css
/* SHADOWS */
--shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
--shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
--shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
--shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
--shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.1);
--shadow-2xl: 0 25px 50px rgba(0, 0, 0, 0.25);

/* BLUR EFFECTS */
--blur-sm: blur(4px);
--blur-md: blur(8px);
--blur-lg: blur(16px);

/* BORDER RADIUS */
--radius-sm: 4px;
--radius-md: 8px;
--radius-lg: 12px;
--radius-xl: 16px;
--radius-2xl: 24px;
--radius-full: 9999px;
```

---

## 3. MICROANIMACIONES Y TRANSICIONES

### 3.1 Timing Functions

```css
/* EASING CURVES */
--ease-linear: linear;
--ease-in: cubic-bezier(0.4, 0, 1, 1);
--ease-out: cubic-bezier(0, 0, 0.2, 1);
--ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);
--ease-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);

/* DURATIONS */
--duration-fast: 150ms;
--duration-base: 300ms;
--duration-slow: 500ms;
--duration-slower: 700ms;
```

### 3.2 Animaciones de Entrada

```css
/* FADE IN UP */
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

/* FADE IN */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* SLIDE IN LEFT */
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

/* SCALE IN */
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
```

### 3.3 Hover Interactions

```css
/* HOVER LIFT */
.hover-lift {
  transition: transform 0.3s var(--ease-out);
}

.hover-lift:hover {
  transform: translateY(-4px);
}

/* HOVER GLOW */
.hover-glow {
  transition: box-shadow 0.3s ease;
}

.hover-glow:hover {
  box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
}

/* HOVER SCALE */
.hover-scale {
  transition: transform 0.3s var(--ease-in-out);
}

.hover-scale:hover {
  transform: scale(1.05);
}
```

### 3.4 Loading States

```css
/* SPINNER */
@keyframes spin {
  to { transform: rotate(360deg); }
}

.spinner {
  animation: spin 1s linear infinite;
}

/* PULSE */
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

.pulse {
  animation: pulse 2s var(--ease-in-out) infinite;
}

/* SKELETON LOADING */
@keyframes shimmer {
  0% { background-position: -1000px 0; }
  100% { background-position: 1000px 0; }
}

.skeleton {
  background: linear-gradient(
    90deg,
    var(--neutral-200) 0px,
    var(--neutral-100) 50%,
    var(--neutral-200) 100%
  );
  background-size: 1000px 100%;
  animation: shimmer 2s infinite;
}
```

---

## 4. ICONOGRAFÍA

### 4.1 Sistema de Iconos

**Librería recomendada:** Heroicons (outline y solid variants)

**Tamaños estandarizados:**
```css
--icon-xs: 16px;
--icon-sm: 20px;
--icon-md: 24px;
--icon-lg: 32px;
--icon-xl: 48px;
--icon-2xl: 64px;
```

**Iconos clave por sección:**
- **Crédito:** Currency Dollar, Credit Card
- **Arrendamiento:** Truck, Building Office
- **Factoraje:** Document Text, Arrow Trending Up
- **Fideicomiso:** Shield Check, Lock Closed
- **Regulación:** Scale, Building Library
- **Compliance:** Document Check, User Group
- **Seguridad:** Shield Exclamation
- **Éxito:** Check Circle, Star

---

## 5. ACCESIBILIDAD (WCAG 2.1 AA)

### 5.1 Checklist de Cumplimiento

**Contraste de Color:**
- ✓ Texto normal sobre fondo: mínimo 4.5:1
- ✓ Texto grande sobre fondo: mínimo 3:1
- ✓ Elementos UI interactivos: mínimo 3:1

**Navegación por Teclado:**
- ✓ Todos los elementos interactivos accesibles con Tab
- ✓ Focus states visibles (outline + box-shadow)
- ✓ Skip links para navegación rápida

**ARIA Labels:**
```html
<!-- Ejemplo de botón con ARIA -->
<button aria-label="Abrir menú de navegación" aria-expanded="false">
  <svg aria-hidden="true">...</svg>
</button>

<!-- Ejemplo de región con landmark -->
<section aria-labelledby="heading-ventajas">
  <h2 id="heading-ventajas">Ventajas Competitivas</h2>
</section>
```

**Focus States:**
```css
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

**Texto Alternativo:**
- Todas las imágenes con alt descriptivo
- Iconos decorativos con aria-hidden="true"
- SVGs con title y desc cuando sean informativos

### 5.2 Responsive Typography

```css
/* Fluid Typography usando clamp() */
h1 {
  font-size: clamp(2.5rem, 5vw + 1rem, 3.75rem);
}

h2 {
  font-size: clamp(1.875rem, 4vw + 1rem, 2.25rem);
}

h3 {
  font-size: clamp(1.5rem, 3vw + 0.5rem, 1.875rem);
}

body {
  font-size: clamp(1rem, 0.95rem + 0.25vw, 1.125rem);
}
```

---

## 6. PERFORMANCE OPTIMIZATION

### 6.1 Critical CSS Strategy

1. **Inline Critical CSS** en <head> para above-the-fold
2. Defer non-critical CSS
3. Preload fuentes importantes

```html
<!-- Preload de fuentes -->
<link rel="preload" href="/fonts/inter-var.woff2" as="font" type="font/woff2" crossorigin>

<!-- Critical CSS inline -->
<style>
  /* Hero section, navigation, above-the-fold styles */
</style>

<!-- Defer non-critical CSS -->
<link rel="stylesheet" href="/css/main.css" media="print" onload="this.media='all'">
```

### 6.2 Image Optimization

```html
<!-- Responsive images con srcset -->
<img
  src="/images/hero-1280.webp"
  srcset="
    /images/hero-640.webp 640w,
    /images/hero-1280.webp 1280w,
    /images/hero-1920.webp 1920w
  "
  sizes="(max-width: 640px) 100vw, (max-width: 1280px) 50vw, 33vw"
  alt="Descripción"
  loading="lazy"
  decoding="async"
>

<!-- Picture element para diferentes formatos -->
<picture>
  <source srcset="/images/hero.avif" type="image/avif">
  <source srcset="/images/hero.webp" type="image/webp">
  <img src="/images/hero.jpg" alt="Descripción">
</picture>
```

### 6.3 Lazy Loading

```html
<!-- Lazy load para imágenes below-the-fold -->
<img src="/images/chart.webp" loading="lazy" alt="Gráfico de estadísticas">

<!-- Lazy load para iframes (mapas, videos) -->
<iframe src="https://youtube.com/embed/..." loading="lazy"></iframe>
```

### 6.4 Resource Hints

```html
<!-- DNS Prefetch para dominios externos -->
<link rel="dns-prefetch" href="https://fonts.googleapis.com">

<!-- Preconnect para recursos críticos -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Prefetch para páginas siguientes probables -->
<link rel="prefetch" href="/constituir-sofom.html">
```

---

## PRÓXIMOS PASOS

Este design system provee la base completa para la implementación. Los siguientes entregables incluirán:

1. Wireframes ASCII detallados por sección
2. Especificaciones de las 4 infografías
3. Guía de implementación técnica
4. Componentes de ejemplo en HTML/CSS
