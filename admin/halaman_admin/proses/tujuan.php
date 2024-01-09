<?php
include_once("../../../koneksi.php");

$id_transaksi = $_GET['id_transaksi'];
$status = 'Selesai';

$sql = mysqli_query($con, 'update transaksi set status="'.$status.'" ');
if($sql) {
    echo "<script>window.alert('Transaksi telah Selesai');window.location.href='../dashboard.php';</script>";
} else {
    echo "<script>window.alert('Terjadi ERROR!!');window.location.href='../dashboard.php';</script>";
}
?>
