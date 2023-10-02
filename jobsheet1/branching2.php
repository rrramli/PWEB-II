<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        Masukkan Nilai <input type="text" name="nilai"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai yang dimasukkan oleh pengguna
        $nilai = $_POST["nilai"];

        // Mengonversi nilai menjadi tipe data integer
        $x = intval($nilai);

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
