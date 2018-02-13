<?php
//recogemos frase descodificada PDOStatement
//creamos arrays
function Inicio()
{
  $fraseGET=$_POST['Frase_descodificada'];
  $arrayNormal= array
  (
    array("a","b","c","d","e","f","g"),
    array("h","i","j","k","l","m","n"),
    array("o","p","q","r","s","t","u"),
    array("v","w","x","y","z","$","%")
  );
  //arrayNumAscii
  $arrayAsci= array();
  $prueba= array();
  //añadir frase al array frase
  $frase = array();

  for ($i=0; $i<=(strlen($fraseGET)-1);$i++)
  {
    //$fraseGET[$i]=$frase{$i};
    $frase{$i}=$fraseGET[$i];
    echo $frase[$i]."--";
    $arrayAsci[$i]=ord($frase[$i]);
    echo $arrayAsci[$i]."<br>";
  }
  //$contadorGlobal=0;
  Codificar($arrayAsci);
}

function Codificar ($_arrayAsci)
{
  //array que recoge el array ascii
  $arrayOriginal = $_arrayAsci;
  //array cambio de ascii a string osea letras
  $ArraystringCodificado =array();
  //string envio
  $stringEnvio="";
  //bucle para mover las letras tres posiciones y recogemos el valor ascii de la posc 3 de cada Ejemplo :letra a = d
  for ($i=0; $i < count($_arrayAsci); $i++)
  {
    $prueba[$i]=$_arrayAsci[$i]+3;
    $ArraystringCodificado[$i]= chr($prueba[$i]);
  }
  $stringEnvio= implode($ArraystringCodificado);
  /*
  $url = '002.php';
   $url .= '?firstName=Code';
   $url .= '&lastName=Project';
   $url .= '&purpose=answers';

   header('Location: '.$url);
   */
  header( 'Location: formulario_cesar.php?string='.$stringEnvio );

}
Inicio();
//$contadorFila=$contadorGlobal/7;
/*
//falta calcular el $contadorGlobal y el $contadorFila para cada letra

//para un numero par de la frase
function par($letra){

  arrayResultado[$contadorGlobal][$contadorFila]=arrayPar[$contadorGlobal][$contadorFila];

  contadorGlobal++;
}
function impar($letra){
  $arrayResultado[$contadorGlobal][$contadorFila]=arrayPar[$contadorGlobal][$contadorFila];

  $contadorGlobal++;
}

//se pasa el carácter que toque según si la posición en la frase es par o impar
while($contadorGlobal<strlen($fraseGET)){
  if ($contadorGlobal%2==0) par($frase{$contadorGlobal});
  else impar($frase{$contadorGlobal});
}

//falta crear un string con el array resultado
while()

$descodificada=$_POST['Frase_descodificada'];
echo $descodificada ; //wtf es esto??

header('Location: formulario_cesar.php');

//chr(ascii) ord($string)
*/
?>






<?php
//la cosa es, de el echo de arriba, en la funcion codificar, guardar en una variable el resultado (con la funcion implode se pasa de arrays a strings) e imprimirlo en el formulario (otra página php) mediante el GET (pasarle la variable) el el formulario solo queda ponerle el nombre de la variable con la nueva palabra codificada
?>
