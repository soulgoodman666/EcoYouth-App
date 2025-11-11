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
                        <a href="/videos" class="text-gray-500 hover:text-custom">🎥video</a>
                        <a href="/myPlants" class="text-custom font-medium">🪴MyPlants</a>
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
                    <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 25 25">
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
                <a href="/videos" class="block text-gray-700 hover:text-custom">🎥Video</a>
                <a href="/myPlants" class="block text-custom font-medium border-b-2 border-green-600 pb-2">
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

    <main class="pt-16 bg-green-50 min-h-screen">
        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-green-700 mb-2">
                My Plants
            </h1>
            <p class="text-lg md:text-xl text-gray-700 mb-4">
                PAGE UNTUK MEMASUKKAN TANAMAN YANG SEDANG KAMU TANAM
            </p>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <!-- Form Tambah Tanaman Baru -->
            <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
                <h3 class="text-2xl font-semibold mb-4">Tambah Tanaman Baru</h3>
                <form action="{{ route('tanaman.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700">Nama Tanaman</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="umur" class="block text-gray-700">Umur Tanaman (dalam minggu)</label>
                        <select id="umur" name="umur" class="w-full px-4 py-2 rounded-lg border border-gray-300"
                            required>
                            <option value="">Pilih Umur</option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}">{{ $i }} minggu</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="jenis" class="block text-gray-700">Jenis Tanaman</label>
                        <select id="jenis" name="jenis" class="w-full px-4 py-2 rounded-lg border border-gray-300"
                            required>
                            <option value="jenis">Pilih Jenis</option>
                            <option value="Buah">Buah</option>
                            <option value="Sayur">Sayur</option>
                            <option value="Bunga">Bunga</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                        Tambah Tanaman
                    </button>
                </form>
            </div>

            <!-- Daftar Tanaman -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($tanamans as $tanaman)
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <img src="{{ asset('https://i.pinimg.com/736x/93/92/5b/93925be72cbec5cd9de9259992360bb0.jpg') }}"
                            alt="{{ $tanaman->nama }}" class="w-full h-48 object-cover mb-4">

                        <!-- Form Edit Nama dan Umur -->
                        <form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" class="mb-4">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Nama Tanaman:</label>
                                <input type="text" name="nama" value="{{ $tanaman->nama }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded">
                            </div>
                            <div class="mb-2">
                                <label class="text-gray-600 text-sm">Umur (minggu):</label>
                                <input type="number" name="umur" value="{{ $tanaman->umur }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded hover:bg-blue-600">
                                Simpan Perubahan
                            </button>
                        </form>

                        <p class="text-gray-600">Jenis: <strong>{{ $tanaman->jenis }}</strong></p>


                        {{-- Tips Berdasarkan Jenis dan Umur --}}
                        @if ($tanaman->jenis == 'buah')
                            <div class="mt-4 p-4 bg-green-100 border border-green-300 rounded text-green-800">
                                🌳 <strong>Tips Merawat Tanaman Buah:</strong>
                                <ul class="list-disc list-inside mt-2 space-y-1">
                                    @if ($tanaman->umur <= 4)
                                        <li>Siram 2x sehari untuk menjaga kelembaban awal.</li>
                                        <li>Gunakan media tanam gembur dan kaya nutrisi.</li>
                                        <li>Tempatkan di area teduh namun tetap terkena cahaya matahari pagi.</li>
                                        <li>Hindari genangan air, pastikan pot memiliki drainase baik.</li>
                                        <li>Gunakan pupuk kandang matang sebagai nutrisi awal.</li>
                                        <li>Jaga suhu stabil, hindari angin kencang.</li>
                                    @elseif ($tanaman->umur <= 8)
                                        <li>Pupuk organik diberikan tiap 2 minggu.</li>
                                        <li>Periksa daun dan batang dari hama atau jamur.</li>
                                        <li>Semprot larutan neem oil atau air bawang putih sebagai anti hama alami.</li>
                                        <li>Siram saat tanah mulai kering, hindari penyiraman berlebih.</li>
                                        <li>Lakukan penyiangan rutin di sekitar tanaman.</li>
                                        <li>Tambahkan penopang jika batang mulai tumbuh tinggi.</li>
                                    @else
                                        <li>Lakukan pemangkasan ringan jika terlalu rimbun.</li>
                                        <li>Pantau pertumbuhan bunga untuk persiapan panen.</li>
                                        <li>Tambahkan pupuk buah tinggi kalium untuk merangsang pembentukan buah.</li>
                                        <li>Siram secara teratur, terutama saat cuaca panas.</li>
                                        <li>Jaga jarak antar tanaman agar sirkulasi udara lancar.</li>
                                        <li>Perhatikan warna dan aroma buah sebagai tanda kematangan.</li>
                                        <li>Panen di pagi atau sore hari agar buah tetap segar.</li>
                                    @endif
                                </ul>
                            </div>
                        @elseif ($tanaman->jenis == 'sayur')
                            <div class="mt-4 p-4 bg-yellow-100 border border-yellow-300 rounded text-yellow-800">
                                🥬 <strong>Tips Merawat Tanaman Sayur:</strong>
                                <ul class="list-disc list-inside mt-2 space-y-1">
                                    @if ($tanaman->umur <= 3)
                                        <li>Jaga kelembaban tanah dan hindari sinar matahari langsung.</li>
                                        <li>Gunakan kompos sebagai pupuk dasar.</li>
                                        <li>Pastikan tanah gembur dan tidak becek.</li>
                                        <li>Periksa kelembapan setiap pagi dan sore.</li>
                                        <li>Gunakan pot kecil dengan drainase baik.</li>
                                    @elseif ($tanaman->umur <= 6)
                                        <li>Siram secara rutin dan jauhkan dari gulma.</li>
                                        <li>Semprot air jahe/air bawang putih untuk cegah hama.</li>
                                        <li>Jangan menyiram saat matahari terik (tunggu pagi/sore).</li>
                                        <li>Gunakan pupuk organik seminggu sekali.</li>
                                        <li>Perhatikan adanya daun menguning sebagai tanda kekurangan nutrisi.</li>
                                    @else
                                        <li>Siapkan panen bertahap jika daun mulai cukup besar.</li>
                                        <li>Pupuk tambahan diberikan jika daun mulai menguning.</li>
                                        <li>Bersihkan tanaman dari daun tua atau rusak secara berkala.</li>
                                        <li>Pastikan tanaman cukup mendapat cahaya namun tidak terlalu panas.</li>
                                        <li>Periksa batang utama, jika mulai berkayu, kurangi pupuk nitrogen.</li>
                                        <li>Jika menanam sayuran, panen di pagi hari untuk kualitas terbaik.</li>
                                    @endif
                                </ul>
                            </div>
                        @elseif ($tanaman->jenis == 'bunga')
                            <div class="mt-4 p-4 bg-yellow-100 border border-yellow-300 rounded text-yellow-800">
                                🌸 <strong>Tips Merawat Tanaman Bunga:</strong>
                                <ul class="list-disc list-inside mt-2 space-y-1">
                                    @if ($tanaman->umur <= 3)
                                        <li>Gunakan media tanam gembur dan kaya humus.</li>
                                        <li>Letakkan di tempat yang terkena sinar matahari pagi (tidak langsung saat siang).</li>
                                        <li>Siram secukupnya agar tanah tetap lembap, bukan basah.</li>
                                        <li>Jaga suhu ruangan tetap stabil jika ditanam dalam pot indoor.</li>
                                        <li>Gunakan pupuk dasar seperti kompos atau pupuk kandang matang.</li>
                                        <li>Periksa daun setiap hari untuk mendeteksi serangan kutu atau jamur lebih awal.</li>
                                    @elseif ($tanaman->umur <= 6)
                                        <li>Siram setiap pagi atau sore, jangan menyiram saat siang terik.</li>
                                        <li>Gunakan pupuk cair khusus bunga seminggu sekali.</li>
                                        <li>Lakukan pemangkasan ringan untuk merangsang pertumbuhan tunas baru.</li>
                                        <li>Hindari lokasi terlalu berangin karena bisa merontokkan kelopak bunga.</li>
                                        <li>Gunakan pot dengan lubang drainase dan pastikan air tidak menggenang.</li>
                                        <li>Tambahkan insektisida alami jika terlihat adanya serangga pengganggu.</li>
                                    @else
                                        <li>Pupuk dengan formula tinggi fosfor untuk merangsang pembungaan.</li>
                                        <li>Bersihkan secara rutin bunga yang layu untuk merangsang bunga baru tumbuh.</li>
                                        <li>Perhatikan daun bawah—jika menguning, evaluasi kelembapan dan nutrisi.</li>
                                        <li>Jika bunga dalam pot, ganti media tanam sebagian setiap 3 bulan.</li>
                                        <li>Jauhkan dari AC langsung atau udara kering jika diletakkan di dalam ruangan.</li>
                                        <li>Gunakan mulsa di permukaan tanah untuk menjaga kelembapan.</li>
                                    @endif
                                </ul>
                            </div>
                        @endif

                        <!-- Tombol Hapus -->
                        <div class="flex justify-end mt-4">
                            <form action="{{ route('tanaman.destroy', $tanaman->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
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

</body>

</html>