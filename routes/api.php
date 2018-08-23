<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::get('news', function (Request $request) {
    $data = Cache::remember('laravel-news::news', 60, function () {
        $rss = new SimpleXmlElement(file_get_contents('https://feed.laravel-news.com/'));
        return json_encode($rss);
    });
    return response()->json($data);
});
