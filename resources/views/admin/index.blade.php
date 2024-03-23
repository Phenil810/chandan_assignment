@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Management</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <form action="{{ route('admin.assignRole', $user->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <select name="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="buyer">Buyer</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Assign Role</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
