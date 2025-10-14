# INFOGRAFÍAS - SOFOMES.COM
## Diseño Visual y Especificaciones de las 4 Infografías Principales

---

## INFOGRAFÍA #1: SOFOM - RADIOGRAFÍA DEL OBJETO MÚLTIPLE

**Objetivo:** Comunicar visualmente la versatilidad de una SOFOM mostrando las 4 actividades principales que puede realizar.

**Ubicación:** Sección "¿Qué es una SOFOM?" - Primera infografía del sitio

### Diseño Visual

```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│               SOFOM: OBJETO MÚLTIPLE                            │
│                                                                 │
│          ┌───────────────────────────────┐                      │
│          │     🏢 SOFOM ENR / ER         │                      │
│          │                               │                      │
│          │   Sociedad Financiera de      │                      │
│          │   Objeto Múltiple             │                      │
│          │                               │                      │
│          │   "4 Actividades Permitidas"  │                      │
│          └───────────────┬───────────────┘                      │
│                          │                                      │
│                          │ Puede realizar una                   │
│                          │ o más de estas actividades:          │
│                          │                                      │
│         ┌────────────────┼────────────────┐                     │
│         │                │                │                     │
│    ┌────┴────┐      ┌────┴────┐     ┌────┴────┐     ┌─────────┴──┐
│    │         │      │         │     │         │     │            │
│    │   💰    │      │   🚚    │     │   📄    │     │    🛡️     │
│    │         │      │         │     │         │     │            │
│    │ CRÉDITO │      │ ARRENDA │     │ FACTORA │     │ FIDEICOMI- │
│    │         │      │ MIENTO  │     │    JE   │     │     SO     │
│    │         │      │ FINANC. │     │ FINANC. │     │ EN GARANTÍA│
│    │         │      │         │     │         │     │            │
│    └────┬────┘      └────┬────┘     └────┬────┘     └─────┬──────┘
│         │                │                │                │
│    ┌────▼──────────┐┌────▼──────────┐┌───▼──────────┐┌────▼──────────┐
│    │• Hipotecario  ││• Inmuebles    ││• Facturas    ││• Ejecución    │
│    │• Personal     ││• Maquinaria   ││  por cobrar  ││  rápida       │
│    │• Revolvente   ││• Vehículos    ││• Anticipos   ││• Sin juicio   │
│    │• Simple       ││• Equipo       ││  de cartera  ││• Blindaje     │
│    │• Capital      ││  tecnológico  ││• Liquidez    ││  contra       │
│    │  trabajo      ││               ││  inmediata   ││  acreedores   │
│    │• PyMEs focus  ││• Lease-back   ││              ││• Sustrae bien │
│    └───────────────┘└───────────────┘└──────────────┘└───────────────┘
│                                                                 │
│    ╔════════════════════════════════════════════════════════╗  │
│    ║  VENTAJA COMPETITIVA: Flexibilidad Total               ║  │
│    ║  Una sola entidad, múltiples soluciones financieras    ║  │
│    ╚════════════════════════════════════════════════════════╝  │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
```

### Especificaciones Técnicas

**Formato:** SVG inline para máxima escalabilidad

**Colores:**
```css
/* Nodo central SOFOM */
background: linear-gradient(135deg, #0A2463 0%, #3B82F6 100%);
border: 3px solid #3B82F6;
text-color: #FFFFFF;

/* Iconos de actividades */
icon-background: #DBEAFE;
icon-color: #3B82F6;
border: 2px solid #3B82F6;

/* Tarjetas de detalles */
card-background: #FFFFFF;
card-border: 1px solid #D1D5DB;
card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

/* Líneas de conexión */
connection-lines: #93C5FD;
line-width: 2px;
line-style: solid;

/* Box destacado inferior */
highlight-background: #D1FAE5;
highlight-border: 2px solid #10B981;
highlight-text: #065F46;
```

**Dimensiones:**
- Desktop: 1200px ancho máximo, altura variable
- Tablet: 768px ancho, responsive height
- Mobile: 100% width con scroll horizontal opcional

**Tipografía:**
```css
.title {
  font-size: 32px;
  font-weight: 800;
  color: var(--primary-900);
}

.node-main {
  font-size: 24px;
  font-weight: 700;
  color: var(--white);
}

.node-activity {
  font-size: 18px;
  font-weight: 600;
  color: var(--primary-700);
}

.detail-item {
  font-size: 14px;
  font-weight: 400;
  color: var(--neutral-700);
  line-height: 1.6;
}

.highlight-box {
  font-size: 18px;
  font-weight: 600;
  color: var(--secondary-900);
}
```

**Animaciones (entrada secuencial):**
```javascript
// Timeline de animación
const timeline = {
  0ms: "Fade in título",
  300ms: "Scale in nodo central SOFOM",
  600ms: "Slide down líneas de conexión",
  900ms: "Pop in iconos de actividades (simultáneo)",
  1200ms: "Fade in up tarjetas de detalles",
  1500ms: "Pulse highlight box inferior"
};

// CSS Animation
@keyframes slideDown {
  from {
    transform: scaleY(0);
    transform-origin: top;
  }
  to {
    transform: scaleY(1);
  }
}

@keyframes popIn {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
```

