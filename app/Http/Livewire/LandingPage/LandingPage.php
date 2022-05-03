<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page.landing-page')->layout('layouts.landing-page');
    }
}
