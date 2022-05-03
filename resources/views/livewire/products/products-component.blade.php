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
    <div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block bottom-sm-1" id="bread">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->


        <div id="products-table">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="text-primary">Products</h2>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.addproducts') }}"
                                                class="btn btn-primary pull-right">Add New Product</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                    @endif
                                    <!-- Table -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Model</th>
                                            <th>Processor</th>
                                            <th>Harddisk</th>
                                            <th>Graphics</th>
                                            <th>Screen Size</th>
                                            <th>Quantity</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                            alt="" class="img-responsive" width="60"></td>
                                                    <td>{{ $product->type }}</td>
                                                    <td>{{ $product->model }}</td>
                                                    <td>{{ $product->processor }}</td>
                                                    <td>{{ $product->harddisk }}</td>
                                                    <td>{{ $product->graphics }}</td>
                                                    <td>{{ $product->screensize }}</td>
                                                    <td>{{ $product->quantity }}</td>
                                                    <td>
                                                        <div class="text-center">
                                                            <a
                                                                href="{{ route('admin.editproducts', ['product_slug' => $product->slug]) }}"><i
                                                                    class="fa fa-edit text-info"></i></a>
                                                            {{-- <a href="#"
                                                                wire:click.prevent='deleteProduct({{ $product->id }})'><i
                                                                    class="fa fa-times text-danger"></i></a> --}}

                                                            <!-- Button trigger modal -->
                                                            <a class=""
                                                                data-toggle="modal" data-target="#myModal">
                                                                <i
                                                                    class="fa fa-times text-danger"></i>
                                                        </a>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="myModal" tabindex="-1"
                                                                role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        {{-- <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close"><span
                                                                                    aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title"
                                                                                id="myModalLabel">Modal title</h4>
                                                                        </div> --}}
                                                                        <div class="modal-body">
                                                                            <h4 class="text-center text-primary">Are you sure you want to delete this product?</h4>
                                                                        </div>
                                                                        <div class="modal-footer text-center">
                                                                            <button type="button"
                                                                                class="btn btn-default"
                                                                                data-dismiss="modal" wire:click.prevent='deleteProduct({{ $product->id }})'>Yes</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary" data-dismiss="modal">No</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="text-center">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
