<?php
// Variables para SEO
$pageTitle = "SOFOM ER vs ENR: Diferencias Clave 2025 | Guía Completa Comparativa";
$pageDescription = "¿ER o ENR? Guía definitiva: 10% ER ($50M capital, supervisión CNBV integral) vs 90% ENR ($50K, PLD/FT). Comparativa completa, costos, requisitos, decisión estratégica.";
$pageKeywords = "sofom er vs enr, diferencias sofom er enr, entidad regulada vs no regulada, supervision cnbv sofom, capital social sofom, requisitos sofom er, sofom enr ventajas";
$pageCanonical = "https://sofomes.com/sofom-er-vs-enr.php";

// Schema.org - Article + FAQPage + BreadcrumbList
$schemaJson = <<<'SCHEMA'
<!-- Schema.org - Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "SOFOM ER vs ENR: Diferencias Clave, Requisitos y Guía Completa 2025",
  "description": "Guía completa comparativa entre SOFOM Entidad Regulada (ER) y SOFOM Entidad No Regulada (ENR): diferencias en supervisión CNBV, capital social, requisitos operativos y estrategia de negocio.",
  "author": {
    "@type": "Organization",
    "name": "SOFOMes.com"
  },
  "publisher": {
    "@type": "Organization",
    "name": "SOFOMes.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://sofomes.com/assets/img/logo.png"
    }
  },
  "datePublished": "2025-01-15",
  "dateModified": "2025-01-15"
}
</script>

<!-- Schema.org - FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuál es la diferencia principal entre SOFOM ER y ENR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La diferencia principal es el nivel de supervisión: las SOFOM ER (Entidad Regulada) tienen supervisión integral de la CNBV en operación, solvencia, gobierno corporativo y tecnología; mientras que las SOFOM ENR (Entidad No Regulada) solo son supervisadas en PLD/FT. Las ER requieren $50M de capital social vs $50K de las ENR."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuánto capital social requiere una SOFOM ER?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Una SOFOM ER requiere un capital social mínimo de $50,000,000 MXN (ajustado por inflación), con 100% exhibido desde el inicio. Una SOFOM ENR solo requiere $50,000 MXN de capital social."
      }
    },
    {
      "@type": "Question",
      "name": "¿Las SOFOM ER pueden captar recursos del público?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, ninguna SOFOM puede captar recursos del público directamente. Sin embargo, las SOFOM ER tienen ventajas significativas en fondeo: acceso al Banco de México, mejores condiciones en banca de desarrollo, y mayor confianza de inversionistas institucionales."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué formato RIPS usa cada tipo de SOFOM?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "SOFOM ER reporta con formato F41 (integral: ~180 campos, mensual). SOFOM ENR reporta con formato F36 (solo PLD/FT: ~45 campos, trimestral). Ambos usan los mismos 7 catálogos PLD/FT de la CNBV."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuándo conviene ser SOFOM ER en lugar de ENR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Conviene ser SOFOM ER cuando el portafolio supera $500M-$1B MXN, necesitas acceso institucional a fondeo, planeas salir a bolsa, operas en sectores regulados, o tus clientes son corporativos que requieren supervisión CNBV."
      }
    },
    {
      "@type": "Question",
      "name": "¿Se puede convertir una SOFOM ENR en ER?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, mediante autorización de la CNBV. El proceso toma 9-18 meses y cuesta $2M-$5M MXN. Casos reales: Crédito Real, Financiera Independencia, Unifin, todas lograron IPO posterior."
      }
    }
  ]
}
</script>

<!-- Schema.org - BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://sofomes.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "SOFOM ER vs ENR",
      "item": "https://sofomes.com/sofom-er-vs-enr.php"
    }
  ]
}
</script>
SCHEMA;

