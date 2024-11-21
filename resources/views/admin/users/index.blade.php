<!-- resources/views/admin/users/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <!-- Add edit/delete buttons -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
