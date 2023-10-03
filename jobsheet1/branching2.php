<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="POST">
        Masukkan Nilai <input type="number" name="nilai"><br>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai yang dimasukkan oleh pengguna
        $angka = $_POST["nilai"];

        // Mengonversi nilai menjadi tipe data integer
        $x = intval($angka);

        echo "<br>Nilai X = $x </br>";
        if ($x > 0) {
            echo "$x adalah Bilangan Positif";
        } elseif ($x < 0) {
            echo "$x adalah Bilangan Negatif";
        } else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>
</html>