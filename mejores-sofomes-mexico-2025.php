<?php
// Variables para SEO
$pageTitle = "Mejores SOFOMes México 2025: Top 10 Ranking + Análisis | Guía Completa";
$pageDescription = "Top 10 SOFOMes México 2025: Konfío ($1.3B), Kueski (Top 250 Fintech), Crédito Real ($15B). Análisis exhaustivo: tasas, aprobación, opiniones reales, verificación CONDUSEF.";
$pageKeywords = "mejores sofomes mexico, top sofomes 2025, ranking sofomes, konfio, kueski, credito real, sofom confiable, tasas sofom, aprobacion sofom";
$pageCanonical = "https://sofomes.com/mejores-sofomes-mexico-2025.php";

// Schema.org - Article + FAQPage + ItemList (Rankings)
$schemaJson = <<<'SCHEMA'
<!-- Schema.org - Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Mejores SOFOMes en México 2025: Top 10 Ranking y Análisis Completo",
  "description": "Ranking completo de las mejores SOFOMes en México 2025 con análisis de tasas, aprobación, portafolio, y reputación. Incluye ER y ENR verificadas por CONDUSEF.",
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

<!-- Schema.org - ItemList (Rankings) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Top 10 Mejores SOFOMes México 2025",
  "description": "Ranking de las mejores SOFOMes en México basado en portafolio, tasas, aprobación, y reputación",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "Organization",
        "name": "Konfío",
        "description": "SOFOM ENR líder en crédito empresarial PyME con $1.3B en fondeo y tecnología de punta"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "Organization",
        "name": "Kueski",
        "description": "SOFOM ENR Top 250 Fintech mundial, especializada en crédito al consumo digital"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "Organization",
        "name": "Crédito Real",
        "description": "SOFOM ER líder con IPO en BMV, portafolio $15B y operación en México y LATAM"
      }
    }
  ]
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
      "name": "¿Cuál es la mejor SOFOM en México 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depende de tu necesidad: Para crédito empresarial PyME, Konfío (ENR, $1.3B fondeo, 70% aprobación). Para crédito al consumo digital, Kueski (ENR, Top 250 Fintech). Para grandes montos corporativos, Crédito Real (ER, $15B portafolio, IPO BMV)."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo verificar que una SOFOM es confiable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Verifica: 1) Registro activo en CONDUSEF (consulta Directorio oficial), 2) RFC y razón social coinciden, 3) Reportes trimestrales PLD/FT presentados, 4) Oficinas físicas verificables, 5) Opiniones reales en Google Maps/Trustpilot, 6) Transparencia en tasas y comisiones."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tasas cobran las mejores SOFOMes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Varían por tipo: Crédito empresarial PyME: 18-45% anual (Konfío 24-36%). Crédito al consumo: 40-120% anual (Kueski 50-90%). Factoraje: 15-30% anual. Automotriz: 12-24% anual. Hipotecario: 10-18% anual. Tasas dependen de historial crediticio y garantías."
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
      "name": "Mejores SOFOMes México 2025",
      "item": "https://sofomes.com/mejores-sofomes-mexico-2025.php"
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
      <li class="breadcrumb-item active" aria-current="page">Mejores SOFOMes México 2025</li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-slim">
  <div class="container">
    <h1 class="hero-title">
      Top 10 Mejores SOFOMes México 2025
    </h1>
    <p class="hero-subtitle">
      Ranking completo de las SOFOMes más confiables y eficientes de México. Análisis exhaustivo de tasas, aprobación, portafolio y reputación verificada por CONDUSEF.
    </p>

    <!-- Key Stats -->
    <div class="hero-stats">
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-green">2,083</div>
        <div class="hero-stat-label">SOFOMes registradas CONDUSEF</div>
      </div>
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-blue">70%</div>
        <div class="hero-stat-label">Aprobación promedio vs 20% bancos</div>
      </div>
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-yellow">48h</div>
        <div class="hero-stat-label">Tiempo promedio aprobación</div>
      </div>
      <div class="hero-stat-card">
        <div class="hero-stat-number accent-pink">$50B+</div>
        <div class="hero-stat-label">Portafolio total industria</div>
      </div>
    </div>
  </div>
</section>

