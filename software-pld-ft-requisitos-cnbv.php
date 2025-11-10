<?php
/**
 * Software PLD/FT para SOFOMes: Requisitos CNBV 2025
 *
 * Guía completa de sistemas automatizados obligatorios según las
 * Disposiciones de Carácter General (DCG) en materia de Prevención
 * de Lavado de Dinero y Financiamiento al Terrorismo.
 */

// Variables para header.php
$pageTitle = "Software PLD/FT para SOFOMes: Requisitos CNBV 2025 | 11 Funciones Obligatorias";
$pageDescription = "Sistema automatizado PLD/FT obligatorio para SOFOMes: 11 funciones CNBV, checklist dictamen técnico (53 preguntas), costos implementación $100K-$1M/año. Guía completa 2025.";
$pageKeywords = "software pld/ft sofom, requisitos cnbv, dictamen tecnico, sistema automatizado, oficial cumplimiento, disposiciones cnbv, kyc sofom";
$activeMenu = "software-pld";

// Schema.org - HowTo para implementación Software PLD/FT
$schemaJson = <<<'SCHEMA'
<!-- Schema.org - HowTo -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "Cómo Implementar Software PLD/FT para SOFOM según CNBV",
  "description": "Guía paso a paso para cumplir con los requisitos de sistema automatizado PLD/FT establecidos por la CNBV para SOFOMes ENR y ER.",
  "totalTime": "P90D",
  "estimatedCost": {
    "@type": "MonetaryAmount",
    "currency": "MXN",
    "value": "500000"
  },
  "step": [
    {
      "@type": "HowToStep",
      "name": "Evaluar requisitos regulatorios",
      "text": "Revisar las 11 funciones obligatorias establecidas en las Disposiciones de Carácter General de la CNBV"
    },
    {
      "@type": "HowToStep",
      "name": "Seleccionar proveedor de software",
      "text": "Comparar opciones de software que cumplan con las 53 preguntas del checklist del dictamen técnico"
    },
    {
      "@type": "HowToStep",
      "name": "Obtener dictamen técnico",
      "text": "Contratar perito certificado por CNBV para evaluar el sistema ($30,241 costo oficial)"
    },
    {
      "@type": "HowToStep",
      "name": "Implementar y parametrizar",
      "text": "Configurar alertas, catálogos RIPS, listas bloqueadas, expedientes KYC"
    },
    {
      "@type": "HowToStep",
      "name": "Capacitar al Oficial de Cumplimiento",
      "text": "Certificación CNBV obligatoria (100 hrs curso + examen + registro)"
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
      "name": "¿Cuánto cuesta un software PLD/FT para SOFOM?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El costo varía según volumen de operaciones: Setup $50K-$200K MXN + Licenciamiento anual $100K-$1M MXN. El dictamen técnico CNBV cuesta $30,241 (fijo). Total primer año: $180K-$1.2M MXN."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué son las 11 funciones obligatorias del software PLD/FT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las 11 funciones obligatorias incluyen: conservación de expedientes KYC, transmisión de reportes a UIF/CNBV, clasificación de operaciones, detección y monitoreo, sistema de alertas, análisis de operaciones inusuales, base consolidada de clientes, registros históricos, reporte interno seguro, seguridad de la información, metodología de riesgo, y alertas de PPE/Listas Bloqueadas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Es obligatorio el software PLD/FT para SOFOMes ENR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, es obligatorio tanto para SOFOM ER como ENR. La falta de sistema automatizado puede resultar en cancelación del registro CONDUSEF y multas millonarias por parte de la CNBV."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué es el dictamen técnico CNBV para software PLD/FT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Es una evaluación realizada por un perito certificado por la CNBV que verifica que el software cumple con las 53 preguntas del checklist oficial. Costo: $30,241. Vigencia: 2 años. Obligatorio para operar como SOFOM."
      }
    }
  ]
}
</script>

<!-- Schema.org - Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TechArticle",
  "headline": "Software PLD/FT para SOFOMes: Requisitos CNBV 2025",
  "description": "Guía técnica completa de sistemas automatizados PLD/FT obligatorios para SOFOMes según CNBV",
  "author": {
    "@type": "Organization",
    "name": "SOFOMES.COM"
  },
  "publisher": {
    "@type": "Organization",
    "name": "SOFOMES.COM",
    "logo": {
      "@type": "ImageObject",
      "url": "https://sofomes.com/assets/img/logo_sofomes.png"
    }
  },
  "datePublished": "2025-01-10",
  "dateModified": "2025-01-10"
}
</script>
SCHEMA;

