<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
  public function insertOne(Request $request)
  {
    $newSerie = new \App\Genre;
    $newSerie->name = $request->input('name');
    $newSerie->save();
    return redirect('/addGenre');
  }
  public function deleteOne(Request $request)
  {
    $id = $request->id;
    $genre = \App\Genre::find($id);
    $genre->delete();
    return back();
  }
  public function updateOne(Request $request)
  {
    $genre = \App\Genre::find($request->input('id'));
    $genre->name = $request->input('title');
    $genre->save();
    return redirect('/addGenre');
  }
}
