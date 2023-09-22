@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Add user</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">User type</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user -> id}}</th>
                            <td>{{$user -> name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->is_admin ? 'Support' : 'Customer'}}</td>
                            <td class="d-flex gap-2">
{{--                            <a href="{{route('users.create',$user->id)}}" class="btn btn-primary">Add</a>--}}
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
