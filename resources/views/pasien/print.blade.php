<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Pasien</title>
    <!-- Tambahkan CSS atau style yang diperlukan untuk tampilan cetak -->
</head>
<body>
    <h1>Data Pasien</h1>
    <p>ID Pasien: {{ $pasien->id_pasien }}</p>
    <p>Nama: {{ $pasien->nama_pasien }}</p>
    <p>Telepon : {{ $pasien->telp }}</p>
    <p>Alamat: {{ $pasien->alamat }}</p>
    <p>RT/RW : {{ $pasien->rt_rw }}</p>
    <p>Kelurahan : {{ $pasien->id_kelurahan }}</p>
    <p>Tanggal Lahir: {{ $pasien->tanggal_lahir }}</p>
    <p>Jenis Kelamin: {{ $pasien->jenis_kelamin }}</p>
    <!-- Tambahkan informasi lain yang ingin dicetak -->

    <!-- Tambahkan tombol atau tautan untuk mencetak halaman -->
    <button onclick="window.print()">Cetak</button>
</body>
</html>
