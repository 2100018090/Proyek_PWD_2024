<?php
// Memanggil file koneksi.php
include_once("../../../koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id_pengunjung = $_POST['id_pengunjung'];
    $nama_pengunjung = $_POST['nama_pengunjung'];
    $asal = $_POST['asal'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];



    // Syntax untuk mengupdate data user berdasarkan id 
    $result = mysqli_query($con, "UPDATE pengunjung SET nama_pengunjung='$nama_pengunjung',asal='$asal',email='$email',no_telp='$no_telp' WHERE id_pengunjung='$id_pengunjung'");

    // Redirect ke index.php
    header("Location: ../pengunjung.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM pengunjung WHERE id_pengunjung='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $id_tiket = $user_data['id_tiket'];
    $nama_pengunjung = $user_data['nama_pengunjung'];
    $asal = $user_data['asal'];
    $email = $user_data['email'];
    $no_telp = $user_data['no_telp'];
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
      <form method="post" action="">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Update Data Transaksi</h2>
        </div>
        <div class="info">
            <input type="text" name="nama_pengunjung" placeholder="nama_pengunjung" value="<?php echo $nama_pengunjung; ?>">
            <input type="text" name="asal" placeholder="Asal" value="<?php echo $asal; ?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <input type="number" name="no_telp" placeholder="No_Telp" value="<?php echo $no_telp; ?>">
            <input type="hidden" name="id_pengunjung" value=<?php echo $id?>>
        </div>
        <button type="submit" name="update">Update</button>
      </form>
    </div>
  </body>
</html>