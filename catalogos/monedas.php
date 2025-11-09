<?php
$pageTitle = "Catálogo: Monedas | SOFOMES.COM";
$pageDescription = "Catálogo de monedas ISO 4217 para reportes internacionales: USD, EUR, MXN, JPY y más. RIPS F36 CNBV para operaciones en divisas.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: monedas";
$canonicalUrl = "https://sofomes.com/catalogos/monedas";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
$useDatatables = true;
include '../includes/header.php';
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💱 Monedas RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">190</span> monedas según estándar ISO 4217</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 Catálogo oficial CNBV</strong><br>
        Catálogo de monedas según estándar ISO 4217 para operaciones en divisa extranjera y tipos de cambio.
      </div>

      <div class="directory-table">
        <table id="catalog-table">
          <thead>
            <tr>
              <th style="width: 100px; text-align: center;">Clave</th>
              <th>Moneda</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando monedas...</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <?php

  // Script específico de esta página (se cargará después de jQuery en el footer)

  $pageScript = <<<'SCRIPT'

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/monedas.json')
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
