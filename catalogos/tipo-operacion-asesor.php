<?php
$pageTitle = "Catálogo: Tipo de Operación Asesor | SOFOMES.COM";
$pageDescription = "Catálogo de tipos de operación con asesor externo para reportes PLD/FT. Clasificación CNBV RIPS F36 para SOFOMes.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: tipo de operación asesor";
$canonicalUrl = "https://sofomes.com/catalogos/tipo-operacion-asesor";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';

// Generate Dataset Schema for SEO
include '../includes/dataset-schema.php';
$datasetSchema = generateDatasetSchema([
    'name' => 'Catálogo de Tipos de Operación para Asesores en Inversiones CNBV',
    'description' => 'Catálogo de 4 tipos de operación para Asesores en Inversiones: gestión de carteras, asesoría, transmisión de órdenes y otras. NOTA: Este catálogo NO es parte del layout RIPS F36 estándar de SOFOMes.',
    'url' => 'https://sofomes.com/catalogos/tipo-operacion-asesor',
    'keywords' => ['CNBV', 'asesores en inversiones', 'gestión de carteras', 'PLD/FT', 'operaciones bursátiles', 'Ley del Mercado de Valores'],
    'jsonFile' => 'tipo-operacion-asesor.json',
    'recordCount' => 4,
    'field' => '',
    'fieldDescription' => 'Clasificación de servicios prestados por Asesores en Inversiones registrados ante CNBV'
]);

