<?php
// Memanggil file koneksi.php
include_once("../../koneksi.php");

if (isset($_POST['submit'])) {
    if ($_POST['submit']) {

        // $total_harga = $_POST['total_harga'];
        $nama_karya = $_POST['nama_karya'];
        $seniman = $_POST['seniman'];
        $th_pembuatan = $_POST['th_pembuatan'];
        $deskripsi = $_POST['deskripsi'];
        $gambar_karya_seni = $_POST['gambar_karya_seni'];


        $query_karyaseni = "insert into karya_seni values ('','$nama_karya','$seniman','$th_pembuatan','$deskripsi','$gambar_karya_seni')";
        $sql_karyaseni = mysqli_query($con, $query_karyaseni);



        // Cek keberhasilan eksekusi query
        if ($sql_karyaseni) {
            echo "<script>window.alert('data_ditambahkan');window.location.href='karya_seni.php';</script>";
        } else {
            // Tampilkan pesan kesalahan
            echo "Error: " . $con->error;
        }


    } else {
        echo "Data gagal disimpan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/form.css">
    <link rel="shortcut icon" href="../../img/logo3.png">
    <title>Tambah Karya Seni</title>
</head>
<body>

<form action="" method="post">
<table>
<h1>Form Tambah Karya Seni</h1>
<tr>
<td>Nama Karya_Seni</td>
<td>:</td>
<td><input type="text" name="nama_karya"></td>
</tr>

<tr>
<td>Seniman</td>
<td>:</td>
<td><input type="text" name="seniman"></td>
</tr>

<tr>
<td>Tahun Pembuatan</td>
<td>:</td>
<td><input type="Text" name="th_pembuatan"></td>
</tr>

<tr>
<td>Deskripsi Karya Seni</td>
<td>:</td>
<td><input type="Deskripsi" name="deskripsi"></textarea></td>
</tr>

<tr>
<td>Pamflet Karya_Seni</td>
<td>:</td>
<td><input type="file" name="gambar_karya_seni" accept="image/*"  onchange="preview(this,'previewne')"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Simpan"/>
<input type="reset" name="reset" value="Batal" /></td>
</tr>

</table>
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
    
</body>
</html>