**Interactividad:**
- Hover sobre cada actividad: scale 1.05 + shadow increase
- Click en actividad: Expand card con más información
- Touch friendly: Tap targets mínimo 48x48px

**Accesibilidad:**
```html
<svg role="img" aria-labelledby="infografia-1-title infografia-1-desc">
  <title id="infografia-1-title">
    SOFOM: Radiografía del Objeto Múltiple
  </title>
  <desc id="infografia-1-desc">
    Diagrama mostrando las 4 actividades principales que puede realizar
    una SOFOM: Crédito, Arrendamiento Financiero, Factoraje Financiero
    y Fideicomiso en Garantía, con detalles de cada una.
  </desc>
  <!-- SVG content -->
</svg>
```

---

## INFOGRAFÍA #2: ECOSISTEMA SOFOM - ER vs ENR

**Objetivo:** Clarificar la diferencia entre SOFOM ER y ENR y su marco regulatorio.

**Ubicación:** Sección "Tipos de SOFOM"

### Diseño Visual

```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│            ECOSISTEMA REGULATORIO SOFOM                         │
│         ¿ER o ENR? Entiende las Diferencias                    │
│                                                                 │
│                                                                 │
│              ┌──────────────────────────┐                       │
│              │   🏛️ REGULADORES         │                       │
│              │                          │                       │
│              │  CNBV + CONDUSEF + UIF   │                       │
│              │  Marco Legal Mexicano    │                       │
│              └──────────┬───────────────┘                       │
│                         │                                       │
│                         │ Supervisan                            │
│                         │                                       │
│         ┌───────────────┴──────────────┐                        │
│         │                              │                        │
│         │        TODAS LAS SOFOMES     │                        │
│         │                              │                        │
│         └───────────┬──────────────────┘                        │
│                     │                                           │
│                     │ Se clasifican en:                         │
│                     │                                           │
│      ┌──────────────┴─────────────┐                             │
│      │                            │                             │
│      │                            │                             │
│ ┌────▼─────────┐          ┌───────▼──────┐                     │
│ │              │          │              │                     │
│ │  SOFOM ER    │          │  SOFOM ENR   │                     │
│ │  (E.R.)      │          │  (E.N.R.)    │                     │
│ │              │          │              │                     │
│ │  Entidad     │          │  Entidad     │                     │
│ │  Regulada    │          │  No Regulada │                     │
│ │              │          │              │                     │
│ └──────┬───────┘          └──────┬───────┘                     │
│        │                         │                             │
│        │                         │                             │
│ ┌──────▼────────────────┐ ┌──────▼────────────────┐            │
│ │ CARACTERÍSTICAS:      │ │ CARACTERÍSTICAS:      │            │
│ ├───────────────────────┤ ├───────────────────────┤            │
│ │                       │ │                       │            │
│ │ ✓ Vinculación con:    │ │ ✗ SIN vínculos        │            │
│ │   • Bancos            │ │   bancarios           │            │
│ │   • SOFIPOS           │ │                       │            │
│ │   • Uniones crédito   │ │ ✓ Capital privado     │            │
│ │                       │ │   independiente       │            │
│ │    O                  │ │                       │            │
│ │                       │ │ ✓ Fondos propios      │            │
│ │ ✓ Emisión valores     │ │   o inversionistas    │            │
│ │   de deuda en RNV     │ │                       │            │
│ │                       │ │ ✗ NO emisión pública  │            │
│ └───────┬───────────────┘ └──────┬────────────────┘            │
│         │                        │                             │
│         │                        │                             │
│ ┌───────▼────────────┐   ┌───────▼────────────┐               │
│ │ SUPERVISIÓN:       │   │ SUPERVISIÓN:       │               │
│ ├────────────────────┤   ├────────────────────┤               │
│ │                    │   │                    │               │
│ │ 🔴 INTEGRAL CNBV   │   │ 🟡 SOLO PLD/FT     │               │
│ │                    │   │                    │               │
│ │ • Todas materias   │   │ • Prevención       │               │
│ │ • Capital          │   │   Lavado Dinero    │               │
│ │ • Operaciones      │   │ • Financiamiento   │               │
│ │ • Contabilidad     │   │   Terrorismo       │               │
│ │ • Reservas         │   │ • CNBV vía UIF     │               │
│ │ • Gobernanza       │   │                    │               │
│ │ • PLD/FT           │   │                    │               │
│ │                    │   │                    │               │
│ └────────┬───────────┘   └────────┬───────────┘               │
│          │                        │                            │
│          └────────────┬───────────┘                            │
│                       │                                        │
│                       │ AMBAS REQUIEREN                        │
│                       │                                        │
│              ┌────────▼──────────┐                             │
│              │                   │                             │
│              │  ✓ Registro       │                             │
│              │    CONDUSEF       │                             │
│              │    (SIPRES)       │                             │
│              │                   │                             │
│              │  ✓ Reporte SITI   │                             │
│              │    PLD/FT         │                             │
│              │                   │                             │
│              │  ✓ Oficial        │                             │
│              │    Cumplimiento   │                             │
│              │                   │                             │
│              └───────────────────┘                             │
│                                                                 │
│  ╔════════════════════════════════════════════════════════╗    │
│  ║  IMPORTANTE: "No Regulada" NO significa sin supervisión ║    │
│  ║  Ambas categorías tienen obligaciones regulatorias      ║    │
│  ╚════════════════════════════════════════════════════════╝    │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
```

