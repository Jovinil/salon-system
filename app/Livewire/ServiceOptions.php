<?php

namespace App\Livewire;

use App\Models\ServiceOption;
use Livewire\Component;

class ServiceOptions extends Component
{
    public $serviceOptions;

    public function mount()
    {
        // Fetch all service options with related services
        $this->serviceOptions = ServiceOption::with('service')->get();
    }

    public function render()
    {
        return view('livewire.service-options');
    }
}
