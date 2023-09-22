@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST"
              action="{{ isset($user) ?   route('users.update',$user->id) :route ('users.create',$user->id)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name}}">
            </div>
            <div class="cold-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       value="{{ isset ($user) ? $user->email:''}}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update User' : 'Add User' }}</button>
        </form>
    </div>

@endsection
