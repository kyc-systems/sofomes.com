<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title">
          &iquest;Qu&eacute; es una SOFOM en M&eacute;xico?<br>
          <span style="font-size: 0.65em; font-weight: 400; opacity: 0.9;">Gu&iacute;a Completa <span class="current-year"></span> + Directorio de <span id="hero-total"><?= esc($sofomesTotal) ?></span> SOFOMes</span>
        </h1>
        <p class="hero-subtitle">
          Una <strong>SOFOM (Sociedad Financiera de Objeto M&uacute;ltiple)</strong> es una entidad que otorga cr&eacute;dito, arrendamiento y factoraje <strong>sin captar ahorro del p&uacute;blico</strong>. Conoce los 2 tipos (ER y ENR), ejemplos reales como Konf&iacute;o y Kueski, y el directorio completo CONDUSEF.
        </p>

        <!-- Stats Bar -->
        <div class="stats-bar">
          <div class="stat-item">
            <strong id="stat-total">...</strong>
            <span>SOFOMes en Operaci&oacute;n</span>
          </div>
          <div class="stat-item">
            <strong>98.2%</strong>
            <span>Son SOFOM ENR</span>
          </div>
          <div class="stat-item">
            <strong>70%</strong>
            <span>Tasa Aprobaci&oacute;n</span>
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
        <img src="<?= base_url('assets/img/main.webp') ?>" alt="Directorio SOFOMes México - SOFOMes en operación CONDUSEF" loading="eager" width="665" height="389" style="height: auto;">
      </div>
    </div>
  </div>
</section>

<!-- Section: ¿Qué es una SOFOM? -->
<section id="que-es" class="section">
  <div class="container">
    <h2 class="section-title">SOFOM: Definici&oacute;n, Tipos y Caracter&iacute;sticas</h2>

    <div class="grid grid-2">
      <div>
        <p class="lead">
          Una <strong>SOFOM (Sociedad Financiera de Objeto M&uacute;ltiple)</strong> es una entidad financiera mexicana
          que otorga cr&eacute;dito, arrendamiento financiero y factoraje <strong>sin captar ahorro del p&uacute;blico</strong>.
        </p>

        <h3>Caracter&iacute;sticas Principales</h3>
        <ul class="feature-list">
          <li><strong>Mayor aprobaci&oacute;n:</strong> 70% vs 20% de bancos tradicionales</li>
          <li><strong>Velocidad:</strong> Decisi&oacute;n en 48-72 horas vs 3-4 meses bancos</li>
          <li><strong>Flexibilidad:</strong> Soluciones &quot;a la medida&quot; (revolventes, gracia, solo intereses)</li>
          <li><strong>Inclusi&oacute;n:</strong> 6 de cada 10 PyMEs obtienen su primer cr&eacute;dito en una SOFOM</li>
          <li><strong>Ventaja fiscal:</strong> Intereses a personas morales exentos de IVA</li>
        </ul>

        <div class="alert alert-info">
          <strong>Dato clave:</strong> En M&eacute;xico operan actualmente <strong><span id="alert-count">...</span> SOFOMes</strong> en operaci&oacute;n registradas
          en CONDUSEF, de las cuales el 98.2% son ENR (Entidad No Regulada).
        </div>
      </div>

      <div>
        <h3>SOFOM ER vs ENR: &iquest;Cu&aacute;l es la diferencia?</h3>

        <table class="comparison-table">
          <thead>
            <tr>
              <th>Caracter&iacute;stica</th>
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
              <td>V&iacute;nculo patrimonial</td>
              <td>Con bancos/GF</td>
              <td>Independiente</td>
            </tr>
            <tr>
              <td>Regulaci&oacute;n CNBV</td>
              <td>Integral</td>
              <td>Solo PLD/FT</td>
            </tr>
            <tr>
              <td>Capital m&iacute;nimo</td>
              <td>Variable (CNBV)</td>
              <td>Sin m&iacute;nimo legal</td>
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
          <strong>Ejemplos SOFOM ENR:</strong> Konf&iacute;o, Kueski, Cr&eacute;dito Para Ti
        </p>

        <div style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
          <a href="<?= site_url('sofom-er-vs-enr') ?>" class="btn btn-primary">Ver Comparativa Completa ER vs ENR &rarr;</a>
          <a href="#casos-exito" class="btn btn-outline">Ver Casos de &Eacute;xito &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Directorio SOFOMes -->
