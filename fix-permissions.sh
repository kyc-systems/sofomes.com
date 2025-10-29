#!/bin/bash

# Script para corregir permisos antes de subir a hosting
# Generado: 2025-10-28

echo "🔧 Corrigiendo permisos de archivos y directorios..."
echo ""

# Directorio base
BASE_DIR="/Users/isaac/Sites/localhost/sofomes.com"

# Establecer permisos correctos para directorios (755)
echo "📁 Configurando permisos de directorios a 755..."
find "$BASE_DIR" -type d -exec chmod 755 {} \;

# Establecer permisos correctos para archivos (644)
echo "📄 Configurando permisos de archivos a 644..."
find "$BASE_DIR" -type f -exec chmod 644 {} \;

# Permisos especiales para scripts .sh (755 - ejecutables)
echo "🚀 Configurando permisos de scripts a 755..."
find "$BASE_DIR" -type f -name "*.sh" -exec chmod 755 {} \;

# Verificación
echo ""
echo "✅ Permisos corregidos:"
echo "   - Directorios: 755 (rwxr-xr-x)"
echo "   - Archivos: 644 (rw-r--r--)"
echo "   - Scripts .sh: 755 (rwxr-xr-x)"
echo ""
echo "📋 Verificación de archivos críticos:"
ls -la "$BASE_DIR"/{index.html,robots.txt,sitemap.xml,llms.txt,.htaccess} 2>/dev/null
echo ""
ls -la "$BASE_DIR/assets/.htaccess" 2>/dev/null
echo ""
ls -la "$BASE_DIR/assets/css/main-v2.css" 2>/dev/null
echo ""
echo "✅ Listo para subir a hosting"
