<?php
// Memanggil file koneksi.php
include_once("../../koneksi.php");

if (isset($_POST['submit'])) {
    if ($_POST['submit']) {

        // $total_harga = $_POST['total_harga'];
        $gambar_koleksi = $_POST['gambar_koleksi'];
        


        $query_koleksi = "insert into koleksi values ('','$gambar_koleksi')";
        $sql_koleksi = mysqli_query($con, $query_koleksi);



        // Cek keberhasilan eksekusi query
        if ($sql_koleksi) {
            echo "<script>window.alert('data_ditambahkan');window.location.href='koleksi.php';</script>";
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
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<table>
<h1>Form Tambah Pameran</h1>
<tr>
<td>Pamflet Pameran</td>
<td>:</td>
<td><input type="file" name="gambar_koleksi" accept="image/*"  onchange="preview(this,'previewne')"></td>
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