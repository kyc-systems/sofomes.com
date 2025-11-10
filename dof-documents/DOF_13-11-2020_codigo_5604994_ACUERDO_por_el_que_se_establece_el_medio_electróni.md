# ACUERDO por el que se establece el medio electrónico y se expide el formato oficial mediante los cuales se deberá informar a la Comisión Nacional Bancaria y de Valores la suscripción de los convenios de intercambio de información entre entidades del mismo grupo financiero.

**Fecha:** 13/11/2020
**Código:** 5604994
**Fuente:** https://www.dof.gob.mx/nota_detalle.php?codigo=5604994&fecha=13/11/2020

---

# ACUERDO por el que se establece el medio electrónico y se expide el formato oficial mediante los cuales se deberá informar a la Comisión Nacional Bancaria y de Valores la suscripción de los convenios de intercambio de información entre entidades del mismo grupo financiero.

## Al margen un sello con el Escudo Nacional, que dice: Estados Unidos Mexicanos.- HACIENDA.- Secretaría de Hacienda y Crédito Público.- Comisión Nacional Bancaria y de Valores.

NOMBRE DEL CAMPO

ETIQUETA XML

OBLIGATORIEDAD

TIPO DE DATO

FORMATO / MÁSCARA

REGLAS DE NEGOCIO

DATOS DEL INFORME

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </informe>.

DATOS DEL CONVENIO

<datos_convenio>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </datos_convenio>

FECHA DE LA FIRMA DEL CONVENIO CELEBRADO

<fecha_firma>

Obligatorio

Patrón: AAAAMMDD

VXSD: El campo es obligatorio. VXSD: La longitud es de 8 caracteres. VXSD: El campo es numérico y sigue el patrón aaaammdd que representa el formato de fecha, donde: - AAAA corresponde al año en 4 dígitos. - MM mes a dos dígitos. - DD día a dos dígitos. VXSD: Se debe encontrar el cierre de etiqueta </fecha_firma> VC21R1: La fecha debe ser menor a la fecha de recepción del archivo.

TIPO DE VIGENCIA DEL CONVENIO CELEBRADO

<tipo_vigencia>

Obligatorio

Alfaumérico

VXSD: El campo es obligatorio. VXSD: La longitud es de 2 caracteres. VXSD: Se debe encontrar el cierre de etiqueta </tipo_vigencia> VC22R1: La clave debe corresponder al catálogo provisto por la CNBV siguiente: 01: Duración indefinida. 02: Duración definida.

OBJETO DEL CONVENIO CELEBRADO

<objeto_convenio>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: El campo es alfanumérico. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </objeto_convenio>

FECHA DE INICIO DE LA VIGENCIA DEL CONVENIO CELEBRADO

<inicio_vigencia>

Obligatorio

Patrón: AAAAMMDD

VXSD: El campo es obligatorio. VXSD: La longitud es de 8 caracteres. VXSD: El campo es numérico y sigue el patrón aaaammdd que representa el formato de fecha, donde: - AAAA corresponde al año en 4 dígitos. - MM mes a dos dígitos. - DD día a dos dígitos VXSD: Se debe encontrar el cierre de etiqueta </inicio_vigencia> VC24R1: La fecha debe ser menor a la fecha de recepción del archivo.

FECHA DE FIN DE LA VIGENCIA DEL CONVENIO CELEBRADO

<fin_vigencia>

Obligatorio

Patrón: AAAAMMDD

VXSD: El campo es obligatorio. VXSD: La longitud es de 8 caracteres. VXSD: El campo es numérico y sigue el patrón aaaammdd que representa el formato de fecha, donde: - AAAA corresponde al año en 4 dígitos. - MM mes a dos dígitos. - DD día a dos dígitos VXSD: Se debe encontrar el cierre de etiqueta </fin_vigencia> VC25R1: La fecha debe ser 99999999 en caso de que el contrato sea de duración indefinida.

DATOS DEL GRUPO FINANCIERO AL QUE PERTENECE

<datos_grupo_financiero>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </ datos_grupo_financiero>

CLAVE DEL GRUPO FINANCIERO AL QUE PERTENECE

<clave_grupo_financiero>

Obligatorio

Alfanumérico

Formato:"sector-entidad" Patrón: 99-999

VXSD: El campo es obligatorio. VXSD: La longitud es de 6 caracteres. VXSD: El campo es alfanumérico y sigue el patrón 99-999 que representa el formato sector-entidad. Donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </ clave_entidad_comparte> VC52R1: La clave del campo debe ser de acuerdo al catálogo CASFIM para Sociedades Controladoras y Subcontroladoras.

NOMBRE DEL GRUPO FINANCIERO AL QUE PERTENECE

