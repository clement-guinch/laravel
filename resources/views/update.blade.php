@extends('template.master')

@section('title' , 'Home')

@section('content')
  <h1>Mise à jour</h1>
  <form class="" action="/updateserieaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <input required type="text" name="title" value="{{ $serie->title }}">
    <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
    <select name="actors">
    @foreach ($actors as $actor)
      @if ($actor->id == $serie->actors[0]->id)
        <option selected value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
      @else
        <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
      @endif
    @endforeach
  </select>
  <select class="" name="genres">
    @foreach ($genres as $genre)
      @if ($genre->id == $serie->genres[0]->id)
        <option selected value="{{ $genre->id }}">{{ $genre->completeName() }}</option>
      @else
        <option value="{{ $genre->id }}">{{ $genre->completeName() }}</option>
      @endif
    @endforeach
  </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
