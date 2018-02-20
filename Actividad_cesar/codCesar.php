<?php
//recogemos frase descodificada PDOStatement
//creamos arrays
function Inicio()
{
  $fraseGET=strtolower($_POST['Frase_descodificada']);
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
    //comprobamos si el caracter es un espacio si lo es le pondremos el $
    if($fraseGET[$i]!=" ")
    {
      for ($j=0; $j < count($arrayNormal); $j++)
      {
        for ($w=0; $w < count($arrayNormal[$j]); $w++)
        {
          if($arrayNormal[$j][$w] == $fraseGET[$i])
          $frase{$i}=$fraseGET[$i];
        }
      }
    //  $frase{$i}=$fraseGET[$i];

    }
      else
      {
        $frase{$i}=$arrayNormal[3][5];
      }

    echo $frase[$i]."--";
      $arrayAsci[$i]=ord($frase[$i]);


    echo $arrayAsci[$i]."<br>";
  } 
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
    if($i%2==0){
      $prueba[$i]=$_arrayAsci[$i]+3;
      echo $prueba[$i]."<br>";
      $ArraystringCodificado[$i]= chr($prueba[$i]);
    }else {
      $prueba[$i]=$_arrayAsci[$i]-5;
      echo $prueba[$i]."<br>";
      $ArraystringCodificado[$i]= chr($prueba[$i]);
    }
  }
  $stringEnvio= implode($ArraystringCodificado);
  echo $stringEnvio;


  header( 'Location: formulario_cesar.php?string='.$stringEnvio );

}

Inicio();
