<?php
$pageTitle = "Catálogo: Instrumentos Monetarios | SOFOMES.COM";
$pageDescription = "Catálogo de instrumentos monetarios para reportes PLD/FT: efectivo, transferencias, cheques, metales preciosos. RIPS F36 CNBV SOFOMes.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: instrumentos monetarios";
$canonicalUrl = "https://sofomes.com/catalogos/instrumento-monetario";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Instrumentos Monetarios CNBV RIPS F36',
    'description' => 'Catálogo oficial de instrumentos monetarios para reportes PLD/FT: efectivo, transferencias electrónicas, cheques, metales preciosos. Campo 9 del layout F36.',
    'url' => 'https://sofomes.com/catalogos/instrumento-monetario',
    'keywords' => ['RIPS F36', 'CNBV', 'instrumentos monetarios', 'PLD/FT', 'SOFOM', 'efectivo', 'transferencias', 'medios de pago'],
    'jsonFile' => 'instrumento-monetario.json',
    'recordCount' => 12,
    'field' => '9',
    'fieldDescription' => 'Instrumento monetario utilizado en la operación'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💰 Instrumentos Monetarios RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;">Catálogo oficial CNBV para clasificación de medios de pago</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación oficial de los medios de pago utilizados en operaciones. Se reporta en la <strong>columna 9 del layout F36</strong> para todos los reportes PLD/FT.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>💰 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Cada operación que reportes debe especificar el instrumento monetario utilizado para el pago. Esta información es <strong>obligatoria</strong> en reportes de operaciones relevantes, inusuales e internas preocupantes.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 9:</strong> "Instrumento Monetario" en layout F36</li>
          <li><strong>Formato:</strong> Código alfanumérico de 2 caracteres (01, 03, 10, etc.)</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F36</li>
          <li><strong>Ejemplos del catálogo:</strong> 01=Efectivo, 03=Transferencia, 10=Cheque</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según instrumento</h3>
        <p>
          <strong>Recomendación para tu matriz de riesgo:</strong> Asigna ponderaciones diferentes según el nivel de trazabilidad del instrumento:
        </p>
        <ul>
          <li><strong>Alto riesgo:</strong> Efectivo (01), Metales preciosos amonedados (05) - Difícil rastreo, alta vulnerabilidad LFPIORPI</li>
          <li><strong>Riesgo medio:</strong> Cheques (10), Cheques de viajero (11) - Trazabilidad moderada</li>
          <li><strong>Bajo riesgo:</strong> Transferencias (03), Tarjetas (02) - Alta trazabilidad bancaria</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Operación Relevante:</strong><br>
          Cliente: "Constructora Torres S.A." solicita crédito por $250,000 MXN<br>
          Medio de pago: Transferencia SPEI desde Banorte<br>
          Instrumento: <code>03</code> - Transferencia electrónica de fondos<br>
          Riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razón: Trazabilidad completa, origen bancario verificable.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Operación Inusual:</strong><br>
          Cliente: "Juan Pérez" paga enganche de $180,000 MXN en efectivo<br>
          Medio de pago: Billetes en sucursal<br>
          Instrumento: <code>01</code> - Billetes y monedas<br>
          Riesgo: <span class="risk-high">ALTO</span> (LFPIORPI Art. 17)<br>
          <em>Razón: Monto inusual en efectivo, sin trazabilidad bancaria previa.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Operación con metales:</strong><br>
          Cliente: "Inversiones del Norte" liquida crédito con Centenarios de oro<br>
          Medio de pago: 15 monedas Centenario Oro<br>
          Instrumento: <code>05</code> - Oro amonedado<br>
          Riesgo: <span class="risk-high">ALTO</span> (LFPIORPI Art. 17, Frac. XIV)<br>
          <em>Razón: Metales preciosos, actividad vulnerable según ley.</em>
        </div>

        <h3>🚨 Instrumentos de mayor vigilancia</h3>
        <p>Según LFPIORPI y lineamientos UIF, presta especial atención a:</p>
        <ul>
          <li><strong>01 - Efectivo:</strong> Montos ≥ $7,500 USD son operaciones relevantes automáticas</li>
          <li><strong>05 - Oro/platino amonedado:</strong> Actividad vulnerable Art. 17 Frac. XIV</li>
          <li><strong>10 - Cheques:</strong> Verificar endosos múltiples, cheques de otros titulares</li>
          <li><strong>11 - Cheques de viajero:</strong> Poco comunes hoy, revisar procedencia</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si un cliente usa efectivo frecuentemente en montos cercanos a $7,500 USD (estructuración), aunque cada operación sea menor al umbral, considera reportar como operación inusual por posible "pitufeo" o fraccionamiento intencional.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de instrumentos monetarios</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de instrumentos monetarios para reportes RIPS F36
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Tipo de Instrumento Monetario</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p>Cargando...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catálogo oficial de instrumentos monetarios para clasificar medios de pago en reportes PLD/FT.
          Incluye efectivo, transferencias, cheques y metales preciosos. Campo 9 del layout RIPS F36.
        </p>
      </div>

      <?php echo generateDownloadButton('instrumento-monetario.json', 12); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/instrumento-monetario.json')
        .then(response => response.json())
        .then(data => {
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
