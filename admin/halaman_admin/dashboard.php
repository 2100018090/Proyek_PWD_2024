<?php

require '../../koneksi.php';
session_start();

if ($_SESSION['status']=="register") {

    $sql = "SELECT COUNT(*) as id_pengunjung FROM pengunjung";
    $result = mysqli_query($con, $sql);
    $sql1 = "SELECT COUNT(*) as id_tiket  FROM tiket";
    $result1 = mysqli_query($con, $sql1);
    $sql2 = "SELECT COUNT(*) as id_transaksi FROM transaksi";
    $result2 = mysqli_query($con, $sql2);
    $sql3 = "SELECT SUM(total_harga) AS total_harga FROM transaksi";
    $result3 = mysqli_query($con, $sql3);

    // Periksa apakah kueri berhasil dijalankan
    if (!$result) {
        die("Kesalahan kueri: " . mysqli_error($con));
    }if (!$result1) {
        die("Kesalahan kueri: " . mysqli_error($con));
    }if (!$result2) {
        die("Kesalahan kueri: " . mysqli_error($con));
    }if (!$result3) {
        die("Kesalahan kueri: " . mysqli_error($con));
    }

    // Ambil data dari hasil kueri
    $row = mysqli_fetch_assoc($result);
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
    $row3 = mysqli_fetch_assoc($result3);

    // Simpan data dalam variabel
    $id_pengunjung = $row['id_pengunjung'];
    $id_tiket = $row1['id_tiket'];
    $id_transaksi = $row2['id_transaksi'];
    $total_harga = $row3['total_harga'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templete admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class = "sidebar">
    <div class = "brand">
        <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
        <h1>Dashboard</h1>
    </div>
    <ul>
        <li id = "Dashboard"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
        <script>
            // Mendapatkan elemen dengan id 'dashboardLink'
            var dashboardLink = document.getElementById('Dashboard');

            // Menambahkan event listener untuk menanggapi klik pada elemen
            dashboardLink.addEventListener('click', function() {
                // Pindah ke halaman lain
                window.location.href = 'dashboard.php';
            });
        </script>
        <li id = "Tiket"><i class="fa-solid fa-ticket"></i>&nbsp;<span>Data Tiket</span></li>
        <script>
            // Mendapatkan elemen dengan id 'dashboardLink'
            var dashboardLink = document.getElementById('Tiket');

            // Menambahkan event listener untuk menanggapi klik pada elemen
            dashboardLink.addEventListener('click', function() {
                // Pindah ke halaman lain
                window.location.href = 'tiket.php';
            });
        </script>
        <li id = "Pengunjung"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>Data Pengunjung</span></li>
        <script>
            // Mendapatkan elemen dengan id 'dashboardLink'
            var dashboardLink = document.getElementById('Pengunjung');

            // Menambahkan event listener untuk menanggapi klik pada elemen
            dashboardLink.addEventListener('click', function() {
                // Pindah ke halaman lain
                window.location.href = 'pengunjung.php';
            });
        </script>
        <li id = "Transaksi"><i class="fa-solid fa-money-check-dollar"></i>&nbsp;<span>Data Transaksi</span></li>
        <script>
            // Mendapatkan elemen dengan id 'dashboardLink'
            var dashboardLink = document.getElementById('Transaksi');

            // Menambahkan event listener untuk menanggapi klik pada elemen
            dashboardLink.addEventListener('click', function() {
                // Pindah ke halaman lain
                window.location.href = 'transaksi.php';
            });
        </script>
        <li><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp;<span>Biaya</span></li>
        <li><i class="fa-solid fa-camera-retro"></i>&nbsp;&nbsp;<span>Pameran</span></li>
        <li><i class="fa-regular fa-image"></i>&nbsp;&nbsp;<span>Koleksi</span></li>
        <li><i class="fa-regular fa-image"></i>&nbsp;&nbsp;<span>Karya_Seni</span></li>
    </ul>
</div>

<div class = "container">
    <div class = "header">
        <div class = "nav">
            <div class = "search">
                <form class="cari" action="" method="post" style="display: flex;">
                    <input type="text" name="keyword" placeholder = "Pencarian..." autofocus autocomplete="off">
                    <button type = "submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class = "user">
                <a href="#" class = "btn"><i class="fa-solid fa-plus"></i></a>
                <a href="#" class = "btn"><i class="fa-solid fa-bell"></i></a>
                <a href="logout.php" class = "btn"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </div>
    <div class = "content">
        <div class = "cards">
            <div class = "card">
                <div class = "box">
                    <h1><?php echo $id_pengunjung; ?></h1>
                    <h3>Data Pengunjung</h3>
                </div>
                <div class = "icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class = "  card">
                <div class = "box">
                    <h1><?php echo $id_tiket; ?></h1>
                    <h3>Data Tiket</h3>
                </div>
                <div class = "icon">
                    <i class="fa-solid fa-ticket"></i>
                </div>
            </div>
            <div class = "card">
                <div class = "box">
                    <h1><?php echo $id_transaksi; ?></h1>
                    <h3>Data Transaksi</h3>
                </div>
                <div class = "icon">
                    <i class="fa-solid fa-money-check-dollar"></i>
                </div>
            </div>
            <div class = "card">
                <div class = "box">
                    <h1><?php echo $total_harga; ?></h1>
                    <h3>Total Pendapatan</h3>
                </div>
                <div class = "icon">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
            </div>
        </div>
        <div class = "content-2">
            <div class = "payments">
                <div class = "title">
                    <h2>Data Pengunjung Museum</h2>
                    <a class="btn" href="?lihat=semua">Lihat Semua</a>
                </div>
                <table>
                    <tr>
                        <th>Pengunjung</th>
                        <th>Jenis_Tiket</th>
                        <th>Tgl_Beli</th>
                        <th>Asal</th>
                        <th>Jumlah_Tiket</th>
                        <th>Status</th>
                    </tr>
                    <?php
                        require '../../koneksi.php';

                        // Inisialisasi $result sebagai objek mysqli_result
                        $result = mysqli_query($con, "SELECT pengunjung.nama_pengunjung, tiket.jenis_tiket, transaksi.tgl_beli, pengunjung.asal, transaksi.jumlah_tiket, transaksi.id_transaksi, transaksi.status FROM tiket LEFT JOIN pengunjung ON tiket.id_tiket = pengunjung.id_tiket LEFT JOIN transaksi ON tiket.id_tiket = transaksi.id_tiket");

                        function cari($keyword, $con)
                        {
                            $query = "SELECT pengunjung.nama_pengunjung, tiket.jenis_tiket, transaksi.tgl_beli, pengunjung.asal, transaksi.jumlah_tiket, transaksi.id_transaksi, transaksi.status FROM tiket LEFT JOIN pengunjung ON tiket.id_tiket = pengunjung.id_tiket LEFT JOIN transaksi ON tiket.id_tiket = transaksi.id_tiket WHERE pengunjung.nama_pengunjung = '$keyword'";
                            return mysqli_query($con, $query);
                        }

                        // tombol cari ditekan
                        if (isset($_POST["cari"])) {
                            $keyword = mysqli_real_escape_string($con, $_POST["keyword"]);
                            $result = cari($keyword, $con);

                            // Cek apakah hasil pencarian kosong
                            if (mysqli_num_rows($result) == 0) {
                                echo "<script> alert('Data Tidak Terdaftar')</script>";
                                $result = mysqli_query($con, "SELECT pengunjung.nama_pengunjung, tiket.jenis_tiket, transaksi.tgl_beli, pengunjung.asal, transaksi.jumlah_tiket, transaksi.id_transaksi, transaksi.status FROM tiket LEFT JOIN pengunjung ON tiket.id_tiket = pengunjung.id_tiket LEFT JOIN transaksi ON tiket.id_tiket = transaksi.id_tiket");
                            }
                        }

                        while ($user_data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $user_data['nama_pengunjung'] . "</td>";
                            echo "<td>" . $user_data['jenis_tiket'] . "</td>";
                            echo "<td>" . $user_data['tgl_beli'] . "</td>";
                            echo "<td>" . $user_data['asal'] . "</td>";
                            echo "<td>" . $user_data['jumlah_tiket'] . "</td>";
                            echo '<td><a href="proses/tujuan.php?id=' . $user_data['id_transaksi'] .'" class="btn" id="editButton">' . $user_data['status'] . '</a></td>';

                        }
                    ?>

                </table>
            </div>
   
        </div>
    </div>
</div>
    
</body>
</html>

<?php
}else{
    echo "<script>
    alert('Maaf Anda Belum Login')
    </script>";
}
?>