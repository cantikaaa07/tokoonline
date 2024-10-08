<?php 
include "koneksi.php";
include "header_petugas.php";

// Ambil id_pelanggan dari URL
$id_produk = $_GET['id_produk'];

// Query untuk mengambil data pelanggan berdasarkan id_pelanggan
$qry_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
$dt_produk = mysqli_fetch_array($qry_produk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ubah Produk</title>
</head>
<body>
<div class="container">
    <h3 class="text-center my-4">Ubah Data Produk</h3>
    <form action="proses_ubah_produk.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?= $dt_produk['id_produk'] ?>">

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $dt_produk['nama_produk'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $dt_produk['deskripsi'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <textarea name="harga" id="harga" class="form-control" required><?= $dt_produk['harga'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="foto_produk" class="form-label">Foto Produk (Biarkan kosong jika tidak ingin diubah)</label>
            <input type="file" name="foto_produk" id="foto_produk" class="form-control">
            <img src="assets/foto_produk/<?= $dt_produk['foto_produk'] ?>" alt="Foto Produk" width="100" class="mt-3">
        </div>

        <button type="submit" class="btn btn-primary">Ubah Produk</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

