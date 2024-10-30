<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username MySQL Anda
$password = "";  // Sesuaikan dengan password MySQL Anda
$dbname = "db_sitabis";  // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$id_masyarakat = $_POST['id_masyarakat'];
$desa = $_POST['desa'];
$alamat = $_POST['alamat'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$jml_keluarga = $_POST['jml_keluarga'];
$usia = $_POST['usia'];

// Menyimpan data ke database
$sql = "INSERT INTO data_masyarakat_ (desa, alamat, no_kk, nama, jml_keluarga, usia) 
        VALUES ('$desa', '$alamat', '$no_kk', '$nama', '$jml_keluarga', '$usia')";

if ($conn->query($sql) === TRUE) {
    $id_masyarakat = $conn->insert_id;
    // Redirect ke halaman lain setelah berhasil
    header('Location: kuesioner.php?id_masyarakat=' . $id_masyarakat);
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
