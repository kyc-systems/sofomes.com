/**
 * CONDUSEF API Fetcher
 * Obtiene automáticamente el listado completo de SOFOMes desde CONDUSEF SIPRES
 * y actualiza el conteo en el H1 principal
 */

const CONDUSEF_CONFIG = {
  // Usar proxy PHP para evitar CORS (ruta relativa desde index-new.html)
  proxyUrl: './api/condusef-proxy.php',

  // URL directa (solo funciona si CONDUSEF permite CORS)
  directUrl: 'https://webapps.condusef.gob.mx/SIPRES/jsp/pub/resulbusq.jsp',

  // Usar proxy por defecto
  useProxy: true
};

/**
 * Fetch de SOFOMes desde CONDUSEF (via proxy PHP)
 * @returns {Promise<{total: number, sofomes: Array, fecha: string}>}
 */
async function fetchSofomesFromCondusef() {
  try {
    const url = CONDUSEF_CONFIG.useProxy
      ? CONDUSEF_CONFIG.proxyUrl
      : CONDUSEF_CONFIG.directUrl;

    console.log(`📡 Fetching desde: ${url}`);

    // Hacer GET al proxy PHP (el proxy hace el POST a CONDUSEF)
    const response = await fetch(url, {
      method: 'GET',
      headers: {
        'Accept': 'application/json'
      }
    });

    if (!response.ok) {
      throw new Error(`HTTP Error: ${response.status}`);
    }

    // Parsear respuesta JSON desde el proxy
    const data = await response.json();

    console.log('📦 Respuesta completa del proxy:', data);

    if (!data.success) {
      throw new Error(data.error || 'Error desconocido desde proxy');
    }

    console.log(`✅ Datos recibidos: ${data.total} SOFOMes`);
    console.log(`📊 Primera SOFOM:`, data.sofomes[0]);

    return {
      total: data.total,
      sofomes: data.sofomes,
      fecha: data.fecha,
      source: data.source
    };

  } catch (error) {
    console.error('❌ Error fetching SOFOMes:', error);

    // Mensajes de error útiles
    if (error.message.includes('Failed to fetch')) {
      console.error('⚠️ No se pudo conectar al servidor proxy.');
      console.error('Verifica que el archivo /api/condusef-proxy.php existe y es accesible.');
    }

    throw error;
  }
}

/**
 * Actualiza el title de la página
 * @param {number} total - Total de SOFOMes
 */
function updatePageTitle(total) {
  const totalFormatted = total.toLocaleString('es-MX');
  const currentYear = new Date().getFullYear();
  document.title = `${totalFormatted} SOFOMes en México ${currentYear} | Directorio Completo CONDUSEF`;
  console.log(`✅ Title actualizado: ${document.title}`);
}

/**
 * Actualiza las meta tags
 * @param {number} total - Total de SOFOMes
 */
function updateMetaTags(total) {
  const totalFormatted = total.toLocaleString('es-MX');

  // Meta description
  const metaDesc = document.querySelector('meta[name="description"]');
  if (metaDesc) {
    metaDesc.content = `Directorio completo de ${totalFormatted} SOFOMes en operación en México. Financiamiento PyMEs, constitución SOFOM ENR, lista CONDUSEF actualizada. Casos reales: Konfío, Kueski, más.`;
  }

  // Open Graph title
  const ogTitle = document.querySelector('meta[property="og:title"]');
  if (ogTitle) {
    ogTitle.content = `${totalFormatted} SOFOMes en México | Directorio Completo CONDUSEF ${new Date().getFullYear()}`;
  }

  // Open Graph description
  const ogDesc = document.querySelector('meta[property="og:description"]');
  if (ogDesc) {
    ogDesc.content = `Directorio completo de ${totalFormatted} SOFOMes en operación en CONDUSEF. Financiamiento PyMEs, constitución, casos de éxito reales.`;
  }

  // Twitter title
  const twitterTitle = document.querySelector('meta[name="twitter:title"]');
  if (twitterTitle) {
    twitterTitle.content = `${totalFormatted} SOFOMes en México | SOFOMES.COM`;
  }

  console.log('✅ Meta tags actualizados');
}

/**
 * Actualiza el H1 con el conteo actual de SOFOMes
 * @param {number} total - Total de SOFOMes encontradas
 */
function updateH1WithTotal(total) {
  const heroTotal = document.getElementById('hero-total');

  if (!heroTotal) {
    console.error('No se encontró el span #hero-total');
    return;
  }

  // Formato con separador de miles
  const totalFormatted = total.toLocaleString('es-MX');

  // Actualizar el span
  heroTotal.textContent = totalFormatted;

  console.log(`✅ H1 actualizado: ${totalFormatted} SOFOMes`);
}

/**
 * Actualiza todos los contadores en la página
 * @param {number} total - Total de SOFOMes
 */
