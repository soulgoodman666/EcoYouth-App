<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = include app_path('Data/newsData.php');
        return view('news.index', compact('news')); // view sesuai dengan yang kamu kirim
    }

    public function show($id)
    {
        $news = include app_path('Data/newsData.php');

        if (!isset($news[$id])) {
            abort(404, 'Berita tidak ditemukan');
        }

        $item = $news[$id];
        return view('news.show', compact('item')); // gunakan jika ada halaman detail
    }
}
