@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="col-md-6 offset-md-3">
    <h1>Register form</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="email" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                placeholder="confirm password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route('login') }}" class="ms-3">Already registered?</a>
    </form>
</div>

@endsection