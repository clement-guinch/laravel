@extends('template.master')

@section('title' , 'Home')

@section('content')
  <h1>Mise à jour d'un genre</h1>
  <form class="" action="/updategenreaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $genre->id }}">
    <input required type="text" name="title" value="{{ $genre->name }}">
    <input type="submit" name="" value="Modifier">
  </form>
@endsection
