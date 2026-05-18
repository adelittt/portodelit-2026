<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Adellita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        }
        .glass {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="p-4 md:p-12 min-h-screen space-y-32">

    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50">
        <div class="glass px-8 py-4 rounded-full flex gap-8 shadow-2xl border border-white/50">
            <a href="#home" class="text-sm font-bold text-gray-600 hover:text-pink-500 transition-colors">Home</a>
            <a href="#about" class="text-sm font-bold text-gray-600 hover:text-yellow-500 transition-colors">About</a>
            <a href="#projects" class="text-sm font-bold text-gray-600 hover:text-purple-500 transition-colors">Projects</a>
            <a href="#contact" class="text-sm font-bold text-gray-600 hover:text-cyan-500 transition-colors">Contact</a>
        </div>
    </nav>

    <section id="home" class="pt-20 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 animate__animated animate__fadeIn">
        <div class="md:col-span-2 glass p-10 rounded-[3rem] shadow-xl border-b-8 border-pink-200 flex flex-col md:flex-row gap-8 items-center justify-center">
            <div class="w-48 h-60 flex-shrink-0 rounded-[2.5rem] overflow-hidden border-4 border-white shadow-lg bg-white">
                <img src="{{ asset('images/potoAdel.jpeg') }}" alt="Adellita" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-5xl font-black text-gray-800 leading-tight">Hi, I'm <span class="text-pink-500">Adellita!</span> 👋</h1>
                <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                    Mahasiswa <span class="font-bold text-blue-500">Sistem Informasi</span> di Universitas Esa Unggul. 
                    Tertarik dengan desain <span class="bg-blue-100 px-2 rounded">ERP</span> dan <span class="bg-purple-100 px-2 rounded text-sm">UI/UX</span>.
                </p>
            </div>
        </div>

        <div id="about" class="glass p-8 rounded-[3rem] shadow-xl border-b-8 border-yellow-200 flex flex-col justify-center scroll-mt-28">
            <h2 class="text-2xl font-extrabold text-gray-700 mb-4">About Me 🎀</h2>
            <div class="text-gray-600 leading-relaxed text-sm">
                <p class="mb-4">
                    Halo! Saya <span class="font-bold text-pink-500">Adellita Meliana Putri</span>, 
                    Mahasiswa Sistem Informasi Semester 4.
                </p>
                <p>
                    Saya senang mengeksplorasi hal baru guna menciptakan solusi teknologi yang 
                    <span class="italic font-medium text-gray-800">creative</span> dan 
                    <span class="italic font-medium text-gray-800">user-friendly</span>.
                </p>
            </div>
        </div>
    </section>

    <section id="playlist" class="max-w-6xl mx-auto space-y-8 scroll-mt-28 animate__animated animate__fadeInUp">
        <div class="flex items-center justify-center gap-3">
            <span class="text-4xl">🎵</span>
            <h2 class="text-4xl font-black text-gray-800 text-center">My Mood Booster</h2>
        </div>
        <div class="glass p-6 rounded-[3rem] shadow-xl border-b-8 border-green-200 overflow-hidden hover:scale-[1.01] transition-transform duration-500">

            <iframe

                data-testid="embed-iframe"

                style="border-radius:24px"

                src="https://open.spotify.com/embed/playlist/35evBmhKDdGjxVry9y32Se?utm_source=generator"

                width="100%"

                height="352"

                frameBorder="0"

                allowfullscreen=""

                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"

                loading="lazy">

            </iframe>

        </div>

    </section>

    <section id="projects" class="max-w-6xl mx-auto space-y-10 scroll-mt-28">
        <div class="flex flex-col items-center justify-center gap-2">
            <span class="text-5xl animate-bounce">🎨</span>
            <h2 class="text-4xl font-black text-gray-800 text-center">My Projects</h2>
            <p class="text-gray-500 italic">Daftar proyek yang sedang dan telah saya kerjakan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Loop data dari database admin --}}
            @foreach($projects as $item)
            <div class="glass p-8 rounded-[3rem] shadow-xl border-b-8 border-blue-200 hover:-translate-y-3 transition-all duration-300 group">
                
                @if($item->image)
                <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border-2 border-white shadow-inner bg-white">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                @else
                <div class="w-full h-48 rounded-2xl bg-gray-100 mb-6 flex items-center justify-center text-4xl shadow-inner">
                    🖼️
                </div>
                @endif

                <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest 
                    {{ $item->status == 'Completed' ? 'bg-green-100 text-green-600' : ($item->status == 'In Progress' ? 'bg-yellow-100 text-yellow-600' : 'bg-gray-100 text-gray-600') }}">
                    {{ $item->status }}
                </span>

                <h3 class="font-bold text-xl text-gray-800 mt-4">{{ $item->title }}</h3>
                <p class="text-sm text-gray-600 mt-3 leading-relaxed">{{ $item->description }}</p>
                
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach(explode(',', $item->tags) as $tag)
                        <span class="px-3 py-1 bg-blue-50 text-blue-500 rounded-lg text-[10px] font-bold uppercase">{{ trim($tag) }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="contact" class="max-w-6xl mx-auto pb-20 scroll-mt-28">
        <div class="glass p-12 rounded-[3rem] shadow-xl border-b-8 border-cyan-200 text-center">
            <h2 class="text-3xl font-black text-gray-800 mb-8 italic">Let's Connect! ✨</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="mailto:adellitaworks@gmail.com" class="flex items-center justify-center gap-4 p-4 rounded-full bg-gradient-to-r from-blue-100 to-cyan-100 hover:shadow-lg transition-all group">
                    <span class="text-2xl group-hover:scale-110 transition-transform">✉️</span>
                    <span class="font-black text-gray-700 text-sm">Email Me</span>
                </a>
                <a href="https://github.com/adelittt" target="_blank" class="flex items-center justify-center gap-4 p-4 rounded-full bg-gradient-to-r from-gray-100 to-slate-200 hover:shadow-lg transition-all group border border-slate-300">
                    <span class="text-2xl group-hover:scale-110 transition-transform">🐙</span>
                    <span class="font-black text-gray-700 text-sm">GitHub</span>
                </a>
                <a href="https://www.instagram.com/adelittt?igsh=dnZqNzZvbW5oMWcw" target="_blank" class="flex items-center justify-center gap-4 p-4 rounded-full bg-gradient-to-r from-purple-100 to-pink-100 hover:shadow-lg transition-all group">
                    <span class="text-2xl group-hover:scale-110 transition-transform">📸</span>
                    <span class="font-black text-gray-700 text-sm">@adelittt</span>
                </a>
                <a href="https://www.tiktok.com/@.adelit" target="_blank" class="flex items-center justify-center gap-4 p-4 rounded-full bg-gradient-to-r from-cyan-100 to-red-100 hover:shadow-lg transition-all group">
                    <span class="text-2xl group-hover:scale-110 transition-transform">🎵</span>
                    <span class="font-black text-gray-700 text-sm">@.adelit</span>
                </a>
            </div>
            <p class="mt-12 text-gray-400 text-xs tracking-widest uppercase italic">Made with Love & Laravel for Adellita</p>
        </div>
    </section>

</body>
</html>