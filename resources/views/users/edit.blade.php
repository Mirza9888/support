@extends('layouts.app')
@section('content')
    <form class="row g-3">
        <div class="container">
        <div class="col-md-6">
        <div class="col-md-6">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Update user</button>
        </div>
        </div>
    </form>



@endsection
