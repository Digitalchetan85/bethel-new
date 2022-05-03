<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\support\Str;

class EditProductsComponent extends Component
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
    public $newimage;
    public $images;
    public $newimages;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->type = $product->type;
        $this->model = $product->model;
        $this->ram = $product->ram;
        $this->processor = $product->processor;
        $this->harddisk = $product->harddisk;
        $this->graphics = $product->graphics;
        $this->screensize = $product->screensize;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = $product->images;
        $this->product_id = $product->id;
    }

    public function genertaSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateproduct()
    {
        $product = Product::find($this->product_id);
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
        
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imagename);
            $product->image = $imagename;
        }

        if ($this->newimages) {
            $imagename = '';
            foreach($this->newimages as $key => $image)
            {
                $imgName = Carbon::now()->timestamp. $key.'.' . $image->extension();
                $image->storeAs('products',$imgName);
                $imagename = $imagename.','.$imgName;
            }
            $product->images = $imagename;
        }

        $product->save();
        session()->flash('success', 'Product Updated Successfully');
    }
    public function render()
    {
        $product = Product::find($this->product_id);
        return view('livewire.products.edit-products-component', ['product'=>$product])->layout('layouts.page');
    }
}
