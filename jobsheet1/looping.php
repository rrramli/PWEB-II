<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>

    <?php
    echo"Perulangan FOR bilangan genap dari 1 hingga 10<br>";
    for($x=2; $x<=10; $x+=2)
    echo "$x<br>";
    
    echo"<br>Perulangan WHILE bilangan ganjil dari 1 hingga 10<br>";
    $y=1;
    while($y <=10){
        echo "$y<br>";
        $y+=2;
    }

    echo"<br>Perulangan Do While bilangan prima kurang dari 20<br>";
    $a=2;
    do{
        $bilprim=true;

        for($b=2; $b<$a; $b++){
            if($a % $b == 0){
                $bilprim=false;
                break;
            }
        }
        if($bilprim){
            echo $a . " <br>";
        }
        $a++;
    }while($a<20);
    ?>
</body>
</html>