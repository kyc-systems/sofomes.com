# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**sofomes.com** is a Spanish-language SEO-focused informational website about SOFOMes (Sociedades Financieras de Objeto Múltiple) in Mexico. It serves as a directory of SOFOMes, a guide on CNBV regulatory catalogs (RIPS F36/F41), PLD/FT compliance reporting, and financial regulation resources.

**Domain:** sofomes.com | **Language:** es-MX | **Stack:** PHP + vanilla HTML/CSS/JS (no framework, no build step)

## Architecture

### Page Rendering Pattern

Every PHP page follows the same structure:
1. Define page variables (`$pageTitle`, `$pageDescription`, `$pageKeywords`, `$canonicalUrl`, `$activeMenu`)
2. Optionally set `$useDatatables = true` for pages with data tables
3. Optionally define `$schemaJson` for JSON-LD structured data
4. `include 'includes/header.php'` — outputs `<!DOCTYPE html>` through `<main id="main-content">`
5. Page-specific HTML content
6. `include 'includes/footer.php'` — closes `</main>`, adds footer, scripts, `</html>`

### Key Includes

- **`includes/header.php`** — Full `<head>`, nav bar, auto-calculates `$basePath` (relative path) based on file depth. Auto-generates canonical URL. Loads Google Analytics (`G-1Q8YFKJTFT`), Cliengo chat (deferred 2s).
- **`includes/footer.php`** — Footer, conditionally loads jQuery + DataTables if `$useDatatables` is set, injects `$pageScript` if set.
- **`includes/dataset-schema.php`** — `generateDatasetSchema()` and `generateDownloadButton()` helpers for catalog pages.

### URL Routing

Handled via `.htaccess` mod_rewrite:
- Extension-less URLs: `/catalogos/monedas` resolves to `catalogos/monedas.php`
- `.html` → `.php` 301 redirects (production only)
- HTTPS + www→non-www redirects (production only)
- Local dev uses base path `/sofomes.com/`, production uses `/`

### Directory Structure

```
/                          Root-level content pages (.php)
/includes/                 Shared header, footer, schema helper
/api/                      CONDUSEF SIPRES proxy with 24h JSON cache
/catalogos/                Legacy catalog pages (ENR/F36) — still indexed
/catalogos-enr/            SOFOM ENR catalogs (F36 format)
/catalogos-er/             SOFOM ER catalogs (F41 format)
/catalogs/json/            JSON data files for catalogs (downloadable)
/assets/css/main.css       Primary stylesheet (CSS custom properties)
/assets/js/                main.js, personalization.js, condusef-fetch.js
/docs/                     Strategy docs, keyword research, PDFs
```

### Main Content Pages

| File | URL | Purpose |
|------|-----|---------|
| `index.php` | `/` | Homepage — "¿Qué es una SOFOM?" guide |
| `lista-sofomes-mexico.php` | `/lista-sofomes-mexico` | Full SOFOM directory (CONDUSEF data) |
| `sofom-er-vs-enr.php` | `/sofom-er-vs-enr` | ER vs ENR comparison |
| `catalogos-rips.php` | `/catalogos-rips` | Hub for all RIPS catalogs |
| `reportes-regulatorios-cnbv.php` | `/reportes-regulatorios-cnbv` | PLD/FT reporting guide |
| `layout-reportes-pld.php` | `/layout-reportes-pld` | 36-field layout reference |
| `software-pld-ft-requisitos-cnbv.php` | `/software-pld-ft-requisitos-cnbv` | PLD/FT software guide |
| `mejores-sofomes-mexico-2025.php` | `/mejores-sofomes-mexico-2025` | Top 10 SOFOMes ranking |

### API Layer

`api/condusef-proxy.php` — Server-side proxy to CONDUSEF SIPRES. Caches results in `api/condusef-cache.json` (24h TTL). Parameters: `psec=69,68` (SOFOM ENR+ER sectors), `psta=60` (active status). Force refresh with `?refresh=true`.

## Development

### Local Setup

Apache with PHP (MAMP, XAMPP, or similar). No npm/composer dependencies required.

- Local base URL: `http://localhost/sofomes.com/`
- Production: `https://sofomes.com/`
- The `.htaccess` auto-detects environment by hostname

### CSS Design System

Single stylesheet at `assets/css/main.css` using CSS custom properties:
- Primary brand: `--primary-500: #042c64` (azul corporativo)
- Success/accent: `--success-500: #10B981`
- 60-30-10 rule: neutral backgrounds (60%), blue structure (30%), green accents (10%)
- Responsive: mobile-first approach

### DataTables

Pages with sortable/searchable tables set `$useDatatables = true` before including header. jQuery and DataTables CSS/JS are loaded conditionally via footer.

## Content Guidelines

- All content is in Spanish (es-MX)
- Official CNBV/CONDUSEF terminology must be used exactly (e.g., "Operaciones Relevantes", not abbreviated)
- Per `llms.txt`: never use unofficial abbreviations (ROS, ROIN, ROIP, DO, RI, ROR)
- Schema.org JSON-LD is embedded per page via `$schemaJson` variable
- SEO meta tags must include `$pageTitle`, `$pageDescription`, and `$pageKeywords`

## Hosting / Deployment

Shared hosting with cPanel/FTP. No CI/CD pipeline. File permissions: directories 755, files 644. See `INSTRUCCIONES-HOSTING.md` and `.htaccess.production` for production-specific config.

## Key Data Files

- `sofomes.json` / `sofomes.md` — Structured data on 2,000+ SOFOMes
- `catalogs.json` — All CNBV catalog data combined
- `catalogs/json/*.json` — Individual catalog JSON files for download
- `api/condusef-cache.json` — Cached CONDUSEF SIPRES response
