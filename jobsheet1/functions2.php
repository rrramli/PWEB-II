<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l){
        return $p * $l;
    }

    function lingkaran($r){
        return 3.14 * $r * $r;
    }

    $p = isset($_POST['panjang']) ? $_POST['panjang'] : "";
    $l = isset($_POST['lebar']) ? $_POST['lebar'] : "";
    $r = isset($_POST['jari_jari']) ? $_POST['jari_jari'] : "";
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukkan panjang = <input type="text" name="panjang" value="<?php echo $p; ?>"><br><br>
        Masukkan lebar = <input type="text" name="lebar" value="<?php echo $l; ?>"><br><br>
        Masukkan jari-jari lingkaran = <input type="text" name="jari_jari" value="<?php echo $r; ?>"><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (!empty($p) && !empty($l)) {
        echo "<br>Luas Persegi Panjang  = " . persegi_panjang($p, $l) . "<br><br>";
    }

    if (!empty($r)) {
        echo "Luas Lingkaran = " . lingkaran($r) . "";
    }
    ?>
</body>
</html>
