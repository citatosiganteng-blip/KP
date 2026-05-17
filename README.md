# Web Profile SMKS Cipta Insani Mandiri (CIM)

Project Laravel 11 + Blade + Tailwind CSS v3 (via Vite).

## 🚀 Cara Install

Pastikan sudah terpasang: **PHP 8.2+**, **Composer**, **Node.js 18+** & **npm**.

```bash
# 1. Extract zip ini, lalu masuk ke foldernya
cd smkcim-laravel

# 2. Install dependency PHP
composer install

# 3. Install dependency frontend
npm install

# 4. Copy file .env dan generate APP_KEY
cp .env.example .env
php artisan key:generate

# 5. (Opsional) buat file SQLite kosong — kalau pakai DB_CONNECTION=sqlite
mkdir -p database && touch database/database.sqlite

# 6. Build Tailwind CSS
npm run build

# 7. Jalankan server
php artisan serve
```

Buka 👉 **http://localhost:8000**

### Mode Development (hot reload Tailwind)
Jalankan di dua terminal terpisah:
```bash
php artisan serve
npm run dev
```

## 📁 Struktur Penting

```
resources/
├── css/app.css              # Tailwind directives + custom components
├── js/app.js                # JS untuk mobile menu
└── views/
    ├── layouts/
    │   ├── app.blade.php    # Layout utama (head, navbar, footer)
    │   ├── navbar.blade.php
    │   └── footer.blade.php
    ├── components/
    │   ├── page-hero.blade.php       # <x-page-hero title="..." />
    │   └── placeholder-image.blade.php
    └── pages/
        ├── home.blade.php
        ├── profil.blade.php
        ├── program.blade.php
        ├── kesiswaan.blade.php
        ├── ppdb.blade.php
        └── kontak.blade.php

routes/web.php              # Definisi semua route
tailwind.config.js          # Custom color: primary (purple) & accent (gold)
```

## 🎨 Design Tokens

Pakai class Tailwind ini untuk warna brand:
- `bg-primary`, `text-primary` — ungu royal `#3b1d6b`
- `bg-accent`, `text-accent` — gold `#f5c542`
- `bg-gradient-hero` — gradient ungu
- `.btn-primary`, `.btn-accent`, `.btn-outline`, `.card`, `.section`, `.eyebrow` — komponen siap pakai (di `resources/css/app.css`)

## 🖼️ Mengganti Foto Placeholder

Saat ini semua gambar masih placeholder (komponen `<x-placeholder-image>`).
Untuk pakai foto asli:

1. Letakkan foto di `public/images/` (contoh: `public/images/hero.jpg`)
2. Ganti `<x-placeholder-image>...</x-placeholder-image>` dengan:
   ```blade
   <img src="{{ asset('images/hero.jpg') }}" alt="..." class="aspect-video rounded-2xl object-cover">
   ```

## 📝 Halaman Tersedia

| URL          | File Blade                       |
|--------------|----------------------------------|
| `/`          | `pages/home.blade.php`           |
| `/profil`    | `pages/profil.blade.php`         |
| `/program`   | `pages/program.blade.php`        |
| `/kesiswaan` | `pages/kesiswaan.blade.php`      |
| `/ppdb`      | `pages/ppdb.blade.php`           |
| `/kontak`    | `pages/kontak.blade.php`         |

---
© SMKS Cipta Insani Mandiri — Kreatif · Santun · Berkarakter