include 'includes/header.php';
?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" style="background: var(--neutral-50); padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
  <div class="container">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList" style="display: flex; gap: 0.5rem; list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo $basePath; ?>index.php" style="color: var(--primary-600); text-decoration: none;">
          <span itemprop="name">Inicio</span>
        </a>
        <meta itemprop="position" content="1" />
        <span style="margin-left: 0.5rem; color: var(--neutral-400);">/</span>
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" style="color: var(--neutral-700);">Software PLD/FT CNBV</span>
        <meta itemprop="item" content="https://sofomes.com/software-pld-ft-requisitos-cnbv.php" />
        <meta itemprop="position" content="2" />
      </li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, #1F2937 0%, #111827 100%); color: white; padding: 4rem 0;">
  <div class="container">
    <div class="hero-content" style="max-width: 900px; margin: 0 auto; text-align: center;">
      <h1 class="hero-title" style="font-size: 2.5rem; margin-bottom: 1.5rem;">
        Software PLD/FT para SOFOMes:<br>Requisitos CNBV <span class="current-year"></span>
      </h1>
      <p class="hero-subtitle" style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
        Sistema automatizado obligatorio para cumplir con las <strong>Disposiciones de Carácter General (DCG)</strong>
        en materia de Prevención de Lavado de Dinero y Financiamiento al Terrorismo.
      </p>

      <div class="stats-bar" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
        <div class="stat-item" style="text-align: center;">
          <strong style="display: block; font-size: 2rem; color: var(--success-400);">11</strong>
          <span style="font-size: 0.875rem; opacity: 0.8;">Funciones Obligatorias</span>
        </div>
        <div class="stat-item" style="text-align: center;">
          <strong style="display: block; font-size: 2rem; color: var(--warning-400);">53</strong>
          <span style="font-size: 0.875rem; opacity: 0.8;">Preguntas Dictamen</span>
        </div>
        <div class="stat-item" style="text-align: center;">
          <strong style="display: block; font-size: 2rem; color: var(--danger-400);">$30,241</strong>
          <span style="font-size: 0.875rem; opacity: 0.8;">Costo Dictamen CNBV</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: ¿Qué es? -->
<section id="que-es" class="section">
  <div class="container">
    <h2 class="section-title">¿Qué es un Sistema Automatizado PLD/FT?</h2>

    <div class="grid grid-2">
      <div>
        <p class="lead">
          Es un <strong>software especializado</strong> que las SOFOMes (ER y ENR) deben implementar para cumplir
          con las obligaciones de <strong>Prevención de Lavado de Dinero (PLD)</strong> y
          <strong>Financiamiento al Terrorismo (FT)</strong> establecidas por la CNBV.
        </p>

        <h3>Marco Legal</h3>
        <ul class="feature-list">
          <li><strong>Disposiciones de Carácter General (DCG)</strong> - CNBV</li>
          <li><strong>Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita</strong></li>
          <li><strong>Código Fiscal de la Federación</strong> - Artículos relevantes PLD/FT</li>
          <li><strong>Circulares CNBV</strong> - Modificaciones y actualizaciones</li>
        </ul>

        <div class="alert alert-danger" style="margin-top: 1.5rem;">
          <strong>⚠️ Obligatorio:</strong> La falta de sistema automatizado puede resultar en
          <strong>cancelación del registro CONDUSEF</strong> y sanciones millonarias por la CNBV.
        </div>
      </div>

      <div>
        <h3>¿Por qué es obligatorio?</h3>
        <p>
          El volumen de operaciones de las SOFOMes (miles o millones de transacciones anuales)
          hace <strong>imposible el monitoreo manual</strong>. El software automatizado permite:
        </p>

        <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <h4 style="margin-bottom: 1rem;">Funciones Clave:</h4>
          <ul style="margin: 0;">
            <li>🔍 <strong>Detección en tiempo real</strong> de operaciones sospechosas</li>
            <li>🚨 <strong>Alertas automáticas</strong> de PPE y listas bloqueadas</li>
            <li>📊 <strong>Reportes RIPS F41/F36</strong> generados automáticamente</li>
            <li>🗄️ <strong>Expedientes KYC digitales</strong> con consulta instantánea</li>
            <li>📈 <strong>Análisis de patrones</strong> transaccionales</li>
            <li>🔒 <strong>Trazabilidad completa</strong> auditable por CNBV</li>
          </ul>
        </div>

        <div class="cta-box" style="margin-top: 2rem;">
          <h4>¿Necesitas implementar Software PLD/FT?</h4>
          <p>Consultoría especializada + Dictamen Técnico CNBV incluido</p>
          <a href="https://wa.me/5215547626178?text=Hola%2C%20necesito%20implementar%20Software%20PLD%2FFT%20para%20mi%20SOFOM" class="btn btn-primary" target="_blank" rel="noopener">
            Solicitar Consultoría →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: 11 Funciones Obligatorias -->
