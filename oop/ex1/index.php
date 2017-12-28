<?php

class Tree
{
  protected $branchesNum;
  protected $branches= [];

  function __construct($branchesNum)
  {
    $this->branchesNum = $branchesNum;
  }

  public function setBranch($color, $branch = false)
  {
    if($branch){
      if($branch >= $this->branchesNum ){
        throw new Exception("No such branch");
      }

      $this->branches[$branch] = $color;

    }
    else if(array_length($this->branches) < $branchesNum ){
      array_push($this->branches , $color);
    }
  }

  public function getBranch($branch)

  {
    if(!isset($this->branches[$branch]) ){
      throw new Exception("Branch undefined");
    }

    return $this->branches[$branch];

  }

}

//
// $tr = new Tree(5);
// $tr->setBranch("red", 4);
//
// var_dump($tr->getBranch(4) );

 ?>
