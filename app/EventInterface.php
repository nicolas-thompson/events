<?php

namespace App;

interface EventInterface
{
  public function addEvent(Event $event): int;
  public function getEvent(int $bookingId): Event;
}
