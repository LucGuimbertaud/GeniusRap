<?php
use App\Track;
use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tracks', function (Request $request) {
    return Track::all();
});


Route::get('track/{id}', function (Request $request, $id) {
    return Track::findOrFail($id);
});

Route::get('top-tracks', function (Request $request) {
    return DB::table('tracks')
        ->select('title', 'id', 'artist_id', 'album_id', 'release_date', 'a.name')
        ->join('artists as a', 'a.name', '=', 'tracks.artist_id')
        ->take(5)
        ->get();

});

Route::get('artist/{id}', function(Request $request, $id) {
    return DB::table('artists')
        ->where('id', '=', $id)
        ->select('name')
        ->get();
});
