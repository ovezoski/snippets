<?php
namespace ex;

class Message
{
  public $content;
  public $sender;

  function __construct($content, $sender)
  {
    $this->content = $content;
    $this->sender = $sender;
  }

}
