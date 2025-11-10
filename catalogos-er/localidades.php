<?php
$pageTitle = "Catálogo ER: Localidades | SOFOMES.COM";
$pageDescription = "Catálogo de 3,689 localidades de México para SOFOM ER. RIPS F41 CNBV campo 6.";
$pageKeywords = "catalogo cnbv, rips f41, pld sofom er, localidades";
$canonicalUrl = "https://sofomes.com/catalogos-er/localidades";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Localidades de México CNBV RIPS F41 (SOFOM ER)',
    'description' => 'Catálogo oficial con 3,689 localidades de México según INEGI para SOFOMes Entidad Regulada. Campo 6 del layout F41.',
    'url' => 'https://sofomes.com/catalogos-er/localidades',
    'keywords' => ['RIPS F41', 'CNBV', 'localidades', 'PLD/FT', 'SOFOM ER', 'INEGI'],
    'jsonFile' => 'er/localidades.json',
    'recordCount' => 3689,
    'field' => '6',
    'fieldDescription' => 'Localidad del domicilio del cliente'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">📍 Localidades</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">3,689</span> localidades de México</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Identificación geográfica del cliente. Se reporta en la <strong>columna 6 del layout F41</strong> para especificar la localidad donde reside el cliente.
      </div>

      <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669;">
        <strong>✅ Este catálogo es IDÉNTICO para ER y ENR</strong><br>
        Las localidades son las mismas en RIPS F41 (ER) y F36 (ENR) - 3,689 localidades INEGI.
      </div>

      <article class="catalog-guide">
        <h2>📍 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          La localidad del cliente es OBLIGATORIA en el expediente de conocimiento y debe coincidir con su comprobante de domicilio. Es un factor geográfico en tu matriz de riesgo.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 6:</strong> "Localidad" en layout F41</li>
          <li><strong>Formato:</strong> Código numérico de 8 dígitos según catálogo CNBV</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F41</li>
          <li><strong>Fuente:</strong> Comprobante de domicilio del cliente (CFE, agua, predial)</li>
        </ul>

        <h3>⚠️ Nivel de riesgo geográfico</h3>
        <p><strong>Recomendación para tu matriz de riesgo de SOFOM ER:</strong></p>
        <ul>
          <li><strong>Riesgo alto:</strong> Zonas fronterizas (Tijuana, Juárez, Reynosa), regiones con alta incidencia delictiva según Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</li>
          <li><strong>Riesgo medio-alto:</strong> Zonas portuarias, aeropuertos internacionales, ciudades turísticas con casinos</li>
          <li><strong>Riesgo medio:</strong> Ciudades metropolitanas, capitales estatales</li>
          <li><strong>Riesgo bajo:</strong> Zonas rurales, municipios pequeños con baja actividad económica</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si el domicilio del cliente está en zona de alto riesgo Y su actividad económica también es riesgosa, aplica conocimiento REFORZADO: visita domiciliaria, referencias adicionales, verificación de actividad comercial.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de localidades</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 3,689 localidades de México</caption>
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
                <p style="margin-top: 1rem;">Cargando localidades...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">
          Catálogo oficial de localidades de México según INEGI. Campo 6 del layout RIPS F41.
        </p>
      </div>

      <?php echo generateDownloadButton('er/localidades.json', 3689); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/er/localidades.json')
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
