<?php
$nxt_bill = "{p2,410}{p1,510}";
$nxt_bill1=ltrim(substr_replace($nxt_bill,"",-1),"{");

$delimiter = array(" ","/","}{","{","}",);
$replace = str_replace($delimiter, $delimiter[0], $nxt_bill1);
$explode = explode($delimiter[0], $replace);

echo "<pre>";
$t=print_r($explode);
echo "</pre>";

echo "<br>";

foreach ($explode as $line) {
	$array1  = explode(",", $line);
	foreach ($array1 as $line1) {
		if($line1 != '')
		{
			echo $line1; echo '<br>';
		}
	}
}
?>
