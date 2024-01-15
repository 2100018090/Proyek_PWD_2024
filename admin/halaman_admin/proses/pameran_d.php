<?php
     include "../../../koneksi.php";

    $id = $_GET['id'];

    $sql = mysqli_query($con, 'delete from pameran where id_pameran="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='../pameran.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.location.href='../pameran.php';</script>";
}
?>
