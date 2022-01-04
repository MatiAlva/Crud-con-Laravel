@extends('layouts.app')

@section('title', 'Login')


@section('content')
    <h1> Login </h1>
    <form method="POST" action="">
        @csrf
        <input type="email" placeholder="Email" id="email" name="email" required>

        <input type="password" placeholder="Password" id="password" name="password" required>

        @error('message')
        <p> *{{ $message }}</p>
        @enderror

        <button type="submit"> Send </button>

    </form>

@endsection