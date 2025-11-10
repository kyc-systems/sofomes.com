<?php
$pageTitle = "Catálogo ENR: Tipo de Operación Asesores en Inversiones | SOFOMES.COM";
$pageDescription = "Catálogo de 4 tipos de operación para Asesores en Inversiones: gestión, asesoría, transmisión. RIPS F36 CNBV.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom enr, asesores en inversiones";
$canonicalUrl = "https://sofomes.com/catalogos-enr/tipo-operacion-asesores-inv";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Operación para Asesores en Inversiones CNBV RIPS F36',
    'description' => 'Catálogo con 4 tipos de operación para Asesores en Inversiones: gestión, asesoría, transmisión. NOTA: Solo aplica si la SOFOM ENR actúa como asesor.',
    'url' => 'https://sofomes.com/catalogos-enr/tipo-operacion-asesores-inv',
    'keywords' => ['RIPS F36', 'CNBV', 'asesores en inversiones', 'gestión de carteras', 'PLD/FT'],
    'jsonFile' => 'enr/tipo-operacion-asesores-inv.json',
    'recordCount' => 4,
    'field' => '',
    'fieldDescription' => 'Tipo de servicio de asesoría en inversiones'
]);
echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
        <span class="badge-exclusive">SOLO ASESORES</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">📝 Tipo de Operación (Asesores)</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">4</span> tipos para asesores en inversiones</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⚠️ IMPORTANTE: Solo aplica a SOFOM ENR que asesoran inversiones</strong><br>
        Este catálogo es ÚNICAMENTE para SOFOMes ENR que prestan servicios de asesoría en inversiones SIN autorización bursátil completa.
      </div>

      <div class="alert alert-danger" style="background: #FEE2E2; border-left: 4px solid #DC2626;">
        <strong>🚫 Este catálogo NO existe en RIPS F41 (ER)</strong><br>
        Las SOFOM ER que realizan asesoría bursátil requieren autorización completa y usan códigos del catálogo general de operaciones (16-21 valores).
      </div>

      <article class="catalog-guide">
        <h2>📝 ¿Cuándo usar este catálogo?</h2>

        <p>
          Si tu SOFOM ENR asesora a clientes en inversiones (sin ser casa de bolsa ni operador autorizado), debes clasificar el servicio con este catálogo.
        </p>

        <h3>📍 Tipos de servicio de asesoría</h3>

        <h4>50 - GESTION DE INVERSIONES</h4>
        <p>
          El asesor administra los activos del cliente con <strong>discrecionalidad</strong>, tomando decisiones de compra/venta sin consultar cada operación.
        </p>
        <p><strong>Riesgo:</strong> <span class="risk-medium">MEDIO-ALTO</span> - Control directo sobre fondos, requiere supervisión continua</p>
        <p><strong>Ejemplo:</strong> "Inversiones XYZ gestiona un portafolio de $5M MXN del cliente con libertad de decisión"</p>

        <h4>51 - ASESORIA DE INVERSION EN VALORES</h4>
        <p>
          El asesor recomienda estrategias de inversión, pero el <strong>cliente toma las decisiones finales</strong>.
        </p>
        <p><strong>Riesgo:</strong> <span class="risk-medium">MEDIO</span> - Cliente mantiene control, asesor solo recomienda</p>
        <p><strong>Ejemplo:</strong> "Consultoría Financiera López recomienda diversificación en FIBRAS, cliente decide si ejecuta"</p>

        <h4>52 - TRANSMISION Y EJECUCION DE OPERACIONES</h4>
        <p>
          El asesor ejecuta órdenes de compra/venta que <strong>el cliente ya decidió</strong>. Solo ejecución técnica.
        </p>
        <p><strong>Riesgo:</strong> <span class="risk-low">BAJO</span> - No hay discrecionalidad del asesor</p>
        <p><strong>Ejemplo:</strong> "Cliente indica 'Comprar 1,000 acciones de AMXL', asesor ejecuta la orden"</p>

        <h4>00 - TENTATIVA</h4>
        <p>Operación intentada pero no completada.</p>

        <h3>🚨 Señales de alerta con asesores</h3>
        <p>Independientemente del tipo de operación, monitorea:</p>
        <ul>
          <li><strong>Asesor no registrado:</strong> Verifica en Registro de Asesores en Inversiones CNBV</li>
          <li><strong>Conflictos de interés:</strong> Asesor con vínculos no revelados con emisoras</li>
          <li><strong>Churning:</strong> Operaciones excesivas solo para generar comisiones</li>
          <li><strong>Cambios bruscos:</strong> Rotación completa de portafolio sin justificación</li>
          <li><strong>Concentración:</strong> Asesor coloca múltiples clientes en mismo activo ilíquido</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si tu SOFOM ENR NO es asesor en inversiones, este campo generalmente se deja en blanco o "No Aplica" en tus reportes F36.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de 4 tipos de operación para Asesores en Inversiones</caption>
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
        <p id="catalog-description" class="sr-only">Catálogo de servicios de asesoría en inversiones. Solo aplica a SOFOM ENR que asesoran. RIPS F36.</p>
      </div>

      <?php echo generateDownloadButton('enr/tipo-operacion-asesores-inv.json', 4); ?>
    </div>
  </section>

  <?php
  $pageScript = <<<'SCRIPT'
  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/enr/tipo-operacion-asesores-inv.json')
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
