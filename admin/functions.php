<?php 

 require '../koneksi.php';

// Fungsi Memasukkan data kedalam Database
function registrasi($data){

	global $con;
	$username = strtolower(stripcslashes( $data["username"]));
	$password = mysqli_real_escape_string($con, $data["password"]);
	$password2 = mysqli_real_escape_string($con, $data["password2"]);	

	//cek username sudah ada atau belum
	$result = mysqli_query($con, "SELECT username FROM pendaftaran WHERE username = '$username'");	

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar')
				</script>";
			return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert('Maaf Konfirmasi Password Anda Salah')
			</script>";
		return false;
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($con, "INSERT INTO pendaftaran VALUES('','$username', '$password', '$password2')");

	return mysqli_affected_rows($con);
}


// Fungsi Masuk ke halaman Admin
if (isset($_POST["register"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];     

	$result = mysqli_query($con, "SELECT * FROM pendaftaran WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "register";
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){
			echo "<script>
			alert('Selamat Datang dimenu ADMIN!!!')
			document.location='halaman_admin/dashboard.php'; 
			exit;   
			</script";
		} else {
			echo "<script>
			alert('Maaf password Anda Salah')
			</script>";
		}           
	}
	
	$error = true;
}



// Valdiasi form login
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
		$usernameErr = "*username harus diisi";
	} else {
		$username = $_POST["username"];
	}
	if (empty($_POST["password"])) {
		$passwordErr = "*password harus diisi";
	} else {
		$password = $_POST["password"];
	}
}
	
 ?>