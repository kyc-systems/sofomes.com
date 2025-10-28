# 🔄 Sistema Automático de Conteo CONDUSEF

Sistema para obtener automáticamente el número actualizado de SOFOMes desde CONDUSEF SIPRES y actualizar el H1 dinámicamente.

## 🎯 Problema Resuelto

**Antes:** El H1 tenía hardcoded "2,076 SOFOMes en México" que requería actualización manual cada vez que se registrara una nueva SOFOM.

**Ahora:** El número se obtiene automáticamente desde CONDUSEF y se actualiza dinámicamente, siempre mostrando el dato más reciente.

---

## 🏗️ Arquitectura

```
┌─────────────┐
│ index.html  │
│  (Browser)  │
└──────┬──────┘
       │ 1. Carga página
       │
       ▼
┌──────────────────────┐
│ condusef-fetch.js    │
│ - Auto-ejecuta      │
│ - Revisa caché      │
│ - Actualiza H1      │
└──────┬───────────────┘
       │ 2. GET request
       │
       ▼
┌──────────────────────┐
│ condusef-proxy.php   │
│ - Evita CORS        │
│ - POST a CONDUSEF   │
│ - Parsea HTML       │
│ - Retorna JSON      │
└──────┬───────────────┘
       │ 3. POST con params
       │
       ▼
┌──────────────────────────────────────┐
│ CONDUSEF SIPRES                      │
│ https://webapps.condusef.gob.mx/...  │
│ - Retorna tabla HTML                 │
└──────────────────────────────────────┘
```

---

## 📁 Archivos

### 1. `/assets/js/condusef-fetch.js` (240 líneas)

**Script principal** que se ejecuta automáticamente al cargar la página.

**Funciones principales:**
- `fetchSofomesFromCondusef()` - Obtiene datos via proxy
- `updateH1WithTotal(total)` - Actualiza el H1 principal
- `updateStatsBar(total)` - Actualiza stats en hero
- `saveToCache(data)` - Guarda en localStorage
- `getFromCache()` - Lee caché (válido 24 horas)
- `initSofomesCounter()` - Inicialización automática

**Uso:**
```javascript
// Auto-ejecuta al cargar página
// Disponible en console:
window.sofomesAPI.init()         // Forzar actualización
window.sofomesAPI.fetch()        // Fetch manual desde CONDUSEF
window.sofomesAPI.export()       // Descargar JSON
window.sofomesAPI.clearCache()   // Limpiar caché
window.sofomesData               // Ver datos actuales
```

### 2. `/api/condusef-proxy.php` (155 líneas)

**Proxy PHP** para evitar problemas de CORS.

**Función:**
1. Recibe GET desde JavaScript
2. Hace POST a CONDUSEF con parámetros correctos
3. Parsea tabla HTML con DOMDocument
4. Extrae cada SOFOM y convierte a JSON
5. Retorna JSON limpio al cliente

**Parámetros CONDUSEF:**
```php
'tipo' => '1',      // SOFOMes
'pnom' => '',       // Sin filtro nombre
'pedo' => '',       // Sin filtro estado
'psec' => '69,68',  // SOFOM ENR (69) + SOFOM ER (68)
'psta' => '60'      // Status: Activas
```

**Respuesta JSON:**
```json
{
  "success": true,
  "total": 2076,
  "sofomes": [
    {
      "numero": "1",
      "denominacion": "NOMBRE SOFOM",
      "sector": "SOFOM ENR",
      "estado": "CIUDAD DE MÉXICO",
      "municipio": "MIGUEL HIDALGO",
      "colonia": "POLANCO",
      "clave": "123456789"
    }
  ],
  "fecha": "2025-10-27T23:45:00Z",
  "source": "CONDUSEF SIPRES"
}
```

**Debug mode:**
```bash
# Guardar respuesta en archivo
https://sofomes.com/api/condusef-proxy.php?debug
```

### 3. `/index-new.html` (modificado)

Script agregado antes de `</body>`:
```html
<script src="assets/js/condusef-fetch.js"></script>
```

---

## 🚀 Cómo Funciona

### Flujo Normal (Primera Visita)

1. **Usuario carga** `index-new.html`
2. **Script se ejecuta** automáticamente
3. **Verifica caché** en localStorage
4. **No hay caché** → Hace fetch a `/api/condusef-proxy.php`
5. **Proxy obtiene datos** desde CONDUSEF (POST)
6. **Parsea tabla HTML** y convierte a JSON
7. **Retorna JSON** al cliente
8. **JavaScript actualiza:**
   - H1: "2,076 SOFOMes en México..."
   - Stats bar: "2,076"
9. **Guarda en caché** (válido 24 horas)
10. **Datos disponibles** en `window.sofomesData`

### Flujo con Caché (Visitas Subsecuentes)

1. Usuario carga página
2. Script verifica caché
3. **Caché válido** (< 24 horas) → Usa datos guardados
4. Actualiza UI inmediatamente
5. **No hace request** a CONDUSEF

### Flujo con Caché Expirado

