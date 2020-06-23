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
    return DB::table('tracks')
        ->join('artists', 'tracks.artist_id', '=', 'artists.id')
        ->select('tracks.title', 'tracks.id', 'tracks.artist_id', 'tracks.album_id', 'tracks.release_date', 'artists.name')
        ->get();
});


Route::get('track/{id}', function (Request $request, $id) {
    return DB::table('tracks')
        ->join('artists', 'tracks.artist_id', '=', 'artists.id')
        ->select('tracks.title', 'tracks.id', 'tracks.artist_id', 'tracks.album_id', 'tracks.release_date', 'tracks.lyrics', 'artists.name')
        ->where('tracks.id', '=', $id)
        ->get();

});

Route::get('top-tracks', function (Request $request) {
    return DB::table('tracks')
        ->join('artists', 'tracks.artist_id', '=', 'artists.id')
        ->select('tracks.title', 'tracks.id', 'tracks.artist_id', 'tracks.album_id', 'tracks.release_date', 'artists.name')
        ->take(5)
        ->get();
});

Route::get('artist/{id}', function(Request $request, $id) {
    return DB::table('artists')
        ->where('id', '=', $id)
        ->select('name')
        ->get();
});
