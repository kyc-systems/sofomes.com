# WIREFRAMES DE ALTA FIDELIDAD - SOFOMES.COM
## Arquitectura Visual Detallada por Sección

---

## SECCIÓN 0: HERO SECTION (Above the Fold)

**Objetivo:** Capturar atención inmediata y comunicar value proposition en <3 segundos

```
┌─────────────────────────────────────────────────────────────────────┐
│                         [LOGO SOFOMES.COM]                   [MENÚ] │
├─────────────────────────────────────────────────────────────────────┤
│                                                                     │
│  ┌───────────────────────────┐  ┌─────────────────────────────┐   │
│  │                           │  │                             │   │
│  │  BACKGROUND GRADIENT      │  │   [ILUSTRACIÓN/IMAGEN]      │   │
│  │  Primary-900 → Primary-500│  │   - PyME recibiendo         │   │
│  │                           │  │     financiamiento          │   │
│  │  ╔════════════════════╗   │  │   - Handshake visual        │   │
│  │  ║ H1 HERO (60px)     ║   │  │   - Gráfico de crecimiento  │   │
│  │  ║ SOFOMES en México: ║   │  │                             │   │
│  │  ║ La Alternativa de  ║   │  │   [IMAGEN OPTIMIZADA]       │   │
│  │  ║ Financiamiento para║   │  │   - WebP/AVIF format        │   │
│  │  ║ PyMEs              ║   │  │   - Lazy load               │   │
│  │  ╚════════════════════╝   │  │   - Alt text descriptivo    │   │
│  │                           │  │                             │   │
│  │  Subtítulo (20px):        │  └─────────────────────────────┘   │
│  │  "Crédito flexible fuera  │                                     │
│  │  de la banca tradicional  │                                     │
│  │  + Guía completa para     │                                     │
│  │  constituir tu SOFOM ENR" │                                     │
│  │                           │                                     │
│  │  ┌─────────────────────┐  │                                     │
│  │  │ [CTA PRIMARIO]      │  │                                     │
│  │  │ Solicitar           │  │                                     │
│  │  │ Financiamiento →    │  │                                     │
│  │  └─────────────────────┘  │                                     │
│  │                           │                                     │
│  │  ┌─────────────────────┐  │                                     │
│  │  │ [CTA SECUNDARIO]    │  │                                     │
│  │  │ Constituir SOFOM →  │  │                                     │
│  │  └─────────────────────┘  │                                     │
│  │                           │                                     │
│  └───────────────────────────┘                                     │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘

MOBILE VERSION (< 640px):
┌──────────────────────┐
│  [LOGO]      [MENU≡] │
├──────────────────────┤
│                      │
│  H1 HERO (40px)      │
│  SOFOMES en México   │
│                      │
│  Subtítulo (16px)    │
│  Crédito flexible... │
│                      │
│  [IMAGEN HERO]       │
│  - Full width        │
│  - Optimizada mobile │
│                      │
│  [CTA PRIMARIO]      │
│  Full width button   │
│                      │
│  [CTA SECUNDARIO]    │
│  Full width button   │
│                      │
└──────────────────────┘
```

