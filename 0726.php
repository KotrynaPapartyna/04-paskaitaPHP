<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 PHP paskaita</title>
</head>
<body>

<?php 
    // ciklai ir masyvai 
    // veiksma atlieka tas pats failas

    // atvaizduoti skaicius nuo 1 iki 201


    // atvaizduoti visus iki 201
    for ($i=1; $i<=201; $i++) {
        //echo $i; 
        //echo "<br>"; 
    }

    // n zenkli skaiciu skaidyti skaitmeinimis
    $skaicius= "123587999";
    // while- galimas begalinis ciklas
    while ($skaicius!=0) 
    {
        $skaitmuo=$skaicius %10; 
        $skaicius=intval($skaicius/10);
        echo $skaitmuo;
        echo "<br>"; 
    }

    // masyvas
    $masyvas= array("elementas1", "elementas2", "elementas3");
    
    //echo $masyvas;
    // echo masyvo isvedimui yra netinkamas- rodoma klaida
    // masyvo elementui echo isvedimas- tinkamas

    // masyvo isvedimui naudojamas var_dump
    var_dump($masyvas); 

    // masyvo elementu isvedimas
    // norimo elemento isvedimas
    // kiekvieno masyvo isvedimas atskirai

    echo $masyvas[0];

    $masyvoElementas=$masyvas[0]; 
    echo "<br>"; 
    echo $masyvoElementas;

    $masyvas[1]="labas"; 
    var_dump($masyvas);

    // masyvo ciklas
    // masyvo.lenght (JS), PHP- count() grazina skaiciu kiek ele,emtu yra masyve
    for ($i=0; $i<count($masyvas); $i++) {
        echo $masyvas [$i];
        echo "<br>"; 
    }

    // ciklas foreach- jam nebutinas count ($masyvas)- atliekamas paprasciau nei su count

    foreach($masyvas as $elementas) {
        echo $elementas; 
        echo "<br>"; 
    }

    // masyvo pildymas
    // arry ()- vadinasi masyvas- yra tuscias 

    $pildomasMasyvas= array (); 

    var_dump($pildomasMasyvas); 

    // masyvas papildomas 1000 atsitiktiniu skaiciu 
    // php pildymas- array_push 
    //array_push($pildomasMasyvas, "pirmasSkaicius"); // prideda viena reiksme i masyva
    //array_push($pildomasMasyvas, "pirmasSkaicius", "antrasSkaicius");  //prideda dvi reiksmes i masyva

    


    //echo $aSkaicius; 
    //echo "<br>"; 

    for($i=0; $i<1000; $i++) {
        $aSkaicius= rand(1, 10000); // jeigu *(-1) tada isvestu neigiama 
        array_push($pildomasMasyvas,$aSkaicius);
    }

    // norint isvesti du atskirus masyvus- galima per atsikiras var arba per , atskiriant masyvus
    var_dump($pildomasMasyvas); 

    // masyvu tipai :

    // 1,2,3 - suskaiciuojamas masyvas, su ciklu
    $mas1=array("elementas","elementas1","elementas2");
    var_dump($mas1);
    echo "<br>";
    // asociatyvus masyvas . kiekvienas elementas yra pasirenkamas pagal pavadinima
    $asocMasyvas=array(
        "pirmas"=> "verte1",
        "antras"=> "verte2",
        "trecias"=> "verte3",
        
    ); 

    var_dump($asocMasyvas);
    echo $asocMasyvas ["antras"];
    echo "<br>";
    echo "<br>";

    // pakeisti reiksme
    $asocMasyvas ["antras"]="pakeista reiksme";
    $kintamajam=$asocMasyvas ["antras"];

    // kiekvieno elemento isvedimas atskirai 
    foreach ($asocMasyvas as $elementas) {
      echo $elementas; 
      echo "<br>"; 
    }

    // kiekvienas pasirinktas elementas igauna numeri
    array_push($asocMasyvas, "papildymas_reiksme");
    array_push($asocMasyvas, "papildymas_reiksme");
    array_push($asocMasyvas, "papildymas_reiksme");

    // sukuriamas naujas neezgistuojantis elementas su pavadinimu 
    $asocMasyvas["ketvirtas"]="nauja reiksme turinti pavadinima";
    
    var_dump($asocMasyvas);

    echo $asocMasyvas [0];
    echo "<br>";
    // asociatyvus masyvas su 100 elementu kurie turi varda ir reiksme PVZ
    // array()
    // "vardas1=>"reiksme1"
    // "vardas2=>"reiksme2"

    $pradinisMasyvas= array();
    
    for ($i=0; $i<100; $i++) {
        $pradinisMasyvas ["vardas". ($i+1)]= "reiksme". ($i+1);
        //echo "vardas". ($i+1)
    }

    var_dump($pradinisMasyvas);

    // dvimatis masyvas (matrica) arba masyvas pasyve 

    $dvimatisMasyvas= array(
        array("knyga1", "knyga2", "knyga3"), // 0 masyvas
        array("zaidimas1", "zaidimas2", "zaidimas3"), // 1 masyvas
        array("nieko"), // 2 masyvas
        array("rubai1", "rubai2", "rubai3"), // 3 masyvas

    ); 

    // 4 lentynos isvedimas
    var_dump($dvimatisMasyvas); 
    // reikia su var_dump nes tai yra masyvas 
    var_dump ($dvimatisMasyvas [3]); 
    // viso lentynos isvedimas

    echo $dvimatisMasyvas [3] [2]; 

    // rubai3 isvedimas
    foreach ($dvimatisMasyvas [3] as $elementas); 
    { 
        echo $elementas. "<br>";
    }

    for ($i=0; $i<count($dvimatisMasyvas[3]); $i++) {
        echo $dvimatisMasyvas [3][$i]. "<br>"; 
    }
 
    
    // papildyti 4 lentyna
    // array_push($dvimatisMasyvas[2], "batai"); 

    //array_push($dvimatisMasyvas, "batai");
    // var_dump ($dvimatisMasyvas); 

    // viso masyvo isvedimas
    echo "<table>"; 
    for ($j=0; $j<count($dvimatisMasyvas); $j++) {
        echo "<tr/>"; 
        for ($i=0; $i<count($dvimatisMasyvas[$j]); $i++) {
            echo "<td>";
            echo $dvimatisMasyvas[$j][$i]; 
            echo "</td>"; 
    }
        echo "<tr/>"; 
}

    echo "</table>"; 

    // lentynose esancio turinio pakeitimas

    $dvimatisMasyvas[3][2]= "zaislai"; 

?> 
    
</body>
</html>