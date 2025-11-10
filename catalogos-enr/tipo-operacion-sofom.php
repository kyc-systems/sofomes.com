<?php
$pageTitle = "Catálogo ENR: Tipo de Operación SOFOM | SOFOMES.COM";
$pageDescription = "Catálogo de 19 tipos de operación para SOFOM ENR: crédito, factoraje, prepagadas. RIPS F36 CNBV.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom enr, tipo de operación";
$canonicalUrl = "https://sofomes.com/catalogos-enr/tipo-operacion-sofom";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Operación SOFOM CNBV RIPS F36 (SOFOM ENR)',
    'description' => 'Catálogo oficial con 19 tipos de operación específicos para SOFOMes ENR: crédito, factoraje, fideicomisos, tarjetas prepagadas. RIPS F36.',
    'url' => 'https://sofomes.com/catalogos-enr/tipo-operacion-sofom',
    'keywords' => ['RIPS F36', 'CNBV', 'tipo de operación', 'PLD/FT', 'SOFOM ENR', 'factoraje', 'prepagadas'],
    'jsonFile' => 'enr/tipo-operacion-sofom.json',
    'recordCount' => 19,
    'field' => '',
    'fieldDescription' => 'Tipo de operación específica de SOFOM'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
        <span class="badge-exclusive">EXCLUSIVO ENR</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🔄 Tipo de Operación SOFOM</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">19</span> tipos específicos para SOFOMes</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de operaciones específicas de SOFOM. Se reporta en el <strong>layout F36</strong> para identificar el tipo de operación financiera.
      </div>

      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⭐ EXCLUSIVO SOFOM ENR - 19 tipos especializados</strong><br>
        Este catálogo es específico para SOFOMes ENR. Las ER usan un catálogo amplio de 40 tipos que abarca todas las operaciones financieras reguladas.
      </div>

      <article class="catalog-guide">
        <h2>🔄 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Las SOFOM ENR se especializan en crédito, factoraje y servicios financieros específicos. Este catálogo refleja las operaciones REALES que realizan las ENR.
        </p>

        <h3>📍 Tipos de operación SOFOM ENR</h3>

        <h4>💰 Operaciones de Crédito (08-09, 40-41)</h4>
        <ul>
          <li><strong>08:</strong> OTORGAMIENTO DE CREDITO - Desembolso inicial del préstamo</li>
          <li><strong>09:</strong> PAGO DE CREDITO - Pago parcial o total</li>
          <li><strong>40:</strong> DISPOSICION DE CREDITO - Retiro parcial de línea de crédito</li>
          <li><strong>41:</strong> LIQUIDACION DE CREDITO - Pago total anticipado</li>
        </ul>

        <h4>📦 Factoraje Financiero (35, 44, 47, 49)</h4>
        <ul>
          <li><strong>35:</strong> CONTRATOS DE FACTORAJE FINANCIERO - Cesión de cuentas por cobrar</li>
          <li><strong>44:</strong> PAGOS DE FACTORAJE FINANCIERO - Pagos del deudor al factor</li>
          <li><strong>47:</strong> CONTRATACION FACTORAJE FINANCIERO - Firma de contrato</li>
          <li><strong>49:</strong> CESION DE DERECHOS - Transferencia de cartera</li>
        </ul>

        <h4>🏦 Fideicomisos (42-43, 46, 48)</h4>
        <ul>
          <li><strong>42:</strong> APORTACIONES A UN CONTRATO - Depósito a contrato</li>
          <li><strong>43:</strong> APORTACIONES A UN FIDEICOMISO - Depósito a fideicomiso</li>
          <li><strong>46:</strong> CONTRATACION DE UN FIDEICOMISO - Firma de fideicomiso</li>
          <li><strong>48:</strong> RETIRO DE UN FIDEICOMISO - Retiro de fondos</li>
        </ul>

        <h4>💳 Tarjetas Prepagadas (38-39) - ⭐ Exclusivo ENR</h4>
        <ul>
          <li><strong>38:</strong> VENTA DE TARJETAS PREPAGADAS - Venta inicial de tarjeta</li>
          <li><strong>39:</strong> RECARGA DE TARJETAS PREPAGADAS - Recarga de saldo</li>
        </ul>
        <p><em>Las tarjetas prepagadas son un producto fintech común en SOFOMes ENR que no ofrecen las ER.</em></p>

        <h4>🏠 Arrendamiento Financiero (27-29)</h4>
        <ul>
          <li><strong>27:</strong> PAGO DE RENTAS DE ARRENDAMIENTO FINANCIERO</li>
          <li><strong>28:</strong> VENTA DE BIENES ARRENDADOS</li>
          <li><strong>29:</strong> ADQUISICION DE BIENES DEL FUTURO ARRENDATARIO</li>
        </ul>

        <h4>🧾 Otros Servicios (45, 00)</h4>
        <ul>
          <li><strong>45:</strong> PAGO DE SERVICIOS - Pago de servicios financieros generales</li>
          <li><strong>00:</strong> TENTATIVA - Operación intentada pero no completada</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento ENR:</strong> Si tu SOFOM ENR solo hace crédito simple (08-09), aun así reporta con este catálogo de 19 tipos. NO uses el catálogo ER de 40 tipos.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 19 tipos de operación SOFOM ENR</caption>
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
        <p id="catalog-description" class="sr-only">Catálogo de 19 tipos de operación específicos de SOFOM ENR. RIPS F36.</p>
      </div>

      <?php echo generateDownloadButton('enr/tipo-operacion-sofom.json', 19); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/enr/tipo-operacion-sofom.json')
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
