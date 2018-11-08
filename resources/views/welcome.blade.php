
@extends('template.master')


@section('template.sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="logo">
    <img src="./image/unnamed.png">
    <div class="bigTitle">
      <h1>Bienvenue !</h1>
    </div>
  </div>
@endsection
