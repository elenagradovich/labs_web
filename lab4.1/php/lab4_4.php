<?php
  $minNumber;
  $maxNumber;
  $amount = 10;

  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  };

  if($_GET['numberValue1']) {
    $minNumber = clean($_GET['numberValue1']);
    echo $minNumber;
  } else {
    $minNumber = 0;
  }

  if($_GET['numberValue2']) {
    $maxNumber = clean($_GET['numberValue2']);
    echo $maxNumber;
  } else {
    $maxNumber = 100;
  }
  
  

  /*
  
  $response = new stdClass(); //пустой класс при передаче пустых типов объектов
  $response->$initialArr = [];
  $response->$arr = [];
  $min;
  $max;
  $positionMin;
  $positionMax;
  $response->$min='';
  $response->$max='';

  function checkMin ($item, $position) {
    global $min;
    if($item < $min) {
      $min = $item;
      $positionMin = $position;
    };
  };

  function checkMax ($item, $position) {
    global $max;
    if($item > $max) {
      $max = $item;
      $positionMax = $position;
    }
  };

  function moveElements ($arr) {
    global $positionMin, $positionMax;

    $arr[$positionMin] = $max;
    $arr[$positionMax] = $min;
  };
  
  for ($i=0; $i<=$amount; $i++) {
    global $response;
    $newItem = mt_rand($minNumber, $maxNumber);
    if($i==0){
      global $min;
      global $max;
      $min = $newItem;
      $max = $newItem;
    }
    array_push($response->initialArr, $newItem);
    checkMin($newItem, $i);
    checkMax($newItem, $i);
  };

  $response->arr = array_merge(array(), $response->initialArr);
  moveElements($response->arr);
  $response->$min=$min;
  $response->$max=$max;
  echo json_encode($response);
*/
?>