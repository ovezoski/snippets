<?php

/**
 *
 */
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


$group = new Group("Squad", new Conversation());

$group->send(new Message("Hi", "John Doe"));
$group->send(new Message("Hi", "Jane Doe"));

var_dump($group->Messages());



 ?>
