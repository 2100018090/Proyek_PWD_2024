<?php
session_start();
// Menghapus session setelah mencetak tiket
unset($_SESSION['tiket_dipesan']);

echo "<script>alert('Anda Yakin Sudah Cetak');</script>";
echo "<script>document.location='ticket.php'; exit;</script>";

exit();
?>