<?php 


$vegosszeg = 0;
$tipus = "";
if ($_GET["tipus"] == 9000) {
    $tipus = "Nordmann fenyő ";
}elseif ($_GET["tipus"] == 7000) {
    $tipus = "Ezüst fenyő ";
}else {
    $tipus = "Lucfenyő ";
}

$meret = "";
if ($_GET["meret"] == 1.2) {
    $meret = "100-140 cm ";
}elseif ($_GET["meret"] == 1.6) {
    $meret = "140-180 cm ";
}elseif ($_GET["meret"] == 2) {
    $meret = "180-220 cm ";
}else {
    $meret = "220-300 cm";
}

$tipusEsMeretOsszege = $_GET["tipus"]*$_GET["meret"];

$vegosszeg+= $tipusEsMeretOsszege;

$talp ="";
if ($_GET["talp"]) {
    $talp = "Talp rendeles +5000 Ft, ";
    $vegosszeg+= 5000;
    

        if ($_GET["vagas"] == 3000 && $_GET["meret"] == 1.2) {
            $talp .="Földlabdás +3.000 Ft.";
            $vegosszeg+= 3000;
            
        }else{
            $talp .="vágással.";
        }

}

$diszek = array("disz1.jpg","disz2.jpg","disz3.jpg","disz4.jpg","disz5.jpg");
$ajandek = "";
if ($_GET["ajandek"]) {
    $ajandeknev = $diszek[rand(1,5)];
    $ajandek = "<p>Az on ajandeka</p><img src='res/$ajandeknev'>";

}

include("header.php");

echo "<h2>Megrendelés visszaigazolása</h2>";
echo "<p>Megrendelését rögzítettük ay alábbi adatokkal.</p>";
echo "<h4>Megrendelő</h4>";
echo "<p>Nev: $_GET[nev]</p>";
echo "<p>Cim: $_GET[cim]</p>";
echo "<p>Email: $_GET[email]</p>";
echo "<p>Telefonszam: $_GET[telefon]</p>";
echo "<h4>Megrendelés</h4>";
echo "<p>$tipus $meret $tipusEsMeretOsszege Ft</p>";
echo "<p>$talp</p>";
echo "<p>Szállítás dátuma: 2020. december $_GET[datum]</p>";
echo "<p>Megjegyzes:</p><p>$_GET[megjegyzes]</p>";
echo "<p><b>Atvetelkor fizetendo osszeg: $vegosszeg Ft</b></p>";
echo $ajandek;




?>





<?php include("footer.php"); ?>