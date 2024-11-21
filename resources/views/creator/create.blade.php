@extends('layouts.app') <!-- Use your main layout file -->

@section('content')
    <h1>Create New Component</h1>
    <form action="{{ route('creator.store') }}" method="POST">
        @csrf
        <label for="name">Component Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="preview_code">Preview Code</label>
        <textarea name="preview_code" id="preview_code" required></textarea>
        
        <label for="copy_code">Code to Copy</label>
        <textarea name="copy_code" id="copy_code" required></textarea>
        
        <button type="submit">Save</button>
    </form>
@endsection
