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
						<li class="active">Laptop</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->

        <div class="block mt-0">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-3">
						<div class="">
                            <livewire:sidemenu />
                        </div>
					</div>
					<div class="divider-lg visible-xs"></div>
					<div class="col-md-8 col-lg-9">
                        {{-- <h1><span class="color">Laptop</span></h1> --}}
						<div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4">
                                    <a href="{{ route('monitor.details', ['slug' => $product->slug]) }}">
                                        <div class="">
                                            <img src="{{ asset('assets/images/products') }}/{{$product->image}}"
                                                class="img-responsive" alt="...">
                                            <p class="text-center text-primary">{{$product->name}}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {{ $products->links() }}
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