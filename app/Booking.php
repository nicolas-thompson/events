<?php

namespace App;

class Booking implements BookingInterface
{
  public function addBooking(Booking $booking): int
  {
    return 1;
  }

  public function getBooking(int $id): Booking
  {

    return new Booking();
  }

  public function getBookings(int $customerId): array
  {
    return [];
  }
}