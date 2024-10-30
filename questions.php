<!DOCTYPE html>
<html lang="id">
<?php
// Contoh jika id_masyarakat diambil dari URL parameter
$id_masyarakat = isset($_GET['id_masyarakat']) ? $_GET['id_masyarakat'] : '';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner - Pertanyaan</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            background-color: #ffffff;
            color: #3e7cb1;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .header img {
            height: 50px;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
        }


        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #3e7cb1;
            font-weight: 600;
            font-size: 26px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #3e7cb1;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-top: 8px;
        }

        .radio-group label {
            margin-right: 20px;
            font-size: 16px;
            color: #202124;
        }

        input[type="radio"] {
            margin-right: 8px;
            accent-color: #3e7cb1;
        }

        .submit-btn {
            background-color: #3e7cb1;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2d5c8a;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .progress-bar .step {
            width: 25%;
            text-align: center;
            font-size: 14px;
            color: #333;
        }

        .progress-bar .step.active {
            color: #3e7cb1;
        }

        .progress-bar .line {
            flex-grow: 1;
            height: 3px;
            background-color: #ccc;
            margin: 0 10px;
        }

        .progress-bar .line.active {
            background-color: #3e7cb1;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">
            <img src="assets/img/logo3.png" alt="SITABIS Logo">
        </div>
        <!-- <h1>SISTEM INFORMASI PHBS RUMAH TANGGA PUSKESMAS CICALENGKA DTP</h1> -->
    </div>

    <div class="container">
        <h2>PENDATAAN PHBS <br> PUSKESMAS CICALENGKA DTP</h2>
        <!-- Question Form -->
        <form action="process_questions.php" method="post">
            <input type="hidden" id="id_masyarakat" name="id_masyarakat" value="<?php echo $id_masyarakat; ?>" required>
            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Apakah ada ibu bersalin/ bayi di bawah 12 bulan?</label>
                <div class="radio-group">
                    <input type="radio" id="ya1" name="jwb1" value=1 required>
                    <label for="ya1">Ya</label>
                    <input type="radio" id="tidak1" name="jwb1" value=0 required>
                    <label for="tidak1">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Jika ada, sebutkan jumlahnya!</label>
                <input type="number" name="jwb2" required>
            </div>

            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Berapa usia bayi tersebut?</label>
                <input type="number" name="jwb3" required>
            </div>

            <!-- Pertanyaan Indikator 1 -->
            <div class="form-group">
                <label>Apakah Persalinan tersebut ditolong oleh Tenaga Kesehatan?</label>
                <div class="radio-group">
                    <input type="radio" id="ya4" name="jwb4" value=1 required>
                    <label for="ya4">Ya</label>
                    <input type="radio" id="tidak4" name="jwb4" value=0 required>
                    <label for="tidak4">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Apakah ada bayi di bawah 6 bulan?</label>
                <div class="radio-group">
                    <input type="radio" id="ya5" name="jwb5" value=1 required>
                    <label for="ya5">Ya</label>
                    <input type="radio" id="tidak5" name="jwb5" value=0 required>
                    <label for="tidak5">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan No Indikator  -->
            <div class="form-group">
                <label>Makanan apa yang diberikan kepada bayi di bawah 6 bulan tersebut?</label>
                <div class="radio-group">
                    <input type="radio" id="asi_saja" name="jwb6" value=1 required>
                    <label for="asi_saja">ASI saja</label>
                    <input type="radio" id="susu_formula" name="jwb6" value=2 required>
                    <label for="susu_formula">Susu formula</label>
                    <input type="radio" id="asi_susu_formula" name="jwb6" value=3 required>
                    <label for="asi_susu_formula">ASI dan Susu Formula</label>
                </div>
            </div>

            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Apakah ada bayi usia 6-12 bulan? Jika ada, sebutkan jumlahnya!</label>
                <input type="number" name="jwb7" required>
            </div>

            <!-- Pertanyaan Indikator 2 -->
            <div class="form-group">
                <label>Apakah bayi 6-12 bulan tersebut hanya minum ASI ketika usia 0-6 bulan?</label>
                <div class="radio-group">
                    <input type="radio" id="ya8" name="jwb8" value=1 required>
                    <label for="ya8">Ya</label>
                    <input type="radio" id="tidak8" name="jwb8" value=0 required>
                    <label for="tidak8">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan NO Indikator -->
            <div class="form-group">
                <label>Apakah ada balita usia 2-5 tahun? sebutkan berapa jumlahnya?</label>
                <input type="number" name="jwb9" required>
            </div>

            <!-- Pertanyaan Indikator 3 -->
            <div class="form-group">
                <label>Apakah Bayi dan/atau Balita rutin ditimbang di Posyandu?</label>
                <div class="radio-group">
                    <input type="radio" id="ya10" name="jwb10" value=1 required>
                    <label for="ya10">Ya</label>
                    <input type="radio" id="tidak10" name="jwb10" value=0 required>
                    <label for="tidak10">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 4 -->
            <div class="form-group">
                <label>Apakah Bayi/Balita sudah Imunisasi Dasar Lengkap?</label>
                <div class="radio-group">
                    <input type="radio" id="ya11" name="jwb11" value=1 required>
                    <label for="ya11">Ya</label>
                    <input type="radio" id="tidak11" name="jwb11" value=0 required>
                    <label for="tidak11">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 5 -->
            <div class="form-group">
                <label>Apakah air yang digunakan untuk mandi cuci kakus bersih (tidak berwarna/berrasa/bau)?</label>
                <div class="radio-group">
                    <input type="radio" id="ya12" name="jwb12" value=1 required>
                    <label for="ya12">Ya</label>
                    <input type="radio" id="tidak12" name="jwb12" value=0 required>
                    <label for="tidak12">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 6 -->
            <div class="form-group">
                <label>Apakah keluarga terbiasa selalu cuci tangan dengan air bersih dan sabun?</label>
                <div class="radio-group">
                    <input type="radio" id="ya13" name="jwb13" value=1 required>
                    <label for="ya13">Ya</label>
                    <input type="radio" id="tidak13" name="jwb13" value=0 required>
                    <label for="tidak13">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 7 -->
            <div class="form-group">
                <label>Apakah rumah tangga Anda rutin (minimal seminggu sekali) melakukan pemberantasan jentik nyamuk (3M Plus) di rumah?</label>
                <div class="radio-group">
                    <input type="radio" id="ya9" name="jwb14" value=1 required>
                    <label for="ya14">Ya</label>
                    <input type="radio" id="tidak14" name="jwb14" value=0 required>
                    <label for="tidak14">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 8 -->
            <div class="form-group">
                <label>Apakah rutin makan buah dan sayur setiap hari?</label>
                <div class="radio-group">
                    <input type="radio" id="ya15" name="jwb15" value=1 required>
                    <label for="ya15">Ya</label>
                    <input type="radio" id="tidak15" name="jwb15" value=0 required>
                    <label for="tidak15">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 9 -->
            <div class="form-group">
                <label>Apakah semua anggota rumah tangga rutin melakukan aktivitas fisik (minimal 30 menit) setiap hari?</label>
                <div class="radio-group">
                    <input type="radio" id="ya16" name="jwb16" value=1 required>
                    <label for="ya16">Ya</label>
                    <input type="radio" id="tidak16" name="jwb16" value=0 required>
                    <label for="tidak16">Tidak</label>
                </div>
            </div>

            <!-- Pertanyaan Indikator 10 -->
            <div class="form-group">
                <label>Apakah di dalam rumah tangga ada yang merokok di dalam rumah?</label>
                <div class="radio-group">
                    <input type="radio" id="ya17" name="jwb17" value=1 required>
                    <label for="ya17">Ya</label>
                    <input type="radio" id="tidak17" name="jwb17" value=0 required>
                    <label for="tidak17">Tidak</label>
                </div>
            </div>

            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>

</body>

</html>