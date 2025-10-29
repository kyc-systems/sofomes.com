# API CONDUSEF Proxy

API proxy para obtener datos de SOFOMes desde CONDUSEF SIPRES con sistema de cache automático.

## Funcionamiento del Cache

### Sistema Automático de 24 Horas

El API implementa un sistema de cache inteligente:

1. **Primera visita**: Hace request a CONDUSEF, guarda resultado en `condusef-cache.json`
2. **Siguientes 24 horas**: Sirve datos desde cache (respuesta instantánea)
3. **Después de 24 horas**: Primer visitante obtiene datos frescos de CONDUSEF automáticamente
4. **Cache se regenera**: El nuevo visitante recibe datos actualizados y el ciclo se repite

### Ventajas

- ✅ **Velocidad**: Respuestas instantáneas desde cache
- ✅ **Eficiencia**: Reduce carga en servidor CONDUSEF
- ✅ **Automatización**: No requiere cron jobs ni intervención manual
- ✅ **Datos frescos**: Se actualizan cada 24 horas automáticamente

### Endpoints

#### Obtener datos (con cache)
```
GET /api/condusef-proxy.php
```

**Respuesta incluye:**
```json
{
  "success": true,
  "total": 1234,
  "sofomes": [...],
  "fecha": "2025-10-28T10:30:00-06:00",
  "source": "CONDUSEF SIPRES",
  "cached": true,
  "cache_age_hours": 5.2,
  "cache_expires_in_hours": 18.8
}
```

#### Forzar actualización
```
GET /api/condusef-proxy.php?refresh=true
```

Útil para:
- Testing
- Cuando CONDUSEF actualiza datos fuera del ciclo normal
- Debugging

#### Debug mode (guardar snapshot)
```
GET /api/condusef-proxy.php?debug=1
```

Guarda un snapshot con timestamp: `condusef-response-2025-10-28-103045.json`

## Archivos

- `condusef-proxy.php` - Script principal con lógica de cache
- `condusef-cache.json` - Cache automático (generado, no versionar en git)
- `condusef-response-*.json` - Snapshots de debug (generados, no versionar en git)

## Permisos Requeridos

En servidor compartido, asegúrate de tener:

```bash
# Directorio API
chmod 755 api/

# Script PHP
chmod 644 api/condusef-proxy.php

# IMPORTANTE: El servidor web (Apache/Nginx) debe poder ESCRIBIR en este directorio
# para crear el archivo condusef-cache.json
```

Si el cache no se genera, verifica permisos de escritura del directorio `api/`.

## Logs

El script genera logs en `error_log` del servidor:

```
Sirviendo desde CACHE - Age: 5.2 horas
Cache EXPIRADO - Age: 25.1 horas. Fetching desde CONDUSEF...
Cache GUARDADO exitosamente: /path/to/api/condusef-cache.json
```

## Monitoreo

Para verificar estado del cache:

```bash
# Ver edad del cache
ls -lah api/condusef-cache.json

# Ver contenido del cache
cat api/condusef-cache.json | jq .fecha

# Forzar actualización
curl "https://sofomes.com/api/condusef-proxy.php?refresh=true"
```

## Troubleshooting

### Cache no se genera

**Problema**: El archivo `condusef-cache.json` no se crea

**Solución**:
1. Verifica permisos de escritura: `chmod 755 api/`
2. Verifica que Apache tenga permisos: `chown www-data:www-data api/` (Linux)
3. Revisa logs del servidor

### Datos desactualizados

**Problema**: Los datos parecen viejos

**Solución**:
1. Verifica edad del cache: `ls -lah api/condusef-cache.json`
2. Fuerza refresh: `curl "https://sofomes.com/api/condusef-proxy.php?refresh=true"`
3. Verifica que el cache no tenga permisos read-only

### Error 500

**Problema**: API retorna error 500

**Solución**:
1. Revisa logs de PHP: `tail -f /var/log/apache2/error.log`
2. Verifica que cURL esté habilitado en PHP
3. Verifica conectividad con CONDUSEF: `curl https://webapps.condusef.gob.mx/`

## Notas de Producción

- El cache se guarda en el servidor, no en el cliente
- Cada servidor (desarrollo, staging, producción) tendrá su propio cache
- Si usas múltiples servidores (load balancer), considera usar Redis o Memcached compartido
- El cache sobrevivirá a despliegues si la carpeta `api/` persiste
