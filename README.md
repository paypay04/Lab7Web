#  Praktikum 7: 

**Nama:** Vivi Alydia  
**NIM:** 312410224  
**Kelas:** TI.24.A2  
**Mata Kuliah:** Pemrograman Web 1 




PHP Dasar

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
      echo "Hello World";
    ?>
</body>
</html>
```

<img width="1041" height="442" alt="Screenshot 2025-11-10 132004" src="https://github.com/user-attachments/assets/74d7b2e5-8c10-4d3d-9e99-ffbe7da4b43e" />

Variable PHP

```
    ?>

    <h2>Menggunakan Variable</h2>
    <?php
        $nim = "0411500400";
        $nama = "Abdullah";
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
```
    
<img width="1895" height="620" alt="Screenshot 2025-11-10 140558" src="https://github.com/user-attachments/assets/67b51913-4c38-4882-9838-f78051a9ed7d" />

.echo digunakan untuk menampilkan teks ke halaman web.
.Variabel $nim dan $nama digunakan untuk menyimpan data teks.
.<br> digunakan untuk membuat baris baru

Predefine Variable $_GET

```
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

<img width="1918" height="257" alt="Screenshot 2025-11-10 140320" src="https://github.com/user-attachments/assets/b2f5b6cb-fbca-44ac-9683-07ab73bccf33" />

.$_GET digunakan untuk mengambil data dari URL
.Data dikirim melalui query string setelah tanda ?.

Membuat Form Input

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>
</html>
```

<img width="1898" height="545" alt="Screenshot 2025-11-10 134213" src="https://github.com/user-attachments/assets/9d0e275c-a454-45a0-8c39-f60bfc5923c3" />

. method="post" mengirim data secara tersembunyi (tidak di URL).
. $_POST['nama'] digunakan untuk membaca data input pengguna

Operator

```
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```

<img width="1919" height="289" alt="Screenshot 2025-11-10 134326" src="https://github.com/user-attachments/assets/fb5ecfb2-3321-4d42-a69a-4442cd4f058d" />

. Variabel $gaji dan $pajak menyimpan nilai numerik.
. Operasi aritmatika dilakukan untuk menghitung hasil akhir

Kondisi IF

<img width="1912" height="382" alt="Screenshot 2025-11-10 134404" src="https://github.com/user-attachments/assets/ee31aa58-bfc0-46f2-8cfe-e49017179aeb" />

. date("l") mengambil nama hari.
. Struktur if digunakan untuk menyesuaikan kondisi

Kondisi Switch

<img width="1903" height="493" alt="Screenshot 2025-11-10 134659" src="https://github.com/user-attachments/assets/27ef1398-6734-45a8-bf9e-db4e24d8719d" />

Struktur Kondisi (IF & SWITCH)
. date("l") mengambil nama hari.
. Struktur if digunakan untuk menyesuaikan kondisi

Perulangan for
<img width="1912" height="642" alt="Screenshot 2025-11-10 134753" src="https://github.com/user-attachments/assets/98c8af03-98d1-43cd-8622-d6585b65efa0" />

Perulangan while
<img width="1915" height="374" alt="Screenshot 2025-11-10 134832" src="https://github.com/user-attachments/assets/a6ac285d-b298-43c7-9c9d-c59a10db44a4" />

Perulangan dowhile

<img width="1912" height="388" alt="Screenshot 2025-11-10 134954" src="https://github.com/user-attachments/assets/81d6e490-d032-41a4-a061-c6fa140213a9" />

Perulangan
. Perulangan digunakan untuk mengeksekusi kode berulang kali.
. $i++ artinya nilai $i bertambah 1 setiap loop

**Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.**

**code**

```
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
```

**Output**

sebelum di isi

<img width="1920" height="1080" alt="Screenshot (859)" src="https://github.com/user-attachments/assets/aef2d349-aaf1-4e9e-8bf9-a83fd344a1a7" />

sesudah di isi

<img width="1920" height="1080" alt="Screenshot (860)" src="https://github.com/user-attachments/assets/fb764966-83eb-40a6-9aff-1c1f840c7e77" />

**Penjelasan:**

. Form diisi dengan data nama, tanggal lahir, dan pekerjaan.
. Umur dihitung otomatis menggunakan DateTime.
. Gaji ditentukan berdasarkan pilihan pekerjaan menggunakan switch.
. CSS tema coklat aesthetic membuat tampilan lebih lembut dan profesional
