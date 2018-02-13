<?php
$fraseGET=$_POST['frase'];

//añadir frase al array frase
$frase[];
for ($i=0; $i<=(strlen($fraseGET)-1);$i++){
  $fraseGET[$i]=$frase{$i};
}

$contadorGlobal=0;
//$contadorFila=$contadorGlobal/7;

//para un numero par de la palabra
function par(){

  arrayResultado[$contadorGlobal][$contadorFila]=arrayPar[$contadorGlobal][$contadorFila];

  $contadorGlobal++;
}
function impar(){
  arrayResultado[$contadorGlobal][$contadorFila]=arrayPar[$contadorGlobal][$contadorFila];

  $contadorGlobal++;
}

//se pasa el carácter que toque según si la posición en la frase es par o impar
while($contadorGlobal<strlen($fraseGET)){
  if ($contadorGlobal%2==0) par($frase{$contadorGlobal});
  else impar($frase{$contadorGlobal});
}


$descodificada=$_POST['Frase_descodificada'];
echo $descodificada ; //wtf es esto??

header('Location: formulario_cesar.php');
?>
