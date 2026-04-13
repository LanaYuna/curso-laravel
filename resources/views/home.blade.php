@extends('layouts.default')

@section('header')
    <h2>This is the header</h2>
@endsection

@section('main')
    <h1>This is the main</h1>
    
    <a href="{{ route("testpage") }}">Go to test page</a>

    <form action='formsubmitted' method="post">
        @csrf
        <br><br>
        <label for="fullname">Full name:</label>
        <input type="text" id="fullname" name="fullname" placholder="Type your full name" required><br><br>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" placholder="Type your e-mail" required>
        <button type="submit">Submit</button>
    </form>
@endsection

@section('footer')
    <p>This is the footer</p>
@endsection
  
