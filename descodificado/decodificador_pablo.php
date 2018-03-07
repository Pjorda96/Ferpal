<?php
define("MIN",32);
define("MAX", 122);
$fmove = 16;
//$input_string = "Una cosa es ser solidario, y otra es serlo a cambio de nada. Mariano Rajoy";
$input_string = "ex#CK_w\"BLd)AKb'?Sdr &=K_0Pn3G`w\"BLd)AKbs,LRrz%7>L`%.8Xkqz%Ssek'5;Nb'y$3Ge";
echo $input_string;
$input_length = strlen($input_string);
$input_array = [];
for ($i=0; $input_length > $i ; $i++) {
  $char = $input_string[$input_length-$i];
  $char_val = ord($char);
  if ($char_val + $fmove > MAX) {
    $a = $char_val - $fmove + MAX;
    $result = MIN - 1 + $a;
  } else {
    $result = $char_val - $fmove;
  }
  if ($result > MAX) {
    $a = $result - MAX;
    $result = MIN - 1 + $a;
  }
  $input_array[] = $result;
  $fmove = $result;
}

$numbers = implode(",", $input_array);

for ($i=0; $i < $input_length ; $i++) {
  $ascii = $input_array[$i];
  echo "<b>" . chr($ascii) . "</b>";
}
?>
