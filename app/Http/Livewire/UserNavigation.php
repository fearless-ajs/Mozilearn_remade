<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserNavigation extends Component
{
    public function logout()
    {
        Auth::logout();
        $this->emit('alert', ['type' => 'success', 'message' => 'Logged out successfully']);
        return;
    }


    public function render()
    {
        return view('livewire.general-livewire.user-navigation');
    }
}