<section id="funciones" class="section">
  <div class="container">
    <h2 class="section-title">11 Funciones Obligatorias del Sistema Automatizado</h2>
    <p class="section-subtitle">
      Según las Disposiciones de Carácter General de la CNBV, cada SOFOM debe contar con sistemas
      automatizados que desarrollen las siguientes funciones:
    </p>

    <div style="display: grid; gap: 1.5rem; margin-top: 3rem;">
      <!-- Fracción I -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">I</span>
          Conservación y Actualización de Expedientes KYC
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Conservar y actualizar, así como permitir la consulta de los datos relativos a los <strong>registros de la
          información que obre en el respectivo expediente de identificación</strong> de cada Cliente.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Implementación práctica:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Base de datos con expedientes digitales por cliente</li>
            <li>Documentos escaneados (INE, comprobante domicilio, acta constitutiva)</li>
            <li>Historial de actualizaciones con fecha y responsable</li>
            <li>Consulta instantánea por múltiples criterios (RFC, CURP, nombre)</li>
          </ul>
        </div>
      </div>

      <!-- Fracción II -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">II</span>
          Generación y Transmisión de Reportes RIPS
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Generar y transmitir de forma segura a la Secretaría, por conducto de la Comisión, la información
          relativa a los reportes de <strong>Operaciones Relevantes, Operaciones Inusuales y Operaciones Internas
          Preocupantes</strong> a que se refieren las presentes Disposiciones.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Formatos requeridos:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li><strong>SOFOM ER:</strong> RIPS F41 (36 campos, 245 países, 40 tipos operación)</li>
            <li><strong>SOFOM ENR:</strong> RIPS F36 (36 campos, 19 tipos SOFOM, 4 tipos asesores)</li>
            <li>Transmisión cifrada vía SITI (Sistema Integral de Tecnología e Información - UIF)</li>
            <li>Validación automática de layouts antes de envío</li>
          </ul>
        </div>
        <p style="margin-top: 1rem; font-size: 0.875rem; color: var(--neutral-600); font-style: italic;">
          <em>Excepción: Las Entidades podrán generar de forma manual el reporte a que se refiere la 10ª Ter de las presentes Disposiciones.</em>
        </p>
      </div>

      <!-- Fracción III -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">III</span>
          Clasificación de Operaciones y Productos
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Clasificar los tipos de <strong>Operaciones o productos financieros</strong> que ofrezcan las Entidades a sus Clientes o
          Usuarios, con base en los criterios que establezca la propia Entidad, a fin de <strong>detectar posibles Operaciones
          Inusuales</strong>.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Clasificación típica por riesgo:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li><strong>Riesgo Alto:</strong> Operaciones en efectivo >$100K, transferencias internacionales</li>
            <li><strong>Riesgo Medio:</strong> Créditos sin garantía, factoraje, tarjetas prepagadas</li>
            <li><strong>Riesgo Bajo:</strong> Créditos garantizados con nómina, arrendamiento con garantía real</li>
          </ul>
        </div>
      </div>

      <!-- Fracción IV -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">IV</span>
          Detección y Monitoreo de Operaciones por Cliente
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Detectar y monitorear las <strong>Operaciones realizadas por un mismo Cliente</strong>, o por un mismo Usuario de los
          señalados en la 14ª, 15ª y 16ª de las presentes Disposiciones.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Monitoreo continuo de:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Múltiples operaciones del mismo cliente en periodo corto</li>
            <li>Operaciones fraccionadas para evadir umbrales</li>
            <li>Patrones inusuales vs perfil transaccional histórico</li>
            <li>Operaciones entre clientes relacionados (misma IP, mismo domicilio, etc.)</li>
          </ul>
        </div>
      </div>

      <!-- Fracción V -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">V</span>
          Sistema de Alertas Automáticas
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Ejecutar el <strong>sistema de alertas</strong> contemplado en la 21ª de las presentes Disposiciones.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Alertas configurables:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Operaciones >$8,025 USD (umbral relevantes)</li>
            <li>Desviación >30% del perfil transaccional</li>
            <li>Operaciones con países de alto riesgo (GAFI lista gris/negra)</li>
            <li>Coincidencias con listas bloqueadas o PPE</li>
            <li>Múltiples intentos fallidos de operación</li>
          </ul>
        </div>
      </div>

      <!-- Fracción V Bis -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--warning-500);">
        <h3 style="color: var(--warning-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--warning-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1rem;">V.Bis</span>
          Análisis Avanzado de Operaciones Inusuales
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Contribuir a la detección, seguimiento y análisis de las posibles <strong>Operaciones Inusuales y
          Operaciones Internas Preocupantes</strong>, considerando al menos:
        </p>
        <ul style="margin-left: 1.5rem; line-height: 1.7;">
          <li>Información proporcionada por el Cliente al inicio de la relación comercial</li>
          <li>Registros históricos de las Operaciones realizadas por este</li>
          <li>Comportamiento transaccional</li>
          <li>Saldos promedio</li>
          <li>Cualquier otro parámetro que pueda aportar mayores elementos para el análisis</li>
        </ul>
        <div style="background: var(--warning-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem; border: 1px solid var(--warning-200);">
          <strong>⚡ Machine Learning:</strong> Software moderno usa algoritmos de ML para detectar patrones complejos
          que serían imposibles de identificar manualmente.
        </div>
      </div>

      <!-- Fracción VI -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">VI</span>
          Base Consolidada de Contratos por Cliente
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Agrupar en una <strong>base consolidada</strong> los diferentes contratos de un mismo Cliente, a efecto de controlar y
          dar seguimiento integral a sus saldos y Operaciones.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Vista consolidada incluye:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Todos los créditos del cliente (vigentes e históricos)</li>
            <li>Cuentas de factoraje, arrendamiento, tarjetas</li>
            <li>Saldo total adeudado</li>
            <li>Exposición total de la SOFOM con el cliente</li>
            <li>Operaciones del mes/trimestre/año</li>
          </ul>
        </div>
      </div>

      <!-- Fracción VII -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">VII</span>
          Registros Históricos
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Conservar <strong>registros históricos</strong> de las posibles Operaciones Inusuales y Operaciones Internas
          Preocupantes.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Conservación mínima 10 años:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Todas las alertas generadas (descartadas o reportadas)</li>
            <li>Análisis realizados por el Oficial de Cumplimiento</li>
            <li>Justificación de cada decisión (reportar o descartar)</li>
            <li>Evidencia documental de investigación interna</li>
          </ul>
        </div>
      </div>

      <!-- Fracción VIII -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-500);">
        <h3 style="color: var(--primary-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--primary-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">VIII</span>
          Canal de Reporte Interno Seguro
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Servir de medio para que el personal de las Entidades reporte a las áreas internas que las mismas
          determinen, de forma <strong>segura, confidencial y auditable</strong>, las posibles Operaciones Inusuales u Operaciones
          Internas Preocupantes.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Características del canal:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Acceso para todo el personal (ejecutivos, cajeros, analistas)</li>
            <li>Formulario estructurado con campos obligatorios</li>
            <li>Envío directo al Oficial de Cumplimiento</li>
            <li>Registro inmutable (no se puede editar/borrar)</li>
            <li>Confidencialidad del reportante</li>
          </ul>
        </div>
      </div>

      <!-- Fracción IX -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--danger-500);">
        <h3 style="color: var(--danger-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--danger-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">IX</span>
          Seguridad de la Información
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Mantener <strong>esquemas de seguridad</strong> de la información procesada, que garanticen la <strong>integridad,
          disponibilidad, auditabilidad y confidencialidad</strong> de la misma.
        </p>
        <div style="background: var(--danger-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem; border: 1px solid var(--danger-200);">
          <strong>🔒 Controles obligatorios:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li><strong>Cifrado:</strong> En tránsito (TLS 1.3) y en reposo (AES-256)</li>
            <li><strong>Autenticación:</strong> Multifactor para acceso al sistema</li>
            <li><strong>Control de acceso:</strong> Perfiles por rol (RBAC)</li>
            <li><strong>Respaldos:</strong> Diarios automáticos con retención 10 años</li>
            <li><strong>Auditoría:</strong> Logs inmutables de todas las acciones</li>
            <li><strong>Disaster Recovery:</strong> Plan documentado y probado</li>
          </ul>
        </div>
      </div>

      <!-- Fracción IX Bis -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--warning-500);">
        <h3 style="color: var(--warning-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--warning-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1rem;">IX.Bis</span>
          Proveer Información para Metodología de Riesgo
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Proveer la información que las Entidades incluirán en la <strong>metodología que deben elaborar</strong> conforme
          a lo establecido en la 17ª-1 de estas Disposiciones.
        </p>
        <div style="background: var(--neutral-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem;">
          <strong>Insumos para metodología de riesgo:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li>Estadísticas de operaciones por tipo, monto, frecuencia</li>
            <li>Perfiles de clientes y sus patrones transaccionales</li>
            <li>Historial de alertas y su resolución</li>
            <li>Reportes enviados a UIF/CNBV y su seguimiento</li>
          </ul>
        </div>
      </div>

      <!-- Fracción X -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--danger-500);">
        <h3 style="color: var(--danger-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--danger-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">X</span>
          Alertas PPE y Listas Bloqueadas
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Ejecutar un sistema de alertas respecto de aquellas operaciones que se pretendan llevar a cabo con:
        </p>
        <ul style="margin-left: 1.5rem; line-height: 1.7;">
          <li><strong>Personas Políticamente Expuestas (PPE)</strong> - Debida diligencia reforzada</li>
          <li><strong>Personas en Listas de Personas Bloqueadas</strong> - Bloqueo inmediato de operación</li>
        </ul>
        <div style="background: var(--danger-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem; border: 1px solid var(--danger-200);">
          <strong>🚨 Actualización obligatoria:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li><strong>Listas OFAC</strong> (EE.UU.) - Diaria</li>
            <li><strong>Lista de Personas Bloqueadas SAT/UIF</strong> - Inmediata cuando se publique</li>
            <li><strong>Listas ONU</strong> (terrorismo) - Semanal</li>
            <li>Verificación automática en cada operación (tiempo real)</li>
          </ul>
        </div>
      </div>

      <!-- Fracción XI -->
      <div class="requirement-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--success-500);">
        <h3 style="color: var(--success-600); margin-bottom: 1rem;">
          <span style="display: inline-block; width: 40px; height: 40px; background: var(--success-500); color: white; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 1rem; font-size: 1.25rem;">XI</span>
          Verificación de Datos No Presenciales
        </h3>
        <p style="margin-bottom: 1rem; line-height: 1.7;">
          Facilitar la <strong>verificación de los datos y documentos</strong> proporcionados de forma no presencial por el
          Cliente.
        </p>
        <div style="background: var(--success-50); padding: 1rem; border-radius: var(--border-radius); margin-top: 1rem; border: 1px solid var(--success-200);">
          <strong>✅ Onboarding digital:</strong>
          <ul style="margin-top: 0.5rem; margin-bottom: 0;">
            <li><strong>OCR de INE:</strong> Extracción automática de datos</li>
            <li><strong>Validación biométrica:</strong> Comparación foto INE vs selfie</li>
            <li><strong>Proof of life:</strong> Video con instrucciones aleatorias</li>
            <li><strong>Consulta RENAPO:</strong> Validación de CURP en tiempo real</li>
            <li><strong>Geolocalización:</strong> Verificación de ubicación del cliente</li>
            <li><strong>Validación comprobante domicilio:</strong> OCR + verificación CFE/Telmex</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Dictamen Técnico -->
