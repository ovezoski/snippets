<?php
namespace ex;

class Conversation
{

  protected $messages = [];

  public function send(Message $message)
  {
    $this->messages[] = $message;
  }

  public function Messages()
  {
      return $this->messages;
  }

}
