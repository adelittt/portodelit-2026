<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adellita Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    @livewireStyles
    <style>
        body {
            background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            min-height: 100vh;
        }
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <nav class="fixed top-5 left-1/2 -translate-x-1/2 z-50">
        <div class="glass px-6 py-3 rounded-full flex gap-8 shadow-lg">
            <a href="/" class="hover:text-pink-500 transition font-medium">🏠 Home</a>
            <a href="/projects" class="hover:text-blue-500 transition font-medium">🚀 Projects</a>
            <a href="/contact" class="hover:text-purple-500 transition font-medium">✉️ Contact</a>
        </div>
    </nav>

    <main class="pt-24 pb-12">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>