<?php
session_start();
if ($_POST) {
    include "koneksi.php";

    $qry_get_produk = mysqli_query($conn, "select * from detail_transaksi where id_detail_transaksi = '" . $_GET['id_detail_transaksi'] . "'");
    $dt_produk = mysqli_fetch_array($qry_get_produk);
    $_SESSION['cart'][] = array(
        'id_produk' => $dt_produk['id_produk'],
        'nama_produk' => $dt_produk['nama_produk'],
        'qty' => $_POST['qty']
    );
}
header('location: keranjang.php');
?>