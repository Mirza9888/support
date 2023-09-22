@extends('layouts.app');
@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Add ticket</a>
    </div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead>
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Urgency</th>
                <th scope="col">Attachment</th>
                <th scope="col">User</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->description}}</td>
                    <td>{{$ticket->getTicketUrgency()}}</td>
                    <td>{{$ticket->attachment}}</td>
                    <td>{{$ticket->user->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
