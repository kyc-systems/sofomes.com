<?php
// Variables para header.php
$pageTitle = "Catálogo: Localidades | SOFOMES.COM";
$pageDescription = "Catálogo de localidades de México por estado, municipio y colonia. Códigos oficiales SEPOMEX para reportes RIPS F36 CNBV.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: localidades";
$canonicalUrl = "https://sofomes.com/catalogos/localidades";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;

include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Localidades México CNBV RIPS F36',
    'description' => 'Catálogo oficial con 3,689 localidades de México por estado y municipio. Códigos geográficos de 8 dígitos para reportes regulatorios. Campo 6 del layout F36.',
    'url' => 'https://sofomes.com/catalogos/localidades',
    'keywords' => ['RIPS F36', 'CNBV', 'localidades México', 'municipios', 'PLD/FT', 'SOFOM', 'códigos geográficos', 'SEPOMEX'],
    'jsonFile' => 'localidades.json',
    'recordCount' => 3689,
    'field' => '6',
    'fieldDescription' => 'Localidad geográfica donde se realizó la operación'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        📍 Localidades RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count">3,689</span> localidades según estados y municipios de México
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación oficial de ubicaciones geográficas de clientes y operaciones. Se reporta en la <strong>columna 6 (Localidad) del layout F36</strong> para identificar la ubicación geográfica de la sucursal o lugar de la operación.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>📍 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Cada cliente y cada operación debe tener asociada una localidad precisa. La CNBV requiere códigos de 8 dígitos que identifican Estado + Municipio para geolocalización de riesgos.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 6:</strong> "Localidad" - Ubicación geográfica de la sucursal o lugar donde se realizó la operación</li>
          <li><strong>Formato:</strong> Código numérico de 8 dígitos según catálogo oficial CNBV</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F36</li>
          <li><strong>Importante:</strong> Debes buscar el código exacto en este catálogo. No se puede construir manualmente, debe existir en la lista oficial</li>
          <li><strong>Relacionado:</strong> El Campo 24 "Domicilio" contiene la dirección completa en texto libre</li>
        </ul>

        <h3>⚠️ Análisis de riesgo geográfico</h3>
        <p>
          <strong>Recomendación para tu matriz de riesgo:</strong> Considera el riesgo geográfico según zona:
        </p>
        <ul>
          <li><strong>Alto riesgo:</strong> Zonas fronterizas (Tijuana, Ciudad Juárez, Reynosa, Nuevo Laredo), puertos marítimos (Manzanillo, Lázaro Cárdenas, Veracruz), ciudades con alta incidencia de delitos financieros según UIF</li>
          <li><strong>Riesgo medio:</strong> Ciudades grandes con flujo comercial internacional (CDMX, Guadalajara, Monterrey), zonas turísticas (Cancún, Los Cabos, Puerto Vallarta)</li>
          <li><strong>Bajo riesgo:</strong> Ciudades medianas/pequeñas sin frontera o puerto, con actividad económica local estable</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Cliente fronterizo:</strong><br>
          Cliente: "Transportes del Norte S.A." en Nuevo Laredo, Tamaulipas<br>
          Domicilio fiscal: <code>28038001</code> (Nuevo Laredo)<br>
          Actividad: Transporte de carga hacia Estados Unidos<br>
          Riesgo geográfico: <span class="risk-high">ALTO</span><br>
          <em>Razón: Zona fronteriza con alto flujo de efectivo y operaciones transfronterizas. Requiere monitoreo reforzado según lineamientos UIF.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Operación puerto marítimo:</strong><br>
          Cliente: "Importadora del Pacífico" con oficina en Manzanillo, Colima<br>
          Lugar de operación: <code>06007001</code> (Manzanillo)<br>
          Actividad: Importación de maquinaria<br>
          Riesgo geográfico: <span class="risk-high">ALTO</span><br>
          <em>Razón: Puerto marítimo vulnerable a contrabando y flujos internacionales. LFPIORPI requiere atención especial en zonas portuarias.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Cliente local:</strong><br>
          Cliente: "Panadería La Espiga" en Aguascalientes, Aguascalientes<br>
          Domicilio: <code>01001001</code> (Aguascalientes Capital)<br>
          Actividad: Comercio al por menor de pan<br>
          Riesgo geográfico: <span class="risk-low">BAJO</span><br>
          <em>Razón: Ciudad interior, actividad local predecible, sin frontera o puerto.</em>
        </div>

        <h3>🚨 Zonas de mayor vigilancia</h3>
        <p>Según lineamientos UIF y alertas de riesgo geográfico, presta especial atención a:</p>
        <ul>
          <li><strong>Fronteras Norte:</strong> Tijuana (02004001), Ciudad Juárez (08037001), Reynosa (28032001), Nuevo Laredo (28038001), Matamoros (28022001)</li>
          <li><strong>Fronteras Sur:</strong> Tapachula (07089001), Chetumal (23002001)</li>
          <li><strong>Puertos principales:</strong> Manzanillo (06007001), Lázaro Cárdenas (16052001), Veracruz (30193001), Altamira (28003001)</li>
          <li><strong>Zonas turísticas con flujo internacional:</strong> Cancún (23005001), Playa del Carmen (23008001), Los Cabos (03003001)</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si detectas que un cliente tiene domicilio fiscal en zona de bajo riesgo pero realiza frecuentemente operaciones en zona fronteriza o portuaria, considera incrementar su nivel de riesgo en tu matriz. La incongruencia geográfica puede ser señal de alerta.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de localidades</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de 3,689 localidades de México para reportes RIPS F36
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 120px; text-align: center;">Clave</th>
              <th scope="col">Localidad</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p>Cargando 3,689 localidades...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catálogo oficial de localidades de México por estado y municipio. Códigos geográficos de 8 dígitos para identificar la ubicación de operaciones. Campo 6 del layout RIPS F36.
        </p>
      </div>

      <?php echo generateDownloadButton('localidades.json', 3689); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/localidades.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
          const tbody = document.getElementById('table-body');
          tbody.innerHTML = data.map(item => `
            <tr>
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE LOCALIDAD']}</td>
              <td>${item['LOCALIDAD']}</td>
            </tr>
          `).join('');
          $('#catalog-table').DataTable({
            language: { url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json' },
            pageLength: 25,
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
            order: [[0, 'asc']],
            columnDefs: [{ width: '120px', targets: 0 }]
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
