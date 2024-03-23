@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Event</h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
