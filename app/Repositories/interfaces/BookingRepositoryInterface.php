<?php

namespace App\Repositories\Interfaces;

interface BookingRepositoryInterface
{
    public function allBookings();
    public function storeBookings($data);
    public function findBooking($id);
    public function updateBookings($data, $id);
}
