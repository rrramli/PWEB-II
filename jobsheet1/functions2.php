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
    <h3>MENGHITUNG LUAS BANGUN DATAR</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td>Masukkan panjang </td> 
            <td><input type="text" name="panjang" ><br></td>
        </tr>
        <tr>
            <td>Masukkan lebar </td>
            <td><input type="text" name="lebar"><br></td>
        </tr>
        <tr>
            <td>Masukkan jari-jari </td>
            <td><input type="text" name="jari_jari" ><br></td>
        </tr>

    </table>
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
