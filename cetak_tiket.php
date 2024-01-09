<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lembar Tiket</title>
  <link href="https://fonts.googleapis.com/css?family=Jura:400,700|Questrial|Inconsolata:400,700|Montserrat:900|Old+Standard+TT:700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="css/tiket.css">

</head>
<body>
<?php
  include "koneksi.php";
  $pengunjung = mysqli_query($con, 'select * from pengunjung ORDER BY id_pengunjung DESC LIMIT 1');
  $cetak_pengunjung = mysqli_fetch_array($pengunjung);
?>
<?php
  include "koneksi.php";
  $transaksi = mysqli_query($con, 'select * from transaksi ORDER BY id_transaksi DESC LIMIT 1');
  $cetak_transaksi = mysqli_fetch_array($transaksi);
?>
<?php
  include "koneksi.php";
  $tiket = mysqli_query($con, 'select * from tiket ORDER BY id_tiket DESC LIMIT 1');
  $cetak_tiket = mysqli_fetch_array($tiket);
?>


<!-- partial:index.partial.html -->
<div class="main-content">
  <div class="ticket">
    <div class="ticket__main">
      <div class="header">Heritage Revolution</div>
      <div class="info passenger">
        <div class="info__item">Nama</div>
        <div class="info__detail"><?=$cetak_pengunjung['nama_pengunjung'];?></div>
      </div>
      <div class="info platform"> <span>jumlah </span><span>tiket </span><span>Museum</span>
        <div class="number">
          <div><?=$cetak_transaksi['jumlah_tiket'];?></div>
          <!-- <div><span></span><span></span></div> -->
        </div>
      </div>
      <div class="info departure">
        <div class="info__item">Asal</div>
        <div class="info__detail"><?=$cetak_pengunjung['asal'];?></div>
      </div>
      <div class="info arrival">
        <div class="info__item">Total_Harga</div>
        <div class="info__detail"><?=$cetak_transaksi['total_harga'];?></div>
      </div>
      <div class="info date">
        <div class="info__item">Tanggal</div>
        <div class="info__detail"><?=$cetak_transaksi['tgl_beli'];?></div>
      </div>
      <div class="info time">
        <div class="info__item">Status</div>
        <div class="info__detail"><?=$cetak_transaksi['status'];?></div>
      </div>
      <div class="info carriage">
        <div class="info__item">Jenis</div>
        <div class="info__detail"><?=$cetak_tiket['jenis_tiket'];?></div>
      </div>
      <div class="info seat">
        <div class="info__item">Jumlah</div>
        <div class="info__detail"><?=$cetak_transaksi['jumlah_tiket'];?></div>
      </div>
      <div class="fineprint"> 
        <p>CHECKIN DIMULAI 15 MENIT SEBELUM MASUK KEMUSEUM. SNACKS TERSEDIA UNTUK DIBELI DARI HERITAGE REVOLUTION.</p>
        <p>Tiket ini tidak dapat dikembalikan • Otoritas Museum HERITAGE REVOLUTION</p>
      </div>
      <div class="snack">
        <svg viewBox="0 -11 414.00053 414">
          <path d="m202.480469 352.128906c0-21.796875-17.671875-39.46875-39.46875-39.46875-21.800781 0-39.472657 17.667969-39.472657 39.46875 0 21.800782 17.671876 39.472656 39.472657 39.472656 21.785156-.023437 39.445312-17.683593 39.46875-39.472656zm0 0"></path>
          <path d="m348.445312 348.242188c2.148438 21.691406-13.695312 41.019531-35.390624 43.167968-21.691407 2.148438-41.015626-13.699218-43.164063-35.390625-2.148437-21.691406 13.695313-41.019531 35.386719-43.167969 21.691406-2.148437 41.019531 13.699219 43.167968 35.390626zm0 0"></path>
          <path d="m412.699219 63.554688c-1.3125-1.84375-3.433594-2.941407-5.699219-2.941407h-311.386719l-3.914062-24.742187c-3.191407-20.703125-21.050781-35.9531252-42-35.871094h-42.699219c-3.867188 0-7 3.132812-7 7s3.132812 7 7 7h42.699219c14.050781-.054688 26.03125 10.175781 28.171875 24.0625l33.800781 213.515625c3.191406 20.703125 21.050781 35.957031 42 35.871094h208.929687c3.863282 0 7-3.132813 7-7 0-3.863281-3.136718-7-7-7h-208.929687c-14.050781.054687-26.03125-10.175781-28.171875-24.0625l-5.746094-36.300781h213.980469c18.117187-.007813 34.242187-11.484376 40.179687-28.597657l39.699219-114.578125c.742188-2.140625.402344-4.511718-.914062-6.355468zm0 0"></path>
        </svg>
      </div>
      <div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id"><?=$cetak_transaksi['id_transaksi'];?></div>
      </div>
    </div>
    <div class="ticket__side">
      <div class="logo"> 
        <p>Heritage Revolution</p>
      </div>
      <div class="info side-arrive">
        <div class="info__item">Asal</div>
        <div class="info__detail"><?=$cetak_pengunjung['asal'];?></div>
      </div>
      <div class="info side-depart">
        <div class="info__item">Total_Harga</div>
        <div class="info__detail"><?=$cetak_transaksi['total_harga'];?></div>
      </div>
      <div class="info side-date">
        <div class="info__item">Tanggal</div>
        <div class="info__detail"><?=$cetak_transaksi['tgl_beli'];?></div>
      </div>
      <div class="info side-time">
        <div class="info__item">Status</div>
        <div class="info__detail"><?=$cetak_transaksi['status'];?></div>
      </div>
      <div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id"><?=$cetak_transaksi['id_transaksi'];?></div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <p><a href="logout.php">Selesai</a></p>
  <i class="fa-solid fa-backward"></i>
</body>
</html>
<script>
  window.print();

</script>
