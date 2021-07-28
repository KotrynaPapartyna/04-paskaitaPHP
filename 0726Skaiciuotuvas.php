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

// set cookie- nustatymo komanda
// ("pavadinimas", po , - nurodoma- ka turi saugoti)
// saugoma gali buti ir kintamasis ir masyvas, objektas- bet kas 
// po saugijimo- nurodomas laikas- kiek saugoti- nurodoma sekundemis
// po laiko nurodomas kokiams psl yra taikoma- /localhost

// setcookie("laikinojiAtmintis",8, time() +3600, "/"); 

// funkcijos, cookies 


    function skaiciavimoFunkcija ($simbolis, $aritmetika) {
        $duomenuMasyvas=explode($simbolis, $aritmetika); 


        //var_dump($duomenuMasyvas); 
        $duomenuMasyvas[2]=$simbolis; 

        $pagalbinis= $duomenuMasyvas[2];
        $duomenuMasyvas[2]= $duomenuMasyvas[1]; 
        $duomenuMasyvas[1]=$pagalbinis;

        if ($simbolis=="+") {

            return $duomenuMasyvas[0] + $duomenuMasyvas [2];
        } else if ($simbolis=="-") {
          return $duomenuMasyvas[0] - $duomenuMasyvas [2];
        } else if ($simbolis=="*") {
            return $duomenuMasyvas[0] * $duomenuMasyvas [2];
        } else if ($simbolis=="/") {
          return $duomenuMasyvas[0] / $duomenuMasyvas [2];
        } else if ($simbolis=="%") {
            return $duomenuMasyvas[0] % $duomenuMasyvas [2];
        }
        return "veiskmo negalima atlikti";
    }

if (isset($_GET["patvirtinti"])) {
    echo "mygtukas paspaustas";

    if (isset ($_GET["aritmetika"]) && !empty($_GET["aritmetika"])) {
        $aritmetika=$_GET["aritmetika"]; 

        $aritmetika=str_replace(" ", "", $aritmetika); 
        $rezultatas=0;
        $duomenuMasyvas=0; 

        // $duomenuMasyvas= str_split($aritmetika, 1); // funkcija isskaido teksta i masyva i vienodas dalis

        // exploade- teksta pavercia i masyva, suskaido pagal delimiter- simbolius

        // reikia pritaikyti ir kitiems simboliams 
        // skaiciai su tarpais, sutvarkyti 
        //$duomenuMasyvas=explode("+", $aritmetika); 

        // gaunamas dvieju elementu masyvas
        // $duomenumasyvas [0]=4, 
        // $duomenumasyvas [1]=5, 
        // galima prideti trecia elementa $duomenumasyvas [2]="+",
        // kintamuju sukeitimas pasilekiant pagalbini kintamaji (zemiau)
        //$duomenuMasyvas[2]="+"; 

        // strpos- string position- iesko ar text el yra kazkoks simbolis
        // (nurodomas- funkcija ir  simbolis kurio ieskoma)
        
        $simbolioPozicija= strpos( $aritmetika,"+"); 
        
        // jeigu funkcija neranda simbolio- grazinama- false
        // jeigu simbolis randamas- grazina simbolio pozicija - pvz 1 (pagal masyva)

        // substr_count- substring count- kiek kartu pasikartojama text eiluteje

        
        //$pliusuSk= substr_count($tekstas, "+"); 

       // echo "Pliusu skaicius" . $pliusuSk; 



        if(strpos($aritmetika,"+")!=false && substr_count($aritmetika,"+")==1) {
            $rezultatas=skaiciavimoFunkcija("+", $aritmetika);
        
        } else if (strpos($aritmetika,"-") !=false && substr_count($aritmetika,"-")==1) {
            $rezultatas=skaiciavimoFunkcija("-", $aritmetika); 
        } else if (strpos($aritmetika,"*") !=false && substr_count($aritmetika,"*")==1) {
            $rezultatas=skaiciavimoFunkcija("*", $aritmetika); 
        } else if (strpos($aritmetika,"/") !=false && substr_count($aritmetika,"/")==1) {
            $rezultatas=skaiciavimoFunkcija("/", $aritmetika); 
        } else if (strpos($aritmetika,"%") !=false && substr_count($aritmetika,"%")==1) {
            $rezultatas=skaiciavimoFunkcija("%", $aritmetika); 
        
            } else {
                $rezultatas= "veiksmo zenklas neegzistuoja"; 
            }

        // visu cookies saugojimui 
               
            
        
        // sukuriamas aritmetikos ir rezultato cookiai
            setcookie("aritmetika", $_COOKIE["aritmetika"]. "|" . $aritmetika, time() +3600, "/"); 
            setcookie("rezultatas", $_COOKIE["rezultatas"]. "|" . $rezultatas, time() +3600, "/");

        // atvaizdavimas   
        echo "<div>";
        echo "Skaiciai is laikinosios atminties:<br>"; 
        // cookiu isvedimas
            echo $_COOKIE ["aritmetika"];
            echo $_COOKIE ["rezultatas"];
        // isvedimo pabaiga 
        echo "</div>";
        
        

       
        echo "<div>"; 
        echo $aritmetika; 
        echo "</div>";
       

        echo "<div>"; 
        echo $rezultatas; 
        echo "</div>"; 
        

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

// padaryti skaiciavimo istorija 
// reikia informacijos saugojimo vietos- COOKIES 


?>
    
</body>
</html>