@extends('layouts.app', ['activePage' => 'users', 'title' => 'Swyft2Eat-Users', 'navName' => 'Users', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card data-tables">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Users</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.create') }}" class="btn btn-sm"><i class="mr-2 fa fa-user-plus"></i>Add administrator</a>
                            </div>
                        </div>
                    </div>

                    @include('alerts.success')

                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Status</th> -->
                                    <th>Role</th>
                                    <!-- <th>isAdmin</th> -->
                                    <th>Actions</th>
                                </tr>
                        </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number == null ? "None" : $user->phone_number }}</td>
                                    
                                        <td>{{ $user->role->role_name}}</td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
    {!! $users->links() !!}
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
