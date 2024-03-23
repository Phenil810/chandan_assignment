@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buyer Events</h1>
        <ul>
            @foreach($events as $event)
                <li>{{ $event->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
