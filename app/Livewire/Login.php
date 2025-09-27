<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    // Validation rules for the login form
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:5',
    ];

    // Authenticate the user
    public function authenticate()
    {
        // Validate the input
        $this->validate();

        // Attempt to log in the user
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Redirect to a dashboard or desired route
            session()->flash('message', 'Login successful!');
            return redirect()->intended('/'); // Change '/dashboard' to your desired route
        } else {
            // Handle login failure
            session()->flash('error', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
