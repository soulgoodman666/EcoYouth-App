<!-- resources/views/tanamans/create.blade.php -->
<h2>Tambah Tip Baru</h2>
<form action="{{ route('tips.store') }}" method="POST">
    @csrf
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" required><br>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" id="deskripsi" required></textarea><br>

    <button type="submit">Simpan</button>
</form>
