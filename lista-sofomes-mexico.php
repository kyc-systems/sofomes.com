<?php
// Variables para header.php
$pageTitle = "Lista Completa de SOFOMes en México | Directorio CONDUSEF";
$pageDescription = "Directorio searchable de todas las SOFOMes en operación en México. Busca por nombre, estado, tipo (ER/ENR). Datos actualizados desde CONDUSEF SIPRES.";
$pageKeywords = "lista sofomes, sofomes méxico, directorio sofomes, sofomes condusef, sofom er, sofom enr";
$canonicalUrl = "https://sofomes.com/lista-sofomes-mexico";
$activeMenu = "directorio";

include 'includes/header.php';
?>

<style>
  /* Estilos específicos para la tabla de directorio */
  .filters {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: var(--neutral-50);
    border-radius: var(--border-radius-lg);
  }

  .filter-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .filter-group label {
    font-weight: 600;
    font-size: 0.875rem;
    color: var(--primary-900);
  }

  .filter-group input,
  .filter-group select {
    padding: 0.75rem;
    border: 1px solid var(--neutral-300);
    border-radius: var(--border-radius);
    font-size: 1rem;
    font-family: inherit;
  }

  .filter-group input:focus,
  .filter-group select:focus {
    outline: none;
    border-color: var(--primary-500);
    box-shadow: 0 0 0 3px rgba(4, 44, 100, 0.1);
  }

  .results-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: var(--primary-50);
    border-radius: var(--border-radius);
  }

  .results-count {
    font-weight: 700;
    color: var(--primary-500);
    font-size: 1.125rem;
  }

  .export-buttons {
    display: flex;
    gap: 0.5rem;
  }

  .directory-table {
    width: 100%;
    background: white;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
  }

  .directory-table table {
    width: 100%;
    border-collapse: collapse;
  }

  .directory-table thead {
    background: var(--primary-500);
    color: white;
    position: sticky;
    top: 0;
    z-index: 10;
  }

  .directory-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.875rem;
    cursor: pointer;
    user-select: none;
  }

  .directory-table th:hover {
    background: var(--primary-600);
  }

  .directory-table th.sortable::after {
    content: ' ⇅';
    opacity: 0.5;
  }

  .directory-table th.sorted-asc::after {
    content: ' ↑';
    opacity: 1;
  }

  .directory-table th.sorted-desc::after {
    content: ' ↓';
    opacity: 1;
  }

  .directory-table tbody tr {
    border-bottom: 1px solid var(--neutral-200);
    transition: background var(--transition);
  }

  .directory-table tbody tr:hover {
    background: var(--neutral-50);
  }

  .directory-table td {
    padding: 1rem;
    font-size: 0.875rem;
  }

  .badge-er {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    background: var(--neutral-200);
    color: var(--neutral-900);
    border-radius: var(--border-radius);
    font-size: 0.75rem;
    font-weight: 700;
  }

  .badge-enr {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    background: var(--secondary-100);
    color: var(--secondary-900);
    border-radius: var(--border-radius);
    font-size: 0.75rem;
    font-weight: 700;
  }

  .loading {
    text-align: center;
    padding: 3rem;
    color: var(--neutral-600);
  }

  .spinner {
    display: inline-block;
    width: 40px;
    height: 40px;
    border: 4px solid var(--neutral-200);
    border-top-color: var(--primary-500);
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    to { transform: rotate(360deg); }
  }

  .no-results {
    text-align: center;
    padding: 3rem;
    color: var(--neutral-600);
  }

  @media (max-width: 768px) {
    .directory-table {
      overflow-x: auto;
    }

    .directory-table table {
      min-width: 800px;
    }
  }
</style>

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

