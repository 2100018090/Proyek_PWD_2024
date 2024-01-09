<?php
session_start();
session_destroy();
echo "<script>window.alert('Sampai Jumpa Kembali di Website Kami');window.location.href='index.php';</script>";
?>
