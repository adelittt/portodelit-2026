<?php

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;

/*
|--------------------------------------------------------------------------
| Profile & Portfolio Automated Tests
|--------------------------------------------------------------------------
| Menggunakan RefreshDatabase agar setiap kali pengujian berjalan, database 
| testing dibersihkan otomatis sehingga tidak mengotori database asli.
*/

uses(RefreshDatabase::class);

test('halaman utama portfolio dapat diakses dengan sukses', function () {
    // 1. Jalankan simulasi mengunjungi URL '/'
    $response = $this->get('/');

    // 2. Pastikan HTTP Status-nya 200 (OK/Sukses)
    $response->assertStatus(200);
});

test('halaman utama menampilkan teks fallback jika admin belum mengisi data', function () {
    // 1. Kunjungi halaman utama saat database Profile masih kosong
    $response = $this->get('/');

    // 2. Pastikan teks placeholder 'Belum Diisi' muncul di layar agar web tidak blank
    $response->assertSee('Belum Diisi');
});

test('halaman utama berhasil menampilkan data profil dinamis dari database', function () {
    // 1. Jalankan Fitur / Unit Mocking: Buat data profil buatan di database testing
    $profile = Profile::create([
        'name' => 'Adellita Meliana Putri',
        'title' => 'Sistem Informasi Student',
        'bio' => 'Saya senang mengeksplorasi hal baru guna menciptakan solusi teknologi.',
        'email' => 'adellita@example.com'
    ]);

    // 2. Kunjungi halaman utama
    $response = $this->get('/');

    // 3. Verifikasi: Pastikan nama dan bio yang di-input muncul dengan benar di HTML web
    $response->assertStatus(200);
    $response->assertSee('Adellita Meliana Putri');
    $response->assertSee('Sistem Informasi Student');
});