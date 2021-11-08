<?php

namespace App;

class Event implements EventInterface
{
  public function addEvent(Event $event): int
  {
    return 1;
  }

  public function getEvent(int $id): Event
  {
    return new Event();
  }
}