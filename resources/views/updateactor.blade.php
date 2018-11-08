@extends('template.master')

@section('title' , 'Home')

@section('content')
  <h1>Mise à jour d'un acteur</h1>
  <form class="" action="/updateactoraction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $actor->id }}">
    <input required type="text" name="title" value="{{ $actor->name }}">
    <input type="submit" name="" value="Modifier">
  </form>
@endsection