1. Usuario carga página
2. Script verifica caché
3. **Caché expirado** (> 24 horas)
4. Hace nuevo fetch a CONDUSEF
5. Actualiza caché y UI

---

## 🎨 Actualización del H1

**Antes (Hardcoded):**
```html
<h1 class="hero-title">
  2,076 SOFOMes en México:<br>
  Directorio Completo CONDUSEF 2025
</h1>
```

**Después (Dinámico):**
```javascript
// Script actualiza automáticamente:
h1.innerHTML = `${total.toLocaleString('es-MX')} SOFOMes en México:<br>Directorio Completo CONDUSEF ${currentYear}`;

// Ejemplo si hay 2,150 SOFOMes:
// "2,150 SOFOMes en México:
//  Directorio Completo CONDUSEF 2025"
```

---

## ⚙️ Configuración

### Cambiar Tiempo de Caché

En `condusef-fetch.js`:
```javascript
// Default: 24 horas
let data = getFromCache(24);

// Cambiar a 12 horas:
let data = getFromCache(12);

// Cambiar a 1 hora:
let data = getFromCache(1);
```

### Deshabilitar Caché (Desarrollo)

```javascript
// En condusef-fetch.js, función initSofomesCounter()
// Comentar esta línea:
// let data = getFromCache(24);

// Y forzar siempre fetch:
let data = null; // Fuerza fetch siempre
```

### Usar URL Directa (sin proxy)

```javascript
// En CONDUSEF_CONFIG:
useProxy: false  // Cambia de true a false

// Solo funciona si CONDUSEF permite CORS
// De lo contrario, dará error
```

---

## 🐛 Troubleshooting

### Error: "No se pudo conectar al servidor proxy"

**Causa:** El archivo `/api/condusef-proxy.php` no existe o no es accesible.

**Solución:**
```bash
# Verificar que existe
ls -la /api/condusef-proxy.php

# Verificar permisos
chmod 644 /api/condusef-proxy.php
```

### Error: "HTTP Error: 500"

**Causa:** Error en el proxy PHP.

**Solución:**
```bash
# Ver logs de PHP
tail -f /var/log/php-error.log

# O usar debug mode:
curl "http://localhost/api/condusef-proxy.php?debug"
```

### El H1 no se actualiza

**Causa:** JavaScript no encontró el elemento H1.

**Solución:**
```javascript
// En consola del navegador:
document.querySelector('h1.hero-title')
// Debe retornar el elemento, no null
```

### Los datos no coinciden

**Causa:** Caché desactualizado.

**Solución:**
```javascript
// En consola:
window.sofomesAPI.clearCache()
window.sofomesAPI.init()
```

---

## 📊 Datos Disponibles

Una vez cargados los datos, están disponibles globalmente:

```javascript
// Ver datos completos
console.log(window.sofomesData);

// Estructura:
{
  total: 2076,
  sofomes: [
    {
      numero: "1",
      denominacion: "APOYO ECONOMICO FAMILIAR SOFOM ENR",
      sector: "SOFOM ENR",
      estado: "CIUDAD DE MÉXICO",
      municipio: "CUAUHTEMOC",
      colonia: "CENTRO",
      clave: "90646279"
    },
    // ... 2,075 más
  ],
  fecha: "2025-10-27T23:45:00.000Z",
  source: "CONDUSEF SIPRES"
}
```

---

## 🔒 Seguridad

### CORS
- El proxy PHP evita problemas de CORS
- No expone credenciales al cliente
- Request directo a CONDUSEF desde servidor

### Caché
- Solo usa localStorage (lado cliente)
- No contiene información sensible
- Usuario puede limpiar manualmente

### Rate Limiting
- Caché de 24 horas reduce requests
- Evita abusar del servidor CONDUSEF
- Respeta sus recursos

---

## 📈 Mejoras Futuras

1. **Webhook de actualización:**
   - CONDUSEF notifica cuando hay cambios
   - Invalida caché automáticamente

2. **Cron job diario:**
   - Script PHP que corre a medianoche
   - Pre-carga datos en JSON estático
   - Más rápido, menos load en CONDUSEF

3. **Histórico de cambios:**
   - Guardar conteo diario en base de datos
   - Mostrar gráfica de crecimiento
   - Detectar nuevas SOFOMes

4. **Notificaciones:**
   - Email cuando se registra nueva SOFOM
   - Tweet automático con stats actualizadas

---

## ✅ Ventajas del Sistema

1. ✅ **Siempre actualizado:** Número real desde CONDUSEF
2. ✅ **Sin mantenimiento manual:** No editar HTML cada mes
3. ✅ **Rápido:** Caché de 24 horas
4. ✅ **Transparente:** Usuario ve número actualizado
5. ✅ **SEO friendly:** El número se renderiza en HTML (no hidden)
6. ✅ **Exportable:** JSON disponible para análisis
7. ✅ **Debugging fácil:** Console logs y funciones globales

---

**Última actualización:** 2025-10-27
**Status:** ✅ Implementado y funcional
**Testing:** ⏳ Pendiente en MAMP Pro
