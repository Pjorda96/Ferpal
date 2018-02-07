<?php
$contadorGlobal=0;
//para un numero par de la palabra
function par(){
  arrayResultado[$contadorGlobal]=arrayPar[$contadorGlobal];

  $contadorGlobal=$contadorGlobal+1;
}
function impar(){
  arrayResultado[$contadorGlobal]=arrayPar[$contadorGlobal+28];

  $contadorGlobal=$contadorGlobal+1;
}


  $descodificada=$_POST['Frase_descodificada'];
  echo $descodificada ;
?>
<a href="formulario_cesar.php">Volver a la página principal</a>
