<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  // Calcular ruta base relativa según profundidad del archivo
  $scriptPath = $_SERVER['SCRIPT_NAME'];
  $scriptDir = dirname($scriptPath);

  // Contar niveles desde la raíz del sitio
  $levels = substr_count($scriptDir, '/') - substr_count($_SERVER['DOCUMENT_ROOT'], '/');
  if ($levels < 0) $levels = 0;

  // Si estamos en un subdirectorio de catalogos, necesitamos subir un nivel más
  if (strpos($scriptPath, '/catalogos/') !== false) {
    $basePath = '../';
  } else {
    $basePath = './';
  }
  ?>

  <!-- Primary Meta Tags -->
  <title><?php echo isset($pageTitle) ? $pageTitle : 'SOFOMes en México | Directorio CONDUSEF'; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Directorio completo de SOFOMes en operación en México.'; ?>">
  <?php if (isset($pageKeywords)): ?>
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <?php endif; ?>

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo isset($canonicalUrl) ? $canonicalUrl : 'https://sofomes.com/'; ?>">

  <!-- Robots -->
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="author" content="SOFOMES.COM">
  <meta name="publisher" content="SOFOMES.COM">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'SOFOMes en México | Directorio CONDUSEF'; ?>">
  <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Directorio completo de SOFOMes en operación en México.'; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo isset($canonicalUrl) ? $canonicalUrl : 'https://sofomes.com/'; ?>">
  <meta property="og:image" content="https://sofomes.com/assets/img/main.jpeg">
  <meta property="og:locale" content="es_MX">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'SOFOMes en México | Directorio CONDUSEF'; ?>">
  <meta name="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Directorio completo de SOFOMes.'; ?>">
  <meta name="twitter:image" content="https://sofomes.com/assets/img/main.jpeg">

  <!-- Preconnect to external origins -->
  <link rel="preconnect" href="https://lw2.cliengo.com" crossorigin>
  <link rel="preconnect" href="https://cdn.icomoon.io" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Preload -->
  <link rel="preload" href="<?php echo $basePath; ?>assets/css/main-v2.css" as="style">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/main-v2.css">

  <?php if (isset($useDatatables) && $useDatatables): ?>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <!-- jQuery (necesario antes de DataTables) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <?php endif; ?>

  <?php if (isset($schemaJson)): ?>
  <!-- Schema.org JSON-LD -->
  <?php echo $schemaJson; ?>
  <?php endif; ?>

</head>
<body>

  <!-- Skip to main content for screen readers -->
  <a href="#main-content" class="skip-to-main">Saltar al contenido principal</a>

  <!-- Navigation -->
  <nav class="nav">
    <div class="container">
      <div class="nav-brand">
        <a href="<?php echo $basePath; ?>index.php">SOFOMES.COM</a>
      </div>
      <div class="nav-menu">
        <?php
        $activeMenu = isset($activeMenu) ? $activeMenu : '';

        // Determinar si estamos en index
        $isIndex = (basename($_SERVER['PHP_SELF']) == 'index.php');

        if ($isIndex) {
          // Menú para index.php (con anclas locales)
          echo '<a href="#que-es"' . ($activeMenu == 'que-es' ? ' class="active"' : '') . '>¿Qué es?</a>';
          echo '<a href="#directorio"' . ($activeMenu == 'directorio' ? ' class="active"' : '') . '>Directorio (<span id="nav-count">...</span>)</a>';
          echo '<a href="#fovissste"' . ($activeMenu == 'fovissste' ? ' class="active"' : '') . '>FOVISSSTE</a>';
          echo '<a href="#casos-exito"' . ($activeMenu == 'casos-exito' ? ' class="active"' : '') . '>Casos de Éxito</a>';
          echo '<a href="#constituir"' . ($activeMenu == 'constituir' ? ' class="active"' : '') . '>Constituir</a>';
        } else {
          // Menú para otras páginas (con rutas relativas)
          echo '<a href="' . $basePath . 'index.php#que-es"' . ($activeMenu == 'que-es' ? ' class="active"' : '') . '>¿Qué es?</a>';
          echo '<a href="' . $basePath . 'lista-sofomes-mexico.php"' . ($activeMenu == 'directorio' ? ' class="active"' : '') . '>Directorio</a>';
          echo '<a href="' . $basePath . 'index.php#fovissste"' . ($activeMenu == 'fovissste' ? ' class="active"' : '') . '>FOVISSSTE</a>';
          echo '<a href="' . $basePath . 'index.php#casos-exito"' . ($activeMenu == 'casos-exito' ? ' class="active"' : '') . '>Casos de Éxito</a>';
          echo '<a href="' . $basePath . 'index.php#constituir"' . ($activeMenu == 'constituir' ? ' class="active"' : '') . '>Constituir</a>';
        }
        ?>
        <a href="<?php echo $basePath; ?>catalogos-rips-f36.php"<?php echo ($activeMenu == 'catalogos' ? ' class="active"' : ''); ?>>Catálogos RIPS F36</a>
        <a href="<?php echo $basePath; ?>reportes-regulatorios-cnbv.php"<?php echo ($activeMenu == 'reportes' ? ' class="active"' : ''); ?>>Reportes</a>
      </div>
    </div>
  </nav>

  <!-- Main content landmark for accessibility -->
  <main id="main-content">
