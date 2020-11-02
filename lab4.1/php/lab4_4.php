<?php
  $initialFirstValue=clean($_GET['numberValue1']);
  $initialLastValue=clean($_GET['numberValue2']);
  $amount=clean($_GET['numberValue3']);

  function clean($value=" ") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  class MinMaxRand {
    private $initialFirstValue;
    private $initialLastValue;
    private $amount;

    public $max;
    public $min;
    public $arrOfValues = [];
    public $positionMax;
    public $positionMin;

    public function __construct(int $max, int $min, int $amount)
    {
      $this->initialFirstValue = $max;
      $this->initialLastValue = $min;
      $this->amount = $amount;
    }

    public function createArray()
    {
      for ($i=0; $i<($this->amount); $i++) {
        $newItem = mt_rand($this->initialFirstValue, $this->initialLastValue);
        if($i==0)
        {
          $this->min = $newItem;
          $this->max = $newItem;
        }
        $this->arrOfValues[] = $newItem;
      }
    }
    
    public function isMin($value, $index) 
    {
      if($value <= $this->min)
      {
        $this->positionMin = $index;
        $this->min = $value;
      }
    }

    public function isMax($value, $index) 
    {
      if($value >= $this->max) {
        $this->positionMax = $index;
        $this->max = $value;
      }
    }

    public function findMinMax()
    {
      for ($i=0; $i<count($this->arrOfValues); $i++)
      {
        $item = $this->arrOfValues[$i];
        $this->isMin($item, $i);
        $this->isMax($item, $i);
      }
    }

    public function replaceMinMax()
    {
      $this->arrOfValues[$this->positionMax] = $this->min;
      $this->arrOfValues[$this->positionMin] = $this->max;
    }
  }
  $response = new stdClass(); //пустой класс при передаче пустых типов объектов
  $minMaxRand = new MinMaxRand($initialFirstValue, $initialLastValue, $amount);
  $minMaxRand->createArray();
  $response->initialArr = $minMaxRand->arrOfValues;
  $minMaxRand->findMinMax();
  $minMaxRand->replaceMinMax();
  $response->arr = $minMaxRand->arrOfValues;
  $response->min=$minMaxRand->min;
  $response->max=$minMaxRand->max;
  echo json_encode($response);
?>
