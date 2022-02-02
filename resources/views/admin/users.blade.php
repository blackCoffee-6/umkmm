@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 7rem; min-height: 100vh">
        <h1>Users</h1>

        <table class="table table-striped my-3">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 10%" scope="col">#</th>
                    <th style="width: 35%" scope="col">Name</th>
                    <th style="width: 35%" scope="col">Email</th>
                    <th style="width: 35%" scope="col">Address</th>
                    <th style="width: 35%" scope="col">Phone Number</th>
                    <th style="width: 20%" scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                @foreach ($users as $user)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td class="btn-group text-center">
                            <a class="btn btn-primary mx-2 rounded" href="/admin-users/transactions/{{ $user->id }}">Transactions</a>
                            <button type="button" class="btn btn-danger rounded" data-toggle="modal"
                                data-target="#deleteUser{{ $user->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1"
                                aria-labelledby="deleteUser{{ $user->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteUser{{ $user->id }}Label">
                                                Delete {{ $user->name }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-danger">Are you sure you want to delete
                                                "{{ $user->name }}"?</h3>
                                            <p>Every transaction that this account have will be deleted</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <a href="/admin-delete-user/{{ $user->id }}" class="btn btn-danger">Delete
                                                User</a>
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
