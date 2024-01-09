<?php
// Memanggil file koneksi.php
include_once("../../../koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id_tiket = $_POST['id_tiket'];
    $jenis_tiket = $_POST['jenis_tiket'];
    $harga = $_POST['harga'];



    // Syntax untuk mengupdate data user berdasarkan id 
    $result = mysqli_query($con, "UPDATE tiket SET jenis_tiket='$jenis_tiket',harga='$harga' WHERE id_tiket='$id_tiket'");

    // Redirect ke index.php
    header("Location: ../tiket.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM tiket WHERE id_tiket='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $jenis_tiket = $user_data['jenis_tiket'];
    $harga = $user_data['harga'];
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
      <form method="post" action="#">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Update Data Transaksi</h2>
        </div>
        <div class="info">
            <input type="text" name="jenis_tiket" placeholder="Jenis_Tiket" value="<?php echo $jenis_tiket; ?>">
            <input type="number" name="harga" placeholder="Harga" value="<?php echo $harga; ?>">
            <input type="hidden" name="id_tiket" value=<?php echo $id?>>
        </div>
        <button type="submit" name="update">Update</button>
      </form>
    </div>
  </body>
</html>