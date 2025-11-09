<?php
// Variables para header.php
$pageTitle = "Catálogo: Actividad Económica | SOFOMES.COM";
$pageDescription = "Catálogo completo de 1,263 actividades económicas SCIAN para reportes RIPS F36. Clasificación oficial CNBV para SOFOMes en PLD/FT.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: actividad económica";
$canonicalUrl = "https://sofomes.com/catalogos/actividad-economica";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main-v2.css";
$useDatatables = true;

include '../includes/header.php';
?>



  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">
        📊 Actividad Económica RIPS F36
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        <span id="total-count">1,263</span> actividades según SCIAN adaptado a CNBV
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 Catálogo oficial CNBV</strong><br>
        Clasificación de actividades económicas de clientes basada en el Sistema de Clasificación Industrial de América del Norte (SCIAN) adaptado para reportes RIPS F36.
      </div>

      <div class="directory-table">
        <table id="catalog-table">
          <thead>
            <tr>
              <th style="width: 120px; text-align: center;">Clave</th>
              <th>Actividad Económica</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando 1,263 actividades...</p>
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
    // Cargar datos del JSON
    fetch('../catalogs/json/actividad-economica.json')
      .then(response => response.json())
      .then(data => {
        // Actualizar contador en el hero
        document.getElementById('total-count').textContent = data.length;

        // Agregar datos a la tabla
        const tbody = document.getElementById('table-body');
        tbody.innerHTML = data.map(item => `
          <tr>
            <td style="text-align: center; font-family: monospace; font-weight: 600;">${item['CLAVE ACTIVIDAD ECONOMICA']}</td>
            <td>${item['ACTIVIDAD ECONOMICA']}</td>
          </tr>
        `).join('');

        // Inicializar DataTables
        $('#catalog-table').DataTable({
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json'
          },
          pageLength: 25,
          lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
          order: [[0, 'asc']],
          columnDefs: [
            { width: '120px', targets: 0 }
          ],
          dom: 'frtip',
          searching: true
        });
      })
      .catch(error => {
        console.error('Error al cargar el catálogo:', error);
        document.getElementById('table-body').innerHTML = `
          <tr>
            <td colspan="2" style="text-align: center; padding: 2rem; color: var(--error-500);">
              ❌ Error al cargar el catálogo. Por favor recarga la página.
            </td>
          </tr>
        `;
      });
  });
</script>
SCRIPT;

include '../includes/footer.php';
?>
