<?php

namespace App\Http\Controllers;

use App\Artist;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;

class ArtistSearchController extends Controller
{
    public function index(Request $request)
  {
    $results = (new Search())
    ->registerModel(Artist::class, ['name'])
    ->search($request->input('query'));

    return response()->json($results);
  }
}