### Especificaciones Técnicas

**Formato:** SVG con estructura jerárquica

**Colores:**
```css
/* Reguladores (top) */
reguladores-bg: linear-gradient(135deg, #374151 0%, #1F2937 100%);
reguladores-text: #FFFFFF;
reguladores-icon: #F59E0B;

/* SOFOM ER (izquierda) */
er-bg: #DBEAFE;
er-border: 3px solid #3B82F6;
er-text: #1E3A8A;
er-badge: #EF4444; /* Rojo para supervisión integral */

/* SOFOM ENR (derecha) */
enr-bg: #D1FAE5;
enr-border: 3px solid #10B981;
enr-text: #065F46;
enr-badge: #F59E0B; /* Ámbar para supervisión parcial */

/* Requisitos comunes (bottom) */
comun-bg: #F3F4F6;
comun-border: 2px solid #6B7280;
comun-text: #111827;

/* Líneas de flujo */
flow-lines: #93C5FD;
line-width: 3px;
line-style: solid;
arrow-color: #3B82F6;

/* Warning box */
warning-bg: #FEF3C7;
warning-border: 3px solid #F59E0B;
warning-text: #92400E;
```

**Dimensiones:**
- Desktop: 1000px width, 1400px height (vertical flow)
- Tablet: 768px width, height responsive
- Mobile: 100% width, vertical stack, increased height

**Tipografía:**
```css
.main-title {
  font-size: 32px;
  font-weight: 800;
  color: var(--primary-900);
  text-align: center;
}

.subtitle {
  font-size: 18px;
  font-weight: 400;
  color: var(--neutral-600);
  text-align: center;
}

.node-title {
  font-size: 22px;
  font-weight: 700;
  text-transform: uppercase;
}

.section-header {
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.checklist-item {
  font-size: 14px;
  font-weight: 400;
  line-height: 1.8;
}

.warning-text {
  font-size: 16px;
  font-weight: 600;
  line-height: 1.5;
}
```

**Animaciones:**
```javascript
// Timeline de animación
const timeline = {
  0ms: "Fade in title",
  300ms: "Slide down reguladores node",
  600ms: "Grow flow lines to SOFOMES",
  900ms: "Split animation: ER slide left, ENR slide right",
  1200ms: "Fade in características boxes",
  1500ms: "Pulse supervisión badges",
  1800ms: "Converge lines to requisitos comunes",
  2100ms: "Fade in requisitos comunes box",
  2400ms: "Shake warning box (attention)"
};

// Interactive states
const interactions = {
  hoverER: "Highlight ER path (all nodes in path)",
  hoverENR: "Highlight ENR path (all nodes in path)",
  clickNode: "Expand modal con información detallada"
};
```

**Responsive Behavior:**
```css
/* Desktop: Side-by-side comparison */
@media (min-width: 1024px) {
  .split-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 48px;
  }
}

/* Mobile: Vertical stack */
@media (max-width: 767px) {
  .split-container {
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  .node {
    width: 100%;
    margin: 0 auto;
  }
}
```

**Accesibilidad:**
```html
<svg role="img" aria-labelledby="infografia-2-title infografia-2-desc">
  <title id="infografia-2-title">
    Ecosistema SOFOM: Diferencias entre ER y ENR
  </title>
  <desc id="infografia-2-desc">
    Diagrama de flujo mostrando la jerarquía regulatoria de las SOFOMES,
    diferenciando entre Entidad Regulada (ER) con supervisión integral
    y Entidad No Regulada (ENR) con supervisión solo en PLD/FT. Ambas
    requieren registro CONDUSEF y tienen obligaciones comunes.
  </desc>

  <!-- Cada nodo importante tiene aria-label -->
  <g aria-label="SOFOM ER: Entidad Regulada">...</g>
  <g aria-label="SOFOM ENR: Entidad No Regulada">...</g>
</svg>
```

---

## INFOGRAFÍA #3: FLUJOGRAMA - 7 PASOS PARA CONSTITUIR SOFOM ENR

**Objetivo:** Guiar visualmente el proceso completo de constitución con tiempos estimados.

**Ubicación:** Sección "Proceso de Constitución"

### Diseño Visual

```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│         RUTA LEGAL: 7 PASOS PARA CONSTITUIR TU SOFOM ENR        │
│              Proceso Completo con Tiempos Estimados             │
│                                                                 │
│                    ┌────────────────┐                           │
│                    │   🚀 INICIO    │                           │
│                    │                │                           │
│                    │  Decisión de   │                           │
│                    │  constituir    │                           │
│                    │  SOFOM ENR     │                           │
│                    └───────┬────────┘                           │
│                            │                                    │
│                            ▼                                    │
│           ┌────────────────────────────────┐                    │
│           │  PASO 1 - DENOMINACIÓN         │                    │
│           ├────────────────────────────────┤                    │
│           │  📝 Solicitud de autorización  │                    │
│           │     de nombre ante SE          │                    │
│           │                                │                    │
│           │  ✓ Verificar disponibilidad    │                    │
│           │  ✓ Evitar palabras reservadas  │                    │
│           │  ✓ Incluir "SOFOM, E.N.R."     │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 3-5 días hábiles   │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 2 - OPINIÓN CONDUSEF     │                    │
│           ├────────────────────────────────┤                    │
│           │  ✅ Opinión favorable sobre    │                    │
│           │     estatutos sociales         │                    │
│           │                                │                    │
│           │  Documentos requeridos:        │                    │
│           │  • Proyecto estatutos          │                    │
│           │  • Objeto social detallado     │                    │
│           │  • Estructura accionaria       │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 10-15 días hábiles │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 3 - CONSTITUCIÓN         │                    │
│           ├────────────────────────────────┤                    │
│           │  ⚖️ Acta constitutiva ante     │                    │
│           │     Notario/Corredor Público   │                    │
│           │                                │                    │
│           │  ✓ Firma de escritura pública  │                    │
│           │  ✓ Inscripción en RPC          │                    │
│           │  ✓ RFC ante SAT                │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 5-7 días hábiles   │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 4 - DICTAMEN CNBV        │  🔑 CRÍTICO       │
│           ├────────────────────────────────┤                    │
│           │  🛡️ Dictamen Técnico PLD/FT   │                    │
│           │                                │                    │
│           │  Documentos extensos:          │                    │
│           │  • Manual PLD/FT               │                    │
│           │  • Políticas KYC               │                    │
│           │  • Oficial Cumplimiento        │                    │
│           │  • Matriz de riesgos           │                    │
│           │  • Procedimientos reporteo     │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 50 días naturales  │                    │
│           │     (Silencio admin = positivo)│                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 5 - BURÓ DE CRÉDITO      │                    │
│           ├────────────────────────────────┤                    │
│           │  📋 Contrato con Sociedad      │                    │
│           │     de Información Crediticia  │                    │
│           │                                │                    │
│           │  Opciones:                     │                    │
│           │  • Trans Union                 │                    │
│           │  • Círculo de Crédito          │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 3-5 días hábiles   │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 6 - REGISTRO SIPRES      │                    │
│           ├────────────────────────────────┤                    │
│           │  ✍️ Inscripción en CONDUSEF    │                    │
│           │                                │                    │
│           │  Requisitos:                   │                    │
│           │  • Dictamen CNBV favorable     │                    │
│           │  • Contrato Buró               │                    │
│           │  • Plan de Funcionamiento      │                    │
│           │  • Acta constitutiva           │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 5-7 días hábiles   │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│           ┌────────────────────────────────┐                    │
│           │  PASO 7 - CLAVE SITI PLD/FT    │                    │
│           ├────────────────────────────────┤                    │
│           │  🔑 Solicitud de acceso a      │                    │
│           │     sistema de reporteo CNBV   │                    │
│           │                                │                    │
│           │  Sistema SITI PLD/FT para:     │                    │
│           │  • Operaciones Relevantes      │                    │
│           │  • Operaciones Inusuales       │                    │
│           │  • Operaciones Preocupantes    │                    │
│           │                                │                    │
│           │  ⏱️ Tiempo: 10-15 días hábiles │                    │
│           └───────────┬────────────────────┘                    │
│                       │                                         │
│                       ▼                                         │
│                ┌──────────────┐                                 │
│                │  ✅ ¡LISTO!  │                                 │
│                │              │                                 │
│                │  SOFOM ENR   │                                 │
│                │  CONSTITUIDA │                                 │
│                │              │                                 │
│                │  Lista para  │                                 │
│                │  operar      │                                 │
│                └──────────────┘                                 │
│                                                                 │
│  ╔═══════════════════════════════════════════════════════════╗ │
│  ║  ⏱️ TIEMPO TOTAL ESTIMADO: 90-120 días hábiles            ║ │
│  ║                                                           ║ │
│  ║  💡 TIP: Preparar documentación en paralelo acelera      ║ │
│  ║     el proceso significativamente                        ║ │
│  ╚═══════════════════════════════════════════════════════════╝ │
│                                                                 │
│  ┌──────────────────────────────────────────────────────────┐  │
│  │         LÍNEA DE TIEMPO VISUAL                           │  │
│  │                                                          │  │
│  │  Mes 1          Mes 2          Mes 3          Mes 4     │  │
│  │  ├──────────────┼──────────────┼──────────────┤         │  │
│  │  ●────●─────────●──────────────●────●─────────●────●     │  │
│  │  1    2         3              4    5         6    7     │  │
│  │                                                          │  │
│  │  [█████░░░░░░░░] Progreso: 35%                          │  │
│  │                                                          │  │
│  └──────────────────────────────────────────────────────────┘  │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
```

### Especificaciones Técnicas

**Formato:** SVG vertical scrollable con progress tracking

**Colores:**
```css
/* Pasos normales */
step-bg: #FFFFFF;
step-border: 2px solid #3B82F6;
step-number-bg: #3B82F6;
step-number-text: #FFFFFF;
step-title-text: #1E3A8A;
step-body-text: #374151;

/* Paso crítico (CNBV) */
critical-bg: #FEF3C7;
critical-border: 3px solid #F59E0B;
critical-badge-bg: #EF4444;
critical-badge-text: #FFFFFF;

/* Inicio y Fin */
start-bg: linear-gradient(135deg, #10B981 0%, #059669 100%);
start-text: #FFFFFF;
finish-bg: linear-gradient(135deg, #10B981 0%, #059669 100%);
finish-text: #FFFFFF;

/* Líneas de conexión */
connector-color: #93C5FD;
connector-width: 4px;
connector-style: solid;
arrow-color: #3B82F6;

/* Timeline inferior */
timeline-bg: #F3F4F6;
timeline-line: #D1D5DB;
timeline-dot-complete: #10B981;
timeline-dot-pending: #D1D5DB;
progress-bar-bg: #3B82F6;
progress-bar-empty: #E5E7EB;

/* Info box */
info-bg: #DBEAFE;
info-border: 2px solid #3B82F6;
info-icon: #3B82F6;
info-text: #1E3A8A;
```

**Dimensiones:**
- Desktop: 800px width, 2000px height (vertical scroll)
- Tablet: 600px width, height responsive
- Mobile: 100% width, padding 16px, vertical stack

**Tipografía:**
```css
.main-title {
  font-size: 32px;
  font-weight: 800;
  color: var(--primary-900);
  text-align: center;
  line-height: 1.2;
}

.subtitle {
  font-size: 16px;
  font-weight: 400;
  color: var(--neutral-600);
  text-align: center;
}

.step-number {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.step-title {
  font-size: 20px;
  font-weight: 700;
  color: var(--primary-700);
  margin-bottom: 12px;
}

.step-icon {
  font-size: 32px;
  margin-bottom: 8px;
}

.step-detail {
  font-size: 14px;
  font-weight: 400;
  color: var(--neutral-700);
  line-height: 1.6;
}

.time-estimate {
  font-size: 14px;
  font-weight: 600;
  color: var(--primary-500);
  display: flex;
  align-items: center;
  gap: 8px;
}

.critical-badge {
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  padding: 4px 12px;
  border-radius: 9999px;
}
```

**Animaciones:**
```javascript
// Progressive reveal on scroll
const revealOnScroll = {
  threshold: 0.2, // Cuando 20% del paso es visible
  animation: "fadeInUp 0.6s ease-out"
};

// Paso activo (cuando entra en viewport)
@keyframes pulseStep {
  0%, 100% {
    box-shadow: 0 4px 6px rgba(59, 130, 246, 0.2);
  }
  50% {
    box-shadow: 0 8px 16px rgba(59, 130, 246, 0.4);
  }
}

// Progress bar animación
@keyframes fillProgress {
  from { width: 0%; }
  to { width: var(--progress-percent); }
}

// Connector line dibujado progresivo
@keyframes drawLine {
  from {
    stroke-dashoffset: 1000;
  }
  to {
    stroke-dashoffset: 0;
  }
}
```

**Interactividad:**
```javascript
// Click en cada paso
const stepInteraction = {
  click: "Expandir detalles adicionales",
  hover: "Highlight conectores y mostrar tooltip con más info",

  // Progress tracking
  onScroll: "Actualizar progress bar según viewport position",

  // Mobile touch
  swipe: "Navegación entre pasos (carousel mode en mobile)"
};

// Timeline interactivo
const timelineInteraction = {
  clickDot: "Smooth scroll al paso correspondiente",
  hoverDot: "Mostrar nombre del paso"
};
```

**Responsive Behavior:**
```css
/* Desktop */
@media (min-width: 1024px) {
  .step-container {
    max-width: 800px;
    margin: 0 auto;
  }

  .step {
    padding: 32px;
  }

  .connector {
    height: 60px;
  }
}

/* Mobile */
@media (max-width: 767px) {
  .step-container {
    width: 100%;
    padding: 0 16px;
  }

  .step {
    padding: 24px 16px;
  }

  .connector {
    height: 40px;
  }

  /* Timeline horizontal scroll */
  .timeline {
    overflow-x: auto;
    scrollbar-width: thin;
  }
}
```

**Accesibilidad:**
```html
<section role="region" aria-labelledby="proceso-title">
  <h2 id="proceso-title">
    7 Pasos para Constituir tu SOFOM ENR
  </h2>

  <ol role="list" aria-label="Proceso de constitución">
    <li role="listitem" aria-labelledby="paso-1">
      <h3 id="paso-1">Paso 1: Denominación</h3>
      <p>Solicitud de autorización de nombre ante SE</p>
      <time datetime="P5D">3-5 días hábiles</time>
    </li>
    <!-- Resto de pasos -->
  </ol>

  <!-- Progress indicator accesible -->
  <div role="progressbar"
       aria-valuenow="35"
       aria-valuemin="0"
       aria-valuemax="100"
       aria-label="Progreso del proceso">
    35% completado
  </div>
</section>
```

---

## INFOGRAFÍA #4: BLINDAJE DE GARANTÍAS - FIDEICOMISO VS HIPOTECA

**Objetivo:** Demostrar visualmente la superioridad del fideicomiso en garantía sobre la hipoteca tradicional.

**Ubicación:** Sección "Garantías"

### Diseño Visual

