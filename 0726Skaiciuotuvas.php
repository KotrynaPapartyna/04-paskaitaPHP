<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 paskaitos skaiciuotuvas</title>
</head>
<body>

<!--kreipiasi pats i save--> 
<form action="0726Skaiciuotuvas.php" method="get">
    <input type="text" name="aritmetika" />
    <button type="submit" name="patvirtinti">skaiciuoti</button>
</form>

<?php 

if (isset($_GET["patvirtinti"])) {
    echo "mygtukas paspaustas";

    if (isset ($_GET["aritmetika"]) && !empty($_GET["aritmetika"])) {
        $aritmetika=$_GET["aritmetika"]; 

        // $duomenuMasyvas= str_split($aritmetika, 1); // funkcija isskaido teksta i masyva i vienodas dalis

        // exploade- teksta pavercia i masyva, suskaido pagal delimiter- simbolius

        // reikia pritaikyti ir kitiems simboliams 
        // skaiciai su tarpais, sutvarkyti 
        $duomenuMasyvas=explode("+", $aritmetika); 

        var_dump($duomenuMasyvas);



        echo $aritmetika; 
        
    } else {
        echo "<br>";
        echo "laukelis tuscias"; 
    }

}

// $_GET["patvirtinti"]= // grazina true arba false reiksme 
// jeigu mygtukas paspaudziamas- true
// jeigu mygtukas nepaspaudziamas- false

// susikurti skaiciuotuva, veiksma isvesti i ta pati laukeli
// rezultatas isvedamas i div
// papildyti
// kad rezultatas butu atvaizduojamas tame paciame lange 




?>
    
</body>
</html>