<?php 

echo 'Tabla con FOR'.'<br>';
for($i = 0; $i<=12; $i=$i+2){
	echo $i.' * 2 = '. 2*$i.'<br>';
}

echo 'Tabla con WHILE'.'<br>';
$i = 0;
while($i<=12){
	$multi1 = 2*$i;
	echo $i.' * 2 = '.$multi1.'<br>';
	$i=$i+2;
}

echo 'Tabla con DO WHILE'.'<br>';
$i = 0;
do{
	echo $i.' * 2 = '. 2*$i.'<br>';
	$i=$i+2;
}while($i<=12);

?>
