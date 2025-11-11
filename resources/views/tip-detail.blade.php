<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tip->judul }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden mt-10">
        <!-- Gambar -->
        <img src="{{ asset('storage/' . $tip->image_url) }}" alt="{{ $tip->judul }}"
            class="w-full h-96 object-cover">

        <div class="p-6">
            <!-- Judul -->
            <h1 class="text-4xl font-semibold text-green-800 mb-6">{{ $tip->judul }}</h1>
            
            <!-- Deskripsi -->
            <p class="text-lg text-gray-700 mb-8">{{ $tip->deskripsi }}</p>

            <!-- Section dengan tips tambahan atau informasi lebih lanjut -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-inner">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">Tips & Trik Lainnya</h3>
                <ul class="space-y-4">
                    <li><a href="/tips/2" class="text-blue-600 hover:underline">Membuat Kompos dari Sampah Organik</a></li>
                    <li><a href="/tips/3" class="text-blue-600 hover:underline">Tanaman Pembersih Udara dalam Ruangan</a></li>
                    <li><a href="/tips/4" class="text-blue-600 hover:underline">Cara Menanam di Pekarangan Rumah</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="{{ asset('storage/' . $tip->image_url) }}" alt="{{ $tip->judul }}" class="w-full h-96 object-cover">

        <div class="p-6">
            <h1 class="text-3xl font-bold text-green-800 mb-4">{{ $tip->judul }}</h1>
            <p class="text-gray-600 text-lg mb-4">{{ $tip->deskripsi }}</p>
            
            {{-- Menampilkan konten tambahan jika ada --}}
            @if($tip->konten_lengkap)
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-2xl font-semibold text-green-800">Konten Lengkap</h3>
                    <p class="text-gray-700 mt-2">{{ $tip->konten_lengkap }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <h1>{{ $tip->judul }}</h1>
    <img src="{{ asset('storage/' . $tip->image_url) }}" alt="{{ $tip->judul }}" class="w-full h-48 object-cover">
    <p>{{ $tip->deskripsi }}</p>

    <!-- Form untuk menghapus tip -->
    <form action="{{ route('tips.destroy', $tip->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus Tip</button>
    </form>
</div>
@endsection