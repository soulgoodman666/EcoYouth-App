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

        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-auto rounded-lg shadow-md mb-6">

        <div class="space-y-4 text-lg whitespace-pre-line">
            {{ $item['description'] }}
        </div>
    </div>
</body>
</html>
