@extends('layouts.main-layout')
@section('head')
    <title>LARAVEL-DC-COMICS</title>
@endsection
@section('content')
    <h1 style="color: red" class="text-center fw-bold">Comics: {{ count($comics) }}</h1>

    {{-- href del tag a che si riferisce alla rotta della mia page CREATE CRUD --}}
    <a href="{{ route('comics.create') }}">CREATE</a>

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
            @foreach ($comics as $comic)
                <tr class="align-middle">
                    <td class="text-center">{{ $comic->id }}</td>
                    {{-- href del tag a che si riferisce alla rotta della mia page SHOW CRUD --}}
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}

                            <a class="text-bg-primary text-decoration-none mx-2"
                                href="{{ route('comics.edit', $comic->id) }}">
                                EDIT
                            </a>

                            {{-- action che si riferisce alla rotta DELETE --}}
                            <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="mx-2" value="DELETE">
                            </form>

                        </a>
                    </td>
                    <td>{{ $comic->description }}</td>
                    <td class="text-center">{{ $comic->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
