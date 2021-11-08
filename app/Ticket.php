<?php

namespace App;

class Ticket
{
    public function getCustomerTickets($customer) {
        return $customer->tickets()->get();
    }

    public function getEventTickets($event) {
        return $event->tickets()->get();
    }

    public function getCustomerEventTickets($customer, $event) {
        return $customer->tickets()->where('event_id', $event->id)->get();
    }
}