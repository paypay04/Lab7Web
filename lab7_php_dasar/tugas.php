<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data Diri & Gaji</title>
    <style>
        /* 🌸 Tema Coklat Aesthetic */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f3e8e0;
            color: #4b2e1e;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 480px;
            margin: 60px auto;
            background: #fffaf6;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(120, 66, 18, 0.2);
            padding: 30px 40px;
            border: 2px solid #d7b79a;
        }

        h2 {
            text-align: center;
            color: #5a3825;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: #6b4226;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #c9a47d;
            border-radius: 10px;
            outline: none;
            background: #fdfaf7;
            color: #4b2e1e;
            font-size: 14px;
            margin-bottom: 18px;
            transition: 0.2s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #a67645;
            box-shadow: 0 0 5px rgba(166, 118, 69, 0.3);
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #a67645;
            color: #fffaf5;
            font-weight: bold;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #8b5e34;
            transform: translateY(-1px);
        }

        .result {
            background: #f9f3ef;
            border: 1.5px solid #d2b48c;
            padding: 18px 20px;
            border-radius: 12px;
            margin-top: 25px;
            box-shadow: 0 2px 8px rgba(130, 80, 40, 0.1);
        }

        .result h3 {
            margin-top: 0;
            color: #5c3d2e;
            text-align: center;
        }

        .result p {
            margin: 6px 0;
            font-size: 14px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #836953;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Diri & Gaji </h2>

        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" required>

            <label>Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Programmer">Programmer</option>
                <option value="Designer">Designer</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Freelancer">Freelancer</option>
            </select>

            <input type="submit" value="Tampilkan Data">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Hitung umur
            $lahir = new DateTime($tgl_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($lahir)->y;

            // Tentukan gaji berdasarkan pekerjaan
            switch ($pekerjaan) {
                case "Programmer": $gaji = 8000000; break;
                case "Designer": $gaji = 7000000; break;
                case "Manager": $gaji = 10000000; break;
                case "Staff": $gaji = 5000000; break;
                case "Freelancer": $gaji = 4000000; break;
                default: $gaji = 0; break;
            }

            echo "<div class='result'>";
            echo "<h3> Hasil Data Diri </h3>";
            echo "<p><b>Nama:</b> $nama</p>";
            echo "<p><b>Tanggal Lahir:</b> $tgl_lahir</p>";
            echo "<p><b>Umur:</b> $umur tahun</p>";
            echo "<p><b>Pekerjaan:</b> $pekerjaan</p>";
            echo "<p><b>Gaji:</b> Rp " . number_format($gaji, 0, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>

    <footer>© 2025 | Praktikum 7 PHP Dasar by Vivi Alydia</footer>
</body>
</html>
