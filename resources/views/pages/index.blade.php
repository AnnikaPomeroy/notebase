@extends('layout.layout', ['title' => 'Welcome'])

@section('head-content')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('body-content')
    @include('partials.header')
    <h1>Welcome to notebase</h1>
    @include('partials.footer')
@endsection
