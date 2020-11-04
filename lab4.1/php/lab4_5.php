<?php
  $value=clean($_GET['name']);

  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  class ShortName {
    private $fullName;

    public function __construct(string $name)
    {
      $this->fullName = $name;
    }

    public function getNameArr()
    {
      return explode(" ", $this->fullName);
    }

    public function getWordFirstLetter($word) 
    {
      return mb_substr($word, 0, 1);
    }
    
    public function getShortForm() 
    {
      $newStringArr = $this->getNameArr($this->fullName);
      $surname = $newStringArr[0];
      $name = count($newStringArr) >= 2 ? $this->getWordFirstLetter($newStringArr[1]).'.' : "";
      $patronymic = count($newStringArr) >= 3 ? $this->getWordFirstLetter($newStringArr[2]).'.' : "";
      return $surname.' '.$name.$patronymic;
    }
     
  }
  $shortName = new ShortName($value);
  $response = $shortName->getShortForm();
  echo $response;
?>
