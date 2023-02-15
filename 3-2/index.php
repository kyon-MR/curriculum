<?php

$fruits = ["りんご" => 100, "みかん" => 50, "もも" => 300];
$number = [3, 3, 10];

function getPrice($fruits, $number) {
  $total = $fruits * $number;
  return $total;
}

$i = 0;
foreach ($fruits as $key => $value) {
  print $key."は".getPrice($value, $number[$i])."円です。";
  print '<br>';
  $i++;
}

?>