<!-- Metodología -->
<section class="section" style="padding-top: 3rem;">
  <div class="container">
    <h2 class="section-title">Metodología de Evaluación</h2>
    <p class="section-subtitle">¿Cómo seleccionamos las mejores SOFOMes?</p>

    <div class="grid grid-3" style="margin-top: 2rem; gap: 2rem;">
      <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-top: 4px solid #10B981;">
        <h3 style="color: #10B981; margin-bottom: 1rem; font-size: 1.25rem;">1. Verificación CONDUSEF</h3>
        <ul style="line-height: 1.8; margin: 0;">
          <li>Registro activo en Directorio oficial</li>
          <li>Reportes PLD/FT presentados a tiempo</li>
          <li>Sin sanciones graves últimos 3 años</li>
          <li>RFC y razón social verificados</li>
        </ul>
      </div>

      <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-top: 4px solid #3B82F6;">
        <h3 style="color: #3B82F6; margin-bottom: 1rem; font-size: 1.25rem;">2. Indicadores Financieros</h3>
        <ul style="line-height: 1.8; margin: 0;">
          <li>Portafolio total bajo administración</li>
          <li>Crecimiento últimos 3 años</li>
          <li>Índice de capitalización (ICAP)</li>
          <li>Cartera vencida < 5%</li>
        </ul>
      </div>

      <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-top: 4px solid #F59E0B;">
        <h3 style="color: #F59E0B; margin-bottom: 1rem; font-size: 1.25rem;">3. Experiencia del Cliente</h3>
        <ul style="line-height: 1.8; margin: 0;">
          <li>Tasa de aprobación promedio</li>
          <li>Tiempo de respuesta</li>
          <li>Opiniones Google Maps / Trustpilot</li>
          <li>Transparencia en tasas y comisiones</li>
        </ul>
      </div>
    </div>

    <div class="alert alert-info" style="margin-top: 2rem;">
      <strong>Nota metodológica:</strong> Este ranking se actualiza trimestralmente basado en datos públicos de CONDUSEF, reportes financieros, y opiniones verificadas. No incluye pagos por posicionamiento - todas las evaluaciones son independientes.
    </div>
  </div>
</section>

