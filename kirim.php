<?php
// Konfigurasi database
$servername = "localhost"; // Ganti dengan server MySQL Anda
$username = "root";        // Ganti dengan username MySQL Anda
$password = "";            // Ganti dengan password MySQL Anda
$dbname = "devan_uts_sekolah_sd";    // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Menyiapkan query untuk menyimpan data
$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Menjalankan query dan mengecek apakah berhasil
if ($conn->query($sql) === TRUE) {
    echo "<h3>Pesan Anda berhasil dikirim!</h3>";
    echo "<a href='kontak.html'>Kembali ke halaman kontak</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
