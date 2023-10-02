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
?>
Masukan panjang = <input type="text" name="" id="">
<?php
echo "<br><br>Luas Persegi Panjang  = " .persegi_panjang(5, 2). "<br><br>";
echo "Luas Lingkaran = " .lingkaran(7). "";
    ?>
</body>
</html>