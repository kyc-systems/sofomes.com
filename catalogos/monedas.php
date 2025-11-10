<?php
$pageTitle = "Catálogo: Monedas | SOFOMES.COM";
$pageDescription = "Catálogo de monedas para reportes internacionales: USD, EUR, MXN, JPY y más. RIPS F36 CNBV para operaciones en divisas.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: monedas";
$canonicalUrl = "https://sofomes.com/catalogos/monedas";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Monedas CNBV RIPS F36',
    'description' => 'Catálogo oficial con 190 monedas según estándar para operaciones internacionales. Incluye USD, EUR, MXN, JPY y divisas globales. Campo 12 del layout F36.',
    'url' => 'https://sofomes.com/catalogos/monedas',
    'keywords' => ['RIPS F36', 'CNBV', 'monedas', 'divisas', 'PLD/FT', 'SOFOM', 'USD', 'EUR', 'MXN'],
    'jsonFile' => 'monedas.json',
    'recordCount' => 190,
    'field' => '12',
    'fieldDescription' => 'Moneda utilizada en la operación según'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💱 Monedas RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">190</span> monedas según estándar</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación oficial de monedas para operaciones. Se reporta en la <strong>columna 12 del layout F36</strong> para identificar la divisa en que se realizó la operación.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>💱 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Todas las operaciones deben especificar la moneda utilizada. Este campo es <strong>obligatorio</strong> en todos los reportes, ya sea en pesos mexicanos (MXN) o en divisas extranjeras.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 12:</strong> "Moneda" en layout F36</li>
          <li><strong>Formato:</strong> Código alfabético de 3 letras (MXN, USD, EUR, JPY, etc.)</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F36</li>
          <li><strong>Ejemplos:</strong> MXN para pesos mexicanos, USD para dólares, EUR para euros</li>
          <li><strong>Importante:</strong> Debes usar el código exacto del catálogo oficial CNBV</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según divisa</h3>
        <p>
          <strong>Recomendación para tu matriz de riesgo:</strong> Pondera el riesgo de las operaciones en divisas:
        </p>
        <ul>
          <li><strong>Riesgo moderado-alto:</strong> Operaciones en USD, EUR - Divisas de alto volumen, requieren justificación clara del origen</li>
          <li><strong>Riesgo medio:</strong> Divisas de países con relaciones comerciales frecuentes (CAD, GBP, JPY, CNY)</li>
          <li><strong>Alto riesgo:</strong> Divisas de países en listas GAFI de alto riesgo o con deficiencias estratégicas en PLD/FT</li>
          <li><strong>Muy alto riesgo:</strong> Criptomonedas (aunque no están en, algunas SOFOMes las manejan - requieren atención especial UIF)</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Crédito para importación:</strong><br>
          Cliente: "Importadora Mexicana S.A." solicita crédito puente<br>
          Monto: $50,000 USD para pagar a proveedor chino<br>
          Moneda: <code>USD</code> - Dólar estadounidense<br>
          Justificación: Factura comercial de importación<br>
          Riesgo: <span class="risk-medium">MEDIO</span><br>
          <em>Razón: Operación en dólares justificada por comercio exterior, documentación respaldatoria completa.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Remesa del extranjero:</strong><br>
          Cliente: "Juan García" recibe $25,000 USD de familiar en Estados Unidos<br>
          Moneda: <code>USD</code> - Dólar estadounidense<br>
          Instrumento: Transferencia internacional<br>
          Riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razón: Remesa familiar documentada, origen verificable con SWIFT, beneficiario identificado.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Operación en divisa poco común:</strong><br>
          Cliente: "Comercial Global" recibe pago de $15,000 en Rublos rusos<br>
          Moneda: <code>RUB</code> - Rublo ruso<br>
          Sin justificación comercial clara con Rusia<br>
          Riesgo: <span class="risk-high">ALTO</span><br>
          <em>Razón: Divisa poco usual para México, país puede estar en listas de monitoreo GAFI. Requiere justificación comercial robusta y verificación de origen.</em>
        </div>

        <h3>🚨 Divisas que requieren atención especial</h3>
        <p>Según lineamientos GAFI y alertas internacionales, monitorea especialmente:</p>
        <ul>
          <li><strong>USD, EUR:</strong> Alto volumen global, verifica coherencia con actividad del cliente</li>
          <li><strong>Divisas de países en lista GAFI:</strong> Consulta periódicamente países con deficiencias estratégicas</li>
          <li><strong>Criptomonedas:</strong> Si tu SOFOM acepta Bitcoin (BTC), Ethereum (ETH), Tether (USDT) - requiere conocimiento reforzado del cliente y seguimiento continuo según Ley Fintech</li>
          <li><strong>Transacciones triangulares:</strong> Cliente paga en divisa A, recibe de país con divisa B, sin relación comercial aparente</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> El umbral de $7,500 USD para operaciones relevantes aplica al <strong>equivalente en cualquier divisa</strong>. Convierte siempre al tipo de cambio del día según Banco de México para determinar si supera el umbral de reporte.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de monedas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de 190 monedas según para reportes RIPS F36
          </caption>
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
                <p>Cargando monedas...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catálogo oficial de monedas según estándar. Incluye códigos de 3 letras para todas las divisas globales. Campo 12 del layout RIPS F36.
        </p>
      </div>

      <?php echo generateDownloadButton('monedas.json', 190); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/monedas.json')
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
            columnDefs: [{ width: '100px', targets: 0 }]
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
