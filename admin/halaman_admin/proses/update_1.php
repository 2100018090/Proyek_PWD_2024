<?php
// Memanggil file koneksi.php
include_once("../../../koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id_tiket = $_POST['id_tiket'];
    $tgl_beli = $_POST['tgl_beli'];
    $jumlah_tiket = $_POST['jumlah_tiket'];



    // Syntax untuk mengupdate data user berdasarkan id 
    $result = mysqli_query($con, "UPDATE transaksi SET tgl_beli='$tgl_beli',jumlah_tiket='$jumlah_tiket' WHERE id_transaksi='$id_transaksi'");

    // Redirect ke index.php
    header("Location: ../halaman_admin.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM tiket WHERE id_tiket='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $id_tiket = $user_data['id_tiket'];
    $id_pengunjung = $user_data['id_pengunjung'];
    $tgl_beli = $user_data['tgl_beli'];
    $jumlah_tiket = $user_data['jumlah_tiket'];
    $total_harga = $user_data['total_harga'];
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/ubah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fa-regular fa-pen-to-square"></i>
        <!-- <i class="fas fa-graduation-cap"></i> -->
        <h1>Update Data</h1>

      </div>
      <form method="post" action="update.php">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Update Data Transaksi</h2>
        </div>
        <div class="info">
            <input type="date" name="tgl_beli" value="<?php echo $tgl_beli; ?>">
            <input type="number" name="jumlah_tiket" value="<?php echo $jumlah_tiket; ?>">
            <input type="radio" name="jenis_tiket" value="<?php echo $jenis_tiket; ?>" >
            <input type="hidden" name="id_transaksi" value=<?php echo $id?>>
        </div>
        <button type="submit" name="update">Update</button>
      </form>
    </div>
  </body>
</html>