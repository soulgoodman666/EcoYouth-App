<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item['title'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 font-sans leading-relaxed text-gray-800">
    <div class="max-w-4xl mx-auto px-6 py-10 bg-white shadow-xl rounded-xl mt-10">
        <h1 class="text-3xl font-bold text-green-700 mb-4">{{ $item['title'] }}</h1>

        {{-- Thumbnail --}}
        <img src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}" class="w-full h-auto rounded-lg shadow-md mb-6">

        {{-- Deskripsi --}}
        <div class="space-y-4 text-lg whitespace-pre-line mb-6">
            {{ $item['description'] }}
        </div>

        {{-- Tombol Menuju YouTube --}}
        @if(!empty($item['url']))
            <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer"
                class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                Tonton di YouTube
            </a>
        @endif
    </div>
</body>
</html>
