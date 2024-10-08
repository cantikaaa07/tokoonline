<?php
// Mulai session
session_start(); // untuk memmulai session
session_destroy(); // untuk mengakhiri
header ("location:header_petugas.php?pesan=logout");

?>
