@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <form method="POST" action="{{route('tickets.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="col-md-1">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" required> </textarea>
            </div>
            <div class="form-group">
                <label for="urgency">Urgency</label>
                <select class="form-select" aria-label="Default select example" name="urgency" >
                    <option selected>How urgent it is?</option>
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-md-6" for="description">Question field</label>
                <textarea name="question" class="form-control" required> </textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
            <div class="col-md-6">
                <label for="attachment">Attachment</label>
                <input type="file" name="attachment" class="form-control-file">
            </div>
        </form>
    </div>
    </div>

@endsection