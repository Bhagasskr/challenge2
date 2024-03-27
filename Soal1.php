<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lumbaLumba = [96, 108, 89];
    $koala = [88, 91, 110];
   
    $totalLumbaLumba = 0;
    foreach ($lumbaLumba as $nilai) {
        $totalLumbaLumba += $nilai;
    }
   
    $totalKoala = 0;
    foreach ($koala as $nilai) {
        $totalKoala += $nilai;
    }
   
    $jumlahElemenLumbaLumba = count($lumbaLumba);
    $rataRataLumbaLumba = $totalLumbaLumba / $jumlahElemenLumbaLumba;
   
    $jumlahElemenKoala = count($koala);
    $rataRataKoala = $totalKoala / $jumlahElemenKoala;    
    ?>

    <h1>Data 1</h1>
    Lumba Lumba : (96,108,89) =  <?php echo $rataRataLumbaLumba ?> <br>
    Koala : (88,91,110) =  <?php echo $rataRataKoala ?><br>
    <?php 
    if ($rataRataLumbaLumba > $rataRataKoala && $rataRataKoala >= 100 ){
        echo "Tim Pemenang : Tim Lumba-Lumba ";
    }elseif ($rataRataKoala > $rataRataLumbaLumba && $rataRataLumbaLumba >= 100){
        echo "Tim Pemenang : Tim Koala";
    }
    elseif ($rataRataLumbaLumba == $rataRataKoala >= 100){
        echo "Tim Pemenang : Seri";
    }else{
        echo "Tim Pemenang : Tidak ada pemenang memenuhi syarat";
    }
    ?>
    <br>
    ===============================

    <?php 
        $lumbaLumba2 = [97,112,101];
        $koala2 = [109,95,123];

        $totalLumbaLumba2 = 0;
            foreach ($lumbaLumba2 as $nilai) {
            $totalLumbaLumba2 += $nilai;
    }
   
        $totalKoala2 = 0;
            foreach ($koala2 as $nilai) {
            $totalKoala2 += $nilai;
    }
    
        $jumlahLumbaLumba2 = count($lumbaLumba2);
        $jumlahRataRataLumba2 = $totalLumbaLumba2 / $jumlahLumbaLumba2;

        $jumlahKoala2 = count ($koala2);
        $JumlahRataRataKoala2 = $totalKoala2 / $jumlahKoala2;
    
    ?>
    <h1>Data Bonus 1</h1>
    
    Lumba Lumba : (97, 112, 101) = <?php echo $jumlahRataRataLumba2 ?>  <br>
    Koala : (109, 95, 123) = <?php echo $JumlahRataRataKoala2 ?>
    <?php 
        if ($jumlahRataRataLumba2 > $JumlahRataRataKoala2 && $jumlahRataRataLumba2 >= 100) {
            echo "<br>Pemenang Kompetisi: Tim Lumba-Lumba";
        } elseif ($JumlahRataRataKoala2 > $jumlahRataRataLumba2 && $JumlahRataRataKoala2 >= 100) {
            echo "<br>Pemenang Kompetisi: Tim Koala";
        } elseif ($jumlahRataRataLumba2 == $JumlahRataRataKoala2 && $jumlahRataRataLumba2 >= 100) {
            echo "<br>Pemenang Kompetisi: Hasil seri. Tidak ada pemenang.";
        } else {
            echo "<br>Pemenang Kompetisi: Tidak ada pemenang yang memenuhi syarat.";
        }
    ?> 
    <br>
    ===================================

    <?php 
    $lumbaLumba3 = [97,112,101];
    $koala3 = [109,95,106];

    $totalLumbaLumba3 = 0;
    foreach ($lumbaLumba3 as $nilai) {
    $totalLumbaLumba3 += $nilai;
    }

    $totalKoala3 = 0;
    foreach ($koala3 as $nilai) {
    $totalKoala3 += $nilai;
    }

    $jumlahLumbaLumba3 = count($lumbaLumba3);
    $rataRataLumbaLumba3 = $totalLumbaLumba3 / $jumlahLumbaLumba3;

    $jumlahKoala3 = count($koala3);
    $jumlahRataKoala3 = $totalKoala3 / $jumlahKoala3;
    ?>
    <h1> Data Bonus 2</h1>

    Lumba-Lumba : (97,112,101) = <?php echo $rataRataLumbaLumba3 ?> <br>
    Koala : (109,95,106) =  <?php echo $jumlahRataKoala3 ?><br>
    <?php 
    if ($rataRataLumbaLumba3 > $jumlahRataKoala3 && $jumlahRataKoala3 >= 100 ){
        echo "Tim Pemenang : Tim Lumba-Lumba ";
    }elseif ($jumlahRataKoala3 > $rataRataLumbaLumba3 && $rataRataLumbaLumba3 >= 100){
        echo "Tim Pemenang : Tim Koala";
    }
    elseif ($rataRataLumbaLumba3 == $jumlahRataKoala3 >= 100){
        echo "Tim Pemenang : Seri";
    }else{
        echo "Tim Pemenang : Tidak ada pemenang memenuhi syarat";
    }
    ?>
    <br>
    =====================================

    
    
</body>
</html>