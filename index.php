<?php

class User {
public $username;
private $color;

public function __construct($username, $color = "red")
{
  $this->username = $username;
  $this->color = $color;
}

public function color()
{
  return $this->color;
}
public function changeColor($color)
{
    $this->color = $color;
}

}

$newUsers = array(
  new user("prv", "red"),
  new user("vtor", "green"),
  new user("tret", "blue")

);

require "users.php";
echo "<br/>";

array_map(function ($user){
  $user->changeColor("gray");
  return $user;
}, $newUsers);


require "users.php";


 ?>
