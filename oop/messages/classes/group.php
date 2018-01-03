<?php

namespace ex;

class Group
{

protected $name;
protected $conversation;

  function __construct($name, Conversation $conversation)
  {
    $this->name = $name;
    $this->conversation = $conversation;

  }

  public function send(Message $message)
  {
    $this->conversation->send($message);
  }

  public function messages($value='')
  {
    return $this->conversation->Messages();
  }

}
