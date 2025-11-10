<?php
$pageTitle = "Catálogo ER: Monedas | SOFOMES.COM";
$pageDescription = "Catálogo de 123 monedas para SOFOM ER incluyendo Onzas Libertad. RIPS F41 CNBV campo 12.";
$pageKeywords = "catalogo cnbv, rips f41, pld sofom er, monedas, divisas";
$canonicalUrl = "https://sofomes.com/catalogos-er/monedas";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Monedas CNBV RIPS F41 (SOFOM ER)',
    'description' => 'Catálogo oficial con 123 monedas incluyendo Onzas Libertad para SOFOMes Entidad Regulada. Campo 12 del layout F41.',
    'url' => 'https://sofomes.com/catalogos-er/monedas',
    'keywords' => ['RIPS F41', 'CNBV', 'monedas', 'divisas', 'SOFOM ER', 'Onzas Libertad'],
    'jsonFile' => 'er/monedas.json',
    'recordCount' => 123,
    'field' => '12',
    'fieldDescription' => 'Moneda utilizada en la operación'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💱 Monedas</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">123</span> monedas + Onzas Libertad</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de moneda. Se reporta en la <strong>columna 12 del layout F41</strong> para identificar la divisa utilizada.
      </div>

      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⭐ EXCLUSIVO SOFOM ER: Incluye Onzas Libertad</strong><br>
        Este catálogo incluye códigos 26-30 para Onzas Libertad (1oz, 1/2oz, 1/4oz, 1/10oz, 1/20oz), productos de inversión bancarios. Las SOFOM ENR usan un catálogo con 192 monedas sin Onzas Libertad.
      </div>

      <article class="catalog-guide">
        <h2>💱 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Todas las operaciones deben especificar la moneda. El umbral de $7,500 USD para operaciones relevantes aplica al <strong>equivalente en cualquier divisa</strong>.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 12:</strong> "Moneda" en layout F41</li>
          <li><strong>Formato:</strong> Código alfabético de 3 letras (MXN, USD, EUR) o numérico (26-30 para Onzas)</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F41</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según divisa</h3>
        <ul>
          <li><strong>Riesgo alto:</strong> Divisas de países en listas GAFI de alto riesgo</li>
          <li><strong>Riesgo medio-alto:</strong> USD, EUR en efectivo sin justificación comercial clara</li>
          <li><strong>Riesgo medio:</strong> Divisas de países con relaciones comerciales (CAD, GBP, JPY, CNY)</li>
          <li><strong>Productos bancarios ER:</strong> Onzas Libertad (26-30) requieren verificación de origen de fondos</li>
        </ul>

        <h3>🪙 Onzas Libertad (Exclusivo ER)</h3>
        <ul>
          <li><strong>26:</strong> 1 OZ LIBERTAD (~31.1 gramos oro)</li>
          <li><strong>27:</strong> 1/2 OZ LIBERTAD (~15.55 gramos oro)</li>
          <li><strong>28:</strong> 1/4 OZ LIBERTAD (~7.78 gramos oro)</li>
          <li><strong>29:</strong> 1/10 OZ LIBERTAD (~3.11 gramos oro)</li>
          <li><strong>30:</strong> 1/20 OZ LIBERTAD (~1.56 gramos oro)</li>
        </ul>
        <p><em>Las Onzas Libertad son productos de inversión del Banco de México, solo disponibles a través de entidades reguladas como las SOFOM ER.</em></p>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Convierte siempre al tipo de cambio del día según Banco de México para determinar si supera el umbral de $7,500 USD de reporte.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de monedas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 123 monedas SOFOM ER</caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Moneda</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando monedas...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">
          Catálogo de monedas + Onzas Libertad. Campo 12 del layout RIPS F41.
        </p>
      </div>

      <?php echo generateDownloadButton('er/monedas.json', 123); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/er/monedas.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE MONEDA']}</td>
              <td>${item['MONEDA']}</td>
            </tr>
          `).join('');
          $('#catalog-table').DataTable({
            language: { url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json' },
            pageLength: 25,
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
            order: [[0, 'asc']],
            columnDefs: [{ width: '100px', targets: 0 }],
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
