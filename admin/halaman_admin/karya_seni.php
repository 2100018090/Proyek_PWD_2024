<?php

require '../../koneksi.php';


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
}
if (!$result1) {
    die("Kesalahan kueri: " . mysqli_error($con));
}
if (!$result2) {
    die("Kesalahan kueri: " . mysqli_error($con));
}
if (!$result3) {
    die("Kesalahan kueri: " . mysqli_error($con));
}

// Ambil data dari hasil kueris
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>Transaksi</h1>
        </div>
        <ul>
            <li id="Dashboard"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Dashboard');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function () {
                    // Pindah ke halaman lain
                    window.location.href = 'dashboard.php';
                });
            </script>
            <li id="Tiket"><i class="fa-solid fa-ticket"></i>&nbsp;<span>Data Tiket</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Tiket');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function () {
                    // Pindah ke halaman lain
                    window.location.href = 'tiket.php';
                });
            </script>
            <li id="Pengunjung"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>Data Pengunjung</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Pengunjung');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function () {
                    // Pindah ke halaman lain
                    window.location.href = 'pengunjung.php';
                });
            </script>
            <li id="Transaksi"><i class="fa-solid fa-money-check-dollar"></i>&nbsp;<span>Data Transaksi</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Transaksi');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function () {
                    // Pindah ke halaman lain
                    window.location.href = 'transaksi.php';
                });
            </script>
            <li><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp;<span>Biaya</span></li>
            <li id="Pameran"><i class="fa-solid fa-camera-retro"></i>&nbsp;&nbsp;<span>Pameran</span></li>
            <script>
            // Mendapatkan elemen dengan id 'dashboardLink'
            var dashboardLink = document.getElementById('Pameran');

            // Menambahkan event listener untuk menanggapi klik pada elemen
            dashboardLink.addEventListener('click', function() {
                // Pindah ke halaman lain
                window.location.href = 'pameran.php';
            });
            </script>
            <li id="Koleksi"><i class="fa-solid fa-gear"></i>&nbsp;&nbsp;<span>Koleksi</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Koleksi');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function() {
                    // Pindah ke halaman lain
                    window.location.href = 'Koleksi.php';
                });
            </script>
            <li id="Karya_Seni"><i class="fa-regular fa-image"></i>&nbsp;&nbsp;<span>Karya_Seni</span></li>
            <script>
                // Mendapatkan elemen dengan id 'dashboardLink'
                var dashboardLink = document.getElementById('Karya_Seni');

                // Menambahkan event listener untuk menanggapi klik pada elemen
                dashboardLink.addEventListener('click', function() {
                    // Pindah ke halaman lain
                    window.location.href = 'karya_seni.php';
                });
            </script>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="logout.php" class="btn"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php echo $id_pengunjung; ?>
                        </h1>
                        <h3>Data Pengunjung</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="  card">
                    <div class="box">
                        <h1>
                            <?php echo $id_tiket; ?>
                        </h1>
                        <h3>Data Tiket</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php echo $id_transaksi; ?>
                        </h1>
                        <h3>Data Transaksi</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-money-check-dollar"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php echo $total_harga; ?>
                        </h1>
                        <h3>Total Pendapatan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="payments">
                    <div class="title">
                        <h2>Data Karya Seni</h2>
                        <a href="tambah_karya_seni.php" class="btn">Tambah Karya_Seni</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nama Karya</th>
                            <th>Seniman</th>
                            <th>Tahun Pembuatan</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        require '../../koneksi.php';
            
                        $result = mysqli_query($con, "SELECT * FROM karya_seni");
                        while ($user_data = mysqli_fetch_array($result)) {
                            $nama_karya = $user_data['nama_karya'];
                            $seniman = $user_data['seniman'];
                            $th_pembuatan = $user_data['th_pembuatan'];
                            $deskripsi = $user_data['deskripsi'];
                            $gambar_karya_seni = $user_data['gambar_karya_seni'];
                            echo "<tr>";
                            echo "<td>" . $user_data['nama_karya'] . "</td>";
                            echo "<td>" . $user_data['seniman'] . "</td>";
                            echo "<td>" . $user_data['th_pembuatan'] . "</td>";
                            echo "<td>" . $user_data['deskripsi'] . "</td>";
                            echo "<td>" . $user_data['gambar_karya_seni'] . "</td>";
                            echo '<td><a href="proses/pameran_u.php?id=' . $user_data['id_karyaseni'] . '" class="btn" id="editButton">Update</a></td>';
                            echo '<td><a href="proses/pameran_d.php?id=' . $user_data['id_karyaseni'] . '" class="btn" id="deleteButton">Delete</a></td>';
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>