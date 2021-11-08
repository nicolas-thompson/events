<?php

namespace App;

interface BookingInterface
{
    public function addBooking(Booking $booking): int;
    public function getBooking(int $id): Booking;
    public function getBookings(int $customerId): array;
}