@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 7rem; min-height: 100vh">
        <h1>Categories</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#addCategory">
            Add Category
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin-add-category" method="POST">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped my-3">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 10%" scope="col">#</th>
                    <th style="width: 70%" scope="col">Category Name</th>
                    <th style="width: 20%" scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                @foreach ($categories as $category)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mx-2 rounded" data-toggle="modal"
                                    data-target="#updateCategory{{ $category->id }}">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="updateCategory{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="updateCategory{{ $category->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateCategory{{ $category->id }}Label">
                                                    "{{ $category->name }}" Category</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin-edit-category/{{ $category->id }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input placeholder="Name" id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ $category->name }}" required
                                                            autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Category</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger rounded" data-toggle="modal"
                                    data-target="#deleteCategory{{ $category->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="deleteCategory{{ $category->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteCategory{{ $category->id }}Label">
                                                    "{{ $category->name }}" Category</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <h3 class="text-danger">Are you sure you want to delete {{ $category->name }}?</h3>
                                               <p>By deleting "{{ $category->name }}" category, every item that got assigned with this category will be deleted</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <a href="/admin-delete-category/{{ $category->id }}" class="btn btn-danger">Delete Category</a>
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
