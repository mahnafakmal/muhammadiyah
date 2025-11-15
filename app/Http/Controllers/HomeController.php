<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mendapatkan postingan utama (highlight)
        $mainHighlight = Post::where('is_highlight', true)
                            ->whereNotNull('published_at')
                            ->latest()
                            ->first();

        // Mendapatkan 5 postingan populer untuk sidebar
        $popularPosts = Post::whereNotNull('published_at')
                            ->orderBy('views', 'desc')
                            ->take(5)
                            ->get();

        // Mendapatkan 4 berita terbaru untuk grid di bawah highlight
        $recentNews = Post::whereNotNull('published_at')
                          ->latest()
                          ->take(4)
                          ->get();

        return view('home', [
            'mainHighlight' => $mainHighlight,
            'popularPosts' => $popularPosts,
            'recentNews' => $recentNews,
        ]);
    }
}