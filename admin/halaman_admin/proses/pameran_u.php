<?php
// Memanggil file koneksi.php
include_once("../../../koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id_pameran = $_POST['id_pameran'];
    $nama_pameran = $_POST['nama_pameran'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_akhir = $_POST['tgl_akhir'];
    $deskripsi = $_POST['deskripsi'];
    $gambar_pameran = $_POST['gambar_pameran'];




    // Syntax untuk mengupdate data user berdasarkan id 
    $result = mysqli_query($con, "UPDATE pameran SET nama_pameran='$nama_pameran',tgl_mulai='$tgl_mulai', tgl_akhir='$tgl_akhir', deskripsi='$deskripsi', gambar_pameran='$gambar_pameran' WHERE id_pameran='$id_pameran'");

    // Redirect ke index.php
    header("Location: ../pameran.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM pameran WHERE id_pameran='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $nama_pameran = $user_data['nama_pameran'];
    $tgl_mulai = $user_data['tgl_mulai'];
    $tgl_akhir = $user_data['tgl_akhir'];
    $deskripsi = $user_data['deskripsi'];
    $gambar_pameran = $user_data['gambar_pameran'];
    
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
            <input type="text" name="nama_pameran" placeholder="Nama_Pameran" value="<?php echo $nama_pameran; ?>">
            <input type="date" name="tgl_mulai" placeholder="Tgl_Mulai" value="<?php echo $tgl_mulai; ?>">
            <input type="date" name="tgl_akhir" placeholder="Tgl_Akhir" value="<?php echo $tgl_akhir; ?>">
            <input type="text" name="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>">
            <input type="file" name="gambar_pameran" accept="image/*" placeholder="Gambar_Pameran" value="<?php echo $gambar_pameran; ?>">
            <input type="hidden" name="id_pameran" value=<?php echo $id?>>
        </div>
        <button type="submit" name="update">Update</button>
      </form>
      <script type="text/javascript">
        function preview(gambar,idpreview){
            var gb = gambar.files;
            for (var i = 0; i < gb.length; i++){
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);            
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function(element) { 
                return function(e) { 
                    element.src = e.target.result; 
                }; 
                })(preview);
                reader.readAsDataURL(gbPreview);
            } else{
                alert("Type file tidak sesuai. Khusus image.");
            }
                        
            }    
        }
</script>
    </div>
  </body>
</html>