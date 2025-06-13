@extends('layouts.master')

@section('title')
    <h1>Detail Genre</h1>
@endsection

@section('content')
    <h1>Name Genre : {{ $post->name }}</h1>
    <p> Description Genre :{{ $post->description }}</p>
@endsection
