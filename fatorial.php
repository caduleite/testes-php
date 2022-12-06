<?php  
$fat = $_post['fatorial'];
$x = 1;
while ($fat > 1) 
{
	echo $x = $x*$fat. ",";
	$fat++;	
}

echo "<br> resultado do Fatorial: ".$x;

?>