@extends('layouts.master')

@section('title')
    <h1>Genre</h1>
@endsection

@section('content')
    <h1>Genre Book </h1>
    <a href="/genre/create">
        <button type="button" class="btn btn-info">Create Genre</button>
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>

                        <a href="/genre/{{ $post->id }}">
                            <button type="button" class="btn btn-success">Detail</button>
                        </a>
                        <a href="/genre/{{ $post->id }}/edit">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>


                        <form action="/genre/{{ $post->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
