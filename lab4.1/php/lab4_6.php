<?php
  $numberValue=clean($_GET['numberValue']);

  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  class Cards {
    private $inputValue;
    private $cardsArr = array(
      "6"=>"шестерка", "7"=>"семерка", "8"=>"восьмерка", "9"=>"девятка",
      "10"=>"десятка", "11"=>"валет", "12"=>"дама", "13"=>"король", "14"=>"туз"
    );

    public function __construct(int $value)
    {
      $this->inputValue = $value;
    }

    public function getCorrespondValue()
    {
      if (array_key_exists($this->inputValue, $this->cardsArr)) {
        return $this->cardsArr[$this->inputValue];
      } else {
        echo 'Неверное значение';
      }
    }
  }

  $cards = new Cards($numberValue);
  $response = $cards->getCorrespondValue();
  echo $response;
?>
