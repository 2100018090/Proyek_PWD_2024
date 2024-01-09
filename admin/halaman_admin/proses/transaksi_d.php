<?php
     include "../../../koneksi.php";

    $id = $_GET['id'];

    $sql = mysqli_query($con, 'delete from transaksi where id_transaksi="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='../dashboard.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.location.href='../dashboard.php';</script>";
}
?>
