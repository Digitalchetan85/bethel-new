<?php

namespace App\Http\Livewire\LandingPage;

use App\Mail\LandingEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class LandingPage extends Component
{
    public $name;
    public $email;
    public $phone;
    public $type;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'type' => 'required',
        ]);

        Mail::to('chetankumar.nv@gmail.com')->send(new LandingEmail($data));
        // session()->flash('success', 'Thanks for Contacting us. We will contact you soon!');
        return redirect()->to('/thank-you');
    }
    
    public function render()
    {
        return view('livewire.landing-page.landing-page')->layout('layouts.landing-page');
    }
}
