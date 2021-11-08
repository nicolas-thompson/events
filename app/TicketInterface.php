<?php

namespace App;

interface TicketInterface
{
  public function getCustomerTickets(Customer $customer): Ticket;
  public function getEventTickets(Event $event): Ticket;
  public function getCustomerEventTickets(Customer $customer, Event $event): Ticket;
}
