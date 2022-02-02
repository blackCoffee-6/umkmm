@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 7rem; min-height: 100vh">
        <h1>Item Assign</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#addItemAssign">
            Add Item Assign
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addItemAssign" tabindex="-1" aria-labelledby="addItemAssignLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addItemAssignLabel">Add Item Assign</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin-add-item-assigned" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <select class="form-control" name="product_id" id="">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <select class="form-control" name="category_id" id="">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Item Assign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped my-3">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 10%" scope="col">#</th>
                    <th style="width: 35%" scope="col">Product Name</th>
                    <th style="width: 35%" scope="col">Category Name</th>
                    <th style="width: 20%" scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                @foreach ($items as $item)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mx-2 rounded" data-toggle="modal"
                                    data-target="#updateproduct{{ $item->id }}">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="updateproduct{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="updateproduct{{ $item->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateproduct{{ $item->id }}Label">
                                                    "{{ $item->product->name }}" product</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin-edit-item-assigned/{{ $item->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Product Name</label>
                                                        <select class="form-control" name="product_id" id="">
                                                            @foreach ($products as $product)
                                                                @if ($product->id == $item->product_id)
                                                                    <option value="{{ $product->id }}" selected>
                                                                        {{ $product->name }}</option>
                                                                @else
                                                                    <option value="{{ $product->id }}">
                                                                        {{ $product->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">Category Name</label>
                                                        <select class="form-control" name="category_id" id="">
                                                            @foreach ($categories as $category)
                                                                @if ($category->id == $item->category_id)
                                                                    <option value="{{ $category->id }}" selected>
                                                                        {{ $category->name }}</option>
                                                                @else
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Item Assign</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger rounded" data-toggle="modal"
                                    data-target="#deleteproduct{{ $item->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteproduct{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="deleteproduct{{ $item->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteproduct{{ $item->id }}Label">
                                                    "{{ $item->product->name }}" product</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-danger">Are you sure you want to delete
                                                    "{{ $item->product->name }}" with category "{{ $item->category->name }}"?</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/admin-delete-item-assigned/{{ $item->id }}"
                                                    class="btn btn-danger">Delete Item Assign</a>
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
