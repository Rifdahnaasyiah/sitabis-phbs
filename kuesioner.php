<!DOCTYPE html>
<html lang="id">
<?php
// Contoh jika id_masyarakat diambil dari URL parameter
$id_masyarakat = isset($_GET['id_masyarakat']) ? $_GET['id_masyarakat'] : '';

// Database connection
$conn = new mysqli("localhost", "root", "", "db_sitabis");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions from the 'kuesioner' table
$query = "SELECT * FROM kuesioner";
$result = $conn->query($query);
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
    <div class="header">
        <div class="logo">
            <img src="assets/img/logo3.png" alt="SITABIS Logo">
        </div>
    </div>

    <div class="container">
        <h2>PENDATAAN PHBS <br> PUSKESMAS CICALENGKA DTP</h2>
        <form action="process_questions.php" method="post">
            <input type="hidden" id="id_masyarakat" name="id_masyarakat" value="<?php echo $id_masyarakat; ?>" required>

            <?php
            if ($result->num_rows > 0) {
                $questionNumber = 1;
                while ($row = $result->fetch_assoc()) {
                    $pertanyaan = $row['pertanyaan'];
                    $id_indikator = $row['id_indikator'];


                    echo '<div class="form-group">';
                    echo "<label>$pertanyaan</label>";

                    // Check if the question is a yes/no type (if id_indikator is set)
                    if (is_null($id_indikator)) {
                        // Free text input if no indicator is provided
                        echo '<input type="text" name="jwb' . $questionNumber . '" required>';
                    } else {
                        // Yes/No radio buttons
                        echo '<div class="radio-group">';
                        echo '<input type="radio" id="ya' . $questionNumber . '" name="jwb' . $questionNumber . '" value="1" required>';
                        echo '<label for="ya' . $questionNumber . '">Ya</label>';
                        echo '<input type="radio" id="tidak' . $questionNumber . '" name="jwb' . $questionNumber . '" value="0" required>';
                        echo '<label for="tidak' . $questionNumber . '">Tidak</label>';
                        echo '</div>';
                    }

                    echo '</div>';
                    $questionNumber++;
                }
            } else {
                echo "<p>Tidak ada pertanyaan tersedia.</p>";
            }
            ?>

            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>

</body>

</html>

<?php
$conn->close();
?>