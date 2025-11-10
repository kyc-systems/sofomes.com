# ACUERDO por el que se expide el formato oficial para el informe de cursos de capacitación en materia de prevención y detección de operaciones con recursos de procedencia ilícita y financiamiento al terrorismo.

**Fecha:** 07/01/2016
**Código:** 5422246
**Fuente:** http://www.dof.gob.mx/nota_detalle.php?codigo=5422246&fecha=07/01/2016

---

# ACUERDO por el que se expide el formato oficial para el informe de cursos de capacitación en materia de prevención y detección de operaciones con recursos de procedencia ilícita y financiamiento al terrorismo.

## Al margen un sello con el Escudo Nacional, que dice: Estados Unidos Mexicanos.- Secretaría de Hacienda y Crédito Público.- Comisión Nacional Bancaria y de Valores.

NOMBRE DEL CAMPO

ETIQUETA XML

OBLIGATORIEDAD

TIPO DE DATO

FORMATO/ MÁSCARA

REGLAS DE NEGOCIO

NOMBRE DEL INFORME

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </informe>

CLAVE DE ORGANO REGULADOR

<clave_organo_regulador>

Obligatorio

Alfanumérico

Formato: "sector- organo regulador" Patrón: 99-999

VXSD: El campo es obligatorio. VXSD: La longitud es de 6 caracteres. VXSD: El campo es alfanumérico y sigue el patrón 99-999 que representa el formato sector-organo_regulador. Donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </clave_organo_regulador> VC1R1: La clave del campo debe ser de acuerdo al catálogo CASFIM para autoridades y organismos reguladores.

CLAVE DEL SUJETO OBLIGADO

<clave_sujeto_obligado>

Obligatorio

Alfaumérico

Formato:"sector- sujetoobligado" Patrón: 99-999999

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 6 caracteres y la máxima de 9. VXSD: El campo es alfanumérico y sigue el patrón 99-999999 que representa el formato sector-sujetoobligado. Donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </clave_sujeto_obligado> VC2R1: La clave del campo debe ser de acuerdo al catálogo CASFIM para entidades financieras. VC2R2: Para el caso de centros cambiarios o transmisores de dinero, se debe de utilizar la clave asignada por la CNBV, conforme a la siguiente nota, es decir indicando la clave del sector compuesta de 2 (dos) dígitos, seguida de un guión al inicio de la clave compuesta por 5 (cinco) dígitos. Por ejemplo si la clave del sujeto obligado es 20001 y la clave del sector es 89, se capturará de la siguiente forma: 89-20001. NOTA: Para formar la clave, se indica la clave del sector compuesta de 2 (dos) dígitos seguidos por un guión y la clave de la institución conformada por 5 o 6 dígitos.

PERIODO INFORMADO

<periodo_informado>

Obligatorio

Alfanumérico

Formato: "año" Patrón: AAAA

VXSD: El campo es obligatorio. VXSD: La longitud es de 4 caracteres. VXSD: El campo es alfanumérico y sigue el patrón AAAA que representa el formato año, donde: - AAAA debe corresponder al año reportado. VXSD: Se debe encontrar el cierre de etiqueta </periodo_informado>

DATOS DE LA CAPACITACION

<datos_capacitacion>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </datos_capacitacion>

DATOS DEL PROGRAMA ANUAL DE CAPACITACION

<programa_anual>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </programa_anual>

CURSOS PROGRAMADOS

<cursos_programados>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </cursos_programados> VC31R1: Debe existir una etiqueta <cursos_programados> por cada curso que se informe dentro del archivo.

TIPO DE CAPACITACION

<tipo_capacitacion>

Obligatorio

VXSD: La etiqueta es obligatoria. VXSD: La longitud es de 2 caracteres. VXSD: El campo es alfanumérico y sigue el patrón 99, donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar una etiqueta <tipo_capacitacion> por cada capacitación programada. VXSD: Se debe encontrar el cierre de etiqueta </tipo_capacitacion> VC1R1: La clave del campo debe ser de acuerdo al catálogo CAPACITACION provisto por la CNBV.

NOMBRE DE LA CAPACITACION

<nombre_capacitacion>

Obligatorio

Alfanumérico

