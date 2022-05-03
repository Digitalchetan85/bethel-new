<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DesktopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::where('type', '=', 'desktop')->orderBy('created_at','desc')->paginate(9);
        $relatedproducts = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.desktop-component', ['products' => $products, 'relatedproducts' => $relatedproducts])->layout('layouts.page');
    }
}
