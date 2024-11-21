<!-- resources/views/admin/components/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Components</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Preview Code</th>
            <th>Copy Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($components as $component)
        <tr>
            <td>{{ $component->name }}</td>
            <td>{{ $component->preview_code }}</td>
            <td>{{ $component->copy_code }}</td>
            <td>
                <!-- Add edit/delete buttons -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
