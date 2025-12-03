<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;
    
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) 
        {
            return redirect()->route('dashboard');
        }
        session()->flash('error', 'Invalid login details.');
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
    
}