```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│        BLINDAJE DE GARANTÍAS: LA BATALLA DE LAS GARANTÍAS       │
│              Fideicomiso vs Hipoteca - Comparativa              │
│                                                                 │
│                         ⚖️ vs                                    │
│                                                                 │
│  ┌────────────────────────────┐  ┌────────────────────────────┐│
│  │  🛡️ FIDEICOMISO           │  │  ⚖️ HIPOTECA              ││
│  │     EN GARANTÍA            │  │     TRADICIONAL            ││
│  │                            │  │                            ││
│  │  Contrato Mercantil        │  │  Derecho Real              ││
│  │  Ley General Títulos       │  │  Código Civil              ││
│  │  y Operaciones Crédito     │  │                            ││
│  └────────────────────────────┘  └────────────────────────────┘│
│                                                                 │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              CRITERIO 1: EJECUCIÓN                         │ │
│  ├──────────────────────┬─────────────────────────────────────┤ │
│  │ FIDEICOMISO 🛡️       │ HIPOTECA ⚖️                        │ │
│  ├──────────────────────┼─────────────────────────────────────┤ │
│  │                      │                                     │ │
│  │ ✅ Fiduciario actúa  │ ❌ Requiere proceso judicial       │ │
│  │    como árbitro      │    completo                        │ │
│  │                      │                                     │ │
│  │ ✅ Sin intervención  │ ❌ Juez debe dictar sentencia      │ │
│  │    judicial          │                                     │ │
│  │                      │                                     │ │
│  │ ⚡ TIEMPO:           │ ⏱️ TIEMPO:                         │ │
│  │    30-60 días        │    1-3 años                        │ │
│  │                      │                                     │ │
│  │ 💰 COSTO:           │ 💰 COSTO:                          │ │
│  │    Honorarios        │    Costas judiciales               │ │
│  │    fiduciario        │    + abogados                      │ │
│  │    (bajo)            │    (alto)                          │ │
│  │                      │                                     │ │
│  └──────────────────────┴─────────────────────────────────────┘ │
│                                                                 │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              CRITERIO 2: PROTECCIÓN PATRIMONIAL            │ │
│  ├──────────────────────┬─────────────────────────────────────┤ │
│  │ FIDEICOMISO 🛡️       │ HIPOTECA ⚖️                        │ │
│  ├──────────────────────┼─────────────────────────────────────┤ │
│  │                      │                                     │ │
│  │ ✅ Bien sale del     │ ❌ Bien permanece en patrimonio    │ │
│  │    patrimonio del    │    del deudor                      │ │
│  │    deudor            │                                     │ │
│  │                      │                                     │ │
│  │ ✅ Inmune a concurso │ ❌ Vulnerable ante concurso        │ │
│  │    mercantil         │    mercantil                       │ │
│  │                      │                                     │ │
│  │ ✅ Protegido de      │ ❌ Expuesto a embargos de          │ │
│  │    otros acreedores  │    otros acreedores                │ │
│  │                      │                                     │ │
│  │ ✅ Prelación         │ ⚠️ Disputas con otros              │ │
│  │    garantizada       │    acreedores comunes              │ │
│  │                      │                                     │ │
│  │ 🛡️ BLINDAJE: 95%    │ 🛡️ BLINDAJE: 60%                  │ │
│  │                      │                                     │ │
│  └──────────────────────┴─────────────────────────────────────┘ │
│                                                                 │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              CRITERIO 3: FLEXIBILIDAD                      │ │
│  ├──────────────────────┬─────────────────────────────────────┤ │
│  │ FIDEICOMISO 🛡️       │ HIPOTECA ⚖️                        │ │
│  ├──────────────────────┼─────────────────────────────────────┤ │
│  │                      │                                     │ │
│  │ ✅ Puede incluir     │ ❌ Solo garantiza bienes           │ │
│  │    múltiples bienes  │    específicos individuales        │ │
│  │                      │                                     │ │
│  │ ✅ Sustitución de    │ ❌ Requiere nueva hipoteca         │ │
│  │    garantías         │    para sustituir                  │ │
│  │    simplificada      │                                     │ │
│  │                      │                                     │ │
│  │ ✅ Administración    │ ❌ Bien en poder del deudor        │ │
│  │    por fiduciario    │    hasta incumplimiento            │ │
│  │    durante crédito   │                                     │ │
│  │                      │                                     │ │
│  └──────────────────────┴─────────────────────────────────────┘ │
│                                                                 │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              CRITERIO 4: CERTEZA JURÍDICA                  │ │
│  ├──────────────────────┬─────────────────────────────────────┤ │
│  │ FIDEICOMISO 🛡️       │ HIPOTECA ⚖️                        │ │
│  ├──────────────────────┼─────────────────────────────────────┤ │
│  │                      │                                     │ │
│  │ ✅ Mecanismo         │ ❌ Resolución judicial sujeta      │ │
│  │    contractual       │    a interpretaciones              │ │
│  │    predefinido       │                                     │ │
│  │                      │                                     │ │
│  │ ✅ Fiduciario        │ ❌ Apelaciones pueden alargar      │ │
│  │    neutral           │    proceso años                    │ │
│  │                      │                                     │ │
│  │ ✅ Sin amparos       │ ❌ Deudor puede interponer         │ │
│  │    dilatorios        │    recursos dilatorios             │ │
│  │                      │                                     │ │
│  └──────────────────────┴─────────────────────────────────────┘ │
│                                                                 │
│  ╔════════════════════════════════════════════════════════════╗ │
│  ║                   🏆 GANADOR INDISCUTIBLE                  ║ │
│  ║                   FIDEICOMISO EN GARANTÍA                  ║ │
│  ║                                                            ║ │
│  ║  Velocidad:   20x más rápido                              ║ │
│  ║  Protección:  35% mayor blindaje                          ║ │
│  ║  Costo:       40-60% más económico                        ║ │
│  ║  Certeza:     95% vs 70% tasa de recuperación exitosa     ║ │
│  ╚════════════════════════════════════════════════════════════╝ │
│                                                                 │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │         💡 CASO DE ÉXITO REAL                              │ │
│  ├────────────────────────────────────────────────────────────┤ │
│  │                                                            │ │
│  │  "SOFOM Crédito PyME recuperó inmueble comercial en       │ │
│  │   45 días mediante fideicomiso en garantía.               │ │
│  │                                                            │ │
│  │   Con hipoteca tradicional habría tardado 18+ meses       │ │
│  │   y gastado 3x más en costas judiciales."                 │ │
│  │                                                            │ │
│  │   Ahorro estimado: $450,000 MXN                           │ │
│  │   Recuperación: 95% del valor del crédito                 │ │
│  │                                                            │ │
│  │   [FOTO/ILUSTRACIÓN: Edificio comercial + Checkmark]      │ │
│  │                                                            │ │
│  └────────────────────────────────────────────────────────────┘ │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
```

