<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $beratMark = 78;
        $tinggiMark = 1.69;

        $beratJohn = 92;
        $tinggiJohn = 1.95;

        $BmiMark = $beratMark / ($tinggiMark * $tinggiMark);
        $BmiJohn = $beratJohn / ($tinggiJohn * $tinggiJohn);
    ?>
    <h1>Data 1</h1>
    Berat Mark : <?php echo $beratMark ?> Kg <br>
    Tinggi Mark : <?php echo $tinggiMark ?> m <br>
    Total Bmi : <?php echo $BmiMark ?> <br>
    ---------------------------<br>
    Berat John : <?php echo $beratJohn ?>Kg<br>
    Tinggi John : <?php echo $tinggiMark ?>m<br>
    Total Bmi : <?php echo $BmiJohn ?> <br>
    ---------------------------<br>
    <?php 
    $bmi = $BmiMark > $BmiJohn;
    if($bmi){
        echo "Hasil : Bmi Mark lebih tinggi";
    }else { "Hasil : Bmi Mark kurang dari John";}
    ?>
    <br>
    ===============================

    <?php 
    $BeratMark2 = 95;
    $TinggiMark2 = 1.88;

    $BeratJohn2 = 85;
    $tinggiJohn2 = 1.76;

    $BmiMark2 = $BeratMark2 / ($TinggiMark2 * $TinggiMark2);
    $BmiJohn2  = $BeratJohn2 / ($tinggiJohn2 * $tinggiJohn2);
    ?>
    <h1>Data 2</h1>
    Berat Mark : <?php echo $BeratMark2 ?> Kg<br>
    Tinggi Mark : <?php echo $tinggiJohn2 ?> m <br>
    Total Bmi : <?php echo $BmiMark2 ?><br>
    ---------------------------<br>

    Berat John : <?php echo $BeratJohn2 ?> Kg<br>
    Tinggi John : <?php echo $tinggiJohn2 ?> m <br>
    Total Bmi : <?php echo $BmiJohn2 ?> <bR>
    ---------------------------<br>
    <?php 
    $bmi2 = $BmiMark2 > $BmiJohn2;
    if($bmi2){
        echo "Hasil : Bmi Mark lebih tinggi";
    }else{echo "Hasil : Bmi Mark kurang dari john";}
    ?>

</body>
</html>