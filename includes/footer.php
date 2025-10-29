  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h4>Navegación</h4>
          <ul class="footer-links">
            <li><a href="<?php echo $basePath; ?>index.php#que-es">¿Qué es una SOFOM?</a></li>
            <li><a href="<?php echo $basePath; ?>lista-sofomes-mexico.php">Directorio</a></li>
            <li><a href="<?php echo $basePath; ?>index.php#fovissste">SOFOMes FOVISSSTE</a></li>
            <li><a href="<?php echo $basePath; ?>index.php#casos-exito">Casos de Éxito</a></li>
            <li><a href="<?php echo $basePath; ?>index.php#constituir">Constituir SOFOM</a></li>
            <li><a href="<?php echo $basePath; ?>index.php#faq">FAQ</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Recursos</h4>
          <ul class="footer-links">
            <li><a href="<?php echo $basePath; ?>lista-sofomes-mexico.php">Lista Completa SOFOMes</a></li>
            <li><a href="<?php echo $basePath; ?>catalogos-rips-f36.php">Catálogos RIPS F36</a></li>
            <li><a href="<?php echo $basePath; ?>reportes-regulatorios-cnbv.php">Reportes Regulatorios</a></li>
            <li><a href="<?php echo $basePath; ?>layout-reportes-pld.php">Layout 36 Campos</a></li>
            <li><a href="<?php echo $basePath; ?>index.php#constituir">Guía Constitución</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal y Compliance</h4>
          <ul class="footer-links">
            <li><a href="https://www.condusef.gob.mx" target="_blank" rel="noopener">CONDUSEF</a></li>
            <li><a href="https://www.cnbv.gob.mx" target="_blank" rel="noopener">CNBV</a></li>
            <li><a href="https://www.gob.mx/uif" target="_blank" rel="noopener">UIF</a></li>
            <li><a href="https://www.fovissste.gob.mx" target="_blank" rel="noopener">FOVISSSTE</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>SOFOMES.COM</h4>
          <p>
            Directorio completo de SOFOMes en operación en México. Información verificable, datos reales.
          </p>
          <p style="margin-top: 1rem;">
            <strong>Contacto:</strong><br>
            <a href="mailto:contacto@sofomes.com">contacto@sofomes.com</a>
          </p>
          <p style="margin-top: 1rem; font-size: 0.875rem;">
            <strong>Disclaimer:</strong> Sitio informativo independiente. No somos CONDUSEF ni CNBV.
          </p>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="footer-copyright">
          <p>
            &copy; <span class="current-year"></span> SOFOMES.COM - Todos los derechos reservados.<br>
            Datos: <a href="https://www.condusef.gob.mx" target="_blank" rel="noopener">CONDUSEF SIPRES</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Dynamic Year Update Script -->
  <script>
    (function() {
      const currentYear = new Date().getFullYear();

      // Update all elements with class 'current-year'
      document.querySelectorAll('.current-year').forEach(el => {
        el.textContent = currentYear;
      });
    })();
  </script>

</body>
</html>
