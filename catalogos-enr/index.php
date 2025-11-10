<?php
$pageTitle = "Catálogos SOFOM ENR (F36) | SOFOMES.COM";
$pageDescription = "7 catálogos oficiales CNBV RIPS F36 para SOFOM ENR: actividades económicas, monedas, localidades, tipo operación SOFOM, tipo operación asesores, instrumento monetario y tipo reporte.";
$pageKeywords = "catalogos cnbv, rips f36, sofom enr, pld, entidad no regulada";
$canonicalUrl = "https://sofomes.com/catalogos-enr";
$activeMenu = "catalogos";
$cssPath = "../assets/css/main.css";
include '../includes/header.php';
?>

<section class="hero-slim" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
  <div class="container">
    <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
      <span class="badge-enr">SOFOM ENR</span>
      <span class="badge-format">RIPS F36</span>
    </div>
    <h1 class="hero-title">Catálogos RIPS F36</h1>
    <p class="hero-subtitle">
      7 catálogos oficiales CNBV para <strong>Entidades No Reguladas</strong>
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="alert alert-info" style="margin-bottom: 2rem;">
      <strong>📋 ¿Qué son estos catálogos?</strong><br>
      Clasificaciones oficiales de la CNBV que debes usar en tus reportes RIPS F36. Cada catálogo corresponde a un campo específico en el layout de reporte PLD/FT.
    </div>

    <div class="catalog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">

      <!-- Actividad Económica -->
      <a href="actividad-economica" class="catalog-card">
        <div class="catalog-icon">📊</div>
        <h3>Actividad Económica</h3>
        <p class="catalog-count">1,265 actividades</p>
        <p class="catalog-desc">Clasificación del giro comercial de tus clientes</p>
        <span class="catalog-field">Campo 28 - Layout F36</span>
      </a>

      <!-- Monedas -->
      <a href="monedas" class="catalog-card">
        <div class="catalog-icon">💱</div>
        <h3>Monedas</h3>
        <p class="catalog-count">192 monedas</p>
        <p class="catalog-desc">Códigos de divisas internacionales</p>
        <span class="catalog-field">Campo 12 - Layout F36</span>
      </a>

      <!-- Tipo Operación SOFOM (Exclusivo ENR) -->
      <a href="tipo-operacion-sofom" class="catalog-card catalog-exclusive">
        <div class="catalog-icon">💼</div>
        <h3>Tipo Operación SOFOM <span class="badge-exclusive">⭐ ENR</span></h3>
        <p class="catalog-count">19 tipos</p>
        <p class="catalog-desc">Crédito simple, factoraje, arrendamiento, etc.</p>
        <span class="catalog-field">Campo 8 - Layout F36</span>
      </a>

      <!-- Tipo Operación Asesores (Exclusivo ENR) -->
      <a href="tipo-operacion-asesores-inv" class="catalog-card catalog-exclusive">
        <div class="catalog-icon">🎯</div>
        <h3>Tipo Operación Asesores <span class="badge-exclusive">⭐ ENR</span></h3>
        <p class="catalog-count">4 tipos</p>
        <p class="catalog-desc">Asesoría y gestión de inversiones</p>
        <span class="catalog-field">Campo 8 - Layout F36</span>
      </a>

      <!-- Instrumento Monetario -->
      <a href="instrumento-monetario" class="catalog-card">
        <div class="catalog-icon">💵</div>
        <h3>Instrumento Monetario</h3>
        <p class="catalog-count">10 instrumentos</p>
        <p class="catalog-desc">Efectivo, cheque, transferencia, etc.</p>
        <span class="catalog-field">Campo 11 - Layout F36</span>
      </a>

      <!-- Localidades -->
      <a href="localidades" class="catalog-card">
        <div class="catalog-icon">📍</div>
        <h3>Localidades</h3>
        <p class="catalog-count">3,689 localidades</p>
        <p class="catalog-desc">Catálogo INEGI de localidades de México</p>
        <span class="catalog-field">Campo 26 - Layout F36</span>
      </a>

      <!-- Tipo Reporte -->
      <a href="tipo-reporte" class="catalog-card">
        <div class="catalog-icon">📝</div>
        <h3>Tipo Reporte</h3>
        <p class="catalog-count">3 tipos</p>
        <p class="catalog-desc">Relevantes, Inusuales, Internas Preocupantes</p>
        <span class="catalog-field">Campo 6 - Layout F36</span>
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
  border-color: #10B981;
  transform: translateY(-4px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.catalog-card.catalog-exclusive {
  border-color: #10B981;
  background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%);
}

.catalog-icon {
  font-size: 2.5rem;
  text-align: center;
}

.catalog-card h3 {
  font-size: 1.25rem;
  font-weight: 700;
  margin: 0;
  color: #047857;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  flex-wrap: wrap;
}

.catalog-count {
  font-size: 1.5rem;
  font-weight: 700;
  color: #059669;
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
  background: #10B981;
  color: white;
  padding: 0.25rem 0.5rem;
  border-radius: 4px;
}
</style>

<?php include '../includes/footer.php'; ?>
