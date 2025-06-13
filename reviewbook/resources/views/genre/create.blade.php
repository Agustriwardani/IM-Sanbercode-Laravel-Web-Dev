@extends('layouts.master')

@section('title')
    <h1>Create Genre</h1>
@endsection

@section('content')
    <h1>Create Genre </h1>
    <form action="/genre" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class=" mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
        </div>
        <div class="mb-3">
            <label class=" col-form-label">Description</label>
            <textarea class="form-control" cols="1" rows="3" name="description"></textarea>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
@endsection
