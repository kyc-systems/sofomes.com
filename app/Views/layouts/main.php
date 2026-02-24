<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title><?= esc($pageTitle ?? 'SOFOMes en México | Directorio CONDUSEF') ?></title>
  <meta name="description" content="<?= esc($pageDescription ?? 'Directorio completo de SOFOMes en operación en México.') ?>">
  <?php if (! empty($pageKeywords)): ?>
  <meta name="keywords" content="<?= esc($pageKeywords) ?>">
  <?php endif; ?>

  <!-- Canonical -->
  <link rel="canonical" href="<?= esc($canonicalUrl ?? 'https://sofomes.com/') ?>">

  <!-- Robots -->
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="author" content="SOFOMES.COM">
  <meta name="publisher" content="SOFOMES.COM">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= esc($pageTitle ?? 'SOFOMes en México | Directorio CONDUSEF') ?>">
  <meta property="og:description" content="<?= esc($pageDescription ?? 'Directorio completo de SOFOMes en operación en México.') ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= esc($canonicalUrl ?? 'https://sofomes.com/') ?>">
  <meta property="og:image" content="<?= base_url('assets/img/main.jpeg') ?>">
  <meta property="og:locale" content="es_MX">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= esc($pageTitle ?? 'SOFOMes en México | Directorio CONDUSEF') ?>">
  <meta name="twitter:description" content="<?= esc($pageDescription ?? 'Directorio completo de SOFOMes.') ?>">
  <meta name="twitter:image" content="<?= base_url('assets/img/main.jpeg') ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <link rel="apple-touch-icon" href="<?= base_url('assets/img/favicon.png') ?>">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1Q8YFKJTFT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1Q8YFKJTFT');
  </script>

  <!-- Preconnect to external origins -->
  <link rel="preconnect" href="https://lw2.cliengo.com" crossorigin>
  <link rel="preconnect" href="https://cdn.icomoon.io" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Preload & Stylesheet -->
  <link rel="preload" href="<?= base_url('assets/css/main.css') ?>" as="style">
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

  <?php if (! empty($useDatatables)): ?>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <?php endif; ?>

  <?php if (! empty($schemaJson)): ?>
  <!-- Schema.org JSON-LD -->
  <?= $schemaJson ?>
  <?php endif; ?>

</head>
<body>

  <!-- Skip to main content for screen readers -->
  <a href="#main-content" class="skip-to-main">Saltar al contenido principal</a>

  <?= view('partials/nav', [
      'activeMenu' => $activeMenu ?? '',
      'isHomepage' => $isHomepage ?? false,
  ]) ?>

  <!-- Main content landmark for accessibility -->
  <main id="main-content">
    <?= $content ?>
  </main>
  <!-- End main content -->

  <?= view('partials/footer') ?>

  <?php if (! empty($useDatatables)): ?>
  <!-- jQuery y DataTables (cargados al final para mejor rendimiento) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <?php endif; ?>

  <?php if (! empty($pageScript)): ?>
  <!-- Page-specific script (loaded after jQuery/DataTables) -->
  <?= $pageScript ?>
  <?php endif; ?>

  <!-- Mobile Menu Toggle Script -->
  <script>
    (function() {
      const navToggle = document.querySelector('.nav-toggle');
      const navMenu = document.querySelector('.nav-menu');

      if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          this.setAttribute('aria-expanded', !isExpanded);
          navMenu.classList.toggle('active');
        });

        navMenu.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', function() {
            navMenu.classList.remove('active');
            navToggle.setAttribute('aria-expanded', 'false');
          });
        });

        document.addEventListener('click', function(event) {
          const isClickInsideNav = navToggle.contains(event.target) || navMenu.contains(event.target);
          if (!isClickInsideNav && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            navToggle.setAttribute('aria-expanded', 'false');
          }
        });
      }
    })();
  </script>

  <!-- Dynamic Year Update Script -->
  <script>
    (function() {
      const currentYear = new Date().getFullYear();
      document.querySelectorAll('.current-year').forEach(el => {
        el.textContent = currentYear;
      });
    })();
  </script>

  <!-- Código de instalación Cliengo - Carga diferida -->
  <script>
    window.addEventListener('load', function() {
      setTimeout(function() {
        var ldk = document.createElement('script');
        ldk.type = 'text/javascript';
        ldk.async = true;
        ldk.src = 'https://s.cliengo.com/weboptimizer/62503ed1004881002a965901/690164685f597226ae0e7119.js?platform=onboarding_modular';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ldk, s);
      }, 2000);
    });
  </script>

</body>
</html>
