<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAll(Request $request)
    {
        $news = News::all();

        return view('news', compact('news'));
    }

    public function get(int $id, Request $request)
    {
        $news = News::find($id);

        return redirect()->to('?action=view_news&id=' . $id)->with('news', $news);
    }
}
