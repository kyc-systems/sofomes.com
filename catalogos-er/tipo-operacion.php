<?php
$pageTitle = "Catálogo ER: Tipo de Operación | SOFOMES.COM";
$pageDescription = "Catálogo de 40 tipos de operación para SOFOM ER: crédito, depósitos, valores, divisas. RIPS F41 CNBV.";
$pageKeywords = "catalogo cnbv, rips f41, pld sofom er, tipo de operación";
$canonicalUrl = "https://sofomes.com/catalogos-er/tipo-operacion";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Operación CNBV RIPS F41 (SOFOM ER)',
    'description' => 'Catálogo oficial con 40 tipos de operación para SOFOMes Entidad Regulada: crédito, depósitos, valores, divisas, seguros, almacenes. RIPS F41.',
    'url' => 'https://sofomes.com/catalogos-er/tipo-operacion',
    'keywords' => ['RIPS F41', 'CNBV', 'tipo de operación', 'PLD/FT', 'SOFOM ER'],
    'jsonFile' => 'er/tipo-operacion.json',
    'recordCount' => 40,
    'field' => '',
    'fieldDescription' => 'Tipo de operación financiera realizada'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
        <span class="badge-exclusive">EXCLUSIVO ER</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🔄 Tipo de Operación</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">40</span> tipos de operaciones financieras</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación del tipo de operación financiera. Se reporta en el <strong>layout F41</strong> para identificar la naturaleza de la transacción.
      </div>

      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⭐ EXCLUSIVO SOFOM ER - Catálogo amplio</strong><br>
        Este catálogo tiene 40 tipos porque las ER abarcan operaciones de banca múltiple, valores, seguros, almacenes. Las SOFOM ENR tienen un catálogo separado con 19 tipos específicos de crédito/factoraje.
      </div>

      <article class="catalog-guide">
        <h2>🔄 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          El tipo de operación define la naturaleza de la transacción. Las SOFOM ER, al estar vinculadas a entidades bancarias, pueden realizar operaciones diversas más allá del crédito simple.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo variable:</strong> Según el tipo de reporte F41</li>
          <li><strong>Formato:</strong> Código numérico de 2 dígitos (00-99)</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F41</li>
        </ul>

        <h3>🏦 Categorías de operaciones (ER)</h3>

        <h4>💳 Operaciones Bancarias (01-07)</h4>
        <ul>
          <li><strong>01:</strong> DEPOSITO</li>
          <li><strong>02:</strong> RETIRO</li>
          <li><strong>03:</strong> COMPRA DIVISAS</li>
          <li><strong>04:</strong> VENTA DIVISAS</li>
          <li><strong>05:</strong> CHEQUES DE CAJA</li>
          <li><strong>06:</strong> GIROS</li>
          <li><strong>07:</strong> ORDENES DE PAGO</li>
        </ul>

        <h4>💰 Operaciones de Crédito (08-09, 26-29, 40-41)</h4>
        <ul>
          <li><strong>08:</strong> OTORGAMIENTO DE CREDITO</li>
          <li><strong>09:</strong> PAGO DE CREDITO</li>
          <li><strong>26:</strong> CONTRATACION DE ARRENDAMIENTO FINANCIERO</li>
          <li><strong>27:</strong> PAGO DE RENTAS DE ARRENDAMIENTO FINANCIERO</li>
          <li><strong>28:</strong> VENTA DE BIENES ARRENDADOS</li>
          <li><strong>29:</strong> ADQUISICION DE BIENES DEL FUTURO ARRENDATARIO</li>
        </ul>

        <h4>📈 Operaciones Bursátiles (16-21)</h4>
        <ul>
          <li><strong>16:</strong> PRESTAMOS O CREDITOS PARA LA ADQUISICION DE VALORES CON GARANTIA</li>
          <li><strong>17:</strong> REPORTOS Y PRESTAMOS SOBRE VALORES</li>
          <li><strong>18:</strong> COMPRA DE VALORES</li>
          <li><strong>19:</strong> VENTA DE VALORES</li>
          <li><strong>20:</strong> DEPOSITO DE APORTACION VOLUNTARIA O COMPLEMENTARIA</li>
          <li><strong>21:</strong> DISPOSICION DE APORTACION VOLUNTARIA O COMPLEMENTARIA</li>
        </ul>

        <h4>🏢 Fideicomisos y Factoraje (11, 35-36, 42-48)</h4>
        <ul>
          <li><strong>11:</strong> APORTACIONES A UN CONTRATO/FIDEICOMISO</li>
          <li><strong>35:</strong> CONTRATOS DE FACTORAJE FINANCIERO</li>
          <li><strong>36:</strong> SERVICIOS DE ADMINISTRACION Y COBRANZA DE CREDITOS</li>
        </ul>

        <h4>🚛 Almacenes y Logística (22-25)</h4>
        <ul>
          <li><strong>22:</strong> ALMACENAMIENTO DE BIENES O MERCANCIAS</li>
          <li><strong>23:</strong> EMPAQUE Y ENVASADO DE BIENES Y MERCANCIAS</li>
          <li><strong>24:</strong> GESTION DE GARANTIAS</li>
          <li><strong>25:</strong> SERVICIOS DE DEPOSITO FISCAL</li>
        </ul>

        <h4>🛂 Aduanas (98-99)</h4>
        <ul>
          <li><strong>98:</strong> SALIDA DE MAS DE $10MIL DLS (EXCLUSIVO DECLARACION DE ADUANAS)</li>
          <li><strong>99:</strong> ENTRADA DE MAS DE $10MIL DLS (EXCLUSIVO DECLARACION DE ADUANAS)</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si tu SOFOM ER solo realiza operaciones de crédito (08-09), aun así debes usar este catálogo completo de 40 tipos. NO uses el catálogo de 19 tipos de SOFOM ENR.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de tipos de operación</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 40 tipos de operación SOFOM ER</caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Tipo de Operación</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando tipos de operación...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">
          Catálogo de 40 tipos de operación financiera para SOFOM ER. Incluye operaciones bancarias, crédito, valores, almacenes. RIPS F41.
        </p>
      </div>

      <?php echo generateDownloadButton('er/tipo-operacion.json', 40); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/er/tipo-operacion.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE TIPO DE OPERACION']}</td>
              <td>${item['TIPO DE OPERACION']}</td>
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
