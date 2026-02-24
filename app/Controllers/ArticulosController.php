<?php

namespace App\Controllers;

class ArticulosController extends BaseController
{
    public function erVsEnr(): string
    {
        $schemaJson = <<<'SCHEMA'
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "SOFOM ER vs ENR: Diferencias Clave, Requisitos y Guía Completa",
          "description": "Guía completa comparativa entre SOFOM Entidad Regulada (ER) y SOFOM Entidad No Regulada (ENR): diferencias en supervisión CNBV, capital social, requisitos operativos y estrategia de negocio.",
          "author": {"@type": "Organization", "name": "SOFOMes.com"},
          "publisher": {"@type": "Organization", "name": "SOFOMes.com", "logo": {"@type": "ImageObject", "url": "https://sofomes.com/assets/img/logo.png"}},
          "datePublished": "2025-01-15",
          "dateModified": "2025-01-15"
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {"@type": "Question", "name": "¿Cuál es la diferencia principal entre SOFOM ER y ENR?", "acceptedAnswer": {"@type": "Answer", "text": "La diferencia principal es el nivel de supervisión: las SOFOM ER (Entidad Regulada) tienen supervisión integral de la CNBV en operación, solvencia, gobierno corporativo y tecnología; mientras que las SOFOM ENR (Entidad No Regulada) solo son supervisadas en PLD/FT. Las ER requieren $50M de capital social vs $50K de las ENR."}},
            {"@type": "Question", "name": "¿Cuánto capital social requiere una SOFOM ER?", "acceptedAnswer": {"@type": "Answer", "text": "Una SOFOM ER requiere un capital social mínimo de $50,000,000 MXN (ajustado por inflación), con 100% exhibido desde el inicio. Una SOFOM ENR solo requiere $50,000 MXN de capital social."}},
            {"@type": "Question", "name": "¿Las SOFOM ER pueden captar recursos del público?", "acceptedAnswer": {"@type": "Answer", "text": "No, ninguna SOFOM puede captar recursos del público directamente. Sin embargo, las SOFOM ER tienen ventajas significativas en fondeo: acceso al Banco de México, mejores condiciones en banca de desarrollo, y mayor confianza de inversionistas institucionales."}},
            {"@type": "Question", "name": "¿Qué formato RIPS usa cada tipo de SOFOM?", "acceptedAnswer": {"@type": "Answer", "text": "SOFOM ER reporta con formato F41 (integral: ~180 campos, mensual). SOFOM ENR reporta con formato F36 (solo PLD/FT: ~45 campos, trimestral). Ambos usan los mismos 7 catálogos PLD/FT de la CNBV."}},
            {"@type": "Question", "name": "¿Cuándo conviene ser SOFOM ER en lugar de ENR?", "acceptedAnswer": {"@type": "Answer", "text": "Conviene ser SOFOM ER cuando el portafolio supera $500M-$1B MXN, necesitas acceso institucional a fondeo, planeas salir a bolsa, operas en sectores regulados, o tus clientes son corporativos que requieren supervisión CNBV."}},
            {"@type": "Question", "name": "¿Se puede convertir una SOFOM ENR en ER?", "acceptedAnswer": {"@type": "Answer", "text": "Sí, mediante autorización de la CNBV. El proceso toma 9-18 meses y cuesta $2M-$5M MXN. Casos reales: Crédito Real, Financiera Independencia, Unifin, todas lograron IPO posterior."}}
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://sofomes.com/"},
            {"@type": "ListItem", "position": 2, "name": "SOFOM ER vs ENR", "item": "https://sofomes.com/sofom-er-vs-enr"}
          ]
        }
        </script>
        SCHEMA;

        return $this->renderPage('articulos/er_vs_enr', [
            'pageTitle'       => 'SOFOM ER vs ENR: Diferencias Clave ' . date('Y') . ' | Guía Completa Comparativa',
            'pageDescription' => '¿ER o ENR? Guía definitiva: 10% ER ($50M capital, supervisión CNBV integral) vs 90% ENR ($50K, PLD/FT). Comparativa completa, costos, requisitos, decisión estratégica.',
            'pageKeywords'    => 'sofom er vs enr, diferencias sofom er enr, entidad regulada vs no regulada, supervision cnbv sofom, capital social sofom, requisitos sofom er, sofom enr ventajas',
            'canonicalUrl'    => 'https://sofomes.com/sofom-er-vs-enr',
            'schemaJson'      => $schemaJson,
        ]);
    }

    public function reportesRegulatorios(): string
    {
        $schemaJson = <<<'SCHEMA'
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {"@type": "Question", "name": "¿Qué son las operaciones relevantes?", "acceptedAnswer": {"@type": "Answer", "text": "Las operaciones relevantes son aquellas operaciones realizadas con billetes y monedas metálicas de curso legal, cheques de viajero, o monedas acuñadas en platino, oro y plata que alcanzan o superan el umbral de $7,500 dólares estadounidenses (o su equivalente en moneda nacional o extranjera). Deben reportarse trimestralmente ante la CNBV dentro de los 10 últimos días hábiles de enero, abril, julio y octubre."}},
            {"@type": "Question", "name": "¿Cuál es el monto de las operaciones relevantes?", "acceptedAnswer": {"@type": "Answer", "text": "El monto establecido para operaciones relevantes es de $7,500 USD (siete mil quinientos dólares estadounidenses) o su equivalente en otras monedas. Este umbral aplica únicamente a operaciones con billetes y monedas metálicas, cheques de viajero, y monedas acuñadas en platino, oro y plata."}},
            {"@type": "Question", "name": "¿Qué son las operaciones inusuales?", "acceptedAnswer": {"@type": "Answer", "text": "Las operaciones inusuales son aquellas que no concuerdan con el perfil transaccional del cliente por su monto, frecuencia o características, o que carecen de justificación económica o legal aparente. La Disposición 30a de la CNBV establece 13 circunstancias específicas que califican como inusuales."}},
            {"@type": "Question", "name": "¿Cuáles son las operaciones inusuales?", "acceptedAnswer": {"@type": "Answer", "text": "Las operaciones inusuales incluyen 13 circunstancias definidas en la Disposición 30a de la CNBV, entre ellas: operaciones que no coinciden con la actividad económica del cliente, incrementos inusuales en depósitos, operaciones estructuradas para evitar umbrales, uso de instrumentos no habituales, operaciones con personas de alto riesgo o de países sancionados."}},
            {"@type": "Question", "name": "¿Qué es una operación interna preocupante?", "acceptedAnswer": {"@type": "Answer", "text": "Una operación interna preocupante es aquella que presenta sospecha fundada de estar relacionada con lavado de dinero o financiamiento al terrorismo. Va más allá de lo inusual e implica elementos que pudieran favorecer la comisión de estos delitos según el Artículo 400 Bis del Código Penal Federal."}},
            {"@type": "Question", "name": "¿Cuándo se reportan las operaciones relevantes?", "acceptedAnswer": {"@type": "Answer", "text": "Las operaciones relevantes se reportan trimestralmente ante la CNBV dentro de los 10 últimos días hábiles de enero, abril, julio y octubre de cada año. Cada reporte incluye todas las operaciones de los 3 meses anteriores."}},
            {"@type": "Question", "name": "¿Qué diferencia hay entre operaciones relevantes, inusuales y preocupantes?", "acceptedAnswer": {"@type": "Answer", "text": "La diferencia principal está en el criterio de reporte: Operaciones Relevantes se basan en monto (≥$7,500 USD); Operaciones Inusuales requieren análisis del perfil transaccional del cliente; Internas Preocupantes implican sospecha fundada de lavado de dinero o terrorismo."}},
            {"@type": "Question", "name": "¿Dónde se reportan las operaciones relevantes, inusuales y preocupantes en México?", "acceptedAnswer": {"@type": "Answer", "text": "Las SOFOMes ENR reportan todos los tipos de operaciones directamente ante la CNBV (Comisión Nacional Bancaria y de Valores) a través del portal SITI. La CNBV posteriormente remite esta información a la UIF (Unidad de Inteligencia Financiera)."}}
          ]
        }
        </script>
        SCHEMA;

        return $this->renderPage('articulos/reportes_regulatorios', [
            'pageTitle'       => 'Catálogos RIPS F36 CNBV: Operaciones Relevantes, Inusuales e Internas Preocupantes | Guía ' . date('Y'),
            'pageDescription' => 'Catálogos RIPS F36 CNBV oficiales: 6 catálogos para reportes de Operaciones Relevantes (≥$7,500 USD), Inusuales e Internas Preocupantes. Layouts de 36 campos, plazos, formatos y ejemplos prácticos para SOFOM ENR.',
            'pageKeywords'    => 'catálogos rips f36 cnbv, operaciones relevantes inusuales preocupantes cnbv, pld sofom, reportes regulatorios, rips f36, catálogos cnbv sofom enr',
            'canonicalUrl'    => 'https://sofomes.com/reportes-regulatorios-cnbv',
            'activeMenu'      => 'reportes',
            'schemaJson'      => $schemaJson,
        ]);
    }

    public function layoutReportesPld(): string
    {
        return $this->renderPage('articulos/layout_reportes_pld', [
            'pageTitle'       => 'Layout 36 Campos RIPS F36 CNBV ' . date('Y') . ' | Formato Oficial Reportes PLD/FT SOFOMes',
            'pageDescription' => 'Layout oficial de 36 campos del formato RIPS F36 CNBV para reportes PLD/FT de SOFOMes ENR. Detalle de cada campo, validaciones y ejemplos prácticos.',
            'pageKeywords'    => 'layout rips f36, 36 campos cnbv, formato reportes pld, layout pld sofom, campos rips cnbv',
            'canonicalUrl'    => 'https://sofomes.com/layout-reportes-pld',
            'activeMenu'      => 'reportes',
        ]);
    }

    public function mejoresSofomes(): string
    {
        $schemaJson = <<<'SCHEMA'
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "Mejores SOFOMes en México 2025: Top 10 Ranking y Análisis Completo",
          "description": "Ranking completo de las mejores SOFOMes en México 2025 con análisis de tasas, aprobación, portafolio, y reputación.",
          "author": {"@type": "Organization", "name": "SOFOMes.com"},
          "publisher": {"@type": "Organization", "name": "SOFOMes.com", "logo": {"@type": "ImageObject", "url": "https://sofomes.com/assets/img/logo.png"}},
          "datePublished": "2025-01-15",
          "dateModified": "2025-01-15"
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ItemList",
          "name": "Top 10 Mejores SOFOMes México 2025",
          "description": "Ranking de las mejores SOFOMes en México basado en portafolio, tasas, aprobación, y reputación",
          "itemListElement": [
            {"@type": "ListItem", "position": 1, "item": {"@type": "Organization", "name": "Konfío", "description": "SOFOM ENR líder en crédito empresarial PyME con $1.3B en fondeo y tecnología de punta"}},
            {"@type": "ListItem", "position": 2, "item": {"@type": "Organization", "name": "Kueski", "description": "SOFOM ENR Top 250 Fintech mundial, especializada en crédito al consumo digital"}},
            {"@type": "ListItem", "position": 3, "item": {"@type": "Organization", "name": "Crédito Real", "description": "SOFOM ER líder con IPO en BMV, portafolio $15B y operación en México y LATAM"}}
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {"@type": "Question", "name": "¿Cuál es la mejor SOFOM en México 2025?", "acceptedAnswer": {"@type": "Answer", "text": "Depende de tu necesidad: Para crédito empresarial PyME, Konfío (ENR, $1.3B fondeo, 70% aprobación). Para crédito al consumo digital, Kueski (ENR, Top 250 Fintech). Para grandes montos corporativos, Crédito Real (ER, $15B portafolio, IPO BMV)."}},
            {"@type": "Question", "name": "¿Cómo verificar que una SOFOM es confiable?", "acceptedAnswer": {"@type": "Answer", "text": "Verifica: 1) Registro activo en CONDUSEF, 2) RFC y razón social coinciden, 3) Reportes trimestrales PLD/FT presentados, 4) Oficinas físicas verificables, 5) Opiniones reales en Google Maps/Trustpilot, 6) Transparencia en tasas y comisiones."}},
            {"@type": "Question", "name": "¿Qué tasas cobran las mejores SOFOMes?", "acceptedAnswer": {"@type": "Answer", "text": "Varían por tipo: Crédito empresarial PyME: 18-45% anual (Konfío 24-36%). Crédito al consumo: 40-120% anual (Kueski 50-90%). Factoraje: 15-30% anual. Automotriz: 12-24% anual. Hipotecario: 10-18% anual."}}
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://sofomes.com/"},
            {"@type": "ListItem", "position": 2, "name": "Mejores SOFOMes México 2025", "item": "https://sofomes.com/mejores-sofomes-mexico-2025"}
          ]
        }
        </script>
        SCHEMA;

        return $this->renderPage('articulos/mejores_sofomes', [
            'pageTitle'       => 'Mejores SOFOMes México ' . date('Y') . ': Top 10 Ranking + Análisis | Guía Completa',
            'pageDescription' => 'Top 10 SOFOMes México ' . date('Y') . ': Konfío ($1.3B), Kueski (Top 250 Fintech), Crédito Real ($15B). Análisis exhaustivo: tasas, aprobación, opiniones reales, verificación CONDUSEF.',
            'pageKeywords'    => 'mejores sofomes mexico, top sofomes ' . date('Y') . ', ranking sofomes, konfio, kueski, credito real, sofom confiable, tasas sofom, aprobacion sofom',
            'canonicalUrl'    => 'https://sofomes.com/mejores-sofomes-mexico-2025',
            'schemaJson'      => $schemaJson,
        ]);
    }

    public function softwarePld(): string
    {
        $schemaJson = <<<'SCHEMA'
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "HowTo",
          "name": "Cómo Implementar Software PLD/FT para SOFOM según CNBV",
          "description": "Guía paso a paso para cumplir con los requisitos de sistema automatizado PLD/FT establecidos por la CNBV para SOFOMes ENR y ER.",
          "totalTime": "P90D",
          "estimatedCost": {"@type": "MonetaryAmount", "currency": "MXN", "value": "500000"},
          "step": [
            {"@type": "HowToStep", "name": "Evaluar requisitos regulatorios", "text": "Revisar las 11 funciones obligatorias establecidas en las Disposiciones de Carácter General de la CNBV"},
            {"@type": "HowToStep", "name": "Seleccionar proveedor de software", "text": "Comparar opciones de software que cumplan con las 53 preguntas del checklist del dictamen técnico"},
            {"@type": "HowToStep", "name": "Obtener dictamen técnico", "text": "Contratar perito certificado por CNBV para evaluar el sistema ($30,241 costo oficial)"},
            {"@type": "HowToStep", "name": "Implementar y parametrizar", "text": "Configurar alertas, catálogos RIPS, listas bloqueadas, expedientes KYC"},
            {"@type": "HowToStep", "name": "Capacitar al Oficial de Cumplimiento", "text": "Certificación CNBV obligatoria (100 hrs curso + examen + registro)"}
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {"@type": "Question", "name": "¿Cuánto cuesta un software PLD/FT para SOFOM?", "acceptedAnswer": {"@type": "Answer", "text": "El costo varía según volumen de operaciones: Setup $50K-$200K MXN + Licenciamiento anual $100K-$1M MXN. El dictamen técnico CNBV cuesta $30,241 (fijo). Total primer año: $180K-$1.2M MXN."}},
            {"@type": "Question", "name": "¿Qué son las 11 funciones obligatorias del software PLD/FT?", "acceptedAnswer": {"@type": "Answer", "text": "Las 11 funciones obligatorias incluyen: conservación de expedientes KYC, transmisión de reportes a UIF/CNBV, clasificación de operaciones, detección y monitoreo, sistema de alertas, análisis de operaciones inusuales, base consolidada de clientes, registros históricos, reporte interno seguro, seguridad de la información, metodología de riesgo, y alertas de PPE/Listas Bloqueadas."}},
            {"@type": "Question", "name": "¿Es obligatorio el software PLD/FT para SOFOMes ENR?", "acceptedAnswer": {"@type": "Answer", "text": "Sí, es obligatorio tanto para SOFOM ER como ENR. La falta de sistema automatizado puede resultar en cancelación del registro CONDUSEF y multas millonarias por parte de la CNBV."}},
            {"@type": "Question", "name": "¿Qué es el dictamen técnico CNBV para software PLD/FT?", "acceptedAnswer": {"@type": "Answer", "text": "Es una evaluación realizada por un perito certificado por la CNBV que verifica que el software cumple con las 53 preguntas del checklist oficial. Costo: $30,241. Vigencia: 2 años. Obligatorio para operar como SOFOM."}}
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "TechArticle",
          "headline": "Software PLD/FT para SOFOMes: Requisitos CNBV",
          "description": "Guía técnica completa de sistemas automatizados PLD/FT obligatorios para SOFOMes según CNBV",
          "author": {"@type": "Organization", "name": "SOFOMES.COM"},
          "publisher": {"@type": "Organization", "name": "SOFOMES.COM", "logo": {"@type": "ImageObject", "url": "https://sofomes.com/assets/img/logo_sofomes.png"}},
          "datePublished": "2025-01-10",
          "dateModified": "2025-01-10"
        }
        </script>
        SCHEMA;

        return $this->renderPage('articulos/software_pld', [
            'pageTitle'       => 'Software PLD/FT para SOFOMes: Requisitos CNBV ' . date('Y') . ' | 11 Funciones Obligatorias',
            'pageDescription' => 'Sistema automatizado PLD/FT obligatorio para SOFOMes: 11 funciones CNBV, checklist dictamen técnico (53 preguntas), costos implementación $100K-$1M/año. Guía completa ' . date('Y') . '.',
            'pageKeywords'    => 'software pld/ft sofom, requisitos cnbv, dictamen tecnico, sistema automatizado, oficial cumplimiento, disposiciones cnbv, kyc sofom',
            'canonicalUrl'    => 'https://sofomes.com/software-pld-ft-requisitos-cnbv',
            'activeMenu'      => 'software-pld',
            'schemaJson'      => $schemaJson,
        ]);
    }
}
