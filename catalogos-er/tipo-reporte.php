<?php
$pageTitle = "Catálogo ER: Tipo de Reporte | SOFOMES.COM";
$pageDescription = "Catálogo de tipos de reporte PLD/FT para SOFOM ER: operaciones relevantes, inusuales e internas preocupantes. RIPS F41 CNBV.";
$pageKeywords = "catalogo cnbv, rips f41, pld sofom er, tipo de reporte";
$canonicalUrl = "https://sofomes.com/catalogos-er/tipo-reporte";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Reporte PLD/FT CNBV RIPS F41 (SOFOM ER)',
    'description' => 'Catálogo oficial con 3 tipos de reporte ante la UIF: Operaciones Relevantes (≥$7,500 USD), Operaciones Inusuales (60 días) y Operaciones Internas Preocupantes (24 horas). Campo 1 del layout F41.',
    'url' => 'https://sofomes.com/catalogos-er/tipo-reporte',
    'keywords' => ['RIPS F41', 'CNBV', 'tipo de reporte', 'PLD/FT', 'SOFOM ER', 'operaciones relevantes', 'operaciones inusuales', 'UIF'],
    'jsonFile' => 'er/tipo-reporte.json',
    'recordCount' => 3,
    'field' => '1',
    'fieldDescription' => 'Tipo de reporte PLD/FT ante la Unidad de Inteligencia Financiera (UIF)'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🚨 Tipo de Reporte PLD/FT</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">3</span> tipos de reporte según CNBV</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de reportes obligatorios ante la UIF. Se reporta en la <strong>columna 1 del layout F41</strong> (primer campo del reporte) para identificar el tipo de reporte regulatorio que estás enviando.
      </div>

      <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669;">
        <strong>✅ Este catálogo es IDÉNTICO para ER y ENR</strong><br>
        Las obligaciones PLD/FT son las mismas en RIPS F41 (ER) y F36 (ENR) según LFPIORPI.
      </div>

      <article class="catalog-guide">
        <h2>🚨 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Este es el catálogo MÁS IMPORTANTE. Define el tipo de reporte PLD/FT que estás enviando a la UIF. Cada reporte tiene criterios, plazos y consecuencias diferentes según la LFPIORPI.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 1:</strong> "Tipo de Reporte" en layout F41 (es el primer campo del archivo)</li>
          <li><strong>Formato:</strong> Código numérico de 1 dígito (1, 2 o 3)</li>
          <li><strong>Obligatorio:</strong> En TODOS los reportes F41 - Es el campo que define qué estás reportando</li>
        </ul>

        <h3>🔍 Tipos de reporte y cuándo usarlos</h3>

        <div class="report-box report-box-relevant">
          <h4>1️⃣ Operaciones Relevantes (Tipo 1)</h4>
          <p><strong>Criterio automático:</strong> Operaciones ≥ $7,500 USD (o su equivalente en otras divisas)</p>
          <p><strong>Plazo de reporte:</strong> 17 días hábiles del mes siguiente</p>
          <p><strong>Obligatoriedad:</strong> SÍ, todas las operaciones que superen el umbral</p>
          <p><strong>Base legal:</strong> LFPIORPI Art. 17, Disposiciones CNBV</p>

          <p><strong>Ejemplos para SOFOM ER:</strong></p>
          <ul>
            <li>Crédito automotriz por $350,000 MXN (~$20,000 USD)</li>
            <li>Operación bursátil: compra de valores por $10,000 USD</li>
            <li>Depósito bancario en efectivo por $150,000 MXN</li>
            <li>Operación con divisas por $8,000 USD</li>
          </ul>
        </div>

        <div class="report-box report-box-unusual">
          <h4>2️⃣ Operaciones Inusuales (Tipo 2)</h4>
          <p><strong>Criterio:</strong> Operaciones que NO coinciden con el perfil transaccional del cliente</p>
          <p><strong>Plazo de reporte:</strong> 60 días hábiles desde detección</p>
          <p><strong>Obligatoriedad:</strong> SÍ, si detectas incongruencias según tu matriz de riesgo</p>
          <p><strong>Base legal:</strong> LFPIORPI Art. 17, Lineamientos UIF</p>

          <p><strong>Ejemplos para SOFOM ER:</strong></p>
          <ul>
            <li>Cliente con ingresos bajos realiza operación internacional por $100,000 USD</li>
            <li>Cliente hace múltiples depósitos justo debajo de $7,500 USD (estructuración)</li>
            <li>Operación desde/hacia paraíso fiscal sin justificación comercial clara</li>
            <li>Cliente cambia repentinamente su patrón: ahora usa solo efectivo en grandes montos</li>
          </ul>

          <div class="report-alert report-alert-warning">
            <strong>⚠️ Importante:</strong> Inusual NO es sospechosa. Puede tener explicación legítima, pero DEBES reportar si no coincide con el perfil.
          </div>
        </div>

        <div class="report-box report-box-concerning">
          <h4>3️⃣ Operaciones Internas Preocupantes (Tipo 3)</h4>
          <p><strong>Criterio:</strong> Operaciones con FUERTES INDICIOS de recursos de procedencia ilícita o vínculos a lavado de dinero/terrorismo</p>
          <p><strong>Plazo de reporte:</strong> INMEDIATO (24 horas hábiles)</p>
          <p><strong>Obligatoriedad:</strong> SÍ, en cuanto detectes señales de alerta graves</p>
          <p><strong>Base legal:</strong> LFPIORPI Art. 17, Circular Única CNBV</p>

          <p><strong>Ejemplos de señales de alerta graves (SOFOM ER):</strong></p>
          <ul>
            <li>Cliente aparece en listas OFAC, PEPs, terrorismo o sanciones ONU</li>
            <li>Documentación claramente falsificada (INE, RFC, estados de cuenta)</li>
            <li>Cliente se niega rotundamente a proporcionar información KYC</li>
            <li>Fondos provenientes de países en lista negra GAFI sin justificación</li>
            <li>Operaciones triangulares con múltiples jurisdicciones de alto riesgo</li>
            <li>Vínculos evidentes con actividades ilícitas (narcotráfico, trata, extorsión)</li>
          </ul>

          <div class="report-alert report-alert-danger">
            <strong>🚨 CRÍTICO:</strong> Este reporte es URGENTE (24 horas). Consulta INMEDIATAMENTE con tu Oficial de Cumplimiento. Considera RECHAZAR la operación.
          </div>
        </div>

        <h3>⚖️ Consecuencias del incumplimiento</h3>
        <ul>
          <li><strong>No reportar operaciones relevantes:</strong> Multa de 200 a 2,000 veces el salario mínimo por operación</li>
          <li><strong>No reportar inusuales/preocupantes:</strong> Multa de 2,000 a 10,000 veces el salario mínimo + posible inhabilitación</li>
          <li><strong>Reportar tarde:</strong> Multa proporcional según días de retraso</li>
          <li><strong>Reportar mal (errores sistemáticos):</strong> Observaciones CNBV, requerimientos, visitas de inspección</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Una MISMA operación puede generar múltiples reportes. Si es relevante por monto Y además inusual, envías dos reportes separados (Tipo 1 y Tipo 2). No son excluyentes.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de tipos de reporte</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 3 tipos de reporte PLD/FT</caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Tipo de Reporte</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando tipos de reporte...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">
          Catálogo oficial de tipos de reporte PLD/FT ante la UIF. IDÉNTICO para ER y ENR según LFPIORPI. Campo 1 del layout RIPS F41.
        </p>
      </div>

      <?php echo generateDownloadButton('er/tipo-reporte.json', 3); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/er/tipo-reporte.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE TIPO REPORTE']}</td>
              <td>${item['TIPO DE REPORTE']}</td>
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
