<?php 

include("header.php"); ?>

<h2>Karácsonyfa rendelés</h2>
<p>Ingyenes házhozszállítás Budapest egész területén</p>
<form action="igazolas.php" method="GET">
<ul class="rendelesForm">
<li>
<p>Teljes Név *</p>
<input type="text" name="nev" required="">
</li>
<li>
<p>Cím *</p>
<input type="text" name="cim" required="">

</li>
<li>
<p>Email *</p>
<input type="email" name="email" required="">

</li>
<li>
<p>Telefonszám *</p>
<input type="tel" name="telefon" required="">

</li>

<li>
<p>Karácsonyfa típusa</p>
<select name="tipus">
    <option value="9000">Nordmann fenyő (9.000 Ft/méter)</option>
    <option value="7000">Ezüst fenyő (7.000 Ft/méter)</option>
    <option value="5000">Lucfenyő (5.000 Ft/méter)</option>
</select>

</li>
<li>
<p>Mérete</p>
<select name="meret">
    <option value="1.2">Kicsi (100-140 cm)</option>
    <option value="1.6">Közepes (140-180 cm)</option>
    <option value="2">Nagy (180-220 cm)</option>
    <option value="2.6">Extra nagy (220-300 cm)</option>
</select>



</li>

<li>
<p>Karácsonyfa talpat kérek (+5.000 Ft)</p>
<input type="radio" name="talp" value="1"><label>igen</label><br>
<input type="radio" name="talp" value="0" checked=""><label>nem</label>


</li>
<li>
<p>Vágás típusa</p>
<input type="radio" name="vagas" value="3000"><label>Földlabdás /csak kis fánál +3.000 Ft</label><br>
<input type="radio" name="vagas" value="0" checked=""><label>Vágott</label>


</li>

<?php 

$kiszallitas = 10;
if (date("d") > 10) {
    $kiszallitas = date("d");
}

echo "<li>Szállítás dátuma: 2020. december <input type='number' name='datum' min='10' max='24' required='' value='$kiszallitas'>*</li><br>"; ?>




<p>Megjegyzés</p>
<textarea name="megjegyzes" rows="6"></textarea>

<?php  if (date("d") < 10) {
    
echo "<li><input type='checkbox' name='ajandek' value='1' checked=''><label>Kérem az ajándékot</label> </li><br>";

} ?>

<li><button type="submit">Rendelés</button> </li>
</ul>
</form>






<?php include("footer.php"); ?>