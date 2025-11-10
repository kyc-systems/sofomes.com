<?php
// Leer total de SOFOMes desde caché (para SEO - evita "Cargando..." en crawlers)
$sofomesTotal = '2,000+'; // Default fallback
$cacheFile = __DIR__ . '/api/condusef-cache.json';

if (file_exists($cacheFile)) {
    $cacheData = json_decode(file_get_contents($cacheFile), true);
    if (isset($cacheData['total']) && $cacheData['total'] > 0) {
        $sofomesTotal = number_format($cacheData['total'], 0, '.', ',');
    }
}

// Variables para header.php
$pageTitle = "SOFOMes México " . date('Y') . " | Directorio CONDUSEF";
$pageDescription = "{$sofomesTotal} SOFOMes México " . date('Y') . ": Directorio CONDUSEF actualizado. 70% aprobación vs 20% bancos. Casos reales: Konfío $1.3B, Kueski Top 250 Fintech, Crédito Para Ti #1 FOVISSSTE.";
$pageKeywords = "SOFOM, SOFOM ENR, SOFOM FOVISSSTE, lista sofomes condusef, financiamiento pymes mexico, constituir sofom, kyc systems, mejores sofomes";
$canonicalUrl = "https://sofomes.com/";
$activeMenu = "inicio";

// Schemas JSON-LD
$schemaJson = <<<'SCHEMA'
<!-- Schema.org - Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "SOFOMES.COM",
    "url": "https://sofomes.com",
    "logo": "https://sofomes.com/assets/logo.png",
    "description": "Directorio y guía completa de SOFOMes en operación en México. Datos actualizados desde CONDUSEF.",
    "foundingDate": "<span id='year-schema'></span>",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "availableLanguage": "Spanish"
    }
  }
  </script>

  <!-- Schema.org - WebSite -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "SOFOMES.COM",
    "url": "https://sofomes.com",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://sofomes.com/buscar?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
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
      }
    ]
  }
  </script>

  <!-- Schema.org - HowTo (Constituir SOFOM) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HowTo",
    "name": "Cómo Constituir una SOFOM ENR en México",
    "description": "Proceso completo paso a paso para constituir una SOFOM ENR (Entidad No Regulada) en México, con costos reales y plazos regulatorios verificables.",
    "totalTime": "P4M",
    "estimatedCost": {
      "@type": "MonetaryAmount",
      "currency": "MXN",
      "value": "285000",
      "minValue": "85000",
      "maxValue": "500000"
    },
    "step": [
      {
        "@type": "HowToStep",
        "position": 1,
        "name": "Denominación Social",
        "text": "Solicitud a la Secretaría de Economía (SE). Debe incluir 'S.A. DE C.V. SOFOM E.N.R.' en la razón social.",
        "url": "https://sofomes.com/#constituir",
        "estimatedTime": "P7D"
      },
      {
        "@type": "HowToStep",
        "position": 2,
        "name": "Opinión CONDUSEF",
        "text": "Solicitar opinión para uso de denominación SOFOM en SIPRES (Sistema de Registro de Prestadores de Servicios Financieros).",
        "url": "https://sofomes.com/#constituir",
        "estimatedTime": "P30D"
      },
      {
        "@type": "HowToStep",
        "position": 3,
        "name": "Constitución Notarial",
        "text": "Acta constitutiva con objeto social específico, estatutos, y capital social mínimo de 50K UDIS.",
        "url": "https://sofomes.com/#constituir",
        "estimatedTime": "P30D",
        "monetaryRequirement": {
          "@type": "MonetaryAmount",
          "currency": "MXN",
          "value": "65000",
          "minValue": "50000",
          "maxValue": "80000"
        }
      },
      {
        "@type": "HowToStep",
        "position": 4,
        "name": "Dictamen Técnico CNBV",
        "text": "Perito certificado evalúa sistema automatizado PLD/FT con checklist de 53 preguntas. Costo oficial: $30,241 MXN.",
        "url": "https://sofomes.com/software-pld-ft-requisitos-cnbv.php",
        "estimatedTime": "P50D",
        "monetaryRequirement": {
          "@type": "MonetaryAmount",
          "currency": "MXN",
          "value": "30241"
        }
      },
      {
        "@type": "HowToStep",
        "position": 5,
        "name": "Contrato SIC CONDUSEF",
        "text": "Contratar con Sociedad de Información Crediticia (Buró de Crédito o Círculo de Crédito) para consulta de historial crediticio de clientes.",
        "url": "https://sofomes.com/#constituir"
      },
      {
        "@type": "HowToStep",
        "position": 6,
        "name": "Inscripción SIPRES",
        "text": "Registro oficial en Sistema de Registro de Prestadores de Servicios Financieros de CONDUSEF.",
        "url": "https://sofomes.com/#constituir",
        "estimatedTime": "P10D"
      },
      {
        "@type": "HowToStep",
        "position": 7,
        "name": "Clave SITI PLD/FT",
        "text": "Registro en Sistema Integral de Tecnología e Información de la Unidad de Inteligencia Financiera (UIF) para reportes PLD/FT.",
        "url": "https://sofomes.com/#constituir",
        "estimatedTime": "P7D"
      }
    ],
    "tool": [
      {
        "@type": "HowToTool",
        "name": "Software PLD/FT Automatizado",
        "description": "Sistema automatizado obligatorio para cumplimiento de Prevención de Lavado de Dinero y Financiamiento al Terrorismo. Debe cubrir 11 funciones obligatorias según CNBV."
      },
      {
        "@type": "HowToTool",
        "name": "Certificación Oficial de Cumplimiento",
        "description": "Curso CNBV obligatorio de 100 horas + examen + registro. Costo: $16,558 MXN."
      }
    ],
    "supply": [
      {
        "@type": "HowToSupply",
        "name": "Capital Social",
        "description": "Capital práctico recomendado: 50 millones de pesos para viabilidad operativa real (aunque legalmente no hay mínimo para SOFOM ENR)."
      },
      {
        "@type": "HowToSupply",
        "name": "Asesoría Legal Especializada",
        "description": "Constitución + manuales + políticas + representación regulatoria. Costo: $100,000 - $300,000 MXN."
      }
    ]
  }
  </script>

  <!-- Schema.org - ItemList (Casos de Éxito) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Casos de Éxito: 5 SOFOMes que Debes Conocer",
    "description": "Ejemplos reales de SOFOMes exitosas en México con datos verificables y métricas de desempeño.",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@type": "Organization",
          "name": "Konfío",
          "url": "https://sofomes.com/#casos-exito",
          "description": "SOFOM enfocada en créditos en línea para PyMEs. Valuación $1,300M USD (2021). Inversionista: Softbank. Unicornio mexicano.",
          "foundingDate": "2014",
          "award": "Top 100 Fintech LATAM 2024"
        }
      },
      {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@type": "Organization",
          "name": "Kueski",
          "url": "https://sofomes.com/#casos-exito",
          "description": "Primera SOFOM E.N.R. 100% digital. Top 250 Fintech mundial (CB Insights 2022). Mejor plataforma BNPL en Fintech Breakthrough Awards 2023.",
          "foundingDate": "2012",
          "award": "Top 250 Fintech Mundial"
        }
      },
      {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@type": "Organization",
          "name": "Crédito Para Ti",
          "url": "https://sofomes.com/#casos-exito",
          "description": "SOFOM especializada en créditos FOVISSSTE para trabajadores del gobierno. #1 en financiamiento hipotecario para servidores públicos.",
          "award": "Insignia CONDUSEF de Adultos Mayores"
        }
      },
      {
        "@type": "ListItem",
        "position": 4,
        "item": {
          "@type": "Organization",
          "name": "Arrendadora y Factor Banorte",
          "url": "https://sofomes.com/#casos-exito",
          "description": "SOFOM E.R. del Grupo Financiero Banorte. Líder en arrendamiento y factoraje financiero para empresas.",
          "award": "Regulación CNBV Integral"
        }
      },
      {
        "@type": "ListItem",
        "position": 5,
        "item": {
          "@type": "Organization",
          "name": "Cetelem",
          "url": "https://sofomes.com/#casos-exito",
          "description": "SOFOM E.R. con desempeño excepcional. Índice de Reclamación (IR) de solo 2.82 por cada 10,000 contratos, muy por debajo del promedio sectorial de 18.45.",
          "award": "Bajo Índice de Quejas"
        }
      }
    ]
  }
  </script>

  <!-- Schema.org - Table (Comparativa ER vs ENR) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Table",
    "about": {
      "@type": "Thing",
      "name": "Comparativa SOFOM ER vs ENR",
      "description": "Tabla comparativa de características entre SOFOM Entidad Regulada (ER) y SOFOM Entidad No Regulada (ENR) en México."
    },
    "name": "SOFOM ER vs ENR: Comparativa Completa",
    "description": "Comparación detallada de las diferencias entre SOFOM ER (Entidad Regulada) con 38 entidades (1.8% del mercado) y SOFOM ENR (Entidad No Regulada) con 2,038 entidades (98.2% del mercado).",
    "url": "https://sofomes.com/#que-es"
  }
  </script>
SCHEMA;

include 'includes/header.php';
?>



  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span id="hero-total"><?php echo $sofomesTotal; ?></span> SOFOMes en Operación en México:<br>Directorio Completo CONDUSEF <span class="current-year"></span>
          </h1>
          <p class="hero-subtitle">
            La única base de datos pública searchable de <strong>todas las SOFOMes registradas</strong> en México.
            Financiamiento PyMEs, constitución SOFOM ENR, y casos de éxito reales con datos verificables.
          </p>

          <!-- Stats Bar -->
          <div class="stats-bar">
            <div class="stat-item">
              <strong id="stat-total">...</strong>
              <span>SOFOMes en Operación</span>
            </div>
            <div class="stat-item">
              <strong>98.2%</strong>
              <span>Son SOFOM ENR</span>
            </div>
            <div class="stat-item">
              <strong>70%</strong>
              <span>Tasa Aprobación</span>
            </div>
            <div class="stat-item">
              <strong>14</strong>
              <span>SOFOMes FOVISSSTE</span>
            </div>
          </div>

          <div class="hero-cta">
            <a href="#directorio" class="btn btn-primary">
              Ver Directorio Completo
            </a>
            <a href="#fovissste" class="btn btn-secondary">
              SOFOMes FOVISSSTE
            </a>
          </div>
        </div>

        <div class="hero-image">
          <img src="assets/img/main.webp" alt="Directorio SOFOMes México - SOFOMes en operación CONDUSEF" loading="eager" width="665" height="389" style="height: auto;">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: ¿Qué es una SOFOM? -->
  <section id="que-es" class="section">
    <div class="container">
      <h2 class="section-title">¿Qué es una SOFOM en México?</h2>

      <div class="grid grid-2">
        <div>
          <p class="lead">
            Una <strong>SOFOM (Sociedad Financiera de Objeto Múltiple)</strong> es una entidad financiera mexicana
            que otorga crédito, arrendamiento financiero y factoraje <strong>sin captar ahorro del público</strong>.
          </p>

          <h3>Características Principales</h3>
          <ul class="feature-list">
            <li><strong>Mayor aprobación:</strong> 70% vs 20% de bancos tradicionales</li>
            <li><strong>Velocidad:</strong> Decisión en 48-72 horas vs 3-4 meses bancos</li>
            <li><strong>Flexibilidad:</strong> Soluciones "a la medida" (revolventes, gracia, solo intereses)</li>
            <li><strong>Inclusión:</strong> 6 de cada 10 PyMEs obtienen su primer crédito en una SOFOM</li>
            <li><strong>Ventaja fiscal:</strong> Intereses a personas morales exentos de IVA</li>
          </ul>

          <div class="alert alert-info">
            <strong>Dato clave:</strong> En México operan actualmente <strong><span id="alert-count">...</span> SOFOMes</strong> en operación registradas
            en CONDUSEF, de las cuales el 98.2% son ENR (Entidad No Regulada).
          </div>
        </div>

        <div>
          <h3>SOFOM ER vs ENR: ¿Cuál es la diferencia?</h3>

          <table class="comparison-table">
            <thead>
              <tr>
                <th>Característica</th>
                <th>SOFOM ER (38)</th>
                <th>SOFOM ENR (2,038)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>% del mercado</td>
                <td>1.8%</td>
                <td><strong>98.2%</strong></td>
              </tr>
              <tr>
                <td>Vínculo patrimonial</td>
                <td>Con bancos/GF</td>
                <td>Independiente</td>
              </tr>
              <tr>
                <td>Regulación CNBV</td>
                <td>Integral</td>
                <td>Solo PLD/FT</td>
              </tr>
              <tr>
                <td>Capital mínimo</td>
                <td>Variable (CNBV)</td>
                <td>Sin mínimo legal</td>
              </tr>
              <tr>
                <td>Barrera entrada</td>
                <td>Alta</td>
                <td>Media-Alta</td>
              </tr>
            </tbody>
          </table>

          <p style="margin-top: 1.5rem">
            <strong>Ejemplos SOFOM ER:</strong> Arrendadora Banorte, Cetelem Inbursa, GM Financial<br>
            <strong>Ejemplos SOFOM ENR:</strong> Konfío, Kueski, Crédito Para Ti
          </p>

          <div style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
            <a href="sofom-er-vs-enr.php" class="btn btn-primary">Ver Comparativa Completa ER vs ENR →</a>
            <a href="#casos-exito" class="btn btn-outline">Ver Casos de Éxito →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Directorio SOFOMes -->
  <section id="directorio" class="section">
    <div class="container">
      <h2 class="section-title">Directorio Completo: <span id="directory-title-count">...</span> SOFOMes en Operación en CONDUSEF</h2>
      <p class="section-subtitle">
        Base de datos actualizada al 27 de octubre de <span class="current-year"></span>. La única lista pública searchable de todas las SOFOMes en México.
      </p>

      <div class="directory-stats">
        <div class="stat-card">
          <div class="stat-number" id="directory-stat-total">...</div>
          <div class="stat-label">SOFOMes Activas</div>
          <div class="stat-detail">Todas en operación</div>
        </div>

        <div class="stat-card">
          <div class="stat-number">774</div>
          <div class="stat-label">Ciudad de México</div>
          <div class="stat-detail">37.3% del total</div>
        </div>

        <div class="stat-card">
          <div class="stat-number">283</div>
          <div class="stat-label">Nuevo León</div>
          <div class="stat-detail">Hub financiero norte</div>
        </div>

        <div class="stat-card">
          <div class="stat-number">186</div>
          <div class="stat-label">Jalisco</div>
          <div class="stat-detail">Corredor Bajío</div>
        </div>
      </div>

      <div class="cta-box">
        <h3>Accede al Directorio Completo</h3>
        <p>Busca por nombre, estado, tipo (ER/ENR), fecha de actualización. Exporta a CSV/Excel.</p>
        <a href="lista-sofomes-mexico.php" class="btn btn-primary btn-lg">
          🔍 Buscar en Directorio (<span id="cta-count">...</span> SOFOMes)
        </a>
      </div>
    </div>
  </section>

  <!-- Section: SOFOM FOVISSSTE -->
  <section id="fovissste" class="section">
    <div class="container">
      <h2 class="section-title">SOFOMes Autorizadas por FOVISSSTE</h2>
      <p class="section-subtitle">
        14 SOFOMes autorizadas para gestionar créditos hipotecarios FOVISSSTE.
        Proceso: 3 semanas con documentación completa (antes 6 meses).
      </p>

      <div class="grid grid-2">
        <div>
          <h3>¿Cómo funciona el crédito FOVISSSTE con SOFOMes?</h3>

          <ol class="process-list">
            <li>
              <strong>Asesoría Gratuita</strong>
              <p>La SOFOM ofrece asesoría profesional sin costo sobre esquemas de crédito, montos y condiciones.</p>
            </li>
            <li>
              <strong>Gestión del Trámite</strong>
              <p>Ayuda con documentación, verificación de la vivienda y coordinación con el notario.</p>
            </li>
            <li>
              <strong>Formalización Rápida</strong>
              <p>Escrituración en 3 semanas o 1 mes si la documentación está completa (antes 6 meses).</p>
            </li>
            <li>
              <strong>Supervisión FOVISSSTE</strong>
              <p>Todas las SOFOMes están inscritas en el padrón oficial y supervisadas constantemente.</p>
            </li>
          </ol>

          <div class="alert alert-warning">
            <strong>Importante:</strong> La asesoría de la SOFOM es <strong>100% gratuita</strong>.
            Si una SOFOM solicita pago por el trámite, puede ser reportada.
          </div>
        </div>

        <div>
          <h3>SOFOMes FOVISSSTE Autorizadas (14)</h3>

          <div class="fovissste-list">
            <div class="fovissste-item featured">
              <span class="badge badge-gold">#1 Calificada</span>
              <strong>CRÉDITO PARA TI, S.A. DE C.V. SOFOM E.N.R.</strong>
              <p>La SOFOM #1 calificada por FOVISSSTE según indicadores oficiales.</p>
            </div>

            <div class="fovissste-item">
              <strong>ALIANZA FAMILIAR, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>ALRA DEL SUR, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>DAE HIPOTECARIA, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>DOÑA JUANITA FINANZAS POPULARES, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>FACICASA, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>FACTOR GFC GLOBAL, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>HIPOTECARIA CREA MÁS, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>HIPOTECARIA HOGAR, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>INCLUSIÓN HIPOTECARIA, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>NEW LIFE & ZONE MEXICO, S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>SÉ DUEÑO S.A. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>FINANCIERA DESARROLLADORA DE CAPITAL S.A.P.I. DE C.V. SOFOM E.N.R.</strong>
            </div>
            <div class="fovissste-item">
              <strong>GRUPO PADIO FINANCIERA, S.A.P.I DE C.V., SOFOM, E.N.R.</strong>
            </div>
          </div>

          <a href="#fovissste" class="btn btn-primary" style="margin-top: 1.5rem">
            Ver Guía Completa FOVISSSTE →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Casos de Éxito -->
  <section id="casos-exito" class="section">
    <div class="container">
      <h2 class="section-title">Casos de Éxito: 5 SOFOMes que Debes Conocer</h2>
      <p class="section-subtitle">
        Ejemplos reales de SOFOMes exitosas en México con datos verificables y métricas de desempeño.
      </p>

      <div class="cases-grid">
        <!-- Konfío -->
        <div class="case-card">
          <div class="case-header">
            <h3>Konfío</h3>
            <span class="badge badge-unicorn">🦄 Unicornio</span>
          </div>
          <div class="case-stats">
            <div class="case-stat">
              <strong>$1,300M USD</strong>
              <span>Valuación 2021</span>
            </div>
            <div class="case-stat">
              <strong>Softbank</strong>
              <span>Inversionista</span>
            </div>
          </div>
          <p class="case-description">
            SOFOM enfocada en créditos en línea para PyMEs que no califican para financiamiento bancario.
            Considerada una de las mejores fintechs mexicanas.
          </p>
          <ul class="case-features">
            <li>Registro completo CONDUSEF</li>
            <li>Créditos 100% en línea</li>
            <li>Respaldo Quona Capital, Kaszek, QED</li>
          </ul>
        </div>

        <!-- Kueski -->
        <div class="case-card">
          <div class="case-header">
            <h3>Kueski</h3>
            <span class="badge badge-fintech">🏆 Top 250 Fintech</span>
          </div>
          <div class="case-stats">
            <div class="case-stat">
              <strong>100% Digital</strong>
              <span>Primera SOFOM ENR</span>
            </div>
            <div class="case-stat">
              <strong>CB Insights</strong>
              <span>Top 250 (2022)</span>
            </div>
          </div>
          <p class="case-description">
            Primera SOFOM E.N.R. 100% digital. Reconocida por CONDUSEF con la Insignia de Adultos Mayores (<span class="current-year"></span>).
            Mejor plataforma BNPL en Fintech Breakthrough Awards 2023.
          </p>
          <ul class="case-features">
            <li>Primera SOFOM 100% digital</li>
            <li>Insignia CONDUSEF <span class="current-year"></span></li>
            <li>Innovación tecnológica</li>
          </ul>
        </div>

        <!-- Crédito Para Ti -->
        <div class="case-card">
          <div class="case-header">
            <h3>Crédito Para Ti</h3>
            <span class="badge badge-fovissste">#1 FOVISSSTE</span>
          </div>
          <div class="case-stats">
            <div class="case-stat">
              <strong>#1 Calificada</strong>
              <span>Por FOVISSSTE</span>
            </div>
            <div class="case-stat">
              <strong>Autorizada</strong>
              <span>Crédito hipotecario</span>
            </div>
          </div>
          <p class="case-description">
            SOFOM E.N.R. clasificada como #1 por FOVISSSTE para créditos hipotecarios.
            Calificación basada en operaciones asignadas, escrituradas y atención a aclaraciones.
          </p>
          <ul class="case-features">
            <li>Mejor desempeño FOVISSSTE</li>
            <li>Supervisión constante</li>
            <li>Especialización hipotecaria</li>
          </ul>
        </div>

        <!-- Serfimex -->
        <div class="case-card">
          <div class="case-header">
            <h3>Serfimex</h3>
            <span class="badge badge-bursatil">📈 BIVA</span>
          </div>
          <div class="case-stats">
            <div class="case-stat">
              <strong>>$400M</strong>
              <span>Cartera mínima</span>
            </div>
            <div class="case-stat">
              <strong>BIVA</strong>
              <span>Bolsa listada</span>
            </div>
          </div>
          <p class="case-description">
            Debutó en la Bolsa Institucional de Valores (BIVA), logro alcanzable solo para SOFOMes con más de
            400 millones de pesos en cartera (solo 13% del sector).
          </p>
          <ul class="case-features">
            <li>Impulso PyMEs</li>
            <li>Financiamiento turístico</li>
            <li>Fondeo bursátil</li>
          </ul>
        </div>

        <!-- GM Financial -->
        <div class="case-card">
          <div class="case-header">
            <h3>GM Financial</h3>
            <span class="badge badge-er">SOFOM ER</span>
          </div>
          <div class="case-stats">
            <div class="case-stat">
              <strong>IR: 2.82</strong>
              <span>vs 18.45 promedio</span>
            </div>
            <div class="case-stat">
              <strong>Excelente</strong>
              <span>Satisfacción cliente</span>
            </div>
          </div>
          <p class="case-description">
            SOFOM E.R. con desempeño excepcional. Índice de Reclamación (IR) de solo 2.82 por cada 10,000 contratos,
            muy por debajo del promedio sectorial de 18.45.
          </p>
          <ul class="case-features">
            <li>Crédito automotriz</li>
            <li>Bajo índice quejas</li>
            <li>Regulación CNBV integral</li>
          </ul>
        </div>
      </div>

      <div class="alert alert-info" style="margin-top: 2rem">
        <strong>Contexto del sector:</strong> Las SOFOMes son la figura financiera más numerosa en México,
        con más de 20 millones de clientes y cerca del 20% de penetración en el financiamiento total del sector privado.
      </div>

      <div class="cta-box" style="margin-top: 2rem; text-align: center;">
        <h3 style="margin-bottom: 1rem;">¿Buscas la Mejor SOFOM para tu Negocio?</h3>
        <p style="margin-bottom: 1.5rem;">
          Consulta nuestro ranking completo con las <strong>Top 10 mejores SOFOMes de México 2025</strong>,
          incluyendo análisis de tasas, aprobación, portafolio y reputación verificada.
        </p>
        <a href="mejores-sofomes-mexico-2025.php" class="btn btn-primary btn-lg">
          Ver Ranking Completo Top 10 →
        </a>
      </div>
    </div>
  </section>

  <!-- Section: Constituir SOFOM ENR -->
  <section id="constituir" class="section">
    <div class="container">
      <h2 class="section-title">Cómo Constituir una SOFOM ENR en México</h2>
      <p class="section-subtitle">
        Proceso completo con costos REALES y plazos regulatorios verificables. No promesas irreales.
      </p>

      <div class="grid grid-2">
        <div>
          <h3>⚠️ Costos Reales de Constitución</h3>
          <p class="lead">
            <strong>Rango: $85,000 - $500,000 MXN</strong><br>
            (No creas el mito de "13K pesos")
          </p>

          <div class="cost-breakdown">
            <div class="cost-item">
              <strong>Dictamen Técnico CNBV</strong>
              <span class="cost-amount">$30,241</span>
              <p>Oficial de Cumplimiento + sistema automatizado PLD/FT (millones de pesos)</p>
            </div>
            <div class="cost-item">
              <strong>Certificación Oficial Cumplimiento</strong>
              <span class="cost-amount">$16,558</span>
              <p>Curso CNBV obligatorio (100 hrs) + examen + registro</p>
            </div>
            <div class="cost-item">
              <strong>Notaría + Permisos</strong>
              <span class="cost-amount">$50,000 - $80,000</span>
              <p>Acta constitutiva, protocolización, inscripción RPP</p>
            </div>
            <div class="cost-item">
              <strong>Software PLD/FT Automatizado</strong>
              <span class="cost-amount">Variable</span>
              <p>Licenciamiento mensual/anual: (según volumen de clientes u operaciones)</p>
            </div>
            <div class="cost-item">
              <strong>Asesoría Legal Especializada</strong>
              <span class="cost-amount">$100,000 - $300,000</span>
              <p>Constitución + manuales + políticas + representación regulatoria</p>
            </div>
          </div>

          <div class="alert alert-warning">
            <strong>Capital Práctico Recomendado:</strong> 50 millones de pesos para viabilidad operativa real
            (aunque legalmente no hay mínimo para SOFOM ENR).
          </div>
        </div>

        <div>
          <h3>📋 Proceso Paso a Paso (3-4 meses)</h3>

          <ol class="timeline-list">
            <li>
              <strong>1. Denominación Social</strong>
              <p>Solicitud SE (Secretaría de Economía). Debe incluir "S.A. DE C.V. SOFOM E.N.R."</p>
              <span class="timeline-duration">⏱️ 1 semana</span>
            </li>
            <li>
              <strong>2. Opinión CONDUSEF</strong>
              <p>Solicitar opinión para uso de denominación SOFOM en SIPRES.</p>
              <span class="timeline-duration">⏱️ 30 días hábiles</span>
            </li>
            <li>
              <strong>3. Constitución Notarial</strong>
              <p>Acta constitutiva con objeto social específico, estatutos, capital social mínimo de 50K UDIS.</p>
              <span class="timeline-duration">⏱️ 30 días</span>
            </li>
            <li>
              <strong>4. Dictamen Técnico CNBV</strong>
              <p>Perito certificado evalúa sistema automatizado PLD/FT (53 preguntas checklist).</p>
              <span class="timeline-duration">⏱️ 50 días</span>
            </li>
            <li>
              <strong>5. Contrato SIC CONDUSEF</strong>
              <p>Sociedad de Información Crediticia (Buró o Círculo de Crédito).</p>
              <span class="timeline-duration">⏱️ Variable</span>
            </li>
            <li>
              <strong>6. Inscripción SIPRES</strong>
              <p>Registro en Sistema de Registro de Prestadores de Servicios Financieros.</p>
              <span class="timeline-duration">⏱️ 10 días</span>
            </li>
            <li>
              <strong>7. Clave SITI PLD/FT</strong>
              <p>Registro en Sistema Integral de Tecnología e Información (UIF).</p>
              <span class="timeline-duration">⏱️ 1 semana</span>
            </li>
          </ol>

          <div class="cta-box">
            <h4>¿Necesitas Asesoría Especializada?</h4>
            <p>Proceso completo de constitución + Software PLD/FT incluido</p>
            <a href="https://wa.me/5215547626178?text=Hola%2C%20me%20interesa%20solicitar%20consultor%C3%ADa%20para%20constituir%20una%20SOFOM%20ENR" class="btn btn-primary" target="_blank" rel="noopener">Solicitar Consultoría →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Software PLD/FT (Resumen) -->
  <section id="software-pld" class="section">
    <div class="container">
      <h2 class="section-title">Software PLD/FT: Requisito Obligatorio para SOFOMes</h2>
      <p class="section-subtitle">
        Sistema automatizado obligatorio según CNBV para Prevención de Lavado de Dinero.
        11 funciones obligatorias + Dictamen Técnico.
      </p>

      <div class="grid grid-2" style="margin-top: 2rem;">
        <div style="background: linear-gradient(135deg, #1F2937 0%, #111827 100%); color: white; padding: 2.5rem; border-radius: var(--border-radius-lg);">
          <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem;">📋 11 Funciones Obligatorias CNBV</h3>
          <ul style="margin: 0; line-height: 1.8;">
            <li>✅ <strong>Expedientes KYC digitales</strong> con consulta instantánea</li>
            <li>✅ <strong>Reportes RIPS F41/F36</strong> automáticos a UIF/CNBV</li>
            <li>✅ <strong>Alertas en tiempo real</strong> de operaciones sospechosas</li>
            <li>✅ <strong>Detección automática</strong> PPE y listas bloqueadas (OFAC, ONU, SAT)</li>
            <li>✅ <strong>Monitoreo transaccional</strong> con Machine Learning</li>
            <li>✅ <strong>Seguridad bancaria:</strong> Cifrado AES-256, MFA, auditoría</li>
          </ul>
          <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.2);">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; text-align: center;">
              <div>
                <strong style="display: block; font-size: 1.5rem; color: var(--success-400);">11</strong>
                <span style="font-size: 0.875rem; opacity: 0.8;">Funciones</span>
              </div>
              <div>
                <strong style="display: block; font-size: 1.5rem; color: var(--warning-400);">53</strong>
                <span style="font-size: 0.875rem; opacity: 0.8;">Checklist</span>
              </div>
              <div>
                <strong style="display: block; font-size: 1.5rem; color: var(--danger-400);">$30K</strong>
                <span style="font-size: 0.875rem; opacity: 0.8;">Dictamen</span>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h3 style="margin-bottom: 1rem;">Costos de Implementación</h3>
          <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem;">
            <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Pequeña</strong> (< 500 clientes)</p>
            <p style="margin: 0; font-size: 1.25rem; color: var(--success-600); font-weight: 600;">$180K - $330K MXN/año</p>
          </div>
          <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem;">
            <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Mediana</strong> (500-5K clientes)</p>
            <p style="margin: 0; font-size: 1.25rem; color: var(--warning-600); font-weight: 600;">$330K - $830K MXN/año</p>
          </div>
          <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1.5rem;">
            <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Grande/ER</strong> (>5K clientes)</p>
            <p style="margin: 0; font-size: 1.25rem; color: var(--danger-600); font-weight: 600;">$930K - $4.5M+ MXN/año</p>
          </div>

          <div class="alert alert-danger">
            <strong>⚠️ Obligatorio:</strong> La falta de software PLD/FT resulta en <strong>cancelación de registro CONDUSEF</strong> y multas millonarias.
          </div>

          <a href="software-pld-ft-requisitos-cnbv.php" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 1rem;">
            Ver 11 Funciones + Checklist 53 Preguntas →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Compliance y Reportes -->
  <section id="catalogos" class="section">
    <div class="container">
      <h2 class="section-title">Recursos de Compliance Regulatorio</h2>
      <p class="section-subtitle">
        Herramientas esenciales para el cumplimiento de obligaciones PLD/FT ante CNBV y UIF.
      </p>

      <div class="grid grid-2" style="margin-top: 3rem;">
        <!-- Catálogos RIPS F36 -->
        <div style="padding: 2.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); text-align: center;">
          <div style="font-size: 4rem; margin-bottom: 1rem;">📋</div>
          <h3 style="font-size: 1.5rem; color: var(--primary-900); margin-bottom: 1rem;">
            Catálogos RIPS F36
          </h3>
          <p style="color: var(--neutral-700); margin-bottom: 1.5rem; line-height: 1.7;">
            6 catálogos oficiales CNBV: Actividad Económica, Localidades, Monedas, Instrumentos Monetarios y más. Búsqueda en tiempo real.
          </p>
          <div style="display: flex; gap: 1rem; justify-content: center; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <div style="padding: 0.5rem 1rem; background: var(--primary-50); border-radius: var(--border-radius); font-size: 0.875rem;">
              <strong>1,263</strong> actividades
            </div>
            <div style="padding: 0.5rem 1rem; background: var(--primary-50); border-radius: var(--border-radius); font-size: 0.875rem;">
              <strong>3,689</strong> localidades
            </div>
            <div style="padding: 0.5rem 1rem; background: var(--primary-50); border-radius: var(--border-radius); font-size: 0.875rem;">
              <strong>190</strong> monedas
            </div>
          </div>
          <a href="catalogos-rips" class="btn btn-primary btn-lg">
            Ver Catálogos Completos →
          </a>
        </div>

        <!-- Reportes Regulatorios -->
        <div style="padding: 2.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); text-align: center;">
          <div style="font-size: 4rem; margin-bottom: 1rem;">📄</div>
          <h3 style="font-size: 1.5rem; color: var(--primary-900); margin-bottom: 1rem;">
            Reportes Regulatorios CNBV
          </h3>
          <p style="color: var(--neutral-700); margin-bottom: 1.5rem; line-height: 1.7;">
            Guía completa de formatos Operaciones Inusuales, Relevantes e Internas Preocupantes: layouts, plazos de envío, campos obligatorios y validaciones para cumplimiento regulatorio ante CNBV.
          </p>
          <div style="display: flex; gap: 0.5rem; justify-content: center; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <div style="padding: 0.5rem 1rem; background: var(--success-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--success-200);">
              📊 Inusuales
            </div>
            <div style="padding: 0.5rem 1rem; background: var(--warning-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--warning-200);">
              🔍 Relevantes
            </div>
            <div style="padding: 0.5rem 1rem; background: var(--danger-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--danger-200);">
              🚨 Internas Preocupantes
            </div>
          </div>
          <a href="reportes-regulatorios-cnbv.php" class="btn btn-primary btn-lg">
            Ver Guía de Reportes →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: FAQ -->
  <section id="faq" class="section">
    <div class="container">
      <h2 class="section-title">Preguntas Frecuentes sobre SOFOMes</h2>

      <div class="faq-grid">
        <div class="faq-item">
          <h3 class="faq-question">¿Cuántas SOFOMes hay en México en <span class="current-year"></span>?</h3>
          <div class="faq-answer">
            <p>
              Según el registro SIPRES de CONDUSEF, actualmente operan <strong><span id="faq-count">...</span> SOFOMes en operación</strong>
              en México. De estas, el 98.2% (2,038) son ENR (Entidad No Regulada) y solo el 1.8% (38) son ER
              (Entidad Regulada con vínculo patrimonial a bancos).
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Cuál es la diferencia entre SOFOM ER y ENR?</h3>
          <div class="faq-answer">
            <p>
              <strong>SOFOM ER (Entidad Regulada):</strong> Tiene vínculo patrimonial con banco o grupo financiero.
              Regulación CNBV integral. Ejemplo: GM Financial, Arrendadora Banorte.
            </p>
            <p style="margin-top: 0.5rem">
              <strong>SOFOM ENR (Entidad No Regulada):</strong> Sin vínculo con bancos. Solo regulación PLD/FT.
              Más del 98% del mercado. Ejemplo: Konfío, Kueski, Crédito Para Ti.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Cuánto cuesta constituir una SOFOM ENR?</h3>
          <div class="faq-answer">
            <p>
              El costo REAL de constitución oscila entre <strong>$85,000 y $500,000 MXN</strong>, dependiendo de:
            </p>
            <ul>
              <li>Dictamen Técnico CNBV: $30,241</li>
              <li>Certificación Oficial Cumplimiento: $16,558</li>
              <li>Software PLD/FT automatizado: cientos de miles a millones anuales</li>
              <li>Notaría + permisos: $50K-$80K</li>
              <li>Asesoría legal especializada: $100K-$300K</li>
            </ul>
            <p style="margin-top: 0.5rem">
              <strong>Capital práctico recomendado:</strong> 50 millones de pesos para viabilidad operativa
              (aunque no hay mínimo legal).
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Cuánto tiempo tarda constituir una SOFOM?</h3>
          <div class="faq-answer">
            <p>
              El proceso REAL toma <strong>3 a 4 meses</strong> si se cumple con toda la documentación y requisitos:
            </p>
            <ol>
              <li>Denominación social: 1 semana</li>
              <li>Opinión CONDUSEF: 30 días hábiles</li>
              <li>Constitución notarial: 30 días</li>
              <li>Dictamen Técnico CNBV: 50 días</li>
              <li>Contrato SIC: variable</li>
              <li>Inscripción SIPRES: 10 días</li>
              <li>Clave SITI PLD/FT: 1 semana</li>
            </ol>
            <p style="margin-top: 0.5rem">
              <em>No creas promesas de "8-12 semanas". Los plazos regulatorios son fijos.</em>
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Qué es una SOFOM FOVISSSTE?</h3>
          <div class="faq-answer">
            <p>
              Son <strong>14 SOFOMes autorizadas</strong> por FOVISSSTE para gestionar créditos hipotecarios
              de trabajadores del gobierno. La #1 calificada es <strong>Crédito Para Ti</strong>.
            </p>
            <p style="margin-top: 0.5rem">
              Ventaja principal: reducen el tiempo de escrituración de <strong>6 meses a 3 semanas</strong>
              cuando la documentación está completa. La asesoría es 100% gratuita por ley.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Las SOFOMes son seguras?</h3>
          <div class="faq-answer">
            <p>
              Las SOFOMes están <strong>supervisadas por CONDUSEF</strong> y deben cumplir con regulación PLD/FT de CNBV.
              Sin embargo, no tienen el respaldo del IPAB (seguro de depósitos bancarios) porque no captan ahorro.
            </p>
            <p style="margin-top: 0.5rem">
              <strong>Recomendación:</strong> Verifica que la SOFOM esté registrada en SIPRES de CONDUSEF.
              Busca casos de éxito verificables (Konfío, Kueski, Crédito Para Ti).
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Cuál es la tasa de interés de las SOFOMes?</h3>
          <div class="faq-answer">
            <p>
              Las tasas varían ampliamente según el perfil de riesgo:
            </p>
            <ul>
              <li><strong>Empresarial garantizado:</strong> TIIE + 4 a 12 puntos</li>
              <li><strong>PyMEs sin garantía:</strong> 30% - 60% anual</li>
              <li><strong>Consumo inmediato:</strong> hasta 150-180% CAT</li>
              <li><strong>Hipotecario FOVISSSTE:</strong> tasas competitivas similares a bancos</li>
            </ul>
            <p style="margin-top: 0.5rem">
              <strong>Importante:</strong> Tasas muy altas reflejan análisis deficiente de riesgo,
              no solo "velocidad". Compara siempre el CAT (Costo Anual Total).
            </p>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Qué ventajas tienen las SOFOMes sobre los bancos?</h3>
          <div class="faq-answer">
            <ul>
              <li><strong>Mayor aprobación:</strong> 70% vs 20% bancos</li>
              <li><strong>Velocidad:</strong> 48-72 horas vs 3-4 meses</li>
              <li><strong>Flexibilidad:</strong> Revolventes, solo intereses, periodos gracia</li>
              <li><strong>Inclusión:</strong> PyMEs sin historial crediticio</li>
              <li><strong>Ventaja fiscal:</strong> Intereses a personas morales exentos IVA</li>
            </ul>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Qué desventajas tienen las SOFOMes?</h3>
          <div class="faq-answer">
            <ul>
              <li>❌ <strong>Tasas más altas:</strong> Hasta 150-180% CAT en consumo</li>
              <li>❌ <strong>No hay seguro depósitos:</strong> No captan ahorro, pero esto no aplica a créditos</li>
              <li>❌ <strong>Fondeo limitado:</strong> Primeros 2 años solo capital propio</li>
              <li>❌ <strong>Compliance costoso:</strong> Oficial de Cumplimiento, Auditorías, Sistemas PLD/FT</li>
              <li>❌ <strong>Morosidad sectorial:</strong> 8.84% promedio</li>
            </ul>
          </div>
        </div>

        <div class="faq-item">
          <h3 class="faq-question">¿Dónde puedo verificar si una SOFOM está registrada?</h3>
          <div class="faq-answer">
            <p>
              Verifica en el <strong>SIPRES (Sistema de Registro de Prestadores de Servicios Financieros)</strong>
              de CONDUSEF:
            </p>
            <p style="margin-top: 0.5rem">
              🔗 <a href="https://webapps.condusef.gob.mx/SIPRES/jsp/pub/index.jsp" target="_blank" style="color: #065F46; font-weight: 600;">
                https://webapps.condusef.gob.mx/SIPRES/
              </a>
            </p>
            <p style="margin-top: 0.5rem">
              También puedes <a href="lista-sofomes-mexico.php" style="color: #065F46; font-weight: 600;">buscar en nuestro directorio</a>
              de SOFOMes actualizado.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php include 'includes/footer.php'; ?>

