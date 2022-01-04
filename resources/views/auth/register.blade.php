@extends('layouts.app')

@section('title', 'Register')


@section('content')
    <h1> Register </h1>

    <form method="POST" action="">
        @csrf
        <input type="text" placeholder="Name" id="name" name="name" required>

        @error('name')
        <p> *{{ $message }}</p>
        @enderror

        <input type="email" placeholder="Email" id="email" name="email" required>

        @error('email')
        <p> *{{ $message }}</p>
        @enderror

        <input type="password" placeholder="Password" id="password" name="password" required>

        @error('password')
        <p> *{{ $message }}</p>
        @enderror

        <input type="password" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation" required>

        <button type="submit"> Send </button>

    </form>

@endsection