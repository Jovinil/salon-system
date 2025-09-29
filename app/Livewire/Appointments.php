<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\ServiceOption;

class Appointments extends Component
{
    public $bookings;
    public $editingBookingId = null;
    public $bookingDate;
    public $serviceOptionId;
    public $serviceOptions = [];

    public function mount()
    {
        $this->serviceOptions = ServiceOption::all();
        $this->loadBookings();
    }

    private function loadBookings()
    {
        $this->bookings = Booking::join('service_options', 'bookings.service_option_id', '=', 'service_options.id')
            ->select('bookings.booking_date', 'service_options.name as option_name', 'bookings.id', 'bookings.service_option_id')
            ->get();
    }

    public function edit($bookingId)
    {
        $booking = Booking::find($bookingId);

        if ($booking) {
            $this->editingBookingId = $bookingId;
            $this->bookingDate = $booking->booking_date;
            $this->serviceOptionId = $booking->service_option_id;
        } else {
            session()->flash('error', 'Booking not found.');
        }
    }

    public function cancelEdit()
    {
        $this->editingBookingId = null;
        $this->reset(['serviceOptionId', 'bookingDate']);
        $this->loadBookings();
        $this->resetValidation();
        $this->resetErrorBag();
    }


    public function update()
    {
        $this->validate([
            'bookingDate' => 'required|date|after:today',
            'serviceOptionId' => 'required|exists:service_options,id',
        ]);

        $booking = Booking::find($this->editingBookingId);
        if ($booking) {
            $booking->update([
                'booking_date' => $this->bookingDate,
                'service_option_id' => $this->serviceOptionId,
            ]);

            session()->flash('success', 'Booking updated successfully.');
        }

        $this->loadBookings();
        $this->cancelEdit();
    }

    public function delete($bookingId)
    {
        $booking = Booking::find($bookingId);

        if ($booking) {
            $booking->delete();
            $this->loadBookings();
            session()->flash('success', "Booking with ID {$bookingId} has been deleted.");
        } else {
            session()->flash('error', 'Booking not found.');
        }
    }

    public function render()
    {
        return view('livewire.appointments', [
            'bookings' => $this->bookings,
            'serviceOptions' => $this->serviceOptions,
        ]);
    }
}
