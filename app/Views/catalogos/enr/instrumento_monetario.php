
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">Instrumentos Monetarios RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;">Catalogo oficial CNBV para clasificacion de medios de pago</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Para que sirve este catalogo?</strong><br>
        Clasificacion oficial de los medios de pago utilizados en operaciones. Se reporta en la <strong>columna <?= esc($field) ?> del layout F36</strong> para todos los reportes PLD/FT.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Cada operacion que reportes debe especificar el instrumento monetario utilizado para el pago. Esta informacion es <strong>obligatoria</strong> en reportes de operaciones relevantes, inusuales e internas preocupantes.
        </p>

        <h3>Donde se reporta</h3>
        <ul>
          <li><strong>Campo <?= esc($field) ?>:</strong> "Instrumento Monetario" en layout F36</li>
          <li><strong>Formato:</strong> Codigo alfanumerico de 2 caracteres (01, 03, 10, etc.)</li>
          <li><strong>Obligatorio:</strong> Si, en todos los reportes RIPS F36</li>
          <li><strong>Ejemplos del catalogo:</strong> 01=Efectivo, 03=Transferencia, 10=Cheque</li>
        </ul>

        <h3>Nivel de riesgo segun instrumento</h3>
        <p>
          <strong>Recomendacion para tu matriz de riesgo:</strong> Asigna ponderaciones diferentes segun el nivel de trazabilidad del instrumento:
        </p>
        <ul>
          <li><strong>Alto riesgo:</strong> Efectivo (01), Metales preciosos amonedados (05) - Dificil rastreo, alta vulnerabilidad PLD</li>
          <li><strong>Riesgo medio:</strong> Cheques (10), Cheques de viajero (11) - Trazabilidad moderada</li>
          <li><strong>Bajo riesgo:</strong> Transferencias (03), Tarjetas (02) - Alta trazabilidad bancaria</li>
        </ul>

        <h3>Ejemplos de uso practico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Operacion Relevante:</strong><br>
          Cliente: "Constructora Torres S.A." solicita credito por $250,000 MXN<br>
          Medio de pago: Transferencia SPEI desde Banorte<br>
          Instrumento: <code>03</code> - Transferencia electronica de fondos<br>
          Riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razon: Trazabilidad completa, origen bancario verificable.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Operacion Inusual:</strong><br>
          Cliente: "Juan Perez" paga enganche de $180,000 MXN en efectivo<br>
          Medio de pago: Billetes en sucursal<br>
          Instrumento: <code>01</code> - Billetes y monedas<br>
          Riesgo: <span class="risk-high">ALTO</span> (DCG CNBV, Disposicion 30a)<br>
          <em>Razon: Monto inusual en efectivo, sin trazabilidad bancaria previa.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Operacion con metales:</strong><br>
          Cliente: "Inversiones del Norte" liquida credito con Centenarios de oro<br>
          Medio de pago: 15 monedas Centenario Oro<br>
          Instrumento: <code>05</code> - Oro amonedado<br>
          Riesgo: <span class="risk-high">ALTO</span> (DCG CNBV)<br>
          <em>Razon: Metales preciosos amonedados, instrumento de dificil rastreo.</em>
        </div>

        <h3>Instrumentos de mayor vigilancia</h3>
        <p>Segun las DCG de la CNBV, presta especial atencion a:</p>
        <ul>
          <li><strong>01 - Efectivo:</strong> Montos mayor o igual a $7,500 USD son operaciones relevantes automaticas</li>
          <li><strong>05 - Oro/platino amonedado:</strong> Instrumento de alto riesgo por dificil rastreo</li>
          <li><strong>10 - Cheques:</strong> Verificar endosos multiples, cheques de otros titulares</li>
          <li><strong>11 - Cheques de viajero:</strong> Poco comunes hoy, revisar procedencia</li>
        </ul>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> Si un cliente usa efectivo frecuentemente en montos cercanos a $7,500 USD (estructuracion), aunque cada operacion sea menor al umbral, considera reportar como operacion inusual por posible "pitufeo" o fraccionamiento intencional.
        </div>

        <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669; margin-top: 1.5rem;">
          <strong>Este catalogo es compartido con SOFOM ER</strong><br>
          Los instrumentos monetarios son los mismos en RIPS F41 (ER) y F36 (ENR).
          <a href="<?= site_url('catalogos-er/instrumento-monetario') ?>">Ver version ER del catalogo</a>.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de instrumentos monetarios</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de instrumentos monetarios para reportes RIPS F36
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
          Catalogo oficial de instrumentos monetarios para clasificar medios de pago en reportes PLD/FT.
          Incluye efectivo, transferencias, cheques y metales preciosos. Campo <?= esc($field) ?> del layout RIPS F36.
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