<script>
  // Variables globales
  let allSofomes = [];
  let filteredSofomes = [];
  let currentSort = { column: null, direction: 'asc' };

  // Inicializar
  async function init() {
    try {
      // Fetch datos desde API
      const response = await fetch('./api/condusef-proxy.php');
      const data = await response.json();

      if (!data.success) {
        throw new Error(data.error || 'Error al cargar datos');
      }

      allSofomes = data.sofomes;
      filteredSofomes = [...allSofomes];

      // Actualizar contadores
      document.getElementById('total-count').textContent = data.total.toLocaleString('es-MX');
      document.getElementById('total-results').textContent = data.total.toLocaleString('es-MX');

      // Poblar filtros
      populateFilters();

      // Renderizar tabla
      renderTable();

      // Setup event listeners
      setupEventListeners();

      console.log(`✅ ${data.total} SOFOMes cargadas`);

    } catch (error) {
      console.error('Error cargando datos:', error);
      document.getElementById('table-body').innerHTML = `
        <tr>
          <td colspan="6" class="no-results">
            <p>❌ Error al cargar datos: ${error.message}</p>
            <p>Por favor recarga la página.</p>
          </td>
        </tr>
      `;
    }
  }

  // Poblar filtros
  function populateFilters() {
    // Estados únicos
    const estados = [...new Set(allSofomes.map(s => s.estado))].sort();
    const estadoSelect = document.getElementById('filter-estado');

    estados.forEach(estado => {
      if (estado) {
        const option = document.createElement('option');
        option.value = estado;
        option.textContent = estado;
        estadoSelect.appendChild(option);
      }
    });
  }

  // Setup event listeners
  function setupEventListeners() {
    // Buscar por nombre
    document.getElementById('search-name').addEventListener('input', applyFilters);

    // Filtros select
    document.getElementById('filter-estado').addEventListener('change', applyFilters);
    document.getElementById('filter-sector').addEventListener('change', applyFilters);
    document.getElementById('filter-estatus').addEventListener('change', applyFilters);

    // Ordenar columnas
    document.querySelectorAll('th.sortable').forEach(th => {
      th.addEventListener('click', () => {
        const column = th.dataset.column;
        sortBy(column);
      });
    });
  }

  // Aplicar filtros
  function applyFilters() {
    const searchName = document.getElementById('search-name').value.toLowerCase();
    const filterEstado = document.getElementById('filter-estado').value;
    const filterSector = document.getElementById('filter-sector').value;
    const filterEstatus = document.getElementById('filter-estatus').value;

    filteredSofomes = allSofomes.filter(sofom => {
      const matchName = !searchName ||
        sofom.denominacion.toLowerCase().includes(searchName) ||
        sofom.nombre_corto.toLowerCase().includes(searchName);

      const matchEstado = !filterEstado || sofom.estado === filterEstado;
      const matchSector = !filterSector || sofom.sector.includes(filterSector);
      const matchEstatus = !filterEstatus || sofom.estatus === filterEstatus;

      return matchName && matchEstado && matchSector && matchEstatus;
    });

    renderTable();
  }

  // Ordenar
  function sortBy(column) {
    if (currentSort.column === column) {
      currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
    } else {
      currentSort.column = column;
      currentSort.direction = 'asc';
    }

    filteredSofomes.sort((a, b) => {
      let aVal = a[column];
      let bVal = b[column];

      if (typeof aVal === 'string') {
        aVal = aVal.toLowerCase();
        bVal = bVal.toLowerCase();
      }

      if (currentSort.direction === 'asc') {
        return aVal > bVal ? 1 : -1;
      } else {
        return aVal < bVal ? 1 : -1;
      }
    });

    // Actualizar estilos headers
    document.querySelectorAll('th.sortable').forEach(th => {
      th.classList.remove('sorted-asc', 'sorted-desc');
      if (th.dataset.column === column) {
        th.classList.add(`sorted-${currentSort.direction}`);
      }
    });

    renderTable();
  }

  // Renderizar tabla
  function renderTable() {
    const tbody = document.getElementById('table-body');
    document.getElementById('showing-count').textContent = filteredSofomes.length.toLocaleString('es-MX');

    if (filteredSofomes.length === 0) {
      tbody.innerHTML = `
        <tr>
          <td colspan="6" class="no-results">
            <p>🔍 No se encontraron resultados</p>
            <p>Intenta con otros filtros</p>
          </td>
        </tr>
      `;
      return;
    }

    tbody.innerHTML = filteredSofomes.map(sofom => {
      const tipoClass = sofom.sector.includes('E.R.') ? 'badge-er' : 'badge-enr';
      const tipoText = sofom.sector.includes('E.R.') ? 'ER' : 'ENR';

      return `
        <tr>
          <td>${sofom.clave}</td>
          <td><strong>${sofom.denominacion}</strong></td>
          <td>${sofom.nombre_corto || '-'}</td>
          <td><span class="${tipoClass}">${tipoText}</span></td>
          <td>${sofom.estado}</td>
          <td>${sofom.estatus}</td>
        </tr>
      `;
    }).join('');
  }

  // Init on load
  document.addEventListener('DOMContentLoaded', init);
</script>

<?php include 'includes/footer.php'; ?>
