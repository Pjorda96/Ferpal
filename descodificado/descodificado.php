<?php

  $min=32;
  $max=122;
  $fmove=16;

  $input_string="hola";
  $input_length=0;
  $input_array=array();


  for ($i=0; $input_length >=$i ; $i++)
  {
    $char = $input_string[$i];
    $char_val=ord($char);

    if(($char_val + $fmove) >$max)
    {
      $a=$char_val+$fmove-$max;
      $result=$min-1+$a;
    }
    else
    {
      $result=$char_val+$fmove;
    }
    if ($result > $max)
    {
      $a=$result+$fmove-$max;
      $result=$min -1+$a;
    }
    $input_array[]=$result;
    $fmove = $result;
  }
for ($i=0;$i<sizeof($input_array);$i++) {
  echo $input_array[$i];
}

 ?>
