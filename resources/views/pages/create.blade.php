@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1 style="color: red" class="text-center fw-bold">New Comic</h1>

    {{-- Validation request --}}
    @if ($errors->any())
        <div class="alert alert-primary">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <button type="submit" value="CREATE" class="btn btn-primary">Submit</button>
    </form>
@endsection