// Variables de footer
$footerScript = "";
$cssPath = "assets/css/main.css";
include 'includes/header.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">SOFOM ER vs ENR</li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-slim">
  <div class="container">
    <h1 class="hero-title">
      SOFOM ER vs ENR: ¿Cuál Elegir?
    </h1>
    <p class="hero-subtitle">
      Guía definitiva para entender las diferencias entre <strong>Entidad Regulada (ER)</strong> y <strong>Entidad No Regulada (ENR)</strong>, y tomar la decisión estratégica correcta para tu negocio.
    </p>

    <!-- Key Stats -->
    <div class="hero-stats">
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-green">~10%</div>
        <div class="hero-stat-label">SOFOMes ER en México</div>
        <div class="hero-stat-detail">~200 entidades reguladas</div>
      </div>
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-blue">~90%</div>
        <div class="hero-stat-label">SOFOMes ENR en México</div>
        <div class="hero-stat-detail">~1,800+ entidades no reguladas</div>
      </div>
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-yellow">1,000x</div>
        <div class="hero-stat-label">Diferencia Capital Social</div>
        <div class="hero-stat-detail">$50M ER vs $50K ENR</div>
      </div>
    </div>
  </div>
</section>

<!-- Resumen Ejecutivo -->
<section class="section" style="padding-top: 3rem;">
  <div class="container">
    <div class="alert alert-info" style="border-left: 4px solid #3B82F6;">
      <h3 style="margin-bottom: 1rem; font-size: 1.25rem;">Resumen Ejecutivo</h3>
      <p style="margin-bottom: 1rem;"><strong>SOFOM ER (Entidad Regulada)</strong> representa ~10% del mercado (~200 entidades) con supervisión integral de la CNBV, capital social de $50M+, y acceso privilegiado a fondeo institucional. Son ideal para portafolios $500M+ que buscan salir a bolsa o competir en sectores regulados.</p>
      <p style="margin: 0;"><strong>SOFOM ENR (Entidad No Regulada)</strong> representa ~90% del mercado (~1,800+ entidades) con supervisión solo en PLD/FT, capital social desde $50K, y mayor flexibilidad operativa. Son ideal para PyMEs financieras, nicho especializado, o escalamiento progresivo antes de convertirse en ER.</p>
    </div>
  </div>
</section>

