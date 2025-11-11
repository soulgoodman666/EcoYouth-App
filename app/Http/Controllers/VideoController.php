<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = require app_path('data/videoData.php');
        return view('video.index', compact('videos'));
    }

    public function show($id)
    {
        $videos = require app_path('data/videoData.php');

        if (!isset($videos[$id])) {
            abort(404, 'Video tidak ditemukan');
        }

        $item = $videos[$id];

        return view('video.show', compact('item'));
    }
}
