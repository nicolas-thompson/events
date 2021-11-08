<?php

namespace App;

class Customer implements CustomerInterface
{
    public function addCustomer(Customer $customer): int
    {
        return 1;
    }

    public function getCustomer(int $id): Customer
    {
        return new Customer();
    }

    public function getBookings(int $customerId): array
    {
        return [];
    }
}