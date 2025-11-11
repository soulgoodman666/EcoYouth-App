<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoYouth Guide - Tips & Tricks for Environmental Care</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body>
    <header class="bg-white shadow-sm fixed w-full z-50">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/home') }}">
                        <img src="https://png.pngtree.com/png-clipart/20230408/original/pngtree-cartoon-leaf-illustration-png-image_9036566.png"
                            alt="EcoGarden Guide" class="h-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-16">
        <section class="relative h-[600px] overflow-hidden">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide relative">
                            <img src="https://www.panda.id/wp-content/uploads/lima-langkah-melestarikan-hutan-20220327125110-1024x680.jpg"
                                alt="Garden" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center px-4">
                                <div
                                    class="bg-white bg-opacity-90 rounded-2xl shadow-xl p-8 max-w-md w-full text-gray-800 space-y-6">
                                    <div class="text-center">
                                        <h2 class="text-3xl font-bold">Selamat Datang di EcoYouth Web</h2>
                                        <p class="mt-1 text-sm text-gray-600">Masukkan akun anda untuk melanjutkan</p>
                                    </div>

                                    @if ($errors->any())
                                        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                                            @foreach ($errors->all() as $error)
                                                <div>{{ $error }}</div>
                                            @endforeach
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('login.post') }}"
                                        class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
                                        @csrf

                                        <div class="mb-4">
                                            <label class="block text-green-700 font-medium mb-1">Username</label>
                                            <input type="text" name="username" placeholder="Masukkan username anda"
                                                required
                                                class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-green-700 font-medium mb-1">Password</label>
                                            <div class="relative">
                                                <input type="password" name="password" id="password"
                                                    placeholder="Masukkan password" required
                                                    class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                                <button type="button" onclick="togglePassword()"
                                                    class="absolute inset-y-0 right-3 flex items-center text-sm text-gray-600">
                                                    👁️
                                                </button>
                                            </div>
                                        </div>

                                        <script>
                                            function togglePassword() {
                                                const passwordInput = document.getElementById('password');
                                                passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
                                            }
                                        </script>

                                        <button type="submit"
                                            class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                                            Masuk
                                        </button>

                                        <p class="mt-4 text-center text-sm text-gray-700">
                                            Belum punya akun?
                                            <a href="{{ route('register.form') }}"
                                                class="text-green-600 hover:underline font-semibold">
                                                Daftar di sini
                                            </a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white mt-8">
        <div class="max-w-8xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center space-y-4">
                <div class="flex space-x-4 text-sm text-gray-500">
                    <a href="#" class="hover:text-gray-900">Privacy Policy</a>
                    <span>•</span>
                    <a href="#" class="hover:text-gray-900">Terms of Service</a>
                </div>
                <p class="text-sm text-gray-500">© 2024 Environmental Portal. All rights reserved.</p>
                <p class="text-xs text-gray-400">Together for a sustainable future 🌱</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelector('button i.fa-eye').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>

</html>