<section id="dictamen" class="section" style="background: var(--neutral-50);">
  <div class="container">
    <h2 class="section-title">Dictamen Técnico CNBV: Checklist de 53 Preguntas</h2>
    <p class="section-subtitle">
      Perito certificado por CNBV evalúa el software con este checklist oficial. Costo: <strong>$30,241 MXN</strong>.
    </p>

    <div class="alert alert-info" style="margin-top: 2rem; margin-bottom: 2rem;">
      <strong>📋 Proceso del Dictamen:</strong>
      <ol style="margin-top: 0.5rem; margin-bottom: 0;">
        <li>Solicitar evaluación a perito certificado CNBV</li>
        <li>Demostración en vivo de las 11 funciones obligatorias</li>
        <li>Revisión de arquitectura técnica (seguridad, respaldos)</li>
        <li>Verificación de 53 criterios del checklist oficial</li>
        <li>Emisión de dictamen favorable (vigencia 2 años)</li>
        <li>Envío a CNBV con solicitud de registro SOFOM</li>
      </ol>
    </div>

    <div style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); margin-top: 2rem;">
      <h3 style="margin-bottom: 1.5rem;">Resumen del Checklist (53 criterios agrupados)</h3>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--primary-50); border-radius: var(--border-radius);">
          📁 Expedientes KYC (10 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--primary-500);">
          <ul>
            <li>¿Almacena expedientes completos por cliente?</li>
            <li>¿Permite actualización con trazabilidad?</li>
            <li>¿Consulta rápida por múltiples criterios?</li>
            <li>¿Conserva versiones históricas?</li>
            <li>¿Alertas de expedientes vencidos/incompletos?</li>
            <li>¿Documentos escaneados con OCR?</li>
            <li>¿Control de acceso por roles?</li>
            <li>¿Auditoría de consultas?</li>
            <li>¿Respaldo automático?</li>
            <li>¿Cifrado de datos sensibles?</li>
          </ul>
        </div>
      </details>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--warning-50); border-radius: var(--border-radius);">
          📊 Reportes RIPS (8 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--warning-500);">
          <ul>
            <li>¿Genera layouts RIPS F41/F36 automáticamente?</li>
            <li>¿Validación de layouts pre-envío?</li>
            <li>¿Integración con SITI UIF?</li>
            <li>¿Usa catálogos oficiales CNBV actualizados?</li>
            <li>¿Generación de 3 tipos de reportes (Relevantes, Inusuales, Internas)?</li>
            <li>¿Control de plazos de envío?</li>
            <li>¿Historial de reportes enviados?</li>
            <li>¿Acuse de recibo CNBV?</li>
          </ul>
        </div>
      </details>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--success-50); border-radius: var(--border-radius);">
          🔍 Monitoreo y Alertas (12 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--success-500);">
          <ul>
            <li>¿Sistema de alertas configurable?</li>
            <li>¿Detección de operaciones inusuales en tiempo real?</li>
            <li>¿Análisis de patrones transaccionales?</li>
            <li>¿Comparación vs perfil de cliente?</li>
            <li>¿Alertas de múltiples operaciones fraccionadas?</li>
            <li>¿Detección de operaciones relacionadas?</li>
            <li>¿Dashboard de alertas pendientes?</li>
            <li>¿Workflow de análisis y resolución?</li>
            <li>¿Registro de justificación (reportar/descartar)?</li>
            <li>¿KPIs de desempeño del sistema?</li>
            <li>¿Reportes gerenciales?</li>
            <li>¿Machine Learning para mejora continua?</li>
          </ul>
        </div>
      </details>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--danger-50); border-radius: var(--border-radius);">
          🚨 PPE y Listas Bloqueadas (6 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--danger-500);">
          <ul>
            <li>¿Integración con listas OFAC, ONU, SAT/UIF?</li>
            <li>¿Actualización automática de listas?</li>
            <li>¿Verificación en tiempo real en cada operación?</li>
            <li>¿Bloqueo automático si coincidencia con lista?</li>
            <li>¿Alertas de clientes marcados como PPE?</li>
            <li>¿Registro de verificaciones realizadas?</li>
          </ul>
        </div>
      </details>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--neutral-100); border-radius: var(--border-radius);">
          🔒 Seguridad e Infraestructura (9 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--neutral-500);">
          <ul>
            <li>¿Cifrado en tránsito (TLS 1.3+)?</li>
            <li>¿Cifrado en reposo (AES-256+)?</li>
            <li>¿Autenticación multifactor?</li>
            <li>¿Control de acceso por roles (RBAC)?</li>
            <li>¿Logs de auditoría inmutables?</li>
            <li>¿Respaldos automáticos diarios?</li>
            <li>¿Plan de Disaster Recovery documentado y probado?</li>
            <li>¿Cumplimiento RGPD/LFPDPPP?</li>
            <li>¿Certificaciones de seguridad reconocidas internacionalmente?</li>
          </ul>
        </div>
      </details>

      <details style="margin-bottom: 1rem;">
        <summary style="cursor: pointer; font-weight: 600; padding: 1rem; background: var(--primary-50); border-radius: var(--border-radius);">
          🎯 Usabilidad y Soporte (8 preguntas)
        </summary>
        <div style="padding: 1rem; margin-top: 0.5rem; border-left: 3px solid var(--primary-500);">
          <ul>
            <li>¿Interfaz intuitiva y fácil de usar?</li>
            <li>¿Documentación técnica completa?</li>
            <li>¿Manuales de usuario?</li>
            <li>¿Capacitación incluida?</li>
            <li>¿Soporte técnico 24/7?</li>
            <li>¿Actualizaciones regulatorias incluidas?</li>
            <li>¿SLA definido?</li>
            <li>¿Compatibilidad con sistemas legacy?</li>
          </ul>
        </div>
      </details>
    </div>

    <div class="cta-box" style="margin-top: 3rem;">
      <h3>¿Necesitas Obtener el Dictamen Técnico?</h3>
      <p>Conectamos con peritos certificados CNBV. Proceso completo en 2-3 semanas.</p>
      <a href="https://wa.me/5215547626178?text=Necesito%20dictamen%20t%C3%A9cnico%20CNBV%20para%20Software%20PLD%2FFT" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
        Solicitar Dictamen Técnico →
      </a>
    </div>
  </div>
