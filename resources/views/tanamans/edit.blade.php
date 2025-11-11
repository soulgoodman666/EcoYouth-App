<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Tanaman</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Tanaman</h1>
        <form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama Tanaman</label>
                <input type="text" name="nama" value="{{ $tanaman->nama }}" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jenis Tanaman</label>
                <input type="text" name="jenis" value="{{ $tanaman->jenis }}" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar Baru (opsional)</label>
                <input type="file" name="gambar" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg">Update</button>
        </form>
    </div>
</body>
</html>
