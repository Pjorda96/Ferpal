<?php
//codigo josep (no va)
$char = "x";
$result=0;
$a=0;
$mov=117;
$char_val = ord($char);

if(($char_val + $mov)>122){
  $a= $char_val + $mov - 122;
  $result = 32 - 1 + $a;
}else {
  $result=$char_val + $mov;
}

if($result>122){
  $a=$result + $mov - 122;
  $result= 32 - 1 + $a;
}
letra
echo "El resultado es ".$result;































?>
