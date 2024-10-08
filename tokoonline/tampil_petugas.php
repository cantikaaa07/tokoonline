<?php 
include "header_petugas.php";
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <section class="vh-100" style="background-color: #2779e2;"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>List Petugas</title>
    
    <section class="vh-100" style="background-color: pink;">
        <style>
            .table-container {
                background: rgba(255, 255, 255, 0.9);
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0px 0px 15px 0px #000;
                margin-top: 20px;
            }

            .btn-primary {
                background-color: #2c3e50;
                border-color: #2c3e50;
            }

            .btn-primary:hover {
                background-color: #1a252f;
                border-color: #1a252f;
            }

            .btn-success {
                background-color: #27ae60;
                border-color: #27ae60;
            }

            .btn-success:hover {
                background-color: #1e8449;
                border-color: #1e8449;
            }

            .btn-danger {
                background-color: #e74c3c;
                border-color: #e74c3c;
            }

            .btn-danger:hover {
                background-color: #c0392b;
                border-color: #c0392b;
            }
        </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-4">List Petugas</h3>
        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA PETUGAS</th>
                        <th>LEVEL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_petugas = mysqli_query($conn, "select * from petugas");
                    $no = 0;
                    while ($data_petugas = mysqli_fetch_array($qry_petugas)) {
                        $no++; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_petugas['nama_petugas'] ?></td>
                            <td><?= $data_petugas['level'] ?></td>
                            <td>
                                <a href="ubah_petugas.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" class="btn btn-success">Ubah</a> |
                                <a href="hapus_petugas.php?id_petugas=<?= $data_petugas['id_petugas'] ?>"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-left mt-4">
            <a href="tambah_petugas.php" class="btn btn-primary">Tambah Petugas</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</section>
</html>