# Instrucciones para Configurar Permisos en Servidor Compartido

## Problema Actual
Error 403 Forbidden al cargar CSS: `https://sofomes.com/assets/css/main-v2.css`

## Solución: Configurar Permisos Correctos

### Opción 1: Usando FileZilla o Cliente FTP

1. **Conecta a tu servidor** vía FTP
2. **Configura permisos de DIRECTORIOS** (clic derecho → Permisos de archivo):
   ```
   Permisos: 755
   Propietario: Lectura + Escritura + Ejecución
   Grupo: Lectura + Ejecución
   Público: Lectura + Ejecución
   ```

   Directorios a configurar con 755:
   - `/` (raíz)
   - `/assets/`
   - `/assets/css/`
   - `/assets/js/`
   - `/assets/img/`
   - `/catalogos/`
   - `/docs/`

3. **Configura permisos de ARCHIVOS** (clic derecho → Permisos de archivo):
   ```
   Permisos: 644
   Propietario: Lectura + Escritura
   Grupo: Lectura
   Público: Lectura
   ```

   Archivos críticos a configurar con 644:
   - `index.html`
   - `robots.txt`
   - `sitemap.xml`
   - `llms.txt`
   - `.htaccess` (raíz)
   - `assets/.htaccess`
   - `assets/css/main-v2.css`
   - `assets/css/main.css`
   - Todos los `.html`

### Opción 2: Usando cPanel → Administrador de Archivos

1. **Ingresa a cPanel** de tu hosting
2. **Abre "Administrador de Archivos"**
3. **Navega a la carpeta `public_html`** (o donde hayas subido los archivos)

#### Para DIRECTORIOS:
1. Selecciona el directorio (ej: `assets`)
2. Clic en "Permisos" en la barra superior
3. Marca estas casillas:
   - ✅ Propietario: Leer, Escribir, Ejecutar
   - ✅ Grupo: Leer, Ejecutar
   - ✅ Público: Leer, Ejecutar
4. Debería mostrar: `755` o `drwxr-xr-x`
5. Clic en "Cambiar Permisos"

#### Para ARCHIVOS:
1. Selecciona el archivo (ej: `main-v2.css`)
2. Clic en "Permisos"
3. Marca estas casillas:
   - ✅ Propietario: Leer, Escribir
   - ✅ Grupo: Leer
   - ✅ Público: Leer
4. Debería mostrar: `644` o `-rw-r--r--`
5. Clic en "Cambiar Permisos"

### Archivos .htaccess Creados

Ya se crearon 2 archivos `.htaccess` que debes subir:

1. **`/.htaccess`** (raíz del sitio)
   - Configura permisos generales
   - Habilita compresión y cache
   - Configuración de tipos MIME

2. **`/assets/.htaccess`** (carpeta assets)
   - Permite acceso público a CSS, JS, imágenes
   - Configura tipos MIME para recursos estáticos
   - Headers de CORS

**IMPORTANTE**: Asegúrate de que estos archivos `.htaccess` tengan permisos `644`

### Opción 3: Comando SSH (si tu hosting lo permite)

Si tu hosting permite acceso SSH:

```bash
# Conectar vía SSH
ssh usuario@sofomes.com

# Ir al directorio del sitio
cd public_html  # o la ruta donde esté tu sitio

# Permisos de directorios
find . -type d -exec chmod 755 {} \;

# Permisos de archivos
find . -type f -exec chmod 644 {} \;

# Verificar
ls -la
```

### Verificación

Después de configurar los permisos, verifica:

1. **Carga el sitio**: https://sofomes.com
2. **Inspecciona en el navegador** (F12 → Network)
3. **Busca el archivo CSS**: `main-v2.css`
4. **Debe mostrar**: Status 200 (en verde)

Si sigue mostrando 403:
- Verifica que `.htaccess` esté en la raíz
- Verifica que `assets/.htaccess` exista
- Contacta al soporte de tu hosting para verificar configuración de Apache

### Resumen de Permisos Correctos

| Tipo | Permisos | Código | Descripción |
|------|----------|--------|-------------|
| Directorios | 755 | drwxr-xr-x | Lectura/Escritura para ti, solo lectura para otros |
| Archivos HTML/CSS/JS | 644 | -rw-r--r-- | Lectura/Escritura para ti, solo lectura para otros |
| .htaccess | 644 | -rw-r--r-- | Igual que archivos normales |

### Contacto con Soporte

Si después de esto sigue sin funcionar, contacta al soporte de tu hosting con esta información:

```
Error: 403 Forbidden al acceder a /assets/css/main-v2.css
Mensaje: "Server unable to read htaccess file"

Configuración actual:
- Permisos de directorios: 755
- Permisos de archivos: 644
- Archivo .htaccess presente en raíz y en /assets
- Sitio: sofomes.com

¿Pueden verificar la configuración de Apache y mod_rewrite?
```

---

## Checklist Final

- [ ] Subir `.htaccess` a la raíz del sitio
- [ ] Subir `assets/.htaccess`
- [ ] Configurar permisos 755 para todos los directorios
- [ ] Configurar permisos 644 para todos los archivos
- [ ] Verificar que `robots.txt`, `sitemap.xml`, `llms.txt` estén en la raíz
- [ ] Probar carga del sitio: https://sofomes.com
- [ ] Probar carga de CSS: https://sofomes.com/assets/css/main-v2.css
- [ ] Verificar que Cliengo funcione (chat debe aparecer)