**Especificaciones técnicas:**
- **Altura mínima:** 100vh (viewport height completo)
- **Background:** Gradient overlay sobre imagen de fondo (#0A2463 → #3B82F6, opacity 0.9)
- **Animación entrada:** Fade in up 0.6s ease-out
- **CTAs:** Sticky en mobile al hacer scroll (fixed position bottom)
- **Scroll indicator:** Icono animado "chevron down" en la parte inferior

---

## SECCIÓN 1: TRUST BAR

**Objetivo:** Generar confianza inmediata con logos de reguladores y estadísticas clave

```
┌─────────────────────────────────────────────────────────────────────┐
│                         TRUST INDICATORS                            │
├─────────────────────────────────────────────────────────────────────┤
│                                                                     │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌──────────┐          │
│  │  LOGO    │  │  LOGO    │  │   📊     │  │   📊     │          │
│  │  CNBV    │  │ CONDUSEF │  │  20%     │  │  70%     │          │
│  │          │  │          │  │          │  │          │          │
│  │ [BADGE]  │  │ [BADGE]  │  │ Mercado  │  │ Rechazos │          │
│  │ Regulado │  │ Registro │  │ Financia │  │  Banca   │          │
│  │  PLD/FT  │  │  SIPRES  │  │  miento  │  │ Aprueban │          │
│  └──────────┘  └──────────┘  └──────────┘  └──────────┘          │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘

MOBILE VERSION (Stack vertical):
┌──────────────────────┐
│  [LOGO CNBV]         │
│  Regulado PLD/FT     │
├──────────────────────┤
│  [LOGO CONDUSEF]     │
│  Registro SIPRES     │
├──────────────────────┤
│  📊 20% del mercado  │
├──────────────────────┤
│  📊 70% rechazos     │
│      banca aprobados │
└──────────────────────┘
```

**Especificaciones técnicas:**
- **Padding:** 48px vertical, 32px horizontal
- **Background:** White con subtle shadow (0 1px 3px rgba(0,0,0,0.1))
- **Logos:** Grayscale normal, color on hover
- **Animación:** Counter up para estadísticas (cuando entra en viewport)
- **Grid:** 4 columnas desktop, 1 columna mobile

---

## SECCIÓN 2: NAVEGACIÓN PRINCIPAL (Sticky)

```
┌─────────────────────────────────────────────────────────────────────┐
│  [LOGO]  ¿Qué es?  Tipos  Ventajas  Proceso  Compliance  [CONTACTO]│
└─────────────────────────────────────────────────────────────────────┘

MOBILE (Hamburger menu):
┌──────────────────────┐
│  [LOGO]      [MENU≡] │
└──────────────────────┘

MENU ABIERTO:
┌──────────────────────┐
│  [X CERRAR]          │
├──────────────────────┤
│  ¿Qué es una SOFOM?  │
├──────────────────────┤
│  Tipos de SOFOM      │
├──────────────────────┤
│  Ventajas            │
├──────────────────────┤
│  Proceso             │
├──────────────────────┤
│  Compliance          │
├──────────────────────┤
│  [CTA CONTACTO]      │
└──────────────────────┘
```

**Especificaciones técnicas:**
- **Position:** Sticky top: 0, z-index: 100
- **Altura:** 72px desktop, 64px mobile
- **Background:** White con backdrop-blur(8px) al hacer scroll
- **Shadow:** Aparece al hacer scroll (0 4px 6px rgba(0,0,0,0.1))
- **Active state:** Underline 2px primary-500 en link activo
- **Smooth scroll:** scroll-behavior: smooth para anchors

---

## SECCIÓN 3: ¿QUÉ ES UNA SOFOM?

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  ┌────────────────────────────────────────────────────────────┐    │
│  │         SECCIÓN CONTENT (Max-width: 1280px, centrado)      │    │
│  ├────────────────────────────────────────────────────────────┤    │
│  │                                                            │    │
│  │  H2 (36px): ¿Qué es una SOFOM y por qué es fundamental?   │    │
│  │                                                            │    │
│  │  Lead text (18px):                                         │    │
│  │  Las Sociedades Financieras de Objeto Múltiple son...     │    │
│  │                                                            │    │
│  │  ┌──────────────────────────────────────────────────┐     │    │
│  │  │                                                  │     │    │
│  │  │      [INFOGRAFÍA #1: OBJETO MÚLTIPLE]           │     │    │
│  │  │                                                  │     │    │
│  │  │      ┌────────────────────────────┐             │     │    │
│  │  │      │     SOFOM ENR/ER           │             │     │    │
│  │  │      │   Objeto Múltiple 🔄       │             │     │    │
│  │  │      └──────────┬─────────────────┘             │     │    │
│  │  │                 │                               │     │    │
│  │  │      ┌──────────┼──────────┬──────────┐         │     │    │
│  │  │      │          │          │          │         │     │    │
│  │  │   ┌──▼──┐   ┌──▼──┐   ┌──▼──┐   ┌──▼──┐       │     │    │
│  │  │   │  💰 │   │  🚚 │   │  📄 │   │  🛡️ │       │     │    │
│  │  │   │     │   │     │   │     │   │     │       │     │    │
│  │  │   │CRÉD.│   │ARREN│   │FACT.│   │FIDEI│       │     │    │
│  │  │   │     │   │     │   │     │   │     │       │     │    │
│  │  │   └─────┘   └─────┘   └─────┘   └─────┘       │     │    │
│  │  │                                                  │     │    │
│  │  │   Hipotecario • Personal • Revolvente           │     │    │
│  │  │   Simple • Capital de trabajo • PyMEs           │     │    │
│  │  │                                                  │     │    │
│  │  └──────────────────────────────────────────────────┘     │    │
│  │                                                            │    │
│  │  ┌─────────────────────────┬─────────────────────────┐    │    │
│  │  │   SOFOM vs BANCA        │   SOFOM VENTAJAS        │    │    │
│  │  ├─────────────────────────┼─────────────────────────┤    │    │
│  │  │ ✓ Flexibilidad          │ ✓ Aprueba 70% rechazos  │    │    │
│  │  │ ✓ Rapidez               │ ✓ Tasas competitivas    │    │    │
│  │  │ ✓ Menos requisitos      │ ✓ Esquemas creativos    │    │    │
│  │  │ ✓ PyMEs focus           │ ✓ Sin penalización      │    │    │
│  │  └─────────────────────────┴─────────────────────────┘    │    │
│  │                                                            │    │
│  └────────────────────────────────────────────────────────────┘    │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘

MOBILE VERSION:
┌────────────────────┐
│  H2 (30px)         │
│  ¿Qué es SOFOM?    │
│                    │
│  Lead text (16px)  │
│  Las Sociedades... │
│                    │
│  [INFOGRAFÍA #1]   │
│  - Full width      │
│  - Touch friendly  │
│  - SVG responsive  │
│                    │
│  [CARD: vs Banca]  │
│  - Stack vertical  │
│                    │
│  [CARD: Ventajas]  │
│  - Stack vertical  │
│                    │
└────────────────────┘
```

**Especificaciones técnicas:**
- **Padding section:** 96px vertical desktop, 48px mobile
- **Background:** Neutral-50 (subtle off-white)
- **Infografía:** SVG inline, animación en scroll (fade in + slide up)
- **Cards comparativa:** Hover lift effect, shadow-md → shadow-xl
- **Grid layout:** 2 columnas desktop (1fr 1fr), 1 columna mobile

---

## SECCIÓN 4: TIPOS DE SOFOM (ER vs ENR)

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): SOFOM ER vs ENR: Tipos y Regulación                    │
│                                                                     │
│  Lead text (18px):                                                  │
│  Existen dos categorías principales de SOFOMES...                  │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │
│  │          [INFOGRAFÍA #2: ECOSISTEMA SOFOM]                   │  │
│  │                                                              │  │
│  │    ┌─────────────────────────────────────────────┐          │  │
│  │    │        ECOSISTEMA REGULATORIO SOFOM         │          │  │
│  │    └─────────────────┬───────────────────────────┘          │  │
│  │                      │                                       │  │
│  │         ┌────────────┴────────────┐                          │  │
│  │         │                         │                          │  │
│  │    ┌────▼─────┐             ┌────▼─────┐                    │  │
│  │    │ SOFOM ER │             │ SOFOM ENR│                    │  │
│  │    │  (E.R.)  │             │  (E.N.R.)│                    │  │
│  │    └──────────┘             └──────────┘                    │  │
│  │         │                         │                          │  │
│  │    ┌────▼────────────┐     ┌─────▼──────────┐               │  │
│  │    │ Vinculación     │     │ Sin vínculos   │               │  │
│  │    │ con Bancos      │     │ bancarios      │               │  │
│  │    │ o SOFIPOS       │     │                │               │  │
│  │    └────┬────────────┘     └─────┬──────────┘               │  │
│  │         │                         │                          │  │
│  │    ┌────▼────────────┐     ┌─────▼──────────┐               │  │
│  │    │ Supervisión     │     │ Supervisión    │               │  │
│  │    │ INTEGRAL CNBV   │     │ SOLO PLD/FT    │               │  │
│  │    │ (todas materias)│     │ (CNBV)         │               │  │
│  │    └────┬────────────┘     └─────┬──────────┘               │  │
│  │         │                         │                          │  │
│  │         └────────────┬────────────┘                          │  │
│  │                      │                                       │  │
│  │              ┌───────▼────────┐                              │  │
│  │              │ AMBAS REQUIEREN│                              │  │
│  │              │ Registro       │                              │  │
│  │              │ CONDUSEF       │                              │  │
│  │              │ (SIPRES)       │                              │  │
│  │              └────────────────┘                              │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │              TABLA COMPARATIVA INTERACTIVA                   │  │
│  ├──────────────────────┬───────────────┬───────────────────────┤  │
│  │ CARACTERÍSTICA       │   SOFOM ER    │     SOFOM ENR         │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Vinculación Bancaria │ ✓ Requerida   │ ✗ No necesaria        │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Supervisión CNBV     │ ✓ Integral    │ ✓ Solo PLD/FT         │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Registro CONDUSEF    │ ✓ Obligatorio │ ✓ Obligatorio         │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Capital Mínimo       │ Variable      │ No establecido        │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Reporteo PLD/FT      │ ✓ SITI PLD/FT │ ✓ SITI PLD/FT         │  │
│  ├──────────────────────┼───────────────┼───────────────────────┤  │
│  │ Ideal para           │ Gran escala   │ PyMEs y startups      │  │
│  └──────────────────────┴───────────────┴───────────────────────┘  │
│                                                                     │
│  ┌──────────────────┐  ┌──────────────────┐  ┌──────────────────┐ │
│  │  [CARD]          │  │  [CARD]          │  │  [CARD]          │ │
│  │  SOFOM ER        │  │  SOFOM ENR       │  │  Ambas Tipos     │ │
│  │                  │  │                  │  │                  │ │
│  │  Casos de uso:   │  │  Casos de uso:   │  │  Obligaciones:   │ │
│  │  • Bancos        │  │  • Startups      │  │  • PLD/FT        │ │
│  │  • Escala        │  │  • PyMEs         │  │  • CONDUSEF      │ │
│  │  • Emisión deuda │  │  • Fondos privados│ │  • Reporte      │ │
│  │                  │  │                  │  │                  │ │
│  └──────────────────┘  └──────────────────┘  └──────────────────┘ │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** White
- **Infografía:** SVG con animación secuencial (cada nodo aparece en orden)
- **Tabla:** Sticky header en scroll, zebra striping (alternating row colors)
- **Cards:** 3 columnas desktop, 1 columna mobile, hover scale effect
- **Tooltips:** Info icons con tooltips explicativos al hover

---

## SECCIÓN 5: VENTAJAS COMPETITIVAS

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): Ventajas Competitivas de las SOFOMES                   │
│                                                                     │
│  ┌─────────────────────────────────────────────────────────────┐   │
│  │                 SELECTOR DE AUDIENCIA                       │   │
│  │  [TAB: PyMEs] [TAB: Inversionistas] [TAB: Emprendedores]    │   │
│  └─────────────────────────────────────────────────────────────┘   │
│                                                                     │
│  /* CONTENIDO DINÁMICO POR TAB - EJEMPLO: PyMEs */                 │
│                                                                     │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌──────────┐          │
│  │  [CARD]  │  │  [CARD]  │  │  [CARD]  │  │  [CARD]  │          │
│  │          │  │          │  │          │  │          │          │
│  │   💰     │  │   ⚡     │  │   ✓      │  │   📈     │          │
│  │          │  │          │  │          │  │          │          │
│  │ Mayor    │  │ Rapidez  │  │ Menos    │  │ Esquemas │          │
│  │ Flexibi- │  │ en       │  │ Requi-   │  │ Creativos│          │
│  │ lidad    │  │ Aproba-  │  │ sitos    │  │          │          │
│  │          │  │ ción     │  │          │  │          │          │
│  │ Tasas    │  │ 48-72hrs │  │ 70% de   │  │ Prepagos │          │
│  │ variables│  │ vs 2-4   │  │ rechazos │  │ sin      │          │
│  │ Plazos   │  │ semanas  │  │ banca    │  │ penali-  │          │
│  │ ajustados│  │ banca    │  │ aprobados│  │ zación   │          │
│  │          │  │          │  │          │  │          │          │
│  └──────────┘  └──────────┘  └──────────┘  └──────────┘          │
│                                                                     │
│  ┌────────────────────────────────────────────────────────────┐    │
│  │           BENEFICIOS FISCALES (DESTACADO)                  │    │
│  ├────────────────────────────────────────────────────────────┤    │
│  │                                                            │    │
│  │  H3: Ventajas Fiscales Exclusivas                         │    │
│  │                                                            │    │
│  │  ┌─────────────────────┐  ┌─────────────────────┐         │    │
│  │  │  [CARD FISCAL]      │  │  [CARD FISCAL]      │         │    │
│  │  │                     │  │                     │         │    │
│  │  │  🎯 Exención IVA    │  │  📊 Deducibilidad   │         │    │
│  │  │                     │  │                     │         │    │
│  │  │  Intereses por      │  │  Pérdidas por       │         │    │
│  │  │  crédito capital    │  │  cuentas            │         │    │
│  │  │  trabajo EXENTOS    │  │  incobrables        │         │    │
│  │  │  de IVA             │  │                     │         │    │
│  │  │                     │  │  Art. 27 Frac. 15   │         │    │
│  │  │  Ventaja vs SA/SAPI │  │  LISR               │         │    │
│  │  │                     │  │                     │         │    │
│  │  └─────────────────────┘  └─────────────────────┘         │    │
│  │                                                            │    │
│  └────────────────────────────────────────────────────────────┘    │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────┐      │
│  │                  ESTADÍSTICAS DE IMPACTO                 │      │
│  │                                                          │      │
│  │   ┌─────────┐      ┌─────────┐      ┌─────────┐         │      │
│  │   │   20%   │      │   70%   │      │   48h   │         │      │
│  │   │  ─────  │      │  ─────  │      │  ─────  │         │      │
│  │   │         │      │         │      │         │         │      │
│  │   │ Mercado │      │Aprueban │      │ Tiempo  │         │      │
│  │   │ Financi-│      │rechazos │      │promedio │         │      │
│  │   │ amiento │      │ banca   │      │aproba-  │         │      │
│  │   │         │      │         │      │ ción    │         │      │
│  │   └─────────┘      └─────────┘      └─────────┘         │      │
│  │                                                          │      │
│  │   [ANIMATED COUNTER - Números crecen al entrar viewport] │      │
│  │                                                          │      │
│  └──────────────────────────────────────────────────────────┘      │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** Gradient subtle (neutral-50 → white)
- **Tabs:** Active state con border-bottom 3px primary-500
- **Cards:** 4 columnas desktop, 2 columnas tablet, 1 columna mobile
- **Cards fiscales:** Background gradient (secondary-100 → secondary-50)
- **Estadísticas:** Counter animation usando Intersection Observer
- **Icons:** 48px size, primary-500 color

---

## SECCIÓN 6: PROCESO DE CONSTITUCIÓN

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): Proceso para Constituir una SOFOM ENR                  │
│                                                                     │
│  Lead text:                                                         │
│  7 pasos legales y administrativos para tu constitución exitosa    │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │
│  │         [INFOGRAFÍA #3: FLUJOGRAMA 7 PASOS]                  │  │
│  │                                                              │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  INICIO        │                          │  │
│  │                  │  Constitución  │                          │  │
│  │                  │  SOFOM ENR     │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 1        │                          │  │
│  │                  │  📝            │                          │  │
│  │                  │  Solicitud     │                          │  │
│  │                  │  Denominación  │                          │  │
│  │                  │  (SE)          │                          │  │
│  │                  │  ⏱ 3-5 días    │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 2        │                          │  │
│  │                  │  ✅            │                          │  │
│  │                  │  Opinión       │                          │  │
│  │                  │  Favorable     │                          │  │
│  │                  │  CONDUSEF      │                          │  │
│  │                  │  (Estatutos)   │                          │  │
│  │                  │  ⏱ 10-15 días  │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 3        │                          │  │
│  │                  │  ⚖️            │                          │  │
│  │                  │  Constitución  │                          │  │
│  │                  │  ante Fedatario│                          │  │
│  │                  │  + RPC         │                          │  │
│  │                  │  ⏱ 5-7 días    │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 4        │                          │  │
│  │                  │  🛡️            │                          │  │
│  │                  │  Dictamen      │                          │  │
│  │                  │  Técnico CNBV  │                          │  │
│  │                  │  (PLD/FT)      │                          │  │
│  │                  │  ⏱ 50 días max │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 5        │                          │  │
│  │                  │  📋            │                          │  │
│  │                  │  Contrato      │                          │  │
│  │                  │  Buró Crédito  │                          │  │
│  │                  │  (SIC)         │                          │  │
│  │                  │  ⏱ 3-5 días    │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 6        │                          │  │
│  │                  │  ✍️            │                          │  │
│  │                  │  Inscripción   │                          │  │
│  │                  │  SIPRES        │                          │  │
│  │                  │  (CONDUSEF)    │                          │  │
│  │                  │  ⏱ 5-7 días    │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  PASO 7        │                          │  │
│  │                  │  🔑            │                          │  │
│  │                  │  Clave SITI    │                          │  │
│  │                  │  PLD/FT        │                          │  │
│  │                  │  (CNBV)        │                          │  │
│  │                  │  ⏱ 10-15 días  │                          │  │
│  │                  └───────┬────────┘                          │  │
│  │                          │                                   │  │
│  │                          ▼                                   │  │
│  │                  ┌────────────────┐                          │  │
│  │                  │  ✅ SOFOM ENR  │                          │  │
│  │                  │  CONSTITUIDA   │                          │  │
│  │                  │  Lista para    │                          │  │
│  │                  │  operar        │                          │  │
│  │                  └────────────────┘                          │  │
│  │                                                              │  │
│  │  Tiempo total estimado: 90-120 días                          │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │              TIMELINE INTERACTIVO                            │  │
│  │                                                              │  │
│  │  Mes 1         Mes 2          Mes 3          Mes 4          │  │
│  │  │─────────────│─────────────│─────────────│              │  │
│  │  ●─────●───────●─────────────●─────●───────●──────●          │  │
│  │  │     │       │             │     │       │      │          │  │
│  │  1     2       3             4     5       6      7          │  │
│  │                                                              │  │
│  │  [Click en cada número para expandir detalles]              │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │              CHECKLIST DESCARGABLE                           │  │
│  │                                                              │  │
│  │  ☑ Documentos personales accionistas                        │  │
│  │  ☑ Proyecto de estatutos sociales                           │  │
│  │  ☑ Plan de funcionamiento                                   │  │
│  │  ☑ Manual PLD/FT                                            │  │
│  │  ☑ Designación Oficial de Cumplimiento                      │  │
│  │  ☑ Contrato de arrendamiento oficinas                       │  │
│  │                                                              │  │
│  │  [BOTÓN: Descargar Checklist Completo PDF] 📥              │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  [CTA: Iniciar mi Constitución →]                                  │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** White
- **Infografía:** Vertical flow chart, SVG animado
- **Timeline:** Horizontal scroll en mobile, sticky labels
- **Checklist:** Checkboxes interactivos (visual only)
- **Lead magnet:** PDF generado con marca de agua del sitio
- **Responsive:** Stack vertical en mobile

---

## SECCIÓN 7: COMPLIANCE PLD/FT

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): Compliance PLD/FT: El Pilar de tu SOFOM                │
│                                                                     │
│  Lead text:                                                         │
│  Todas las SOFOMES son Sujetos Obligados en PLD/FT                 │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                MARCO REGULATORIO VISUAL                      │  │
│  │                                                              │  │
│  │           ┌──────────────────────────┐                       │  │
│  │           │      CNBV + UIF          │                       │  │
│  │           │   Reguladores PLD/FT     │                       │  │
│  │           └──────────┬───────────────┘                       │  │
│  │                      │                                       │  │
│  │                      ▼                                       │  │
│  │           ┌──────────────────────────┐                       │  │
│  │           │   SOFOM ENR/ER           │                       │  │
│  │           │   Sujeto Obligado        │                       │  │
│  │           └──────────┬───────────────┘                       │  │
│  │                      │                                       │  │
│  │         ┌────────────┼────────────┐                          │  │
│  │         │            │            │                          │  │
│  │         ▼            ▼            ▼                          │  │
│  │   ┌─────────┐  ┌─────────┐  ┌─────────┐                     │  │
│  │   │ Reportes│  │ Oficial │  │  KYC    │                     │  │
│  │   │ SITI    │  │ Cumpli- │  │ Digital │                     │  │
│  │   │ PLD/FT  │  │ miento  │  │         │                     │  │
│  │   └─────────┘  └─────────┘  └─────────┘                     │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐                         │
│  │ [CARD]   │  │ [CARD]   │  │ [CARD]   │                         │
│  │          │  │          │  │          │                         │
│  │ 👤       │  │ 📊       │  │ 🤖       │                         │
│  │          │  │          │  │          │                         │
│  │ Oficial  │  │ Reporteo │  │ Tecnolo- │                         │
│  │ de       │  │ Obliga-  │  │ gía      │                         │
│  │ Cumpli-  │  │ torio    │  │ Fintech  │                         │
│  │ miento   │  │          │  │          │                         │
│  │          │  │ • Operac.│  │ • KYC    │                         │
│  │ Certifi- │  │   Relevan│  │   Auto-  │                         │
│  │ cación   │  │   tes    │  │   mático │                         │
│  │ CNBV     │  │ • Inusua-│  │ • Biomé- │                         │
│  │ (recomen)│  │   les    │  │   trica  │                         │
│  │          │  │ • Preocup│  │ • Alerts │                         │
│  │          │  │   antes  │  │          │                         │
│  │          │  │          │  │          │                         │
│  └──────────┘  └──────────┘  └──────────┘                         │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │              HERRAMIENTAS DIGITALES                          │  │
│  │                                                              │  │
│  │  "Las SOFOMES están adoptando soluciones digitales"         │  │
│  │                                                              │  │
│  │  ✓ Onboarding no presencial                                 │  │
│  │  ✓ Sistemas automatizados KYC                               │  │
│  │  ✓ Evaluaciones biométricas                                 │  │
│  │  ✓ Perfiles transaccionales automatizados                   │  │
│  │  ✓ Detección de alertas en tiempo real                      │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** Neutral-50
- **Diagrama regulatorio:** SVG con animación de conexiones
- **Cards:** 3 columnas desktop, 1 columna mobile
- **Icons:** 48px, color accent-warning (compliance = atención)
- **Herramientas:** Checklist con checkmarks animados

---

## SECCIÓN 8: BLINDAJE DE GARANTÍAS

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): Blindaje de Garantías: Fideicomiso vs Hipoteca         │
│                                                                     │
│  Lead text:                                                         │
│  Por qué el fideicomiso en garantía es superior a la hipoteca      │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │
│  │     [INFOGRAFÍA #4: FIDEICOMISO VS HIPOTECA]                 │  │
│  │                                                              │  │
│  │                      ⚖️                                       │  │
│  │           FIDEICOMISO vs HIPOTECA                            │  │
│  │                                                              │  │
│  │  ┌─────────────────────┐   ┌─────────────────────┐          │  │
│  │  │  FIDEICOMISO 🛡️     │   │  HIPOTECA ⚖️        │          │  │
│  │  │  en Garantía        │   │  Tradicional        │          │  │
│  │  └─────────────────────┘   └─────────────────────┘          │  │
│  │           │                          │                      │  │
│  │  ┌────────▼────────┐       ┌────────▼────────┐             │  │
│  │  │ EJECUCIÓN       │       │ EJECUCIÓN       │             │  │
│  │  ├─────────────────┤       ├─────────────────┤             │  │
│  │  │ ✅ Fiduciario   │       │ ❌ Proceso      │             │  │
│  │  │    (árbitro)    │       │    Judicial     │             │  │
│  │  │                 │       │                 │             │  │
│  │  │ ⚡ 30-60 días   │       │ ⏱ 1-3 años     │             │  │
│  │  └─────────────────┘       └─────────────────┘             │  │
│  │           │                          │                      │  │
│  │  ┌────────▼────────┐       ┌────────▼────────┐             │  │
│  │  │ PROTECCIÓN      │       │ PROTECCIÓN      │             │  │
│  │  ├─────────────────┤       ├─────────────────┤             │  │
│  │  │ ✅ Sustrae bien │       │ ❌ Patrimonio   │             │  │
│  │  │    del patri-   │       │    del deudor   │             │  │
│  │  │    monio deudor │       │                 │             │  │
│  │  │                 │       │ ⚠️ Vulnerable  │             │  │
│  │  │ 🛡️ Inmune a    │       │    ante otros   │             │  │
│  │  │    concurso     │       │    acreedores   │             │  │
│  │  │    mercantil    │       │                 │             │  │
│  │  └─────────────────┘       └─────────────────┘             │  │
│  │           │                          │                      │  │
│  │  ┌────────▼────────┐       ┌────────▼────────┐             │  │
│  │  │ COSTO           │       │ COSTO           │             │  │
│  │  ├─────────────────┤       ├─────────────────┤             │  │
│  │  │ Honorarios      │       │ Costas          │             │  │
│  │  │ fiduciario      │       │ judiciales      │             │  │
│  │  │ (menor)         │       │ (mayor)         │             │  │
│  │  └─────────────────┘       └─────────────────┘             │  │
│  │                                                              │  │
│  │              GANADOR: FIDEICOMISO 🏆                         │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │              CASOS DE ÉXITO                                  │  │
│  │                                                              │  │
│  │  "SOFOM recuperó inmueble en 45 días vs 18 meses            │  │
│  │   que habría tardado con hipoteca tradicional"              │  │
│  │                                                              │  │
│  │  [TESTIMONIAL CON FOTO/AVATAR]                              │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** White
- **Infografía:** Comparativa visual side-by-side
- **Icons:** Green checks vs red crosses, semáforo visual
- **Highlight "Ganador":** Badge con gradient-success
- **Testimonial:** Card con avatar, quote styling
- **Animación:** Elementos aparecen secuencialmente al scroll

---

## SECCIÓN 9: FAQ (Preguntas Frecuentes)

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  H2 (36px): Preguntas Frecuentes sobre SOFOMES                     │
│                                                                     │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │
│  │  ❓ ¿Cuánto capital necesito para constituir una SOFOM ENR? │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿Cuánto tiempo tarda el proceso completo?               │  │
│  │  [-]                                                         │  │
│  │  ├────────────────────────────────────────────────────────┤ │  │
│  │  │ El proceso completo de constitución toma entre 90-120  │ │  │
│  │  │ días hábiles, considerando todos los pasos desde la    │ │  │
│  │  │ solicitud de denominación hasta obtener la clave SITI  │ │  │
│  │  │ PLD/FT de la CNBV.                                     │ │  │
│  │  └────────────────────────────────────────────────────────┘ │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿La certificación del Oficial de Cumplimiento es        │  │
│  │     obligatoria?                                            │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿Puede una SOFOM captar ahorro del público?             │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿Qué ventajas fiscales tiene una SOFOM vs SA?           │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿Cómo se fondea una SOFOM ENR?                          │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  ├──────────────────────────────────────────────────────────────┤  │
│  │                                                              │  │
│  │  ❓ ¿Cuál es la diferencia entre SOFOM ER y ENR?            │  │
│  │  [+]                                                         │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                     │
│  ¿No encuentras tu pregunta?                                       │
│  [Contactar a Experto →]                                           │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** Neutral-50
- **Accordion:** Max-height transition 0.3s ease
- **Icons:** [+] collapse, [-] expand, rotate 180deg animado
- **Typography:** Question bold 18px, answer regular 16px
- **Spacing:** 24px entre items
- **Mobile:** Full width, touch-friendly tap targets

---

## SECCIÓN 10: CTA FINAL (Conversion Zone)

```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│          BACKGROUND: Gradient Primary-900 → Primary-500            │
│                      Overlay opacity 0.95                          │
│                                                                     │
│  ┌────────────────────────────────────────────────────────────┐    │
│  │                                                            │    │
│  │   H2 (36px, color: white):                                 │    │
│  │   ¿Listo para Transformar tu Acceso al Financiamiento?    │    │
│  │                                                            │    │
│  │   Subtítulo (20px, color: primary-100):                   │    │
│  │   Agenda una consultoría gratuita con nuestros expertos   │    │
│  │                                                            │    │
│  │   ┌──────────────────────────────────────────────────┐     │    │
│  │   │        FORMULARIO DE CONTACTO                    │     │    │
│  │   ├──────────────────────────────────────────────────┤     │    │
│  │   │                                                  │     │    │
│  │   │  ┌────────────────┐  ┌────────────────────┐     │     │    │
│  │   │  │ Nombre *       │  │ Apellido *         │     │     │    │
│  │   │  │ [__________]   │  │ [______________]   │     │     │    │
│  │   │  └────────────────┘  └────────────────────┘     │     │    │
│  │   │                                                  │     │    │
│  │   │  ┌────────────────┐  ┌────────────────────┐     │     │    │
│  │   │  │ Email *        │  │ Teléfono *         │     │     │    │
│  │   │  │ [__________]   │  │ [______________]   │     │     │    │
│  │   │  └────────────────┘  └────────────────────┘     │     │    │
│  │   │                                                  │     │    │
│  │   │  ┌──────────────────────────────────────┐       │     │    │
│  │   │  │ Estoy interesado en: *               │       │     │    │
│  │   │  │ [▼ Seleccionar opción]               │       │     │    │
│  │   │  │  • Obtener financiamiento            │       │     │    │
│  │   │  │  • Constituir SOFOM ENR              │       │     │    │
│  │   │  │  • Consultoría compliance PLD/FT     │       │     │    │
│  │   │  │  • Asesoría general                  │       │     │    │
│  │   │  └──────────────────────────────────────┘       │     │    │
│  │   │                                                  │     │    │
│  │   │  ┌──────────────────────────────────────┐       │     │    │
│  │   │  │ Mensaje (opcional)                   │       │     │    │
│  │   │  │ [_____________________________]      │       │     │    │
│  │   │  │ [_____________________________]      │       │     │    │
│  │   │  │ [_____________________________]      │       │     │    │
│  │   │  └──────────────────────────────────────┘       │     │    │
│  │   │                                                  │     │    │
│  │   │  ☑ Acepto términos y condiciones *              │     │    │
│  │   │  ☐ Deseo recibir newsletter                     │     │    │
│  │   │                                                  │     │    │
│  │   │  [BOTÓN: Enviar Solicitud →]                    │     │    │
│  │   │  (Full width, gradient-success, large size)     │     │    │
│  │   │                                                  │     │    │
│  │   └──────────────────────────────────────────────────┘     │    │
│  │                                                            │    │
│  │   ─────────────────── O ───────────────────               │    │
│  │                                                            │    │
│  │   📥 DESCARGA GRATUITA                                    │    │
│  │   "Guía Completa: Cómo Constituir una SOFOM ENR"         │    │
│  │   [Descargar PDF →]                                       │    │
│  │                                                            │    │
│  └────────────────────────────────────────────────────────────┘    │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** Gradient overlay sobre imagen relacionada (personas firmando contratos)
- **Formulario:** Background white, padding 48px, border-radius 16px
- **Validation:** Real-time con mensajes de error debajo de cada campo
- **Success state:** Modal/toast con confirmación
- **Lead magnet:** PDF autogenerado, tracking de conversión
- **Privacy:** Link a política de privacidad

---

## SECCIÓN 11: FOOTER

```
┌─────────────────────────────────────────────────────────────────────┐
│                         FOOTER                                      │
├─────────────────────────────────────────────────────────────────────┤
│                                                                     │
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐             │
│  │  SOFOMES.COM │  │  RECURSOS    │  │  LEGAL       │             │
│  ├──────────────┤  ├──────────────┤  ├──────────────┤             │
│  │              │  │              │  │              │             │
│  │ [LOGO]       │  │ • Blog       │  │ • Términos   │             │
│  │              │  │ • Guías      │  │ • Privacidad │             │
│  │ La plataforma│  │ • Webinars   │  │ • Cookies    │             │
│  │ definitiva   │  │ • FAQ        │  │ • Disclaimer │             │
│  │ sobre SOFOMES│  │ • Casos uso  │  │              │             │
│  │              │  │              │  │              │             │
│  └──────────────┘  └──────────────┘  └──────────────┘             │
│                                                                     │
│  ┌──────────────┐  ┌──────────────┐                                │
│  │  CONTACTO    │  │  SÍGUENOS    │                                │
│  ├──────────────┤  ├──────────────┤                                │
│  │              │  │              │                                │
│  │ 📧 info@     │  │ [LinkedIn]   │                                │
│  │    sofomes   │  │ [Twitter]    │                                │
│  │    .com      │  │ [YouTube]    │                                │
│  │              │  │ [Facebook]   │                                │
│  │ 📞 55-1234-  │  │              │                                │
│  │    5678      │  │              │                                │
│  │              │  │              │                                │
│  └──────────────┘  └──────────────┘                                │
│                                                                     │
│  ───────────────────────────────────────────────────────────────   │
│                                                                     │
│  © 2025 SOFOMES.COM - Todos los derechos reservados                │
│  Hecho con ❤️ en México                                            │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Especificaciones técnicas:**
- **Background:** Neutral-900 (dark footer)
- **Text color:** Neutral-300 (light gray)
- **Links:** Neutral-100, hover → primary-300
- **Grid:** 4 columnas desktop, 2 columnas tablet, 1 columna mobile
- **Social icons:** 24px, hover scale 1.1
- **Spacing:** 64px padding top/bottom

---

## RESPONSIVE BEHAVIOR SUMMARY

### Mobile (< 640px)
- Stack all columns vertically
- Hero text reduce to 40px H1
- CTAs full width
- Navigation hamburger menu
- Cards single column
- Infografías optimizadas para vertical scroll
- Form inputs full width

### Tablet (640px - 1024px)
- Hero 50/50 split (text/image)
- Cards 2 columns
- Navigation visible pero condensada
- Font sizes intermedios

### Desktop (1024px+)
- Full layout como diseñado
- Hover states activos
- Parallax effects sutiles
- Animaciones completas

---

## PRÓXIMO ENTREGABLE

Las 4 infografías diseñadas en detalle con especificaciones SVG/implementación.
