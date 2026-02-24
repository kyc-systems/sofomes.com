
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        Localidades RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count"><?= esc($recordCount) ?></span> localidades segun estados y municipios de Mexico
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Para que sirve este catalogo?</strong><br>
        Clasificacion oficial de ubicaciones geograficas de clientes y operaciones. Se reporta en la <strong>columna <?= esc($field) ?> (Localidad) del layout F36</strong> para identificar la ubicacion geografica de la sucursal o lugar de la operacion.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Cada cliente y cada operacion debe tener asociada una localidad precisa. La CNBV requiere codigos de 8 digitos que identifican Estado + Municipio para geolocalizacion de riesgos.
        </p>

        <h3>Donde se reporta</h3>
        <ul>
          <li><strong>Campo <?= esc($field) ?>:</strong> "Localidad" - Ubicacion geografica de la sucursal o lugar donde se realizo la operacion</li>
          <li><strong>Formato:</strong> Codigo numerico de 8 digitos segun catalogo oficial CNBV</li>
          <li><strong>Obligatorio:</strong> Si, en todos los reportes RIPS F36</li>
          <li><strong>Importante:</strong> Debes buscar el codigo exacto en este catalogo. No se puede construir manualmente, debe existir en la lista oficial</li>
          <li><strong>Relacionado:</strong> El Campo 24 "Domicilio" contiene la direccion completa en texto libre</li>
        </ul>

        <h3>Analisis de riesgo geografico</h3>
        <p>
          <strong>Recomendacion para tu matriz de riesgo:</strong> Considera el riesgo geografico segun zona:
        </p>
        <ul>
          <li><strong>Alto riesgo:</strong> Zonas fronterizas (Tijuana, Ciudad Juarez, Reynosa, Nuevo Laredo), puertos maritimos (Manzanillo, Lazaro Cardenas, Veracruz), ciudades con alta incidencia de delitos financieros segun UIF</li>
          <li><strong>Riesgo medio:</strong> Ciudades grandes con flujo comercial internacional (CDMX, Guadalajara, Monterrey), zonas turisticas (Cancun, Los Cabos, Puerto Vallarta)</li>
          <li><strong>Bajo riesgo:</strong> Ciudades medianas/pequenas sin frontera o puerto, con actividad economica local estable</li>
        </ul>

        <h3>Ejemplos de uso practico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Cliente fronterizo:</strong><br>
          Cliente: "Transportes del Norte S.A." en Nuevo Laredo, Tamaulipas<br>
          Domicilio fiscal: <code>28038001</code> (Nuevo Laredo)<br>
          Actividad: Transporte de carga hacia Estados Unidos<br>
          Riesgo geografico: <span class="risk-high">ALTO</span><br>
          <em>Razon: Zona fronteriza con alto flujo de efectivo y operaciones transfronterizas. Requiere monitoreo reforzado segun lineamientos UIF.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Operacion puerto maritimo:</strong><br>
          Cliente: "Importadora del Pacifico" con oficina en Manzanillo, Colima<br>
          Lugar de operacion: <code>06007001</code> (Manzanillo)<br>
          Actividad: Importacion de maquinaria<br>
          Riesgo geografico: <span class="risk-high">ALTO</span><br>
          <em>Razon: Puerto maritimo vulnerable a contrabando y flujos internacionales. Las DCG de la CNBV requieren atencion especial en zonas fronterizas y portuarias.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Cliente local:</strong><br>
          Cliente: "Panaderia La Espiga" en Aguascalientes, Aguascalientes<br>
          Domicilio: <code>01001001</code> (Aguascalientes Capital)<br>
          Actividad: Comercio al por menor de pan<br>
          Riesgo geografico: <span class="risk-low">BAJO</span><br>
          <em>Razon: Ciudad interior, actividad local predecible, sin frontera o puerto.</em>
        </div>

        <h3>Zonas de mayor vigilancia</h3>
        <p>Segun lineamientos UIF y alertas de riesgo geografico, presta especial atencion a:</p>
        <ul>
          <li><strong>Fronteras Norte:</strong> Tijuana (02004001), Ciudad Juarez (08037001), Reynosa (28032001), Nuevo Laredo (28038001), Matamoros (28022001)</li>
          <li><strong>Fronteras Sur:</strong> Tapachula (07089001), Chetumal (23002001)</li>
          <li><strong>Puertos principales:</strong> Manzanillo (06007001), Lazaro Cardenas (16052001), Veracruz (30193001), Altamira (28003001)</li>
          <li><strong>Zonas turisticas con flujo internacional:</strong> Cancun (23005001), Playa del Carmen (23008001), Los Cabos (03003001)</li>
        </ul>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> Si detectas que un cliente tiene domicilio fiscal en zona de bajo riesgo pero realiza frecuentemente operaciones en zona fronteriza o portuaria, considera incrementar su nivel de riesgo en tu matriz. La incongruencia geografica puede ser senal de alerta.
        </div>

        <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669; margin-top: 1.5rem;">
          <strong>Este catalogo es compartido con SOFOM ER</strong><br>
          Las localidades son las mismas en RIPS F41 (ER) y F36 (ENR).
          <a href="<?= site_url('catalogos-er/localidades') ?>">Ver version ER del catalogo</a>.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de localidades</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de <?= esc($recordCount) ?> localidades de Mexico para reportes RIPS F36
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
                <p>Cargando <?= esc($recordCount) ?> localidades...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catalogo oficial de localidades de Mexico por estado y municipio. Codigos geograficos de 8 digitos para identificar la ubicacion de operaciones. Campo <?= esc($field) ?> del layout RIPS F36.
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
        document.getElementById('table-body').innerHTML = '<tr><td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">Error al cargar el catalogo</td></tr>';
      });
  });
</script>
