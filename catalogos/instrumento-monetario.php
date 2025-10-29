<?php
$pageTitle = "Catálogo: Instrumentos Monetarios | SOFOMES.COM";
$pageDescription = "Catálogo oficial CNBV para reportes RIPS F36 PLD/FT de SOFOMes.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: instrumentos monetarios";
$canonicalUrl = "https://sofomes.com/catalogos/instrumento-monetario";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main-v2.css";
$useDatatables = true;
include '../includes/header.php';
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">💰 Instrumentos Monetarios RIPS F36</h1>
      <p class="hero-subtitle" style="text-align: center;">Catálogo oficial CNBV para clasificación de medios de pago</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 Catálogo oficial</strong><br>
        Este catálogo contiene los tipos de instrumento monetario que las SOFOMes deben utilizar para clasificar los medios de pago utilizados en operaciones.
      </div>

      <div class="directory-table">
        <table id="catalog-table">
          <thead>
            <tr>
              <th style="width: 100px; text-align: center;">Clave</th>
              <th>Tipo de Instrumento Monetario</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando...</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="margin-top: 2rem; padding: 1.5rem; background: var(--neutral-50); border-radius: var(--border-radius-lg);">
        <h3 style="margin-bottom: 1rem;">Información Importante</h3>
        <p style="color: var(--neutral-700);">
          Los instrumentos monetarios son los medios de pago utilizados en las operaciones reportables ante la UIF.
          Es fundamental registrar correctamente el tipo de instrumento para cumplir con las obligaciones de reporte PLD/FT.
        </p>
        <p style="color: var(--neutral-700); margin-top: 1rem;">
          <strong>Ejemplos comunes:</strong> Efectivo, Transferencias bancarias, Cheques, Metales preciosos amonedados, entre otros.
        </p>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      fetch('../catalogs/json/instrumento-monetario.json')
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

<?php include '../includes/footer.php'; ?>
