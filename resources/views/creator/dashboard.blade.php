@extends('layouts.app') <!-- Use your main layout file -->

@section('content')
    <h1>Creator Dashboard</h1>
    <a href="{{ route('creator.create') }}">Add New Component</a>
    <ul>
        @foreach ($components as $component)
            <li>{{ $component->name }}</li>
        @endforeach
    </ul>
@endsection
