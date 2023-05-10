<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use Carbon\Carbon;
use DateTime;

class BookingRepository implements BookingRepositoryInterface
{

    public function allBookings()
    {
        return Booking::all();
    }

    public function storeBookings($data)
    {
        $start_date = Carbon::parse($data['start_date']);
        $end_date = Carbon::parse($data['end_date']);

        $booking =  Booking::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

        return $booking;
    }



    public function findBooking($id)
    {
        return Booking::find($id);
    }

    public function updateBookings($data, $id)
    {
        $booking = Booking::where('id', $id)->first();
        $booking->name = $data['name'];
        $booking->email = $data['email'];
        $booking->start_date = $data['start_date'];
        $booking->end_date = $data['end_date'];

        $booking->save();
    }
}