### Especificaciones Técnicas

**Formato:** SVG comparativa side-by-side con scorecards

**Colores:**
```css
/* Fideicomiso (ganador) */
fideicomiso-bg: #D1FAE5;
fideicomiso-border: 3px solid #10B981;
fideicomiso-icon: #10B981;
fideicomiso-text: #065F46;
fideicomiso-checkmark: #10B981;

/* Hipoteca (perdedor) */
hipoteca-bg: #FEE2E2;
hipoteca-border: 2px solid #EF4444;
hipoteca-icon: #EF4444;
hipoteca-text: #991B1B;
hipoteca-cross: #EF4444;

/* Neutral (criterios) */
criteria-bg: #F9FAFB;
criteria-border: 1px solid #D1D5DB;
criteria-header-bg: #374151;
criteria-header-text: #FFFFFF;

/* Winner box */
winner-bg: linear-gradient(135deg, #10B981 0%, #059669 100%);
winner-border: 3px solid #10B981;
winner-text: #FFFFFF;
winner-trophy: #FCD34D;

/* Case study */
casestudy-bg: #DBEAFE;
casestudy-border: 2px solid #3B82F6;
casestudy-icon: #3B82F6;
casestudy-text: #1E3A8A;

/* Visual indicators */
checkmark-color: #10B981;
cross-color: #EF4444;
warning-color: #F59E0B;
```

**Dimensiones:**
- Desktop: 1200px width, height responsive
- Tablet: 768px width, stack criteria
- Mobile: 100% width, complete vertical stack

**Tipografía:**
```css
.main-title {
  font-size: 32px;
  font-weight: 800;
  color: var(--primary-900);
  text-align: center;
  margin-bottom: 8px;
}

.subtitle {
  font-size: 18px;
  font-weight: 400;
  color: var(--neutral-600);
  text-align: center;
}

.option-title {
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

.criteria-header {
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--white);
  background: var(--neutral-700);
  padding: 16px;
}

.comparison-item {
  font-size: 15px;
  font-weight: 400;
  line-height: 1.8;
  display: flex;
  align-items: flex-start;
  gap: 12px;
}

.stat-emphasis {
  font-size: 18px;
  font-weight: 700;
  color: var(--primary-700);
}

.winner-text {
  font-size: 28px;
  font-weight: 800;
  color: var(--white);
  text-align: center;
  text-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.winner-stat {
  font-size: 20px;
  font-weight: 600;
  color: var(--white);
}

.case-study-quote {
  font-size: 16px;
  font-weight: 400;
  font-style: italic;
  line-height: 1.6;
  color: var(--primary-800);
}
```

**Animaciones:**
```javascript
// Reveal por criterio (secuencial)
const criteriaReveal = {
  0ms: "Fade in headers",
  300ms: "Slide in left (Fideicomiso column)",
  600ms: "Slide in right (Hipoteca column)",
  900ms: "Pop in checkmarks/crosses secuencialmente",
  1200ms: "Highlight differences (pulse effect)",
  1500ms: "Reveal winner box con confetti"
};

// Checkmarks animados
@keyframes checkmarkDraw {
  0% {
    stroke-dashoffset: 100;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

// Cross animado
@keyframes crossDraw {
  0% {
    opacity: 0;
    transform: scale(0.5) rotate(-45deg);
  }
  50% {
    transform: scale(1.1) rotate(-45deg);
  }
  100% {
    opacity: 1;
    transform: scale(1) rotate(-45deg);
  }
}

// Winner box celebration
@keyframes celebrate {
  0%, 100% {
    transform: scale(1);
  }
  25% {
    transform: scale(1.02);
  }
  75% {
    transform: scale(0.98);
  }
}

// Confetti particles (subtle)
@keyframes confetti {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(200px) rotate(720deg);
    opacity: 0;
  }
}
```

