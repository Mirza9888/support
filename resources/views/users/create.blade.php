@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST"
              action="{{ route('users.store') }}">
            @csrf
            @method('POST')
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
            <div class="cold-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       value="{{ old('email') }}">
            </div>
            @error('email')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
            <div class="cold-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            @error('password')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror

            <select class="form-select mt-2" aria-label="Default select example" name="is_admin">
                <option selected disabled>Please select user type</option>
                <option value="0">Customer</option>
                <option value="1">Admin</option>
            </select>
            @error('is_admin')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-2">Add user</button>
            </div>
        </form>
    </div>

@endsection
