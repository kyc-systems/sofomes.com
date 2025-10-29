<?php
// Variables para header.php
$pageTitle = "Catálogo: Localidades | SOFOMES.COM";
$pageDescription = "Catálogo oficial CNBV para reportes RIPS F36 PLD/FT de SOFOMes.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: localidades";
$canonicalUrl = "https://sofomes.com/catalogos/localidades";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main-v2.css";
$useDatatables = true;

include '../includes/header.php';
?>



  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        📍 Localidades RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count">3,689</span> localidades según estados y municipios de México
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 Catálogo oficial CNBV</strong><br>
        Catálogo completo de localidades organizadas por estado y municipio para geolocalización precisa de operaciones y clientes.
      </div>

      <div class="directory-table">
        <table id="catalog-table">
          <thead>
            <tr>
              <th style="width: 120px; text-align: center;">Clave</th>
              <th>Localidad</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando 3,689 localidades...</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/localidades.json')
        .then(response => response.json())
        .then(data => {
          document.getElementById('total-count').textContent = data.length;
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
            columnDefs: [{ width: '120px', targets: 0 }]
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

<?php include '../includes/footer.php'; ?>
