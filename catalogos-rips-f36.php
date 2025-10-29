<?php
// Variables para header.php
$pageTitle = "Catálogos Oficiales RIPS F36 | CNBV PLD/FT";
$pageDescription = "Catálogos oficiales CNBV para reportes RIPS F36: Actividad Económica, Tipo de Reporte, Instrumento Monetario, Monedas, Localidades, Tipo de Operación del Asesor.";
$pageKeywords = "catalogos cnbv, rips f36, catalogos pld, actividad economica scian, catalogos reportes";
$canonicalUrl = "https://sofomes.com/catalogos-rips-f36";
$activeMenu = "catalogos";
$cssPath = "/assets/css/main-v2.css";

include 'includes/header.php';
?>



  <!-- Hero Section -->
  <section class="hero" style="padding: 4rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        📋 Catálogos RIPS F36 CNBV
      </h1>
      <p class="hero-subtitle" style="text-align: center; max-width: 800px; margin: 1rem auto;">
        Catálogos oficiales de la Comisión Nacional Bancaria y de Valores para el llenado de reportes regulatorios de SOFOMes y Asesores en Inversiones.
      </p>

      <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem; flex-wrap: wrap;">
        <div style="text-align: center; padding: 1rem; background: var(--primary-50); border-radius: var(--border-radius); min-width: 150px;">
          <div style="font-size: 2rem; font-weight: 700; color: var(--primary-600);">6</div>
          <div style="font-size: 0.875rem; color: var(--neutral-600);">Catálogos Completos</div>
        </div>
        <div style="text-align: center; padding: 1rem; background: var(--primary-50); border-radius: var(--border-radius); min-width: 150px;">
          <div style="font-size: 2rem; font-weight: 700; color: var(--primary-600);">100%</div>
          <div style="font-size: 0.875rem; color: var(--neutral-600);">Formato Oficial</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro Section -->
  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📌 ¿Qué son los Catálogos RIPS F36?</strong><br>
        Los catálogos RIPS F36 son las listas oficiales de claves que las Entidades Financieras (SOFOMes, bancos, casas de bolsa, asesores en inversiones) deben utilizar para clasificar correctamente la información en sus reportes regulatorios ante la CNBV y la UIF. Estos catálogos garantizan la estandarización de la información a nivel nacional.
      </div>

      <div style="margin-top: 2rem;">
        <h3 style="margin-bottom: 1rem;">Características de los Catálogos:</h3>
        <ul class="feature-list">
          <li>✅ <strong>Formato oficial CNBV:</strong> Claves con ceros iniciales preservados</li>
          <li>✅ <strong>Búsqueda en tiempo real:</strong> Filtra por clave o descripción</li>
          <li>✅ <strong>Exportación CSV:</strong> Descarga para importar a tu sistema</li>
          <li>✅ <strong>Actualizado:</strong> Versión vigente según CNBV</li>
          <li>✅ <strong>Sin registro:</strong> Acceso libre y gratuito</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Catálogos Grid -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Catálogos Disponibles</h2>

      <div class="catalogs-grid">
        <!-- Actividad Económica -->
        <div class="catalog-card">
          <div class="catalog-icon">📊</div>
          <h3>Actividad Económica</h3>
          <p class="catalog-count"><strong>1,263</strong> actividades</p>
          <p>Clasificación de actividades económicas de clientes según Sistema de Clasificación Industrial de América del Norte (SCIAN) adaptado a CNBV.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>Agricultura, ganadería, pesca</li>
            <li>Industria manufacturera</li>
            <li>Comercio al por mayor y menor</li>
            <li>Servicios financieros y profesionales</li>
          </ul>
          <a href="catalogos/actividad-economica.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>

        <!-- Localidades -->
        <div class="catalog-card">
          <div class="catalog-icon">📍</div>
          <h3>Localidades</h3>
          <p class="catalog-count"><strong>3,689</strong> localidades</p>
          <p>Catálogo completo de localidades organizadas por estado y municipio para geolocalización precisa de operaciones y clientes.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>32 entidades federativas</li>
            <li>2,469 municipios</li>
            <li>Claves de 8 dígitos</li>
          </ul>
          <a href="catalogos/localidades.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>

        <!-- Monedas -->
        <div class="catalog-card">
          <div class="catalog-icon">💱</div>
          <h3>Monedas</h3>
          <p class="catalog-count"><strong>190</strong> monedas</p>
          <p>Catálogo de monedas según estándar ISO 4217 para operaciones en divisa extranjera y tipos de cambio.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>USD - Dólar americano</li>
            <li>EUR - Euro</li>
            <li>JPY - Yen japonés</li>
            <li>GBP - Libra esterlina</li>
          </ul>
          <a href="catalogos/monedas.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>

        <!-- Tipo de Operación Asesor -->
        <div class="catalog-card">
          <div class="catalog-icon">📝</div>
          <h3>Tipo de Operación (Asesor)</h3>
          <p class="catalog-count"><strong>4</strong> tipos</p>
          <p>Clasificación de operaciones para asesores en inversiones: gestión de activos, asesoría financiera, transmisión de órdenes.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>Gestión de carteras</li>
            <li>Asesoría de inversión</li>
            <li>Transmisión de órdenes</li>
          </ul>
          <a href="catalogos/tipo-operacion-asesor.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>

        <!-- Tipo de Reporte -->
        <div class="catalog-card">
          <div class="catalog-icon">🚨</div>
          <h3>Tipo de Reporte PLD/FT</h3>
          <p class="catalog-count"><strong>3</strong> tipos</p>
          <p>Tipos de reporte para cumplimiento PLD/FT según Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>1. Operaciones Relevantes (>= $7,500 USD)</li>
            <li>2. Operaciones Inusuales (Perfil transaccional)</li>
            <li>3. Operaciones Internas Preocupantes</li>
          </ul>
          <a href="catalogos/tipo-reporte.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>

        <!-- Instrumentos Monetarios -->
        <div class="catalog-card">
          <div class="catalog-icon">💰</div>
          <h3>Instrumentos Monetarios</h3>
          <p class="catalog-count"><strong>10</strong> instrumentos</p>
          <p>Medios de pago utilizados en operaciones: efectivo, transferencias, cheques, metales preciosos amonedados.</p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 1rem 0;">
            <li>01 - Efectivo</li>
            <li>03 - Transferencia</li>
            <li>10 - Cheques</li>
            <li>05 - Oro/platino amonedado</li>
          </ul>
          <a href="catalogos/instrumento-monetario.php" class="btn btn-primary btn-sm">Ver Catálogo →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Reportes -->
  <section class="section" style="background: var(--primary-50);">
    <div class="container" style="text-align: center;">
      <h2 class="section-title">¿Necesitas Ayuda con los Reportes Regulatorios?</h2>
      <p class="section-subtitle" style="max-width: 700px; margin: 0 auto 2rem;">
        Consulta nuestra guía completa de formatos de reportes CNBV: Operaciones Relevantes, Inusuales e Internas Preocupantes con layouts, validaciones y ejemplos prácticos.
      </p>
      <a href="reportes-regulatorios-cnbv.php" class="btn btn-primary btn-lg">
        📄 Ver Guía de Reportes Regulatorios
      </a>
    </div>
  </section>



<?php include 'includes/footer.php'; ?>
