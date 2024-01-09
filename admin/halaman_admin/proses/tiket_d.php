<?php
include "../../../koneksi.php";

$id = $_GET['id'];

// Check if there are related records in the 'transaksi' table
$sqlCheckTransaksi = mysqli_query($con, 'SELECT * FROM transaksi WHERE id_tiket="' . $id . '" ');

if (mysqli_num_rows($sqlCheckTransaksi) > 0) {
  // Delete related records from the 'transaksi' table
  $sqlDeleteTransaksi = mysqli_query($con, 'DELETE FROM transaksi WHERE id_tiket="' . $id . '" ');

  if (!$sqlDeleteTransaksi) {
    echo "<script>window.alert('Gagal tuk Hapus Transaksi');window.location.href='../tiket.php';</script>";
    exit;
  }
}

// Now, delete the record from the 'pengunjung' table
$sqlDeletePengunjung = mysqli_query($con, 'DELETE FROM pengunjung WHERE id_tiket="' . $id . '" ');

if ($sqlDeletePengunjung) {
  echo "<script>window.alert('Data berhasil dihapus');window.location.href='../tiket.php';</script>";
} else {
  echo "<script>window.alert('Gagal tuk Hapus Pengunjung');window.location.href='../tiket.php';</script>";
}

// Now, delete the record from the 'pengunjung' table
$sqlDeleteTiket = mysqli_query($con, 'DELETE FROM tiket WHERE id_tiket="' . $id . '" ');

if ($sqlDeleteTiket) {
  echo "<script>window.alert('Data berhasil dihapus');window.location.href='../tiket.php';</script>";
} else {
  echo "<script>window.alert('Gagal tuk Hapus Pengunjung');window.location.href='../tiket.php';</script>";
}
?>