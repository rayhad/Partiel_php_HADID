<?php
$x=1;
function calcul($x){
$i=0;
	while($x != 11){
		while($i != 10){
			$i++;
			echo $i ,"x", $x,"= ",$x * $i;
			echo "<br>";
		}
		echo"<br>";
		$i = 0;
		$x++;
	}
}
	
	calcul($x);
?>