<!-- Schema.org - FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Cuántas SOFOMes hay en México en <span class='current-year'></span>?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Según el registro SIPRES de CONDUSEF, actualmente operan SOFOMes en operación en México. De estas, el 98.2% son ENR (Entidad No Regulada) y solo el 1.8% son ER (Entidad Regulada con vínculo patrimonial a bancos)."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuál es la diferencia entre SOFOM ER y ENR?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "SOFOM ER (Entidad Regulada): Tiene vínculo patrimonial con banco o grupo financiero. Regulación CNBV integral. SOFOM ENR (Entidad No Regulada): Sin vínculo con bancos. Solo regulación PLD/FT. Más del 98% del mercado."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuánto cuesta constituir una SOFOM ENR?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El costo REAL de constitución oscila entre $85,000 y $500,000 MXN, incluyendo: Dictamen Técnico CNBV ($30,241), Certificación Oficial Cumplimiento ($16,558), Software PLD/FT automatizado (cientos de miles a millones anuales), Notaría + permisos ($50K-$80K), y Asesoría legal especializada ($100K-$300K). Capital práctico recomendado: 50 millones de pesos."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuánto tiempo tarda constituir una SOFOM?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El proceso REAL toma 3 a 4 meses si se cumple con toda la documentación y requisitos. Los plazos regulatorios son fijos: Denominación social (1 semana), Opinión CONDUSEF (30 días hábiles), Constitución notarial (30 días), Dictamen Técnico CNBV (50 días), Inscripción SIPRES (10 días), Clave SITI PLD/FT (1 semana)."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué es una SOFOM FOVISSSTE?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Son 14 SOFOMes autorizadas por FOVISSSTE para gestionar créditos hipotecarios de trabajadores del gobierno. La #1 calificada es Crédito Para Ti. Reducen el tiempo de escrituración de 6 meses a 3 semanas cuando la documentación está completa. La asesoría es 100% gratuita por ley."
        }
      }
    ]
  }
  </script>

