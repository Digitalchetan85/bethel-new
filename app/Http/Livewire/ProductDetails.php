<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $relatedproducts = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.product-details', ['product'=>$product, 'relatedproducts'=>$relatedproducts])->layout('layouts.page');
    }
}
