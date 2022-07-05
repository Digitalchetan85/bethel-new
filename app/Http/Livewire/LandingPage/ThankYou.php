<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class ThankYou extends Component
{
    public function render()
    {
        return view('livewire.landing-page.thank-you')->layout('layouts.landing-page');
    }
}
