<?php

namespace PeterBrinck\NovaLaravelNews\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class NewsController
{
    public function index()
    {
        $data = Cache::remember('laravel-news::news', 60, function () {
            $rss = new \SimpleXmlElement(file_get_contents('https://feed.laravel-news.com/'));
            return json_encode($rss);
        });
        return response()->json($data);
    }
}