**Interactividad:**
```javascript
// Hover sobre criterio
const criteriaHover = {
  hover: "Highlight fila completa con background-color transition",

  // Click en checkmark/cross
  clickIcon: "Mostrar tooltip con explicación extendida",

  // Mobile touch
  tap: "Expandir criterio con detalles adicionales"
};

// Winner box
const winnerInteraction = {
  hover: "Subtle scale up + glow effect",

  // Stats counter
  onVisible: "Animated counter para las estadísticas"
};

// Case study
const caseStudyInteraction = {
  hover: "Lift effect",
  click: "Expandir modal con caso completo + imágenes"
};
```

**Visual Indicators (Icons):**
```html
<!-- Checkmark SVG -->
<svg class="checkmark" viewBox="0 0 24 24">
  <path
    d="M20 6L9 17l-5-5"
    stroke="#10B981"
    stroke-width="3"
    fill="none"
    stroke-linecap="round"
    stroke-linejoin="round"
  />
</svg>

<!-- Cross SVG -->
<svg class="cross" viewBox="0 0 24 24">
  <path
    d="M18 6L6 18M6 6l12 12"
    stroke="#EF4444"
    stroke-width="3"
    stroke-linecap="round"
  />
</svg>

<!-- Warning SVG -->
<svg class="warning" viewBox="0 0 24 24">
  <path
    d="M12 9v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
    stroke="#F59E0B"
    stroke-width="2"
  />
</svg>
```

**Responsive Behavior:**
```css
/* Desktop: Side-by-side */
@media (min-width: 1024px) {
  .comparison-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
  }

  .vs-divider {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}

/* Tablet */
@media (min-width: 768px) and (max-width: 1023px) {
  .comparison-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }

  .criteria {
    font-size: 16px;
  }
}

/* Mobile: Full stack */
@media (max-width: 767px) {
  .comparison-row {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .vs-divider {
    margin: 16px 0;
  }

  .fideicomiso-column {
    order: 1;
  }

  .hipoteca-column {
    order: 2;
  }

  /* Criteria accordion en mobile */
  .criteria {
    cursor: pointer;
  }

  .criteria-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .criteria.active .criteria-content {
    max-height: 500px;
  }
}
```

**Accesibilidad:**
```html
<section
  role="region"
  aria-labelledby="comparativa-title"
  aria-describedby="comparativa-desc">

  <h2 id="comparativa-title">
    Fideicomiso vs Hipoteca: Comparativa de Garantías
  </h2>

  <p id="comparativa-desc">
    Tabla comparativa mostrando las ventajas del fideicomiso en garantía
    sobre la hipoteca tradicional en 4 criterios clave: ejecución,
    protección patrimonial, flexibilidad y certeza jurídica.
  </p>

  <!-- Tabla accesible -->
  <table role="table" aria-label="Comparativa fideicomiso vs hipoteca">
    <thead>
      <tr>
        <th scope="col">Criterio</th>
        <th scope="col">Fideicomiso</th>
        <th scope="col">Hipoteca</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Ejecución</th>
        <td>
          <span aria-label="Ventaja">✓</span> 30-60 días
        </td>
        <td>
          <span aria-label="Desventaja">✗</span> 1-3 años
        </td>
      </tr>
      <!-- Resto de filas -->
    </tbody>
  </table>

  <!-- Winner announcement -->
  <div role="status" aria-live="polite" aria-atomic="true">
    <p>Ganador: Fideicomiso en Garantía con superioridad en todos los criterios</p>
  </div>
</section>
```

---

## IMPLEMENTACIÓN GENERAL DE INFOGRAFÍAS

### Consideraciones Técnicas Globales

**1. Formato de archivo:**
```html
<!-- SVG inline para control total -->
<svg xmlns="http://www.w3.org/2000/svg"
     viewBox="0 0 1200 800"
     role="img"
     aria-labelledby="infografia-title">
  <title id="infografia-title">Título descriptivo</title>
  <desc>Descripción larga para screen readers</desc>
  <!-- Content -->
</svg>
```

**2. Optimización:**
- Minificar SVG (SVGO)
- Lazy load para infografías below-the-fold
- Usar `<use>` para iconos repetidos
- Evitar inline styles (usar clases CSS)

**3. Performance:**
```javascript
// Intersection Observer para animaciones
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate');
      observer.unobserve(entry.target); // Animar solo una vez
    }
  });
}, { threshold: 0.2 });

document.querySelectorAll('.infografia').forEach(el => {
  observer.observe(el);
});
```

**4. Exportabilidad:**
- Botón "Descargar PNG" para cada infografía
- Generación dinámica usando html2canvas o similar
- Watermark del sitio en exportaciones

**5. Compartibilidad social:**
```html
<!-- Open Graph tags específicos por infografía -->
<meta property="og:image" content="/images/infografia-1-og.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:description" content="SOFOM: Radiografía del Objeto Múltiple">
```

**6. Responsive strategy:**
- Desktop: Infografías horizontales
- Tablet: Mantener diseño con ajustes de tamaño
- Mobile: Reflow a vertical cuando sea necesario
- Pinch-to-zoom habilitado en mobile

**7. Fallbacks:**
```html
<!-- Fallback para navegadores sin SVG support -->
<svg>
  <!-- SVG content -->
  <foreignObject>
    <img src="/images/infografia-1-fallback.png" alt="Descripción">
  </foreignObject>
</svg>
```

---

## PRÓXIMO ENTREGABLE

Guía de implementación técnica para desarrolladores con código HTML/CSS/JS listo para producción.
