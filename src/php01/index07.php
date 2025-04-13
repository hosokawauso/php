<?php
function outputHello()
{
    echo "Hello world";
}

outputHello();

function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(90);
echo "<br />";


function text($number1, $number2)
{
 $value = $number1 + $number2;
 return $value;
}

$total = text(2, 4);
echo $total;

echo "<br />";


function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if($total > 210){
    echo $total . "点なので合格です！";
  }else{
    echo $total . "点なので不合格です〇ω〇";
  }
}

echo (exam(80, 12,101));

echo "<br />";

function getsquareArea($base, $height)
{
  return $base * $height;
}
echo getsquareArea(5, 5). "\n";

echo "<br />";