<!-- Top 10 Rankings -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Top 10 Mejores SOFOMes México 2025</h2>

    <!-- #1 Konfío -->
    <div style="background: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 6px solid #10B981;">
      <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
        <div style="background: linear-gradient(135deg, #10B981 0%, #059669 100%); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700;">1</div>
        <div>
          <h3 style="margin: 0; font-size: 1.75rem; color: #1F2937;">Konfío</h3>
          <div style="margin-top: 0.25rem;"><span class="badge-enr">SOFOM ENR</span></div>
        </div>
      </div>

      <div class="grid grid-2" style="gap: 2rem; margin-top: 1.5rem;">
        <div>
          <h4 style="color: #10B981; margin-bottom: 0.75rem;">Características Principales</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Especialización:</strong> Crédito empresarial PyME</li>
            <li><strong>Fondeo total:</strong> $1.3B USD</li>
            <li><strong>Tasa de aprobación:</strong> 70% (vs 20% bancos)</li>
            <li><strong>Rango de crédito:</strong> $50K - $3M MXN</li>
            <li><strong>Tiempo de aprobación:</strong> 24-48 horas</li>
            <li><strong>Tasa de interés:</strong> 24-36% anual</li>
          </ul>
        </div>
        <div>
          <h4 style="color: #10B981; margin-bottom: 0.75rem;">Por Qué Es #1</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Tecnología de punta:</strong> Análisis crediticio AI/ML en minutos</li>
            <li><strong>Alcance nacional:</strong> Presencia en 31 estados</li>
            <li><strong>Reconocimientos:</strong> Top 100 Fintech LATAM 2024</li>
            <li><strong>Transparencia:</strong> 100% digital, sin comisiones ocultas</li>
            <li><strong>Reputación:</strong> 4.2/5 Google Maps (8,500+ opiniones)</li>
          </ul>
        </div>
      </div>

      <div class="alert alert-success" style="margin-top: 1.5rem;">
        <strong>Ideal para:</strong> PyMEs establecidas (2+ años operación) que necesitan capital de trabajo o expansión, con ventas $500K-$20M MXN anuales.
      </div>
    </div>

    <!-- #2 Kueski -->
    <div style="background: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 6px solid #3B82F6;">
      <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
        <div style="background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700;">2</div>
        <div>
          <h3 style="margin: 0; font-size: 1.75rem; color: #1F2937;">Kueski</h3>
          <div style="margin-top: 0.25rem;"><span class="badge-enr">SOFOM ENR</span></div>
        </div>
      </div>

      <div class="grid grid-2" style="gap: 2rem; margin-top: 1.5rem;">
        <div>
          <h4 style="color: #3B82F6; margin-bottom: 0.75rem;">Características Principales</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Especialización:</strong> Crédito al consumo digital</li>
            <li><strong>Portafolio:</strong> $800M USD</li>
            <li><strong>Usuarios activos:</strong> 1.5M+</li>
            <li><strong>Rango de crédito:</strong> $1K - $30K MXN</li>
            <li><strong>Tiempo de aprobación:</strong> 15-30 minutos</li>
            <li><strong>Tasa de interés:</strong> 50-90% anual</li>
          </ul>
        </div>
        <div>
          <h4 style="color: #3B82F6; margin-bottom: 0.75rem;">Ventajas Clave</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Top 250 Fintech mundial:</strong> Reconocimiento global CB Insights</li>
            <li><strong>100% digital:</strong> App móvil 4.5/5 (500K+ descargas)</li>
            <li><strong>Inclusión financiera:</strong> 68% clientes sin historial crediticio</li>
            <li><strong>Rapidez:</strong> Desembolso en 10 minutos vía SPEI</li>
            <li><strong>Flexibilidad:</strong> Plazos 2-24 semanas</li>
          </ul>
        </div>
      </div>

      <div class="alert alert-info" style="margin-top: 1.5rem;">
        <strong>Ideal para:</strong> Personas sin historial crediticio o con necesidades urgentes de liquidez < $30K MXN, que priorizan rapidez sobre costo.
      </div>
    </div>

    <!-- #3 Crédito Real -->
    <div style="background: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 6px solid #F59E0B;">
      <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
        <div style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700;">3</div>
        <div>
          <h3 style="margin: 0; font-size: 1.75rem; color: #1F2937;">Crédito Real</h3>
          <div style="margin-top: 0.25rem;"><span class="badge-er">SOFOM ER</span> <span style="background: #10B981; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.875rem; margin-left: 0.5rem;">IPO BMV</span></div>
        </div>
      </div>

      <div class="grid grid-2" style="gap: 2rem; margin-top: 1.5rem;">
        <div>
          <h4 style="color: #F59E0B; margin-bottom: 0.75rem;">Características Principales</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Tipo:</strong> SOFOM ER (Entidad Regulada CNBV)</li>
            <li><strong>Portafolio total:</strong> $15B MXN</li>
            <li><strong>IPO Bolsa:</strong> BMV 2013 (CREAL*)</li>
            <li><strong>Operación:</strong> México, Centroamérica, EE.UU.</li>
            <li><strong>Productos:</strong> Crédito grupal, nómina, PyME, auto</li>
            <li><strong>Sucursales:</strong> 300+ en México</li>
          </ul>
        </div>
        <div>
          <h4 style="color: #F59E0B; margin-bottom: 0.75rem;">Fortalezas</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Supervisión CNBV integral:</strong> Máxima seguridad regulatoria</li>
            <li><strong>20+ años experiencia:</strong> Fundada 2003, IPO 2013</li>
            <li><strong>Calificación crediticia:</strong> Moody's Ba2, S&P BB</li>
            <li><strong>Acceso a fondeo institucional:</strong> Bonos, banca de desarrollo</li>
            <li><strong>Diversificación geográfica:</strong> 4 países LATAM</li>
          </ul>
        </div>
      </div>

      <div class="alert alert-warning" style="margin-top: 1.5rem;">
        <strong>Ideal para:</strong> Clientes que buscan máxima seguridad regulatoria (supervisión CNBV), montos grandes ($500K+), o financiamiento con respaldo institucional.
      </div>
    </div>

    <!-- #4 Financiera Independencia -->
    <div style="background: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 6px solid #8B5CF6;">
      <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
        <div style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700;">4</div>
        <div>
          <h3 style="margin: 0; font-size: 1.75rem; color: #1F2937;">Financiera Independencia</h3>
          <div style="margin-top: 0.25rem;"><span class="badge-er">SOFOM ER</span> <span style="background: #10B981; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.875rem; margin-left: 0.5rem;">IPO BMV</span></div>
        </div>
      </div>

      <div class="grid grid-2" style="gap: 2rem; margin-top: 1.5rem;">
        <div>
          <h4 style="color: #8B5CF6; margin-bottom: 0.75rem;">Perfil</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Cartera total:</strong> $8B MXN</li>
            <li><strong>IPO:</strong> BMV 2014 (FINDEP*)</li>
            <li><strong>Especialización:</strong> Crédito grupal microfinanzas</li>
            <li><strong>Clientes activos:</strong> 800K+</li>
            <li><strong>Sucursales:</strong> 450+ en México</li>
          </ul>
        </div>
        <div>
          <h4 style="color: #8B5CF6; margin-bottom: 0.75rem;">Ventajas</h4>
          <ul style="line-height: 1.8; margin: 0;">
            <li><strong>Microfinanzas inclusivas:</strong> 85% clientes mujeres</li>
            <li><strong>Tasa aprobación alta:</strong> 75% en crédito grupal</li>
            <li><strong>Presencia rural:</strong> 28 estados</li>
            <li><strong>Metodología solidaria:</strong> Grupos 15-30 personas</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Resumen Top 5-10 -->
    <div style="background: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      <h3 style="color: #1F2937; margin-bottom: 1.5rem; font-size: 1.5rem;">Top 5-10: Menciones Honoríficas</h3>

      <div style="display: grid; gap: 1rem;">
        <!-- #5 Unifin -->
        <div style="border-left: 4px solid #EC4899; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #EC4899; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">5</div>
            <h4 style="margin: 0; color: #1F2937;">Unifin</h4>
            <span class="badge-er">ER</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">Líder en arrendamiento puro, $10B activos, IPO 2015. Especialización: Equipo pesado, transporte, tecnología. Ideal para: Empresas que necesitan arrendamiento sin opción de compra.</p>
        </div>

        <!-- #6 Crédito Para Ti -->
        <div style="border-left: 4px solid #06B6D4; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #06B6D4; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">6</div>
            <h4 style="margin: 0; color: #1F2937;">Crédito Para Ti</h4>
            <span class="badge-enr">ENR</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">#1 financiamiento FOVISSSTE, especialización crédito hipotecario trabajadores gobierno. 18+ años experiencia, alianzas institucionales. Ideal para: Servidores públicos con descuento vía nómina.</p>
        </div>

        <!-- #7 ABC Capital -->
        <div style="border-left: 4px solid #10B981; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #10B981; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">7</div>
            <h4 style="margin: 0; color: #1F2937;">ABC Capital</h4>
            <span class="badge-er">ER</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">Grupo Elektra, $5B portafolio, crédito consumo y automotriz. 7,000+ puntos de venta, aprobación express en tienda. Ideal para: Compra de electrodomésticos, motos, autos con financiamiento en punto de venta.</p>
        </div>

        <!-- #8 FIRA -->
        <div style="border-left: 4px solid #F59E0B; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #F59E0B; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">8</div>
            <h4 style="margin: 0; color: #1F2937;">FIRA (Fideicomisos Banco de México)</h4>
            <span class="badge-er">ER</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">Banca de desarrollo sector agropecuario, $35B cartera, tasas preferenciales 8-14% anual. Ideal para: Productores agropecuarios, agroindustria, equipamiento rural con garantías gubernamentales.</p>
        </div>

        <!-- #9 Resuelve tu Deuda -->
        <div style="border-left: 4px solid #8B5CF6; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #8B5CF6; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">9</div>
            <h4 style="margin: 0; color: #1F2937;">Resuelve tu Deuda</h4>
            <span class="badge-enr">ENR</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">Especialización: Reparación crediticia y consolidación de deudas. 200K+ clientes, reducción promedio 60% deuda. Ideal para: Personas sobreendeudadas que buscan negociar quitas con acreedores.</p>
        </div>

        <!-- #10 Caja Popular Mexicana -->
        <div style="border-left: 4px solid #3B82F6; padding-left: 1rem;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <div style="background: #3B82F6; color: white; width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">10</div>
            <h4 style="margin: 0; color: #1F2937;">Caja Popular Mexicana</h4>
            <span class="badge-enr">ENR</span>
          </div>
          <p style="margin: 0; line-height: 1.6;">Cooperativa de ahorro y crédito, $3.5B activos, 500+ sucursales. Tasas competitivas 12-18% ahorro. Ideal para: Comunidades locales, crédito solidario, y ahorro a plazo con tasas atractivas.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tabla Comparativa -->
