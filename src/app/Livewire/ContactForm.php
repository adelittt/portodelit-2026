<?php

namespace App\Livewire;

use Livewire\Component;

 // Pastikan model ini sudah dibuat atau buat nanti

class ContactForm extends Component
{
    // 1. Deklarasi variabel harus di luar fungsi
    public $name;
    public $email;
    public $message;
    public $successMessage;

    // 2. Aturan validasi
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Logika simpan data atau kirim email di sini
        $this->successMessage = 'Terima kasih, pesan kamu sudah terkirim!';

        // Reset input agar form kosong kembali
        $this->reset(['name', 'email', 'message']);
    }

    // 3. Fungsi render hanya boleh ada satu dan biasanya di paling bawah
    public function render()
    {
        return view('livewire.contact-form');
    }
}
