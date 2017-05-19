@extends('layout.app')

@section('content')
    <h1>Créer un évènement</h1>

    <form action="{{ route('events_path') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title" class="control-label sr-only">Titre</label>
            <input id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Titre de l'évènement" class="form-control">
            {!!   $errors->first('title', '<span class=help-block class="error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="description" class="control-label sr-only">Description</label>
            <textarea class="form-control" placeholder="description de l'évènement"  id="description" cols="30" rows="10" name="description" >{{ old('description') }}</textarea>
            {!! $errors->first('description', '<span class=help-block class="error">:message</span>') !!}
        </div>

        <div class="form-group">
            <input type="submit" value="Créer un évènement" class="btn btn-primary btn-block">
        </div>
    </form>

<a href="{{ route('events_path') }}">Annuler</a>