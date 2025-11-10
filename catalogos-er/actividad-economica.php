<?php
$pageTitle = "Catálogo ER: Actividad Económica | SOFOMES.COM";
$pageDescription = "Catálogo de actividades económicas para SOFOM ER. 1,172 actividades para reportes RIPS F41 CNBV.";
$pageKeywords = "catalogo cnbv, rips f41, pld sofom er, actividad económica, scian";
$canonicalUrl = "https://sofomes.com/catalogos-er/actividad-economica";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Actividades Económicas CNBV RIPS F41 (SOFOM ER)',
    'description' => 'Catálogo oficial con 1,172 actividades económicas según para SOFOMes Entidad Regulada. Campo 28 del layout F41.',
    'url' => 'https://sofomes.com/catalogos-er/actividad-economica',
    'keywords' => ['RIPS F41', 'CNBV', 'actividad económica', 'PLD/FT', 'SOFOM ER'],
    'jsonFile' => 'er/actividad-economica.json',
    'recordCount' => 1172,
    'field' => '28',
    'fieldDescription' => 'Actividad Económica del cliente según'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">📊 Actividad Económica</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">1,172</span> actividades según</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de la actividad económica del cliente. Se reporta en la <strong>columna 28 del layout F41</strong> para identificar el giro o sector económico según el clasificación oficial.
      </div>

      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⚠️ Este catálogo es para SOFOM ER (Entidad Regulada)</strong><br>
        Si eres una SOFOM ENR, consulta el <a href="../catalogos-enr/actividad-economica">catálogo ENR con 1,265 actividades</a>.
      </div>

      <article class="catalog-guide">
        <h2>📊 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Este catálogo es OBLIGATORIO para identificar el sector económico del cliente en todos los reportes PLD/FT. La actividad económica es un factor clave en tu <strong>matriz de riesgo</strong> porque ciertos sectores tienen mayor exposición a lavado de dinero.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 28:</strong> "Actividad Económica" en layout F41</li>
          <li><strong>Formato:</strong> Código numérico de 6 dígitos según</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F41</li>
          <li><strong>Fuente:</strong> Pregunta directa al cliente en expediente de conocimiento</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según sector</h3>
        <p><strong>Recomendación para tu matriz de riesgo de SOFOM ER:</strong></p>
        <ul>
          <li><strong>Riesgo alto:</strong> Casinos, casas de cambio, joyerías, compraventa de metales preciosos, arte, antigüedades, inmobiliarias, construcción</li>
          <li><strong>Riesgo medio-alto:</strong> Comercio de autos, refacciones, gasolineras, restaurantes/bares, transporte de valores</li>
          <li><strong>Riesgo medio:</strong> Comercio al por menor, servicios profesionales, manufactura</li>
          <li><strong>Riesgo bajo:</strong> Servicios educativos, salud, sector agropecuario, manufactura regulada</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Sector alto riesgo:</strong><br>
          Cliente: "Joyería Diamante S.A. de C.V."<br>
          Actividad declarada: Comercio al por menor de joyería y relojes<br>
          Código: <code>463310</code><br>
          Nivel de riesgo: <span class="risk-high">ALTO</span><br>
          <em>Razón: Comercio de metales preciosos, alto volumen en efectivo, vulnerabilidad GAFI. Requiere conocimiento reforzado del cliente, monitoreo continuo y justificación de origen de fondos.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Sector medio riesgo:</strong><br>
          Cliente: "Transportes del Norte S.A."<br>
          Actividad declarada: Autotransporte de carga general<br>
          Código: <code>484121</code><br>
          Nivel de riesgo: <span class="risk-medium">MEDIO</span><br>
          <em>Razón: Sector con operaciones legítimas pero con posibilidad de transporte de mercancías ilícitas. Verificar permisos SCT, rutas habituales y clientes principales.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Sector bajo riesgo:</strong><br>
          Cliente: "Clínica Médica Integral S.C."<br>
          Actividad declarada: Servicios de consultorios médicos<br>
          Código: <code>621111</code><br>
          Nivel de riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razón: Sector altamente regulado (COFEPRIS, Secretaría de Salud), operaciones rastreables vía facturación electrónica. Conocimiento estándar del cliente es suficiente.</em>
        </div>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si el cliente tiene múltiples giros comerciales, reporta el que representa el MAYOR porcentaje de sus ingresos. Documenta esta decisión en el expediente con estados financieros o declaraciones fiscales.
        </div>

        <div class="report-resources">
          <strong>📚 Recursos adicionales:</strong> Para guía completa de layouts y campos F41, consulta nuestra <a href="../reportes-regulatorios-cnbv">Guía de Reportes Regulatorios CNBV</a>.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de actividades económicas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo completo de 1,172 actividades económicas SOFOM ER
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 120px; text-align: center;">Clave</th>
              <th scope="col">Actividad Económica</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando actividades económicas...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Tabla con 1,172 actividades económicas oficiales según para SOFOM ER.
          Campo 28 del layout RIPS F41 para cumplimiento PLD/FT ante CNBV.
        </p>
      </div>

      <?php echo generateDownloadButton('er/actividad-economica.json', 1172); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/er/actividad-economica.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE ACTIVIDAD ECONOMICA']}</td>
              <td>${item['ACTIVIDAD ECONOMICA']}</td>
            </tr>
          `).join('');
          $('#catalog-table').DataTable({
            language: { url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json' },
            pageLength: 25,
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
            order: [[0, 'asc']],
            columnDefs: [{ width: '120px', targets: 0 }]
            ,
            dom: 'frtip',
            searching: true
          });
        })
        .catch(error => {
          console.error('Error:', error);
          document.getElementById('table-body').innerHTML = '<tr><td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">❌ Error al cargar el catálogo</td></tr>';
        });
    });
  </script>

  SCRIPT;



  include '../includes/footer.php';
?>