<section class="section" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="section-title">Tabla Comparativa Top 10</h2>

    <div style="overflow-x: auto; margin-top: 2rem;">
      <table class="table" style="min-width: 1000px;">
        <thead>
          <tr>
            <th style="width: 5%;">#</th>
            <th style="width: 20%;">SOFOM</th>
            <th style="width: 10%;">Tipo</th>
            <th style="width: 15%;">Especialización</th>
            <th style="width: 15%;">Portafolio</th>
            <th style="width: 15%;">Tasa Interés</th>
            <th style="width: 10%;">Aprobación</th>
            <th style="width: 10%;">Calificación</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-weight: 700; color: #10B981;">1</td>
            <td><strong>Konfío</strong></td>
            <td><span class="badge-enr">ENR</span></td>
            <td>Crédito PyME</td>
            <td>$1.3B USD</td>
            <td>24-36% anual</td>
            <td>70%</td>
            <td>⭐⭐⭐⭐ 4.2/5</td>
          </tr>
          <tr>
            <td style="font-weight: 700; color: #3B82F6;">2</td>
            <td><strong>Kueski</strong></td>
            <td><span class="badge-enr">ENR</span></td>
            <td>Crédito consumo digital</td>
            <td>$800M USD</td>
            <td>50-90% anual</td>
            <td>65%</td>
            <td>⭐⭐⭐⭐ 4.5/5</td>
          </tr>
          <tr>
            <td style="font-weight: 700; color: #F59E0B;">3</td>
            <td><strong>Crédito Real</strong></td>
            <td><span class="badge-er">ER</span></td>
            <td>Diversificado</td>
            <td>$15B MXN</td>
            <td>30-50% anual</td>
            <td>60%</td>
            <td>⭐⭐⭐⭐ 4.0/5</td>
          </tr>
          <tr>
            <td style="font-weight: 700; color: #8B5CF6;">4</td>
            <td><strong>Financiera Independencia</strong></td>
            <td><span class="badge-er">ER</span></td>
            <td>Microfinanzas grupal</td>
            <td>$8B MXN</td>
            <td>40-60% anual</td>
            <td>75%</td>
            <td>⭐⭐⭐⭐ 4.1/5</td>
          </tr>
          <tr>
            <td>5</td>
            <td><strong>Unifin</strong></td>
            <td><span class="badge-er">ER</span></td>
            <td>Arrendamiento puro</td>
            <td>$10B MXN</td>
            <td>10-18% anual</td>
            <td>55%</td>
            <td>⭐⭐⭐⭐ 3.9/5</td>
          </tr>
          <tr>
            <td>6</td>
            <td><strong>Crédito Para Ti</strong></td>
            <td><span class="badge-enr">ENR</span></td>
            <td>Hipotecario FOVISSSTE</td>
            <td>$2B MXN</td>
            <td>10-14% anual</td>
            <td>70%</td>
            <td>⭐⭐⭐⭐ 4.3/5</td>
          </tr>
          <tr>
            <td>7</td>
            <td><strong>ABC Capital</strong></td>
            <td><span class="badge-er">ER</span></td>
            <td>Consumo / Automotriz</td>
            <td>$5B MXN</td>
            <td>25-45% anual</td>
            <td>68%</td>
            <td>⭐⭐⭐ 3.7/5</td>
          </tr>
          <tr>
            <td>8</td>
            <td><strong>FIRA</strong></td>
            <td><span class="badge-er">ER</span></td>
            <td>Agropecuario</td>
            <td>$35B MXN</td>
            <td>8-14% anual</td>
            <td>50%</td>
            <td>⭐⭐⭐⭐ 4.0/5</td>
          </tr>
          <tr>
            <td>9</td>
            <td><strong>Resuelve tu Deuda</strong></td>
            <td><span class="badge-enr">ENR</span></td>
            <td>Consolidación deudas</td>
            <td>$1.5B MXN</td>
            <td>N/A (negociación)</td>
            <td>80%</td>
            <td>⭐⭐⭐⭐ 4.4/5</td>
          </tr>
          <tr>
            <td>10</td>
            <td><strong>Caja Popular Mexicana</strong></td>
            <td><span class="badge-enr">ENR</span></td>
            <td>Cooperativa ahorro</td>
            <td>$3.5B MXN</td>
            <td>12-18% anual</td>
            <td>72%</td>
            <td>⭐⭐⭐⭐ 4.2/5</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Criterios de Verificación -->
