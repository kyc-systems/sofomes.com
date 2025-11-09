<?php
$pageTitle = "Catálogo: Tipo de Reporte | SOFOMES.COM";
$pageDescription = "Catálogo de tipos de reporte PLD/FT: operaciones relevantes, inusuales e internas preocupantes. Guía oficial CNBV RIPS F36.";
$pageKeywords = "catalogo cnbv, rips f36, pld sofom, catálogo: tipo de reporte";
$canonicalUrl = "https://sofomes.com/catalogos/tipo-reporte";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main-v2.css";
$useDatatables = true;
include '../includes/header.php';
?>

  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; font-size: 2.5rem;">🚨 Tipo de Reporte PLD/FT</h1>
      <p class="hero-subtitle" style="text-align: center;"><span id="total-count">3</span> tipos de reporte según CNBV</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="alert alert-info">
        <strong>📋 Catálogo oficial CNBV</strong><br>
        Tipos de reporte para cumplimiento PLD/FT según Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita.
      </div>

      <div class="directory-table">
        <table id="catalog-table">
          <thead>
            <tr>
              <th style="width: 100px; text-align: center;">Clave</th>
              <th>Tipo de Reporte</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="2" style="text-align: center; padding: 2rem;">
                <div style="display: inline-block; width: 40px; height: 40px; border: 4px solid #E5E7EB; border-top-color: #042c64; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                <p style="margin-top: 1rem;">Cargando tipos de reporte...</p>
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
      fetch('../catalogs/json/tipo-reporte.json')
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
