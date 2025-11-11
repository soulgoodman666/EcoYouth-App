@extends('layouts.app')

@section('content')
<h2>Daftar Tips</h2>

<a href="{{ route('tips.create') }}">+ Tambah Tip Baru</a>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<ul>
    @foreach ($tips as $tip)
        <li>
            <strong>{{ $tip->judul }}</strong><br>
            {{ $tip->deskripsi }}<br>
            <a href="{{ route('tips.edit', $tip->id) }}">Edit</a>

            <form action="{{ route('tips.destroy', $tip->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
