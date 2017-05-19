@extends('layout.app')

@section('content')
    <h1>Editer l'évènement #{{ $event->id }}</h1>

    <form action="{{ route('events.update',$event) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title" class="control-label sr-only">Titre</label>
            <input id="title" type="text" name="title" value="{{ old('title') ?: $event->title}}" placeholder="Titre de l'évènement" class="form-control">
            {!!   $errors->first('title', '<span class=help-block class="error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="description" class="control-label sr-only">Description</label>
            <textarea class="form-control" placeholder="description de l'évènement"  id="description" cols="30" rows="10" name="description" >{{ old('description') ?: $event->description }}</textarea>
            {!! $errors->first('description', '<span class=help-block class="error">:message</span>') !!}
        </div>

        <div class="form-group">
            <input type="submit" value="Valider" class="btn btn-primary btn-block">
        </div>
    </form>

<a href="{{ route('events_path') }}">Annuler</a>