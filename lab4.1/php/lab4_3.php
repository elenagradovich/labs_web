<?php
  $numberValue1=clean($_GET['numberValue1']);
  $numberValue2=clean($_GET['numberValue2']);
  $divider=clean($_GET['numberValue3']);
  
  $response = new stdClass(); //пустой класс при передаче пустых типов объектов
  $response->arr=[];
  $response->sum=0;
  $range;

  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  function checkNumDiv ($item, $d) {
    $isdiv = fmod($item, $d);
    if ($isdiv == 0) {
      return true;
    }
    return false;
  };
  
  for ($i=$numberValue1; $i<=$numberValue2; $i++) {
    
    if(checkNumDiv($i, $divider)) {
      array_push($response->arr, $i);
      $response->sum +=$i;
    };
  };

  echo json_encode($response);
?>