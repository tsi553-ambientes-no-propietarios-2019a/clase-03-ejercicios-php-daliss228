<?php

'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

function palabra($palabra){
$cadena = $palabra;
$array = str_split($cadena); 
$vocales = array('a', 'e', 'i', 'o', 'u'); 

$cont1=0;
$cont2=0;
$cont3=0;
$cont4=0;
$cont5=0;

foreach ($array as $letras) {
	if($letras == 'a' || $letras == 'A'){
		$cont1++;
	}elseif ($letras =='e' || $letras == 'E'){
		$cont2++;
	}elseif ($letras =='i' || $letras == 'I'){
		$cont3++;
	}elseif ($letras =='o' || $letras == 'O'){
		$cont4++;
	}elseif ($letras =='u' || $letras == 'U'){
		$cont5++;
	}
	
}
echo 'El tamaño de la palabra es: '.strlen($cadena).'<br>';
if($cont1==1&&$cont2==1&&$cont3==1&&$cont4==1&&$cont5==1){
	echo "La palabra $palabra contiene las 5 vocales".'<br>';
}

/*echo 'num de a: '.$cont1.'<br>';
echo 'num de e: '.$cont2.'<br>';
echo 'num de i: '.$cont3.'<br>';
echo 'num de o: '.$cont4.'<br>';
echo 'num de u: '.$cont5.'<br>';*/
}

palabra('murcielago');
?>