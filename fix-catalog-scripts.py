#!/usr/bin/env python3
"""
Fix inline jQuery scripts in catalog pages by moving them to $pageScript variable
"""

import re
import os

catalog_dir = '/Users/isaac/Sites/localhost/sofomes.com/catalogos'
files_to_fix = [
    'instrumento-monetario.php',
    'localidades.php',
    'monedas.php',
    'tipo-operacion-asesor.php',
    'tipo-reporte.php'
]

for filename in files_to_fix:
    filepath = os.path.join(catalog_dir, filename)

    print(f"Processing {filename}...")

    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Find the inline script section
    # Pattern: <script>...</script> followed by <?php include
    pattern = r'(\s*)<script>(.*?)</script>\s*<\?php\s+include\s+'

    def replace_script(match):
        indent = match.group(1)
        script_content = match.group(2)

        # Create the new format with $pageScript variable
        new_format = f"""{indent}<?php
{indent}// Script específico de esta página (se cargará después de jQuery en el footer)
{indent}$pageScript = <<<'SCRIPT'
{indent}<script>{script_content}</script>
{indent}SCRIPT;
{indent}
{indent}include """

        return new_format

    # Apply the replacement
    new_content = re.sub(pattern, replace_script, content, flags=re.DOTALL)

    # Remove the closing ?> tag if it's at the end
    new_content = new_content.rstrip()
    if new_content.endswith('?>'):
        new_content = new_content[:-2].rstrip() + '\n?>\n'

    # Write back
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(new_content)

    print(f"✅ Fixed {filename}")

print("\n✅ All catalog pages fixed!")
