<?php

namespace App\Http\Controllers;

use App\Models\Booking;  // Import the Booking model
use App\Models\ServiceOption;  // Import the ServiceOption model if needed
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    public function createBooking(Request $request, int $id)
    {
        // Validate the incoming request
        $request->validate([
            'date' => 'required|date|after:today',
            'services' => 'required|array',
            'services.*' => 'exists:service_options,id', // Validate each service ID
        ]);

        try {
            // Iterate over the selected services and create a booking for each
            foreach ($request->input('services') as $serviceId) {
                Booking::create([
                    'booking_date' => $request->input('date'),
                    'user_id' => $id,
                    'service_option_id' => $serviceId,
                ]);
            }

            return redirect()->back()->with('success', 'Bookings created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create bookings: ' . $e->getMessage());
        }
    }

    public function editBooking()
    {
        $user = Auth::user()->id;

        $bookings = DB::table('users')->join('bookings', 'users.id', '=', 'bookings.user_id')
        ->where('users.id', '=', $user)
        ->select('bookings.*', 'users.*')
        ->get();

        return view('customer.view', compact('bookings'));
    }

}
