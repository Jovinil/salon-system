<?php

namespace App\Http\Controllers;

use App\Models\Booking;  // Import the Booking model
use App\Models\ServiceOption;  // Import the ServiceOption model if needed
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function getBooking()
    {

    }

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

    // public function createBooking(Request $request, int $id)
    // {
    //     $validation = $request->validate([
    //         'date' => 'required|date|after_or_equal:today',
    //         'services' => 'required|array',
    //         'services.*' => 'exists:service_options,id', // Ensures no past date and not empty
    //     ]);

    //     // Access selected services
    //     $selectedServices = $validation['services'];

    //     // Process the selected services
    //     dd($selectedServices); // Dump the array of selected service IDs

    // }
}
