@extends('home.blade.php') {{-- ganti dengan layout utama kamu jika namanya beda --}}

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Tanaman Saya</h1>

    <a href="{{ route('tanaman.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Tanaman</a>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Jenis</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tanamans as $tanaman)
                <tr>
                    <td class="border px-4 py-2">{{ $tanaman->nama }}</td>
                    <td class="border px-4 py-2">{{ $tanaman->jenis }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('tanaman.destroy', $tanaman->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus tanaman ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@foreach($tips as $tip)
    <div class="card">
        <h3>{{ $tip->judul }}</h3>
        <p>{{ \Illuminate\Support\Str::limit($tip->deskripsi, 100) }}</p>

        <!-- Link ke halaman edit -->
        <a href="{{ route('tips.edit', $tip->id) }}" class="btn btn-warning">Edit</a>

        <!-- Form untuk menghapus tip -->
        <form action="{{ route('tips.destroy', $tip->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach