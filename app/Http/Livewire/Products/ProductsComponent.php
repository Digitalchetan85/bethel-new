<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('success', 'Product deleted successfully');
    }

    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.products.products-component', ['products' => $products])->layout('layouts.page');
    }
}