<section id="directorio" class="section">
  <div class="container">
    <h2 class="section-title">Lista de SOFOMes en M&eacute;xico: <span id="directory-title-count">...</span> Registradas en CONDUSEF</h2>
    <p class="section-subtitle">
      Base de datos actualizada al 27 de octubre de <span class="current-year"></span>. La &uacute;nica lista p&uacute;blica searchable de todas las SOFOMes en M&eacute;xico.
    </p>

    <div class="directory-stats">
      <div class="stat-card">
        <div class="stat-number" id="directory-stat-total">...</div>
        <div class="stat-label">SOFOMes Activas</div>
        <div class="stat-detail">Todas en operaci&oacute;n</div>
      </div>

      <div class="stat-card">
        <div class="stat-number">774</div>
        <div class="stat-label">Ciudad de M&eacute;xico</div>
        <div class="stat-detail">37.3% del total</div>
      </div>

      <div class="stat-card">
        <div class="stat-number">283</div>
        <div class="stat-label">Nuevo Le&oacute;n</div>
        <div class="stat-detail">Hub financiero norte</div>
      </div>

      <div class="stat-card">
        <div class="stat-number">186</div>
        <div class="stat-label">Jalisco</div>
        <div class="stat-detail">Corredor Baj&iacute;o</div>
      </div>
    </div>

    <div class="cta-box">
      <h3>Accede al Directorio Completo</h3>
      <p>Busca por nombre, estado, tipo (ER/ENR), fecha de actualizaci&oacute;n. Exporta a CSV/Excel.</p>
      <a href="<?= site_url('lista-sofomes-mexico') ?>" class="btn btn-primary btn-lg">
        Buscar en Directorio (<span id="cta-count">...</span> SOFOMes)
      </a>
    </div>
  </div>
</section>

