@extends('admin.master')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="active">Users</li>
            </ul>
        </div>
        <div>
            <a href="{{ route('users.create') }}" class="btn btn-success py-2 my-2">Add</a>
        </div>
    </div>

    <div class="container">
        <table id="user-table" class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Discount(percentage)</th>
                <th>image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->Email }}</td>
                    <td><img src="{{ $user->image }}" class="thumbnail" width="40" height="40" alt=""></td>
                    <td class="pull-left d-flex">
                        <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <a type="submit" class="btn btn-danger ml-2">Delete</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#user-table').dataTable();
        })
    </script>
@endsection