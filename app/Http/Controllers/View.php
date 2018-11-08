<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Serie as Serie;

class View extends Controller
{
    public function home(){
      return view('welcome');
    }
    public function addSeries(){
      $actors = \App\Actor::all();
      $genres = \App\Genre::all();
      return view('addSeries', [
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function addActor(){
      $actors = \App\Actor::all();
      return view ('addActor',
      [
        "actors" => $actors
      ]);
    }
    public function addGenre(){
      $genres = \App\Genre::all();
      return view ('addGenre',
      [
        "genres" => $genres,
      ]);
    }

    public function series(){
      // get all series from series tables via Serie Model
      $series = Serie::all();
      return view('allSeries', ['series' => $series]);
    }
    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $actors = \App\Actor::all();
      $genres = \App\Genre::all();

      return view('update',
      [
        'serie'=> $serie,
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function updateActor(Request $request)
    {
      $actor = \App\Actor::find($request->input('id'));

      return view('updateactor',
      [
        "actor" => $actor,
      ]);
    }
    public function updateGenre(Request $request)
    {
      $genre = \App\Genre::find($request->input('id'));

      return view('updategenre',
      [
        "genre" => $genre,
      ]);
    }
}