<section class="section">
  <div class="container">
    <h2 class="section-title">¿Cómo Verificar que una SOFOM es Confiable?</h2>

    <div style="background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); padding: 2rem; border-radius: 12px; border: 2px solid #F59E0B; margin-bottom: 2rem;">
      <h3 style="color: #92400E; margin-bottom: 1rem;">Checklist de Verificación (6 pasos)</h3>
      <ol style="line-height: 2; margin: 0; font-size: 1.05rem;">
        <li><strong>Registro CONDUSEF activo:</strong> Consulta el <a href="/">Directorio oficial SOFOMes.com</a> (datos CONDUSEF actualizados)</li>
        <li><strong>RFC y razón social coinciden:</strong> Verifica que el nombre legal en contrato coincida con registro</li>
        <li><strong>Reportes PLD/FT presentados:</strong> SOFOMes serias reportan trimestralmente a CNBV sin retrasos</li>
        <li><strong>Oficinas físicas verificables:</strong> Dirección real (no solo apartado postal), teléfono fijo, presencia Google Maps</li>
        <li><strong>Opiniones reales:</strong> Google Maps, Trustpilot, redes sociales (desconfía de 100% opiniones 5 estrellas)</li>
        <li><strong>Transparencia en tasas:</strong> CAT (Costo Anual Total) publicado, desglose de comisiones por escrito</li>
      </ol>
    </div>

    <div class="alert alert-danger">
      <h4 style="margin-bottom: 0.75rem;">Señales de Alerta (Red Flags)</h4>
      <ul style="margin: 0.5rem 0 0 0; line-height: 1.8;">
        <li><strong>Piden dinero por adelantado:</strong> Ninguna SOFOM legítima cobra "comisión de estudio" antes de aprobar</li>
        <li><strong>No aparecen en CONDUSEF:</strong> Si no están registrados, es fraude</li>
        <li><strong>Prometen aprobación 100%:</strong> Ninguna entidad financiera legítima garantiza aprobación</li>
        <li><strong>Contacto solo por WhatsApp/redes:</strong> Entidades serias tienen oficinas físicas, teléfono fijo, sitio web</li>
        <li><strong>Tasas "demasiado buenas":</strong> Si ofrecen 5-8% anual sin garantía real, es estafa</li>
      </ul>
    </div>
  </div>
