<?php
    session_start();
	include "koneksi.php";


        $query_status = mysqli_query($con, "select * from transaksi ORDER BY id_transaksi DESC LIMIT 1");
        $status_transaksi = mysqli_fetch_assoc($query_status)['status'];

        if ($status_transaksi == "Selesai") {
            if (!isset($_SESSION['tiket_dipesan']) || $_SESSION['tiket_dipesan'] !== true) {
                echo "<script>alert('Pesan Tiket Dulu!!!');</script>";
                echo "<script>document.location='ticket.php'; exit;</script>";
                exit();
            } else {
                echo "<script>alert('Silahkan DI Cetak, Hanya Bisa Sekali!!!');</script>";
                echo "<script>document.location='cetak_tiket.php'; exit;</script>";
            }
            exit();
        } else {
            $query = "select * from transaksi ORDER BY id_transaksi DESC LIMIT 1";
            $result = mysqli_query($con, $query);

            // Periksa apakah ada data
            if (!$result || mysqli_num_rows($result) == 0) {
                echo "<script>alert('Anda belum membeli tiket');</script>";
                echo "<script>document.location='ticket.php'; exit;</script>";
                exit();
            } else {
                echo "<script>alert('Masih Dalam Proses');</script>";
                echo "<script>document.location='ticket.php'; exit;</script>";
            }
        }
?>

