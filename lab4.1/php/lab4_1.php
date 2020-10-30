<?php
  $numberValue=$_GET['numberValue'];
  function getSumOfNumber ($value) {
    $sum=0;
    $pattern='/^[0-9]/';
    $stringArr = strval($value);//перевод в строку
    for($i=0; $i<strlen($stringArr); $i++) {
      if (preg_match($pattern, $stringArr[$i])) {
        $sum = $sum + $stringArr[$i]; // array_sum
      }
    }
    return $sum; 
  }

  echo getSumOfNumber($numberValue);
?>