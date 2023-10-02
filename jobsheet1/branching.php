<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="witdth=device-width, initial-scale=1.0">
</head>
<body>
    Masukan Nilai <input type="text" name="" id="">
    <?php
    $x = -5;
    echo "<br><br>Nilai X = $x </br>";
    if($x > 0){
        echo "$x adalah Bilangan Positif";
    }
    elseif($x < 0){
        echo "$x adalah Bilangan Negatif";
    }
    else{
        echo "$x adalah Bilangan Nol";
    }
    ?>
</body>
</html>