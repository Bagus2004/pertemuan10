<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "mahasiswa"; 

// Membuat koneksi
$conn = mysqli_connect($server, $user, $pass, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}

// Selanjutnya, Anda dapat melakukan operasi database lainnya di sini

// Menutup koneksi setelah selesai
mysqli_close($conn);
?>
