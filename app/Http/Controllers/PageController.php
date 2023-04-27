<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function handleAction(Request $request)
    {
        $action = $request->query('action', 'home');

        if (!view()->exists($action)) {
            return view('404');
        }

        $authViews = ['profile', 'edit_profile', 'logout'];
        $guestViews = ['login', 'register'];

        if (in_array($action, $authViews) && !auth()->check()) {
            return view('home');
        }

        if (in_array($action, $guestViews) && auth()->check()) {
            return view('home');
        }

        return view($action);
    }
}