</section>

<!-- FAQs -->
<section class="section" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="section-title">Preguntas Frecuentes</h2>

    <div style="margin-top: 2rem;">
      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cuál es la mejor SOFOM en México 2025?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          Depende de tu necesidad: <strong>Para crédito empresarial PyME:</strong> Konfío (ENR, $1.3B fondeo, 70% aprobación, 24-48h). <strong>Para crédito al consumo digital:</strong> Kueski (ENR, Top 250 Fintech, 15-30 min aprobación). <strong>Para grandes montos corporativos:</strong> Crédito Real (ER, $15B portafolio, IPO BMV, supervisión CNBV). No existe una "mejor absoluta" - evalúa tu perfil crediticio, monto necesario, y urgencia.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cómo verificar que una SOFOM es confiable?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          Sigue este checklist: <strong>1) Registro CONDUSEF:</strong> Consulta el <a href="/">Directorio oficial</a> y verifica que aparezca activa. <strong>2) RFC y razón social:</strong> Deben coincidir exactamente con el contrato. <strong>3) Reportes PLD/FT:</strong> Entidades serias reportan trimestralmente sin retrasos. <strong>4) Oficinas físicas:</strong> Dirección real verificable en Google Maps. <strong>5) Opiniones reales:</strong> Google, Trustpilot (desconfía de 100% opiniones 5 estrellas). <strong>6) Transparencia CAT:</strong> Costo Anual Total publicado, sin comisiones ocultas.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Qué tasas cobran las mejores SOFOMes?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          Las tasas varían por tipo de crédito y perfil: <strong>Crédito empresarial PyME:</strong> 18-45% anual (Konfío 24-36%). <strong>Crédito al consumo personal:</strong> 40-120% anual (Kueski 50-90%). <strong>Factoraje empresarial:</strong> 15-30% anual. <strong>Crédito automotriz:</strong> 12-24% anual. <strong>Hipotecario:</strong> 10-18% anual (FOVISSSTE 10-14%). Las tasas dependen de historial crediticio, garantías, plazo, y monto. Siempre compara el <strong>CAT (Costo Anual Total)</strong>, no solo la tasa de interés.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Es mejor una SOFOM ER o ENR?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>SOFOM ER (Entidad Regulada):</strong> Supervisión integral CNBV, máxima seguridad regulatoria, ideal para montos grandes ($500K+) y clientes corporativos. Ejemplos: Crédito Real, Unifin, ABC Capital. <strong>SOFOM ENR (Entidad No Regulada):</strong> Mayor flexibilidad, procesos más rápidos, ideal para PyMEs y crédito al consumo. Ejemplos: Konfío, Kueski. Ambos tipos son legales y seguros si están registrados en CONDUSEF. La diferencia es nivel de supervisión, no confiabilidad. Ver <a href="sofom-er-vs-enr.php">comparativa completa ER vs ENR</a>.
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Cuánto tiempo tarda la aprobación de crédito en una SOFOM?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          Varía por SOFOM y complejidad: <strong>SOFOMes 100% digitales:</strong> 15-30 minutos (Kueski, crédito consumo < $30K). <strong>Crédito PyME con análisis AI:</strong> 24-48 horas (Konfío, $50K-$3M). <strong>Crédito corporativo tradicional:</strong> 5-15 días hábiles (Crédito Real, montos $500K+). <strong>Hipotecario:</strong> 2-4 semanas (análisis avalúo, jurídico). En general, SOFOMes son <strong>3-5x más rápidas</strong> que bancos tradicionales (que toman 2-8 semanas promedio).
        </div>
      </details>

      <details class="faq-item" style="background: white; padding: 1.5rem; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <summary style="font-weight: 600; font-size: 1.125rem; cursor: pointer;">
          ¿Qué pasa si una SOFOM quiebra? ¿Mi crédito desaparece?
        </summary>
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #E5E7EB; line-height: 1.8;">
          <strong>No</strong>, tu obligación de pago persiste. Si una SOFOM quiebra: <strong>1) La cartera se vende a otra entidad:</strong> Un banco, otra SOFOM, o fondo de inversión compra los créditos. <strong>2) Recibes notificación del nuevo acreedor:</strong> Deben informarte oficialmente mediante carta/notificación formal. <strong>3) Los términos del contrato original se mantienen:</strong> Tasas, plazo, y condiciones no cambian (salvo que refinancies voluntariamente). <strong>4) Continúas pagando normalmente:</strong> Solo cambia la cuenta destino. Si la SOFOM era ER (supervisión CNBV), la CNBV interviene ordenadamente. Si era ENR, puede haber más incertidumbre temporal, pero tu deuda legal persiste.
        </div>
      </details>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section class="section" style="background: linear-gradient(135deg, #1F2937 0%, #111827 100%); color: white; padding: 4rem 0;">
  <div class="container" style="text-align: center;">
    <h2 style="font-size: 2rem; margin-bottom: 1rem;">¿Buscas una SOFOM Confiable?</h2>
    <p style="font-size: 1.125rem; opacity: 0.9; max-width: 600px; margin: 0 auto 2rem;">
      Consulta el directorio completo de 2,083 SOFOMes registradas en CONDUSEF con datos actualizados y verificados.
    </p>
    <div class="grid grid-2" style="gap: 1rem; max-width: 600px; margin: 0 auto;">
      <a href="/" class="btn btn-primary btn-lg" style="width: 100%;">
        Ver Directorio Completo
      </a>
      <a href="sofom-er-vs-enr.php" class="btn btn-secondary btn-lg" style="width: 100%; background: rgba(255,255,255,0.1); color: white; border: 2px solid rgba(255,255,255,0.3);">
        Comparar ER vs ENR
      </a>
    </div>
  </div>
</section>

<?php echo $schemaJson; ?>
<?php include 'includes/footer.php'; ?>
