<?php
$pageTitle = "Catálogo ENR: Actividad Económica | SOFOMES.COM";
$pageDescription = "Catálogo de 1,265 actividades económicas para SOFOM ENR. RIPS F36 CNBV campo 28.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom enr, actividad económica";
$canonicalUrl = "https://sofomes.com/catalogos-enr/actividad-economica";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Actividades Económicas CNBV RIPS F36 (SOFOM ENR)',
    'description' => 'Catálogo oficial con 1,265 actividades económicas según para SOFOMes Entidad No Regulada. Campo 28 del layout F36.',
    'url' => 'https://sofomes.com/catalogos-enr/actividad-economica',
    'keywords' => ['RIPS F36', 'CNBV', 'actividad económica', 'PLD/FT', 'SOFOM ENR'],
    'jsonFile' => 'enr/actividad-economica.json',
    'recordCount' => 1265,
    'field' => '28',
    'fieldDescription' => 'Actividad Económica del cliente según'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">📊 Actividad Económica</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">1,265</span> actividades según</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de la actividad económica del cliente. Se reporta en la <strong>columna 28 del layout F36</strong> para identificar el giro o sector económico según.
      </div>

      <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669;">
        <strong>✅ Este catálogo ENR tiene MÁS actividades que ER</strong><br>
        SOFOM ENR: 1,265 actividades | SOFOM ER: 1,172 actividades (+91 en ENR para sectores diversos)
      </div>

      <article class="catalog-guide">
        <h2>📊 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Este catálogo es OBLIGATORIO para identificar el sector económico del cliente. Las SOFOM ENR atienden sectores muy diversos: microcréditos, fintech, préstamos personales, factoraje especializado.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 28:</strong> "Actividad Económica" en layout F36</li>
          <li><strong>Formato:</strong> Código numérico de 6 dígitos según</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F36</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según sector (ENR)</h3>
        <ul>
          <li><strong>Riesgo alto:</strong> Casinos, joyerías, compraventa de metales, arte, inmobiliarias, construcción</li>
          <li><strong>Riesgo medio-alto:</strong> Comercio de autos, refacciones, restaurantes/bares, transporte</li>
          <li><strong>Riesgo medio:</strong> Comercio al por menor, servicios profesionales</li>
          <li><strong>Riesgo bajo:</strong> Servicios educativos, salud, sector agropecuario</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento ENR:</strong> Si el cliente tiene múltiples giros, reporta el que representa el MAYOR porcentaje de ingresos. Documenta con estados financieros.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de actividades económicas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 1,265 actividades económicas SOFOM ENR</caption>
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
          Catálogo de 1,265 actividades económicas para SOFOM ENR. Campo 28 del layout RIPS F36.
        </p>
      </div>

      <?php echo generateDownloadButton('enr/actividad-economica.json', 1265); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/enr/actividad-economica.json')
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
            columnDefs: [{ width: '120px', targets: 0 }],
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
