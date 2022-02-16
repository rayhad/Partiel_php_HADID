<?php
$x = 20;
function calcul_2($x){
 $res = 0;
   foreach (range(1, $x) as $num) {
            $res = $res + $num;
            if($num == 1){
                echo $num;
            }
            else{
                echo "+",$num;
            }
  	 }
        echo " = ",$res;
 }

calcul_2($x);
?>
