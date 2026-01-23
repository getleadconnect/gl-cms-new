<?php

namespace App\Http\Controllers;

use App\Models\Sitemap;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $links = Sitemap::latest()->get();
  
        return response()->view('sitemap', [
            'links' => $links
        ])->header('Content-Type', 'text/xml');
    }
}
