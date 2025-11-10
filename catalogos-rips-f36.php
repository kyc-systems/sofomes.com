<?php
/**
 * Redirección permanente a la nueva estructura de catálogos
 *
 * Esta página ha sido actualizada para incluir catálogos tanto de SOFOM ER (F41)
 * como SOFOM ENR (F36). Por favor visite la nueva página de catálogos.
 */

// Redirección 301 permanente
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://sofomes.com/catalogos-rips.php");
exit();
?>
