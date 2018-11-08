<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    public function insertOne(Request $request)
    {
      $newSerie = new \App\Serie;
      $newSerie->title = $request->input('title');
      $newSerie->publication_year = $_POST['number'];
      $newSerie->save();
      $newSerie->actors()->attach($request->input('actors'));
      $newSerie->genres()->attach($request->input('genres'));
      return redirect('/series');
    }
    public function deleteOne(Request $request)
    {
      // \App\Serie::destroy($request->input('id'));
      $id = $request->id;
      $Serie = \App\Serie::find($id);
      $Serie->delete();
      return back();
    }
    public function updateOne(Request $request)
    {
      $id = $request->id;
      $Serie = \App\Serie::find($id);
      $Serie->title = $request->input('title');
      $Serie->publication_year = $request->input('publication_year');
      $Serie->save();
      $Serie->actors()->detach();
      $Serie->genres()->detach();
      $Serie->actors()->attach($request->input('actors'));
      $Serie->genres()->attach($request->input('genres'));

      return redirect('/series');
    }
}
