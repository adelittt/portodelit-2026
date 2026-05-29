# 🎨 Portodelit - Personal Portfolio Website with Filament DCM

Portodelit adalah sebuah platform website portofolio pribadi yang responsif dan sepenuhnya dinamis berbasis. Website ini dirancang untuk mengelola dan menampilkan biodata utama, informasi profil, tautan media sosial, serta galeri proyek teknis secara *real# 🎨 Portodelit - Personal Portfolio Website with Filament DCM

Portodelit adalah platform website portofolio pribadi berbasis **DCM (Dynamic Content Management)** yang dirancang untuk mengelola dan menampilkan biodata, informasi profil, tautan media sosial, serta galeri proyek teknis secara *real-time* langsung melalui panel admin backend tanpa perlu mengubah kode sumber (*zero-hardcoded data*).

---

## 🎯 Tujuan Utama Proyek

1. **Efisiensi Manajemen Konten**: Menyediakan antarmuka manajemen konten yang dinamis bagi mahasiswa/profesional untuk memperbarui portofolio mereka kapan saja melalui Filament Admin Panel.
2. **Showcase Portofolio Teknis Mendalam**: Menampilkan detail analisis proyek, *tech stack*, hingga visualisasi arsitektur data (ERD & Flowchart) secara interaktif untuk kebutuhan akademis maupun profesional.
3. **Penerapan Arsitektur Modern**: Mengimplementasikan arsitektur aplikasi web modern berbasis kontainer (Docker) untuk memastikan lingkungan pengembangan yang konsisten, terisolasi, dan mudah dideploy.

---

## 🎀 Fitur Utama

- **Dynamic Profile Management**: Kendali penuh atas nama, judul, bio, dan foto profil langsung dari Filament Admin Panel.
- **Interactive Project Showcase**: Galeri proyek lengkap dengan filter status (*Completed/In Progress*), deskripsi, dan tag kategori otomatis.
- **Deep Technical Analysis Modal**: Kartu proyek interaktif yang mendukung modal detail untuk menampilkan Analisis Masalah, Tech Stack, serta visualisasi diagram **ERD & Flowchart**.
- **Dynamic Contact Links**: Integrasi tautan media sosial (GitHub, Instagram, TikTok, dan Email) yang dikelola langsung dari database secara aman.
- **Bento-Glassmorphism UI**: Antarmuka estetik menggunakan perpaduan Tailwind CSS dan efek *glassmorphic* yang super clean dan responsif.

---

## 🛠️ Tech Stack

### Backend & Administrator Panel
- **Framework**: Laravel 11.x
- **Admin Panel**: Filament v3 (PHP-driven admin panels)
- **Database**: MySQL / MariaDB

### Frontend & UI/UX
- **CSS Framework**: Tailwind CSS (via CDN)
- **Interactivity**: Alpine.js (State management untuk Modal Detail Proyek)
- **Animations**: Animate.css

### Lingkungan Pengembangan (Development Environment)
- **Containerization**: Docker & Docker Compose (Dockerized PHP, Nginx, & MySQL node)
- **OS Environment**: WSL 2 (Ubuntu) via Visual Studio Code

---

## 📂 Struktur Folder Perubahan Utama

```text
portodelit/
├── db/                                  # Volume penyimpanan data MySQL lokal
├── docs/                                # Dokumentasi teknis mendalam & laporan proyek
│   └── Laporan_AwaL_Project_Pemweb-CR0022.pdf
├── nginx/                               # Konfigurasi server web Nginx untuk Docker
├── php/                                 # Dockerfile dan konfigurasi runtime PHP
├── src/                                 # Source code aplikasi Laravel
│   ├── app/Filament/Admin/Resources/    # Resource management (Profile & Project)
│   ├── resources/views/home.blade.php   # Frontend Portofolio (Dinamis 100%)
│   └── routes/web.php                   # Rute pengonstruksi data database
└── docker-compose.yml                   # Konfigurasi Node Container Proyek-time* langsung melalui panel admin.

---

## 🎀 Fitur Utama

- **Dynamic Profile Management**: Input nama, judul, bio, dan foto profil langsung dari Filament Admin tanpa menyentuh kode tema (*no hardcoded data*).
- **Interactive Project Showcase**: Menampilkan galeri proyek lengkap dengan status (*Completed/In Progress*), deskripsi, dan tag kategori.
- **Deep Technical Analysis Modal**: Setiap kartu proyek dapat diklik untuk menampilkan modal detail berisi Analisis Masalah, Tech Stack, serta visualisasi diagram **ERD & Flowchart**.
- **Dynamic Contact Links**: Integrasi tautan media sosial (GitHub, Instagram, TikTok, dan Email) yang dikelola langsung dari backend.
- **Bento-Glassmorphism UI**: Desain antarmuka modern yang estetik menggunakan perpaduan Tailwind CSS dan efek *glassmorphic* yang super clean.

---

## 🛠️ Tech Stack

### Backend & Administrator Panel
- **Framework**: Laravel 11.x
- **Admin Panel**: Filament v3 (PHP-driven admin panels)
- **Database**: MySQL / MariaDB

### Frontend & UI/UX
- **CSS Framework**: Tailwind CSS (via CDN)
- **Interactivity**: Alpine.js (untuk state Modal Detail Proyek)
- **Animations**: Animate.css

### Lingkungan Pengembangan (Development Environment)
- **Containerization**: Docker & Docker Compose (Dockerized PHP, Nginx, & MySQL node)
- **OS Environment**: WSL 2 (Ubuntu) via Visual Studio Code

---

### 🧹 Code Quality & Formatting

Proyek ini menggunakan alat otomatis untuk menjaga konsistensi gaya kode (*Coding Style Standard*):

- **Menjalankan PHP Linter & Formatter (Laravel Pint)**:
  ```bash
  docker compose exec php ./vendor/bin/pint

## 🚀 Cara Instalasi & Menjalankan Project

Pastikan Anda sudah menginstal **Docker** dan **Docker Compose** di komputer Anda (sangat direkomendasikan menggunakan WSL 2 untuk pengguna Windows).

1. **Clone Repository**
   ```bash
   git clone [https://github.com/username/portodelit.git](https://github.com/username/portodelit.git)
   cd portodelit

   ## 🎨 Langkah 2: Integrasi Prettier + Tailwind Plugin (Frontend/Blade)

Biar susunan kode HTML/Blade di file `home.blade.php` kamu tetap rapi, dan susunan *class-class* Tailwind CSS kamu berurutan otomatis sesuai standar dokumentasi Tailwind, kita pasang Prettier di lokal laptop kamu.

### 1. Install Extension VS Code (Sekali Saja)
1. Buka menu **Extensions** di VS Code kamu (`Ctrl+Shift+X`).
2. Cari dan install extension bernama: **Prettier - Code formatter** oleh *Prettier*.

### 2. Buat File Konfigurasi di Root Proyek
Buat file baru di root folder proyek kamu (sejajar dengan `README.md` dan `docker-compose.yml`) bernama **`.prettierrc`**, lalu isi dengan konfigurasi ini:

```json
{
  "semi": true,
  "singleQuote": true,
  "tabWidth": 4,
  "trailingComma": "es5",
  "printWidth": 120
}