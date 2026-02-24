
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
        <span class="badge-enr">SOFOM ENR</span>
        <span class="badge-format">RIPS F36</span>
        <span class="badge-exclusive" style="background: #7C3AED; color: white; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 700;">EXCLUSIVO ENR</span>
      </div>
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">Tipo de Operacion SOFOM</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count"><?= esc($recordCount) ?></span> tipos de operacion SOFOM ENR</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>Clasificacion de operaciones SOFOM ENR. Campo <?= esc($field) ?> del layout F36.</strong><br>
        Este catalogo clasifica el tipo de operacion financiera que realiza la SOFOM ENR con sus clientes.
        Es un campo <strong>exclusivo del reporte F36</strong> que no existe en el formato ER (F41).
      </div>

      <div class="alert" style="background: #EDE9FE; border-left: 4px solid #7C3AED; margin-bottom: 1.5rem;">
        <strong>Catalogo EXCLUSIVO para SOFOM ENR</strong><br>
        Este catalogo es especifico del layout RIPS F36 para Entidades No Reguladas (ENR).
        Las SOFOM ER usan el formato F41 que tiene su propio catalogo de tipos de operacion.
      </div>

      <!-- Introduccion practica -->
      <article class="catalog-guide">
        <h2>Cuando y como usar este catalogo?</h2>

        <p>
          Cada operacion reportada en el RIPS F36 debe clasificarse segun el tipo de operacion que la SOFOM ENR realizo con el cliente.
          Este campo permite a la CNBV y la UIF entender el <strong>producto o servicio financiero</strong> involucrado en la operacion reportada.
        </p>

        <section>
          <h3>Donde se reporta</h3>
          <ul>
            <li><strong>Campo <?= esc($field) ?>:</strong> "Tipo de Operacion" en layout F36</li>
            <li><strong>Formato:</strong> Codigo numerico de 2 digitos</li>
            <li><strong>Obligatorio:</strong> Si, en todos los reportes RIPS F36 de SOFOM ENR</li>
            <li><strong>Exclusivo:</strong> Este campo solo existe en el formato F36 (ENR), no en F41 (ER)</li>
          </ul>
        </section>

        <section>
          <h3>Principales tipos de operacion SOFOM</h3>
          <ul>
            <li><strong>Credito Simple:</strong> Prestamo de suma determinada con plazo y tasa fijos</li>
            <li><strong>Credito Revolvente:</strong> Linea de credito reutilizable hasta un limite maximo</li>
            <li><strong>Credito Hipotecario:</strong> Credito garantizado con bien inmueble</li>
            <li><strong>Credito Automotriz:</strong> Financiamiento para adquisicion de vehiculos</li>
            <li><strong>Factoraje Financiero:</strong> Compra de cuentas por cobrar con descuento</li>
            <li><strong>Arrendamiento Financiero:</strong> Uso de bien con opcion de compra al final del contrato</li>
            <li><strong>Arrendamiento Puro:</strong> Uso de bien sin opcion de compra</li>
            <li><strong>Credito de Nomina:</strong> Prestamo descontado directamente de salario</li>
          </ul>
        </section>

        <section>
          <h3>Nivel de riesgo segun tipo de operacion</h3>
          <p>
            <strong>Recomendacion para tu matriz de riesgo:</strong>
          </p>
          <ul>
            <li><strong>Alto riesgo:</strong> Factoraje con cedentes de actividades de alto riesgo PLD, operaciones en efectivo de montos elevados</li>
            <li><strong>Riesgo medio:</strong> Credito hipotecario y arrendamiento (montos altos, inmuebles), credito automotriz</li>
            <li><strong>Bajo riesgo:</strong> Credito de nomina (fuente de pago verificable), credito simple con garantia</li>
          </ul>
        </section>

        <section>
          <h3>Ejemplos de uso practico</h3>
          <div class="catalog-example">
            <strong>Ejemplo 1 - Credito Simple:</strong><br>
            Cliente: "Empresa Constructora ABC"<br>
            Operacion: Credito simple para compra de maquinaria, $500,000 MXN a 36 meses<br>
            Tipo: Codigo de credito simple segun catalogo<br>
            Riesgo: <span class="risk-medium">MEDIO</span><br>
            <em>Razon: Monto significativo pero con destino claro y garantia de la maquinaria adquirida.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 2 - Factoraje:</strong><br>
            Cliente: "Proveedor Industrial del Norte S.A."<br>
            Operacion: Factoraje de facturas por $200,000 MXN con empresa compradora de sector automotriz<br>
            Tipo: Codigo de factoraje financiero segun catalogo<br>
            Riesgo: <span class="risk-medium">MEDIO</span><br>
            <em>Razon: Facturas verificables, empresa compradora regulada, flujo de efectivo predecible.</em>
          </div>

          <div class="catalog-example">
            <strong>Ejemplo 3 - Arrendamiento Financiero:</strong><br>
            Cliente: "Transportes Rapidos S.A."<br>
            Operacion: Arrendamiento de 3 camiones, valor total $900,000 MXN<br>
            Tipo: Codigo de arrendamiento financiero segun catalogo<br>
            Riesgo: <span class="risk-medium">MEDIO</span><br>
            <em>Razon: Bien identificable, uso productivo verificable, pagos periodicos monitoreables.</em>
          </div>
        </section>

        <section>
          <h3>Senales de alerta por tipo de operacion</h3>
          <ul>
            <li><strong>Credito sin destino claro:</strong> Cliente no puede justificar para que usara los recursos</li>
            <li><strong>Factoraje con facturas dudosas:</strong> Facturas de empresas EFOS/EDOS o con inconsistencias</li>
            <li><strong>Arrendamiento de bienes suntuarios:</strong> Aviones, yates o inmuebles de lujo sin justificacion de negocio</li>
            <li><strong>Pagos anticipados en efectivo:</strong> Cliente liquida anticipadamente en efectivo de gran cuantia</li>
            <li><strong>Multiple operaciones simultaneas:</strong> Cliente abre varios creditos al mismo tiempo sin justificacion</li>
          </ul>
        </section>

        <div class="catalog-tip">
          <strong>Tip de cumplimiento:</strong> Al reportar una operacion relevante, el tipo de operacion ayuda a la UIF a contextualizar el movimiento. Un pago de $8,000 USD en efectivo como "abono a credito hipotecario" tiene implicaciones diferentes que el mismo monto como "pago de factoraje". Clasifica correctamente para dar contexto adecuado a tus reportes.
        </div>
      </article>

      <h2 class="section-title">Catalogo completo de tipos de operacion SOFOM</h2>

      <div class="directory-table">
        <table id="catalog-table" aria-describedby="catalog-description">
          <caption class="sr-only">
            Catalogo de <?= esc($recordCount) ?> tipos de operacion SOFOM ENR para reportes RIPS F36
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
          Catalogo oficial de tipos de operacion para SOFOM ENR. Incluye credito simple, factoraje, arrendamiento y demas operaciones financieras. Campo <?= esc($field) ?> del layout RIPS F36.
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
