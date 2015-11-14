<html><head>
<meta charset="utf-8" />
<title>Tabliczka mnożenia</title>
<style type="text/css">

table td {
	border:1px solid black;
	margin: 2px;
	padding: 4px;
}
table td.title {
	background-color:#cce;
}
table td.max {
	background-color:#f00;
}


</style>
</head>
<body>
<h1>Tabliczka mnożenia</h1>
<?php

 $x = (is_numeric($_GET['x']))?$_GET['x']:10;
 $y = (is_numeric($_GET['y']))?$_GET['y']:10;

/////////////////////////////////////////////////
 /*
$n = 10;
 

while( $n >= 0 )  
{
 
 echo $n.'<br />';
$n = $n - 1;
 }

 


for($n = 10; $n >= 0; $n = $n - 1)
{
 echo $n.'<br />';
} 
 
*/
/////////////////////////////////////////////////
//$z = 1;
echo '<hr />';

echo PHP_EOL.'<table>'.PHP_EOL;
//$x = 3;
for($xi = 1; $xi <= $x; $xi++)
{
	echo '<tr>'.PHP_EOL;
	for($yi = 1; $yi <= $y; $yi++)
	{
		if($yi == 1 || $xi == 1) 
			echo '<td class="title">';
		elseif ($yi == $y && $xi == $x) 
			echo '<td class="max">';
		else 
			echo '<td>';	
		//echo printf("%u", crc32($xi*$yi)).'</td>';
		//echo sprintf("%u", crc32($xi*$yi)).'</td>';
		echo ($xi*$yi);
		//echo $z++;
		echo '</td>';
	}
	echo PHP_EOL.'</tr>'.PHP_EOL;
}

echo '</table><br />';


echo 'zakonczylismy z wartoscia: '.$yi.'<br/>';
?>
<form method="GET">
Zmień rozmiar tabliczki mnożenia.<br />
<label>Ilość Wierszy:<input type="text" name="x" value="<?php echo $x; ?>" /></label><br />
<label>Liczba kolumn:<input type="text" name="y" value="<?php echo $y; ?>" /></label><br />
<input type="submit" value="Wygeneruj" />
</form>
<h2>Silnia</h2>
<p>
<?php

function silniawpetli($s){
	if($s<1) return 1;
	$wynik = $s;
	while(--$s){
		$wynik = $wynik*$s;
	}
	return $wynik;
}

function silnia($n){
	if ($n===0) return 1;
	if ($n>=1) return $n*silnia($n-1);
	throw new Exception('Zmienna poza zakresem!');
}


function sumaKwadratow($n){
	$wynik = 0;
	for($x = abs($n);$x>0;$x--){
		$wynik+=$x*$x;
	}
	return $wynik;
}

$test = 8;
while($test--) echo $test."! = ".silnia($test).'<br />';


$test = 8;
while($test--) echo "Suma kwadratow z $test = ".sumaKwadratow($test).'<br />';


// celowe wywołanie błędu
//$test = -8;
// echo $test."! = ".silnia($test).'<br>';



?>
</p>
</body>
</html>
