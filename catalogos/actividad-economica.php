<?php
// Variables para header.php
$pageTitle = "Catálogo: Actividad Económica | SOFOMES.COM";
$pageDescription = "Catálogo completo de 1,263 actividades económicas para reportes RIPS F36. Clasificación oficial CNBV para SOFOMes en PLD/FT.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: actividad económica";
$canonicalUrl = "https://sofomes.com/catalogos/actividad-economica";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;

include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Actividades Económicas CNBV RIPS F36',
    'description' => 'Catálogo oficial con 1,263 actividades económicas según el clasificación oficial para reportes regulatorios PLD/FT ante CNBV. Campo 28 del layout F36.',
    'url' => 'https://sofomes.com/catalogos/actividad-economica',
    'keywords' => ['RIPS F36', 'CNBV', 'actividad económica', 'PLD/FT', 'SOFOM', 'reportes regulatorios', 'prevención lavado dinero'],
    'jsonFile' => 'actividad-economica.json',
    'recordCount' => 1263,
    'field' => '28',
    'fieldDescription' => 'Actividad Económica del cliente según clasificación'
]);

echo $datasetSchema;
?>



  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        📊 Actividad Económica RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count">1,263</span> actividades CNBV
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación oficial de actividades económicas de tus clientes. Se reporta en la <strong>columna 28 del layout F36</strong> para todos los reportes PLD/FT.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>💼 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Al clasificar a tus clientes, debes asignar la actividad económica que mejor describe su giro comercial.
          Esta información es <strong>obligatoria</strong> en reportes de operaciones relevantes, inusuales e internas preocupantes.
        </p>

        <section>
          <h3>📍 Dónde se reporta</h3>
          <ul>
            <li><strong>Campo 28:</strong> "Actividad Económica" en layout F36</li>
            <li><strong>Formato:</strong> Código numérico de 6 dígitos</li>
            <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F36</li>
          </ul>
        </section>

        <section>
          <h3>⚠️ Uso en Matriz de Riesgo</h3>
          <p>
            <strong>Recomendación:</strong> Asigna un nivel de riesgo a cada actividad económica en tu matriz de riesgo.
            Según las DCG de la CNBV, algunas actividades requieren mayor vigilancia:
          </p>
          <ul>
            <li><strong>Alto riesgo:</strong> Casas de cambio, joyerías, compraventa de metales/piedras preciosas, bienes raíces</li>
            <li><strong>Riesgo medio:</strong> Comercio al por mayor, servicios financieros, construcción</li>
            <li><strong>Bajo riesgo:</strong> Servicios profesionales, manufactura, agricultura</li>
          </ul>
        </section>

        <section>
          <h3>💡 Ejemplos de uso práctico</h3>
          <div class="examples-grid">
            <div class="catalog-example">
              <strong>Ejemplo 1 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Joyería El Diamante"</dd>
                <dt>Actividad:</dt>
                <dd><code>464121</code> - Comercio al por menor de joyería y relojes</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-high">ALTO</span> (DCG CNBV - sector de alta vigilancia)</dd>
                <dt>Razón:</dt>
                <dd>Comercio de metales y piedras preciosas, vulnerable a lavado de dinero.</dd>
              </dl>
            </div>

            <div class="catalog-example">
              <strong>Ejemplo 2 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Constructora Torres S.A."</dd>
                <dt>Actividad:</dt>
                <dd><code>236111</code> - Edificación residencial</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-medium">MEDIO</span></dd>
                <dt>Razón:</dt>
                <dd>Montos elevados, pero sector regulado.</dd>
              </dl>
            </div>

            <div class="catalog-example">
              <strong>Ejemplo 3 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Despacho Contable López y Asociados"</dd>
                <dt>Actividad:</dt>
                <dd><code>541211</code> - Servicios de contabilidad</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-low">BAJO</span></dd>
                <dt>Razón:</dt>
                <dd>Servicios profesionales, operaciones predecibles.</dd>
              </dl>
            </div>
          </div>
        </section>

        <section>
          <h3>🎯 Actividades de mayor vigilancia</h3>
          <p>Según las DCG de la CNBV, presta especial atención a clientes con estas actividades:</p>
          <ul>
            <li>Comercio de vehículos automotores</li>
            <li>Inmobiliarias y desarrolladores</li>
            <li>Casas de empeño</li>
            <li>Joyerías y relojerías</li>
            <li>Arte y antigüedades</li>
            <li>Casinos y juegos de azar</li>
          </ul>
        </section>
      </article>

      <h2 class="section-title">📋 Catálogo completo de actividades económicas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo completo de 1,263 actividades económicas CNBV para reportes RIPS F36
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
                <p style="margin-top: 1rem;">Cargando 1,263 actividades...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Tabla con 1,263 actividades económicas oficiales de México según el Sistema de
          Clasificación oficial. Cada fila contiene una
          clave numérica de 6 dígitos y la descripción completa de la actividad económica.
          Este catálogo se reporta en el Campo 28 del layout RIPS F36 para cumplimiento
          PLD/FT ante la CNBV.
        </p>
      </div>

      <?php echo generateDownloadButton('actividad-economica.json', 1263); ?>

    </div>
  </section>

<?php
// Script específico de esta página (se cargará después de jQuery en el footer)
$pageScript = <<<'SCRIPT'
<script>
  $(document).ready(function() {
    // Cargar datos del JSON
    fetch('../catalogs/json/actividad-economica.json')
      .then(response => response.json())
      .then(data => {
        // Actualizar contador en el hero
        document.getElementById('total-count').textContent = data.length;

        // Agregar datos a la tabla
        const tbody = document.getElementById('table-body');
        tbody.innerHTML = data.map(item => `
          <tr>
            <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE ACTIVIDAD ECONOMICA']}</td>
            <td>${item['ACTIVIDAD ECONOMICA']}</td>
          </tr>
        `).join('');

        // Inicializar DataTables
        $('#catalog-table').DataTable({
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json'
          },
          pageLength: 25,
          lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
          order: [[0, 'asc']],
          columnDefs: [
            { width: '120px', targets: 0 }
          ],
          dom: 'frtip',
          searching: true
        });
      })
      .catch(error => {
        console.error('Error al cargar el catálogo:', error);
        document.getElementById('table-body').innerHTML = `
          <tr>
            <td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">
              ❌ Error al cargar el catálogo. Por favor recarga la página.
            </td>
          </tr>
        `;
      });
  });
</script>
SCRIPT;

include '../includes/footer.php';
?>
