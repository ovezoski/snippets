<?php

namespace sorting;

use \interfaces\sort;

class SmartSort implements Sort
{

  public function ascending(... $arr)
  {
    asort($arr);
    return $arr;
  }

  public function descending(... $arr)
  {
    arsort($arr);
    return $arr;
  }

}
