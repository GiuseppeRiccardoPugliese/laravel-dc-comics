@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1 style="color: red" class="text-center fw-bold">Comic: [{{ $comic->id }}]</h1>

    <table class="table">
        <thead>
            <tr class="align-middle text-center">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price💶</th>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <td class="text-center">{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td class="text-center">{{ $comic->price }}</td>
            </tr>
        </tbody>
    </table>
@endsection
