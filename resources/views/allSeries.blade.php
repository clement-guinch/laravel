@extends('template.master')


@section('template.sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="logo">
    <img src="./image/unnamed.png">
    <div class="bigTitle">
      <h1>Toutes les Séries</h1>
    </div>
  </div>
  <h1>Liste :</h1>
      <table>
        <tr>
          <th>Titre :</th>
          <th>Date :</th>
            <th>Acteur :</th>
            <th>Genre :</th>
          <th>Supprimer :</th>
          <th>Mise à jour :</th>
        </tr>
        @foreach($series as $serie)
        <tr>
          <td><p>{{ $serie->title }}</p></td>
          <td><p>{{ $serie->publication_year }}</p></td>
          <td>
          @foreach ($serie->actors as $actor)
            {{ $actor->completeName() }}</br>
          @endforeach
          </td>
          <td>
            @foreach ($serie->genres as $genre)
            {{ $genre->completeName() }}</br>
          @endforeach
          </td>
          <td>
            <form class="" action="/deleteserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="X">
            </form>
            <td>
              <form class="" action="/updateserie" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $serie->id }}">
                <input type="submit" name="" value="MAJ">
              </form>
            </td>
          </td>
        </tr>
      @endforeach
</table>
@endsection
