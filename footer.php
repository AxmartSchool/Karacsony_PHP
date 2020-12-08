</main>


<footer>
	<?php 

function csillagok(){
	$csillagok=rand(1,5);
	for ($i = 0; $i < $csillagok; $i++) { 
		echo"*";
	}

}
	
	csillagok();
	
	?>
	<br>
	Jager Balazs 2020.12.08
	<br>
	<?php  csillagok();	?>
	<br>
	Forras:<br>
	<a href="https://www.karacsonyfaonline.com/" target="_blank">https://www.karacsonyfaonline.com/</a> 
</footer>

</div>    

</body>
</html>