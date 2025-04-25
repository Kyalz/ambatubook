<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        
    </style>
</head>
<body>

    <h1>Tambah Buku Baru</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <input type="text" name="judul" placeholder="Judul" required>
        <br><br>
        <input type="text" name="sinopsis" placeholder="Sinopsis" required>
        <br><br>
        <input type="text" name="penulis" placeholder="Penulis" required>
        <br><br>
        <input type="text" name="penerbit" placeholder="Penerbit" required>
        <br><br>
        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" required>
        <br><br>
        <input type="number" name="stok" placeholder="Stok" required>
        <br><br>
        <input type="number" name="harga" placeholder="Harga" required>
        <br><br>
        <input type="number" name="kategori_id" placeholder="Id Kategori" required>
        <br><br>
        <button type="submit">Tambah</button>
    </form>

    <hr>

    <h2>Daftar Buku:</h2>

    @foreach($bukus as $buku)
        <div class="kotak">
            <h3>{{ $buku->judul }}</h3>
            <p>{{ $buku->sinopsis }}</p>
            <p>{{ $buku->penulis }}</p>
            <p>{{ $buku->penerbit }}</p>
            <p>{{ $buku->tahun_terbit }}</p>
            <p>{{ $buku->stok }}</p>
            <p>{{ $buku->harga }}</p>
            <p>{{ $buku->kategori_id }}</p>
        </div>
    @endforeach

</body>
</html>
