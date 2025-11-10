<?php
// Variables para header.php
$pageTitle = "Operaciones Relevantes, Inusuales e Internas Preocupantes CNBV | Guía Completa 2025";
$pageDescription = "Guía completa de Operaciones Relevantes (≥$7,500 USD con billetes/monedas), Operaciones Inusuales (perfil transaccional) e Internas Preocupantes (lavado de dinero). Formatos oficiales, layouts, plazos, ejemplos prácticos.";
$pageKeywords = "operaciones relevantes inusuales preocupantes cnbv, pld sofom, reportes regulatorios, operaciones relevantes pld, operaciones inusuales pld, operaciones internas preocupantes";
$canonicalUrl = "https://sofomes.com/reportes-regulatorios-cnbv";
$activeMenu = "reportes";
$cssPath = "/assets/css/main.css";

// Schemas JSON-LD
$schemaJson = <<<'SCHEMA'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Qué son las operaciones relevantes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Las operaciones relevantes son aquellas operaciones realizadas con billetes y monedas metálicas de curso legal, cheques de viajero, o monedas acuñadas en platino, oro y plata que alcanzan o superan el umbral de $7,500 dólares estadounidenses (o su equivalente en moneda nacional o extranjera). Deben reportarse trimestralmente ante la CNBV dentro de los 10 últimos días hábiles de enero, abril, julio y octubre."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuál es el monto de las operaciones relevantes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El monto establecido para operaciones relevantes es de $7,500 USD (siete mil quinientos dólares estadounidenses) o su equivalente en otras monedas. Este umbral aplica únicamente a operaciones con billetes y monedas metálicas, cheques de viajero, y monedas acuñadas en platino, oro y plata. Si un cliente realiza varias operaciones el mismo día que sumen o superen este monto, deben consolidarse y reportarse como una sola operación relevante."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué son las operaciones inusuales?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Las operaciones inusuales son aquellas que no concuerdan con el perfil transaccional del cliente por su monto, frecuencia o características, o que carecen de justificación económica o legal aparente. La Disposición 30a de la CNBV establece 13 circunstancias específicas que califican como inusuales."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuáles son las operaciones inusuales?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Las operaciones inusuales incluyen 13 circunstancias definidas en la Disposición 30a de la CNBV, entre ellas: operaciones que no coinciden con la actividad económica del cliente, incrementos inusuales en depósitos, operaciones estructuradas para evitar umbrales, uso de instrumentos no habituales, operaciones con personas de alto riesgo o de países sancionados."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué es una operación interna preocupante?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Una operación interna preocupante es aquella que presenta sospecha fundada de estar relacionada con lavado de dinero o financiamiento al terrorismo. Va más allá de lo inusual e implica elementos que pudieran favorecer la comisión de estos delitos según el Artículo 400 Bis del Código Penal Federal."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuándo se reportan las operaciones relevantes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Las operaciones relevantes se reportan trimestralmente ante la CNBV dentro de los 10 últimos días hábiles de enero, abril, julio y octubre de cada año. Cada reporte incluye todas las operaciones de los 3 meses anteriores. El reporte se envía en formato de archivo con estructura de 36 campos siguiendo la Disposición 28ª del DCG SOFOMES."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué diferencia hay entre operaciones relevantes, inusuales y preocupantes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "La diferencia principal está en el criterio de reporte: Operaciones Relevantes se basan en monto (≥$7,500 USD); Operaciones Inusuales requieren análisis del perfil transaccional del cliente; Internas Preocupantes implican sospecha fundada de lavado de dinero o terrorismo. Los plazos también difieren: trimestralmente (10 últimos días hábiles de ene/abr/jul/oct) para Relevantes, 60 días naturales para Inusuales y Preocupantes."
        }
      },
      {
        "@type": "Question",
        "name": "¿Dónde se reportan las operaciones relevantes, inusuales y preocupantes en México?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Las SOFOMes ENR reportan todos los tipos de operaciones directamente ante la CNBV (Comisión Nacional Bancaria y de Valores) a través del portal SITI. La CNBV posteriormente remite esta información a la UIF (Unidad de Inteligencia Financiera)."
        }
      }
    ]
  }
  </script>

  <!-- Código de instalación Cliengo para sofomes.com -->
  <script type="text/javascript">
    (function () {
      var ldk = document.createElement('script');
      ldk.type = 'text/javascript';
      ldk.async = true;
      ldk.src = 'https://s.cliengo.com/weboptimizer/62503ed1004881002a965901/690164685f597226ae0e7119.js?platform=onboarding_modular';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);
    })();
  </script>

