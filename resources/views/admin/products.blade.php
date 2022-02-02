@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 7rem; min-height: 100vh">
        <h1>Products</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#addProduct">
            Add Product
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin-add-product" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input placeholder="Name" id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name" required
                                    autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input placeholder="Price $" id="price" type="text"
                                    class="form-control @error('price') is-invalid @enderror" name="price" required
                                    autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input placeholder="Stock" id="stock" type="numeric"
                                    class="form-control @error('stock') is-invalid @enderror" name="stock" required
                                    autocomplete="stock" autofocus>

                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea placeholder="Description"
                                    class="form-control @error('description') is-invalid @enderror" name="description" id=""
                                    cols="30" rows="5" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input placeholder="Image" id="image" type="file"
                                    class="form-control-file @error('image') is-invalid @enderror" name="image" required
                                    autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped my-3">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 5%" scope="col">#</th>
                    <th style="width: 15%" scope="col">image</th>
                    <th style="width: 10%" scope="col">Product Name</th>
                    <th style="width: 10%" scope="col">Price</th>
                    <th style="width: 10%" scope="col">Stock</th>
                    <th style="width: 30%" scope="col">Description</th>
                    <th style="width: 20%" scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                @foreach ($products as $product)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>
                            <img class="img-fluid" src="{{ asset("assets/$product->image") }}" alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mx-2 rounded" data-toggle="modal"
                                    data-target="#updateproduct{{ $product->id }}">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="updateproduct{{ $product->id }}" tabindex="-1"
                                    aria-labelledby="updateproduct{{ $product->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateproduct{{ $product->id }}Label">
                                                    "{{ $product->name }}" product</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin-edit-product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input placeholder="Name" id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input placeholder="Price $" id="price" type="text"
                                                            class="form-control @error('price') is-invalid @enderror"
                                                            name="price" value="{{ $product->price }}" required autocomplete="price" autofocus>

                                                        @error('price')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="stock">Stock</label>
                                                        <input placeholder="Stock" id="stock" type="numeric"
                                                            class="form-control @error('stock') is-invalid @enderror"
                                                            name="stock" value="{{ $product->stock }}" required autocomplete="stock" autofocus>

                                                        @error('stock')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea placeholder="Description"
                                                            class="form-control @error('description') is-invalid @enderror"
                                                            name="description" id="" cols="30" rows="5" required
                                                            autocomplete="description" autofocus>{{ $product->description }}</textarea>

                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input placeholder="Image" id="image" type="file"
                                                            class="form-control-file @error('image') is-invalid @enderror"
                                                            name="image">

                                                        @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger rounded" data-toggle="modal"
                                    data-target="#deleteproduct{{ $product->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteproduct{{ $product->id }}" tabindex="-1"
                                    aria-labelledby="deleteproduct{{ $product->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteproduct{{ $product->id }}Label">
                                                    "{{ $product->name }}" product</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-danger">Are you sure you want to delete
                                                    {{ $product->name }}?</h3>
                                                <p>By deleting "{{ $product->name }}" product, every transaction with this product will be deleted</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/admin-delete-product/{{ $product->id }}"
                                                    class="btn btn-danger">Delete Product</a>
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
@endsection
