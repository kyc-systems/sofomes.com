<!-- Navigation -->
<nav class="nav">
  <div class="container">
    <div class="nav-brand">
      <a href="<?= site_url('/') ?>">
        <img src="<?= base_url('assets/img/logo_sofomes.png') ?>" alt="SOFOMES.COM" class="nav-logo">
      </a>
    </div>

    <!-- Mobile menu button -->
    <button class="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
      <span class="hamburger"></span>
    </button>

    <div class="nav-menu">
      <?php if (! empty($isHomepage)): ?>
        <!-- En homepage: links con anchors locales -->
        <a href="#que-es"<?= $activeMenu === 'que-es' ? ' class="active"' : '' ?>>¿Qué es?</a>
        <a href="#directorio"<?= $activeMenu === 'directorio' ? ' class="active"' : '' ?>>Directorio (<span id="nav-count">...</span>)</a>
        <a href="#fovissste"<?= $activeMenu === 'fovissste' ? ' class="active"' : '' ?>>FOVISSSTE</a>
        <a href="#casos-exito"<?= $activeMenu === 'casos-exito' ? ' class="active"' : '' ?>>Casos de Éxito</a>
        <a href="#constituir"<?= $activeMenu === 'constituir' ? ' class="active"' : '' ?>>Constituir</a>
      <?php else: ?>
        <!-- En otras páginas: rutas absolutas -->
        <a href="<?= site_url('/#que-es') ?>"<?= $activeMenu === 'que-es' ? ' class="active"' : '' ?>>¿Qué es?</a>
        <a href="<?= site_url('/lista-sofomes-mexico') ?>"<?= $activeMenu === 'directorio' ? ' class="active"' : '' ?>>Directorio</a>
        <a href="<?= site_url('/#fovissste') ?>"<?= $activeMenu === 'fovissste' ? ' class="active"' : '' ?>>FOVISSSTE</a>
        <a href="<?= site_url('/#casos-exito') ?>"<?= $activeMenu === 'casos-exito' ? ' class="active"' : '' ?>>Casos de Éxito</a>
        <a href="<?= site_url('/#constituir') ?>"<?= $activeMenu === 'constituir' ? ' class="active"' : '' ?>>Constituir</a>
      <?php endif; ?>
      <a href="<?= site_url('/catalogos-rips') ?>"<?= $activeMenu === 'catalogos' ? ' class="active"' : '' ?>>Catálogos RIPS</a>
      <a href="<?= site_url('/reportes-regulatorios-cnbv') ?>"<?= $activeMenu === 'reportes' ? ' class="active"' : '' ?>>Reportes</a>
    </div>
  </div>
</nav>
