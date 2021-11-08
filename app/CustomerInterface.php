<?php

namespace App;

interface CustomerInterface
{
  public function addCustomer(Customer $customer): int;
  public function getCustomer(int $id): Customer;
  public function getBookings(int $customerId): array;
}