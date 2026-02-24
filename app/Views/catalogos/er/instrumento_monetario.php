
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💳 Instrumento Monetario</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> instrumentos según CNBV</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Clasificación del medio de pago. Se reporta en la <strong>columna 9 del layout F41</strong> para identificar cómo se realizó la operación (efectivo, transferencia, cheque, etc.).
      </div>

      <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669;">
        <strong>✅ Este catálogo es IDÉNTICO para ER y ENR</strong><br>
        Los instrumentos monetarios son los mismos en RIPS F41 (ER) y F36 (ENR).
      </div>

      <article class="catalog-guide">
        <h2>💳 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          El instrumento monetario es CLAVE en tu <strong>matriz de riesgo</strong> porque operaciones en efectivo tienen mayor riesgo PLD/FT que operaciones rastreables (transferencias, cheques nominativos).
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campo 9:</strong> "Instrumento Monetario" en layout F41</li>
          <li><strong>Formato:</strong> Código numérico de 2 dígitos (01-11, SE DESCONOCE)</li>
          <li><strong>Obligatorio:</strong> Sí, en todos los reportes RIPS F41</li>
          <li><strong>Ejemplos:</strong> 01=Efectivo, 03=Transferencia Electrónica, 02=Cheque</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según instrumento</h3>
        <p><strong>Recomendación para tu matriz de riesgo de SOFOM ER:</strong></p>
        <ul>
          <li><strong>Riesgo alto:</strong> 01-Efectivo, 05-Metales preciosos (difícil rastreo, anonimato)</li>
          <li><strong>Riesgo medio-alto:</strong> 06-Moneda extranjera en efectivo, 07-Cheque de caja al portador</li>
          <li><strong>Riesgo medio:</strong> 02-Cheque nominativo, 04-Orden de pago, 09-Divisas</li>
          <li><strong>Riesgo bajo:</strong> 03-Transferencia electrónica, 10-Tarjeta débito, 11-Tarjeta crédito (totalmente rastreables)</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Alto riesgo:</strong><br>
          Cliente: "Comercializadora ABC" solicita crédito $500,000 MXN<br>
          Enganche: $150,000 MXN en efectivo<br>
          Instrumento: <code>01</code> - EFECTIVO<br>
          Riesgo: <span class="risk-high">ALTO</span><br>
          <em>Razón: Monto relevante (≥$7,500 USD) en efectivo sin origen claro. Requiere justificación robusta, declaración de procedencia, verificación de actividad económica coherente.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Bajo riesgo:</strong><br>
          Cliente: "Industrias del Norte S.A." paga $300,000 MXN<br>
          Instrumento: <code>03</code> - TRANSFERENCIA ELECTRONICA<br>
          Desde: Cuenta bancaria propia (verificada con estado de cuenta)<br>
          Riesgo: <span class="risk-low">BAJO</span><br>
          <em>Razón: Transferencia rastreable, origen verificable, cuenta a nombre del cliente. Cumplimiento estándar suficiente.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Medio riesgo:</strong><br>
          Cliente: "Persona Física" paga $80,000 MXN<br>
          Instrumento: <code>02</code> - CHEQUE<br>
          Cheque: Nominativo de cuenta de tercero (familiar)<br>
          Riesgo: <span class="risk-medium">MEDIO</span><br>
          <em>Razón: Cheque de tercero requiere justificación. Verificar parentesco, solicitar carta responsiva del tercero, confirmar que no es estructuración (pitufeo).</em>
        </div>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Si un cliente hace MÚLTIPLES pagos pequeños en efectivo que suman un monto relevante (estructuración/pitufeo), reporta como operación INUSUAL aunque cada pago individual sea menor a $7,500 USD. La suma acumulada es sospechosa.
        </div>

        <div class="report-resources">
          <strong>📚 Recursos adicionales:</strong> Para guía completa de layouts y campos F41, consulta nuestra <a href="<?= site_url('reportes-regulatorios-cnbv') ?>">Guía de Reportes Regulatorios CNBV</a>.
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de instrumentos monetarios</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catálogo de <?= esc($recordCount) ?> instrumentos monetarios SOFOM ER
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Instrumento Monetario</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando instrumentos monetarios...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catálogo oficial de instrumentos monetarios CNBV. Incluye efectivo, cheques, transferencias y otros medios de pago. Campo 9 del layout RIPS F41.
        </p>
      </div>

      <?= $downloadHtml ?>

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
          document.getElementById('table-body').innerHTML = '<tr><td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">❌ Error al cargar el catálogo</td></tr>';
        });
    });
  </script>
