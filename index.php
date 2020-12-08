<?php include("header.php"); ?>

<h1>KARÁCSONYFA ONLINE</h1>

<?php    

$karacsony = strtotime('2020-12-25');
$maiNap = time();
$kulonbseg = $karacsony-$maiNap;

$napok = round( $kulonbseg / (60*60*24) );

echo "<p class='visszaszamlalas'><span class='kiemelt'><b>Már csak $napok nap</b></span></p>" ;
?>

<h2>Házhoz visszük a karácsonyt</h2>
<p>Kényelmesen, egy kattintással az Ön otthonába varázsoljuk a karácsonyi fát. Felvesszük előrendelését, és december 10-től 24-ig bármely napon, előre egyeztetett időpontban kiszállítjuk. A szállítás ingyenes. Kérésére a fát díjmentesen befaragjuk a talpba. Amennyiben 10-e előtt rendeli meg fáját, <span class="kiemelt">AJÁNDÉK </span>íszekkel kedveskedünk Önnek.</p>
<ul class="karacsonyfak"> 
    <li><a href="res/nordmann2.jpg" target="_blank"><img src="res/nordmann.png" alt="Nordmann"></a><p>Nordmann fenyő</p></li>
    <li><a href="res/ezust2.jpg" target="_blank"><img src="res/ezust.png" alt="Ezüst"></a><p>Ezüst fenyő</p></li>
    <li><a href="res/luc2.jpg" target="_blank"><img src="res/luc.png" alt="Luc"></a><p>Lucfenyő</p></li>
</ul>


<?php include("footer.php"); ?>