</section>

<!-- Section: Costos -->
<section id="costos" class="section">
  <div class="container">
    <h2 class="section-title">Costos de Implementación: Software PLD/FT</h2>
    <p class="section-subtitle">
      Rangos REALES de inversión según volumen de operaciones de tu SOFOM.
    </p>

    <div class="grid grid-2" style="margin-top: 3rem;">
      <!-- SOFOM Pequeña -->
      <div class="cost-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); border-top: 4px solid var(--success-500);">
        <h3 style="color: var(--success-600); margin-bottom: 1rem;">
          SOFOM Pequeña
        </h3>
        <p style="color: var(--neutral-600); margin-bottom: 1.5rem;">
          < 500 clientes activos<br>
          < 5,000 operaciones/año
        </p>

        <div class="cost-breakdown">
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Setup inicial</strong>
            <span style="float: right; color: var(--success-600); font-weight: 600;">$50K - $100K</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Implementación, parametrización, capacitación</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Licenciamiento anual</strong>
            <span style="float: right; color: var(--success-600); font-weight: 600;">$100K - $200K</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">SaaS mensual + actualizaciones</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Dictamen técnico CNBV</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$30,241</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Obligatorio cada 2 años</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0;">
            <strong>TOTAL PRIMER AÑO</strong>
            <span style="float: right; font-size: 1.5rem; color: var(--success-600); font-weight: 700;">$180K - $330K</span>
          </div>
        </div>
      </div>

      <!-- SOFOM Mediana -->
      <div class="cost-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); border-top: 4px solid var(--warning-500);">
        <h3 style="color: var(--warning-600); margin-bottom: 1rem;">
          SOFOM Mediana
        </h3>
        <p style="color: var(--neutral-600); margin-bottom: 1.5rem;">
          500 - 5,000 clientes activos<br>
          5,000 - 50,000 operaciones/año
        </p>

        <div class="cost-breakdown">
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Setup inicial</strong>
            <span style="float: right; color: var(--warning-600); font-weight: 600;">$100K - $300K</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Integraciones, migración de datos, capacitación avanzada</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Licenciamiento anual</strong>
            <span style="float: right; color: var(--warning-600); font-weight: 600;">$200K - $500K</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Modelo por volumen de transacciones</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Dictamen técnico CNBV</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$30,241</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Obligatorio cada 2 años</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0;">
            <strong>TOTAL PRIMER AÑO</strong>
            <span style="float: right; font-size: 1.5rem; color: var(--warning-600); font-weight: 700;">$330K - $830K</span>
          </div>
        </div>
      </div>

      <!-- SOFOM Grande -->
      <div class="cost-card" style="background: white; padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); border-top: 4px solid var(--danger-500); grid-column: span 2;">
        <h3 style="color: var(--danger-600); margin-bottom: 1rem;">
          SOFOM Grande / ER
        </h3>
        <p style="color: var(--neutral-600); margin-bottom: 1.5rem;">
          > 5,000 clientes activos | > 50,000 operaciones/año | Operaciones internacionales
        </p>

        <div class="cost-breakdown">
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Setup inicial</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$300K - $1M+</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Desarrollo a medida, integraciones complejas, consultoría especializada</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Licenciamiento anual</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$500K - $3M+</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Enterprise + módulos avanzados (ML, API, BI)</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Dictamen técnico CNBV</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$30,241</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Obligatorio cada 2 años</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0; border-bottom: 1px solid var(--neutral-200);">
            <strong>Mantenimiento y soporte</strong>
            <span style="float: right; color: var(--danger-600); font-weight: 600;">$100K - $500K</span>
            <p style="font-size: 0.875rem; color: var(--neutral-600); margin-top: 0.25rem;">Soporte 24/7, actualizaciones, infraestructura dedicada</p>
          </div>
          <div class="cost-item" style="padding: 1rem 0;">
            <strong>TOTAL PRIMER AÑO</strong>
            <span style="float: right; font-size: 1.5rem; color: var(--danger-600); font-weight: 700;">$930K - $4.5M+</span>
          </div>
        </div>
      </div>
    </div>

    <div class="alert alert-warning" style="margin-top: 3rem;">
      <strong>💡 Tip de Ahorro:</strong> Algunas SOFOMes pequeñas usan software compartido (multi-tenant) para reducir costos a $50-80K/año,
      pero deben verificar que el dictamen técnico cubra su instancia específica.
    </div>
  </div>
