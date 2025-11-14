# Quick Start - Export Manual

Jika GitHub Actions belum berjalan atau ada masalah, Anda bisa export manual:

## Export Manual (Lokal)

1. **Start Laravel server** (di terminal terpisah):
```bash
php artisan serve
```

2. **Export static site**:
```bash
npm run export
```

3. **Commit dan push**:
```bash
git add dist/
git commit -m "Export static site"
git push
```

4. **Vercel akan otomatis redeploy** dengan konten yang benar.

## Trigger GitHub Actions Manual

Jika ingin trigger GitHub Actions secara manual:

1. Buka GitHub repository
2. Pergi ke tab **Actions**
3. Pilih workflow **Auto Export Static Site**
4. Klik **Run workflow** → **Run workflow**

## Cek Status GitHub Actions

1. Buka: `https://github.com/[username]/[repo]/actions`
2. Cek apakah workflow sudah berjalan
3. Jika gagal, cek log untuk error

## Troubleshooting

### GitHub Actions tidak commit

Pastikan repository memiliki permission untuk GitHub Actions:
- Settings → Actions → General
- Workflow permissions: **Read and write permissions**
- Allow GitHub Actions to create and approve pull requests: **Enabled**

### Export gagal di GitHub Actions

Cek log di GitHub Actions untuk error spesifik. Biasanya:
- Server tidak start dengan benar
- Dependencies tidak terinstall
- Path atau URL salah

