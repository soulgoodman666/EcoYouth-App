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
                        alt="EcoGarden Guide" class="h-8" />
                    <div class="hidden md:ml-8 md:flex md:space-x-8">
                        <a href="/home" class="text-custom font-medium">🏠Home</a>
                        <a href="/tips" class="text-gray-500 hover:text-custom">🌱Tips</a>
                        <a href="/news" class="text-gray-500 hover:text-custom">📰News</a>
                        <a href="/videos" class="text-gray-500 hover:text-custom">🎥Video</a>
                        <a href="/myPlants" class="text-gray-500 hover:text-custom">🪴MyPlants</a>
                    </div>
                </div>

                <!-- Bagian kanan -->
                <div class="flex items-center space-x-4">
                    <!-- Halo user (desktop only) -->
                    @auth
                        <span class="text-custom font-medium">Halo, {{ Auth::user()->username }}</span>

                        @if (Auth::user()->role === 'admin')
                            {{-- Konten khusus admin --}}
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
            <div id="mobile-menu" class="md:hidden hidden mt-2 space-y-3">
                <a href="/home" class="block text-custom font-medium border-b-2 border-green-600 pb-2">🏠Home</a>
                <a href="/tips" class="block text-gray-700 hover:text-custom">🌱Tips</a>
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
            <span class="text-custom font-medium">Halo, {{ Auth::user()->name }}</span>
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
                        <!---slide gambar 1--->
                        <li class="glide__slide relative">
                            <img src="https://www.panda.id/wp-content/uploads/lima-langkah-melestarikan-hutan-20220327125110-1024x680.jpg"
                                alt="Garden" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                                <div class="text-center text-white max-w-3xl px-4">
                                    <h1 class="text-5xl font-bold mb-6">Welcome to EcoYouth tips & trik Website</h1>
                                    <p class="text-xl mb-8">Website yang berisi tentang tips and trik dan informasi
                                        tentang lingkungan disekitar anda</p>
                                    <button onclick="scrollToCards()"
                                        class="!rounded-button bg-custom hover:bg-custom/90 text-white px-8 py-3 text-lg font-medium">Get
                                        Started</button>
                                </div>
                            </div>
                        </li>
                        <!---slide gambar 2-->
                        <li class="glide__slide relative">
                            <img src="https://www.ybkb.or.id/wp-content/uploads/2024/03/elderly-person-children-holding-plant-min-825x552_iHsVn.jpg"
                                alt="Garden" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                                <div class="text-center text-white max-w-3xl px-4">
                                    <h1 class="text-5xl font-bold mb-6 text-green" style="color:green;">The reason I
                                        make this website</h1>
                                    <p class="text-xl mb-8">Alasan saya membuat website ini adalah untuk memberikan
                                        edukasi kepada orang-orang agar lebih peduli pada lingkungan...</p>
                                    <button onclick="scrollToCards()"
                                        class="!rounded-button bg-custom hover:bg-custom/90 text-white px-8 py-3 text-lg font-medium">Get
                                        Started</button>
                                </div>
                            </div>
                        </li>
                        <!---slide gambar 3--->
                        <li class="glide__slide relative">
                            <img src="https://www.mongabay.co.id/wp-content/uploads/2022/06/environment.jpeg"
                                alt="Garden" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                                <div class="text-center text-white max-w-3xl px-4">
                                    <h1 class="text-5xl font-bold mb-6" style="color:green;">Lingkungan itu aset masa
                                        depan</h1>
                                    <p class="text-xl mb-8">Karena keberlangsungan hidup manusia dan makhluk hidup
                                        lainnya sangat bergantung pada kualitas lingkungan...</p>
                                    <button onclick="scrollToCards()"
                                        class="!rounded-button bg-custom hover:bg-custom/90 text-white px-8 py-3 text-lg font-medium">Get
                                        Started</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>
        </section>

        <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 id="seasonal-tips" class="text-3xl font-bold text-gray-900 mb-8">Artikel tentang Lingkungan</h2>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="bg-white rounded-lg shadow-sm p-6 mx-2">
                                <h3 class="text-xl mb-2">Lingkungan bukan hanya tempat kita tinggal hari ini...</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <script>
            function scrollToCards() {
                document.getElementById("seasonal-tips").scrollIntoView({ behavior: "smooth" });
            }
        </script>

        <section class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-gray-50">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-12">Kutipan Aktivis Lingkungan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Greta Thunberg -->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                    <img src="https://akcdn.detik.net.id/visual/2019/07/30/edd66080-5e7c-473f-bc0a-c7c1f94a1899_43.jpeg?w=720&q=90"
                        alt="Greta Thunberg" class="rounded-lg w-full h-48 object-cover mb-4">
                    <p class="text-gray-700 italic mb-2">“I want you to act as if the house is on fire, because it is.”
                    </p>
                    <p class="text-sm text-gray-600">— Greta Thunberg menegaskan betapa gentingnya krisis iklim dan
                        mengajak kita semua untuk segera bertindak.</p>
                </div>
                <!-- David Attenborough -->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGuYOjPmSG6QRlMH1Dv6YYFxzW-N5ER-8mpw&s"
                        alt="David Attenborough" class="rounded-lg w-full h-48 object-cover mb-4">
                    <p class="text-gray-700 italic mb-2">“The truth is: the natural world is changing. And we are
                        totally dependent on that world...”</p>
                    <p class="text-sm text-gray-600">— David Attenborough menekankan bahwa menjaga alam berarti menjaga
                        keberlangsungan hidup manusia.</p>
                </div>
                <!--kutipan 3-->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrtG0QKJGwxRh4CfRgT5hjxQQ2GX7bY6w0A&s"
                        alt="David Attenborough" class="rounded-lg w-full h-48 object-cover mb-4">
                    <p class="text-gray-700 italic mb-2">“You cannot get through a single day without having an impact
                        on the world around you...”</p>
                    <p class="text-sm text-gray-600">— David Attenborough menekankan bahwa menjaga alam berarti menjaga
                        keberlangsungan hidup manusia.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                    <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2011/9/26/1317058832787/Wangari-Maathai--007.jpg?width=465&dpr=1&s=none&crop=none"
                        alt="Wangari Maathai" class="rounded-lg w-full h-48 object-cover mb-4">
                    <p class="text-gray-700 italic mb-2">“It's the little things citizens do. That's what will make the
                        difference...”</p>
                    <p class="text-sm text-gray-600">— Wangari Maathai menekankan pentingnya aksi kecil dari setiap
                        individu.</p>
                </div>
            </div>
        </section>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            autoplay: 2000
        }).mount();
    </script>
</body>
<style>
    .glide__bullet {
        width: 15px;
        /* Lebar tombol */
        height: 10px;
        /* Tinggi tombol */
        margin: 5px;
        /* Jarak antar tombol */
        background-color: rgb(17, 184, 78);
        /* Warna hijau (Tailwind green-400) */
        border-radius: 30%;
        /* Bulat */
        border: none;
        cursor: pointer;
    }

    .glide__bullet:hover,
    .glide__bullet:focus {
        background-color: #16a34a;
        /* Warna hijau lebih gelap saat hover/focus */
    }
</style>

</html>