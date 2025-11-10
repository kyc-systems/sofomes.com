<?php
$pageTitle = "Catálogos SOFOM ER (F41) | SOFOMES.COM";
$pageDescription = "7 catálogos oficiales CNBV RIPS F41 para SOFOM ER: actividades económicas, monedas, países, localidades, tipo operación, instrumento monetario y tipo reporte.";
$pageKeywords = "catalogos cnbv, rips f41, sofom er, pld, entidad regulada";
$canonicalUrl = "https://sofomes.com/catalogos-er";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
include '../includes/header.php';
?>

<section class="hero-slim">
  <div class="container">
    <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
      <span class="badge-er">SOFOM ER</span>
      <span class="badge-format">RIPS F41</span>
    </div>
    <h1 class="hero-title">Catálogos RIPS F41</h1>
    <p class="hero-subtitle">
      7 catálogos oficiales CNBV para <strong>Entidades Reguladas</strong>
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="alert alert-info" style="margin-bottom: 2rem;">
      <strong>📋 ¿Qué son estos catálogos?</strong><br>
      Clasificaciones oficiales de la CNBV que debes usar en tus reportes RIPS F41. Cada catálogo corresponde a un campo específico en el layout de reporte PLD/FT.
    </div>

    <div class="catalog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">

      <!-- Actividad Económica -->
      <a href="actividad-economica" class="catalog-card">
        <div class="catalog-icon">📊</div>
        <h3>Actividad Económica</h3>
        <p class="catalog-count">1,172 actividades</p>
        <p class="catalog-desc">Clasificación del giro comercial de tus clientes</p>
        <span class="catalog-field">Campo 28 - Layout F41</span>
      </a>

      <!-- Monedas -->
      <a href="monedas" class="catalog-card">
        <div class="catalog-icon">💱</div>
        <h3>Monedas</h3>
        <p class="catalog-count">123 monedas</p>
        <p class="catalog-desc">Divisas incluyendo Onzas Libertad</p>
        <span class="catalog-field">Campo 12 - Layout F41</span>
      </a>

      <!-- Países (Exclusivo ER) -->
      <a href="pais" class="catalog-card catalog-exclusive">
        <div class="catalog-icon">🌍</div>
        <h3>Países <span class="badge-exclusive">⭐ ER</span></h3>
        <p class="catalog-count">245 países</p>
        <p class="catalog-desc">Clasificación de países para operaciones internacionales</p>
        <span class="catalog-field">Campo 7 - Layout F41</span>
      </a>

      <!-- Tipo Operación (Exclusivo ER) -->
      <a href="tipo-operacion" class="catalog-card catalog-exclusive">
        <div class="catalog-icon">🔄</div>
        <h3>Tipo Operación <span class="badge-exclusive">⭐ ER</span></h3>
        <p class="catalog-count">40 tipos</p>
        <p class="catalog-desc">Operaciones bancarias, valores, almacenes, seguros</p>
        <span class="catalog-field">Campo 8 - Layout F41</span>
      </a>

      <!-- Instrumento Monetario -->
      <a href="instrumento-monetario" class="catalog-card">
        <div class="catalog-icon">💵</div>
        <h3>Instrumento Monetario</h3>
        <p class="catalog-count">10 instrumentos</p>
        <p class="catalog-desc">Efectivo, cheque, transferencia, etc.</p>
        <span class="catalog-field">Campo 11 - Layout F41</span>
      </a>

      <!-- Localidades -->
      <a href="localidades" class="catalog-card">
        <div class="catalog-icon">📍</div>
        <h3>Localidades</h3>
        <p class="catalog-count">3,689 localidades</p>
        <p class="catalog-desc">Catálogo INEGI de localidades de México</p>
        <span class="catalog-field">Campo 26 - Layout F41</span>
      </a>

      <!-- Tipo Reporte -->
      <a href="tipo-reporte" class="catalog-card">
        <div class="catalog-icon">📝</div>
        <h3>Tipo Reporte</h3>
        <p class="catalog-count">3 tipos</p>
        <p class="catalog-desc">Relevantes, Inusuales, Internas Preocupantes</p>
        <span class="catalog-field">Campo 6 - Layout F41</span>
      </a>

    </div>

    <div style="margin-top: 3rem; text-align: center;">
      <a href="../catalogos-rips" class="btn" style="background: var(--neutral-600); color: white;">
        ← Volver a selección de catálogos
      </a>
    </div>

  </div>
</section>

<style>
.catalog-grid {
  margin-top: 2rem;
}

.catalog-card {
  background: white;
  border: 2px solid var(--neutral-200);
  border-radius: 12px;
  padding: 1.5rem;
  text-decoration: none;
  color: inherit;
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.catalog-card:hover {
  border-color: var(--primary-500);
  transform: translateY(-4px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.catalog-card.catalog-exclusive {
  border-color: #F59E0B;
  background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%);
}

.catalog-icon {
  font-size: 2.5rem;
  text-align: center;
}

.catalog-card h3 {
  font-size: 1.25rem;
  font-weight: 700;
  margin: 0;
  color: var(--primary-700);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.catalog-count {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-600);
  margin: 0;
}

.catalog-desc {
  font-size: 0.875rem;
  color: var(--neutral-600);
  margin: 0;
  flex-grow: 1;
}

.catalog-field {
  font-size: 0.75rem;
  color: var(--neutral-500);
  font-family: monospace;
  background: var(--neutral-100);
  padding: 0.25rem 0.5rem;
  border-radius: 4px;
  text-align: center;
}

.badge-exclusive {
  font-size: 0.75rem;
  background: #F59E0B;
  color: white;
  padding: 0.25rem 0.5rem;
  border-radius: 4px;
}
</style>

<?php include '../includes/footer.php'; ?>
