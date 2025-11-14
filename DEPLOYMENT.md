# Deployment Guide untuk Vercel

Website ini menggunakan Laravel dengan static export untuk deployment di Vercel.

## Setup Awal

### 1. Install Dependencies

```bash
composer install
npm install
```

### 2. Build Assets & Export

**PENTING:** Pastikan Laravel server berjalan di terminal lain sebelum export:

```bash
# Terminal 1: Start server
php artisan serve

# Terminal 2: Export
npm run export
```

Command `npm run export` akan:
- Build assets (CSS/JS) dengan Vite
- Export semua routes menjadi static HTML (butuh server running)
- Copy assets ke folder `dist/build/`
- Fix asset paths di HTML files

## Routes yang Di-Export

Berikut routes yang akan di-export sebagai static HTML:

- `/` - Home page
- `/contact` - Contact page
- `/aboutme` - About me page
- `/archive` - Archive index
- `/archive/web` - Web archive
- `/archive/photo` - Photo archive
- `/archive/design` - Design archive

Routes yang **TIDAK** di-export (karena butuh authentication):
- `/dashboard`
- `/login`, `/register`, dll (auth routes)
- `/profile`
- `/experiences` (resource routes)

## Deployment ke Vercel

### Otomatis via GitHub Actions

1. Push code ke GitHub
2. GitHub Actions akan otomatis:
   - Build assets
   - Export static site
   - Commit `dist/` folder
3. Vercel akan otomatis deploy dari `dist/` folder

### Manual Export

Jika ingin export secara manual sebelum push:

```bash
npm run export
git add dist/
git commit -m "Update static export"
git push
```

## Konfigurasi Vercel

File `vercel.json` sudah dikonfigurasi untuk:
- Output directory: `dist`
- Rewrite semua routes ke `index.html` (untuk SPA-like behavior)

## Troubleshooting

### Assets tidak muncul

Pastikan:
1. `npm run build` sudah dijalankan
2. Folder `public/build/` ada dan berisi assets
3. Folder `dist/build/` sudah ter-copy dari `public/build/`
4. Path di HTML sudah benar (`/build/assets/...`)

### Routes tidak bekerja

Pastikan routes sudah ditambahkan di:
- `package.json` script `export`
- `.github/workflows/export.yml` (untuk auto-export)

### Export gagal

Pastikan:
1. PHP server berjalan: `php artisan serve`
2. Semua dependencies terinstall
3. `.env` file sudah dikonfigurasi dengan benar

