@extends('template.master')


@section('template.sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="logo">
    <img src="./image/unnamed.png">
    <div class="bigTitle">
      <h1>Genial tu participes !</h1>
    </div>
  </div>
  <form class="" action="/insertserie" method="post">
    @csrf
    <input required type="text" name="title" value="" placeholder="Titre">
    <input required type="text" name="number" value="" placeholder="Date">
    <select multiple class="" name="actors[]">
        @foreach ($actors as $actor)
          <option value="{{ $actor->id }}">
          {{ $actor->completeName() }}
          </option>
        @endforeach
    </select>
    <select multiple class="" name="genres[]">
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}">
          {{ $genre->completeName() }}
          </option>
        @endforeach
    </select>
    <input type="submit" name="" value="Ajouter">
  </form>
@endsection
