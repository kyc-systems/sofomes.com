
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">Tipo de Reporte PLD/FT</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> tipos de reporte segun CNBV</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Para que sirve este catalogo?</strong><br>
        Clasificacion de reportes obligatorios ante la UIF. Se reporta en la <strong>columna <?= esc($field) ?> del layout F36</strong> (primer campo del reporte) para identificar el tipo de reporte regulatorio que estas enviando.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Este es el catalogo MAS IMPORTANTE de todos. Define el tipo de reporte PLD/FT que estas enviando a la CNBV (que remite a la UIF). Cada reporte tiene criterios, plazos y consecuencias diferentes segun las Disposiciones de Caracter General de la CNBV.
        </p>

        <h3>Donde se reporta</h3>
        <ul>
          <li><strong>Campo <?= esc($field) ?>:</strong> "Tipo de Reporte" en layout F36 (es el primer campo del archivo)</li>
          <li><strong>Formato:</strong> Codigo numerico de 1 digito (1, 2 o 3)</li>
          <li><strong>Obligatorio:</strong> En TODOS los reportes F36 - Es el campo que define que estas reportando</li>
        </ul>

        <h3>Tipos de reporte y cuando usarlos</h3>

        <div class="report-box report-box-relevant">
          <h4>Operaciones Relevantes (Tipo 1)</h4>
          <p><strong>Criterio automatico:</strong> Operaciones en efectivo mayor o igual a $7,500 USD (o su equivalente en otras divisas)</p>
          <p><strong>Plazo de reporte:</strong> Trimestral (10 ultimos dias habiles de enero, abril, julio y octubre)</p>
          <p><strong>Obligatoriedad:</strong> SI, todas las operaciones que superen el umbral</p>
          <p><strong>Base legal:</strong> DCG CNBV, Disposicion 28a</p>

          <p><strong>Ejemplos:</strong></p>
          <ul>
            <li>Credito automotriz por $350,000 MXN (aprox. $20,000 USD)</li>
            <li>Pago de enganche en efectivo por $150,000 MXN (aprox. $8,500 USD)</li>
            <li>Liquidacion anticipada de credito por $200,000 MXN</li>
            <li>Deposito en garantia por $10,000 USD</li>
          </ul>
        </div>

        <div class="report-box report-box-unusual">
          <h4>Operaciones Inusuales (Tipo 2)</h4>
          <p><strong>Criterio:</strong> Operaciones que NO coinciden con el perfil transaccional del cliente</p>
          <p><strong>Plazo de reporte:</strong> 60 dias naturales desde deteccion</p>
          <p><strong>Obligatoriedad:</strong> SI, si detectas incongruencias segun tu matriz de riesgo</p>
          <p><strong>Base legal:</strong> DCG CNBV, Disposicion 30a</p>

          <p><strong>Ejemplos:</strong></p>
          <ul>
            <li>Cliente con perfil de ingresos de $20,000/mes solicita credito de $500,000</li>
            <li>Cliente hace 10 pagos de $7,000 MXN c/u en efectivo (estructuracion/pitufeo)</li>
            <li>Cliente reporta actividad X pero paga con transferencias de empresas del sector Y</li>
            <li>Cambio repentino de comportamiento: cliente pagaba con transferencias, ahora solo efectivo</li>
          </ul>

          <div class="report-alert report-alert-warning">
            <strong>Importante:</strong> No confundir con "sospechosa". Inusual = diferente al perfil. Puede tener explicacion legitima, pero DEBES reportar.
          </div>
        </div>

        <div class="report-box report-box-concerning">
          <h4>Operaciones Internas Preocupantes (Tipo 3)</h4>
          <p><strong>Criterio:</strong> Operaciones con FUERTES INDICIOS de recursos de procedencia ilicita o con vinculos a lavado de dinero/terrorismo</p>
          <p><strong>Plazo de reporte:</strong> 60 dias naturales desde deteccion</p>
          <p><strong>Obligatoriedad:</strong> SI, en cuanto detectes senales de alerta graves</p>
          <p><strong>Base legal:</strong> DCG CNBV, Art. 400 Bis y 139 Quater CPF</p>

          <p><strong>Ejemplos de senales de alerta graves:</strong></p>
          <ul>
            <li>Cliente aparece en listas de PEPs, terrorismo o OFAC</li>
            <li>Documentacion claramente falsificada o alterada</li>
            <li>Cliente se niega a proporcionar informacion de conocimiento del cliente</li>
            <li>Operaciones con vinculos evidentes a actividades ilicitas (narcotrafico, trata, etc.)</li>
            <li>Cliente usa interpositas personas o testaferros evidentes</li>
            <li>Multiples alertas inusuales sin justificacion creible</li>
          </ul>

          <div class="report-alert report-alert-danger">
            <strong>CRITICO:</strong> Este reporte es URGENTE. Si tienes dudas, consulta INMEDIATAMENTE con tu Oficial de Cumplimiento o asesor legal.
          </div>
        </div>

        <h3>Consecuencias del incumplimiento</h3>
        <ul>
          <li><strong>No reportar operaciones relevantes:</strong> Multa de 200 a 2,000 veces el salario minimo por operacion no reportada</li>
          <li><strong>No reportar inusuales/preocupantes:</strong> Multa de 2,000 a 10,000 veces el salario minimo + posible inhabilitacion</li>
          <li><strong>Reportar tarde:</strong> Multa proporcional segun dias de retraso</li>
          <li><strong>Reportar mal (errores sistematicos):</strong> Observaciones de CNBV, requerimientos de informacion, visitas de inspeccion</li>
        </ul>

        <h3>Ejemplos de uso practico completos</h3>
        <div class="catalog-example">
          <strong>Caso 1 - Solo Relevante:</strong><br>
          Cliente: "Constructora ABC S.A." con buen historial<br>
          Operacion: Credito $400,000 MXN, transferencia bancaria desde cuenta propia<br>
          Actividad coherente con giro (construccion)<br>
          <strong>Tipo reporte:</strong> <code>1</code> - Operacion Relevante<br>
          <em>Razon: Supera umbral (aprox. $22,857 USD), pero todo esta en orden. Solo relevante por monto.</em>
        </div>

        <div class="catalog-example">
          <strong>Caso 2 - Relevante + Inusual:</strong><br>
          Cliente: "Juan Perez" empleado con salario de $15,000/mes<br>
          Operacion: Pago enganche $200,000 MXN en efectivo<br>
          Monto inusual para su perfil de ingresos, sin justificacion convincente<br>
          <strong>Tipo reporte:</strong> <code>1</code> (por monto) Y <code>2</code> (por perfil)<br>
          <em>Razon: Se envian DOS reportes. Uno como relevante, otro como inusual. Pueden coexistir.</em>
        </div>

        <div class="catalog-example">
          <strong>Caso 3 - Preocupante:</strong><br>
          Cliente: "Maria Lopez" proporciona INE con foto diferente a la persona presente<br>
          Operacion: Solicita credito urgente por $100,000 MXN en efectivo<br>
          Se niega a dar informacion de empleo<br>
          <strong>Tipo reporte:</strong> <code>3</code> - Operacion Interna Preocupante<br>
          <strong>Accion:</strong> Rechazar operacion, reportar en 24 horas, bloquear cliente<br>
          <em>Razon: Posible suplantacion de identidad, senales claras de alerta. CRITICO.</em>
        </div>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> Una MISMA operacion puede generar multiples reportes. Si una operacion es relevante por monto Y ademas es inusual para el cliente, envias dos reportes separados (Tipo 1 y Tipo 2). No son excluyentes.
        </div>

        <div class="report-resources">
          <strong>Recursos adicionales:</strong> Para guia completa de layouts y campos F36, consulta nuestra <a href="<?= site_url('reportes-regulatorios-cnbv') ?>">Guia de Reportes Regulatorios CNBV</a>.
        </div>

        <div class="alert alert-success" style="background: #D1FAE5; border-left: 4px solid #059669; margin-top: 1.5rem;">
          <strong>Este catalogo es identico para ER y ENR</strong><br>
          Las obligaciones PLD/FT son las mismas en RIPS F41 (ER) y F36 (ENR) segun las DCG de la CNBV.
          <a href="<?= site_url('catalogos-er/tipo-reporte') ?>">Ver version ER del catalogo</a>.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de tipos de reporte</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de <?= esc($recordCount) ?> tipos de reporte PLD/FT ante la UIF
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width: 100px; text-align: center;">Clave</th>
              <th scope="col">Tipo de Reporte</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p>Cargando tipos de reporte...</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p id="catalog-description" class="sr-only">
          Catalogo oficial de tipos de reporte PLD/FT ante la Unidad de Inteligencia Financiera. Incluye: Operaciones Relevantes (mayor o igual a $7,500 USD), Operaciones Inusuales (60 dias) y Operaciones Internas Preocupantes. Campo <?= esc($field) ?> del layout RIPS F36.
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
            <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE TIPO REPORTE']}</td>
            <td>${item['TIPO DE REPORTE']}</td>
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
