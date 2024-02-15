@extends('layouts.main-layout')
@section('head')
    <title>LARAVEL-DC-COMICS</title>
@endsection
@section('content')
    <h1>Comics: {{ count($comics) }}</h1>
@endsection
