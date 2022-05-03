<div>
    <style>
        nav {
            text-align: center;
        }

        nav svg {
            height: 10px;
        }

        nav .hidden {
            display: block !important;
        }

        .select-none {
            margin-right: 5px !important;
        }

    </style>
    <!-- Content  -->
    <div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block" id="bread">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">{{ $product->type }}</a></li>
                        <li class="active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->

        <div class="block bottom-sm" id="product-details">
            <div class="container">
                <div class="row product-block">
                    <div class="col-sm-4">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}">
                                    <img src="{{ asset('assets/images/products') }}/{{ $product->image }}" />
                                </li>
                                @php
                                    $images = explode(',', $product->images);
                                @endphp
                                @foreach ($images as $image)
                                    @if ($image)
                                        <li data-thumb="{{ asset('assets/images/products') }}/{{ $image }}">
                                            <img src="{{ asset('assets/images/products') }}/{{ $image }}" />
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="cleafix visible-xs"></div>
                    <div class="col-sm-8">
                        <div class="product-block-info">
                            <h2 class="product-block-title">{{ $product->name }}</h2>

                            <div class="product-block-description">
                                <ul class="marker-list-sm marker-list-sm-regular">
                                    <li>Model: {{ $product->model }}</li>
                                    <li>Processor: {{ $product->processor }}</li>
                                    <li>RAM: {{ $product->ram }}</li>
                                    <li>HDD: {{ $product->harddisk }}</li>
                                    <li>Graphics: {{ $product->graphics }}</li>
                                    <li>Screen Size: {{ $product->screensize }}</li>
                                    <li>Quantity Left: {{ $product->quantity }}</li>
                                </ul>
                            </div>
                            <div class="product-block-actions">
                                <a href="{{route('contact')}}" class="btn btn-lg product-block-add-to-cart "><span>Contact Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="similar-products" class="py-3 py-md-5">
            <div class="container">
                <h2 class="text-primary py-3 text-center">Related Products</h2>
                <div class="row">
                    @foreach ($relatedproducts as $product)
                        <div class="col-md-3">
                            <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                <div class="item">
                                    <div class="text-center">
                                        <img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                            alt="" class="pb-2 img-responsive">
                                        <p>{{ $product->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Get Now Block -->
        <div class="block bg-light full-block bottom-null">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
					<h3 class="subtitle">+91 98800 37944 / 88804 70007</h3>
					<p class="info">for one of our professional computer repair techs to help you with your Desktop, Laptop, Mac or other inquiry</p>
					<div class="btn-inline">
							
						<a class="btn btn-invert" href="{{route('contact')}}">Contact Us</a></div>
				</div>
			</div>
		</div>
        <!-- //Get Now Block -->
    </div>
</div>
