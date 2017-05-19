@extends('layout.app')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p> {{ $event->description }}</p>
    <a class="btn btn-default" href="{{ route('events.edit',$event) }}">Edition</a>

    <form action="{{ route('events.destroy',$event) }}" method="POST" class="inline-block">
        {{csrf_field()}}
        {{ method_field('DELETE') }}
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>
    <hr>
    <p href="{{ route('events_path')  }}">Tous les évènements</p>
@stop