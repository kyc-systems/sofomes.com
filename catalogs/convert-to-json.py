#!/usr/bin/env python3
"""
Convierte catálogos RIPS F36 de formato MD/TXT a JSON
"""
import json
import os
from pathlib import Path

def parse_catalog(file_path):
    """Parse catálogo desde MD/TXT a lista de diccionarios"""
    with open(file_path, 'r', encoding='utf-8') as f:
        lines = f.readlines()

    # Primera línea son los headers
    headers = [h.strip() for h in lines[0].split('\t')]

    # Resto son datos
    data = []
    for line in lines[1:]:
        line = line.strip()
        if not line:
            continue

        values = [v.strip() for v in line.split('\t')]

        # Crear objeto con headers como keys
        item = {}
        for i, header in enumerate(headers):
            if i < len(values):
                # Mantener valores como strings (preservar ceros iniciales)
                value = values[i]
                item[header] = value

        data.append(item)

    return data

def main():
    catalogs_dir = Path(__file__).parent
    output_dir = catalogs_dir / 'json'
    output_dir.mkdir(exist_ok=True)

    # Mapeo de archivos
    files_to_convert = [
        ('cat_actividad_economica.md', 'actividad-economica.json'),
        ('cat_localidad.md', 'localidades.json'),
        ('cat_moneda.md', 'monedas.json'),
        ('cat_tipo_de_operacion_asesor_inversiones.md', 'tipo-operacion-asesor.json'),
        ('cat_tipo_de_operacion_sofom', 'tipo-operacion-sofom.json'),
        ('cat_tipo_reporte.md', 'tipo-reporte.json'),
        ('cat_instrumento_monetario', 'instrumento-monetario.json'),
    ]

    for input_file, output_file in files_to_convert:
        input_path = catalogs_dir / input_file

        if not input_path.exists():
            print(f"⚠️  {input_file} no encontrado")
            continue

        try:
            data = parse_catalog(input_path)

            output_path = output_dir / output_file
            with open(output_path, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=2)

            print(f"✅ {output_file}: {len(data)} registros")

        except Exception as e:
            print(f"❌ Error en {input_file}: {e}")

    print(f"\n📁 Archivos JSON guardados en: {output_dir}")

if __name__ == '__main__':
    main()
