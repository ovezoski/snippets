<?php

abstract class Sport
{
  protected $score = 0;

  function __construct()
  {
  }

  abstract public function updateScore();

  public function getScore()
  {
    return $this->score;
  }

}


class Basketball extends Sport
{
public function updateScore($special = false)
{
  if($special == "Three point"){
    $this-> score+=3;
  }else if($special == "Free throw"){
    $this->score += 1;
  }else{
    $this->score+=2;
  }

}

}

class Football extends Sport
{
  public function updateScore()
  {
    $this->score+=1;
  }

}

$fb = new Football();
$fb->updateScore();
echo $fb->getScore()." ";
$fb->updateScore();
echo $fb->getScore()." ";

echo "<br/>";

$bb = new Basketball();
$bb->updateScore();
echo $bb->getScore()." ";
$bb->updateScore("Free throw");
echo $bb->getScore()." ";
$bb->updateScore("Three point");
echo $bb->getScore()." ";


 ?>
