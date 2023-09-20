@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Actions</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user -> id}}</th>
                            <td>{{$user -> name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->is_admin}}</td>
                            <td>-</td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
