<div>
    <div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block bottom-sm-1" id="bread">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->


        <div id="addproducts" class="">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- <div class="col-md-2"></div> --}}
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="text-primary">Edit Product</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.products') }}" class="pull-right btn btn-primary">All
                                            Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form id="contactform1" class="contact-form" enctype="multipart/form-data"
                                            wire:submit.prevent='updateproduct'>
                                            @csrf
                                            <div class="inputs-col">
                                                <div class="input-wrapper">
                                                    <label>Name<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="name">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Slug<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="slug" wire:keyup='generateSlug'>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Type<span class="required">*</span></label>
                                                    <select name="" id="" class="input-custom input-full"
                                                        wire:model="type">>
                                                        <option value="laptop">Laptop</option>
                                                        <option value="desktop">Desktop</option>
                                                        <option value="monitor">Monitor</option>
                                                    </select>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Product Image<span class="required">*</span></label>
                                                    <input type="file" name="name" class="input-custom input-full"
                                                        wire:model="newimage">
                                                    @if ($newimage)
                                                        <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120"
                                                            class="img-responsive">
                                                    @else
                                                        <img src="{{ asset('assets/images/products') }}/{{ $image }}"
                                                            alt="" width="120" class="img-responsive" />
                                                    @endif
                                                </div>

                                                <div class="input-wrapper">
                                                    <label>Product Images<span class="required">*</span></label>
                                                    <input type="file" name="name" class="input-custom input-full"
                                                        wire:model="newimages" multiple>
                                                    @if ($newimages)
                                                        @foreach ($newimages as $image)
                                                            <img src="{{ $image->temporaryUrl() }}" alt=""
                                                                width="120" class="img-responsive">
                                                        @endforeach
                                                    @else
                                                        @php
                                                            $images = explode(',', $product->images);
                                                        @endphp

                                                        @foreach ($images as $image)
                                                            @if ($image)
                                                                <img src="{{ asset('assets/images/products') }}/{{ $image }}"
                                                                    alt="" width="120" class="img-responsive" />
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <div class="input-wrapper">
                                                    <label>Model<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="model">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Processor<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="processor">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>RAM<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="ram">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Hard Disk<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="harddisk">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Graphics<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="graphics">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Screen Size<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="screensize">
                                                </div>
                                                <div class="input-wrapper">
                                                    <label>Quantity<span class="required">*</span></label>
                                                    <input type="text" name="name" class="input-custom input-full"
                                                        wire:model="quantity">
                                                </div>
                                            </div>
                                            @if (Session::has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('success') }}</div>
                                            @endif
                                            <button type="submit" id="submit1"
                                                class="btn btn-border"><span>Submit</span></button>
                                        </form>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-md-2"></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
