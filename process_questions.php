<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sitabis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form kuesioner
$id_masyarakat = $_POST['id_masyarakat'];
$jwb1 = $_POST['jwb1'];
$jwb2 = $_POST['jwb2'];
$jwb3 = $_POST['jwb3'];
$jwb4 = $_POST['jwb4'];
$jwb5 = $_POST['jwb5'];
$jwb6 = $_POST['jwb6'];
$jwb7 = $_POST['jwb7'];
$jwb8 = $_POST['jwb8'];
$jwb9 = $_POST['jwb9'];
$jwb10 = $_POST['jwb10'];
$jwb11 = $_POST['jwb11'];
$jwb12 = $_POST['jwb12'];
$jwb13 = $_POST['jwb13'];
$jwb14 = $_POST['jwb14'];
$jwb15 = $_POST['jwb15'];
$jwb16 = $_POST['jwb16'];
$jwb17 = $_POST['jwb17'];

$hasil = 0;
if ($jwb1 == 0) {
    $hasil++;
};
if ($jwb4 == 0) {
    $hasil++;
};
if ($jwb5 == 0) {
    $hasil++;
};

if ($jwb8 == 0) {
    $hasil++;
};
if ($jwb10 == 0) {
    $hasil++;
};
if ($jwb11 == 0) {
    $hasil++;
};
if ($jwb12 == 0) {
    $hasil++;
};
if ($jwb13 == 0) {
    $hasil++;
};
if ($jwb14 == 0) {
    $hasil++;
};
if ($jwb15 == 0) {
    $hasil++;
};
if ($jwb16 == 0) {
    $hasil++;
};
if ($jwb17 == 0) {
    $hasil++;
};


// Simpan data ke tabel, termasuk id_masyarakat
$sql = "INSERT INTO phbs_answer2 (id_masyarakat, jwb1, jwb2, jwb3, jwb4, jwb5, jwb6, jwb7, jwb8, jwb9, jwb10, jwb11, jwb12, jwb13, jwb14, jwb15, jwb16, jwb17)
        VALUES ('$id_masyarakat', '$jwb1', '$jwb2', '$jwb3', '$jwb4', '$jwb5', '$jwb6', '$jwb7', '$jwb8', '$jwb9', '$jwb10', '$jwb11', '$jwb12', '$jwb13', '$jwb14', '$jwb15', '$jwb16', '$jwb17')";

if ($conn->query($sql) === TRUE) {
    // Array to hold unmet indicators
    $unmetIndicators = [];

    // Check each relevant answer and add to unmetIndicators array if the value is 0
    if ($jwb4 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 1: Persalinan di faskes', 'suggestion' => 'Sebaiknya lakukan persalinan di faskes. Persalinan yang mendapat pertolongan dari pihak tenaga kesehatan baik itu dokter, bidan ataupun paramedis memiliki standar dalam penggunaan peralatan yang bersih, steril dan juga aman. Langkah tersebut dapat mencegah infeksi dan bahaya lain yang beresiko bagi keselamatan ibu dan bayi yang dilahirkan.'];
    }
    if ($jwb8 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 2: ASI Eksklusif', 'suggestion' => 'Sebaiknya berikan bayi usia 0-6 bulan ASI Eksklusif. Belum boleh diberikan susu formula dan/atau MPASI. Karena bayi 0-6 bulan hanya membutuhkan ASI. Setelah usia 6 bulan diberikan MPASI.'];
    }
    if ($jwb10 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 3: Menimbang bayi dan balita secara rutin', 'suggestion' => 'Lakukan penimbangan di Posyandu sejak bayi berusia 1 bulan hingga 5 tahun. Untuk memantau pertumbuhan anak dan mendapatkan imunisasi lengkap.'];
    }
    if ($jwb11 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 4: Cuci tangan dengan sabun dan air bersih mengalir', 'suggestion' => 'Biasakanlah keluarga untuk cuci tangan pakai sabun dan air bersih mengalir. Untuk menjaga kebersihan diri sekaligus langkah pencegahan penularan berbagai jenis penyakit.'];
    }
    if ($jwb12 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 5: Menggunakan air bersih', 'suggestion' => 'Upayakan keluarga menggunakan air bersih sebagai kebutuhan dasar untuk menjalani hidup sehat.'];
    }
    if ($jwb13 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 6: Menggunakan jamban sehat', 'suggestion' => 'Upayakan menggunakan jamban sehat (jamban yang pembuangannya ke septic tank) untuk melindungi keluarga dari berbagai risiko penyakit.'];
    }
    if ($jwb14 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 7: Pemberantasan sarang nyamuk dengan 3M Plus', 'suggestion' => 'Biasakan kegiatan pemberantasan sarang nyamuk dengan 3M Plus minimal 1x/minggu untuk mencegah kejadian penyakit DBD.'];
    }
    if ($jwb15 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 8: Mengkonsumsi buah dan sayur setiap hari', 'suggestion' => 'Biasakanlah mengkonsumsi buah dan sayur setiap hari. Buah dan sayur dapat memenuhi kebutuhan vitamin, mineral, serta serat yang dibutuhkan tubuh.'];
    }
    if ($jwb16 == 0) {
        $unmetIndicators[] = ['title' => 'Indikator 9: Melakukan aktivitas fisik setiap hari', 'suggestion' => 'Lakukan aktivitas fisik setiap hari untuk mencegah munculnya penyakit tidak menular.'];
    }
    if ($jwb17 == 1) {
        $unmetIndicators[] = ['title' => 'Indikator 10: Tidak merokok di dalam rumah', 'suggestion' => 'Sebaiknya tidak merokok di dalam rumah untuk menghindarkan keluarga dari berbagai masalah kesehatan.'];
    }

    // Convert the unmet indicators array to a JSON string to pass via URL
    $unmetIndicatorsJSON = urlencode(json_encode($unmetIndicators));

    // Redirect to hasil2.html with unmet indicators
    header("Location: hasil2.html?unmetIndicators=$unmetIndicatorsJSON");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
