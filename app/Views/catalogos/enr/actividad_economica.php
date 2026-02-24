
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        Actividad Economica RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count"><?= esc($recordCount) ?></span> actividades CNBV
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Para que sirve este catalogo?</strong><br>
        Clasificacion oficial de actividades economicas de tus clientes. Se reporta en la <strong>columna <?= esc($field) ?> del layout F36</strong> para todos los reportes PLD/FT.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Al clasificar a tus clientes, debes asignar la actividad economica que mejor describe su giro comercial.
          Esta informacion es <strong>obligatoria</strong> en reportes de operaciones relevantes, inusuales e internas preocupantes.
        </p>

        <section>
          <h3>Donde se reporta</h3>
          <ul>
            <li><strong>Campo <?= esc($field) ?>:</strong> "Actividad Economica" en layout F36</li>
            <li><strong>Formato:</strong> Codigo numerico de 6 digitos</li>
            <li><strong>Obligatorio:</strong> Si, en todos los reportes RIPS F36</li>
          </ul>
        </section>

        <section>
          <h3>Uso en Matriz de Riesgo</h3>
          <p>
            <strong>Recomendacion:</strong> Asigna un nivel de riesgo a cada actividad economica en tu matriz de riesgo.
            Segun las DCG de la CNBV, algunas actividades requieren mayor vigilancia:
          </p>
          <ul>
            <li><strong>Alto riesgo:</strong> Casas de cambio, joyerias, compraventa de metales/piedras preciosas, bienes raices</li>
            <li><strong>Riesgo medio:</strong> Comercio al por mayor, servicios financieros, construccion</li>
            <li><strong>Bajo riesgo:</strong> Servicios profesionales, manufactura, agricultura</li>
          </ul>
        </section>

        <section>
          <h3>Ejemplos de uso practico</h3>
          <div class="examples-grid">
            <div class="catalog-example">
              <strong>Ejemplo 1 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Joyeria El Diamante"</dd>
                <dt>Actividad:</dt>
                <dd><code>464121</code> - Comercio al por menor de joyeria y relojes</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-high">ALTO</span> (DCG CNBV - sector de alta vigilancia)</dd>
                <dt>Razon:</dt>
                <dd>Comercio de metales y piedras preciosas, vulnerable a lavado de dinero.</dd>
              </dl>
            </div>

            <div class="catalog-example">
              <strong>Ejemplo 2 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Constructora Torres S.A."</dd>
                <dt>Actividad:</dt>
                <dd><code>236111</code> - Edificacion residencial</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-medium">MEDIO</span></dd>
                <dt>Razon:</dt>
                <dd>Montos elevados, pero sector regulado.</dd>
              </dl>
            </div>

            <div class="catalog-example">
              <strong>Ejemplo 3 - Cliente SOFOM</strong>
              <dl>
                <dt>Cliente:</dt>
                <dd>"Despacho Contable Lopez y Asociados"</dd>
                <dt>Actividad:</dt>
                <dd><code>541211</code> - Servicios de contabilidad</dd>
                <dt>Riesgo recomendado:</dt>
                <dd><span class="risk-low">BAJO</span></dd>
                <dt>Razon:</dt>
                <dd>Servicios profesionales, operaciones predecibles.</dd>
              </dl>
            </div>
          </div>
        </section>

        <section>
          <h3>Actividades de mayor vigilancia</h3>
          <p>Segun las DCG de la CNBV, presta especial atencion a clientes con estas actividades:</p>
          <ul>
            <li>Comercio de vehiculos automotores</li>
            <li>Inmobiliarias y desarrolladores</li>
            <li>Casas de empeno</li>
            <li>Joyerias y relojerias</li>
            <li>Arte y antiguedades</li>
            <li>Casinos y juegos de azar</li>
          </ul>
        </section>

        <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669; margin-top: 1.5rem;">
          <strong>Este catalogo es compartido con SOFOM ER</strong><br>
          Las actividades economicas son las mismas en RIPS F41 (ER) y F36 (ENR).
          <a href="<?= site_url('catalogos-er/actividad-economica') ?>">Ver version ER del catalogo</a>.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de actividades economicas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo completo de <?= esc($recordCount) ?> actividades economicas CNBV para reportes RIPS F36
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 120px; text-align: center;">Clave</th>
              <th scope="col">Actividad Economica</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando <?= esc($recordCount) ?> actividades...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Tabla con <?= esc($recordCount) ?> actividades economicas oficiales de Mexico.
          Cada fila contiene una clave numerica de 6 digitos y la descripcion completa de la actividad economica.
          Este catalogo se reporta en el Campo <?= esc($field) ?> del layout RIPS F36 para cumplimiento PLD/FT ante la CNBV.
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
        document.getElementById('total-count').textContent = data.length.toLocaleString('es-MX');

        const tbody = document.getElementById('table-body');
        tbody.innerHTML = data.map(item => `
          <tr>
            <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE ACTIVIDAD ECONOMICA']}</td>
            <td>${item['ACTIVIDAD ECONOMICA']}</td>
          </tr>
        `).join('');

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
        console.error('Error al cargar el catalogo:', error);
        document.getElementById('table-body').innerHTML = `
          <tr>
            <td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">
              Error al cargar el catalogo. Por favor recarga la pagina.
            </td>
          </tr>
        `;
      });
  });
</script>
