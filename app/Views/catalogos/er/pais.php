
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-er">SOFOM ER</span>
        <span class="badge-format">RIPS F41</span>
        <span class="badge-exclusive">EXCLUSIVO ER</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🌍 Países</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> países del mundo</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 ¿Para qué sirve este catálogo?</strong><br>
        Identificación de país en operaciones internacionales. Se reporta en el <strong>layout F41</strong> para especificar país de origen del cliente, país de origen de fondos, o país destino de operaciones.
      </div>

      <div class="alert alert-warning" style="background: #FEF3C7; border-left: 4px solid #F59E0B;">
        <strong>⭐ EXCLUSIVO SOFOM ER</strong><br>
        Este catálogo NO existe para SOFOM ENR porque las ENR operan principalmente en territorio nacional. Solo las ER reportan operaciones internacionales.
      </div>

      <article class="catalog-guide">
        <h2>🌍 ¿Cuándo y cómo usar este catálogo?</h2>

        <p>
          Las SOFOM ER realizan operaciones transfronterizas, remesas internacionales, créditos en divisas, y tienen vínculos con bancos extranjeros. Deben reportar el país involucrado en estas operaciones.
        </p>

        <h3>📍 Dónde se reporta</h3>
        <ul>
          <li><strong>Campos variables:</strong> Depende del tipo de operación internacional</li>
          <li><strong>Formato:</strong> Código alfabético de 2 letras (MX, US, CA, ES, etc.)</li>
          <li><strong>Obligatorio:</strong> Cuando hay componente internacional en la operación</li>
          <li><strong>Ejemplos:</strong> MX=México, US=Estados Unidos, CA=Canadá, ES=España</li>
        </ul>

        <h3>⚠️ Nivel de riesgo según país</h3>
        <p><strong>Recomendación para tu matriz de riesgo de SOFOM ER:</strong></p>
        <ul>
          <li><strong>Riesgo muy alto:</strong> Países en lista negra GAFI (con deficiencias estratégicas en PLD/FT)</li>
          <li><strong>Riesgo alto:</strong> Paraísos fiscales, jurisdicciones de alto secreto bancario (Panamá, Islas Caimán, Suiza sin tratado)</li>
          <li><strong>Riesgo medio-alto:</strong> Países con alta corrupción según Transparency International</li>
          <li><strong>Riesgo medio:</strong> Países con relaciones comerciales normales con México (USA, Canadá, UE, China)</li>
          <li><strong>Riesgo bajo:</strong> Países con tratados de intercambio de información fiscal con México</li>
        </ul>

        <h3>💡 Ejemplos de uso práctico</h3>
        <div class="catalog-example">
          <strong>Ejemplo 1 - Alto riesgo:</strong><br>
          Cliente: "Importadora Global S.A." solicita crédito $500,000 USD<br>
          Fondos: Transferencia desde cuenta en Islas Caimán<br>
          País: <code>KY</code> - ISLAS CAIMÁN<br>
          Riesgo: <span class="risk-high">ALTO</span><br>
          <em>Razón: Paraíso fiscal, alto secreto bancario. Requiere conocimiento REFORZADO: beneficiario final real, justificación comercial robusta, verificación de origen lícito de fondos.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 2 - Medio riesgo:</strong><br>
          Cliente: "Empresa Maquiladora del Norte" recibe $200,000 USD<br>
          Fondos: Transferencia desde matriz en Estados Unidos<br>
          País: <code>US</code> - ESTADOS UNIDOS<br>
          Riesgo: <span class="risk-medium">MEDIO</span><br>
          <em>Razón: Operación legítima de comercio exterior, país con intercambio de información fiscal. Verificar relación comercial con estados de cuenta y facturas de exportación.</em>
        </div>

        <div class="catalog-example">
          <strong>Ejemplo 3 - Muy alto riesgo:</strong><br>
          Cliente: "Consultora Internacional" recibe $100,000 USD<br>
          Fondos: Transferencia desde país en lista GAFI de alto riesgo<br>
          País: <code>[país lista negra]</code><br>
          Riesgo: <span class="risk-high">MUY ALTO</span><br>
          <em>Razón: País con deficiencias estratégicas en PLD/FT según GAFI. Considerar RECHAZO de operación o reportar como OPERACIÓN INTERNA PREOCUPANTE (24 horas).</em>
        </div>

        <h3>🚨 Señales de alerta con operaciones internacionales</h3>
        <ul>
          <li><strong>Triangulación:</strong> Cliente paga en país A, recibe de país B, sin relación comercial aparente</li>
          <li><strong>Paraísos fiscales:</strong> Uso de múltiples jurisdicciones de alto secreto sin justificación comercial</li>
          <li><strong>Listas OFAC/ONU:</strong> Cliente o contrapartes en listas de sanciones internacionales</li>
          <li><strong>Remesas fraccionadas:</strong> Múltiples transferencias desde el extranjero justo debajo de umbrales de reporte</li>
          <li><strong>Países sin relación:</strong> Cliente mexicano con transacciones frecuentes en países sin vínculos comerciales o familiares</li>
        </ul>

        <div class="catalog-tip">
          <strong>⚡ Tip de cumplimiento:</strong> Mantén actualizada la lista de países de alto riesgo GAFI. Se actualiza 3 veces al año (febrero, junio, octubre). Consulta: <a href="https://www.fatf-gafi.org/" target="_blank">www.fatf-gafi.org</a>
        </div>
      </article>

      <h2 class="section-title">📋 Catálogo completo de países</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">Catálogo de <?= esc($recordCount) ?> países del mundo SOFOM ER</caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">País</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando países...</p>
              </td>
            </tr>
          </tbody>
        </table>
        <p id="catalog-description" class="sr-only">
          Catálogo oficial de <?= esc($recordCount) ?> países del mundo. EXCLUSIVO para SOFOM ER con operaciones internacionales. RIPS F41.
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
              <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE PAIS']}</td>
              <td>${item['PAIS']}</td>
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
