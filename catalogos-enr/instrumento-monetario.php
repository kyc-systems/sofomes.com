<?php
$pageTitle = "Catálogo ENR: Instrumento Monetario | SOFOMES.COM";
$pageDescription = "Catálogo de instrumento monetario para SOFOM ENR. RIPS F36 CNBV campo 9.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom enr, instrumento monetario";
$canonicalUrl = "https://sofomes.com/catalogos-enr/instrumento-monetario";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Instrumento Monetario CNBV RIPS F36 (SOFOM ENR)',
    'description' => 'Catálogo oficial para SOFOMes Entidad No Regulada. Campo 9 del layout F36.',
    'url' => 'https://sofomes.com/catalogos-enr/instrumento-monetario',
    'keywords' => ['RIPS F36', 'CNBV', 'instrumento monetario', 'PLD/FT', 'SOFOM ENR'],
    'jsonFile' => 'enr/instrumento-monetario.json',
    'recordCount' => 10,
    'field' => '9',
    'fieldDescription' => 'Instrumento Monetario'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💳 Instrumento Monetario</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">10</span> registros</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Se reporta en la <strong>columna 9 del layout F36</strong> para SOFOM ENR.
      </div>

      <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669;">
        <strong>✅ IDÉNTICO para ER y ENR</strong>
      </div>

      <h2 class="section-title">📋 Catálogo completo</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de Instrumento Monetario SOFOM ENR</caption>
          <thead>
            <tr>
              <th scope="col" style="width: 120px; text-align: center;">Clave</th>
              <th scope="col">Instrumento Monetario</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando catálogo...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">Catálogo de Instrumento Monetario para SOFOM ENR. Campo 9 del layout RIPS F36.</p>
      </div>

      <?php echo generateDownloadButton('enr/instrumento-monetario.json', 10); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/enr/instrumento-monetario.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE TIPO DE INSTRUMENTO MONETARIO']}</td>
              <td>${item['TIPO DE INSTRUMENTO MONETARIO']}</td>
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
