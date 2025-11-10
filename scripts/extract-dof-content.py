#!/usr/bin/env python3
"""
Script para extraer contenido de documentos del DOF (Diario Oficial de la Federación)
y convertirlos a Markdown limpio, eliminando menús, barras laterales y elementos innecesarios.

Uso:
    python3 extract-dof-content.py
"""

import requests
from bs4 import BeautifulSoup
import re
import os
from urllib.parse import urlparse, parse_qs
from datetime import datetime
import time

# Deshabilitar warnings de SSL
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

class DOFExtractor:
    def __init__(self, output_dir="dof-documents"):
        self.output_dir = output_dir
        self.session = requests.Session()
        self.session.headers.update({
            'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36'
        })

        # Crear directorio de salida
        os.makedirs(output_dir, exist_ok=True)

    def clean_text(self, text):
        """Limpia texto eliminando espacios múltiples y líneas vacías"""
        if not text:
            return ""
        # Eliminar espacios múltiples
        text = re.sub(r'\s+', ' ', text)
        # Eliminar espacios al inicio y final
        text = text.strip()
        return text

    def extract_dof_content(self, url):
        """Extrae el contenido principal de una página del DOF"""
        try:
            print(f"\n{'='*80}")
            print(f"Accediendo a: {url}")
            print(f"{'='*80}")

            # Hacer request con SSL verification deshabilitado
            response = self.session.get(url, verify=False, timeout=30)
            response.encoding = 'utf-8'

            if response.status_code != 200:
                print(f"❌ Error: Status code {response.status_code}")
                return None

            # Parsear HTML
            soup = BeautifulSoup(response.text, 'html.parser')

            # Extraer metadatos de la URL
            parsed_url = urlparse(url)
            query_params = parse_qs(parsed_url.query)
            codigo = query_params.get('codigo', ['unknown'])[0]
            fecha = query_params.get('fecha', ['unknown'])[0]

            # Buscar el contenido principal
            # El DOF usa diferentes contenedores, intentar varios selectores
            content_selectors = [
                'div.nota',
                'div#content',
                'div.documento',
                'div.texto',
                'article',
                'main'
            ]

            main_content = None
            for selector in content_selectors:
                main_content = soup.select_one(selector)
                if main_content:
                    break

            if not main_content:
                # Si no encuentra contenedor específico, buscar el body
                main_content = soup.find('body')

            if not main_content:
                print("❌ No se pudo encontrar el contenido principal")
                return None

            # Eliminar elementos innecesarios
            for element in main_content.find_all(['script', 'style', 'nav', 'header', 'footer', 'aside', 'iframe']):
                element.decompose()

            # Eliminar clases de navegación y menús
            for element in main_content.find_all(class_=re.compile(r'(menu|nav|sidebar|banner|footer|header)', re.I)):
                element.decompose()

            # Extraer información estructurada
            document = {
                'url': url,
                'codigo': codigo,
                'fecha': fecha,
                'titulo': '',
                'dependencia': '',
                'contenido': [],
                'metadata': {}
            }

            # Buscar título
            titulo = main_content.find(['h1', 'h2'])
            if titulo:
                document['titulo'] = self.clean_text(titulo.get_text())

            # Buscar dependencia/secretaría
            dependencia_patterns = [
                'SECRETARIA', 'SECRETARÍA', 'COMISION', 'COMISIÓN',
                'BANCO', 'NACIONAL', 'FEDERAL'
            ]
            for p in main_content.find_all('p', limit=10):
                text = p.get_text().upper()
                if any(pattern in text for pattern in dependencia_patterns):
                    document['dependencia'] = self.clean_text(p.get_text())
                    break

            # Extraer todo el texto por párrafos
            for element in main_content.find_all(['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'li', 'td']):
                text = self.clean_text(element.get_text())
                if text and len(text) > 10:  # Ignorar textos muy cortos
                    # Determinar el tipo de elemento
                    tag = element.name
                    if tag.startswith('h'):
                        level = tag[1]
                        document['contenido'].append({
                            'type': 'heading',
                            'level': int(level),
                            'text': text
                        })
                    elif tag == 'li':
                        document['contenido'].append({
                            'type': 'list_item',
                            'text': text
                        })
                    else:
                        document['contenido'].append({
                            'type': 'paragraph',
                            'text': text
                        })

            print(f"✅ Contenido extraído:")
            print(f"   Título: {document['titulo'][:80]}...")
            print(f"   Dependencia: {document['dependencia'][:80]}...")
            print(f"   Elementos de contenido: {len(document['contenido'])}")

            return document

        except requests.exceptions.RequestException as e:
            print(f"❌ Error de red: {e}")
            return None
        except Exception as e:
            print(f"❌ Error procesando: {e}")
            import traceback
            traceback.print_exc()
            return None

    def convert_to_markdown(self, document):
        """Convierte el documento extraído a Markdown"""
        if not document:
            return None

        md_lines = []

        # Header
        md_lines.append(f"# {document['titulo']}")
        md_lines.append("")
        md_lines.append(f"**Fecha:** {document['fecha']}")
        md_lines.append(f"**Código:** {document['codigo']}")
        md_lines.append(f"**Fuente:** {document['url']}")
        md_lines.append("")

        if document['dependencia']:
            md_lines.append(f"**Dependencia:** {document['dependencia']}")
            md_lines.append("")

        md_lines.append("---")
        md_lines.append("")

        # Contenido
        in_list = False
        for item in document['contenido']:
            if item['type'] == 'heading':
                if in_list:
                    md_lines.append("")
                    in_list = False
                level = '#' * item['level']
                md_lines.append(f"{level} {item['text']}")
                md_lines.append("")
            elif item['type'] == 'list_item':
                if not in_list:
                    in_list = True
                md_lines.append(f"- {item['text']}")
            else:  # paragraph
                if in_list:
                    md_lines.append("")
                    in_list = False
                md_lines.append(item['text'])
                md_lines.append("")

        return '\n'.join(md_lines)

    def save_markdown(self, document, markdown_content):
        """Guarda el contenido en un archivo Markdown"""
        if not markdown_content:
            return None

        # Crear nombre de archivo limpio
        fecha = document['fecha'].replace('/', '-')
        codigo = document['codigo']

        # Limpiar título para nombre de archivo
        titulo_clean = re.sub(r'[^\w\s-]', '', document['titulo'][:50])
        titulo_clean = re.sub(r'[\s]+', '_', titulo_clean)

        filename = f"DOF_{fecha}_codigo_{codigo}_{titulo_clean}.md"
        filepath = os.path.join(self.output_dir, filename)

        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(markdown_content)

        print(f"💾 Guardado: {filename}")
        return filepath

    def process_url(self, url):
        """Procesa una URL completa: extrae, convierte y guarda"""
        document = self.extract_dof_content(url)
        if document:
            markdown = self.convert_to_markdown(document)
            if markdown:
                return self.save_markdown(document, markdown)
        return None

def main():
    # Leer links del archivo de análisis
    links_file = "../cnbv-links-analysis.txt"

    if not os.path.exists(links_file):
        print(f"❌ No se encontró el archivo: {links_file}")
        return

    print("📚 Extrayendo contenido de documentos del DOF...")
    print("="*80)

    extractor = DOFExtractor(output_dir="../dof-documents")

    # Leer y filtrar links del DOF
    dof_links = []
    with open(links_file, 'r', encoding='utf-8') as f:
        for line in f:
            line = line.strip()
            # Buscar URLs en la línea (pueden estar precedidas por números)
            if 'dof.gob.mx/nota_detalle.php' in line or 'dof.gob.mx/nota_detalle.php' in line:
                # Extraer la URL de la línea
                import re
                url_match = re.search(r'https?://[^\s]+', line)
                if url_match:
                    dof_links.append(url_match.group(0))

    print(f"📄 Encontrados {len(dof_links)} links del DOF para procesar")
    print()

    if not dof_links:
        print("⚠️  No se encontraron links del DOF en el archivo")
        return

    # Procesar cada link
    success_count = 0
    failed_count = 0

    for i, url in enumerate(dof_links, 1):
        print(f"\n[{i}/{len(dof_links)}] Procesando...")

        result = extractor.process_url(url)

        if result:
            success_count += 1
        else:
            failed_count += 1

        # Pausa entre requests para no saturar el servidor
        if i < len(dof_links):
            time.sleep(2)

    # Resumen final
    print("\n" + "="*80)
    print("📊 RESUMEN DE EXTRACCIÓN")
    print("="*80)
    print(f"✅ Exitosos: {success_count}")
    print(f"❌ Fallidos: {failed_count}")
    print(f"📁 Archivos guardados en: {extractor.output_dir}/")
    print()

if __name__ == "__main__":
    main()
