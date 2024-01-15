<?php
     include "../../../koneksi.php";

    $id = $_GET['id'];

    $sql = mysqli_query($con, 'delete from koleksi where id_koleksi="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='../koleksi.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.location.href='../koleksi.php';</script>";
}
?>
