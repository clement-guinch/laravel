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
  <form class="" action="/insertactor" method="post">
    @csrf
    <input required type="text" name="name" value="" placeholder="Nom">
    <input type="submit" name="" value="Ajouter">
  </form>
  <h1>Liste :</h1>
      <table>
        <tr>
          <th>Acteurs :</th>
          <th>Supprimer :</th>
          <th>Mise à jour :</th>
        </tr>
        @foreach($actors as $actor)
        <tr>
          <td><p>{{ $actor->name }}</p></td>
          <td>
            <form class="" action="/deleteactor" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $actor->id }}">
              <input type="submit" name="" value="X">
            </form>
          </td>
            <td>
              <form class="" action="/updateactor" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $actor->id }}">
                <input type="submit" name="" value="MAJ">
              </form>
            </td>
        </tr>
      @endforeach
</table>
@endsection
