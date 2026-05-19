@extends('layouts.auth')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-3">Register</h2>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form>
</div>
@endsection