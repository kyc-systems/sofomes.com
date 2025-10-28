# ✅ Checklist de Testing - index-new.html

## Pre-Testing (Archivos)
- [x] `index-new.html` existe (1,115 líneas)
- [x] `assets/css/main-v2.css` existe (1,568 líneas)
- [x] `assets/img/main.jpeg` existe
- [x] `assets/fonts/inter-latin-400.woff2` existe
- [x] `assets/fonts/inter-latin-700.woff2` existe

## Testing Visual (MAMP Pro)

### 1. Navegación
- [ ] Logo "SOFOMES.COM" visible
- [ ] Links funcionan: ¿Qué es?, Directorio, FOVISSSTE, Casos, Constituir, Software PLD
- [ ] Sticky navigation al hacer scroll

### 2. Hero Section
- [ ] H1 visible: "2,076 SOFOMes en México: Directorio Completo CONDUSEF 2025"
- [ ] Stats bar con 4 items (2,076 / 98.2% / 70% / 14)
- [ ] 2 botones CTA visibles
- [ ] Imagen main.jpeg carga correctamente
- [ ] Responsive: imagen debajo del texto en mobile

### 3. ¿Qué es SOFOM?
- [ ] Sección con fondo claro (neutral-50)
- [ ] Tabla ER vs ENR visible
- [ ] Lista con checkmarks (ventajas)
- [ ] Alert box azul con dato clave

### 4. Directorio SOFOMes
- [ ] Fondo oscuro (section-dark)
- [ ] 4 stat cards (CDMX 774, Nuevo León 283, Jalisco 186)
- [ ] CTA box con botón "Buscar en Directorio"
- [ ] Alert verde Featured Snippet

### 5. SOFOM FOVISSSTE
- [ ] 4 pasos numerados (proceso list)
- [ ] 14 SOFOMes listadas
- [ ] "Crédito Para Ti" destacada con badge dorado #1
- [ ] Alert warning "asesoría gratuita"

### 6. Casos de Éxito
- [ ] Fondo oscuro
- [ ] 5 case cards en grid
- [ ] Badges visibles (Unicornio, Top 250, #1, BIVA, ER)
- [ ] Stats dentro de cada card
- [ ] Hover effect (translateY)

### 7. Constituir SOFOM ENR
- [ ] Fondo claro
- [ ] 5 cost items con montos
- [ ] Timeline con 7 pasos (numerados con círculos)
- [ ] Durations (⏱️ tiempo)
- [ ] Alert warning capital 50M
- [ ] CTA box consultoría

### 8. Software PLD/FT
- [ ] Fondo oscuro
- [ ] Lista funcionalidades (10 items con checkmarks)
- [ ] Product highlight KYC Systems con degradado
- [ ] 2 badges verificado
- [ ] Disclosure box amarillo transparente
- [ ] Stats row 3 columnas (23+ / 100% / 0)
- [ ] Botón "Ver Demo KYC Systems" con link externo
- [ ] Disclaimer compensación visible

### 9. Catálogos RIPS F36
- [ ] Fondo claro
- [ ] 5 catalog cards en grid
- [ ] Iconos emoji visibles
- [ ] Conteos (1,263 / 3,689 / 190 / 4 / 3)
- [ ] Botones "Ver Catálogo" en cada card
- [ ] Alert info nota obligatorio

### 10. FAQ
- [ ] Fondo oscuro
- [ ] 10 preguntas en grid vertical
- [ ] Cada pregunta con fondo claro (faq-question)
- [ ] Respuestas con buena jerarquía
- [ ] Links SIPRES y /lista-sofomes-mexico

### 11. Footer
- [ ] Fondo muy oscuro (neutral-900)
- [ ] 4 columnas en desktop
- [ ] Links externos funcionan (CONDUSEF, CNBV, UIF, FOVISSSTE)
- [ ] Disclosure box KYC Systems con fondo amarillo
- [ ] Copyright visible con link Isaac

### 12. Schema Markup
- [ ] Abrir DevTools → Console → 0 errores
- [ ] Buscar en código fuente: `@type: "Organization"` ✓
- [ ] Buscar en código fuente: `@type: "WebSite"` ✓
- [ ] Buscar en código fuente: `@type: "FAQPage"` ✓
- [ ] Buscar en código fuente: `@type: "BreadcrumbList"` ✓

## Testing Responsive

### Desktop (1920px)
- [ ] Todo en 2 columnas donde aplica
- [ ] Stats bars 4 columnas
- [ ] Cases grid 3 columnas
- [ ] Catalogs grid 3-4 columnas
- [ ] Footer 4 columnas

### Tablet (768px)
- [ ] Hero imagen debajo de texto
- [ ] Stats bar 2 columnas
- [ ] Cases grid 2 columnas
- [ ] Catalogs grid 2 columnas
- [ ] Footer 2 columnas

### Mobile (480px)
- [ ] Nav menu oculto (needs JS)
- [ ] Hero título reducido
- [ ] Stats bar 1 columna
- [ ] Todo el grid a 1 columna
- [ ] Botones width 100%
- [ ] Timeline reducida
- [ ] Footer 1 columna

## Testing Performance

### Core Web Vitals
- [ ] Lighthouse Desktop score >90
- [ ] Lighthouse Mobile score >85
- [ ] LCP < 2.5s (imagen hero)
- [ ] CLS < 0.1 (sin layout shifts)
- [ ] No errores 404 en Network tab

### SEO
- [ ] 1 solo H1 en página
- [ ] Meta description presente
- [ ] Canonical URL correcto
- [ ] Open Graph tags completos
- [ ] Twitter Card tags completos
- [ ] Robots meta presente

## Testing Funcional

### Links Internos
- [ ] #que-es scroll suave
- [ ] #directorio scroll suave
- [ ] #fovissste scroll suave
- [ ] #casos-exito scroll suave
- [ ] #constituir scroll suave
- [ ] #software-pld scroll suave
- [ ] #catalogos scroll suave
- [ ] #faq scroll suave

### Links Externos
- [ ] https://kyc-systems.com abre nueva pestaña
- [ ] CONDUSEF links abren nueva pestaña
- [ ] CNBV link abre nueva pestaña
- [ ] UIF link abre nueva pestaña
- [ ] FOVISSSTE link abre nueva pestaña

### CTAs
- [ ] "Ver Directorio Completo" → /lista-sofomes-mexico
- [ ] "SOFOMes FOVISSSTE" → scroll #fovissste
- [ ] "Ver Guía Completa FOVISSSTE" → /sofom-fovissste
- [ ] "Ver Casos de Éxito" → scroll #casos-exito
- [ ] "Solicitar Consultoría" → #contacto (needs implementation)
- [ ] "Ver Demo KYC Systems" → https://kyc-systems.com

## Issues Found
<!-- Anota aquí cualquier problema encontrado durante testing -->

1.
2.
3.

## Checklist Final Antes de Producción
- [ ] Todos los tests pasados
- [ ] 0 errores en console
- [ ] 0 warnings CSS
- [ ] Lighthouse score aceptable
- [ ] Links funcionan correctamente
- [ ] Responsive funciona en 3 breakpoints
- [ ] Fonts cargan correctamente
- [ ] Imágenes cargan correctamente
- [ ] Schema markup válido

---

**Fecha Testing:** ___________
**Testeado por:** Isaac
**Resultado:** ⬜ Pass | ⬜ Fail
**Notas adicionales:**