function updateAllCounters(total) {
  const totalFormatted = total.toLocaleString('es-MX');

  const counters = {
    'nav-count': totalFormatted,
    'hero-total': totalFormatted,
    'stat-total': totalFormatted,
    'alert-count': totalFormatted,
    'directory-title-count': totalFormatted,
    'directory-stat-total': totalFormatted,
    'cta-count': totalFormatted,
    'faq-count': totalFormatted
  };

  Object.entries(counters).forEach(([id, value]) => {
    const element = document.getElementById(id);
    if (element) {
      element.textContent = value;
    } else {
      console.warn(`⚠️ Elemento #${id} no encontrado`);
    }
  });

  console.log(`✅ ${Object.keys(counters).length} contadores actualizados: ${totalFormatted} SOFOMes`);
}

/**
 * Guarda los datos en localStorage para caché
 * @param {Object} data - Datos de SOFOMes
 */
function saveToCache(data) {
  try {
    localStorage.setItem('sofomes_data', JSON.stringify(data));
    localStorage.setItem('sofomes_last_update', new Date().toISOString());
    console.log('💾 Datos guardados en caché');
  } catch (error) {
    console.warn('No se pudo guardar en localStorage:', error);
  }
}

/**
 * Obtiene datos desde caché si existen y son recientes
 * @param {number} maxAgeHours - Edad máxima en horas (default: 24)
 * @returns {Object|null} - Datos cacheados o null
 */
function getFromCache(maxAgeHours = 24) {
  try {
    const lastUpdate = localStorage.getItem('sofomes_last_update');

    if (!lastUpdate) return null;

    const lastUpdateDate = new Date(lastUpdate);
    const now = new Date();
    const hoursElapsed = (now - lastUpdateDate) / (1000 * 60 * 60);

    if (hoursElapsed > maxAgeHours) {
      console.log('🕐 Caché expirado, obteniendo datos frescos...');
      return null;
    }

    const cachedData = localStorage.getItem('sofomes_data');

    if (cachedData) {
      console.log('✅ Usando datos desde caché');
      return JSON.parse(cachedData);
    }

  } catch (error) {
    console.warn('Error leyendo caché:', error);
  }

  return null;
}

/**
 * Inicializa la aplicación y actualiza el conteo
 */
async function initSofomesCounter() {
  console.log('🚀 Inicializando contador de SOFOMes...');

  try {
    // Intentar obtener desde caché primero
    let data = getFromCache(24); // 24 horas

    // Si no hay caché o está expirado, hacer fetch
    if (!data) {
      console.log('📡 Obteniendo datos desde CONDUSEF...');
      data = await fetchSofomesFromCondusef();
      saveToCache(data);
    }

    // Actualizar UI
    updatePageTitle(data.total);
    updateMetaTags(data.total);
    updateAllCounters(data.total);

    // Hacer disponible globalmente para debugging
    window.sofomesData = data;

    console.log('✅ Datos cargados correctamente');
    console.log(`📊 Total SOFOMes: ${data.total}`);
    console.log(`📅 Última actualización: ${data.fecha}`);
    console.log('💡 Ver datos completos: window.sofomesData');

    return data;

  } catch (error) {
    console.error('❌ Error inicializando contador:', error);

    // Fallback: mantener el número hardcoded si falla
    console.warn('⚠️ Usando número hardcoded como fallback');

    return null;
  }
}

/**
 * Exporta datos a JSON para descargar
 */
function exportSofomesToJSON() {
  if (!window.sofomesData) {
    console.error('No hay datos disponibles. Ejecuta initSofomesCounter() primero.');
    return;
  }

  const dataStr = JSON.stringify(window.sofomesData, null, 2);
  const dataBlob = new Blob([dataStr], { type: 'application/json' });
  const url = URL.createObjectURL(dataBlob);

  const link = document.createElement('a');
  link.href = url;
  link.download = `sofomes-${new Date().toISOString().split('T')[0]}.json`;
  link.click();

  URL.revokeObjectURL(url);

  console.log('✅ JSON descargado');
}

// Auto-ejecutar cuando el DOM esté listo
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initSofomesCounter);
} else {
  initSofomesCounter();
}

// Exponer funciones globalmente para debugging
window.sofomesAPI = {
  init: initSofomesCounter,
  fetch: fetchSofomesFromCondusef,
  export: exportSofomesToJSON,
  clearCache: () => {
    localStorage.removeItem('sofomes_data');
    localStorage.removeItem('sofomes_last_update');
    console.log('🗑️ Caché limpiado');
  }
};

console.log('💡 Funciones disponibles:');
console.log('  - window.sofomesAPI.init() - Actualizar contador');
console.log('  - window.sofomesAPI.fetch() - Fetch manual');
console.log('  - window.sofomesAPI.export() - Descargar JSON');
console.log('  - window.sofomesAPI.clearCache() - Limpiar caché');
