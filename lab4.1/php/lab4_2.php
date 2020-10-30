<?php
  $numberValue1=clean($_GET['numberValue1']);
  $numberValue2=clean($_GET['numberValue2']);
  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }
  
  echo substr_count(strval($numberValue1), strval($numberValue2));
?>