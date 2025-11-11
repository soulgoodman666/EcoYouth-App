<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoYouth Guide - Tips & Tricks for Environmental Care</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="font-['Poppins'] bg-gray-50">
    <header class="bg-white shadow-sm fixed w-full z-50">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="https://png.pngtree.com/png-clipart/20230408/original/pngtree-cartoon-leaf-illustration-png-image_9036566.png"
                        alt="EcoGarden Guide" class="h-8">
                    <div class="hidden md:ml-8 md:flex md:space-x-8">
                        <a href="/home" class="text-gray-500 hover:text-custom">🏠Home</a>
                        <a href="/tips" class="text-gray-500 hover:text-custom">🌱Tips</a>
                        <a href="/news" class="text-gray-500 hover:text-custom">📰News</a>
                        <a href="/videos" class="text-custom font-medium">🎥Video</a>
                        <a href="/myPlants" class="text-gray-500 hover:text-custom">🪴MyPlants</a>
                    </div>
                </div>
                <div class="flex items-center">
                    @auth
                        <span class="text-custom font-medium">Halo, {{ Auth::user()->username }}</span>
                        @if (Auth::user()->role === 'admin')
                            <!-- Konten khusus untuk admin bisa ditambahkan di sini -->
                        @else
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="text-gray-500 hover:text-custom">Login</a>
                    @endauth
                    <form method="POST" action="{{ route('logout') }}" class="ml-4">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                            Logout
                        </button>
                    </form>
                </div>
                <!-- Hamburger (mobile only) -->
                <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                    <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            </div>

            <!-- Menu navigasi versi mobile (toggle) -->
            <div id="mobile-menu" class="md:hidden hidden mt-3 space-y-3">
                <a href="/home" class="block text-gray-700 hover:text-custom">🏠Home</a>
                <a href="/tips" class="block text-gray-700 hover:text-custom">🌱Tips</a>
                <a href="/news" class="block text-gray-700 hover:text-custom">📰News</a>
                <a href="/videos" class="block text-custom font-medium border-b-2 border-green-600 pb-2">🎥Video</a>
                <a href="/myPlants" class="block text-gray-700 hover:text-custom">
                    🪴 My Plants</a>
            </div>
        </nav>
    </header>

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <div class="flex items-center">
        @auth
            <span class="text-custom font-medium">Halo, {{ Auth::user()->username }}</span>
            @if (Auth::user()->role === 'admin')
                <!-- Konten khusus untuk admin bisa ditambahkan di sini -->
            @else
            @endif
        @else
            <a href="{{ route('login') }}" class="text-gray-500 hover:text-custom">Login</a>
        @endauth
        <form method="POST" action="{{ route('logout') }}" class="ml-4">
            @csrf
            <button type="submit"
                class="bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                Logout
            </button>
        </form>
    </div>
    </div>
    </nav>
    </header>

    <div class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-green-700 mt-20 mb-12">Video Tentang Lingkungan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videos as $video)
                <a href="{{ $video['url'] }}" target="_blank"
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">{{ $video['title'] }}</h3>
                        <p class="text-gray-700 text-sm mb-4">
                            {{ \Illuminate\Support\Str::limit($video['description'], 100) }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

<footer class="bg-gray-900 text-white py-10">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo dan Deskripsi -->
            <div>
                <img src="https://png.pngtree.com/png-clipart/20230408/original/pngtree-cartoon-leaf-illustration-png-image_9036566.png"
                    alt="EcoGarden Guide" class="h-8 mb-4">
                <p class="text-gray-400 text-sm">
                    EcoYouth adalah sahabat bertanam untuk menciptakan taman yang sehat dan ramah lingkungan.
                </p>
            </div>

            <!-- Tentang Aplikasi -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Tentang Kami</h4>
                <p class="text-gray-400 text-sm">
                    Kami menyediakan tips menanam, informasi tanaman, dan panduan berkebun digital yang mudah diakses
                    oleh siapa saja.
                </p>
            </div>

            <!-- Informasi Tambahan -->
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; 2025 EcoGarden Guide. Semua hak dilindungi.</p>
            <p>Dibuat dengan 💚 untuk para pecinta tanaman.</p>
        </div>
    </div>
</footer>

</html>