<nombre_grupo_financiero>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 60. VXSD: El campo es alfanumérico. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </nombre_grupo_financiero>

DATOS DE LA ENTIDAD QUE COMPARTE LA INFORMACIÓN

<datos_entidad_comparte>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </ datos_entidad_comparte>

DENOMINACIÓN DE LA ENTIDAD INTEGRANTE QUE COMPARTE LA INFORMACION

<nombre_entidad_comparte>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </nombre_entidad_comparte>

CLAVE DE LA ENTIDAD QUE COMPARTE LA INFORMACIÓN

<clave_entidad_comparte>

Obligatorio

Alfanumérico

Formato:"sector-entidad" Patrón: 99-999

VXSD: El campo es obligatorio. VXSD: La longitud es de 6 caracteres. VXSD: El campo es alfanumérico y sigue el patrón 99-999 que representa el formato sector-entidad. Donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </ clave_entidad_comparte> VC52R1: La clave del campo debe ser de acuerdo al catálogo CASFIM para entidades financieras.

CARGO O CARGOS DEL FUNCIONARIO O FUNCIONARIOS AUTORIZADOS DE LA ENTIDAD PARA REALIZAR EL INTERCAMBIO DE INFORMACIÓN

<cargo_ funcionario_autorizado_entida d_comparte>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria VXSD: Se debe encontrar una etiqueta </ cargo_funcionario_autorizado_ entidad_comparte> por cada persona que se encuentre autorizada para realizar el intercambio de información. VXSD: Se debe encontrar el cierre de etiqueta </ cargo_funcionario_autorizado_ entidad_comparte>

NOMBRE DEL CARGO DEL FUNCIONARIO O FUNCIONARIOS AUTORIZADOS DE LA ENTIDAD PARA REALIZAR EL INTERCAMBIO DE INFORMACIÓN

<nombre_cargo_ funcionario_autorizado_entida d_comparte>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 60. VXSD: El campo es alfanumérico. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </nombre_cargo_funcionario_ autorizado_entidad_comparte>

DATOS DE LA ENTIDAD INTEGRANTE DEL GRUPO FINANCIERO QUE RECIBE LA INFORMACIÓN

<datos_entidad_recibe>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria. VXSD: Se debe encontrar el cierre de etiqueta </datos_entidad_recibe>

DENOMINACIÓN DE LA ENTIDAD INTEGRANTE DEL GRUPO FINANCIERO QUE RECIBE LA INFORMACIÓN

<nombre_entidad_recibe>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 300. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </nombre_entidad_recibe >

CLAVE DE LA ENTIDAD QUE RECIBE LA INFORMACIÓN

<clave_entidad_recibe>

Obligatorio

Alfanumérico

Formato:"sector-entidad" Patrón: 99-999

VXSD: El campo es obligatorio. VXSD: La longitud es de 6 caracteres. VXSD: El campo es alfanumérico y sigue el patrón 99-999 que representa el formato sector-entidad. Donde 9 corresponde a un caracter del 0-9. VXSD: Se debe encontrar el cierre de etiqueta </clave_entidad_recibe> VC52R1: La clave del campo debe ser de acuerdo al catálogo CASFIM para entidades financieras.

CARGO O CARGOS DEL FUNCIONARIO O FUNCIONARIOS AUTORIZADOS DE LA ENTIDAD QUE RECIBE LA INFORMACIÓN

<persona_autorizada_entidad _recibe>

Obligatorio

Etiqueta XML

VXSD: La etiqueta es obligatoria VXSD: Se debe encontrar una etiqueta <persona_autorizada_entidad_recibe > por cada persona que se encuentre autorizada para realizar el intercambio de información. VXSD: Se debe encontrar el cierre de etiqueta </ persona_autorizada_entidad_recibe>

NOMBRE DEL CARGO DEL FUNCIONARIO O FUNCIONARIOS AUTORIZADOS DE LA ENTIDAD QUE RECIBE LA INFORMACIÓN

<nombre_cargo_funcionario_ autorizado_entidad_ recibe>

Obligatorio

Alfanumérico

VXSD: El campo es obligatorio. VXSD: La longitud mínima es de 1 caracter y máxima de 60. VXSD: El campo es alfanumérico. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </nombre_cargo_funcionario_autoriz ado_entidad_recibe>

OBSERVACIONES

<observaciones>

Alfanumérico

VXSD: La longitud mínima es de 1 caracter y máxima de 500. VXSD: Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ), apóstrofe ('), punto (.). Nota. Los paréntesis no se incluyen en caracteres permitidos. VXSD: No se aceptan cadenas de caracteres en blanco. VXSD: Se debe encontrar el cierre de etiqueta </observaciones>
