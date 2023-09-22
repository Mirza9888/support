@extends('layouts.app')
@section('content')
    <div class="container">

        <form method="POST" action="{{route('tickets.saveReply',$ticket->id)}}">
        @method('PUT')
        <div class="form-group">
            <label for="reply">Reply</label>
            <textarea name="reply" class="form-control"></textarea>}

        </div>
            <button type="submit" class="btn btn-primary">Answer</button>
        </form>

    </div>
@endsection