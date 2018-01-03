<?php

  namespace stat;

class Player
{

  public static $allPlayers = [];

  public $username;
  public $color;

  function __construct($username, $color)
  {
    $this->username = $username;
    $this->color = $color;
    static::$allPlayers[] = $this;
  }

  public static function getAllPlayers(){
    foreach(static::$allPlayers as $player){
      echo "<h1 style='color:{$player->color}'>{$player->username}</h1><hr/>";

    }
  }

}
