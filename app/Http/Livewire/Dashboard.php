<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    function render()
    {
        return view('livewire.dashboard.dashboard');
    }
    function profile()
    {
        return view('livewire.dashboard.profile');
    }
}
