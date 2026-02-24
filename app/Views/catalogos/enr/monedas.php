
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">Monedas RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> monedas segun estandar</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Para que sirve este catalogo?</strong><br>
        Clasificacion oficial de monedas para operaciones. Se reporta en la <strong>columna <?= esc($field) ?> del layout F36</strong> para identificar la divisa en que se realizo la operacion.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Todas las operaciones deben especificar la moneda utilizada. Este campo es <strong>obligatorio</strong> en todos los reportes, ya sea en pesos mexicanos (MXN) o en divisas extranjeras.
        </p>

        <h3>Donde se reporta</h3>
        <ul>
          <li><strong>Campo <?= esc($field) ?>:</strong> "Moneda" en layout F36</li>
          <li><strong>Formato:</strong> Codigo alfabetico de 3 letras (MXN, USD, EUR, JPY, etc.)</li>
          <li><strong>Obligatorio:</strong> Si, en todos los reportes RIPS F36</li>
          <li><strong>Ejemplos:</strong> MXN para pesos mexicanos, USD para dolares, EUR para euros</li>
          <li><strong>Importante:</strong> Debes usar el codigo exacto del catalogo oficial CNBV</li>
        </ul>

        <h3>Nivel de riesgo segun divisa</h3>
        <p>
          <strong>Recomendacion para tu matriz de riesgo:</strong> Pondera el riesgo de las operaciones en divisas:
        </p>
        <ul>
          <li><strong>Riesgo moderado-alto:</strong> Operaciones en USD, EUR - Divisas de alto volumen, requieren justificacion clara del origen</li>
          <li><strong>Riesgo medio:</strong> Divisas de paises con relaciones comerciales frecuentes (CAD, GBP, JPY, CNY)</li>
          <li><strong>Alto riesgo:</strong> Divisas de paises en listas GAFI de alto riesgo o con deficiencias estrategicas en PLD/FT</li>
          <li><strong>Muy alto riesgo:</strong> Criptomonedas - si tu SOFOM las maneja, requieren atencion especial UIF</li>
        </ul>

        <h3>Ejemplos de uso practico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Credito para importacion:</strong><br>
          Cliente: "Importadora Mexicana S.A." solicita credito puente<br>
          Monto: $50,000 USD para pagar a proveedor<br>
          Moneda: <code>USD</code> - Dolar estadounidense<br>
          Justificacion: Factura comercial de importacion<br>
          Riesgo: <span class="risk-medium">MEDIO</span><br>
          <em>Razon: Operacion en dolares justificada por comercio exterior, documentacion respaldatoria completa.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Remesa del extranjero:</strong><br>
          Cliente: "Juan Garcia" recibe $25,000 USD de familiar en Estados Unidos<br>
          Moneda: <code>USD</code> - Dolar estadounidense<br>
          Instrumento: Transferencia internacional<br>
          Riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razon: Remesa familiar documentada, origen verificable con SWIFT, beneficiario identificado.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Operacion en divisa poco comun:</strong><br>
          Cliente: "Comercial Global" recibe pago en divisa de pais de alto riesgo GAFI<br>
          Moneda: Divisa de jurisdiccion bajo supervision<br>
          Sin justificacion comercial clara<br>
          Riesgo: <span class="risk-high">ALTO</span><br>
          <em>Razon: Divisa poco usual para Mexico, pais puede estar en listas de monitoreo GAFI. Requiere justificacion comercial robusta y verificacion de origen.</em>
        </div>

        <h3>Divisas que requieren atencion especial</h3>
        <p>Segun lineamientos GAFI y alertas internacionales, monitorea especialmente:</p>
        <ul>
          <li><strong>USD, EUR:</strong> Alto volumen global, verifica coherencia con actividad del cliente</li>
          <li><strong>Divisas de paises en lista GAFI:</strong> Consulta periodicamente paises con deficiencias estrategicas</li>
          <li><strong>Criptomonedas:</strong> Si tu SOFOM las acepta, requiere conocimiento reforzado del cliente y seguimiento continuo segun Ley Fintech</li>
          <li><strong>Transacciones triangulares:</strong> Cliente paga en divisa A, recibe de pais con divisa B, sin relacion comercial aparente</li>
        </ul>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> El umbral de $7,500 USD para operaciones relevantes aplica al <strong>equivalente en cualquier divisa</strong>. Convierte siempre al tipo de cambio del dia segun Banco de Mexico para determinar si supera el umbral de reporte.
        </div>

        <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669; margin-top: 1.5rem;">
          <strong>Este catalogo es compartido con SOFOM ER</strong><br>
          Las monedas son las mismas en RIPS F41 (ER) y F36 (ENR).
          <a href="<?= site_url('catalogos-er/monedas') ?>">Ver version ER del catalogo</a>.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de monedas</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de <?= esc($recordCount) ?> monedas segun estandar para reportes RIPS F36
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Moneda</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p>Cargando monedas...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catalogo oficial de monedas segun estandar. Incluye codigos de 3 letras para todas las divisas globales. Campo <?= esc($field) ?> del layout RIPS F36.
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
            <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE MONEDA']}</td>
            <td>${item['MONEDA']}</td>
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
