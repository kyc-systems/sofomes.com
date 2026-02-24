
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">Tipo de Operacion (Asesor)</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> tipos para asesores en inversiones</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>IMPORTANTE: Este catalogo NO es parte del RIPS F36 estandar</strong><br>
        Este catalogo es especifico para <strong>Asesores en Inversiones</strong> regulados por la CNBV segun la Ley del Mercado de Valores. NO aplica para SOFOMes que usan el formato RIPS F36 estandar.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Si tu SOFOM trabaja con asesores en inversiones registrados ante la CNBV (personas fisicas o morales autorizadas), debes clasificar el tipo de servicio que prestan. Este campo aplica principalmente a <strong>Asesores en Inversiones</strong> segun la Ley del Mercado de Valores.
        </p>

        <div style="background: #FEE2E2; padding: 1rem; border-left: 4px solid #DC2626; margin-bottom: 1.5rem; border-radius: 4px;">
          <strong>Este catalogo NO esta en el layout RIPS F36 de SOFOMes</strong><br>
          Los Asesores en Inversiones usan un formato de reporte diferente al F36. Si eres una SOFOM, este catalogo no te aplica directamente.
        </div>

        <section>
          <h3>Donde se reporta</h3>
          <ul>
            <li><strong>Reporte:</strong> Formato especifico para Asesores en Inversiones CNBV (NO es RIPS F36)</li>
            <li><strong>Formato:</strong> Codigo numerico de 2 digitos</li>
            <li><strong>Aplicable:</strong> Solo para entidades registradas como Asesores en Inversiones ante CNBV</li>
            <li><strong>Ejemplos:</strong> 1=Gestion de Inversiones, 2=Asesoria, 3=Transmision de operaciones</li>
          </ul>
        </section>

        <section>
          <h3>Tipos de operacion</h3>
          <ul>
            <li><strong>1 - Gestion de Carteras de Inversion:</strong> El asesor administra los activos del cliente con discrecionalidad, tomando decisiones de compra/venta</li>
            <li><strong>2 - Asesoria de Inversion:</strong> El asesor recomienda estrategias, pero el cliente toma las decisiones finales</li>
            <li><strong>3 - Transmision de Ordenes:</strong> El asesor ejecuta ordenes de compra/venta que el cliente ya decidio</li>
            <li><strong>4 - Otras operaciones:</strong> Servicios complementarios que no caen en las categorias anteriores</li>
          </ul>
        </section>

        <section>
          <h3>Nivel de riesgo segun tipo de operacion</h3>
          <p>
            <strong>Recomendacion para matriz de riesgo de Asesores en Inversiones:</strong>
          </p>
          <ul>
            <li><strong>Riesgo medio-alto:</strong> Gestion discrecional (Tipo 1) - El asesor controla los fondos directamente, requiere supervision continua</li>
            <li><strong>Riesgo medio:</strong> Asesoria (Tipo 2) - Cliente mantiene control, pero hay influencia del asesor</li>
            <li><strong>Riesgo bajo:</strong> Transmision de ordenes (Tipo 3) - Solo ejecucion, sin decision del asesor</li>
            <li><strong>Variable:</strong> Otras operaciones (Tipo 4) - Depende del servicio especifico prestado</li>
          </ul>
        </section>

        <section>
          <h3>Ejemplos de uso practico</h3>
          <div class="catalog-example">
            <strong>Ejemplo 1 - Gestion discrecional:</strong><br>
            Asesor: "Capital Advisors S.A. de C.V." (registrado CNBV)<br>
            Cliente: Inversionista con portafolio de $5,000,000 MXN<br>
            Servicio: Gestion completa del portafolio con libertad de decision<br>
            Tipo operacion: <code>1</code> - Gestion de Carteras de Inversion<br>
            Riesgo: <span class="risk-medium">MEDIO-ALTO</span><br>
            <em>Razon: Asesor tiene control discrecional sobre activos importantes. Requiere conocimiento reforzado del asesor y monitoreo de cambios en el portafolio.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 2 - Asesoria sin discrecionalidad:</strong><br>
            Asesor: "Consultoria Financiera Lopez"<br>
            Cliente: Empresario que busca diversificar inversiones<br>
            Servicio: Recomendaciones de estrategia, cliente decide<br>
            Tipo operacion: <code>2</code> - Asesoria de Inversion<br>
            Riesgo: <span class="risk-medium">MEDIO</span><br>
            <em>Razon: Cliente mantiene control final, asesor solo recomienda. Menor riesgo que gestion discrecional.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 3 - Ejecucion de ordenes:</strong><br>
            Asesor: "Operadora Bursatil del Norte"<br>
            Cliente: Inversionista experimentado<br>
            Servicio: Cliente indica orden de compra/venta, asesor ejecuta<br>
            Tipo operacion: <code>3</code> - Transmision de Ordenes<br>
            Riesgo: <span class="risk-low">BAJO</span><br>
            <em>Razon: No hay discrecionalidad del asesor, solo ejecucion tecnica de ordenes pre-autorizadas.</em>
          </div>
        </section>

        <section>
          <h3>Senales de alerta con asesores</h3>
          <p>Independientemente del tipo de operacion, monitorea:</p>
          <ul>
            <li><strong>Asesor no registrado:</strong> Verifica que el asesor este en el Registro de Asesores en Inversiones de la CNBV</li>
            <li><strong>Conflictos de interes:</strong> Asesor con vinculos no revelados con emisoras o fondos recomendados</li>
            <li><strong>Churning:</strong> Operaciones excesivas solo para generar comisiones (en gestion discrecional)</li>
            <li><strong>Cambios bruscos:</strong> Rotacion completa de portafolio sin justificacion clara</li>
            <li><strong>Concentracion:</strong> Asesor coloca multiples clientes en mismo activo iliquido o riesgoso</li>
          </ul>
        </section>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> Si tu entidad NO es un Asesor en Inversiones, este campo generalmente se deja en blanco o se marca como "No Aplica" en tus reportes F36. Consulta con tu area de cumplimiento si tienes dudas sobre si debes reportar este dato.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de tipos de operacion</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de <?= esc($recordCount) ?> tipos de operacion para Asesores en Inversiones CNBV
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Tipo de Operacion</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando tipos de operacion...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catalogo de servicios prestados por Asesores en Inversiones: gestion de carteras, asesoria, transmision de ordenes y otros. NOTA: Este catalogo NO es parte del layout RIPS F36 de SOFOMes.
        </p>
      </div>

      <?= $downloadHtml ?>

      <div style="margin-top: 2rem; text-align: center;">
        <a href="<?= site_url('catalogos-rips') ?>" class="btn btn-outline">
          Ver todos los catalogos RIPS F36
        </a>
      </div>

    </div>
  </section>

<script>
  $(document).ready(function() {
    fetch('<?= base_url('catalogs/json/' . $jsonFile) ?>')
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
        document.getElementById('table-body').innerHTML = '<tr><td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">Error al cargar el catalogo</td></tr>';
      });
  });
</script>
