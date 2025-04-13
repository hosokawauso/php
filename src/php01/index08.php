<?php
$people = [
    [
    "last_name" => "なんば",
    "first_name" => "ゆう",
    "age" => 33,
    "gendar" => "femal"
    ],
    [
    "last_name" => "すずき",
    "first_name" => "たいち",
    "age" => 56,
    "gendar" => "meal"
    ],
    [
    "last_name" => "さやま",
    "first_name" => "かおる",
    "age" => 30,
    "gendar" => "femal"
    ],
];
 echo $people[2]["last_name"];

 echo "<br />";


 $people5 = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "women"]
 ];
 
 foreach($people5 as $person){
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br />";
 }

 



echo "<br />";

$fruits = array("apple", "banana", "orange");

foreach ($fruits as $fruit){
    echo $fruit . "<br />";
}

$student_core = array("Alice" => 85,"Bob" =>92, "Chris" => 78, "Watari" => 99);

foreach ($student_core as $name => $score){
    echo $name . "の点数は" . $score. "点です。" . "<br />";
}

$numbers = array(1, 2, 3, 4, 5);
$doubled_numbers = array();

foreach($numbers as $number){
    $doubled_numbers[] = $number * 2;
}
print_r ($doubled_numbers);
