<?php


$i = 0;
while ($i <=100){
    if($i == 20){
      break;
    }
    if ($i % 3 === 0){
      $i++;
      continue;
    }
    echo $i . "<br />";
    $i++;
}

$a = 0;
do {
  echo $a . "<br />";
  ++$a;
}while ($a < 5);


$ageA = 50;
$ageB = 19;

$b=1;
print($b++);
print "<br />";
print(++$b);