</section>

<!-- Section: FAQ -->
<section id="faq" class="section" style="background: var(--neutral-50);">
  <div class="container">
    <h2 class="section-title">Preguntas Frecuentes: Software PLD/FT</h2>

    <div class="faq-grid">
      <div class="faq-item">
        <h3 class="faq-question">¿Puedo usar Excel en lugar de software automatizado?</h3>
        <div class="faq-answer">
          <p>
            <strong>NO.</strong> La CNBV exige explícitamente "sistemas automatizados" que ejecuten las 11 funciones obligatorias.
            Excel NO califica como sistema automatizado porque:
          </p>
          <ul>
            <li>No ejecuta alertas en tiempo real</li>
            <li>No se integra con SITI UIF para envío de reportes</li>
            <li>No actualiza listas bloqueadas automáticamente</li>
            <li>No cumple con requisitos de seguridad (cifrado, auditoría, RBAC)</li>
          </ul>
          <p style="margin-top: 0.5rem;">
            <strong>Riesgo:</strong> Cancelación de registro CONDUSEF + multas millonarias.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Software en la nube o on-premise?</h3>
        <div class="faq-answer">
          <p>
            Ambos son válidos si cumplen las 11 funciones y pasan el dictamen técnico. Ventajas de cada uno:
          </p>
          <p style="margin-top: 0.5rem;">
            <strong>Cloud (SaaS):</strong> Actualizaciones automáticas, menor costo inicial, escalabilidad.
          </p>
          <p style="margin-top: 0.5rem;">
            <strong>On-premise:</strong> Control total de datos, cumplimiento de políticas internas de seguridad.
          </p>
          <p style="margin-top: 0.5rem;">
            SOFOMes pequeñas prefieren SaaS ($100-200K/año). SOFOMes grandes/ER prefieren híbrido o on-premise ($500K-3M/año).
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Cada cuánto debo actualizar las listas bloqueadas?</h3>
        <div class="faq-answer">
          <p>
            <strong>OFAC (EE.UU.):</strong> Diaria (son las más dinámicas)<br>
            <strong>Lista SAT/UIF México:</strong> Inmediata cuando se publique en DOF<br>
            <strong>Listas ONU:</strong> Semanal
          </p>
          <p style="margin-top: 0.5rem;">
            El software debe verificar <strong>automáticamente en cada operación</strong> si el cliente/beneficiario está en alguna lista.
            Si hay coincidencia, la operación debe <strong>bloquearse automáticamente</strong> y notificar al Oficial de Cumplimiento.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Qué pasa si no tengo software PLD/FT?</h3>
        <div class="faq-answer">
          <p>
            <strong>Consecuencias reales:</strong>
          </p>
          <ul>
            <li>❌ <strong>No obtienes dictamen técnico</strong> → No te registras como SOFOM</li>
            <li>❌ <strong>Cancelación de registro CONDUSEF</strong> si ya operabas sin software</li>
            <li>❌ <strong>Multas CNBV:</strong> $15,000 - $2,000,000 MXN según gravedad</li>
            <li>❌ <strong>Multas UIF:</strong> Hasta $32 millones MXN por incumplimiento PLD/FT</li>
            <li>❌ <strong>Responsabilidad penal</strong> del Consejo de Administración y Oficial de Cumplimiento</li>
          </ul>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Cuánto tiempo tarda la implementación?</h3>
        <div class="faq-answer">
          <p>
            <strong>SOFOM Pequeña:</strong> 4-6 semanas (setup + capacitación + pruebas)<br>
            <strong>SOFOM Mediana:</strong> 8-12 semanas (+ integraciones con core bancario)<br>
            <strong>SOFOM Grande/ER:</strong> 3-6 meses (desarrollo a medida + homologaciones)
          </p>
          <p style="margin-top: 0.5rem;">
            El dictamen técnico se solicita <strong>después</strong> de la implementación completa.
            Evaluación del perito: 1-2 semanas. Emisión de dictamen: 1 semana.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Qué proveedores de software PLD/FT recomiendan?</h3>
        <div class="faq-answer">
          <p>
            No podemos hacer recomendaciones comerciales específicas, pero verifica que el proveedor:
          </p>
          <ul>
            <li>✅ Tenga <strong>dictámenes técnicos aprobados</strong> de clientes actuales</li>
            <li>✅ Cuente con <strong>perito certificado CNBV</strong> en su red</li>
            <li>✅ Ofrezca <strong>actualizaciones regulatorias</strong> incluidas</li>
            <li>✅ Tenga <strong>soporte técnico en español</strong> 24/7</li>
            <li>✅ Cumpla con <strong>LFPDPPP</strong> (protección de datos personales)</li>
            <li>✅ Ofrezca <strong>demo en vivo</strong> de las 11 funciones obligatorias</li>
          </ul>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Software PLD/FT es igual para ER y ENR?</h3>
        <div class="faq-answer">
          <p>
            Las <strong>11 funciones obligatorias son iguales</strong>, pero hay diferencias en configuración:
          </p>
          <p style="margin-top: 0.5rem;">
            <strong>SOFOM ER:</strong>
          </p>
          <ul>
            <li>Reportes RIPS F41 (245 países, 40 tipos operación)</li>
            <li>Catálogos más amplios (multidivisa, internacional)</li>
          </ul>
          <p style="margin-top: 0.5rem;">
            <strong>SOFOM ENR:</strong>
          </p>
          <ul>
            <li>Reportes RIPS F36 (19 tipos SOFOM, 4 tipos asesores)</li>
            <li>Catálogos enfocados en operaciones nacionales</li>
          </ul>
          <p style="margin-top: 0.5rem;">
            Proveedores modernos ofrecen <strong>un solo software configurable</strong> para ambos tipos.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">¿Necesito contratar un Oficial de Cumplimiento?</h3>
        <div class="faq-answer">
          <p>
            <strong>SÍ, es obligatorio</strong> para todas las SOFOMes (ER y ENR). Requisitos:
          </p>
          <ul>
            <li>✅ <strong>Certificación CNBV</strong> (100 hrs curso + examen) - Costo: $16,558</li>
            <li>✅ <strong>Renovación cada 3 años</strong></li>
            <li>✅ Dedicación de tiempo completo (40 hrs/semana)</li>
            <li>✅ No puede tener otro cargo en la SOFOM</li>
            <li>✅ Responsabilidad personal ante UIF/CNBV</li>
          </ul>
          <p style="margin-top: 0.5rem;">
            El <strong>software PLD/FT facilita</strong> el trabajo del Oficial, pero NO lo reemplaza.
            El Oficial debe analizar alertas, aprobar/rechazar reportes, actualizar metodología de riesgo.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section class="section" style="background: linear-gradient(135deg, #1F2937 0%, #111827 100%); color: white; text-align: center; padding: 4rem 0;">
  <div class="container">
    <h2 style="font-size: 2rem; margin-bottom: 1rem;">
      ¿Listo para Implementar tu Software PLD/FT?
    </h2>
    <p style="font-size: 1.125rem; margin-bottom: 2rem; opacity: 0.9; max-width: 700px; margin-left: auto; margin-right: auto;">
      Consultoría especializada + Conexión con peritos certificados CNBV + Soporte en implementación.
      Cumple con las 11 funciones obligatorias y obtén tu dictamen técnico.
    </p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="https://wa.me/5215547626178?text=Quiero%20implementar%20Software%20PLD%2FFT%20para%20mi%20SOFOM" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
        Solicitar Consultoría →
      </a>
      <a href="<?php echo $basePath; ?>index.php#constituir" class="btn btn-secondary btn-lg">
        Ver Proceso Constitución SOFOM
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
