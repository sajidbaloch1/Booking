<?php

namespace Tests\Feature;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testHome()
    {
        $booking = Booking::factory()->create();
        $this->get(route('home'))
            ->assertOk()
            ->assertSee($booking->name)
            ->assertSee($booking->email)
            ->assertSee($booking->start_date)
            ->assertSee($booking->end_date);
    }
    public function teststoreBooking()
    {
        $start_date = Carbon::parse('1982-01-21 00:00:00')->format('Y-m-d\TH:i');
        $end_date = Carbon::parse('1982-01-21 00:00:00')->format('Y-m-d\TH:i');
        $this->post(route('store'), [
            'name' => 'sajid',
            'email' => 'sajid@gmail.com',
            'start_date' => $start_date,
            'end_date' => $end_date,
        ])
            ->assertSessionHasNoErrors()
            ->assertRedirect();
    }
    public function testupdateBooking()
    {
        $booking = Booking::factory()->create();

        $start_date = Carbon::parse('1982-01-21 00:00:00')->format('Y-m-d\TH:i');
        $end_date = Carbon::parse('1982-01-21 00:00:00')->format('Y-m-d\TH:i');
        $updateBookingData = [
            'name' => 'sajid',
            'email' => 'sajid@gmail.com',
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $this->put(
            route('update', $booking->id),
            $updateBookingData
        )
            ->assertSessionHasNoErrors()
            ->assertRedirect();
    }
}
