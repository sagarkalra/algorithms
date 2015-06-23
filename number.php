<?php

function printSum($candidates, $index, $n) {
  for ($i = 1; $i <= $n; $i++)
    echo $candidates[$index[$i]], (($i == $n) ? "" : "+");
  //cout << endl;
  echo "\n";
}

function solve($target, $sum, $candidates, $sz, $index, $n) {
  if ($sum > $target)
    return;
  if ($sum == $target)
    printSum($candidates, $index, $n);
 
  for ($i = $index[$n]; $i < $sz; $i++) {
    $index[$n+1] = $i;
    solve($target, $sum + $candidates[$i], $candidates, $sz, $index, $n+1);
  }
}

function solveMe($target, $candidates, $sz) {
  $index = [];
  $index[0] = 0;
  solve($target, 0, $candidates, $sz, $index, 0);
}

  $a = array(1,2,3,4,5,6,7,8,9,10);
  $sum = 10;
  $size = 10;
  solveMe($sum, $a, $size);