echo $datasetSchema;
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">📝 Tipo de Operación (Asesor)</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">4</span> tipos para asesores en inversiones</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⚠️ IMPORTANTE: Este catálogo NO es parte del RIPS F36</strong><br>
        Este catálogo es específico para <strong>Asesores en Inversiones</strong> regulados por la CNBV según la Ley del Mercado de Valores. NO aplica para SOFOMes que usan el formato RIPS F36 estándar.
      </div>

      <!-- Introducción práctica -->
      <article class="catalog-guide">
        <h2>📝 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Si tu SOFOM trabaja con asesores en inversiones registrados ante la CNBV (personas físicas o morales autorizadas), debes clasificar el tipo de servicio que prestan. Este campo aplica principalmente a <strong>Asesores en Inversiones</strong> según la Ley del Mercado de Valores.
        </p>

        <div style="background: #FEE2E2; padding: 1rem; border-left: 4px solid #DC2626; margin-bottom: 1.5rem; border-radius: 4px;">
          <strong>🚫 Este catálogo NO está en el layout RIPS F36 de SOFOMes</strong><br>
          Los Asesores en Inversiones usan un formato de reporte diferente al F36. Si eres una SOFOM, este catálogo no te aplica.
        </div>

        <section>
          <h3>📍 Dónde se reporta</h3>
          <ul>
            <li><strong>Reporte:</strong> Formato específico para Asesores en Inversiones CNBV (NO es RIPS F36)</li>
            <li><strong>Formato:</strong> Código numérico de 2 dígitos (50, 51, 52, 00)</li>
            <li><strong>Aplicable:</strong> Solo para entidades registradas como Asesores en Inversiones ante CNBV</li>
            <li><strong>Ejemplos:</strong> 50=Gestión de Inversiones, 51=Asesoría, 52=Transmisión de operaciones</li>
          </ul>
        </section>

        <section>
          <h3>🔍 Tipos de operación</h3>
          <ul>
            <li><strong>1 - Gestión de Carteras de Inversión:</strong> El asesor administra los activos del cliente con discrecionalidad, tomando decisiones de compra/venta</li>
            <li><strong>2 - Asesoría de Inversión:</strong> El asesor recomienda estrategias, pero el cliente toma las decisiones finales</li>
            <li><strong>3 - Transmisión de Órdenes:</strong> El asesor ejecuta órdenes de compra/venta que el cliente ya decidió</li>
            <li><strong>4 - Otras operaciones:</strong> Servicios complementarios que no caen en las categorías anteriores</li>
          </ul>
        </section>

        <section>
          <h3>⚠️ Nivel de riesgo según tipo de operación</h3>
          <p>
            <strong>Recomendación para matriz de riesgo de Asesores en Inversiones:</strong>
          </p>
          <ul>
            <li><strong>Riesgo medio-alto:</strong> Gestión discrecional (Tipo 1) - El asesor controla los fondos directamente, requiere supervisión continua</li>
            <li><strong>Riesgo medio:</strong> Asesoría (Tipo 2) - Cliente mantiene control, pero hay influencia del asesor</li>
            <li><strong>Riesgo bajo:</strong> Transmisión de órdenes (Tipo 3) - Solo ejecución, sin decisión del asesor</li>
            <li><strong>Variable:</strong> Otras operaciones (Tipo 4) - Depende del servicio específico prestado</li>
          </ul>
        </section>

        <section>
          <h3>💡 Ejemplos de uso práctico</h3>
          <div class="catalog-example">
            <strong>Ejemplo 1 - Gestión discrecional:</strong><br>
            Asesor: "Capital Advisors S.A. de C.V." (registrado CNBV)<br>
            Cliente: Inversionista con portafolio de $5,000,000 MXN<br>
            Servicio: Gestión completa del portafolio con libertad de decisión<br>
            Tipo operación: <code>1</code> - Gestión de Carteras de Inversión<br>
            Riesgo: <span class="risk-medium">MEDIO-ALTO</span><br>
            <em>Razón: Asesor tiene control discrecional sobre activos importantes. Requiere conocimiento reforzado del asesor y monitoreo de cambios en el portafolio.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 2 - Asesoría sin discrecionalidad:</strong><br>
            Asesor: "Consultoría Financiera López"<br>
            Cliente: Empresario que busca diversificar inversiones<br>
            Servicio: Recomendaciones de estrategia, cliente decide<br>
            Tipo operación: <code>2</code> - Asesoría de Inversión<br>
            Riesgo: <span class="risk-medium">MEDIO</span><br>
            <em>Razón: Cliente mantiene control final, asesor solo recomienda. Menor riesgo que gestión discrecional.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 3 - Ejecución de órdenes:</strong><br>
            Asesor: "Operadora Bursátil del Norte"<br>
            Cliente: Inversionista experimentado<br>
            Servicio: Cliente indica "Comprar 1,000 acciones de X", asesor ejecuta<br>
            Tipo operación: <code>3</code> - Transmisión de Órdenes<br>
            Riesgo: <span class="risk-low">BAJO</span><br>
            <em>Razón: No hay discrecionalidad del asesor, solo ejecución técnica de órdenes pre-autorizadas.</em>
          </div>
        </section>

        <section>
          <h3>🚨 Señales de alerta con asesores</h3>
          <p>Independientemente del tipo de operación, monitorea:</p>
          <ul>
            <li><strong>Asesor no registrado:</strong> Verifica que el asesor esté en el Registro de Asesores en Inversiones de la CNBV</li>
            <li><strong>Conflictos de interés:</strong> Asesor con vínculos no revelados con emisoras o fondos recomendados</li>
            <li><strong>Churning:</strong> Operaciones excesivas solo para generar comisiones (en gestión discrecional)</li>
            <li><strong>Cambios bruscos:</strong> Rotación completa de portafolio sin justificación clara</li>
            <li><strong>Concentración:</strong> Asesor coloca múltiples clientes en mismo activo ilíquido o riesgoso</li>
          </ul>
        </section>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si tu entidad NO es un Asesor en Inversiones, este campo generalmente se deja en blanco o se marca como "No Aplica" en tus reportes F36. Consulta con tu área de cumplimiento si tienes dudas sobre si debes reportar este dato.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de tipos de operación</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de 4 tipos de operación para Asesores en Inversiones CNBV
          </caption>
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
          Catálogo de servicios prestados por Asesores en Inversiones: gestión de carteras, asesoría, transmisión de órdenes y otros. NOTA: Este catálogo NO es parte del layout RIPS F36 de SOFOMes.
        </p>
      </div>

      <?php echo generateDownloadButton('tipo-operacion-asesor.json', 4); ?>

    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/tipo-operacion-asesor.json')
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
