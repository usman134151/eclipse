<?php

use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = \App\Booking::all();
        foreach ($bookings as $booking){
            $booking->update(['isCompleted' => $booking->isBookingCompleted()]);
        }
    }
}
