<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class MonitorDetails extends Component
{public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $relatedproducts = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.monitor-details', ['product'=>$product, 'relatedproducts'=>$relatedproducts])->layout('layouts.page');
    }
}
