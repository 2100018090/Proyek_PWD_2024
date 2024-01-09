<?php
    session_start();
    session_destroy();
    echo "<script>window.alert('Sekarang Anda Keluar');</script>";
    header("location:../../index.php");
?>