<!-- Scripts específicos de index -->
<script>
  // Fetch count from API and update nav
  console.log('🔍 Fetching API from: ./api/condusef-proxy.php');

  fetch('./api/condusef-proxy.php')
    .then(response => {
      console.log('✅ API Response status:', response.status);
      return response.json();
    })
    .then(data => {
      console.log('📊 API Data:', data);

      // Mostrar advertencia si es cache de emergencia
      if (data.emergency_fallback) {
        console.warn('⚠️ CONDUSEF no disponible. Usando cache de emergencia.');
        console.warn('⏰ Cache age: ' + data.cache_age_hours + ' horas');

        // Mostrar banner de advertencia al usuario
        const warningBanner = document.createElement('div');
        warningBanner.className = 'alert alert-warning';
        warningBanner.style.cssText = 'position: fixed; top: 70px; left: 50%; transform: translateX(-50%); z-index: 1000; max-width: 600px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);';
        warningBanner.innerHTML = `
          <strong>⚠️ Aviso:</strong> ${data.warning}<br>
          <small>Datos de hace ${Math.round(data.cache_age_hours)} horas. Última actualización: ${new Date(data.fecha).toLocaleString('es-MX')}</small>
        `;
        document.body.appendChild(warningBanner);

        // Ocultar banner después de 10 segundos
        setTimeout(() => warningBanner.remove(), 10000);
      }

      if (data.success) {
        const total = data.total.toLocaleString('es-MX');
        console.log('📈 Total SOFOMes:', total);

        // Update nav counter
        const navCount = document.getElementById('nav-count');
        if (navCount) {
          navCount.textContent = total;
          console.log('✅ nav-count actualizado');
        } else {
          console.log('❌ nav-count NO encontrado');
        }

        // Update hero total
        const heroTotal = document.getElementById('hero-total');
        if (heroTotal) {
          heroTotal.textContent = total;
          console.log('✅ hero-total actualizado');
        } else {
          console.log('❌ hero-total NO encontrado');
        }

        // Update stat-total
        const statTotal = document.getElementById('stat-total');
        if (statTotal) {
          statTotal.textContent = total;
          console.log('✅ stat-total actualizado');
        } else {
          console.log('❌ stat-total NO encontrado');
        }

        // Update directory-stat-total
        const directoryStatTotal = document.getElementById('directory-stat-total');
        if (directoryStatTotal) {
          directoryStatTotal.textContent = total;
          console.log('✅ directory-stat-total actualizado');
        } else {
          console.log('❌ directory-stat-total NO encontrado');
        }

        // Update directory-title-count
        const directoryTitleCount = document.getElementById('directory-title-count');
        if (directoryTitleCount) {
          directoryTitleCount.textContent = total;
          console.log('✅ directory-title-count actualizado');
        } else {
          console.log('❌ directory-title-count NO encontrado');
        }

        // Update alert-count
        const alertCount = document.getElementById('alert-count');
        if (alertCount) {
          alertCount.textContent = total;
          console.log('✅ alert-count actualizado');
        } else {
          console.log('❌ alert-count NO encontrado');
        }

        // Update cta-count
        const ctaCount = document.getElementById('cta-count');
        if (ctaCount) {
          ctaCount.textContent = total;
          console.log('✅ cta-count actualizado');
        } else {
          console.log('❌ cta-count NO encontrado');
        }

        // Update faq-count
        const faqCount = document.getElementById('faq-count');
        if (faqCount) {
          faqCount.textContent = total;
          console.log('✅ faq-count actualizado');
        } else {
          console.log('❌ faq-count NO encontrado');
        }

        // Update year in title
        const currentYear = new Date().getFullYear();
        document.querySelectorAll('#year-title, #og-title-meta, #year-schema').forEach(el => {
          if (el.tagName === 'META') {
            el.content = el.content.replace('<span id="year-title"></span>', currentYear);
          } else {
            el.textContent = currentYear;
          }
        });
      } else {
        console.error('❌ API returned success: false');
      }
    })
    .catch(error => {
      console.error('❌ Error fetching SOFOM count:', error);
    });
</script>
