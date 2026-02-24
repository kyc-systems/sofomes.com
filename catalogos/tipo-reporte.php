<?php
$pageTitle = "Catálogo: Tipo de Reporte | SOFOMES.COM";
$pageDescription = "Catálogo de tipos de reporte PLD/FT: operaciones relevantes, inusuales e internas preocupantes. Guía oficial CNBV RIPS F36.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: tipo de reporte";
$canonicalUrl = "https://sofomes.com/catalogos/tipo-reporte";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Reporte PLD/FT CNBV RIPS F36',
    'description' => 'Catálogo oficial con 3 tipos de reporte ante la CNBV: Operaciones Relevantes (≥$7,500 USD, trimestral), Operaciones Inusuales (60 días) y Operaciones Internas Preocupantes (60 días). Campo 1 del layout F36.',
    'url' => 'https://sofomes.com/catalogos/tipo-reporte',
    'keywords' => ['RIPS F36', 'CNBV', 'tipo de reporte', 'PLD/FT', 'SOFOM', 'operaciones relevantes', 'operaciones inusuales', 'UIF', 'DCG'],
    'jsonFile' => 'tipo-reporte.json',
    'recordCount' => 3,
    'field' => '1',
    'fieldDescription' => 'Tipo de reporte PLD/FT ante la Unidad de Inteligencia Financiera (UIF)'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🚨 Tipo de Reporte PLD/FT</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">3</span> tipos de reporte según CNBV</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación de reportes obligatorios ante la UIF. Se reporta en la <strong>columna 1 del layout F36</strong> (primer campo del reporte) para identificar el tipo de reporte regulatorio que estás enviando.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>🚨 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Este es el catálogo MÁS IMPORTANTE de todos. Define el tipo de reporte PLD/FT que estás enviando a la CNBV (que remite a la UIF). Cada reporte tiene criterios, plazos y consecuencias diferentes según las Disposiciones de Carácter General de la CNBV.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 1:</strong> "Tipo de Reporte" en layout F36 (es el primer campo del archivo)</li>
          <li><strong>Formato:</strong> Código numérico de 1 dígito (1, 2 o 3)</li>
          <li><strong>Obligatorio:</strong> En TODOS los reportes F36 - Es el campo que define qué estás reportando</li>
        </ul>

        <h3>🔍 Tipos de reporte y cuándo usarlos</h3>

        <div class="report-box report-box-relevant">
          <h4>1️⃣ Operaciones Relevantes (Tipo 1)</h4>
          <p><strong>Criterio automático:</strong> Operaciones en efectivo ≥ $7,500 USD (o su equivalente en otras divisas)</p>
          <p><strong>Plazo de reporte:</strong> Trimestral (10 últimos días hábiles de enero, abril, julio y octubre)</p>
          <p><strong>Obligatoriedad:</strong> SÍ, todas las operaciones que superen el umbral</p>
          <p><strong>Base legal:</strong> DCG CNBV, Disposición 28ª</p>

          <p><strong>Ejemplos:</strong></p>
          <ul>
            <li>Crédito automotriz por $350,000 MXN (~$20,000 USD)</li>
            <li>Pago de enganche en efectivo por $150,000 MXN (~$8,500 USD)</li>
            <li>Liquidación anticipada de crédito por $200,000 MXN</li>
            <li>Depósito en garantía por $10,000 USD</li>
          </ul>
        </div>

        <div class="report-box report-box-unusual">
          <h4>2️⃣ Operaciones Inusuales (Tipo 2)</h4>
          <p><strong>Criterio:</strong> Operaciones que NO coinciden con el perfil transaccional del cliente</p>
          <p><strong>Plazo de reporte:</strong> 60 días naturales desde detección</p>
          <p><strong>Obligatoriedad:</strong> SÍ, si detectas incongruencias según tu matriz de riesgo</p>
          <p><strong>Base legal:</strong> DCG CNBV, Disposición 30ª</p>

          <p><strong>Ejemplos:</strong></p>
          <ul>
            <li>Cliente con perfil de ingresos de $20,000/mes solicita crédito de $500,000</li>
            <li>Cliente hace 10 pagos de $7,000 MXN c/u en efectivo (estructuración/pitufeo)</li>
            <li>Cliente reporta actividad X pero paga con transferencias de empresas del sector Y</li>
            <li>Cambio repentino de comportamiento: cliente pagaba con transferencias, ahora solo efectivo</li>
          </ul>

          <div class="report-alert report-alert-warning">
            <strong>⚠️ Importante:</strong> No confundir con "sospechosa". Inusual = diferente al perfil. Puede tener explicación legítima, pero DEBES reportar.
          </div>
        </div>

        <div class="report-box report-box-concerning">
          <h4>3️⃣ Operaciones Internas Preocupantes (Tipo 3)</h4>
          <p><strong>Criterio:</strong> Operaciones con FUERTES INDICIOS de recursos de procedencia ilícita o con vínculos a lavado de dinero/terrorismo</p>
          <p><strong>Plazo de reporte:</strong> 60 días naturales desde detección</p>
          <p><strong>Obligatoriedad:</strong> SÍ, en cuanto detectes señales de alerta graves</p>
          <p><strong>Base legal:</strong> DCG CNBV, Art. 400 Bis y 139 Quáter CPF</p>

          <p><strong>Ejemplos de señales de alerta graves:</strong></p>
          <ul>
            <li>Cliente aparece en listas de PEPs, terrorismo o OFAC</li>
            <li>Documentación claramente falsificada o alterada</li>
            <li>Cliente se niega a proporcionar información de conocimiento del cliente</li>
            <li>Operaciones con vínculos evidentes a actividades ilícitas (narcotráfico, trata, etc.)</li>
            <li>Cliente usa interpósitas personas o testaferros evidentes</li>
            <li>Múltiples alertas inusuales sin justificación creíble</li>
          </ul>

          <div class="report-alert report-alert-danger">
            <strong>🚨 CRÍTICO:</strong> Este reporte es URGENTE. Si tienes dudas, consulta INMEDIATAMENTE con tu Oficial de Cumplimiento o asesor legal.
          </div>
        </div>

        <h3>⚖️ Consecuencias del incumplimiento</h3>
        <ul>
          <li><strong>No reportar operaciones relevantes:</strong> Multa de 200 a 2,000 veces el salario mínimo por operación no reportada</li>
          <li><strong>No reportar inusuales/preocupantes:</strong> Multa de 2,000 a 10,000 veces el salario mínimo + posible inhabilitación</li>
          <li><strong>Reportar tarde:</strong> Multa proporcional según días de retraso</li>
          <li><strong>Reportar mal (errores sistemáticos):</strong> Observaciones de CNBV, requerimientos de información, visitas de inspección</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico completos</h3>
        <div class="catalog-example">
          <strong>Caso 1 - Solo Relevante:</strong><br>
          Cliente: "Constructora ABC S.A." con buen historial<br>
          Operación: Crédito $400,000 MXN, transferencia bancaria desde cuenta propia<br>
          Actividad coherente con giro (construcción)<br>
          <strong>Tipo reporte:</strong> <code>1</code> - Operación Relevante<br>
          <em>Razón: Supera umbral ($22,857 USD aprox.), pero todo está en orden. Solo relevante por monto.</em>
        </div>

        <div class="catalog-example">
          <strong>Caso 2 - Relevante + Inusual:</strong><br>
          Cliente: "Juan Pérez" empleado con salario de $15,000/mes<br>
          Operación: Pago enganche $200,000 MXN en efectivo<br>
          Monto inusual para su perfil de ingresos, sin justificación convincente<br>
          <strong>Tipo reporte:</strong> <code>1</code> (por monto) Y <code>2</code> (por perfil)<br>
          <em>Razón: Se envían DOS reportes. Uno como relevante, otro como inusual. Pueden coexistir.</em>
        </div>

        <div class="catalog-example">
          <strong>Caso 3 - Preocupante:</strong><br>
          Cliente: "María López" proporciona INE con foto diferente a la persona presente<br>
          Operación: Solicita crédito urgente por $100,000 MXN en efectivo<br>
          Se niega a dar información de empleo, dice que "no es necesario"<br>
          <strong>Tipo reporte:</strong> <code>3</code> - Operación Interna Preocupante<br>
          <strong>Acción:</strong> Rechazar operación, reportar en 24 horas, bloquear cliente<br>
          <em>Razón: Posible suplantación de identidad, señales claras de alerta. CRÍTICO.</em>
        </div>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Una MISMA operación puede generar múltiples reportes. Si una operación es relevante por monto Y además es inusual para el cliente, envías dos reportes separados (Tipo 1 y Tipo 2). No son excluyentes.
        </div>

        <div class="report-resources">
          <strong>📚 Recursos adicionales:</strong> Para guía completa de layouts y campos F36, consulta nuestra <a href="../reportes-regulatorios-cnbv.php">Guía de Reportes Regulatorios CNBV</a>.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de tipos de reporte</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de 3 tipos de reporte PLD/FT ante la UIF
          </caption>
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
                <p>Cargando tipos de reporte...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catálogo oficial de tipos de reporte PLD/FT ante la Unidad de Inteligencia Financiera. Incluye: Operaciones Relevantes (≥$7,500 USD), Operaciones Inusuales (60 días hábiles) y Operaciones Internas Preocupantes (24 horas). Campo 1 del layout RIPS F36.
        </p>
      </div>

      <?php echo generateDownloadButton('tipo-reporte.json', 3); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/tipo-reporte.json')
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
