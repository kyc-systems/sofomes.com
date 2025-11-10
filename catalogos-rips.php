<?php
$pageTitle = "Catálogos RIPS F41 y F36 | SOFOMES.COM";
$pageDescription = "Catálogos oficiales CNBV para reportes PLD/FT: RIPS F41 (SOFOM ER) y RIPS F36 (SOFOM ENR). Actividades económicas, monedas, localidades, tipo de reporte.";
$pageKeywords = "catalogos cnbv, rips f41, rips f36, pld sofom, sofom er, sofom enr";
$canonicalUrl = "https://sofomes.com/catalogos-rips";
$activeMenu = "catalogos";
$cssPath = "assets/css/main.css";
include 'includes/header.php';
?>

<section class="hero" style="padding: 4rem 0;">
  <div class="container">
    <h1 class="hero-title" style="text-align: center; font-size: 3rem;">📚 Catálogos CNBV</h1>
    <p class="hero-subtitle" style="text-align: center; font-size: 1.25rem;">
      Catálogos oficiales para reportes PLD/FT ante la CNBV
    </p>
    <p style="text-align: center; margin-top: 1rem; color: var(--neutral-600);">
      Selecciona tu tipo de SOFOM para ver los catálogos correspondientes
    </p>
  </div>
</section>

<section class="section">
  <div class="container">

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem; margin-bottom: 4rem;">

      <!-- SOFOM ER Card -->
      <div class="catalog-type-card" style="background: white; border: 2px solid #E5E7EB; border-radius: 12px; padding: 2rem; transition: all 0.3s ease;">
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
          <span class="badge-er" style="font-size: 1.1rem; padding: 0.5rem 1rem;">SOFOM ER</span>
          <span class="badge-format" style="font-size: 0.9rem;">RIPS F41</span>
        </div>

        <h2 style="font-size: 1.75rem; margin-bottom: 1rem; color: var(--primary-700);">
          Entidad Regulada
        </h2>

        <p style="color: var(--neutral-600); margin-bottom: 1.5rem;">
          SOFOMes con supervisión prudencial completa de CNBV, vinculadas a entidades bancarias. ~10% del mercado (~500 SOFOMes).
        </p>

        <div style="background: #F9FAFB; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem;">
          <p style="font-size: 0.875rem; margin-bottom: 0.5rem;"><strong>7 Catálogos F41:</strong></p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 0; padding-left: 1.5rem;">
            <li>1,172 Actividades Económicas</li>
            <li>123 Monedas (incluye Onzas Libertad)</li>
            <li><strong>245 Países</strong> ⭐ (exclusivo ER)</li>
            <li><strong>40 Tipos de Operación</strong> ⭐ (banca, valores, almacenes)</li>
            <li>10 Instrumentos Monetarios</li>
            <li>3,689 Localidades</li>
            <li>3 Tipos de Reporte</li>
          </ul>
        </div>

        <a href="catalogos-er/" class="btn btn-primary" style="width: 100%; text-align: center;">
          Ver Catálogos ER (F41) →
        </a>
      </div>

      <!-- SOFOM ENR Card -->
      <div class="catalog-type-card" style="background: white; border: 2px solid #E5E7EB; border-radius: 12px; padding: 2rem; transition: all 0.3s ease;">
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
          <span class="badge-enr" style="font-size: 1.1rem; padding: 0.5rem 1rem;">SOFOM ENR</span>
          <span class="badge-format" style="font-size: 0.9rem;">RIPS F36</span>
        </div>

        <h2 style="font-size: 1.75rem; margin-bottom: 1rem; color: var(--success-700);">
          Entidad No Regulada
        </h2>

        <p style="color: var(--neutral-600); margin-bottom: 1.5rem;">
          SOFOMes con supervisión CNBV solo en PLD/FT, independientes. ~90% del mercado (~4,500 SOFOMes).
        </p>

        <div style="background: #F9FAFB; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem;">
          <p style="font-size: 0.875rem; margin-bottom: 0.5rem;"><strong>7 Catálogos F36:</strong></p>
          <ul style="font-size: 0.875rem; color: var(--neutral-600); margin: 0; padding-left: 1.5rem;">
            <li>1,265 Actividades Económicas (+91 vs ER)</li>
            <li>192 Monedas (+67 vs ER)</li>
            <li><strong>19 Tipos Operación SOFOM</strong> ⭐ (crédito, factoraje, prepagadas)</li>
            <li><strong>4 Tipos Operación Asesores</strong> ⭐ (gestión, asesoría)</li>
            <li>10 Instrumentos Monetarios</li>
            <li>3,689 Localidades</li>
            <li>3 Tipos de Reporte</li>
          </ul>
        </div>

        <a href="catalogos-enr/" class="btn btn-success" style="width: 100%; text-align: center;">
          Ver Catálogos ENR (F36) →
        </a>
      </div>

    </div>

    <!-- Comparison Section -->
    <div style="background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-radius: 12px; padding: 2rem; margin-bottom: 3rem;">
      <h2 style="text-align: center; margin-bottom: 1.5rem; color: var(--primary-900);">
        🔍 ¿No sabes si eres ER o ENR?
      </h2>
      <p style="text-align: center; margin-bottom: 1.5rem; color: var(--neutral-700);">
        Consulta nuestra guía comparativa para identificar tu tipo de SOFOM
      </p>
      <div style="text-align: center;">
        <a href="sofom-er-vs-enr" class="btn btn-outline" style="display: inline-block;">
          Ver Comparativa ER vs ENR
        </a>
      </div>
    </div>

    <!-- Key Differences Table -->
    <div style="margin-bottom: 3rem;">
      <h2 style="text-align: center; margin-bottom: 2rem;">📊 Diferencias principales entre F41 y F36</h2>

      <div class="directory-table">
        <table style="width: 100%;">
          <thead>
            <tr>
              <th scope="col">Catálogo</th>
              <th scope="col" style="text-align: center;">F41 (ER)</th>
              <th scope="col" style="text-align: center;">F36 (ENR)</th>
              <th scope="col">Diferencia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Actividad Económica</strong></td>
              <td style="text-align: center;">1,172</td>
              <td style="text-align: center;">1,265</td>
              <td><span class="badge-success">+91 ENR</span></td>
            </tr>
            <tr>
              <td><strong>Instrumento Monetario</strong></td>
              <td style="text-align: center;">10</td>
              <td style="text-align: center;">10</td>
              <td><span class="badge-neutral">Idéntico</span></td>
            </tr>
            <tr>
              <td><strong>Localidad</strong></td>
              <td style="text-align: center;">3,689</td>
              <td style="text-align: center;">3,689</td>
              <td><span class="badge-neutral">Idéntico</span></td>
            </tr>
            <tr>
              <td><strong>Moneda</strong></td>
              <td style="text-align: center;">123</td>
              <td style="text-align: center;">192</td>
              <td><span class="badge-success">+67 ENR</span></td>
            </tr>
            <tr>
              <td><strong>País</strong></td>
              <td style="text-align: center;">245</td>
              <td style="text-align: center;">❌</td>
              <td><span class="badge-er">Solo ER</span></td>
            </tr>
            <tr>
              <td><strong>Tipo de Operación</strong></td>
              <td style="text-align: center;">40</td>
              <td style="text-align: center;">❌</td>
              <td><span class="badge-er">Solo ER</span></td>
            </tr>
            <tr>
              <td><strong>Tipo Operación SOFOM</strong></td>
              <td style="text-align: center;">❌</td>
              <td style="text-align: center;">19</td>
              <td><span class="badge-enr">Solo ENR</span></td>
            </tr>
            <tr>
              <td><strong>Tipo Operación Asesores</strong></td>
              <td style="text-align: center;">❌</td>
              <td style="text-align: center;">4</td>
              <td><span class="badge-enr">Solo ENR</span></td>
            </tr>
            <tr>
              <td><strong>Tipo de Reporte</strong></td>
              <td style="text-align: center;">3</td>
              <td style="text-align: center;">3</td>
              <td><span class="badge-neutral">Idéntico</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- FAQ Section -->
    <div style="background: white; border: 1px solid #E5E7EB; border-radius: 8px; padding: 2rem;">
      <h2 style="margin-bottom: 1.5rem;">❓ Preguntas Frecuentes</h2>

      <div style="margin-bottom: 1.5rem;">
        <h3 style="font-size: 1.125rem; color: var(--primary-700); margin-bottom: 0.5rem;">
          ¿Por qué las ER usan F41 y las ENR usan F36?
        </h3>
        <p style="color: var(--neutral-600);">
          Las SOFOM ER tienen supervisión prudencial completa y realizan operaciones más complejas (internacionales, multidivisa, valores), por lo que requieren catálogos más amplios. Las ENR tienen catálogos específicos para sus operaciones de crédito y factoraje.
        </p>
      </div>

      <div style="margin-bottom: 1.5rem;">
        <h3 style="font-size: 1.125rem; color: var(--primary-700); margin-bottom: 0.5rem;">
          ¿Las obligaciones PLD/FT son iguales para ER y ENR?
        </h3>
        <p style="color: var(--neutral-600);">
          SÍ. Ambas deben reportar operaciones relevantes, inusuales y preocupantes. El catálogo de "Tipo de Reporte" es IDÉNTICO (3 tipos). La LFPIORPI aplica igual a ambas.
        </p>
      </div>

      <div style="margin-bottom: 1.5rem;">
        <h3 style="font-size: 1.125rem; color: var(--primary-700); margin-bottom: 0.5rem;">
          ¿Puedo usar catálogos ENR si soy ER?
        </h3>
        <p style="color: var(--neutral-600);">
          NO. Cada tipo de SOFOM debe usar sus catálogos oficiales. Las ER usan F41 y las ENR usan F36. Usar el formato incorrecto resultará en rechazo de reportes por parte de CNBV.
        </p>
      </div>

      <div>
        <h3 style="font-size: 1.125rem; color: var(--primary-700); margin-bottom: 0.5rem;">
          ¿Dónde descargo los archivos oficiales de CNBV?
        </h3>
        <p style="color: var(--neutral-600);">
          <strong>F41 (ER):</strong> <a href="https://www.cnbv.gob.mx/PrevencionDeLavadoDeDinero/Documents/CATALOGOS_SOT_2019.zip" target="_blank">CATALOGOS_SOT_2019.zip</a><br>
          <strong>F36 (ENR):</strong> <a href="https://www.cnbv.gob.mx/PrevencionDeLavadoDeDinero/Documents/CATALOGO_SOFOMESENR_2019.zip" target="_blank">CATALOGO_SOFOMESENR_2019.zip</a>
        </p>
      </div>
    </div>

  </div>
</section>

<style>
.catalog-type-card:hover {
  border-color: var(--primary-500);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  transform: translateY(-5px);
}

.badge-neutral {
  background: #F3F4F6;
  color: #6B7280;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.875rem;
  font-weight: 600;
}

.badge-success {
  background: #D1FAE5;
  color: #059669;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.875rem;
  font-weight: 600;
}
</style>

<?php include 'includes/footer.php'; ?>
