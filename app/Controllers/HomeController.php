<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        // Leer total de SOFOMes desde caché
        $sofomesTotal = '2,000+';
        $cacheFile = WRITEPATH . 'cache/condusef-cache.json';

        if (file_exists($cacheFile)) {
            $cacheData = json_decode(file_get_contents($cacheFile), true);
            if (isset($cacheData['total']) && $cacheData['total'] > 0) {
                $sofomesTotal = number_format($cacheData['total'], 0, '.', ',');
            }
        }

        $year = date('Y');

        $schemaJson = <<<SCHEMA
        <!-- Schema.org - Organization -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "SOFOMES.COM",
            "url": "https://sofomes.com",
            "logo": "https://sofomes.com/assets/logo.png",
            "description": "Directorio y guía completa de SOFOMes en operación en México. Datos actualizados desde CONDUSEF.",
            "foundingDate": "{$year}",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer service",
                "availableLanguage": "Spanish"
            }
        }
        </script>

        <!-- Schema.org - WebSite -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "SOFOMES.COM",
            "url": "https://sofomes.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://sofomes.com/lista-sofomes-mexico?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>

        <!-- Schema.org - BreadcrumbList -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Inicio",
                    "item": "https://sofomes.com/"
                }
            ]
        }
        </script>

        <!-- Schema.org - HowTo (Constituir SOFOM) -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "HowTo",
            "name": "Cómo Constituir una SOFOM ENR en México",
            "description": "Proceso completo paso a paso para constituir una SOFOM ENR (Entidad No Regulada) en México, con costos reales y plazos regulatorios verificables.",
            "totalTime": "P4M",
            "estimatedCost": {
                "@type": "MonetaryAmount",
                "currency": "MXN",
                "value": "285000",
                "minValue": "85000",
                "maxValue": "500000"
            },
            "step": [
                {
                    "@type": "HowToStep",
                    "position": 1,
                    "name": "Denominación Social",
                    "text": "Solicitud a la Secretaría de Economía (SE). Debe incluir 'S.A. DE C.V. SOFOM E.N.R.' en la razón social.",
                    "url": "https://sofomes.com/#constituir",
                    "estimatedTime": "P7D"
                },
                {
                    "@type": "HowToStep",
                    "position": 2,
                    "name": "Opinión CONDUSEF",
                    "text": "Solicitar opinión para uso de denominación SOFOM en SIPRES (Sistema de Registro de Prestadores de Servicios Financieros).",
                    "url": "https://sofomes.com/#constituir",
                    "estimatedTime": "P30D"
                },
                {
                    "@type": "HowToStep",
                    "position": 3,
                    "name": "Constitución Notarial",
                    "text": "Acta constitutiva con objeto social específico, estatutos, y capital social mínimo de 50K UDIS.",
                    "url": "https://sofomes.com/#constituir",
                    "estimatedTime": "P30D",
                    "monetaryRequirement": {
                        "@type": "MonetaryAmount",
                        "currency": "MXN",
                        "value": "65000",
                        "minValue": "50000",
                        "maxValue": "80000"
                    }
                },
                {
                    "@type": "HowToStep",
                    "position": 4,
                    "name": "Dictamen Técnico CNBV",
                    "text": "Perito certificado evalúa sistema automatizado PLD/FT con checklist de 53 preguntas. Costo oficial: $30,241 MXN.",
                    "url": "https://sofomes.com/software-pld-ft-requisitos-cnbv",
                    "estimatedTime": "P50D",
                    "monetaryRequirement": {
                        "@type": "MonetaryAmount",
                        "currency": "MXN",
                        "value": "30241"
                    }
                },
                {
                    "@type": "HowToStep",
                    "position": 5,
                    "name": "Contrato SIC CONDUSEF",
                    "text": "Contratar con Sociedad de Información Crediticia (Buró de Crédito o Círculo de Crédito) para consulta de historial crediticio de clientes.",
                    "url": "https://sofomes.com/#constituir"
                },
                {
                    "@type": "HowToStep",
                    "position": 6,
                    "name": "Inscripción SIPRES",
                    "text": "Registro oficial en Sistema de Registro de Prestadores de Servicios Financieros de CONDUSEF.",
                    "url": "https://sofomes.com/#constituir",
                    "estimatedTime": "P10D"
                },
                {
                    "@type": "HowToStep",
                    "position": 7,
                    "name": "Clave SITI PLD/FT",
                    "text": "Registro en Sistema Integral de Tecnología e Información de la Unidad de Inteligencia Financiera (UIF) para reportes PLD/FT.",
                    "url": "https://sofomes.com/#constituir",
                    "estimatedTime": "P7D"
                }
            ],
            "tool": [
                {
                    "@type": "HowToTool",
                    "name": "Software PLD/FT Automatizado",
                    "description": "Sistema automatizado obligatorio para cumplimiento de Prevención de Lavado de Dinero y Financiamiento al Terrorismo. Debe cubrir 11 funciones obligatorias según CNBV."
                },
                {
                    "@type": "HowToTool",
                    "name": "Certificación Oficial de Cumplimiento",
                    "description": "Curso CNBV obligatorio de 100 horas + examen + registro. Costo: \$16,558 MXN."
                }
            ],
            "supply": [
                {
                    "@type": "HowToSupply",
                    "name": "Capital Social",
                    "description": "Capital práctico recomendado: 50 millones de pesos para viabilidad operativa real (aunque legalmente no hay mínimo para SOFOM ENR)."
                },
                {
                    "@type": "HowToSupply",
                    "name": "Asesoría Legal Especializada",
                    "description": "Constitución + manuales + políticas + representación regulatoria. Costo: \$100,000 - \$300,000 MXN."
                }
            ]
        }
        </script>

        <!-- Schema.org - ItemList (Casos de Éxito) -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "Casos de Éxito: 5 SOFOMes que Debes Conocer",
            "description": "Ejemplos reales de SOFOMes exitosas en México con datos verificables y métricas de desempeño.",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@type": "Organization",
                        "name": "Konfío",
                        "url": "https://sofomes.com/#casos-exito",
                        "description": "SOFOM enfocada en créditos en línea para PyMEs. Valuación \$1,300M USD (2021). Inversionista: Softbank. Unicornio mexicano.",
                        "foundingDate": "2014",
                        "award": "Top 100 Fintech LATAM 2024"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@type": "Organization",
                        "name": "Kueski",
                        "url": "https://sofomes.com/#casos-exito",
                        "description": "Primera SOFOM E.N.R. 100% digital. Top 250 Fintech mundial (CB Insights 2022). Mejor plataforma BNPL en Fintech Breakthrough Awards 2023.",
                        "foundingDate": "2012",
                        "award": "Top 250 Fintech Mundial"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "item": {
                        "@type": "Organization",
                        "name": "Crédito Para Ti",
                        "url": "https://sofomes.com/#casos-exito",
                        "description": "SOFOM especializada en créditos FOVISSSTE para trabajadores del gobierno. #1 en financiamiento hipotecario para servidores públicos.",
                        "award": "Insignia CONDUSEF de Adultos Mayores"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "item": {
                        "@type": "Organization",
                        "name": "Arrendadora y Factor Banorte",
                        "url": "https://sofomes.com/#casos-exito",
                        "description": "SOFOM E.R. del Grupo Financiero Banorte. Líder en arrendamiento y factoraje financiero para empresas.",
                        "award": "Regulación CNBV Integral"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "item": {
                        "@type": "Organization",
                        "name": "Cetelem",
                        "url": "https://sofomes.com/#casos-exito",
                        "description": "SOFOM E.R. con desempeño excepcional. Índice de Reclamación (IR) de solo 2.82 por cada 10,000 contratos, muy por debajo del promedio sectorial de 18.45.",
                        "award": "Bajo Índice de Quejas"
                    }
                }
            ]
        }
        </script>

        <!-- Schema.org - Table (Comparativa ER vs ENR) -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Table",
            "about": {
                "@type": "Thing",
                "name": "Comparativa SOFOM ER vs ENR",
                "description": "Tabla comparativa de características entre SOFOM Entidad Regulada (ER) y SOFOM Entidad No Regulada (ENR) en México."
            },
            "name": "SOFOM ER vs ENR: Comparativa Completa",
            "description": "Comparación detallada de las diferencias entre SOFOM ER (Entidad Regulada) con 38 entidades (1.8% del mercado) y SOFOM ENR (Entidad No Regulada) con 2,038 entidades (98.2% del mercado).",
            "url": "https://sofomes.com/#que-es"
        }
        </script>

        <!-- Schema.org - FAQPage -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "¿Cuántas SOFOMes hay en México en {$year}?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Según el registro SIPRES de CONDUSEF, actualmente operan SOFOMes en operación en México. De estas, el 98.2% son ENR (Entidad No Regulada) y solo el 1.8% son ER (Entidad Regulada con vínculo patrimonial a bancos)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuál es la diferencia entre SOFOM ER y ENR?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SOFOM ER (Entidad Regulada): Tiene vínculo patrimonial con banco o grupo financiero. Regulación CNBV integral. SOFOM ENR (Entidad No Regulada): Sin vínculo con bancos. Solo regulación PLD/FT. Más del 98% del mercado."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto cuesta constituir una SOFOM ENR?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "El costo REAL de constitución oscila entre \$85,000 y \$500,000 MXN, incluyendo: Dictamen Técnico CNBV (\$30,241), Certificación Oficial Cumplimiento (\$16,558), Software PLD/FT automatizado (cientos de miles a millones anuales), Notaría + permisos (\$50K-\$80K), y Asesoría legal especializada (\$100K-\$300K). Capital práctico recomendado: 50 millones de pesos."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Cuánto tiempo tarda constituir una SOFOM?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "El proceso REAL toma 3 a 4 meses si se cumple con toda la documentación y requisitos. Los plazos regulatorios son fijos: Denominación social (1 semana), Opinión CONDUSEF (30 días hábiles), Constitución notarial (30 días), Dictamen Técnico CNBV (50 días), Inscripción SIPRES (10 días), Clave SITI PLD/FT (1 semana)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "¿Qué es una SOFOM FOVISSSTE?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Son 14 SOFOMes autorizadas por FOVISSSTE para gestionar créditos hipotecarios de trabajadores del gobierno. La #1 calificada es Crédito Para Ti. Reducen el tiempo de escrituración de 6 meses a 3 semanas cuando la documentación está completa. La asesoría es 100% gratuita por ley."
                    }
                }
            ]
        }
        </script>
        SCHEMA;

        return $this->renderPage('home/index', [
            'pageTitle'       => '¿Qué es una SOFOM? Guía Completa México ' . $year . ' | Tipos ER y ENR, Ejemplos y Directorio',
            'pageDescription' => "¿Qué es una SOFOM? Sociedad Financiera de Objeto Múltiple que otorga crédito sin captar ahorro. Conoce los 2 tipos (ER y ENR), {$sofomesTotal} SOFOMes en México, ejemplos como Konfío y Kueski, y cómo constituir una.",
            'pageKeywords'    => 'que es una sofom, sofom, sofom que es, sofom enr, sofom er, tipos de sofom, ejemplos de sofomes, sofomes en mexico, constituir sofom, lista sofomes condusef',
            'canonicalUrl'    => 'https://sofomes.com/',
            'activeMenu'      => 'inicio',
            'isHomepage'      => true,
            'sofomesTotal'    => $sofomesTotal,
            'schemaJson'      => $schemaJson,
        ]);
    }
}
