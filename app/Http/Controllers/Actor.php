<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actor extends Controller
{
  public function insertOne(Request $request)
  {
    $newSerie = new \App\Actor;
    $newSerie->name = $request->input('name');
    $newSerie->save();
    return redirect('/addActor');
  }
  public function deleteOne(Request $request)
  {
    // \App\Serie::destroy($request->input('id'));
    $id = $request->id;
    $Actor = \App\Actor::find($id);
    $Actor->delete();
    return back();
  }
  public function updateOne(Request $request)
  {
    $actor = \App\Actor::find($request->input('id'));
    $actor->name = $request->input('title');
    $actor->save();
    return redirect('/addActor');
  }
}
