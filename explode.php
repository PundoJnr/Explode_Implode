<?php
$fruits = "tomatoes,oranges,bananas,pawpaw,apples";
$food = explode(",",$fruits);
#print_r($food[0]);
foreach ($food as $key => $value) {
	echo $key.''. $value."<br>";}

	echo "<font-color = darkgreen><strong>IMPLODE</strong></font><br>";
	$food = implode("-",$food);
echo $food;
?>

