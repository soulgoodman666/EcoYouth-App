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
                        <a href="/tips" class="text-custom font-medium">🌱Tips</a>
                        <a href="/news" class="text-gray-500 hover:text-custom">📰News</a>
                        <a href="/videos" class="text-gray-500 hover:text-custom">🎥Video</a>
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
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 25 25">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            </div>

            <!-- Menu navigasi versi mobile (toggle) -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4">
                <a href="/home" class="block text-gray-700 hover:text-custom">🏠Home</a>
                <a href="/tips" class="block text-custom font-medium border-b-2 border-green-600 pb-2">🌱Tips</a>
                <a href="/news" class="block text-gray-700 hover:text-custom">📰News</a>
                <a href="/videos" class="block text-gray-700 hover:text-custom">🎥Video</a>
                <a href="/myPlants" class="block text-gray-700 hover:text-custom">🪴My Plants</a>
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

    <main class="pt-15">
        <section class="relative h-[600px] overflow-hidden">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide relative">
                            <img src="https://citarumharum.jabarprov.go.id/eusina/uploads/2022/03/Hari-Gerakan-Satu-Juta-Pohon-2022_womanindonesia.co_.id_.jpg"
                                alt="Garden" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                                <div class="text-center text-white max-w-3xl px-4">
                                    <h1 class="text-5xl font-bold mb-6">Tips dan Trick cara menanam yang benar</h1>
                                    <ana class="text-xl mb-8">berikut adalah tips dan trik cara menanam tanaman yang
                                        benar dan baik untuk lingkungan</p>
                                        <button onclick="scrollToTips()"
                                            class="!rounded-button bg-custom hover:bg-custom/90 text-white px-8 py-3 text-lg font-medium">
                                            Get Started
                                        </button>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        @foreach($tips as $tip)
            <a href="/tips/{{ $tip->id }}"
                class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                <img src="{{ asset('storage/' . $tip->image_url) }}" alt="{{ $tip->judul }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-800 mb-2">{{ $tip->judul }}</h3>
                    <p class="text-gray-600 text-sm">
                        {{ \Illuminate\Support\Str::limit($tip->deskripsi, 100) }}
                    </p>
                </div>
            </a>
        @endforeach


        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-3xl font-bold text-green-700 text-center mb-10">Tips & Trik Menanam</h2>
            <h2 id="seasonal-tips" class="text-3xl font-bold text-gray-900 mb-8">Seasonal Tips</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <a href="/tips/1"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg"
                        alt="Tips Menanam di Rumah" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Cara Menanam di Pekarangan Rumah</h3>
                        <p class="text-gray-600 text-sm">Tips mudah memanfaatkan lahan sempit di rumah untuk bercocok
                            tanam dengan media pot atau vertikal garden.</p>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="/tips/2"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg" alt="Tips Kompos"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Membuat Kompos dari Sampah Organik</h3>
                        <p class="text-gray-600 text-sm">Panduan membuat pupuk alami dari sampah dapur untuk
                            meningkatkan kesuburan tanaman.</p>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="/tips/3"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg"
                        alt="Tanaman Pembersih Udara" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Tanaman Pembersih Udara dalam Ruangan</h3>
                        <p class="text-gray-600 text-sm">Rekomendasi tanaman yang bisa menyaring udara dan membuat rumah
                            lebih sehat dan segar.</p>
                    </div>
                </a>
                <!-- Card 4 -->
                <a href="/tips/4"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg"
                        alt="Tanaman Pembersih Udara" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Merawat Tanaman Herbal di Dapur</h3>
                        <p class="text-gray-600 text-sm">Tips agar tanaman seperti daun mint, basil, dan rosemary tetap
                            segar dan tumbuh subur.</p>
                    </div>
                </a>
                <!-- Card 5 -->
                <a href="/tips/5"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg"
                        alt="Tanaman Pembersih Udara" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Teknik Hidroponik Sederhana untuk Pemula
                        </h3>
                        <p class="text-gray-600 text-sm">Bercocok tanam tanpa tanah, cukup dengan air dan nutrisi di
                            rumah.</p>
                    </div>
                </a>
                <!-- Card 6 -->
                <a href="/tips/6"
                    class="block bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <img src="https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg"
                        alt="Tanaman Pembersih Udara" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">Tips Mengusir Hama Tanpa Pestisida</h3>
                        <p class="text-gray-600 text-sm">Gunakan bahan alami seperti bawang putih, cabai, dan sabun cair
                            untuk melindungi tanaman.</p>
                    </div>
                </a>

            </div>


            </div>
        </section>

        <script>
            function scrollToTips() {
                document.getElementById("seasonal-tips").scrollIntoView({ behavior: "smooth" });
            }
        </script>

    </main>

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
                        Kami menyediakan tips menanam, informasi tanaman, dan panduan berkebun digital yang mudah
                        diakses oleh siapa saja.
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

</body>

</html>