<!-- Tabla Comparativa Principal -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Tabla Comparativa Completa</h2>

    <div style="overflow-x: auto; margin-top: 2rem;">
      <table class="table" style="min-width: 800px;">
        <thead>
          <tr>
            <th style="width: 30%;">Característica</th>
            <th style="width: 35%; background-color: #ECFDF5; color: #065F46;">SOFOM ER (Entidad Regulada)</th>
            <th style="width: 35%; background-color: #EFF6FF; color: #1E40AF;">SOFOM ENR (Entidad No Regulada)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Capital Social Mínimo</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>$50,000,000 MXN</strong><br>
              <small>Ajustado por inflación anualmente. 100% exhibido.</small>
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>$50,000 MXN</strong><br>
              <small>Fijo desde 2006.</small>
            </td>
          </tr>
          <tr>
            <td><strong>Nivel de Supervisión</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>Supervisión Integral CNBV</strong><br>
              • Operación y solvencia<br>
              • Gobierno corporativo<br>
              • Administración de riesgos<br>
              • Tecnología e infraestructura<br>
              • PLD/FT
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>Supervisión Solo PLD/FT</strong><br>
              • Prevención Lavado de Dinero<br>
              • Financiamiento al Terrorismo<br>
              • Reportes trimestrales CNBV
            </td>
          </tr>
          <tr>
            <td><strong>Formato RIPS</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>Formato F41 (Integral)</strong><br>
              • Reportes mensuales<br>
              • ~180 campos regulatorios<br>
              • Operación + capital + riesgo + PLD/FT + gobierno
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>Formato F36 (PLD/FT)</strong><br>
              • Reportes trimestrales<br>
              • ~45 campos PLD/FT<br>
              • Solo operaciones relevantes, inusuales, preocupantes
            </td>
          </tr>
          <tr>
            <td><strong>Índices de Capitalización</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>Obligatorios (CNBV)</strong><br>
              • ICAP ≥ 10%<br>
              • Tier 1 / Capital Básico ≥ 6%<br>
              • Reservas preventivas obligatorias<br>
              • Reportes mensuales a CNBV
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>No Obligatorios</strong><br>
              • Sin requerimientos formales CNBV<br>
              • Recomendado: ICAP ≥ 8-12% (buenas prácticas)<br>
              • Decisión interna
            </td>
          </tr>
          <tr>
            <td><strong>Gobierno Corporativo</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>Estricto (DCG CNBV)</strong><br>
              • Consejo de Administración (mínimo 5)<br>
              • Comités: Auditoría, Riesgos, PLD/FT<br>
              • Oficial de Cumplimiento certificado<br>
              • Auditoría Externa Big Four obligatoria<br>
              • Director General certificado CNBV
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>Flexible (Ley General)</strong><br>
              • Órgano de administración (mínimo 1)<br>
              • Comité PLD/FT (obligatorio)<br>
              • Oficial de Cumplimiento (certificado)<br>
              • Auditoría Externa (recomendada)
            </td>
          </tr>
          <tr>
            <td><strong>Acceso a Fondeo</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>Privilegiado</strong><br>
              • Banco de México (Facilidad Liquidez)<br>
              • Banca de desarrollo (FIRA, NAFIN, SHF)<br>
              • Inversionistas institucionales<br>
              • Emisión de deuda en mercados<br>
              • Tasas preferenciales (2-4% menores)
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>Limitado</strong><br>
              • Banca comercial (líneas tradicionales)<br>
              • Fondos privados<br>
              • Inversionistas ángeles<br>
              • Family offices<br>
              • Tasas más altas
            </td>
          </tr>
          <tr>
            <td><strong>Costos Operativos Anuales</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>$15M - $50M+ MXN/año</strong><br>
              • Compliance: $5M-$15M<br>
              • Auditoría: $1M-$3M<br>
              • Tecnología: $3M-$10M<br>
              • Personal: $6M-$22M
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>$500K - $5M MXN/año</strong><br>
              • Compliance PLD/FT: $180K-$800K<br>
              • Auditoría (opcional): $200K-$600K<br>
              • Software PLD/FT: $120K-$500K<br>
              • Personal: $100K-$3M
            </td>
          </tr>
          <tr>
            <td><strong>Tiempo de Constitución</strong></td>
            <td style="background-color: #F0FDF4;">
              <strong>12-24 meses</strong><br>
              • Autorización CNBV: 9-18 meses<br>
              • Due diligence exhaustivo<br>
              • Certificación de directivos<br>
              • Implementación gobierno corporativo
            </td>
            <td style="background-color: #F0F9FF;">
              <strong>2-6 meses</strong><br>
              • Registro CONDUSEF: 1-3 meses<br>
              • Trámites mercantiles estándar<br>
              • Sin autorización CNBV<br>
              • Menor complejidad regulatoria
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Casos de Uso -->
<section class="section" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="section-title">¿Cuándo Elegir Cada Modelo?</h2>

    <div class="grid grid-2" style="margin-top: 2rem; gap: 2rem;">
      <div style="background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); padding: 2rem; border-radius: 12px; border: 2px solid #10B981;">
        <h3 style="color: #065F46; font-size: 1.5rem; margin-bottom: 1.5rem;">Elige SOFOM ER si...</h3>
        <ul style="line-height: 1.8; margin: 0;">
          <li><strong>Portafolio grande:</strong> Superas $500M-$1B MXN en activos</li>
          <li><strong>Acceso a mercados de capital:</strong> Necesitas emisión de deuda o certificados bursátiles</li>
          <li><strong>Salida a bolsa (IPO):</strong> Planeas cotizar en BMV o SIC</li>
          <li><strong>Sector regulado:</strong> Hipotecario, arrendamiento puro, automotriz corporativo</li>
          <li><strong>Clientes institucionales:</strong> Gobierno, corporativos multinacionales</li>
          <li><strong>Fondeo Banco de México:</strong> Acceso a Facilidad de Liquidez</li>
        </ul>
        <div class="alert alert-success" style="margin-top: 1.5rem;">
          <strong>Casos Reales:</strong> Crédito Real (IPO 2013, $15B), Financiera Independencia (IPO 2014, $8B), Unifin (IPO 2015, $10B).
        </div>
      </div>

      <div style="background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); padding: 2rem; border-radius: 12px; border: 2px solid #3B82F6;">
        <h3 style="color: #1E40AF; font-size: 1.5rem; margin-bottom: 1.5rem;">Elige SOFOM ENR si...</h3>
        <ul style="line-height: 1.8; margin: 0;">
          <li><strong>Portafolio pequeño-mediano:</strong> Menos de $200M MXN en cartera</li>
          <li><strong>Agilidad operativa:</strong> Velocidad de respuesta e innovación sin restricciones</li>
          <li><strong>Costos controlados:</strong> Estructura lean con costos 10-20x menores</li>
          <li><strong>Fondeo privado suficiente:</strong> Family offices, fondos privados</li>
          <li><strong>Nicho especializado:</strong> Equipos agrícolas, crédito PyME regional, factoraje</li>
          <li><strong>Escalamiento progresivo:</strong> Crecer como ENR 5-10 años antes de convertir a ER</li>
        </ul>
        <div class="alert alert-info" style="margin-top: 1.5rem;">
          <strong>Casos Reales:</strong> Konfío (ENR, $1.3B fondeo), Kueski (ENR, Top 250 Fintech), Crédito Para Ti (ENR, #1 FOVISSSTE).
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Comparativa de Catálogos CNBV -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Catálogos CNBV: ¿Qué usa cada tipo?</h2>
    <p class="section-subtitle">Ambos tipos (ER y ENR) usan los mismos 7 catálogos PLD/FT de la CNBV, pero difieren en catálogos operativos.</p>

    <div class="grid grid-2" style="margin-top: 2rem; gap: 2rem;">
      <!-- Catálogos Comunes -->
      <div style="background-color: #FEF3C7; padding: 2rem; border-radius: 12px; border: 2px solid #F59E0B;">
        <h3 style="color: #92400E; margin-bottom: 1.5rem;">Catálogos Comunes (PLD/FT)</h3>
        <p style="margin-bottom: 1rem;"><strong>Aplican para ER y ENR:</strong></p>
        <ol style="line-height: 1.8; margin: 0;">
          <li><strong>Actividad Económica</strong> - 127 actividades</li>
          <li><strong>Localidades</strong> - 378,000+ localidades INEGI</li>
          <li><strong>Tipo de Reporte</strong> - 8 tipos (Relevantes, Inusuales, Preocupantes)</li>
          <li><strong>Monedas</strong> - 180 códigos</li>
          <li><strong>Tipo de Operación Asesor</strong> - 12 categorías</li>
          <li><strong>Instrumento Monetario</strong> - 15 tipos (efectivo, cheque, transferencia)</li>
          <li><strong>PPE y Listas Bloqueadas</strong> - OFAC, ONU, SAT 69-B</li>
        </ol>
        <p style="margin-top: 1rem; text-align: center;">
          <a href="catalogos-rips.php" class="btn btn-success">Ver Catálogos ENR F36 →</a>
        </p>
      </div>

      <!-- Catálogos Exclusivos ER -->
      <div style="background-color: #ECFDF5; padding: 2rem; border-radius: 12px; border: 2px solid #10B981;">
        <h3 style="color: #065F46; margin-bottom: 1.5rem;">Catálogos Exclusivos SOFOM ER</h3>
        <p style="margin-bottom: 1rem;"><strong>Adicionales para supervisión integral:</strong></p>
        <ul style="line-height: 1.8; margin: 0;">
          <li><strong>Calificación de Cartera</strong> - 5 categorías (A, B, C, D, E)</li>
          <li><strong>Tipo de Garantía</strong> - 18 clasificaciones</li>
          <li><strong>Sector Económico Cliente</strong> - 21 sectores</li>
          <li><strong>Producto Crediticio</strong> - 28 tipos</li>
          <li><strong>Índices de Capitalización</strong> - ICAP, Tier 1</li>
          <li><strong>Gobierno Corporativo</strong> - Comités, consejeros</li>
          <li><strong>Indicadores de Liquidez</strong> - LCR, NSFR</li>
        </ul>
        <p style="margin-top: 1rem; text-align: center;">
          <a href="catalogos-rips.php" class="btn" style="background: #10B981; color: white;">Ver Catálogos ER F41 →</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Proceso de Conversión ENR → ER -->
<section class="section" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="section-title">Conversión de SOFOM ENR a ER</h2>
    <p class="section-subtitle">¿Ya tienes una SOFOM ENR y quieres convertirla en ER? Aquí está el proceso completo.</p>

    <div style="background: white; padding: 2rem; border-radius: 12px; margin-top: 2rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
      <h3 style="margin-bottom: 1.5rem;">Requisitos y Timeline</h3>

      <div style="border-left: 3px solid #3B82F6; padding-left: 2rem; margin-left: 1rem;">
        <!-- Fase 1 -->
        <div style="margin-bottom: 2rem; position: relative;">
          <h4 style="color: #3B82F6; margin-bottom: 0.5rem;">Mes 1-3: Preparación Inicial</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Aumento de capital social:</strong> De $50K a $50M+</li>
            <li><strong>Asesoría legal especializada:</strong> $500K-$1M</li>
            <li><strong>Auditoría pre-conversión:</strong> Big Four ($300K-$800K)</li>
            <li><strong>Plan de negocio:</strong> Proyección 3-5 años</li>
          </ul>
        </div>

        <!-- Fase 2 -->
        <div style="margin-bottom: 2rem; position: relative;">
          <h4 style="color: #10B981; margin-bottom: 0.5rem;">Mes 4-9: Implementación Gobierno Corporativo</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Consejo de Administración:</strong> Mínimo 5 consejeros (2 independientes)</li>
            <li><strong>Comités obligatorios:</strong> Auditoría, Riesgos, PLD/FT</li>
            <li><strong>Certificación de directivos:</strong> Examen CNBV</li>
            <li><strong>SAIR completo:</strong> Crédito, mercado, liquidez, operacional</li>
            <li><strong>Software regulatorio:</strong> ERP + RIPS F41 ($1M-$3M)</li>
          </ul>
        </div>

        <!-- Fase 3 -->
        <div style="margin-bottom: 2rem; position: relative;">
          <h4 style="color: #F59E0B; margin-bottom: 0.5rem;">Mes 10-15: Solicitud Autorización CNBV</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Expediente autorización:</strong> ~500 páginas documentación</li>
            <li><strong>Due diligence CNBV:</strong> Investigación accionistas y directivos</li>
            <li><strong>Visita de inspección:</strong> Verificación in-situ</li>
            <li><strong>Respuesta observaciones:</strong> 2-4 rondas (3-6 meses)</li>
          </ul>
        </div>

        <!-- Fase 4 -->
        <div style="position: relative;">
          <h4 style="color: #8B5CF6; margin-bottom: 0.5rem;">Mes 16-18: Autorización y Operación</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Oficio autorización CNBV:</strong> Publicación en DOF</li>
            <li><strong>Migración sistemas:</strong> De F36 trimestral a F41 mensual</li>
            <li><strong>Capacitación personal:</strong> Nuevos requerimientos</li>
            <li><strong>Primera supervisión:</strong> Visita CNBV en 6 meses</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Costos de Conversión -->
    <div style="background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); padding: 2rem; border-radius: 12px; margin-top: 2rem; border: 2px solid #F59E0B;">
      <h3 style="color: #92400E; margin-bottom: 1rem;">Costo Total: $2M - $5M MXN</h3>
      <div class="grid grid-2" style="gap: 1rem;">
        <div>
          <ul style="line-height: 1.8; margin: 0;">
            <li>Asesoría legal: $500K-$1M</li>
            <li>Auditoría Big Four: $300K-$800K</li>
            <li>Software regulatorio: $1M-$3M</li>
            <li>Certificaciones: $100K-$300K</li>
          </ul>
        </div>
        <div>
          <ul style="line-height: 1.8; margin: 0;">
            <li>Consultoría gobierno: $400K-$800K</li>
            <li>Infraestructura tech: $500K-$1.5M</li>
            <li>Capacitación: $150K-$400K</li>
            <li>Contingencia: $200K-$500K</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQs -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Preguntas Frecuentes</h2>

    <div style="margin-top: 2rem;">
      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cuál es la diferencia principal entre SOFOM ER y ENR?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          La diferencia principal es el <strong>nivel de supervisión</strong>: las SOFOM ER tienen <strong>supervisión integral de la CNBV</strong> en operación, solvencia, gobierno corporativo y tecnología; mientras que las SOFOM ENR <strong>solo son supervisadas en PLD/FT</strong>. Las ER requieren <strong>$50M de capital social</strong> vs <strong>$50K</strong> de las ENR.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Las SOFOM ER pueden captar recursos del público?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>No</strong>, ninguna SOFOM puede captar recursos del público directamente. Sin embargo, las SOFOM ER tienen <strong>ventajas significativas en fondeo</strong>: acceso al Banco de México, mejores condiciones en banca de desarrollo, y mayor confianza de inversionistas institucionales. Las ER pueden emitir <strong>certificados bursátiles</strong> en BMV/BIVA con tasas 2-4% menores.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Se puede convertir una SOFOM ENR en ER?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>Sí</strong>, mediante autorización de la CNBV. El proceso toma <strong>9-18 meses</strong> y cuesta <strong>$2M-$5M MXN</strong>. Casos reales: Crédito Real (ENR → ER 2006), Financiera Independencia (ENR → ER 2007), Unifin (ENR → ER 2006). Todas lograron IPO posterior.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Qué formato RIPS usa cada tipo de SOFOM?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>SOFOM ER</strong> reporta con <strong>formato F41 (integral)</strong>: ~180 campos, reportes <strong>mensuales</strong>. <strong>SOFOM ENR</strong> reporta con <strong>formato F36 (solo PLD/FT)</strong>: ~45 campos, reportes <strong>trimestrales</strong>. Ambos usan los mismos 7 catálogos PLD/FT de la CNBV.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cuándo conviene ser SOFOM ER en lugar de ENR?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          Conviene ser SOFOM ER cuando: 1) El portafolio supera $500M-$1B MXN, 2) Planeas salir a bolsa o buscar inversionistas institucionales, 3) Necesitas diferenciación competitiva en sectores regulados, 4) Tienes estrategia de adquisiciones, 5) Tus clientes son corporativos que requieren supervisión CNBV.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cuánto cuesta operar una SOFOM ER vs ENR anualmente?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>SOFOM ER:</strong> $15M-$50M+ MXN/año (compliance $5M-$15M, auditoría $1M-$3M, tecnología $3M-$10M, personal $6M-$22M). <strong>SOFOM ENR:</strong> $500K-$5M MXN/año (compliance PLD/FT $180K-$800K, auditoría $200K-$600K, software $120K-$500K, personal $100K-$3M). Diferencia de <strong>30-100x en costos operativos</strong>.
        </div>
      </details>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section class="section" style="background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); padding: 4rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="font-size: 2rem; margin-bottom: 1rem; font-weight: 700; color: var(--primary-900);">¿Necesitas Asesoría Personalizada?</h2>
    <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto; line-height: 1.6; color: var(--neutral-700);">
      La decisión entre ER y ENR depende de tu modelo de negocio, portafolio proyectado, y fuentes de fondeo. Contáctanos para análisis detallado.
    </p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
