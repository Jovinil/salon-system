<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServicesList extends Component
{
    public function render()
    {
        // Get all services with their related options
        $services = Service::with('options')->get();

        // Pass the services to the view
        return view('livewire.services-list', compact('services'));
    }
}
