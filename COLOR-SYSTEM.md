# 🎨 Sistema de Colores SOFOMES.COM

**Fecha:** 2025-10-27
**Basado en:** #042c64 (Azul Corporativo)
**Metodología:** 60-30-10 Rule + Fintech Best Practices 2025

---

## 📐 Regla 60-30-10

### 60% - COLOR DOMINANTE (Neutral Claro)
**Uso:** Fondos principales, espacios en blanco, contenedores
**Color:** Blanco (#FFFFFF) y Grises claros (#F9FAFB, #F3F4F6)
**Razón:** Limpieza, legibilidad, profesionalismo

### 30% - COLOR SECUNDARIO (Azul Primario)
**Uso:** Navegación, encabezados, bordes, elementos estructurales
**Color:** #042c64 (Brand Blue) y sus variantes
**Razón:** Identidad de marca, confianza, autoridad financiera

### 10% - COLOR ACENTO (Verde Éxito)
**Uso:** CTAs, botones, alertas de éxito, checkmarks, badges
**Color:** #10B981 (Success Green) y acentos complementarios
**Razón:** Llamado a la acción, confirmación, elementos interactivos

---

## 🎨 Paleta Completa

### PRIMARY (Azul Corporativo) - 30% del diseño
Base: **#042c64**

```css
--primary-50:  #E6EBF5;   /* Fondos sutiles */
--primary-100: #CCE0FF;   /* Hover states claros */
--primary-200: #99C2FF;   /* Bordes suaves */
--primary-300: #66A3FF;   /* Elementos secundarios */
--primary-400: #3385FF;   /* Links, iconos */
--primary-500: #042c64;   /* BRAND COLOR - Headers, Nav */
--primary-600: #032350;   /* Hover buttons */
--primary-700: #021A3C;   /* Active states */
--primary-800: #011228;   /* Texto sobre claro */
--primary-900: #010914;   /* Texto máximo contraste */
```

**Dónde se usa:**
- ✅ Navegación (background)
- ✅ H1, H2, H3 (text color)
- ✅ Bordes de secciones importantes
- ✅ Footer (background)
- ✅ Links (color)
- ✅ Badges principales

### SECONDARY (Verde Éxito) - 10% del diseño
Base: **#10B981**

```css
--secondary-50:  #ECFDF5;  /* Alertas suaves */
--secondary-100: #D1FAE5;  /* Backgrounds success */
--secondary-200: #A7F3D0;  /* Hover success */
--secondary-300: #6EE7B7;  /* Borders success */
--secondary-400: #34D399;  /* Icons success */
--secondary-500: #10B981;  /* CTA BUTTONS PRIMARY */
--secondary-600: #059669;  /* CTA hover */
--secondary-700: #047857;  /* CTA active */
--secondary-800: #065F46;  /* Success dark */
--secondary-900: #064E3B;  /* Success darker */
```

**Dónde se usa:**
- ✅ Botones CTA principales
- ✅ Checkmarks (✓)
- ✅ Badges de éxito
- ✅ Alertas positivas
- ✅ Progress indicators
- ✅ Destacados importantes

### ACCENT (Naranja Advertencia) - Menos de 5%
Base: **#F59E0B**

```css
--accent-50:  #FFF7ED;   /* Fondos advertencia */
--accent-100: #FFEDD5;   /* Alerts warning */
--accent-200: #FED7AA;   /* Borders warning */
--accent-300: #FDBA74;   /* Icons warning */
--accent-400: #FB923C;   /* Elements warning */
--accent-500: #F59E0B;   /* WARNING - Badges, destacados */
--accent-600: #D97706;   /* Warning hover */
--accent-700: #B45309;   /* Warning active */
--accent-800: #92400E;   /* Warning dark */
--accent-900: #78350F;   /* Warning darker */
```

**Dónde se usa:**
- ✅ Alertas de advertencia
- ✅ Badges importantes (#1, Featured)
- ✅ Iconos de atención
- ✅ Destacados especiales
- ⛔ NO usar en CTAs principales

### NEUTRALS (60% del diseño)
Base: **Escala de grises**

```css
--neutral-50:  #F9FAFB;   /* Fondos alternos */
--neutral-100: #F3F4F6;   /* Separadores suaves */
--neutral-200: #E5E7EB;   /* Bordes principales */
--neutral-300: #D1D5DB;   /* Bordes hover */
--neutral-400: #9CA3AF;   /* Placeholders */
--neutral-500: #6B7280;   /* Texto secundario */
--neutral-600: #4B5563;   /* Texto terciario */
--neutral-700: #374151;   /* Texto normal */
--neutral-800: #1F2937;   /* Texto principal */
--neutral-900: #111827;   /* Fondos oscuros */
```

**Dónde se usa:**
- ✅ Fondos principales (50, 100)
- ✅ Texto principal (700, 800, 900)
- ✅ Texto secundario (500, 600)
- ✅ Bordes (200, 300)
- ✅ Sombras
- ✅ Separadores

### SEMANTIC COLORS

```css
--white: #FFFFFF;
--black: #000000;
--success: var(--secondary-500);  /* #10B981 */
--warning: var(--accent-500);     /* #F59E0B */
--danger: #EF4444;                /* Rojo errores */
--info: var(--primary-400);       /* Azul información */
```

---

## 📋 Aplicación por Sección

### SECCIÓN CLARA (fondo blanco/neutral-50)
```
Fondo: white o neutral-50
Títulos: primary-900
Texto: neutral-700
Links: primary-500
Botones CTA: secondary-500 (verde)
Botones secundarios: primary-500 (azul)
Bordes: neutral-200
```

### SECCIÓN OSCURA (fondo neutral-900/primary-900)
```
Fondo: neutral-900 o primary-900
Títulos: white
Texto: neutral-200
Links: primary-300 (más claro)
Botones CTA: secondary-500 (verde - mantiene contraste)
Botones secundarios: white con border
Bordes: neutral-700
```

### TARJETAS (dentro de cualquier sección)
```
Fondo: white SIEMPRE
Títulos: primary-900
Texto: neutral-700
Bordes: neutral-200
Hover: shadow-lg + translateY
```

### ALERTS
```
Info: primary-50 fondo + primary-700 texto
Success: secondary-50 fondo + secondary-700 texto
Warning: accent-50 fondo + accent-900 texto
Danger: red-50 fondo + red-900 texto
```

### BADGES
```
Primary: primary-500 background + white text
Success: secondary-500 background + white text
Warning: accent-500 background + white text
Neutral: neutral-200 background + neutral-900 text
```

---

## ✅ Checklist de Implementación

### Paso 1: Variables CSS
- [ ] Reemplazar TODAS las variables de color en main-v2.css
- [ ] Eliminar colores hardcoded

### Paso 2: Elementos Principales
- [ ] Navegación: primary-500 background
- [ ] Títulos (H1-H6): primary-900 en claro, white en oscuro
- [ ] Texto normal: neutral-700 en claro, neutral-200 en oscuro
- [ ] Links: primary-500 en claro, primary-300 en oscuro

### Paso 3: Componentes
- [ ] Botones CTA: secondary-500 (verde)
- [ ] Botones secundarios: primary-500 (azul) o outline
- [ ] Tarjetas: white background SIEMPRE
- [ ] Alerts: usar paleta semántica
- [ ] Badges: según importancia

### Paso 4: Secciones
- [ ] Hero: neutral-50 gradient
- [ ] Alternancia clara/oscura cada sección
- [ ] Máximo 2 secciones oscuras seguidas

### Paso 5: Testing
- [ ] Contraste WCAG 2.1 AA en TODAS las combinaciones
- [ ] Legibilidad en mobile
- [ ] Print styles (negro sobre blanco)

---

## 🎯 Principios de Diseño

1. **Menos es más:** No usar más de 3 colores por sección
2. **Jerarquía clara:** Primary para estructura, Secondary para acción, Accent para destacar
3. **Consistencia:** Mismo color = mismo propósito en toda la web
4. **Accesibilidad:** Ratio 4.5:1 mínimo para texto normal, 3:1 para texto grande
5. **Profesionalismo:** Azul = confianza, Verde = acción positiva, Naranja = atención

---

## 📚 Referencias

- **60-30-10 Rule:** https://www.freecodecamp.org/news/the-60-30-10-rule-in-design/
- **Fintech Colors 2025:** https://piktochart.com/tips/finance-color-palette
- **WCAG Contrast:** https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html
- **Material Design:** https://m3.material.io/styles/color/system/overview

---

**Última actualización:** 2025-10-27
**Próxima revisión:** Después del primer testing
