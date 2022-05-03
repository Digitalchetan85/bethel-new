<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $contact;
    public $message;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|digits:10',
            'message' => 'required',
        ]);

        Mail::to('chetankumar.nv@gmail.com')->send(new ContactEmail($data));
        session()->flash('success', 'Thanks for Contacting us. We will contact you soon!');
    }
    
    public function render()
    {
        return view('livewire.home-component')->layout('layouts/base');
    }
}
