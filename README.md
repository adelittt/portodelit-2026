# 🎨 Portodelit - Personal Portfolio Website with Filament DCM

Portodelit adalah sebuah platform website portofolio pribadi yang responsif dan sepenuhnya dinamis berbasis **DCM (Dynamic Content Management)**. Website ini dirancang untuk mengelola dan menampilkan biodata utama, informasi profil, tautan media sosial, serta galeri proyek teknis secara *real-time* langsung melalui panel admin.

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

## 🚀 Cara Instalasi & Menjalankan Project

Pastikan Anda sudah menginstal **Docker** dan **Docker Compose** di komputer Anda (sangat direkomendasikan menggunakan WSL 2 untuk pengguna Windows).

1. **Clone Repository**
   ```bash
   git clone [https://github.com/username/portodelit.git](https://github.com/username/portodelit.git)
   cd portodelit