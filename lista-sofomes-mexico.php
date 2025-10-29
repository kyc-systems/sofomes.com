<?php
// Variables para header.php
$pageTitle = "Lista Completa de SOFOMes en México | Directorio CONDUSEF";
$pageDescription = "Directorio searchable de todas las SOFOMes en operación en México. Busca por nombre, estado, tipo (ER/ENR). Datos actualizados desde CONDUSEF SIPRES.";
$pageKeywords = "lista sofomes, sofomes méxico, directorio sofomes, sofomes condusef, sofom er, sofom enr";
$canonicalUrl = "https://sofomes.com/lista-sofomes-mexico";
$activeMenu = "directorio";
$cssPath = "/assets/css/main-v2.css";

include 'includes/header.php';
?>



  <!-- Hero Section -->
  <section class="hero" style="padding: 3rem 0;">
    <div class="container">
      <h1 class="hero-title" style="text-align: center; margin-bottom: 1rem;">
        Directorio Completo de <span id="total-count">...</span> SOFOMes en México
      </h1>
      <p class="hero-subtitle" style="text-align: center;">
        Base de datos actualizada desde CONDUSEF SIPRES. Busca, filtra y exporta.
      </p>
    </div>
  </section>

  <!-- Filters -->
  <section class="section">
    <div class="container">
      <div class="filters">
        <div class="filter-group">
          <label for="search-name">🔍 Buscar por nombre</label>
          <input
            type="text"
            id="search-name"
            placeholder="Ej: Konfío, Kueski, Credijusto..."
          >
        </div>

        <div class="filter-group">
          <label for="filter-estado">📍 Estado</label>
          <select id="filter-estado">
            <option value="">Todos los estados</option>
          </select>
        </div>

        <div class="filter-group">
          <label for="filter-sector">🏢 Tipo</label>
          <select id="filter-sector">
            <option value="">Todos (ER y ENR)</option>
            <option value="E.R.">SOFOM E.R. (Regulada)</option>
            <option value="E.N.R">SOFOM E.N.R. (No Regulada)</option>
          </select>
        </div>

        <div class="filter-group">
          <label for="filter-estatus">✅ Estatus</label>
          <select id="filter-estatus">
            <option value="">Todos</option>
            <option value="En operación" selected>En operación</option>
          </select>
        </div>
      </div>

      <!-- Results Info -->
      <div class="results-info">
        <div class="results-count">
          Mostrando <span id="showing-count">0</span> de <span id="total-results">0</span> SOFOMes
        </div>
      </div>

      <!-- Table -->
      <div class="directory-table">
        <table id="sofomes-table">
          <thead>
            <tr>
              <th class="sortable" data-column="clave">Clave</th>
              <th class="sortable" data-column="denominacion">Denominación Social</th>
              <th class="sortable" data-column="nombre_corto">Nombre Corto</th>
              <th class="sortable" data-column="sector">Tipo</th>
              <th class="sortable" data-column="estado">Estado</th>
              <th class="sortable" data-column="estatus">Estatus</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td colspan="6" class="loading">
                <div class="spinner"></div>
                <p>Cargando datos desde CONDUSEF...</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>



<?php include 'includes/footer.php'; ?>
