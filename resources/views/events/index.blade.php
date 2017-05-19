@extends('layout.app')

@section('content')
<h1>{{ $events->count()." ". str_plural('Evenement', $events->count()) }}</h1>

    {{--<a href="{{ route('events.create') }}">Créer un évènement</a>--}}
    @if(! ($events)->isEmpy())
    <ul>
    @foreach($events as $event)
            <li><a href="{{ route('event_path', ['event' =>$event->id]) }}">{{ $event->title }}</a></li>
    @endforeach
    </ul>
    @else
    <p> Aucun évènement pour le moment</p>
    @endif

@stop