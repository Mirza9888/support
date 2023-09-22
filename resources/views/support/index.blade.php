@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Urgency</th>
            <th>Attachment</th>
            <th>Reply</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->name}}</td>
                <td>{{$ticket->description}}</td>
                <td>{{$ticket->urgency}}</td>
                <td>{{$ticket->attachment}}</td>
                <td>
                    @if($ticket->reply)
                        {{$ticket->reply}}
                    @else
                        <a href="{{route('tickets.reply',$ticket->id)}}">Reply</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection