<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddProductsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $type;
    public $model;
    public $ram;
    public $processor;
    public $harddisk;
    public $graphics;
    public $screensize;
    public $quantity;
    public $image;
    public $images;

    public function mount() {
        $this->type = 'laptop';
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function addproduct() {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->type = $this->type;
        $product->model = $this->model;
        $product->ram = $this->ram;
        $product->processor = $this->processor;
        $product->harddisk = $this->harddisk;
        $product->graphics = $this->graphics;
        $product->screensize = $this->screensize;
        $product->quantity = $this->quantity;

        $imagename = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('products',$imagename);
        $product->image = $imagename;
        
        if ($this->images)
        {
            $imagename = '';
            foreach($this->images as $key => $image)
            {
                $imgName = Carbon::now()->timestamp. $key.'.' . $image->extension();
                $image->storeAs('products',$imgName);
                $imagename = $imagename.','.$imgName;
            }
            $product->images = $imagename;
        }


        $product->save();
        session()->flash('success', 'Product Uploaded Successfully');
    }

    public function render()
    {
        return view('livewire.products.add-products-component')->layout('layouts.page');
    }
}