<!-- Section: SOFOM FOVISSSTE -->
<section id="fovissste" class="section">
  <div class="container">
    <h2 class="section-title">SOFOMes Autorizadas por FOVISSSTE</h2>
    <p class="section-subtitle">
      14 SOFOMes autorizadas para gestionar cr&eacute;ditos hipotecarios FOVISSSTE.
      Proceso: 3 semanas con documentaci&oacute;n completa (antes 6 meses).
    </p>

    <div class="grid grid-2">
      <div>
        <h3>&iquest;C&oacute;mo funciona el cr&eacute;dito FOVISSSTE con SOFOMes?</h3>

        <ol class="process-list">
          <li>
            <strong>Asesor&iacute;a Gratuita</strong>
            <p>La SOFOM ofrece asesor&iacute;a profesional sin costo sobre esquemas de cr&eacute;dito, montos y condiciones.</p>
          </li>
          <li>
            <strong>Gesti&oacute;n del Tr&aacute;mite</strong>
            <p>Ayuda con documentaci&oacute;n, verificaci&oacute;n de la vivienda y coordinaci&oacute;n con el notario.</p>
          </li>
          <li>
            <strong>Formalizaci&oacute;n R&aacute;pida</strong>
            <p>Escrituraci&oacute;n en 3 semanas o 1 mes si la documentaci&oacute;n est&aacute; completa (antes 6 meses).</p>
          </li>
          <li>
            <strong>Supervisi&oacute;n FOVISSSTE</strong>
            <p>Todas las SOFOMes est&aacute;n inscritas en el padr&oacute;n oficial y supervisadas constantemente.</p>
          </li>
        </ol>

        <div class="alert alert-warning">
          <strong>Importante:</strong> La asesor&iacute;a de la SOFOM es <strong>100% gratuita</strong>.
          Si una SOFOM solicita pago por el tr&aacute;mite, puede ser reportada.
        </div>
      </div>

      <div>
        <h3>SOFOMes FOVISSSTE Autorizadas (14)</h3>

        <div class="fovissste-list">
          <div class="fovissste-item featured">
            <span class="badge badge-gold">#1 Calificada</span>
            <strong>CR&Eacute;DITO PARA TI, S.A. DE C.V. SOFOM E.N.R.</strong>
            <p>La SOFOM #1 calificada por FOVISSSTE seg&uacute;n indicadores oficiales.</p>
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
            <strong>DO&Ntilde;A JUANITA FINANZAS POPULARES, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>FACICASA, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>FACTOR GFC GLOBAL, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>HIPOTECARIA CREA M&Aacute;S, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>HIPOTECARIA HOGAR, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>INCLUSI&Oacute;N HIPOTECARIA, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>NEW LIFE &amp; ZONE MEXICO, S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>S&Eacute; DUE&Ntilde;O S.A. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>FINANCIERA DESARROLLADORA DE CAPITAL S.A.P.I. DE C.V. SOFOM E.N.R.</strong>
          </div>
          <div class="fovissste-item">
            <strong>GRUPO PADIO FINANCIERA, S.A.P.I DE C.V., SOFOM, E.N.R.</strong>
          </div>
        </div>

        <a href="#fovissste" class="btn btn-primary" style="margin-top: 1.5rem">
          Ver Gu&iacute;a Completa FOVISSSTE &rarr;
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Section: Casos de Éxito -->
<section id="casos-exito" class="section">
  <div class="container">
    <h2 class="section-title">Casos de &Eacute;xito: 5 SOFOMes que Debes Conocer</h2>
    <p class="section-subtitle">
      Ejemplos reales de SOFOMes exitosas en M&eacute;xico con datos verificables y m&eacute;tricas de desempe&ntilde;o.
    </p>

    <div class="cases-grid">
      <!-- Konfío -->
      <div class="case-card">
        <div class="case-header">
          <h3>Konf&iacute;o</h3>
          <span class="badge badge-unicorn">Unicornio</span>
        </div>
        <div class="case-stats">
          <div class="case-stat">
            <strong>$1,300M USD</strong>
            <span>Valuaci&oacute;n 2021</span>
          </div>
          <div class="case-stat">
            <strong>Softbank</strong>
            <span>Inversionista</span>
          </div>
        </div>
        <p class="case-description">
          SOFOM enfocada en cr&eacute;ditos en l&iacute;nea para PyMEs que no califican para financiamiento bancario.
          Considerada una de las mejores fintechs mexicanas.
        </p>
        <ul class="case-features">
          <li>Registro completo CONDUSEF</li>
          <li>Cr&eacute;ditos 100% en l&iacute;nea</li>
          <li>Respaldo Quona Capital, Kaszek, QED</li>
        </ul>
      </div>

      <!-- Kueski -->
      <div class="case-card">
        <div class="case-header">
          <h3>Kueski</h3>
          <span class="badge badge-fintech">Top 250 Fintech</span>
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
          <li>Innovaci&oacute;n tecnol&oacute;gica</li>
        </ul>
      </div>

      <!-- Crédito Para Ti -->
      <div class="case-card">
        <div class="case-header">
          <h3>Cr&eacute;dito Para Ti</h3>
          <span class="badge badge-fovissste">#1 FOVISSSTE</span>
        </div>
        <div class="case-stats">
          <div class="case-stat">
            <strong>#1 Calificada</strong>
            <span>Por FOVISSSTE</span>
          </div>
          <div class="case-stat">
            <strong>Autorizada</strong>
            <span>Cr&eacute;dito hipotecario</span>
          </div>
        </div>
        <p class="case-description">
          SOFOM E.N.R. clasificada como #1 por FOVISSSTE para cr&eacute;ditos hipotecarios.
          Calificaci&oacute;n basada en operaciones asignadas, escrituradas y atenci&oacute;n a aclaraciones.
        </p>
        <ul class="case-features">
          <li>Mejor desempe&ntilde;o FOVISSSTE</li>
          <li>Supervisi&oacute;n constante</li>
          <li>Especializaci&oacute;n hipotecaria</li>
        </ul>
      </div>

      <!-- Serfimex -->
      <div class="case-card">
        <div class="case-header">
          <h3>Serfimex</h3>
          <span class="badge badge-bursatil">BIVA</span>
        </div>
        <div class="case-stats">
          <div class="case-stat">
            <strong>&gt;$400M</strong>
            <span>Cartera m&iacute;nima</span>
          </div>
          <div class="case-stat">
            <strong>BIVA</strong>
            <span>Bolsa listada</span>
          </div>
        </div>
        <p class="case-description">
          Debut&oacute; en la Bolsa Institucional de Valores (BIVA), logro alcanzable solo para SOFOMes con m&aacute;s de
          400 millones de pesos en cartera (solo 13% del sector).
        </p>
        <ul class="case-features">
          <li>Impulso PyMEs</li>
          <li>Financiamiento tur&iacute;stico</li>
          <li>Fondeo burs&aacute;til</li>
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
            <span>Satisfacci&oacute;n cliente</span>
          </div>
        </div>
        <p class="case-description">
          SOFOM E.R. con desempe&ntilde;o excepcional. &Iacute;ndice de Reclamaci&oacute;n (IR) de solo 2.82 por cada 10,000 contratos,
          muy por debajo del promedio sectorial de 18.45.
        </p>
        <ul class="case-features">
          <li>Cr&eacute;dito automotriz</li>
          <li>Bajo &iacute;ndice quejas</li>
          <li>Regulaci&oacute;n CNBV integral</li>
        </ul>
      </div>
    </div>

    <div class="alert alert-info" style="margin-top: 2rem">
      <strong>Contexto del sector:</strong> Las SOFOMes son la figura financiera m&aacute;s numerosa en M&eacute;xico,
      con m&aacute;s de 20 millones de clientes y cerca del 20% de penetraci&oacute;n en el financiamiento total del sector privado.
    </div>

    <div class="cta-box" style="margin-top: 2rem; text-align: center;">
      <h3 style="margin-bottom: 1rem;">&iquest;Buscas la Mejor SOFOM para tu Negocio?</h3>
      <p style="margin-bottom: 1.5rem;">
        Consulta nuestro ranking completo con las <strong>Top 10 mejores SOFOMes de M&eacute;xico 2025</strong>,
        incluyendo an&aacute;lisis de tasas, aprobaci&oacute;n, portafolio y reputaci&oacute;n verificada.
      </p>
      <a href="<?= site_url('mejores-sofomes-mexico-2025') ?>" class="btn btn-primary btn-lg">
        Ver Ranking Completo Top 10 &rarr;
      </a>
    </div>
  </div>
