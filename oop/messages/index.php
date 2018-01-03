<?php

require "vendor/autoload.php";

use ex\conversation;
use ex\group;
use ex\message;


$group = new Group("Squad", new Conversation());



$group->send(new Message("Hi", "John Doe"));
$group->send(new Message("Hi", "Jane Doe"));
var_dump($group->Messages());


 ?>
