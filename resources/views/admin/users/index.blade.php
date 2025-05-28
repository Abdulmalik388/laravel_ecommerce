@extends('layouts.admin')

@section('content')
    <h2 class="mb-4">Users List</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
    </form>
</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