SCHEMA;

include 'includes/header.php';
?>



  <!-- Hero Section -->
  <section class="hero" style="padding: 4rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        Operaciones Relevantes, Inusuales e Internas Preocupantes CNBV
      </h1>
      <p class="hero-subtitle" style="text-align: center; max-width: 900px; margin: 1rem auto;">
        Guía oficial completa para SOFOMes sobre reportes PLD/FT ante la CNBV: Operaciones Relevantes (≥$7,500 USD), Operaciones Inusuales (perfil transaccional) y Operaciones Internas Preocupantes (lavado de dinero). Incluye formatos oficiales, layouts de 36 campos, plazos y ejemplos prácticos.
      </p>

      <div style="text-align: center; margin-top: 2rem;">
        <div style="display: inline-flex; gap: 1rem; align-items: center; background: var(--primary-50); padding: 1rem 2rem; border-radius: var(--border-radius); border: 2px solid var(--primary-200);">
          <span style="font-weight: 600; color: var(--primary-700);">📅 Actualizado 2025</span>
          <span style="color: var(--neutral-400);">|</span>
          <span style="font-weight: 600; color: var(--primary-700);">✅ Formatos Oficiales CNBV</span>
          <span style="color: var(--neutral-400);">|</span>
          <span style="font-weight: 600; color: var(--primary-700);">📋 Layout 36 Campos</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Tipos de Reportes -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Tipos de Reportes PLD: Operaciones Relevantes, Inusuales e Internas Preocupantes</h2>

      <div class="grid grid-3">
        <!-- Operaciones Relevantes -->
        <div class="catalog-card">
          <div class="catalog-icon" style="font-size: 3rem;">📊</div>
          <h3>Reporte de Operaciones Relevantes</h3>
          <p><strong>Umbral:</strong> Operaciones ≥ $7,500 USD o equivalente en otras monedas</p>
          <p style="margin-top: 1rem; color: var(--neutral-700);">
            Se reportan operaciones realizadas con <strong>billetes y monedas metálicas, cheques de viajero, o monedas acuñadas en platino, oro y plata</strong> que superen el umbral de $7,500 USD (o equivalente en moneda nacional/extranjera), consolidando operaciones del mismo cliente en un periodo de 24 horas.
          </p>
          <div style="margin-top: 1.5rem; padding: 1rem; background: var(--primary-50); border-radius: var(--border-radius);">
            <strong style="color: var(--primary-700);">Plazo de envío:</strong><br>
            Trimestral: 10 últimos días hábiles de ene/abr/jul/oct
          </div>
        </div>

        <!-- Operaciones Inusuales -->
        <div class="catalog-card">
          <div class="catalog-icon" style="font-size: 3rem;">🔍</div>
          <h3>Reporte de Operaciones Inusuales</h3>
          <p><strong>Criterio:</strong> Operaciones que no concuerdan con el perfil transaccional del cliente</p>
          <p style="margin-top: 1rem; color: var(--neutral-700);">
            Operaciones que por su monto, frecuencia o características no se apegan al comportamiento habitual del cliente o carecen de justificación económica o legal aparente. Incluye 13 circunstancias de inusualidad definidas en la Disposición 30a.
          </p>
          <div style="margin-top: 1.5rem; padding: 1rem; background: var(--warning-50); border-radius: var(--border-radius); border: 1px solid var(--warning-200);">
            <strong style="color: var(--warning-700);">Plazo para dictaminación:</strong><br>
            Máximo 60 días naturales desde la alerta<br>
            <strong style="color: var(--warning-700); margin-top: 0.5rem; display: block;">Plazo de presentación:</strong>
            3 días hábiles post-dictamen del Comité
          </div>
        </div>

        <!-- Internas Preocupantes -->
        <div class="catalog-card">
          <div class="catalog-icon" style="font-size: 3rem;">🚨</div>
          <h3>Reporte de Operaciones Internas Preocupantes</h3>
          <p><strong>Criterio:</strong> Sospecha fundada de lavado de dinero o financiamiento al terrorismo</p>
          <p style="margin-top: 1rem; color: var(--neutral-700);">
            Operaciones que por sus características pudieran favorecer, prestar ayuda o cooperación para la comisión de delitos de lavado de dinero o financiamiento al terrorismo.
          </p>
          <div style="margin-top: 1.5rem; padding: 1rem; background: var(--danger-50); border-radius: var(--border-radius); border: 1px solid var(--danger-200);">
            <strong style="color: var(--danger-700);">Plazo para dictaminación:</strong><br>
            Máximo 60 días naturales desde la alerta<br>
            <strong style="color: var(--danger-700); margin-top: 0.5rem; display: block;">Plazo de presentación:</strong>
            3 días hábiles post-dictamen del Comité
          </div>
        </div>
      </div>

      <!-- Reporte de 24 horas -->
      <div style="margin-top: 3rem; padding: 2rem; background: linear-gradient(135deg, #fee 0%, #fdd 100%); border-radius: var(--border-radius); border: 2px solid var(--danger-400); box-shadow: var(--shadow-lg);">
        <div style="display: flex; align-items: center; gap: 1.5rem;">
          <div style="font-size: 4rem;">⚠️</div>
          <div style="flex: 1;">
            <h3 style="color: var(--danger-700); margin: 0 0 0.5rem 0; font-size: 1.5rem;">Reporte de 24 Horas (Operación Inusual Urgente)</h3>
            <p style="margin: 0 0 1rem 0; color: var(--neutral-800); line-height: 1.6;">
              Cuando existan <strong>sospechas fundadas o indicios</strong> de que los recursos provienen de actividades ilícitas o están destinados a favorecer delitos de lavado de dinero o financiamiento al terrorismo (Art. 139 Quáter o 400 Bis CPF).
            </p>
            <div style="background: white; padding: 1rem; border-radius: 8px; border-left: 4px solid var(--danger-600);">
              <strong style="color: var(--danger-700);">Plazo de presentación:</strong><br>
              <span style="font-size: 1.125rem; font-weight: 700; color: var(--danger-700);">24 HORAS</span> contadas desde que la Entidad conoce la información<br>
              <small style="color: var(--neutral-600); margin-top: 0.5rem; display: block;">Se debe insertar la leyenda "Reporte de 24 horas" en el campo de descripción</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabla Comparativa -->
      <div style="margin-top: 4rem;">
        <h3 class="section-title" style="text-align: center; margin-bottom: 2rem;">Tabla Comparativa: Operaciones Relevantes vs Inusuales vs Preocupantes</h3>

        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: var(--shadow-md); border-radius: var(--border-radius); overflow: hidden;">
            <thead>
              <tr style="background: var(--primary-600); color: white;">
                <th style="padding: 1rem; text-align: left; font-weight: 700;">Característica</th>
                <th style="padding: 1rem; text-align: left; font-weight: 700;">Operaciones Relevantes</th>
                <th style="padding: 1rem; text-align: left; font-weight: 700;">Operaciones Inusuales</th>
                <th style="padding: 1rem; text-align: left; font-weight: 700;">Internas Preocupantes</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Criterio Principal</td>
                <td style="padding: 1rem;">Monto ≥ $7,500 USD</td>
                <td style="padding: 1rem;">No concuerda con perfil transaccional</td>
                <td style="padding: 1rem;">Sospecha fundada LD/FT</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Base Legal</td>
                <td style="padding: 1rem;">Ley Federal PLD Art. 17</td>
                <td style="padding: 1rem;">Disposición 30a (13 circunstancias)</td>
                <td style="padding: 1rem;">Art. 400 Bis Código Penal</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Plazo de Dictaminación</td>
                <td style="padding: 1rem;">N/A (reporte automático por monto)</td>
                <td style="padding: 1rem;"><strong>Máximo 60 días naturales</strong> desde la alerta</td>
                <td style="padding: 1rem;"><strong>Máximo 60 días naturales</strong> desde la alerta</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Plazo de Presentación</td>
                <td style="padding: 1rem;"><strong>Trimestral:</strong> 10 últimos días hábiles de ene/abr/jul/oct</td>
                <td style="padding: 1rem;"><strong>3 días hábiles</strong> post-dictamen del Comité</td>
                <td style="padding: 1rem;"><strong>3 días hábiles</strong> post-dictamen del Comité</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Formato de Período</td>
                <td style="padding: 1rem;">AAAAMM (mensual)</td>
                <td style="padding: 1rem;">AAAAMMDD (fecha específica)</td>
                <td style="padding: 1rem;">AAAAMMDD (fecha específica)</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Campos del Layout</td>
                <td style="padding: 1rem;">28 campos (14, 29-36 nulos)</td>
                <td style="padding: 1rem;">36 campos completos</td>
                <td style="padding: 1rem;">36 campos completos</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Campo 35 (Descripción)</td>
                <td style="padding: 1rem;">❌ Nulo</td>
                <td style="padding: 1rem;">✅ Obligatorio (4,000 caracteres)</td>
                <td style="padding: 1rem;">✅ Obligatorio (4,000 caracteres)</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Campo 36 (Razones)</td>
                <td style="padding: 1rem;">❌ Nulo</td>
                <td style="padding: 1rem;">✅ Obligatorio (4,000 caracteres)</td>
                <td style="padding: 1rem;">✅ Obligatorio (4,000 caracteres)</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--neutral-200);">
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Instrumentos</td>
                <td style="padding: 1rem;">Efectivo (billetes/monedas), cheques de viajero, metales preciosos (platino, oro, plata)</td>
                <td style="padding: 1rem;">Cualquier operación financiera</td>
                <td style="padding: 1rem;">Cualquier operación sospechosa</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: 600; background: var(--neutral-50);">Gravedad</td>
                <td style="padding: 1rem;"><span style="color: var(--success-600);">●</span> Informativo</td>
                <td style="padding: 1rem;"><span style="color: var(--warning-600);">●</span> Alerta Moderada</td>
                <td style="padding: 1rem;"><span style="color: var(--danger-600);">●</span> Alerta Alta</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Layout Completo -->
  <section class="section" style="background: var(--neutral-50);">
    <div class="container">
      <div style="text-align: center; padding: 3rem 0;">
        <h2 class="section-title">📝 Layout Completo: 36 Campos Oficiales CNBV</h2>
        <p class="section-subtitle" style="max-width: 800px; margin: 0 auto 2rem;">
          Consulta el layout oficial completo campo por campo con validaciones, tipos de dato y ejemplos. Guía interactiva con filtros por tipo de reporte (Relevantes, Inusuales, Internas Preocupantes).
        </p>
        <div class="alert alert-info" style="max-width: 900px; margin: 0 auto; text-align: left;">
          <strong>✅ El layout completo incluye:</strong>
          <ul style="margin-top: 1rem;">
            <li>✅ 36 campos con validaciones específicas por tipo de reporte</li>
            <li>✅ Descripción detallada campo por campo</li>
            <li>✅ Validaciones y formatos requeridos (VRC, VIC, VPC)</li>
            <li>✅ Tipos de dato y longitudes máximas</li>
            <li>✅ Referencias a catálogos CNBV necesarios</li>
            <li>✅ Filtros interactivos por tipo de reporte</li>
            <li>✅ Búsqueda en tiempo real por campo</li>
            <li>✅ Estructura para campos 35 (DO) y 36 (RI)</li>
          </ul>
        </div>
        <a href="layout-reportes-pld.php"
           class="btn btn-primary btn-lg"
           style="margin-top: 2rem;">
          📋 Ver Layout Completo 36 Campos →
        </a>
      </div>
    </div>
  </section>

  <!-- Ejemplos Prácticos -->
  <section class="section" style="background: var(--neutral-50);">
    <div class="container">
      <h2 class="section-title">Ejemplos de Operaciones Relevantes, Inusuales e Internas Preocupantes</h2>
      <p class="section-subtitle">
        Casos prácticos reales que ilustran cuándo se debe generar cada tipo de reporte según las Disposiciones CNBV y guías de mejores prácticas de la UIF.
      </p>

      <div class="grid grid-3" style="margin-top: 2rem;">
        <!-- Ejemplo Operaciones Relevantes -->
        <div style="padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-top: 4px solid var(--success-600);">
          <h3 style="color: var(--success-700); margin-bottom: 1rem;">📊 Ejemplo: Operación Relevante</h3>
          <div style="background: var(--neutral-50); padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            <p style="margin: 0;"><strong>Escenario:</strong> Cliente deposita $8,000 USD en efectivo</p>
          </div>
          <p><strong>¿Por qué se reporta?</strong></p>
          <ul style="font-size: 0.875rem; line-height: 1.6;">
            <li>Supera umbral de $7,500 USD</li>
            <li>Instrumento: Efectivo (billetes/monedas)</li>
            <li>Consolidación: Operación única</li>
            <li>Base legal: Disposición XXVII DCG SOFOMES</li>
          </ul>
          <p style="margin-top: 1rem;"><strong>Plazo:</strong> Trimestral (10 últimos días hábiles de ene/abr/jul/oct)</p>
          <p><strong>Campos requeridos:</strong> 1-28 del layout</p>
        </div>

        <!-- Ejemplo Operaciones Inusuales -->
        <div style="padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-top: 4px solid var(--warning-600);">
          <h3 style="color: var(--warning-700); margin-bottom: 1rem;">🔍 Ejemplo: Operación Inusual</h3>
          <div style="background: var(--neutral-50); padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            <p style="margin: 0;"><strong>Escenario:</strong> Cliente con perfil de $5,000 MXN/mes deposita $200,000 MXN sin justificación</p>
          </div>
          <p><strong>¿Por qué se reporta?</strong></p>
          <ul style="font-size: 0.875rem; line-height: 1.6;">
            <li>No concuerda con perfil transaccional</li>
            <li>Monto 40x superior al promedio</li>
            <li>Sin explicación económica aparente</li>
            <li>Circunstancia: Disposición 30a, fracción II</li>
          </ul>
          <p style="margin-top: 1rem;"><strong>Plazos:</strong></p>
          <ul style="font-size: 0.875rem; line-height: 1.6;">
            <li><strong>Dictaminación:</strong> Máximo 60 días naturales desde la alerta</li>
            <li><strong>Presentación:</strong> 3 días hábiles post-dictamen del Comité</li>
          </ul>
          <p><strong>Campos requeridos:</strong> 1-36 del layout (incluye campos 35 y 36 obligatorios)</p>
        </div>

        <!-- Ejemplo Internas Preocupantes -->
        <div style="padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-top: 4px solid var(--danger-600);">
          <h3 style="color: var(--danger-700); margin-bottom: 1rem;">🚨 Ejemplo: Interna Preocupante</h3>
          <div style="background: var(--neutral-50); padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            <p style="margin: 0;"><strong>Escenario:</strong> Cliente en lista de alto riesgo UIF realiza múltiples transferencias fraccionadas</p>
          </div>
          <p><strong>¿Por qué se reporta?</strong></p>
          <ul style="font-size: 0.875rem; line-height: 1.6;">
            <li>Sospecha fundada de lavado de dinero</li>
            <li>Cliente en lista restringida</li>
            <li>Fraccionamiento intencional (estructuración)</li>
            <li>Elementos posiblemente constitutivos de delito</li>
          </ul>
          <p style="margin-top: 1rem;"><strong>Plazos:</strong></p>
          <ul style="font-size: 0.875rem; line-height: 1.6;">
            <li><strong>Dictaminación:</strong> Máximo 60 días naturales desde la alerta</li>
            <li><strong>Presentación:</strong> 3 días hábiles post-dictamen del Comité</li>
          </ul>
          <p><strong>Campos requeridos:</strong> 1-36 del layout (análisis profundo en campos 35 y 36)</p>
        </div>
      </div>

      <div class="alert alert-danger" style="margin-top: 2rem;">
        <strong>⚠️ Importante:</strong> Estos son ejemplos ilustrativos. Cada caso debe analizarse individualmente considerando el contexto completo del cliente, su perfil transaccional, actividad económica y toda la información disponible según las Disposiciones de la CNBV y guías de mejores prácticas de la UIF.
      </div>
    </div>
  </section>

  <!-- Catálogos Relacionados -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Catálogos Necesarios para Llenar Reportes</h2>
      <p class="section-subtitle">
        Para completar correctamente los reportes regulatorios, necesitarás consultar los siguientes catálogos CNBV:
      </p>

      <div class="grid grid-2" style="margin-top: 2rem;">
        <div style="padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md);">
          <h4 style="color: var(--primary-600); margin-bottom: 1rem;">📊 Para Operaciones Relevantes</h4>
          <ul class="feature-list">
            <li><a href="catalogos/actividad-economica.php">Actividad Económica del cliente</a></li>
            <li><a href="catalogos/localidades.php">Localidad de la operación</a></li>
            <li><a href="catalogos/monedas.php">Moneda utilizada</a></li>
            <li><a href="catalogos/instrumento-monetario.php">Instrumento monetario</a></li>
          </ul>
        </div>

        <div style="padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md);">
          <h4 style="color: var(--primary-600); margin-bottom: 1rem;">🔍 Para Operaciones Inusuales e Internas Preocupantes</h4>
          <ul class="feature-list">
            <li><a href="catalogos/tipo-reporte.php">Tipo de reporte</a></li>
            <li><a href="catalogos/actividad-economica.php">Actividad económica</a></li>
            <li><a href="catalogos/localidades.php">Localidades involucradas</a></li>
            <li>Motivos de reporte (según análisis)</li>
          </ul>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="catalogos-rips" class="btn btn-outline">
          Ver Todos los Catálogos RIPS F36 →
        </a>
      </div>
    </div>
  </section>

  <!-- Estructura Campos Críticos -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Estructura de Campos Críticos: 35 y 36</h2>
      <p class="section-subtitle">
        Los campos 35 (Descripción de la Operación) y 36 (Razón de Inusualidad) son los más importantes en reportes de Operaciones Inusuales e Internas Preocupantes. La UIF ha definido una estructura específica para mejorar la calidad de los reportes.
      </p>

      <div class="grid grid-2" style="margin-top: 2rem;">
        <div style="padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md);">
          <h3 style="color: var(--primary-600); margin-bottom: 1.5rem;">Campo 35: Descripción de la Operación</h3>
          <ul class="feature-list">
            <li><strong>1. Prioridad:</strong> Indicar ALTA, SIN PRIORIDAD, 24 HORAS, etc.</li>
            <li><strong>2. Conocimiento del cliente:</strong> Antigüedad, productos contratados, experiencia comercial</li>
            <li><strong>3. Producto/Servicio:</strong> Identificación del instrumento financiero y su operativa</li>
            <li><strong>4. Perfil Transaccional:</strong> Monto promedio mensual, frecuencia de operaciones, tipo de movimientos</li>
          </ul>
        </div>

        <div style="padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md);">
          <h3 style="color: var(--primary-600); margin-bottom: 1.5rem;">Campo 36: Razones por las que se Considera Inusual o Preocupante</h3>
          <ul class="feature-list">
            <li><strong>1. Alerta y Análisis:</strong> Descripción de la alerta que generó el reporte</li>
            <li><strong>2. Contexto del Cliente:</strong> Análisis del comportamiento y situación actual</li>
            <li><strong>3. Antecedentes de Reportes Previos:</strong> Historial de reportes anteriores del cliente</li>
            <li><strong>4. Gestiones Realizadas:</strong> Acciones tomadas por la entidad (llamadas, visitas, revisión documental)</li>
            <li><strong>5. Determinación:</strong> Conclusión fundamentada sobre la inusualidad</li>
          </ul>
        </div>
      </div>

      <div class="alert alert-danger" style="margin-top: 2rem;">
        <strong>⚠️ Errores Comunes Identificados por la UIF:</strong>
        <ul style="margin-top: 1rem;">
          <li>Omisión del perfil transaccional del cliente</li>
          <li>No describir de forma clara la alerta que origina el reporte</li>
          <li>Falta de análisis comparativo que justifique la inusualidad</li>
          <li>Uso de abreviaturas o palabras cortadas que dificultan interpretación</li>
          <li>Redacción con únicamente disposiciones legales sin análisis sustantivo</li>
          <li>Falta de elementos concluyentes derivados del proceso de análisis</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Obligaciones -->
  <section class="section" style="background: var(--neutral-50);">
    <div class="container">
      <h2 class="section-title">Obligaciones de Reporte para SOFOMes</h2>

      <div class="alert alert-danger">
        <strong>⚠️ Incumplimiento de Reportes</strong><br>
        El no enviar los reportes en tiempo y forma puede resultar en:
        <ul style="margin-top: 1rem;">
          <li>Multas de $17,820 a $3,564,000 MXN según gravedad</li>
          <li>Amonestaciones y apercibimientos de la CNBV</li>
          <li>Suspensión temporal o definitiva del registro CONDUSEF</li>
          <li>Responsabilidad penal para el Oficial de Cumplimiento</li>
        </ul>
      </div>

      <div style="margin-top: 2rem;">
        <h3 style="margin-bottom: 1rem;">Requisitos Mínimos:</h3>
        <ul class="feature-list">
          <li>✅ <strong>Sistema automatizado PLD/FT:</strong> Obligatorio para generar reportes</li>
          <li>✅ <strong>Oficial de Cumplimiento certificado:</strong> Responsable de envíos</li>
          <li>✅ <strong>Póliza de seguro o fianza:</strong> Cobertura errores y omisiones</li>
          <li>✅ <strong>Conexión al portal CNBV:</strong> Certificado digital vigente</li>
          <li>✅ <strong>Expedientes de clientes completos:</strong> KYC actualizado</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Preguntas Frecuentes sobre Operaciones Relevantes, Inusuales e Internas Preocupantes</h2>
      <p class="section-subtitle" style="margin-bottom: 3rem;">
        Respuestas basadas en las Disposiciones de la CNBV, la Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita y guías oficiales de la UIF.
      </p>

      <div style="max-width: 900px; margin: 0 auto;">
        <!-- FAQ 1 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-600);">
          <h3 style="color: var(--primary-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Qué son las operaciones relevantes?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Las operaciones relevantes son aquellas operaciones realizadas con <strong>billetes y monedas metálicas de curso legal, cheques de viajero, o monedas acuñadas en platino, oro y plata</strong> que alcanzan o superan el umbral de <strong>$7,500 dólares estadounidenses</strong> (o su equivalente en moneda nacional o extranjera). Deben reportarse <strong>trimestralmente</strong> ante la CNBV dentro de los <strong>10 últimos días hábiles de enero, abril, julio y octubre</strong> por las operaciones de los 3 meses anteriores. El umbral se aplica consolidando todas las operaciones del mismo cliente en un periodo de 24 horas.
          </p>
        </div>

        <!-- FAQ 2 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-600);">
          <h3 style="color: var(--primary-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Cuál es el monto de las operaciones relevantes?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            El monto establecido para operaciones relevantes es de <strong>$7,500 USD (siete mil quinientos dólares estadounidenses)</strong> o su equivalente en otras monedas. Este umbral aplica únicamente a operaciones realizadas con <strong>billetes y monedas metálicas de curso legal, cheques de viajero, y monedas acuñadas en platino, oro y plata</strong> según lo establece la Disposición XXVII del DCG SOFOMES. Si un cliente realiza varias operaciones el mismo día que sumen o superen este monto, deben consolidarse y reportarse como una sola operación relevante.
          </p>
        </div>

        <!-- FAQ 3 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--warning-600);">
          <h3 style="color: var(--warning-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Qué son las operaciones inusuales?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Las operaciones inusuales son aquellas que <strong>no concuerdan con el perfil transaccional del cliente</strong> por su monto, frecuencia o características, o que carecen de justificación económica o legal aparente. La Disposición 30a de la CNBV establece 13 circunstancias específicas que califican como inusuales. No dependen de un monto fijo, sino del análisis del comportamiento del cliente. Deben reportarse en un plazo de 60 días naturales después de su detección.
          </p>
        </div>

        <!-- FAQ 4 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--warning-600);">
          <h3 style="color: var(--warning-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Cuáles son las operaciones inusuales?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Las operaciones inusuales incluyen 13 circunstancias definidas en la Disposición 30a de la CNBV, entre ellas: operaciones que no coinciden con la actividad económica del cliente, incrementos inusuales en depósitos, operaciones estructuradas para evitar umbrales, uso de instrumentos no habituales, operaciones con personas de alto riesgo o de países sancionados, y transacciones sin lógica económica aparente. Cada caso requiere un análisis individual basado en el conocimiento del cliente y su perfil transaccional.
          </p>
        </div>

        <!-- FAQ 5 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--warning-600);">
          <h3 style="color: var(--warning-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Qué es una operación interna preocupante?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Una operación interna preocupante es aquella que presenta <strong>sospecha fundada de estar relacionada con lavado de dinero o financiamiento al terrorismo</strong>. Va más allá de lo inusual: implica elementos que pudieran favorecer, prestar ayuda o cooperación para la comisión de estos delitos según el Artículo 400 Bis del Código Penal Federal. Requiere un análisis profundo y documentación exhaustiva en los campos 35 y 36 del layout. Se reporta en 60 días naturales y tiene el nivel de gravedad más alto.
          </p>
        </div>

        <!-- FAQ 6 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--success-600);">
          <h3 style="color: var(--success-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Cuándo se reportan las operaciones relevantes?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Las operaciones relevantes se reportan <strong>trimestralmente</strong> ante la CNBV dentro de los <strong>10 últimos días hábiles de enero, abril, julio y octubre</strong> de cada año. Cada reporte incluye todas las operaciones de los 3 meses anteriores. Por ejemplo, en enero se reportan las operaciones de octubre, noviembre y diciembre. El reporte se envía en formato de archivo con estructura de 36 campos (aunque solo 28 se llenan para operaciones relevantes), siguiendo el layout oficial de la Disposición 28ª del DCG SOFOMES.
          </p>
        </div>

        <!-- FAQ 7 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-600);">
          <h3 style="color: var(--primary-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Qué diferencia hay entre operaciones relevantes, inusuales y preocupantes?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            La diferencia principal está en el criterio de reporte: <strong>Operaciones Relevantes</strong> se basan en monto (≥$7,500 USD) y son automáticas; <strong>Operaciones Inusuales</strong> requieren análisis del perfil transaccional del cliente (no coincide con su comportamiento habitual); <strong>Internas Preocupantes</strong> implican sospecha fundada de lavado de dinero o terrorismo. Los plazos también difieren: trimestralmente (10 últimos días hábiles de ene/abr/jul/oct) para Relevantes, 60 días naturales para Inusuales y Preocupantes. Además, Relevantes usan 28 campos del layout, mientras Inusuales y Preocupantes requieren los 36 campos completos.
          </p>
        </div>

        <!-- FAQ 8 -->
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-600);">
          <h3 style="color: var(--primary-700); margin-bottom: 1rem; font-size: 1.125rem;">¿Dónde se reportan las operaciones relevantes, inusuales y preocupantes en México?</h3>
          <p style="line-height: 1.6; color: var(--neutral-700);">
            Las SOFOMes ENR (Entidades No Reguladas) reportan todos los tipos de operaciones (Relevantes, Inusuales e Internas Preocupantes) <strong>directamente ante la CNBV</strong> (Comisión Nacional Bancaria y de Valores) a través del portal SITI. La CNBV posteriormente remite esta información a la UIF (Unidad de Inteligencia Financiera). Los reportes deben enviarse en formato de archivo siguiendo el layout oficial de 36 campos publicado en el DOF, utilizando certificado digital vigente.
          </p>
        </div>
      </div>

      <div class="alert alert-info" style="margin-top: 3rem; max-width: 900px; margin-left: auto; margin-right: auto;">
        <strong>💡 ¿Más dudas?</strong> Consulta el <a href="layout-reportes-pld.php" style="color: var(--primary-700); text-decoration: underline;">layout completo de 36 campos</a> con validaciones específicas y ejemplos, o revisa los <a href="catalogos-rips" style="color: var(--primary-700); text-decoration: underline;">catálogos oficiales CNBV</a> necesarios para llenar correctamente cada campo.
      </div>
    </div>
  </section>



<?php include 'includes/footer.php'; ?>
