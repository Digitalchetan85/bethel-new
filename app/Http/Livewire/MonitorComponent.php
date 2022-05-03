<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class MonitorComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::where('type', '=', 'monitor')->orderBy('created_at','desc')->paginate(9);
        $relatedproducts = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.monitor-component', ['products'=>$products, 'relatedproducts'=>$relatedproducts])->layout('layouts.page');
    }
}
