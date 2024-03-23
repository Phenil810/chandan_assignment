@foreach($events as $event)
    <div>{{ $event->name }}</div>
    <div>{{ $event->location }}</div>
    <div>{{ $event->date }}</div>
@endforeach