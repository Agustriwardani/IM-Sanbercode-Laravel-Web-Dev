@extends('layouts.master')

@section('title')
    <h1>Register</h1>
@endsection

@section('content')
    <form action="/welcome" method="post">
        @csrf

        <label> First Name:</label>
        <input type="text" name="fname" />
        <br>
        <br>

        <label> Last Name:</label>
        <input type="text" name="lname" />
        <br>
        <br>

        <label>Gender: </label>
        <br>
        <input type="radio" name="gender" value="Male">
        <br>
        <input type="radio" name="gender" value="Female">
        <br>
        <input type="radio" name="gender" value="Other">
        <br>
        <br>

        <label>Nationality:</label>
        <br>
        <select name="nationality">
            <option value="1">Indonesian</option>
            <option value="2">Malaysian</option>
            <option value="3">Thailand</option>
        </select>
        <br>
        <br>
        <label>Language Spoken:</label>
        <br>
        <input type="checkbox" name="language">
        <label>Bahasa Indonesia</label>
        <br>
        <input type="checkbox" name="language">
        <label>English</label>
        <br>
        <input type="checkbox" name="language">
        <label>Other</label>
        <br>
        <br>
        <label>Bio: </label>
        <br>
        <textarea cols="30" rows="5"></textarea>
        <br>
        <br>

        <input type="submit" value="submit" />
    </form>
@endsection