VXSD: La etiqueta es obligatoria. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: El campo es alfanumérico. VXSD: Unicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe ('). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar una etiqueta <nombre_capacitacion> por cada capacitación programada. VXSD: Se debe encontrar el cierre de etiqueta </nombre_capacitacion>

INICIO DEL PERIODO EN QUE SE IMPARTIRA LA CAPACITACION

<fecha_inicio_imparticion>

Obligatorio

Alfanumérico

Formato: "año-mes" Patrón: AAAA-MM

VXSD: El campo es obligatorio. VXSD: La longitud es de 7 caracteres. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de inicio. - MM debe corresponder al mes reportado de inicio. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de cierre. - MM debe corresponder al mes reportado de cierre. VXSD: Se debe encontrar el cierre de etiqueta </fecha_inicio_imparticion>. VC6R1: El mes reportado deberá ser mayor o igual al mes en curso.

FIN DEL PERIODO EN QUE SE IMPARTIRA LA CAPACITACION

<fecha_fin_imparticion>

Obligatorio

Alfanumérico

Formato: "año-mes" Patrón: AAAA-MM

VXSD: El campo es obligatorio. VXSD: La longitud es de 7 caracteres. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de inicio. - MM debe corresponder al mes reportado de inicio. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de cierre. - MM debe corresponder al mes reportado de cierre. VXSD: Se debe encontrar el cierre de etiqueta </fecha_fin_imparticion>. VC6R1: El mes reportado deberá ser mayor o igual al mes en curso.

AREAS DEL SUJETO OBLIGADO QUE RECIBIRAN LA CAPACITACION

<areas_capacitacion>

Alfanumérico

VXSD: La etiqueta es opcional. VXSD: La longitud máxima es de 500 caracteres. VXSD: El campo es alfanumérico. VXSD: Unicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe ('). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Debe existir una etiqueta por cada área que tomará la capacitación. VXSD: Se debe encontrar el cierre de etiqueta </areas_capacitacion>

TOTAL ESTIMADO DE PERSONAS QUE RECIBIRAN LA CAPACITACION

<total_personas>

Obligatorio

Patrón: 999999

VXSD: La etiqueta es obligatoria. VXSD: La longitud mínima es de 1 caracter y la máxima de 6. VXSD: El campo es numérico y sigue el patrón 999999, donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </total_personas>

DATOS DE LA CAPACITACION DEL AÑO INMEDIATO ANTERIOR

<capacitacion_ano_anterior >

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </capacitacion_ano_anterior>.

CURSOS EFECTUADOS

<cursos_efectuados>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </cursos_efectuados>

TIPO DE CAPACITACION

<tipo_capacitacion>

Obligatorio

VXSD: La etiqueta es obligatoria. VXSD: El campo es alfanumérico y sigue el patrón 99, donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar una etiqueta <tipo_capacitacion> por cada capacitación efectuada. VXSD: Se debe encontrar el cierre de etiqueta </tipo_capacitacion> VC7R1: La clave del campo debe ser de acuerdo al catálogo CAPACITACION provisto por la CNBV.

NOMBRE DE LA CAPACITACION

<nombre_capacitacion>

Obligatorio

Alfanumérico

VXSD: La etiqueta es obligatoria. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: El campo es alfanumérico. VXSD: Unicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe ('). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar una etiqueta <nombre_capacitacion> por cada capacitación efectuada. VXSD: Se debe encontrar el cierre de etiqueta </nombre_capacitacion>

INICIO DEL PERIODO EN QUE SE IMPARTIO LA CAPACITACION

<fecha_inicio_imparticion>

Obligatorio

Alfanumérico

Formato: "año-mes" Patrón: AAAA-MM

VXSD: El campo es obligatorio. VXSD: La longitud es de 7 caracteres. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de inicio. - MM debe corresponder al mes reportado de inicio. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de cierre. - MM debe corresponder al mes reportado de cierre. VXSD: Se debe encontrar el cierre de etiqueta </fecha_inicio_imparticion>.

FIN DEL PERIODO EN QUE SE IMPARTIO LA CAPACITACION

<fecha_fin_imparticion>

Obligatorio

Alfanumérico

Formato: "año-mes" Patrón: AAAA-MM

VXSD: El campo es obligatorio. VXSD: La longitud es de 7 caracteres. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de inicio. - MM debe corresponder al mes reportado de inicio. VXSD: El campo es alfanumérico y sigue el patrón AAAA-MM que representa el formato año-mes, donde: - AAAA debe corresponder al año del mes reportado de cierre. - MM debe corresponder al mes reportado de cierre. VXSD: Se debe encontrar el cierre de etiqueta </fecha_fin_imparticion>.

AREAS DEL SUJETO OBLIGADO QUE RECIBIERON LA CAPACITACION

<areas_capacitadas>

Alfanumérico

VXSD: La etiqueta es opcional. VXSD: La longitud máxima es de 300 caracteres. VXSD: El campo es alfanumérico. VXSD: Unicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe ('). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Debe existir una etiqueta por cada área que tomó la capacitación. VXSD: Se debe encontrar el cierre de etiqueta </areas_capacitadas>

TOTAL DE PERSONAS QUE RECIBIERON LA CAPACITACION

<total_personas_capacitada s>

Obligatorio

Patrón: 999999

VXSD: La etiqueta es obligatoria. VXSD: El campo es numérico y sigue el patrón 999999, donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </total_personas_capacitadas>

DOCUMENTO EMITIDO CON MOTIVO DE LA CAPACITACION

<documento_emitido>

Alfanumérico

VXSD: La etiqueta es opcional. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: El campo es alfanumérico. VXSD: Unicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe ('). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </documento_emitido>.