</section>

<!-- Section: Constituir SOFOM ENR -->
<section id="constituir" class="section">
  <div class="container">
    <h2 class="section-title">C&oacute;mo Constituir una SOFOM ENR en M&eacute;xico</h2>
    <p class="section-subtitle">
      Proceso completo con costos REALES y plazos regulatorios verificables. No promesas irreales.
    </p>

    <div class="grid grid-2">
      <div>
        <h3>Costos Reales de Constituci&oacute;n</h3>
        <p class="lead">
          <strong>Rango: $85,000 - $500,000 MXN</strong><br>
          (No creas el mito de &quot;13K pesos&quot;)
        </p>

        <div class="cost-breakdown">
          <div class="cost-item">
            <strong>Dictamen T&eacute;cnico CNBV</strong>
            <span class="cost-amount">$30,241</span>
            <p>Oficial de Cumplimiento + sistema automatizado PLD/FT (millones de pesos)</p>
          </div>
          <div class="cost-item">
            <strong>Certificaci&oacute;n Oficial Cumplimiento</strong>
            <span class="cost-amount">$16,558</span>
            <p>Curso CNBV obligatorio (100 hrs) + examen + registro</p>
          </div>
          <div class="cost-item">
            <strong>Notar&iacute;a + Permisos</strong>
            <span class="cost-amount">$50,000 - $80,000</span>
            <p>Acta constitutiva, protocolizaci&oacute;n, inscripci&oacute;n RPP</p>
          </div>
          <div class="cost-item">
            <strong>Software PLD/FT Automatizado</strong>
            <span class="cost-amount">Variable</span>
            <p>Licenciamiento mensual/anual: (seg&uacute;n volumen de clientes u operaciones)</p>
          </div>
          <div class="cost-item">
            <strong>Asesor&iacute;a Legal Especializada</strong>
            <span class="cost-amount">$100,000 - $300,000</span>
            <p>Constituci&oacute;n + manuales + pol&iacute;ticas + representaci&oacute;n regulatoria</p>
          </div>
        </div>

        <div class="alert alert-warning">
          <strong>Capital Pr&aacute;ctico Recomendado:</strong> 50 millones de pesos para viabilidad operativa real
          (aunque legalmente no hay m&iacute;nimo para SOFOM ENR).
        </div>
      </div>

      <div>
        <h3>Proceso Paso a Paso (3-4 meses)</h3>

        <ol class="timeline-list">
          <li>
            <strong>1. Denominaci&oacute;n Social</strong>
            <p>Solicitud SE (Secretar&iacute;a de Econom&iacute;a). Debe incluir &quot;S.A. DE C.V. SOFOM E.N.R.&quot;</p>
            <span class="timeline-duration">1 semana</span>
          </li>
          <li>
            <strong>2. Opini&oacute;n CONDUSEF</strong>
            <p>Solicitar opini&oacute;n para uso de denominaci&oacute;n SOFOM en SIPRES.</p>
            <span class="timeline-duration">30 d&iacute;as h&aacute;biles</span>
          </li>
          <li>
            <strong>3. Constituci&oacute;n Notarial</strong>
            <p>Acta constitutiva con objeto social espec&iacute;fico, estatutos, capital social m&iacute;nimo de 50K UDIS.</p>
            <span class="timeline-duration">30 d&iacute;as</span>
          </li>
          <li>
            <strong>4. Dictamen T&eacute;cnico CNBV</strong>
            <p>Perito certificado eval&uacute;a sistema automatizado PLD/FT (53 preguntas checklist).</p>
            <span class="timeline-duration">50 d&iacute;as</span>
          </li>
          <li>
            <strong>5. Contrato SIC CONDUSEF</strong>
            <p>Sociedad de Informaci&oacute;n Crediticia (Bur&oacute; o C&iacute;rculo de Cr&eacute;dito).</p>
            <span class="timeline-duration">Variable</span>
          </li>
          <li>
            <strong>6. Inscripci&oacute;n SIPRES</strong>
            <p>Registro en Sistema de Registro de Prestadores de Servicios Financieros.</p>
            <span class="timeline-duration">10 d&iacute;as</span>
          </li>
          <li>
            <strong>7. Clave SITI PLD/FT</strong>
            <p>Registro en Sistema Integral de Tecnolog&iacute;a e Informaci&oacute;n (UIF).</p>
            <span class="timeline-duration">1 semana</span>
          </li>
        </ol>

        <div class="cta-box">
          <h4>&iquest;Necesitas Asesor&iacute;a Especializada?</h4>
          <p>Proceso completo de constituci&oacute;n + Software PLD/FT incluido</p>
          <a href="https://wa.me/5215547626178?text=Hola%2C%20me%20interesa%20solicitar%20consultor%C3%ADa%20para%20constituir%20una%20SOFOM%20ENR" class="btn btn-primary" target="_blank" rel="noopener">Solicitar Consultor&iacute;a &rarr;</a>
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
      Sistema automatizado obligatorio seg&uacute;n CNBV para Prevenci&oacute;n de Lavado de Dinero.
      11 funciones obligatorias + Dictamen T&eacute;cnico.
    </p>

    <div class="grid grid-2" style="margin-top: 2rem;">
      <div style="background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border: 2px solid var(--primary-200); padding: 2.5rem; border-radius: var(--border-radius-lg);">
        <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--primary-900);">11 Funciones Obligatorias CNBV</h3>
        <ul style="margin: 0; line-height: 1.8; color: var(--neutral-700);">
          <li><strong style="color: var(--neutral-900);">Expedientes KYC digitales</strong> con consulta instant&aacute;nea</li>
          <li><strong style="color: var(--neutral-900);">Reportes RIPS F41/F36</strong> autom&aacute;ticos a UIF/CNBV</li>
          <li><strong style="color: var(--neutral-900);">Alertas en tiempo real</strong> de operaciones sospechosas</li>
          <li><strong style="color: var(--neutral-900);">Detecci&oacute;n autom&aacute;tica</strong> PPE y listas bloqueadas (OFAC, ONU, SAT)</li>
          <li><strong style="color: var(--neutral-900);">Monitoreo transaccional</strong> con Machine Learning</li>
          <li><strong style="color: var(--neutral-900);">Seguridad bancaria:</strong> Cifrado AES-256, MFA, auditor&iacute;a</li>
        </ul>
        <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 2px solid var(--primary-200);">
          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; text-align: center;">
            <div>
              <strong style="display: block; font-size: 1.5rem; color: var(--success-600);">11</strong>
              <span style="font-size: 0.875rem; color: var(--neutral-600);">Funciones</span>
            </div>
            <div>
              <strong style="display: block; font-size: 1.5rem; color: var(--warning-600);">53</strong>
              <span style="font-size: 0.875rem; color: var(--neutral-600);">Checklist</span>
            </div>
            <div>
              <strong style="display: block; font-size: 1.5rem; color: var(--danger-600);">$30K</strong>
              <span style="font-size: 0.875rem; color: var(--neutral-600);">Dictamen</span>
            </div>
          </div>
        </div>
      </div>

      <div>
        <h3 style="margin-bottom: 1rem;">Costos de Implementaci&oacute;n</h3>
        <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem;">
          <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Peque&ntilde;a</strong> (&lt; 500 clientes)</p>
          <p style="margin: 0; font-size: 1.25rem; color: var(--success-600); font-weight: 600;">$180K - $330K MXN/a&ntilde;o</p>
        </div>
        <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem;">
          <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Mediana</strong> (500-5K clientes)</p>
          <p style="margin: 0; font-size: 1.25rem; color: var(--warning-600); font-weight: 600;">$330K - $830K MXN/a&ntilde;o</p>
        </div>
        <div style="background: var(--neutral-50); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1.5rem;">
          <p style="margin: 0; margin-bottom: 0.5rem;"><strong>SOFOM Grande/ER</strong> (&gt;5K clientes)</p>
          <p style="margin: 0; font-size: 1.25rem; color: var(--danger-600); font-weight: 600;">$930K - $4.5M+ MXN/a&ntilde;o</p>
        </div>

        <div class="alert alert-danger">
          <strong>Obligatorio:</strong> La falta de software PLD/FT resulta en <strong>cancelaci&oacute;n de registro CONDUSEF</strong> y multas millonarias.
        </div>

        <a href="<?= site_url('software-pld-ft-requisitos-cnbv') ?>" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 1rem;">
          Ver 11 Funciones + Checklist 53 Preguntas &rarr;
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
        <div style="font-size: 4rem; margin-bottom: 1rem;">&#x1F4CB;</div>
        <h3 style="font-size: 1.5rem; color: var(--primary-900); margin-bottom: 1rem;">
          Cat&aacute;logos RIPS F36
        </h3>
        <p style="color: var(--neutral-700); margin-bottom: 1.5rem; line-height: 1.7;">
          6 cat&aacute;logos oficiales CNBV: Actividad Econ&oacute;mica, Localidades, Monedas, Instrumentos Monetarios y m&aacute;s. B&uacute;squeda en tiempo real.
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
        <a href="<?= site_url('catalogos-rips') ?>" class="btn btn-primary btn-lg">
          Ver Cat&aacute;logos Completos &rarr;
        </a>
      </div>

      <!-- Reportes Regulatorios -->
      <div style="padding: 2.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-lg); text-align: center;">
        <div style="font-size: 4rem; margin-bottom: 1rem;">&#x1F4C4;</div>
        <h3 style="font-size: 1.5rem; color: var(--primary-900); margin-bottom: 1rem;">
          Reportes Regulatorios CNBV
        </h3>
        <p style="color: var(--neutral-700); margin-bottom: 1.5rem; line-height: 1.7;">
          Gu&iacute;a completa de formatos Operaciones Inusuales, Relevantes e Internas Preocupantes: layouts, plazos de env&iacute;o, campos obligatorios y validaciones para cumplimiento regulatorio ante CNBV.
        </p>
        <div style="display: flex; gap: 0.5rem; justify-content: center; margin-bottom: 1.5rem; flex-wrap: wrap;">
          <div style="padding: 0.5rem 1rem; background: var(--success-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--success-200);">
            Inusuales
          </div>
          <div style="padding: 0.5rem 1rem; background: var(--warning-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--warning-200);">
            Relevantes
          </div>
          <div style="padding: 0.5rem 1rem; background: var(--danger-50); border-radius: var(--border-radius); font-size: 0.875rem; border: 1px solid var(--danger-200);">
            Internas Preocupantes
          </div>
        </div>
        <a href="<?= site_url('reportes-regulatorios-cnbv') ?>" class="btn btn-primary btn-lg">
          Ver Gu&iacute;a de Reportes &rarr;
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
        <h3 class="faq-question">&iquest;Cu&aacute;ntas SOFOMes hay en M&eacute;xico en <span class="current-year"></span>?</h3>
        <div class="faq-answer">
          <p>
            Seg&uacute;n el registro SIPRES de CONDUSEF, actualmente operan <strong><span id="faq-count">...</span> SOFOMes en operaci&oacute;n</strong>
            en M&eacute;xico. De estas, el 98.2% (2,038) son ENR (Entidad No Regulada) y solo el 1.8% (38) son ER
            (Entidad Regulada con v&iacute;nculo patrimonial a bancos).
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Cu&aacute;l es la diferencia entre SOFOM ER y ENR?</h3>
        <div class="faq-answer">
          <p>
            <strong>SOFOM ER (Entidad Regulada):</strong> Tiene v&iacute;nculo patrimonial con banco o grupo financiero.
            Regulaci&oacute;n CNBV integral. Ejemplo: GM Financial, Arrendadora Banorte.
          </p>
          <p style="margin-top: 0.5rem">
            <strong>SOFOM ENR (Entidad No Regulada):</strong> Sin v&iacute;nculo con bancos. Solo regulaci&oacute;n PLD/FT.
            M&aacute;s del 98% del mercado. Ejemplo: Konf&iacute;o, Kueski, Cr&eacute;dito Para Ti.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Cu&aacute;nto cuesta constituir una SOFOM ENR?</h3>
        <div class="faq-answer">
          <p>
            El costo REAL de constituci&oacute;n oscila entre <strong>$85,000 y $500,000 MXN</strong>, dependiendo de:
          </p>
          <ul>
            <li>Dictamen T&eacute;cnico CNBV: $30,241</li>
            <li>Certificaci&oacute;n Oficial Cumplimiento: $16,558</li>
            <li>Software PLD/FT automatizado: cientos de miles a millones anuales</li>
            <li>Notar&iacute;a + permisos: $50K-$80K</li>
            <li>Asesor&iacute;a legal especializada: $100K-$300K</li>
          </ul>
          <p style="margin-top: 0.5rem">
            <strong>Capital pr&aacute;ctico recomendado:</strong> 50 millones de pesos para viabilidad operativa
            (aunque no hay m&iacute;nimo legal).
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Cu&aacute;nto tiempo tarda constituir una SOFOM?</h3>
        <div class="faq-answer">
          <p>
            El proceso REAL toma <strong>3 a 4 meses</strong> si se cumple con toda la documentaci&oacute;n y requisitos:
          </p>
          <ol>
            <li>Denominaci&oacute;n social: 1 semana</li>
            <li>Opini&oacute;n CONDUSEF: 30 d&iacute;as h&aacute;biles</li>
            <li>Constituci&oacute;n notarial: 30 d&iacute;as</li>
            <li>Dictamen T&eacute;cnico CNBV: 50 d&iacute;as</li>
            <li>Contrato SIC: variable</li>
            <li>Inscripci&oacute;n SIPRES: 10 d&iacute;as</li>
            <li>Clave SITI PLD/FT: 1 semana</li>
          </ol>
          <p style="margin-top: 0.5rem">
            <em>No creas promesas de &quot;8-12 semanas&quot;. Los plazos regulatorios son fijos.</em>
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Qu&eacute; es una SOFOM FOVISSSTE?</h3>
        <div class="faq-answer">
          <p>
            Son <strong>14 SOFOMes autorizadas</strong> por FOVISSSTE para gestionar cr&eacute;ditos hipotecarios
            de trabajadores del gobierno. La #1 calificada es <strong>Cr&eacute;dito Para Ti</strong>.
          </p>
          <p style="margin-top: 0.5rem">
            Ventaja principal: reducen el tiempo de escrituraci&oacute;n de <strong>6 meses a 3 semanas</strong>
            cuando la documentaci&oacute;n est&aacute; completa. La asesor&iacute;a es 100% gratuita por ley.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Las SOFOMes son seguras?</h3>
        <div class="faq-answer">
          <p>
            Las SOFOMes est&aacute;n <strong>supervisadas por CONDUSEF</strong> y deben cumplir con regulaci&oacute;n PLD/FT de CNBV.
            Sin embargo, no tienen el respaldo del IPAB (seguro de dep&oacute;sitos bancarios) porque no captan ahorro.
          </p>
          <p style="margin-top: 0.5rem">
            <strong>Recomendaci&oacute;n:</strong> Verifica que la SOFOM est&eacute; registrada en SIPRES de CONDUSEF.
            Busca casos de &eacute;xito verificables (Konf&iacute;o, Kueski, Cr&eacute;dito Para Ti).
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Cu&aacute;l es la tasa de inter&eacute;s de las SOFOMes?</h3>
        <div class="faq-answer">
          <p>
            Las tasas var&iacute;an ampliamente seg&uacute;n el perfil de riesgo:
          </p>
          <ul>
            <li><strong>Empresarial garantizado:</strong> TIIE + 4 a 12 puntos</li>
            <li><strong>PyMEs sin garant&iacute;a:</strong> 30% - 60% anual</li>
            <li><strong>Consumo inmediato:</strong> hasta 150-180% CAT</li>
            <li><strong>Hipotecario FOVISSSTE:</strong> tasas competitivas similares a bancos</li>
          </ul>
          <p style="margin-top: 0.5rem">
            <strong>Importante:</strong> Tasas muy altas reflejan an&aacute;lisis deficiente de riesgo,
            no solo &quot;velocidad&quot;. Compara siempre el CAT (Costo Anual Total).
          </p>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Qu&eacute; ventajas tienen las SOFOMes sobre los bancos?</h3>
        <div class="faq-answer">
          <ul>
            <li><strong>Mayor aprobaci&oacute;n:</strong> 70% vs 20% bancos</li>
            <li><strong>Velocidad:</strong> 48-72 horas vs 3-4 meses</li>
            <li><strong>Flexibilidad:</strong> Revolventes, solo intereses, periodos gracia</li>
            <li><strong>Inclusi&oacute;n:</strong> PyMEs sin historial crediticio</li>
            <li><strong>Ventaja fiscal:</strong> Intereses a personas morales exentos IVA</li>
          </ul>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;Qu&eacute; desventajas tienen las SOFOMes?</h3>
        <div class="faq-answer">
          <ul>
            <li><strong>Tasas m&aacute;s altas:</strong> Hasta 150-180% CAT en consumo</li>
            <li><strong>No hay seguro dep&oacute;sitos:</strong> No captan ahorro, pero esto no aplica a cr&eacute;ditos</li>
            <li><strong>Fondeo limitado:</strong> Primeros 2 a&ntilde;os solo capital propio</li>
            <li><strong>Compliance costoso:</strong> Oficial de Cumplimiento, Auditor&iacute;as, Sistemas PLD/FT</li>
            <li><strong>Morosidad sectorial:</strong> 8.84% promedio</li>
          </ul>
        </div>
      </div>

      <div class="faq-item">
        <h3 class="faq-question">&iquest;D&oacute;nde puedo verificar si una SOFOM est&aacute; registrada?</h3>
        <div class="faq-answer">
          <p>
            Verifica en el <strong>SIPRES (Sistema de Registro de Prestadores de Servicios Financieros)</strong>
            de CONDUSEF:
          </p>
          <p style="margin-top: 0.5rem">
            <a href="https://webapps.condusef.gob.mx/SIPRES/jsp/pub/index.jsp" target="_blank" style="color: #065F46; font-weight: 600;">
              https://webapps.condusef.gob.mx/SIPRES/
            </a>
          </p>
          <p style="margin-top: 0.5rem">
            Tambi&eacute;n puedes <a href="<?= site_url('lista-sofomes-mexico') ?>" style="color: #065F46; font-weight: 600;">buscar en nuestro directorio</a>
            de SOFOMes actualizado.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Scripts específicos de index -->
<script>
  fetch('<?= site_url('api/condusef-proxy') ?>')
    .then(response => response.json())
    .then(data => {
      if (data.emergency_fallback) {
        const warningBanner = document.createElement('div');
        warningBanner.className = 'alert alert-warning';
        warningBanner.style.cssText = 'position: fixed; top: 70px; left: 50%; transform: translateX(-50%); z-index: 1000; max-width: 600px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);';
        warningBanner.innerHTML = `
          <strong>Aviso:</strong> ${data.warning}<br>
          <small>Datos de hace ${Math.round(data.cache_age_hours)} horas. Última actualización: ${new Date(data.fecha).toLocaleString('es-MX')}</small>
        `;
        document.body.appendChild(warningBanner);
        setTimeout(() => warningBanner.remove(), 10000);
      }

      if (data.success) {
        const total = data.total.toLocaleString('es-MX');

        const ids = ['nav-count', 'hero-total', 'stat-total', 'directory-stat-total',
                     'directory-title-count', 'alert-count', 'cta-count', 'faq-count'];
        ids.forEach(id => {
          const el = document.getElementById(id);
          if (el) el.textContent = total;
        });
      }
    })
    .catch(error => console.error('Error fetching SOFOM count:', error));
</script>
